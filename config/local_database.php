<?php
    define("DB_HOST","localhost");
    define("DB_USER","chris");
    define("DB_PASS","12345");
    define("DB_NAME","db.acare");

    // $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    // if($conn->connect_error){
    //     die("Connection failed $conn->connect_error");
    // }

    // echo "CONNECTED!";

    // function loginPatient($username,$password){
    //     $sqlQuery = "SELECT * FROM patients_T WHERE username = '$username';"'

    // }
?>