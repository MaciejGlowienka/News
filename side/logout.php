<?php
session_start();
session_destroy();

header("Location: /News/side/login.php");