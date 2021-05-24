<html>

<head>

    <title>Logowanie</title>
    <meta charset='utf-8'>

    <link href="/News/css/style.css" rel="stylesheet">

</head>

<body>

    <?php     require '../Controler/header.php';?>

    <div class="form-box">

        <form method="post" action="/News/side/login.php">

            <div class="form-text fade-white">
                <div class="header-text">Login</div>
            </div>
            <input name="login" type="text" value="" class="form">

            <br><br><br>

            <div class="form-text fade-white">
                <div class="header-text">Hasło</div>
            </div>
            <input name="pass" type="password" value="" class="form">

            <br><br><br>

            <input type="submit" value="Zaloguj się" class="form-submit fade-white">

        </form>


        <?php 
        // var_dump($_POST);



        if (isset($_POST['login']) && isset($_POST['pass'])) {
            if (empty($_POST['login']) || empty($_POST['pass'])) {

                echo 'Proszę wypełnić oba pola';
            } else {

                require_once '../Controler/dbconnect.php';
                $login = $_POST['login'];
                $pass = md5($_POST['pass']);
                // echo $pass . "<br>";

                $requestLogin = "SELECT * FROM users WHERE login = :logi AND password = :pasy ";
                $wynik = $pdo->prepare($requestLogin);
                $wynik->bindParam('logi', $login);
                $wynik->bindParam('pasy', $pass);
                $wynik->execute();

                $user = $wynik -> fetchAll();
                
                pre($user);

                if ($user != NULL) {

                    session_start();
                    $_SESSION['login'] = $login;
                    $_SESSION['pass'] = $pass;
                    echo $_SESSION['login'];

                    header("Location: /News/side/news.php");
                    echo 'udało się';
                } else echo 'Proszę wpisać poprawne dane logowania';
            }
        } else echo 'Proszę uzupełnić dane logowania';


        ?>
        <br>
        Jeżeli nie masz jeszcze konta to je <a href="/News/side/register.php" style="color: blue;">załóż</a>


    </div>


    <?php 
            require '../Controler/foot.php';
?>










</body>

</html>