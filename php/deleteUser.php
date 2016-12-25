<?php

    require_once 'connect.php';

    $id = $_GET['id'];

    try{
        $query = "delete from users where id = '$id'";
        $connect->query($query);
    }
    catch(Exception $e){
        echo 'error! '.$e;
    }
