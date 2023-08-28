<?php
    
function getUserScanInfos($idUser){
    include "connexion.php";

    // $pass = $_POST["pass"];
    $undefinedDate = "0000-00-00 00:00:00";
    $_POST = json_decode(file_get_contents('php://input'), true);
    echo $_POST;

            if ($db) {
                $req = $db->prepare("SELECT * FROM scan INNER JOIN qr_codes ON qr_codes.idCode = scan.idCode AND idUser = ? AND scan.valider= 3 AND scan.date_valid <> ? ORDER BY scan.date_valid DESC");
                $req->execute(array($idUser, $undefinedDate));
                $array = $req->fetchAll();
                return $array;
                // echo $array;
                // return $array;
            }
        }
?>