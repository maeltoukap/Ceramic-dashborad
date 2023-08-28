<?php
    include "connexion.php";

            if ($db) {
                $req = $db->prepare("SELECT * FROM scan WHERE valider = 2");
                $req->execute();
                $array = $req->rowCount();
                // echo $array;
                // return $array;
            }
            echo json_encode($array);
            
?>