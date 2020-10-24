<div class="gridContainer">
    // print_r($row->headline);

    <?php foreach ($data as $row) : ?>
        <div class="card">
            <div class="card_top-section w-100">
                <div class="card_top-text h-100">
                    <p><?= $row->headline ?></p>
                </div>
                <div class="card_top-icons h-100">
                    <p><?= $row->likes ?></p>
                    <div class="icon1"></div>
                    <div class="icon2"></div>
                </div>
            </div>
            <div class="card_image"></div>
            <div class="card_main-content">
                <p>
                    <?= $row->content ?>
                </p>
            </div>
            <div class="card_text-fade-away w-100">
                <div class="card_expand-icon"></div>
            </div>
            <div class="card_bottom-section w-100">
                <div class="card_author"><?= $row->author ?></div>
                <div class="card_date"><?php echo gmdate('Y-m-d', $row->date) ?>
                </div>
            </div>
        </div>


    <?php endforeach ?> ?>