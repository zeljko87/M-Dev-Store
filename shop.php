<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>M-Dev-Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div id="top">
            <div class="container">
                <div class="col-md-6 offer">
                    <a href="#" class="btn btn-success btn-sm">Welcome</a>
                    <a href="checkout.php">4 Items in Your Cart Shopping Cart | Total Price: $380</a>
                </div>
                <div class="col-md-6">
                    <ul class="menu">
                        <li>
                            <a href="customer_register.php">Register</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Go To Cart</a>
                        </li>
                        <li>
                            <a href="checkout.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- top end -->

        <div id="navbar" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header"> <!-- navbar-header begin -->
                    <a href="index.php" class="navbar-brand home">
                        <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                        <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
                    </a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div> <!-- navbar-header end -->

                <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse begin -->
                    <div class="padding-nav">
                        <ul class="nav navbar-nav left">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="active">
                                <a href="shop.php">Shop</a>
                            </li>
                            <li>
                                <a href="customer/my_account.php">My Account</a>
                            </li>
                            <li>
                                <a href="cart.php">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div> <!-- padding-nav end -->
                    <a href="cart.php" class="btn navbar-btn btn-primary right">
                        <i class="fa fa-shopping-cart"></i>
                        <span>4 Items in Your Cart</span>
                    </a>
                    <div class="navbar-collapse collapse right">
                        <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                            <span class="sr-only">Toggle Search</span>
                            <i class="fa fa-search"></i>
                        </button> <!-- btn btn-primary navbar-btn end -->
                    </div> <!-- navbar-collapse collapse right end -->
                    <div class="collapse clearfix" id="search">
                        <form method="get" action="results.php" class="navbar-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                                <span class="input-group-btn">
                                    <button type="submit" name="search" value="Search" class="btn btn-primary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div> <!-- input-group end -->
                        </form>
                    </div> <!-- collapse clearfix end -->
                </div>  <!-- navbar-header end -->
            </div> <!-- container end -->
        </div> <!-- navbar navbar-default end -->
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                    </ul>
                </div> <!-- col-md-12 end -->
                <div class="col-md-3">
                    <?php include("includes/sidebar.php"); ?>
                </div> <!-- col-md-3 end -->
                <div class="col-md-9">
                    <div class="box">
                        <h1>Shop</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur filum quasi ut.
                            Vlupatate a, ipsam repellendus ut fugifat minima ? Id facilis itaque autem, officis veritatis perferendis, quaerat!
                        </p>
                    </div> <!-- box end -->
                    <div class="row">
                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                                </a>
                                <div class="text">
                                    <h3>
                                        <a href="details.php">
                                            M-Dev T-Shirt Woman
                                        </a>
                                    </h3>
                                    <p class="price">$30</p>
                                    <p class="button">
                                        <a href="details.php" class="btn btn-default">View Details</a>
                                        <a href="details.php" class="btn btn-primary">
                                            <i class="fa fa-shopping-cart">
                                                Add To Cart
                                            </i>
                                        </a>
                                    </p>
                                </div> <!-- text end -->
                            </div> <!-- product end -->
                        </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 2">
                                </a>
                                <div class="text">
                                    <h3>
                                        <a href="details.php">
                                            M-Dev Logo T-Shirt Men
                                        </a>
                                    </h3>
                                    <p class="price">$30</p>
                                    <p class="button">
                                        <a href="details.php" class="btn btn-default">View Details</a>
                                        <a href="details.php" class="btn btn-primary">
                                            <i class="fa fa-shopping-cart">Add To Cart</i>
                                        </a>
                                    </p>
                                </div> <!-- text end -->
                            </div> <!-- product end -->
                        </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/Product-3b.jpg" alt="Product 3">
                                </a>
                                <div class="text">
                                    <h3>
                                        <a href="details.php">
                                            M-Dev Polo T-Shirt Men
                                        </a>
                                    </h3>
                                    <p class="price">$30</p>
                                    <p class="button">
                                        <a href="details.php" class="btn btn-default">View Details</a>
                                        <a href="details.php" class="btn btn-primary">
                                            <i class="fa fa-shopping-cart">Add To Cart</i>
                                        </a>
                                    </p>
                                </div> <!-- text end -->
                            </div> <!-- product end -->
                        </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/Product-4a.jpg" alt="Product 4">
                                </a>
                                <div class="text">
                                    <h3>
                                        <a href="details.php">
                                            Teenage T-Shirt
                                        </a>
                                    </h3>
                                    <p class="price">$30</p>
                                    <p class="button">
                                        <a href="details.php" class="btn btn-default">View Details</a>
                                        <a href="details.php" class="btn btn-primary">
                                            <i class="fa fa-shopping-cart">Add To Cart</i>
                                        </a>
                                    </p>
                                </div> <!-- text end -->
                            </div> <!-- product end -->
                        </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/Product-5a.jpg" alt="Product 5">
                                </a>
                                <div class="text">
                                    <h3>
                                        <a href="details.php">
                                            Girls T-Shirt
                                        </a>
                                    </h3>
                                    <p class="price">$30</p>
                                    <p class="button">
                                        <a href="details.php" class="btn btn-default">View Details</a>
                                        <a href="details.php" class="btn btn-primary">
                                            <i class="fa fa-shopping-cart">Add To Cart</i>
                                        </a>
                                    </p>
                                </div> <!-- text end -->
                            </div> <!-- product end -->
                        </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 6">
                                </a>
                                <div class="text">
                                    <h3>
                                        <a href="details.php">
                                            M-Dev Woman Tank Top
                                        </a>
                                    </h3>
                                    <p class="price">$30</p>
                                    <p class="button">
                                        <a href="details.php" class="btn btn-default">View Details</a>
                                        <a href="details.php" class="btn btn-primary">
                                            <i class="fa fa-shopping-cart">Add To Cart</i>
                                        </a>
                                    </p>
                                </div> <!-- text end -->
                            </div> <!-- product end -->
                        </div> <!-- col-md-4 col-sm-6 center-responsive end -->
                    </div> <!-- row end -->
                    <center>
                        <ul class="pagination">
                            <li><a href="#">First Page</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Last Page</a></li>
                        </ul>
                    </center>
                </div> <!-- col-md-9 end -->
            </div> <!-- container end -->
        </div> <!-- content end -->
        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>
