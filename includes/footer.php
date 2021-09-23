<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <h4>Pages</h4>
                <ul>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                </ul>
                <br>
                <h4>User Selection</h4>
                <ul>
                    <?php
                        if(!isset($_SESSION['customer_email']))
                        {
                            echo "<li><a href='checkout.php'> Login </a></li>";
                            echo "<li><a href='customer_register.php'>Register</a></li>";
                        }
                        else
                        {
                            echo "<li><a href='customer/my_account.php?my_orders'> My Account </a></li>";
                        }
                    ?>

                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div> <!-- col-sm-6 col-md-3 end -->
            <div class="col-sm-6 col-md-3">
                <h4>Top Product Categories</h4>
                <ul>
                    <?php
                        $get_p_cats = "select * from product_categories";
                        $run_p_cats = mysqli_query($conn, $get_p_cats);
                        while($row_p_cats = mysqli_fetch_array($run_p_cats))
                        {
                            $p_cat_id = $row_p_cats['p_category_id'];
                            $p_cat_title = $row_p_cats['p_category_title'];
                            echo "
                                <li>
                                    <a href = 'shop.php?p_cat=$p_cat_id'>
                                        $p_cat_title
                                    </a>
                                </li>
                            ";
                        }
                    ?>
                </ul>
                <hr class="hidden-md hidden-lg">

            </div> <!-- col-sm-6 col-md-3 -->
            <div class="col-sm-6 col-md-3">
                <h4>Find us</h4>
                <p>
                    <strong>M-Dev Media inc.</strong>
                    <br/>Cibubur
                    <br/>Ciracas
                    <br/>0818-0683-3157
                    <br/>zeljkomilutinovic566@gmail.com
                    <br/><strong>MrZex</strong>
                </p>
                <a href="contact.php">Check Our Contact Page</a>
                <hr class="hidden-md hidden-lg">
            </div> <!-- col-sm-6 col-md-3 -->
            <div class="col-sm-6 col-md-3">
                <h4>Get The News</h4>
                <p class="text-muted">
                    Don't miss our latest update products.
                </p>
                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow"
                 onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=FeedbulletinForCereus87', 'popupwindow',
                 'scrollbars=yes,width=550,height=520');return true" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="email">
                        <input type="hidden" value="FeedbulletinForCereus87" name="uri"/>
                        <input type="hidden" name="loc" value="en_US"/>
                        <span class="input-group-btn">
                            <input type="submit" value="Subscribe" class="btn btn-default">
                        </span>
                    </div>
                </form>
                <hr>
                <h4>Keep In Touch</h4>
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
            </div> <!-- col-sm-6 col-md-3 -->
        </div> <!-- row end -->
    </div> <!-- container end -->
</div> <!-- footer end -->

<div id="copyright">
    <div class="container">
        <div class="col-md-6">
            <p class="pull-left">&copy; 2021 M-Dev-Store All Rights Reserve</p>
        </div> <!-- col-md-6 end -->
        <div class="col-md-6">
            <p class="pull-right">Theme by: <a href="#">MrGhie</a></p>
        </div>
    </div> <!-- container end -->
</div> <!-- copyright end -->
