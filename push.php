<?php

require_once 'config.php';
require_once 'firebase.php';

$firebase = new Firebase();

$data = [
    'title'     => isset($_GET['title']) ? $_GET['title'] : '',
    'message'   => isset($_GET['message']) ? $_GET['message'] : '',
    'fcm_code'   => isset($_GET['fcm_code']) ? $_GET['fcm_code'] : ''
];

if ($_GET['type'] == 'single'){
    $reg_id = isset($_GET['reg_id']) ? $_GET['reg_id'] : '';
    $response = $firebase->send($reg_id, $data);
}

if ($_GET['type'] == 'multi'){
    $reg_ids = isset($_GET['reg_id']) ? explode(',',$_GET['reg_id']) : '';
    $response = $firebase->sendMultiple($reg_ids, $data);
}

echo json_encode($response);
