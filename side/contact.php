<html>

<head>

    <title>Logowanie</title>
    <meta charset='utf-8'>

    <link href="/News/css/style.css" rel="stylesheet">

</head>

<body>

    <?php     require '../Controler/header.php';
        if(isset($_SESSION['login']) == NULL):
        ?>

        <a href="/News/side/login.php">
            <div class="menu-button fade-white form-box">
                <div class="menu-text">
                    Musisz się zalogować
                </div>
            </div>
        </a>

            <?php else: ?>

    <div class="form-box">

    <a href="/News/side/adding.php">
            <div class="menu-button fade-white form-box">
                <div class="menu-text">
                    Dodaj post
                </div>
            </div>
        </a>

    </div>

    <?php endif; ?>

    <?php 
            require '../Controler/foot.php';
?>










</body>

</html>