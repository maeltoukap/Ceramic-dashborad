<?php
    include "connexion.php";

    $idUser = $_POST["idUser"];
    // $valider = " ";
    $_POST = json_decode(file_get_contents('php://input'), true);
    echo $_POST;
    try {

            // $req = $db->prepare("SELECT idCode FROM scan WHERE idUser=?");  
                $req = $db->prepare("SELECT COUNT(idScan) as valider FROM `scan` WHERE valider = 1 AND idUser = ?");
             //Count coupon of the current user
            $req->execute(array($idUser));
            while($a = $req->fetch()){
                $result[] = $a;
            }
            

    } catch (\Throwable $th) {
        $succes = 0;
        $msg = "Error: ".$th->getMessage();
    }
        echo json_encode(
                $result
                );
        // echo json_encode([
        //     'data' =>[
        //         $msg,
        //         $succes,
        //         $Coupon,
        //     ]
        //     ]);
?>
