<?php
function setScan($idUser){
    include "connexion.php";
    
    $dateValid = date('y-m-d H:i:s');
    // $date = $dateValid.toString;
    // $pass = $_POST["pass"];
    $loadValid = 2;
    $_POST = json_decode(file_get_contents('php://input'), true);
    echo $_POST;

            if ($db) {
                // $req = $db->prepare("UPDATE scan SET valider = 3 WHERE idUser = ?");
                $req = $db->prepare("UPDATE scan SET valider = 3, date_valid = ? WHERE idUser = ? AND valider = ?");
                // UPDATE scan SET valider = 3, date_valid = '2022-12-12 11:30:20' WHERE idUser = 1;
                $req->execute(array($dateValid, $idUser, $loadValid));
                // echo $array;
                // return $array;
            }
        }
?>