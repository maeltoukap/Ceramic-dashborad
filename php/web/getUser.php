<?php
    // include "connexion.php";

    //         if ($db) {
    //             $req = $db->prepare("SELECT * FROM utilisateurs ORDER BY idUser ASC");
    //             $req->execute();
    //             $array = $req->fetchAll();
    //             // echo $array;
    //             // return $array;
    //         }
    //         echo json_encode($array);
    include "connexion.php";

            if ($db) {
                $req = $db->prepare("SELECT U.idUser, nom, telephone, date_inscription, COUNT(S.idScan) AS scan FROM utilisateurs U, scan S, qr_codes Q WHERE S.idCode = Q.idCode AND S.idUser = U.idUser GROUP BY S.idUser ORDER BY COUNT(S.idScan) DESC");
                $req->execute();
                $array = $req->fetchAll();
                // echo $array;
                // return $array;
            }
            echo json_encode($array);
            
?>