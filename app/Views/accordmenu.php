<h3>Grand MA3 onPC ver 1.8.1.0</h3>
<h4>Menu structure</h4>
<h5>This is the default showfile menu tree</h5>
<div class="child-container">
    <div class="col">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <?php foreach ($files as $egyfile): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading<?= $egyfile['sorszam']; ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse<?= $egyfile['sorszam']; ?>" aria-expanded="false"
                                aria-controls="flush-collapse<?= $egyfile['sorszam']; ?>"><b>
                                <?= esc($egyfile['filename']); ?>
                            </b>
                        </button>
                    </h2>
                    <div id="flush-collapse<?= $egyfile['sorszam']; ?>" class="accordion-collapse collapse"
                         aria-labelledby="flush-heading<?= $egyfile['sorszam']; ?>"
                         data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> <?= ($egyfile['content']); ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>