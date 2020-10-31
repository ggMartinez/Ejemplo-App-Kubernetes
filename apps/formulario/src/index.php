<?php
    require('database.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require('templates/index.php');
    }
    else{

        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);

        if (mysqli_connect_errno()) {
            echo  mysql_connect_error();
            die();
        }

        if(mysqli_query($link, "INSERT INTO persona(nombre,apellido) VALUES ('" . $nombre . "','" . $apellido . "')") === TRUE)
            echo "Listo";
        else
            echo "Hubo un error";


    }