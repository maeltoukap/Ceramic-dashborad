<?php
    
function getUserQrCode($idUser){
    include "connexion.php";

    // $pass = $_POST["pass"];
    $_POST = json_decode(file_get_contents('php://input'), true);
    echo $_POST;

            if ($db) {
                $req = $db->prepare("SELECT * FROM scan INNER JOIN qr_codes ON qr_codes.idCode = scan.idCode AND idUser = ? AND  scan.valider!= 1");
                $req->execute(array($idUser));
                $array = $req->fetchAll();
                return $array;
                // echo $array;
                // return $array;
            }
        }
?>