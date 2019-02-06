<?php
    require_once('libs/constants.php');
    //
    // $user = 'root';
    // $db = 'schoolcool';
    // $host = 'localhost';
    // $port = 3308;

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE)
        or die ('Could not connect to the database server' . mysqli_connect_error());

    // $link = mysqli_init();
    // $success = mysqli_real_connect(
    //    $link,
    //    $host,
    //    $user,
    //    $password,
    //    $db,
    //    $port
    // );

    function CloseCon($conn) {
        $conn->close();
    }

?>
