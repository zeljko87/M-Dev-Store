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
                <i class="fa fa-dashboard"></i> Dashboard / View Products
            </li>
        </ol>
    </div> <!-- col-lg-12 end -->
</div> <!-- row 1 end -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tags"></i> View Products
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-stripped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> Product ID: </th>
                                <th> Product Title: </th>
                                <th> Product Image: </th>
                                <th> Product Price: </th>
                                <th> Product Sold: </th>
                                <th> Product Keywords: </th>
                                <th> Product Date: </th>
                                <th> Product Delete: </th>
                                <th> Product Edit: </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                $get_pro = "select * from products";
                                $run_pro = mysqli_query($conn, $get_pro);
                                while($row_pro = mysqli_fetch_array($run_pro))
                                {
                                    $p_id = $row_pro['product_id'];
                                    $p_title = $row_pro['product_title'];
                                    $p_image = $row_pro['product_img1'];
                                    $p_price = $row_pro['product_price'];
                                    $p_keywords = $row_pro['product_keywords'];
                                    $p_date = $row_pro['date'];
                                    $i++;

                            ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $p_title; ?> </td>
                                <td> <img src="product_images/<?php echo $p_image; ?>" width="60" height="60"> </td>
                                <td> <?php echo $p_price; ?> </td>
                                <td>
                                    <?php
                                        $get_sold = "select * from pending_orders where product_id='$p_id'";
                                        $run_sold = mysqli_query($conn, $get_sold);
                                        $count = mysqli_num_rows($run_sold);
                                        echo $count;
                                    ?>
                                </td>
                                <td> <?php echo $p_keywords; ?></td>
                                <td> <?php echo $p_date; ?> </td>
                                <td>
                                    <a href="index.php?delete_product=<?php echo $p_id; ?>">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?edit_product=<?php echo $p_id; ?>">
                                        <i class="fa fa-pencil"></i> Edit
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
