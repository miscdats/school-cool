<?php
if (isset($_POST['signup_submit'])){

  require ('../db/database_connection.php');

  $lastname=$_POST['lastname'];
  $firstname=$_POST['firstname'];
  $password=$_POST['password'];
  $password_reapeat=$_POST['password_reapeat'];

  if(empty($lastname) || empty($firstname) || empty($password) || empty($password_reapeat)){
    header("location: ../signup.php?error=emptyfieds&lastname=".$lastname."&firstname=".$firstname);
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $lastname)) {
    header("location: ../signup.php?error=invalidlastname=");
    exit();
  }
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $firstname)) {
    header("location: ../signup.php?error=invalidfirstname=");
    exit();
  }
  elseif ($password !== $password_reapeat) {
    header("location: ../signup.php?error=passwordcheck&lastname=".$lastname."&firstname=".$firstname);
    exit();
  }
  $sql = "SELECT student_last FROM students WHERE student_last=?";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.php?error=sqlerror1");
    exit();
  }else{
    mysqli_stmt_bind_param($stmt,"s",$lastname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $result_Check = mysqli_stmt_num_rows($stmt);
    if($result_Check>0){
      header("location: ../signup.php?error=lastnametaken");
      exit();
    }else{
      $sql = "INSERT INTO students(student_last, student_first, student_password) VALUES(?,?,?)";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=sqlerror2");
        exit();
      }else{
        // $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"sss",$lastname,$lastname,$password);
        mysqli_stmt_execute($stmt);
        header("location: ../index.php?signup=success");
        exit();
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}else{
  header("location: ../signup.php");
  exit();
}
