<html>

<head>

    <title>Dodawanie</title>
    <meta charset='utf-8'>

    <link href="/News/css/style.css" rel="stylesheet">

</head>

<body>

    <?php     require '../Controler/header.php';?>

    <div class="form-box">

        <form method="post" action="/News/side/adding.php">

            <div class="form-text fade-white">
                <div class="header-text">Temat</div>
            </div>
            <select name="topic" class="form">
                <option value="sport">sport</option>
                <option value="polityka">polityka</option>
                <option value="swiat">świat</option>
                <option value="gielda">giełda</option>
                <option value="muzyka">muzyka</option>
                <option value="celebryci">celebryci</option>
                <option value="moda">moda</option>
                <option value="technika">technika</option>
            </select>

            <br><br><br>

            <div class="form-text fade-white">
                <div class="header-text">Zdjęcie</div>
            </div>
            <input name="image" type="file" value="" class="form">

            <br><br><br>

            <div class="form-text fade-white">
                <div class="header-text">Nagłówek</div>
            </div>
            <input name="head" type="text" value="" class="form">

            <br><br><br>

            <div class="form-text fade-white">
                <div class="header-text">Treść</div>
            </div>
            <textarea name="content" type="text" value="" class="form-extended" maxlength="256"></textarea>

            <br><br><br>

            <input type="submit" value="Dodaj" class="form-submit fade-white">

        </form>

        <?php




    if (empty($_POST['topic']) || empty($_POST['image']) || empty($_POST['head']) || empty($_POST['content']) ) {

        echo 'Proszę wypełnić wszystkie pola';
    } else {
        $topic = $_POST['topic'];
        $image = $_POST['image'];
        $head = $_POST['head'];
        $content = $_POST['content'];

        

        var_dump($topic);

        require_once '../Controler/dbconnect.php';

        $requestLogin = "INSERT INTO `news` (`idNews`, `topic`, `image`, `head`, `content`) 
                        VALUES (NULL, :temat, :zdj, :nagl, :tresc)";
                $wynik = $pdo->prepare($requestLogin);
                $wynik->bindParam('temat', $topic);
                $wynik->bindParam('zdj', $image);
                $wynik->bindParam('nagl', $head);
                $wynik->bindParam('tresc', $content);
                $wynik->execute();
                
    }
    ?>

    </div>

   <?php require '../Controler/foot.php'; ?>

</body>

</html>
