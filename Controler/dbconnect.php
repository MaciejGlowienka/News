<?php

    $user = 'root';

    $pass = '';

    $dbname = 'news_users';

    try {
    $pdo = new PDO('mysql:host=localhost; dbname='.$dbname.';charset=utf8', $user, $pass);

    //echo 'Connected';
    }
    catch (PDOException $error) {
        echo 'Connect error: ' . $error->getMessage();
        exit;
    };

    function pre($var){

        echo "<pre>";
        print_r($var);
        echo "</pre>";

    }
