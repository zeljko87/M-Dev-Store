<?php
    session_start();
    include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <title>M-Dev Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/body-style.css">
        <link rel="stylesheet" href="css/panel-style.css">
        <link rel="stylesheet" href="css/nav-style.css">
        <link rel="stylesheet" href="css/admin-profile-style.css">
        <link rel="stylesheet" href="css/login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form action="" class="form-login" method="post">
                <h2 class="form-login-heading"> Admin Login </h2>
                <input type="text" class="form-control" placeholder="Email Address" name="admin_email" required>
                <input type="password" class="form-control" placeholder="Your Password" name="admin_pass" required>
                <button type="submit" class="btn btn-primary btn-block" name="admin_login">
                    Login
                </button>
            </form>
        </div> <!-- container end -->
    </body>
</html>

<?php
    if(isset($_POST['admin_login']))
    {
        $admin_email = mysqli_real_escape_string($conn, $_POST['admin_email']);
        $admin_pass = mysqli_real_escape_string($conn, $_POST['admin_pass']);
        $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
        $run_admin = mysqli_query($conn, $get_admin);
        $count = mysqli_num_rows($run_admin);
        if($count == 1)
        {
            $_SESSION['admin_email'] = $admin_email;
            echo "<script>alert('Logged in. Welcome Back')</script>";
            echo "<script>window.open('index.php?dashboard', '_self')</script>";
        }
        else
        {
            echo "<script>alert('Email or password is wrong !')</script>";
        }
    }
?>
