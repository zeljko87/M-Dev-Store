<?php
    $active = "Cart";
    include("includes/header.php");
?>
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div> <!-- col-md-12 end -->
                <div id="cart" class="col-md-9">
                    <div class="box">
                        <form action="cart.php" method="post" enctype="multipart/form-data">
                            <h1>Shopping Cart</h1>
                            <?php
                                $ip_add = getRealIpUser();
                                $select_cart = "select * from cart where ip_add='$ip_add'";
                                $run_cart = mysqli_query($conn, $select_cart);
                                $count = mysqli_num_rows($run_cart);
                            ?>

                            <p class="text-muted">You currently have <?php echo $count; ?> item(s) in your cart</p>
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
                                        <?php
                                            $total = 0;
                                            while($row_cart = mysqli_fetch_array($run_cart))
                                            {
                                                $pro_id = $row_cart['p_id'];
                                                $pro_size = $row_cart['size'];
                                                $pro_qty = $row_cart['quantity'];
                                                $get_products = "select * from products where product_id='$pro_id'";
                                                $run_products = mysqli_query($conn, $get_products);
                                                while($row_products = mysqli_fetch_array($run_products))
                                                {
                                                    $pro_img1 = $row_products['product_img1'];
                                                    $pro_title = $row_products['product_title'];
                                                    $only_price = $row_products['product_price'];
                                                    $sub_total = $row_products['product_price'] * $pro_qty;
                                                    $total += $sub_total;

                                        ?>
                                        <tr>
                                            <td>
                                                <img class="img-responsive" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="Image 1">
                                            </td>
                                            <td>
                                                <a href="details.php?pro_id=<?php echo $pro_id; ?>"> <?php echo $pro_title; ?> </a>
                                            </td>
                                            <td>
                                                <?php echo $pro_qty; ?>
                                            </td>
                                            <td>
                                                <?php echo "$ " . $only_price; ?>
                                            </td>
                                            <td>
                                                <?php echo $pro_size; ?>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                            </td>
                                            <td>
                                                <?php echo "$ " . $sub_total; ?>
                                            </td>
                                        </tr>
                                    <?php } } ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2"> <?php echo "$ ". $total; ?> </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div> <!-- table-responsive end -->
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="shop.php" class="btn btn-default">
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
                    <?php
                        function update_cart()
                        {
                            global $conn;
                            if(isset($_POST['update']))
                            {
                                foreach($_POST['remove'] as $remove_id)
                                {
                                    $delete_product = "delete from cart where cart.p_id='$remove_id'";
                                    $run_delete = mysqli_query($conn, $delete_product);
                                    if($run_delete)
                                    {
                                        echo "<script>window.open('cart.php', '_self')</script>";
                                    }
                                }
                            }
                        }
                        echo @$up_cart = update_cart();
                     ?>
                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height headline">
                                <h3 class="text-center">Products You Maybe Like</h3>
                            </div>
                        </div>
                        <?php
                            $get_products = "select * from products order by rand() LIMIT 0,3";
                            $run_products = mysqli_query($conn, $get_products);
                            while($row_products = mysqli_fetch_array($run_products))
                            {
                                $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_img1 = $row_products['product_img1'];
                                $pro_price = $row_products['product_price'];

                                echo "
                                    <div class='col-md-3 col-sm-6 center-responsive'>
                                        <div class='product same-height'>
                                            <a href='details.php?pro_id=$pro_id'>
                                                <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                                            </a>
                                            <div class='text'>
                                                <h3> <a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>
                                                <p class='price'> $ $pro_price </p>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                        ?>
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
                                        <td>Order All Sub-Total</td>
                                        <th> <?php echo $total; ?> </th>
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
                                        <th> <?php echo $total; ?> </th>
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
