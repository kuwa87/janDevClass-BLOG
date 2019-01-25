<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'blog';

    //create connection

    $conn = new mysqli($servername, $username, $password, $database);

    //check connection

    if ($conn->connect_error) {
        die('Conection failed:' .$conn->connect_error);
        //die -display and exsit
        // -> アロー演算子
    }
    //すでにexist しているのでelse する必要がない
    // echo 'Connected successfuly';


    //     if ($conn->connect_error) {
    //     echo  'Conection failed:' .$conn->connect_error;
    // }else{
    // echo 'Connected successfuly';
    // }

?>