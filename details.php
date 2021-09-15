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
                            <a href="checkout.php">My Account</a>
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
                        <img src="images/1ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                        <img src="images/1ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
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
                                <a href="checkout.php">My Account</a>
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
                    <div id="productMain" class="row">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <center><img class="img-responsive" src="admin_area/product_images/details/product-3/Product-3a.jpg" alt="Product 3-a"></center>
                                        </div>
                                        <div class="item">
                                            <center><img class="img-responsive" src="admin_area/product_images/details/product-3/Product-3b.jpg" alt="Product 3-b"></center>
                                        </div>
                                        <div class="item">
                                            <center><img class="img-responsive" src="admin_area/product_images/details/product-3/Product-3c.jpg" alt="Product 3-c"></center>
                                        </div>
                                    </div> <!-- carousel-inner end -->
                                    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div> <!-- myCarousel carousel slide end -->
                            </div> <!-- mainImage end -->
                        </div> <!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center">M-Dev Polo Shirt Men</h1>
                                <form action="details.php" class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <label for="" class="col-md-5 control-label">Products Quantity</label>
                                        <div class="col-md-7">
                                            <select name="product_qty" id="" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div> <!-- form-group end -->

                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Product Size</label>
                                        <div class="col-md-7">
                                            <select name="product_size" class="form-control">
                                                <option>Select a size:</option>
                                                <option>Small</option>
                                                <option>Medium</option>
                                                <option>Large</option>
                                            </select>
                                        </div>
                                    </div> <!-- form-group end -->
                                    <p class="price">$50</p>
                                    <p class="text-center buttons">
                                        <button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button>
                                    </p>
                                </form>
                            </div> <!-- box end -->
                        </div> <!-- col-sm-6 end -->
                        <div class="col-sm-6">
                            <div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                        <img src="admin_area/product_images/Product-3a.jpg" alt="Product 3a" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a data-target="#myCarousel" data-slide-to="1" href="" class="thumb">
                                        <img src="admin_area/product_images/Product-3b.jpg" alt="Product 3b" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a data-target="#myCarousel" data-slide-to="2" href="" class="thumb">
                                        <img src="admin_area/product_images/Product-3c.jpg" alt="Product 3c" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div> <!-- col-sm-6 end -->
                    </div> <!-- productMain row end -->
                    <div class="box" id="details">
                        <h4>Product Details</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione praesentium ipsum accusantium facere nulla, beatae vitae
                            consequatur enim et nesciunt possimus dolor-ibus omnis dolorum, ea quibusdam excepturi asperiores, tempribus! Consequatur?
                        </p>
                        <h4>Size</h4>
                        <ul>
                            <li>Small</li>
                            <li>Medium</li>
                            <li>Large</li>
                        </ul>
                        <hr>
                    </div>
                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height headline">
                                <h3 class="text-center">Products You Maybe Like</h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 center-responsive">
                            <div class="product same-height">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/Product-4a.jpg" alt="Product 4">
                                </a>
                                <div class="text">
                                    <h3><a href="details.php">M-Dev Polo T-Shirt Women</a></h3>
                                    <p class="price">$50</p>
                                </div>
                            </div>
                        </div> <!-- col-md-3 col-sm-6 center-responsive end -->
                        <div class="col-md-3 col-sm-6 center-responsive">
                            <div class="product same-height">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/Product-5a.jpg" alt="Product 5">
                                </a>
                                <div class="text">
                                    <h3><a href="details.php">M-Dev Street Shirt Women</a></h3>
                                    <p class="price">$45</p>
                                </div>
                            </div>
                        </div> <!-- col-md-3 col-sm-6 center-responsive end -->

                        <div class="col-md-3 col-sm-6 center-responsive">
                            <div class="product same-height">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 6">
                                </a>
                                <div class="text">
                                    <h3><a href="details.php">M-Dev Tank Top Women</a></h3>
                                    <p class="price">$40</p>
                                </div>
                            </div>
                        </div> <!-- col-md-3 col-sm-6 center-responsive end -->
                    </div> <!-- row same-height-row end -->
                </div> <!-- col-md-9 end -->
            </div> <!-- container end -->
        </div> <!-- content end -->
        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>
