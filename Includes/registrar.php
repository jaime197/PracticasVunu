<?php

require 'dbh.php';

if (isset($_POST['boton-enviar'])) {


  $username =$_POST['usuario'];
  $email =$_POST['email'];
  $password =$_POST['contrasena'];
 

  if (empty($username) ||  empty($email) || empty($password) || empty($passwordRepeat)) {
      header("Location: ../signup-form.php?error=emptyfields&uid=".$username."&mail=".$email);
      exit();
  }

 /* elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
    header("Location: ../signup-form.php?error=invalidemailuid");
    exit();
  }*/

  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup-form.php?error=invalidemail&uid=".$username);
    exit();
  }

  /*elseif($password !== $passwordRepeat){
    header("Location: ../signup-form.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
  }
  */
  
  else{
      $sql = "SELECT userID FROM users WHERE userID=?";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../index.php?error=sqlerror1");
        exit();
      }

      else {
          mysqli_stmt_bind_param($stmt, "s", $username);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $resultCheck = mysqli_stmt_num_rows($stmt);
          if ($resultCheck > 0) {
            header("Location: ../index.php?error=sqlerror2");
            exit();   
          }
          else{
            $sql = "INSERT INTO users (userID, userEmail, userPwd) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../index.php?error=sqlerror3");
                exit();
          }
          else{
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../login-form.php?signup=success");
            exit();
            
          }
      }
  }
  }
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
    header("Location: ../index.php");
    exit();
} 
?>