<?php

    //host
    $host = "localhost";
    //dbname
    $dbname = "auth-sys";
    //user
    $user = "root";

    //password
    $pass = "AbCd123@";
    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname;",$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    }catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }

    /*
    if($conn == true){
        echo "it's working fine";
    }
    else{
        echo "connection is wrong: err";
    }
    */


?>