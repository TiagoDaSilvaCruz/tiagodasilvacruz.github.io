<?php

    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "codepedia";


    $con = new mysqli($host, $user, $password, $database);

    if ($con->connect_errno) {
        echo "Failed to connect to MySQL: " . $con->connect_error;
    }
    else{
        echo 'sucesso';
    }
    
?>
