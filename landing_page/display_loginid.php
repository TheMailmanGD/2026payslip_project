<?php
session_start();

include_once "connect.php";

$loginID = $_SESSION['loginID'] ?? null;
$loggedIn = !empty($_SESSION['session_logged']);
$displayLoginID = '';
$displayFirstName = '';
$displayLastName = '';
$error = '';

$query = "SELECT code, first_name, last_name FROM users ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

if (!$result) {
    $error = "Query error: " . mysqli_error($conn);
} else if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $displayLoginID = $row['code'];
    $displayFirstName = $row['first_name'];
    $displayLastName = $row['last_name'];
} else {
    $error = "No users found in the database";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login ID Confirmation</title>
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
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center my-4">Your Login ID</h3></div>
                        <div class="card-body text-center">
                            <?php if ($error): ?>
                                <div class="alert alert-danger" role="alert">
                                    <h5>Error:</h5>
                                    <p><?= $error ?></p>
                                </div>
                                <a href="user_signup.php" class="btn btn-secondary">Back to Sign Up</a>
                            <?php else: ?>
                                <div class="alert alert-success" role="alert">
                                    <h5>Welcome, <?= htmlspecialchars($displayFirstName) ?> <?= htmlspecialchars($displayLastName) ?></h5>
                                    <h6>Your Login ID is:</h6>
                                    <h2 class="mb-0"><strong><?= htmlspecialchars($displayLoginID) ?></strong></h2>
                                </div>
                                <p class="mb-4">Use this ID to log in to your account.</p>
                                <a href="index.php" class="btn btn-primary">Proceed to Login</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
