<?php
 define("Uri", "https://ceramic-pay.000webhostapp.com/php/web");

 function getUser(){
    $ch = curl_init();
    try {
        curl_setopt($ch, CURLOPT_URL, Uri."/getUser.php");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            echo curl_error($ch);
            die();
        }
        
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($http_code == intval(200)){
            // echo $response;
            return $response;
        }
        else{
            echo "Ressource introuvable : " . $http_code;
        }
    } catch (\Throwable $th) {
        throw $th;
    } finally {
        curl_close($ch);
    }
}


function getScan(){
    $ch = curl_init();
    try {
        curl_setopt($ch, CURLOPT_URL, Uri."/getScan.php");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            echo curl_error($ch);
            die();
        }
        
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($http_code == intval(200)){
            // echo $response;
            return $response;
        }
        else{
            echo "Ressource introuvable : " . $http_code;
        }
    } catch (\Throwable $th) {
        throw $th;
    } finally {
        curl_close($ch);
    }
}

function countNonValid(){
    $ch = curl_init();
    try {
        curl_setopt($ch, CURLOPT_URL, Uri."/countNonValid.php");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            echo curl_error($ch);
            die();
        }
        
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($http_code == intval(200)){
            // echo $response;
            return $response;
        }
        else{
            echo "Ressource introuvable : " . $http_code;
        }
    } catch (\Throwable $th) {
        throw $th;
    } finally {
        curl_close($ch);
    }
}

function countValid(){
    $ch = curl_init();
    try {
        curl_setopt($ch, CURLOPT_URL, Uri."/countValid.php");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            echo curl_error($ch);
            die();
        }
        
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($http_code == intval(200)){
            // echo $response;
            return $response;
        }
        else{
            echo "Ressource introuvable : " . $http_code;
        }
    } catch (\Throwable $th) {
        throw $th;
    } finally {
        curl_close($ch);
    }
}

// function setScan($idUser){

//     $ch = curl_init();
//     try {
//         curl_setopt($ch, CURLOPT_URL, Uri."/setScan.php");
//         curl_setopt($ch, CURLOPT_POST, true);
//         curl_setopt($ch, CURLOPT_POSTFIELDS, array("key"=>"$idUser"));
//         curl_setopt($ch, CURLOPT_HEADER, false);
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//         curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
//         curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
//         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//         curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
//         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        
//         $response = curl_exec($ch);
        
//         if (curl_errno($ch)) {
//             echo curl_error($ch);
//             die();
//         }
        
//         $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//         if($http_code == intval(200)){
//             echo $response;
//         }
//         else{
//             echo "Ressource introuvable : " . $http_code;
//         }
//     } catch (\Throwable $th) {
//         throw $th;
//     } finally {
//         curl_close($ch);
//     }
// }



function countUsers(){
    $ch = curl_init();
    try {
        curl_setopt($ch, CURLOPT_URL, Uri."/countUsers.php");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            echo curl_error($ch);
            die();
        }
        
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($http_code == intval(200)){
            // echo $response;
            return $response;
        }
        else{
            echo "Ressource introuvable : " . $http_code;
        }
    } catch (\Throwable $th) {
        throw $th;
    } finally {
        curl_close($ch);
    }
}


function SetQrCode($qrcode){

    $ch = curl_init();
	try {
		curl_setopt($ch, CURLOPT_URL, "https://ceramic-services.000webhostapp.com/ceramic/web/setQrCode.php");
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, array("qrCode"=>"$qrcode"));
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
		
		$response = curl_exec($ch);
		
	    if (curl_errno($ch)) {
			echo curl_error($ch);
			die();
		}
		
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		if($http_code == intval(200)){
			echo $response;
		}
		else{
			echo "Ressource introuvable : " . $http_code;
		}
	} catch (\Throwable $th) {
		throw $th;
	} finally {
		curl_close($ch);
	}
}


















// $ch = curl_init();
// try {
//     curl_setopt($ch, CURLOPT_URL, "https://votreurl.fr");
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, array("nameparam"=>"valeurparam"));
//     curl_setopt($ch, CURLOPT_HEADER, false);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);   
//     curl_setopt($ch, CURLOPT_TIMEOUT, 5);         
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//     curl_setopt($ch, CURLOPT_MAXREDIRS, 1);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    
//     $response = curl_exec($ch);
    
//     if (curl_errno($ch)) {
//         echo curl_error($ch);
//         die();
//     }
    
//     $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//     if($http_code == intval(200)){
//         echo $response;
//     }
//     else{
//         echo "Ressource introuvable : " . $http_code;
//     }
// } catch (\Throwable $th) {
//     throw $th;
// } finally {
//     curl_close($ch);
// }
?>