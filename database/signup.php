<?php

$user=0;
$success=0;
$match=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include_once 'config.php';
    global $conn;
    if(isset($_POST['signup'])){
        $username= $_POST['username'];
        $password= md5($_POST['password']);
        $cpassword= md5($_POST['cpassword']);

        

        $sql = "SELECT * FROM users where username='$username'";
        $result = mysqli_query($conn, $sql);
        if($result){
            $num =mysqli_num_rows($result);
            if($num>0){
                $user=1;
            }else{
                if($password === $cpassword){
                    $sql = "INSERT INTO users (username, password) values('$username', '$password')";
                    $result = mysqli_query($conn, $sql);

                    if($result){
                        $success=1;
                    }else{
                        die("Error". mysqli_error());
                    }
                }else{
                    // echo "Password not matched";
                    $match = 1;

                }
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
    <title>SignUp Page</title>
    </head>
    <body>
    <?php
    if($user){
       echo "<div class='alert alert-danger' role='alert'>
  User Already Exist!</div>";
    }else{
        if($success){
            echo "<div class='alert alert-success' role='alert'>
            SignUp Successfull!</div>";
        }else{
            if($match){
                echo "<div class='alert alert-danger' role='alert'>
                Password not match!</div>";
            }
        }
    }
    ?>
</body>
</html>