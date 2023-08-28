<?php
    include "connexion.php";

            if ($db) {

                $req = $db->prepare("SELECT * FROM utilisateurs");
                $req->execute();
                $counter = $req->rowCount();
                // echo $array;
                // return $array;
            }
            // echo json_encode($array, $counter);
            
    echo json_encode($counter);
?>