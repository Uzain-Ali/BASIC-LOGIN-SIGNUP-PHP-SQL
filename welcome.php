<?php
    include_once './database/config.php';
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Welcome Page</title>
</head>
<body>
    <div class="container">
                <div class="jumbotron">
            <h1 class="display-4 text-center text-success">Welcome <?php echo $_SESSION['username']?></h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-danger btn-lg" href="database/logout.php" role="button">logout</a>
            </p>
</div>
    </div>
</body>
</html>