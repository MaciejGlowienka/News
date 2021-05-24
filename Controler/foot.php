<div class="background-foot">
    <div class="foot">

        <?php

        if (isset($_SESSION['login'], $_SESSION['pass'])) {
            echo 'Jesteś zalogowany jako '.$_SESSION['login'].' ';
            echo '<a href="/News/side/logout.php"><button>Wyloguj</button></a>';
        } else {
            echo 'Nie jesteś zalogowany';
        }
        ?>

        <br>
        Autor: Maciej Głowienka
    </div>
</div>