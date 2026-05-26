<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">User Login</h3></div>
                                    <div class="card-body">
                                            <div class="form-floating mb-3">
                                                <h5>Login ID</h5>
                                                <form action="login.php" method="post">
                                                    <input class="form-control" type="text" name="loginID" placeholder="Login ID">
                                                </form>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <form>
                                                    <h5>Password</h5>
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                    <br>
                                                    <a class="btn btn-primary" type="submit" value = "Login">Login</a>
                                                </form>
                                            </div>

                                    
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Sign Up</a></div>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php">Home</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
