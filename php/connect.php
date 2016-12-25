<?php

    $HOST = 'localhost';
    $USER = 'root';
    $PASSWORD = '1111';
    $DB = 'users_db';

    $connect = new mysqli($HOST, $USER, $PASSWORD, $DB);

    if($connect->connect_errno){
        echo "Не удалось подключиться к MySQL: (" . $connect->connect_errno . ") " . $connect->connect_error;
    }







   