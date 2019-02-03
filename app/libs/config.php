<?php
    require_once('constants.php');

    $user = 'root';
    $password = '1337';
    $db = 'schoolcool';
    $host = 'localhost';
    $port = 3308;

    $con = new mysqli($host, $user, $password, $db, $port)
        or die ('Could not connect to the database server' . mysqli_connect_error());


    $link = mysqli_init();
    $success = mysqli_real_connect(
       $link,
       $host,
       $user,
       $password,
       $db,
       $port
    );
    // $con->close();

?>
