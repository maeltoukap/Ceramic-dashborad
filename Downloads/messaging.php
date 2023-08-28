<?php


define('API_ACCESS_KEY', 'AAAAD7GLw34:APA91bENSfPzGU9i-nmvglxrQdmecrmoneOsjA_wGc-ndcz3phQ43SnwH_E8yOqkRWA2ggQiZ_mqT2Pmj9CG1KBprTLs_7_blUaErtl3L5qYVy_Z5mYTyconXJMP6uk4pHCTtYr9Mwpp');

$fcmUrl = "https://fcm.googleapis.com/fcm/send";

$token = $_POST["token"];
$sender = $_POST["sender"];
$message = $_POST["message"];


$notification = [
    'title' => $sender,
    "body" => $message,
    "icon" => "myIcon",
    "sound" => "mySOund"
];

$extraNotificationData = ["message" => $notification, "moredata" => 'dd'];

$fcmNotification = [
    //'registration_ids' => $tokenList, //multple token array
    'to'        => $token, //single token
    'notification' => $notification,
    'data' => $extraNotificationData
];

$headers = [
    'Authorization: key=' . API_ACCESS_KEY,
    'Content-Type: application/json'
];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $fcmUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
$result = curl_exec($ch);
curl_close($ch);


echo $result;
