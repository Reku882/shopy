<?php
    session_start();

    $conn = mysqli_connect('localhost', 'root', 'root', 'shoppy_db');
    if(!$conn) {
        echo "Connected failen" . mysqli_connect_error();
    }else{
        //echo "Connected success";
    }

?>