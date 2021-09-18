<?php
    $active = "Cart";
    include("includes/header.php");
?>
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
