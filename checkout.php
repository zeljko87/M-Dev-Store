<?php
    $active = "Register";
    include("includes/header.php");
?>
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Register</li>
                    </ul>
                </div> <!-- col-md-12 end -->
                <div class="col-md-3">
                    <?php
                        include("includes/sidebar.php");
                     ?>
                </div> <!-- col-md-3 end -->
                <div class="col-md-9">
                    <?php
                        if(!isset($_SESSION['customer_email']))
                        {
                            include("customer/customer_login.php");
                        }
                        else
                        {
                            include("payment_options.php");
                        }
                    ?>
                </div>
            </div> <!-- containter end -->
        </div> <!-- content end -->
            <?php
                include("includes/footer.php");
            ?>
        </body>
    </html>
