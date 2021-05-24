<?php

if($_SESSION == NULL) {
    session_start();
}

$headName = array ("0"=>"News", "1"=>"Login", "2"=>"Contact");
$url = explode('/', $_SERVER['REQUEST_URI']);
?>


<div class="background-header">
    <div class="header">
        <?php   foreach($headName as $name) : ?>
            <?php   if(end($url) == strtolower($name).'.php'): ?>

                <div class="header-button fade-black">
                    <div class="header-text">
                        <?php echo $name; ?>
                    </div>
                </div>

            <?php   else : ?>

                <a href="/News/side/<?php echo strtolower($name); ?>.php" class="header-button fade-white">
                    <div class="header-text">
                        <?php echo $name; ?>
                    </div>
                </a>

            <?php   endif;    ?>
        <?php   endforeach;?>
    </div>
</div>