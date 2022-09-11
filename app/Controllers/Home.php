<?php

namespace App\Controllers;

use Config\App;
use DirectoryIterator;

class Home extends BaseController
{
    public function index()
    {
        $data = $this->getfilenames();
        echo view('things/header.php');
        echo view('accordmenu', $data);
        echo view('things/footer');
    }

    public function getfilenames(): array
    {
        $files = array();
        $i = 0;
        $files['mappa'] = 'oldalak';
        foreach (new DirectoryIterator('../app/Views/oldalak') as $file) {
            if ($file->isDot()) continue;
            $filename = $file->getFilename();
            $files['files'][$i]['sorszam'] = $i;
            $files['files'][$i]['filename'] = str_ireplace('_', '. ', str_replace('.php', '', $filename));
            $files['files'][$i]['content'] = view($files['mappa'] . '/' . $filename);
            $i += 1;
        }
        // d($files);
        return $files;
    }
}
