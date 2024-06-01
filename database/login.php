<?php

session_start();
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=="POST"){
    include_once 'config.php';

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);


        $sql = "SELECT * FROM users where username='$username' and password='$password'";

        $result = mysqli_query($conn, $sql);

        if($result){
            $num = mysqli_num_rows($result);
            if($num>0){
                $login=1;
                $_SESSION['username']=$username;
                redirect('panel');
            }else{
                $invalid=1;
            }
        }


    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Login Page</title>
</head>
<body>
    <?php
    if($login){
       echo "<div class='alert alert-success' role='alert'>
  Login Successful</div>";
    }else{
        if($invalid){
            echo "<div class='alert alert-danger' role='alert'>
            Invalid Login</div>";
        }
    }
    ?>
</body>
</html>