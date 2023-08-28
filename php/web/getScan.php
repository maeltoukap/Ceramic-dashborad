<?php
//Date de modification 18/05/2022 19:54
    include "connexion.php";

            if ($db) {
                $req = $db->prepare("SELECT U.idUser, nom, telephone, COUNT(S.idScan) AS scan, (COUNT(S.idScan)*300) AS merite FROM utilisateurs U, scan S, qr_codes Q WHERE S.idCode = Q.idCode AND S.idUser = U.idUser AND S.valider = 2 GROUP BY S.idUser ORDER BY COUNT(S.idScan) DESC");
                $req->execute();
                $array = $req->fetchAll();
                // echo $array;
                // return $array;
            }
            echo json_encode($array);
            
?>