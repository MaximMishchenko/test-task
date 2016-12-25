<?php
    header('Content-Type: text/html; charset=UTF-8');
    header("HTTP/1.1 200 OK");

    require_once 'connect.php';

    $data = $connect->query('select * from users');

    $arr = array();

    while($row = $data->fetch_assoc()){
        $arr[] = $row;
    }

    echo json_encode($arr);
    