<div class="background">


    <?php
    require '../Controler/newsFetcher.php';

    foreach ($news as $news) {
    ?>
        <div class="news-display">
            <img src="..<?php echo $news['image']; ?>" alt="Brak obrazu" class="news-photo">
            <div class="news-text">
                <h3><?php echo $news['head']; ?></h3>
                <p><?php echo $news['content']; ?>
            </div>
        </div>
    <?php
    }
