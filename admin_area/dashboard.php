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
        <h1 class="page-header">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_products; ?> </div>
                        <div> Products </div>
                    </div>
                </div>
            </div> <!-- panel-heading end -->
            <a href="index.php?view_products">
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div> <!-- panel panel-primary end -->
    </div> <!-- col-lg-3 col-md-6 -->

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_customers; ?> </div>
                        <div> Customers </div>
                    </div>
                </div>
            </div> <!-- panel-heading -->
            <a href="index.php?view_customers">
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div> <!-- panel panel-green end -->
    </div> <!-- col-lg-3 col-md-6 end -->

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-orange">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tags fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_p_categories; ?> </div>
                        <div> Product Categories </div>
                    </div>
                </div>
            </div> <!-- panel-heading -->
            <a href="index.php?view_p_cats">
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div> <!-- panel panel-orange end -->
    </div> <!-- col-lg-3 col-md-6 end -->

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> <?php echo $count_pending_orders; ?> </div>
                        <div> Orders </div>
                    </div>
                </div>
            </div> <!-- panel-heading -->
            <a href="index.php?view_orders">
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div> <!-- panel panel-red end -->
    </div> <!-- col-lg-3 col-md-6 end -->

</div>

<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money"></i> New Orders
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> Order No: </th>
                                <th> Customer Email: </th>
                                <th> Invoice No: </th>
                                <th> Product ID: </th>
                                <th> Product Quantity: </th>
                                <th> Size: </th>
                                <th> Status: </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";
                                $run_order = mysqli_query($conn, $get_order);
                                while($row_order = mysqli_fetch_array($run_order))
                                {
                                    $order_id = $row_order['order_id'];
                                    $customer_id = $row_order['customer_id'];
                                    $invoice_no = $row_order['invoice_no'];
                                    $product_id = $row_order['product_id'];
                                    $quantity = $row_order['quantity'];
                                    $size = $row_order['size'];
                                    $order_status = $row_order['order_status'];
                                    $i++;
                            ?>
                                <tr>
                                    <td> <?php echo $order_id; ?> </td>
                                    <td>
                                        <?php
                                            // Getting customer mail
                                            $get_customer = "select * from customers where customer_id='$customer_id'";
                                            $run_customer = mysqli_query($conn, $get_customer);
                                            $row_customer = mysqli_fetch_array($run_customer);
                                            $customer_email = $row_customer['customer_email'];
                                            echo $customer_email;
                                        ?>
                                    </td>
                                    <td> <?php echo $invoice_no; ?> </td>
                                    <td> <?php echo $product_id; ?> </td>
                                    <td> <?php echo $quantity; ?> </td>
                                    <td> <?php echo $size; ?> </td>
                                    <td> <?php echo $order_status; ?> </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div> <!-- table-responsive end -->
                <div class="text-right">
                    <a href="index.php?view_orders">
                        View All Orders
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div> <!-- panel-body end -->
        </div>
    </div> <!-- col-lg-8 end -->
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-body">
                <div clas="mb-md thumb-info">
                    <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" class="rounded img-responsive">
                    <div class="thumb-info-title">
                        <span class="thumb-info-inner"> <?php echo $admin_name; ?> </span>
                        <span class="thumb-info-type"> <?php echo $admin_job; ?> </span>
                    </div>
                </div> <!-- mb-md thumb-info -->
                <div class="mb-md">
                    <div class="widget-content-expanded">
                        <i class="fa fa-envelope"></i> <span> Email: </span> <?php echo $admin_email; ?> <br/>
                        <i class="fa fa-flag"></i> <span> Country: </span> <?php echo $admin_country; ?> <br/>
                        <i class="fa fa-phone"></i> <span> Contact: </span> <?php echo $admin_contact ?> <br/>
                    </div>
                    <hr class="dotted short">
                    <h5 class="text-muted"> About Me </h5>
                    <p>
                        <?php echo $admin_about; ?>
                    </p>
                </div>
            </div> <!-- panel-body -->
        </div> <!-- panel end -->
    </div> <!-- col-md-4 end -->
</div> <!-- row end -->

<?php } ?>
