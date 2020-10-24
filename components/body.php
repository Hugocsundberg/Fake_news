<div class="gridContainer">

    <?php foreach ($data as $row) : ?>
        <div class="card <?= $row->color ?>">
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
            <div class="card_text-fade-away w-100 <?php
                                                    if ($row->color === 'blue') {
                                                        echo 'linear_gradient_blue';
                                                    } elseif ($row->color === 'green') {
                                                        echo 'linear_gradient_green';
                                                    } elseif ($row->color === 'red') {
                                                        echo 'linear_gradient_red';
                                                    }
                                                    ?>">
                <div class="card_expand-icon"></div>
            </div>
            <div class="card_bottom-section w-100">
                <div class="card_author"><?= $getAuthor($row->author_id) ?></div>
                <div class="card_date"><?php echo gmdate('Y-m-d', $row->date) ?>
                </div>
            </div>
        </div>


    <?php endforeach ?> ?>