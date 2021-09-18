<?php
    $active = "Account";
    include("includes/header.php");
?>
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="my_account.php">My Account</a></li>
                    </ul>
                </div> <!-- col-md-12 end -->
                <div class="col-md-3">
                    <?php include("sidebar.php"); ?>
                </div> <!-- col-md-3 end -->
                <div class="col-md-9">
                    <div class="box">
                        <?php
                            if(isset($_GET['my_orders']))
                            {
                                include("my_orders.php");
                            }
                            else if(isset($_GET['pay_offline']))
                            {
                                include("pay_offline.php");
                            }
                            else if(isset($_GET['edit_account']))
                            {
                                include("edit_account.php");
                            }
                            else if(isset($_GET['change_pass']))
                            {
                                include("change_pass.php");
                            }
                            else if(isset($_GET['delete_account']))
                            {
                                include("delete_account.php");
                            }
                        ?>
                    </div> <!-- box end -->
                </div> <!-- col-md-9 end -->
            </div> <!-- container end -->
        </div> <!-- content end -->
        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>
