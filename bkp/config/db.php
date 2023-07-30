<?php

    $charset = 'utf8';
    $host='37.140.192.62';
    $name='u2145242_crm';
    $pass='crm_root2023';
    $db = 'u2145242_crm';

    try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $name, $pass);
    } catch (PDOException $e) {
        echo 'Ошибка соединения с БД '. $e->getMessage();
    }
