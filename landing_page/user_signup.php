<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sign up</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Welcome user, sign up 🙂</h3></div>
                                    <div class="card-body">
                                        
                                        <form action="signupaction.php" method="post">
                                            <h5>First Name</h5>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="first_name" id="firstName" placeholder="First Name" required />
                                                <label for="inputLoginID">First Name</label>
                                            </div>
                                            <h5>Last Name</h5>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="last_name" id="lastName" placeholder="Last Name" required />
                                                <label for="inputPassword">Last Name</label>
                                            </div>
                                            <h5>Email</h5>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="email" id="email" placeholder="Email" required />
                                                <label for="inputPassword">Email</label>
                                            </div>
                                            <h5>Password | 6-12 characters* </h5>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" name="password" id="password" placeholder="Password" required />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary btn-block" type="submit">Sign up</button>
                                            </div>
                                        </form>

                                    
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="user_login.php">Already have an account?</a></div>
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
