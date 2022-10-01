<?php
    $connect = mysqli_connect('localhost','root','kangji875','board');

    session_start();
    
    if(!$connect) {
        die(mysqli_error($connect));
    }
?> 