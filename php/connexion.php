<?php

    $host = "127.0.0.1";
    $dbname = "ceramics";
    $user = "root";
    $pwd = "";

        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname",$user,$pwd);
            // echo 'connected';
        } catch (PDOException $th) {
            echo "Error: ".$th->getMessage();
        }
?>