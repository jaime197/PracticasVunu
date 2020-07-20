<?php

if (isset($_POST['login-submit'])){

    require 'dbh.php';
    $mailuid = $_POST['usuario'];
    $password = $_POST['contrasena'];

    if(empty($mailuid) || empty($password)){
        header("Location: ../login-form.php?error=emptyfields");
        exit();
    }
    else{
        $sql="SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../login-form.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss",$mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['userPwd']);
                if ($pwdCheck == false) {
                    header("Location: ../login-form.php?error=wrongpassword");
                    exit();
                }
                elseif($pwdCheck == true){
                    session_start();
                    $_SESSION['userId']=$row['userID'];

                    header("Location: ../index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../login-form.php?error=wrongpassword");
                    exit();
                }
            }
            else{
                header("Location: ../login-form.php?error=nouser");
                exit();
            }
        }

    }

}
else{
    header("Location: ../login-form.php");
    exit();
}