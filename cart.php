<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>M-Dev-Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/style_cart.css">
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
                            <li>
                                <a href="shop.php">Shop</a>
                            </li>
                            <li>
                                <a href="customer/my_account.php">My Account</a>
                            </li>
                            <li class="active">
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
                </div>  <!-- navbar-collapse collapse end -->
            </div> <!-- container end -->
        </div> <!-- navbar navbar-default end -->
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="cart.php">Shopping Cart</a></li>
                    </ul>
                </div> <!-- col-md-12 end -->
                <div id="cart" class="col-md-9">
                    <div class="box">
                        <form action="cart.php" method="post" enctype="multipart/form-data">
                            <h1>Shopping Cart</h1>
                            <p class="text-muted">You currently have 3 item(s) in your cart</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Size</th>
                                            <th colspan="1">Delete</th>
                                            <th colspan="2">Sub-Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img class="img-responsive" src="admin_area/product_images/Product-3a.jpg" alt="Product 3a">
                                            </td>
                                            <td>
                                                <a href="#">M-Dev Polo Shirt Men</a>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                $50
                                            </td>
                                            <td>
                                                Large
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remove[]">
                                            </td>
                                            <td>
                                                $100
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">
                                            </td>
                                            <td>
                                                <a href="#">M-Dev T-Shirt Woman</a>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                $50
                                            </td>
                                            <td>
                                                Large
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remove[]">
                                            </td>
                                            <td>
                                                $100
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 6a">
                                            </td>
                                            <td>
                                                <a href="#">M-Dev Woman Tank-Top</a>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                $50
                                            </td>
                                            <td>
                                                Large
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remove[]">
                                            </td>
                                            <td>
                                                $100
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">$100</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div> <!-- table-responsive end -->
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="index.php" class="btn btn-default">
                                        <i class="fa fa-chevron-left"></i>
                                        Continue Shopping
                                    </a>
                                </div> <!-- pull-left finish -->

                                <div class="pull-right">
                                    <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                                        <i class="fa fa-refresh"></i> Update Cart
                                    </button>

                                    <a href="checkout.php "class="btn btn-primary">
                                        Proceed Checkout
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div> <!-- pull-right finish -->
                            </div> <!-- box-footer finish -->
                        </form> <!-- form end -->
                    </div> <!-- box end -->

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
                <div class="col-md-3">
                    <div id="order-summary" class="box">
                        <div class="box-header">
                            <h3>Order Summary</h3>
                        </div> <!-- box-header end -->
                        <p class="text-muted">
                            Shipping and additional costs are calculated based on value you have entered
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order Sub-Total</td>
                                        <th> $200 </th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and Handling</td>
                                        <td> $0 </td>
                                    </tr>
                                    <tr>
                                        <td>Tax</td>
                                        <th> $0 </th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th> $200 </th>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- table-responsive end -->
                    </div> <!-- order-summary box end -->
                </div> <!-- col-md-3 end -->
            </div> <!-- container end -->
        </div> <!-- content end -->
        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>
