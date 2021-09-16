<?php
    include("includes/db.php");
?>

Lorem imsum dolor sit amet, consectetur adipisicing elit. Velit rem eos illo tempora dicta possimus adipisci doloribus obcaecati odit
officiis, sapiente eius excepturi harum voluptates nihil aut quo vero eveniet.

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
                            <li class="active">
                                <a href="index.php">Home</a>
                            </li>
                            <li>
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
        <div class="container" id="slider">
            <div class="col-md-12">
                <div class="carousel slide" id="myCarousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol> <!-- carousel-indicators end -->
                    <div class="carousel-inner">
                        <?php
                            $get_slides = "select * from slider LIMIT 0,1";
                            $run_slides = mysqli_query($conn, $get_slides);
                            while($row_slides = mysqli_fetch_array($run_slides))
                            {
                                $slide_name = $row_slides['slide_name'];
                                $slide_image = $row_slides['slider_image'];
                                echo "
                                <div class='item active'>
                                    <img src='admin_area/slides_images/$slide_image'>
                                </div>
                                ";
                            }

                            // adding rest of images
                            $get_slides = "select * from slider LIMIT 1,3";
                            $run_slides = mysqli_query($conn, $get_slides);
                            while($row_slides = mysqli_fetch_array($run_slides))
                            {
                                $slide_name = $row_slides['slide_name'];
                                $slide_image = $row_slides['slider_image'];
                                echo "
                                    <div class='item'>
                                        <img src='admin_area/slides_images/$slide_image'>
                                    </div>
                                ";
                            }
                        ?>
                    </div> <!-- carousel-inner end -->
                    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a> <!-- left carousel-control end -->
                    <a href="#myCarousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a> <!-- right carousel-control end -->
                </div> <!-- carousel slide end -->
            </div> <!-- col-md-12 end -->
        </div> <!-- container end -->
        <div id="advantages">
            <div class="container">
                <div class="same-height-row">
                    <div class="col-sm-4">
                        <div class="box same-height">
                            <div class="icon">
                                <i class="fa fa-heart"></i>
                            </div> <!-- icon end -->
                            <h3><a href="#">We love our Customers</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing edit. Quia dignissimos perferendis
                                 unde consequatur consequuntur repellendus ut.</p>
                        </div> <!-- box same-height end -->
                    </div> <!-- col-sm-4 end -->
                    <div class="col-sm-4">
                        <div class="box same-height">
                            <div class="icon">
                                <i class="fa fa-tag"></i>
                            </div> <!-- icon end -->
                            <h3><a href="#">Best Prices</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing edit. Quia dignissimos perferendis
                                 unde consequatur consequuntur repellendus ut.</p>
                        </div>
                    </div> <!-- col-sm-4 end -->
                    <div class="col-sm-4">
                        <div class="box same-height">
                            <div class="icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div> <!-- icon end -->
                            <h3><a href="#">100% Original Products</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing edit. Quia dignissimos perferendis
                                 unde consequatur consequuntur repellendus ut.</p>
                        </div>
                    </div> <!-- col-sm-4 end -->

                </div> <!-- same-height-row end -->
            </div> <!-- container end -->
        </div> <!-- advantages end -->
        <div id="hot">
            <div class="box">
                <div class="container">
                    <div class="col-md-12">
                        <h2>
                            Our Latest Products
                        </h2>
                    </div> <!-- col-md-12 end -->
                </div> <!-- container end -->
            </div> <!-- box end -->
        </div> <!-- hot end -->
        <div id="content" class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-6 single">
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
                </div> <!-- col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single">
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
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p> <!-- button end -->
                        </div> <!-- text end -->
                    </div>
                </div> <!-- col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single">
                    <div class="product">
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/Product-3a.jpg" alt="Product 3">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">
                                    Unisex T-Shirt
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
                            </p> <!-- button end -->
                        </div> <!-- text end -->
                    </div>
                </div> <!-- col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single">
                    <div class="product">
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/Product-4a.jpg" alt="Product 4">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">
                                    M-Dev Girl Polo Shirt
                                </a>
                            </h3>
                            <p class="price">$20</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p> <!-- button end -->
                        </div> <!-- text end -->
                    </div>
                </div> <!-- col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single">
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
                </div> <!-- col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single">
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
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p> <!-- button end -->
                        </div> <!-- text end -->
                    </div>
                </div> <!-- col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single">
                    <div class="product">
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/Product-3a.jpg" alt="Product 3">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">
                                    M-Dev Polo Shirt Men
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
                            </p> <!-- button end -->
                        </div> <!-- text end -->
                    </div>
                </div> <!-- col-sm-4 col-sm-6 single end -->
                <div class="col-sm-4 col-sm-6 single">
                    <div class="product">
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/Product-4a.jpg" alt="Product 4">
                        </a>
                        <div class="text">
                            <h3>
                                <a href="details.php">
                                    M-Dev Girl Polo Shirt
                                </a>
                            </h3>
                            <p class="price">$20</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p> <!-- button end -->
                        </div> <!-- text end -->
                    </div>
                </div> <!-- col-sm-4 col-sm-6 single end -->
            </div> <!-- row end -->
        </div> <!-- content container end -->

        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>
