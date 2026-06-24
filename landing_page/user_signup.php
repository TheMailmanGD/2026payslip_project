<?php
session_start();

$loginID = $_SESSION['loginID'] ?? null;
$loggedIn = !empty($_SESSION['session_logged']);
$message = trim($_GET['msg'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sign Up</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand fw-bold" href="index.php">Payslip Portal</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <?php if ($loggedIn): ?>
                            <li class="nav-item">
                                <span class="navbar-text me-3">Logged in as <strong><?= htmlspecialchars($loginID) ?></strong></span>
                            </li>
                            <li class="nav-item">
                                <form action="logoutAction.php" method="post" class="d-inline">
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
                                </form>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="user_login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="user_signup.php">Sign Up</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <?php if ($message): ?>
                <div class="alert alert-info text-center" role="alert"><?= htmlspecialchars($message) ?></div>
            <?php endif; ?>

            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create your account</h3></div>
                        <div class="card-body">
                            <form action="signupaction.php" method="post">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="first_name" id="firstName" placeholder="First Name" required />
                                    <label for="firstName">First Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="last_name" id="lastName" placeholder="Last Name" required />
                                    <label for="lastName">Last Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Email" required />
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Password" required />
                                    <label for="password">Password</label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Sign up</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small">Already have an account? <a href="user_login.php">Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
