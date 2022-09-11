<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Support\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    public $eventData;
    public $beforeFindReturnData = false;
    protected $table = 'user';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $dateFormat = 'datetime';
    protected $allowedFields = [
        'name',
        'email',
        'country',
        'deleted_at',
    ];
    protected $beforeInsert = ['beforeInsertMethod'];
    protected $afterInsert = ['afterInsertMethod'];
    protected $beforeUpdate = ['beforeUpdateMethod'];
    protected $afterUpdate = ['afterUpdateMethod'];
    protected $beforeDelete = ['beforeDeleteMethod'];
    protected $afterDelete = ['afterDeleteMethod'];

    // Cache of the most recent eventData from a trigger
    protected $beforeFind = ['beforeFindMethod'];

    // Testing directive to set $returnData on beforeFind event
    protected $afterFind = ['afterFindMethod'];

    // Holds stuff for testing events
    protected $tokens = [];

    public function hasToken(string $token)
    {
        return in_array($token, $this->tokens, true);
    }

    protected function beforeInsertMethod(array $data)
    {
        $this->tokens[] = 'beforeInsert';
        $this->eventData = $data;

        return $data;
    }

    protected function afterInsertMethod(array $data)
    {
        $this->tokens[] = 'afterInsert';
        $this->eventData = $data;

        return $data;
    }

    protected function beforeUpdateMethod(array $data)
    {
        $this->tokens[] = 'beforeUpdate';
        $this->eventData = $data;

        return $data;
    }

    protected function afterUpdateMethod(array $data)
    {
        $this->tokens[] = 'afterUpdate';
        $this->eventData = $data;

        return $data;
    }

    protected function beforeDeleteMethod(array $data)
    {
        $this->tokens[] = 'beforeDelete';
        $this->eventData = $data;

        return $data;
    }

    protected function afterDeleteMethod(array $data)
    {
        $this->tokens[] = 'afterDelete';
        $this->eventData = $data;

        return $data;
    }

    protected function beforeFindMethod(array $data)
    {
        $this->tokens[] = 'beforeFind';
        $this->eventData = $data;

        if ($this->beforeFindReturnData) {
            $data['data'] = 'foobar';
            $data['returnData'] = true;
        }

        return $data;
    }

    protected function afterFindMethod(array $data)
    {
        $this->tokens[] = 'afterFind';
        $this->eventData = $data;

        return $data;
    }
}
