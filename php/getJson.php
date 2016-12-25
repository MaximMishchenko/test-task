<?php

    require_once 'connect.php';

    $answer = json_decode(file_get_contents('php://input'));
    
    $id = mysqli_real_escape_string($connect, $answer->id);
    $firstname = mysqli_real_escape_string($connect, $answer->firstName);
    $secondname = mysqli_real_escape_string($connect, $answer->secondName);
    $email = mysqli_real_escape_string($connect, $answer->email);