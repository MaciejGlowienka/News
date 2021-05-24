<?php

require '../Controler/dbconnect.php';

                $requestNews = "SELECT * FROM news";
                $wynik = $pdo->prepare($requestNews);
                $wynik->execute();

                $news = $wynik -> fetchAll();
                
                //pre($news);