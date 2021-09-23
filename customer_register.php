<?php
    include("includes/header.php");
?>
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="customer_register.php">Register</a></li>
                    </ul>
                </div> <!-- col-md-12 end -->
                <div class="col-md-3">
                    <?php include("includes/sidebar.php"); ?>
                </div> <!-- col-md-3 end -->
                <div class="col-md-9">
                    <div class="box">
                        <div class="box-header">
                            <center>
                                <h2>Register a new account</h2>
                            </center>
                            <form action="customer_register.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" class="form-control" name="c_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="c_email" required>
                                </div>
                                <div class="form-group">
                                    <label>Your Country</label>
                                    <input type="text" class="form-control" name="c_country" required>
                                </div>
                                <div class="form-group">
                                    <label>Your City</label>
                                    <input type="text" class="form-control" name="c_city" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="tel" class="form-control" name="c_contact" required>
                                </div>
                                <div class="form-group">
                                    <label>Your Address</label>
                                    <input type="text" class="form-control" name="c_address" required>
                                </div>
                                <div class="form-group">
                                    <label>Your profile picture</label>
                                    <input type="file" class="form-control form-height-custom" name="c_image" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="c_password" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="register" class="btn btn-primary">
                                        <i class="fa fa-user-md"></i> Register
                                    </button>
                                </div>
                            </form>
                        </div> <!-- box-header end -->
                    </div> <!-- box end -->
                </div> <!-- col-md-9 end -->
            </div> <!-- containter end -->
        </div> <!-- content end -->
            <?php
                include("includes/footer.php");
            ?>
        </body>
    </html>

<?php
    if(isset($_POST['register']))
    {
        $c_name = $_POST['c_name'];
        $c_email = $_POST['c_email'];
        $c_country = $_POST['c_country'];
        $c_city = $_POST['c_city'];
        $c_contact = $_POST['c_contact'];
        $c_address = $_POST['c_address'];
        $c_image = $_POST['c_image'];
        $c_password = $_POST['c_password'];
        $c_ip = getRealIpUser();
    }
?>
