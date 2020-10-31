<?php
    require('database.php');
    $link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);

    if (mysqli_connect_errno()) {
        echo  mysql_connect_error();
        die();
    }

    $result = mysqli_query($link, "SELECT * FROM persona");


    require('templates/index.php');