<?php

    require_once 'getJson.php';

    $query = "insert into users (first_name, second_name, email) VALUES ('$firstname','$secondname','$email')";

    $connect->query($query);
