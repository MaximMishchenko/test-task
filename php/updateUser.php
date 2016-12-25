<?php

    require_once 'getJson.php';

    $query = "update users set first_name = '$firstname', second_name = '$secondname', email = '$email' where id = '$id'";

    $connect->query($query);
