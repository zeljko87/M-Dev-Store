<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
        
?>
    
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / View Orders
            </li>
        </ol>
    </div> <!-- col-lg-12 end -->
</div> <!-- row 1 end -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money"></i> View Orders
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-stripped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> Order No: </th>
                                <th> Customer Email: </th>
                                <th> Invoice No: </th>
                                <th> Product Name: </th>
                                <th> Product Price: </th>
                                <th> Quantity: </th>
                                <th> Size: </th>
                                <th> Order Date: </th>
                                <th> Total Amount: </th>
                                <th> Status: </th>
                                <th> Delete: </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                $get_order = "select * from pending_orders order by 1 DESC";
                                $run_order = mysqli_query($conn, $get_order);
                                while($row_order = mysqli_fetch_array($run_order))
                                {
                                    $order_id = $row_order['order_id'];
                                    $customer_id = $row_order['customer_id'];
                                    $product_id = $row_order['product_id'];                      
                                    $invoice_no = $row_order['invoice_no'];                               
                                    $quantity = $row_order['quantity'];
                                    $size = $row_order['size'];
                                    $order_status = $row_order['order_status'];
                                    
                                    // Get customer email
                                    $get_customer = "select * from customers where customer_id='$customer_id'";
                                    $run_customer = mysqli_query($conn, $get_customer);
                                    $row_customer = mysqli_fetch_array($run_customer);
                                    $customer_email = $row_customer['customer_email']; 
                                    
                                    // Get product name and price
                                    $get_product = "select * from products where product_id='$product_id'";
                                    $run_product = mysqli_query($conn, $get_product);
                                    $row_product = mysqli_fetch_array($run_product);
                                    $product_title = $row_product['product_title'];
                                    $product_price = $row_product['product_price'];
                                    
                                    // Get order date
                                    $get_c_order = "select * from customer_orders where order_id='$order_id'";
                                    $run_c_order = mysqli_query($conn, $get_c_order);
                                    $row_c_order = mysqli_fetch_array($run_c_order);
                                    $order_date = $row_c_order['order_date'];
                                    
                                    $i++;
                            ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>    
                                <td> <?php echo $customer_email; ?> </td>
                                <td> <?php echo $invoice_no; ?> </td>                                                                               
                                <td> <?php echo $product_title; ?> </td>
                                <td> <?php echo "$ " . $product_price; ?> </td>
                                <td> <?php echo $quantity; ?> </td>
                                <td> <?php echo $size; ?> </td>
                                <td> <?php echo $order_date; ?> </td>
                                <td>
                                    <?php
                                        $total_amount = $product_price * $quantity;
                                        echo "$ " . $total_amount;
                                    ?>
                                </td>
                                <td> <?php echo $order_status; ?> </td>
                                <td>
                                    <a href="index.php?delete_order=<?php echo $order_id; ?>">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- col-lg-12 end -->
</div> <!-- row 2 end -->

<?php } ?>