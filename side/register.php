<html>

<head>

    <title>Logowanie</title>
    <meta charset='utf-8'>

    <link href="/News/css/style.css" rel="stylesheet">

</head>

<body>

    <?php     require '../Controler/header.php';?>

    <div class="form-box">

        <form method="post" action="/News/side/register.php">

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

            <input type="submit" value="Zarejestruj się" class="form-submit fade-white">

        </form>
        <?php var_dump($_POST);



        if (isset($_POST['login']) && isset($_POST['pass'])) {
            if (empty($_POST['login']) || empty($_POST['pass'])) {

                echo 'Proszę wypełnić oba pola';
            } else {
            
                require_once 'dbconnect.php';

                $wynik = "INSERT INTO `users` (`idUser`, `Login`, `Password`) VALUES (?,?,?);";
                $stmt = $pdo -> prepare($wynik);
                $stmt -> execute([NULL, $_POST['login'], md5($_POST['pass'])]);
                
                header("Location: /News/side/login.php");

            }
        } else echo 'Proszę uzupełnić dane logowania';


        ?>

    </div>


    <?php 
            require '../Controler/foot.php';
?>










</body>

</html>