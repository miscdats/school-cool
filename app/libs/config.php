<?php



    $user = 'root';
    $password = 'root';
    $db = 'schoolcool';
    $host = 'localhost';
    $port = 3306;

    $con = new mysqli($host, $user, $password, $port)
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
