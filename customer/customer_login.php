
<div class="box">
    <div class="box-header">
        <center>
            <h1> Login </h1>
            <p class="lead"> Already have our account.. ? </p>
            <p class="text-muted"> Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet.
              Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet.
            </p>
        </center>
    </div> <!-- box-header end -->
    <form method="post" action="checkout.php">
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="c_email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="c_password" class="form-control" required>
        </div>
        <div class="text-center">
            <button name="login" value="Login" class="btn btn-primary">
                <i class="fa fa-sign-in"></i> Login
            </button>
        </div>
    </form>
    <center>
        <a href="customer_register.php">
            <h4> Dont have account.. ? Register here </h4>
        </a>
    </center>
</div> <!-- box end -->

<?php
    if(isset($_POST['login']))
    {
        $customer_email = $_POST['c_email'];
        $customer_pass = $_POST['c_password'];
        $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
        $run_customer = mysqli_query($conn, $select_customer);
        $get_ip = getRealIpUser();
        $check_customer = mysqli_num_rows($run_customer);
        $select_cart = "select * from cart where ip_add='$get_ip'";
        $run_cart = mysqli_query($conn, $select_cart);
        $check_cart = mysqli_num_rows($run_cart);
        if($check_customer == 0)
        {
            echo "<script>alert('You email or password is wrong')</script>";
            exit();
        }
        if($check_customer == 1 and $check_cart == 0)
        {
            $_SESSION['customer_email'] = $customer_email;
            echo "<script>alert('You are Logged in')</script>";
            echo "<script>window.open('customer/my_account.php?my_orders', '_self')</script>";
        }
        else
        {
            $_SESSION['customer_email'] = $customer_email;
            echo "<script>alert('You are logged in')</script>";
            echo "<script>window.open('checkout.php', '_self')</script>";
        }
    }
?>
