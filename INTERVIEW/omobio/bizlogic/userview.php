<?php

    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Credentials:true');
    header('Access-Control-Allow-Methods:POST, GET, OPTIONS, PUT, DELETE');
    header('Access-Control-Allow-Headers:Content-Type, Authorization, X-Requested-With');
    header('Content-Type:application/json;charset-utf-8');

    session_start();
    
    include 'connection.php';

    $sql2="select * from user";

    



?>