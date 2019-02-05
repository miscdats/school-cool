<?php

if (isset($_POST['login_submit'])){

  require ('../db/database_connection.php');

  $lastname=$_POST['lastname'];
  $password=$_POST['password'];

  if(empty($lastname) || empty($password)){
    header("location: ../index.php?error=emptyfieds");
    exit();
  }else{
    $sql = "SELECT * FROM students WHERE student_last=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("location: ../index.php?error=sqlerror1");
      exit();
    }
    else{
      mysqli_stmt_param($stmt, "ss", $lastname);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        $pwd_check = password_verify($password, $row['student_password']);
        if($pwd_check == false){
          header("location: ../index.php?error=wrongpassword");
          exit();
        }else if($password == true){
          session_start();
          $_SESSION['user_lastname']=$row['student_last'];
          $_SESSION['user_id']=$row['student_id'];
          header("location: ../index.php?error=nouser");
          exit();
        }
      }else{
        header("location: ../index.php?error=nouser");
        exit();
      }
    }
  }
}else{
  header("location: ../index.php");
  exit();
}
