<?php

function getScanByCode($QrCode)
{
    include "connexion.php";

    // $pass = $_POST["pass"];
    $undefinedDate = "0000-00-00 00:00:00";
    $_POST = json_decode(file_get_contents('php://input'), true);
    echo $_POST;

    if ($db) {
        $arrayResult = array();
        $param = "%$QrCode%";
        $reqCode = $db->prepare("SELECT * FROM qr_codes WHERE qrCode LIKE ?");
        $reqCode->execute(array($param));
        $fetcherCode = $reqCode->fetch();
        $idCode = $fetcherCode["idCode"];

        if (isset($idCode)) {
            $reqScan = $db->prepare("SELECT * FROM scan WHERE idCode = ?");
            $reqScan->execute(array($idCode));
            $fetcherScan = $reqScan->fetch();
            $idUser = $fetcherScan["idUser"];

            if (isset($idUser)) {

                $reqUser = $db->prepare("SELECT * FROM utilisateurs WHERE idUser = ?");
                $reqUser->execute(array($idUser));
                $fetcherUser = $reqUser->fetch();
                $user = $fetcherUser["idUser"];
                $arrayResult = array_merge($fetcherCode, $fetcherScan, $fetcherUser);
            } else {
                $arrayResult = $fetcherCode;
            }
        } else {
            $arrayResult = $fetcherCode;
        }
        return $arrayResult;
    }
}

        // getUserScanInfos($_GET["code"]);
