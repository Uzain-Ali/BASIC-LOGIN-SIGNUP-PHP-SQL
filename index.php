<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <title>Registration Project</title>
  </head>
  <body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 col-xm-12">
                <h1 class="text-center">Sign Up</h1>
                    <form action="database/signup.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" autocomplete="off" placeholder="Enter Username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" autocomplete="off" placeholder="Enter Password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="cpassword" autocomplete="off" placeholder="Enter Confirm Password" name="cpassword">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 btn-success my-3" name="signup">Sign Up</button>
                    </form>
            </div>
            <div class="col-md-6 col-xm-12 my-5">
                <h1 class="text-center">Login</h1>
                    <form action="database/login.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" autocomplete="off" placeholder="Enter Username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" autocomplete="off" placeholder="Enter Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-dark w-100 btn-success my-3" name="login">Login</button>
                    </form>
            </div>
        </div>
    </div>
  </body>
</html>