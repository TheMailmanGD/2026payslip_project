<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Login</title>
        <link href="../css/styles.css" rel="stylesheet" />
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Welcome, user login 🙂</h3></div>
                                    <div class="card-body">
                                        
                                        <form action="fetch_login_id.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="loginID" id="inputLoginID" placeholder="Login ID" required />
                                                <label for="inputLoginID">Login ID</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="password" name="password" id="inputPassword" placeholder="Password" required />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                        
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                                            </div>
                                        </form>

                                    
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="user_signup.php">Sign Up</a></div>
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
