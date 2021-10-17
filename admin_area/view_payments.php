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
                <i class="fa fa-dashboard"></i> Dashboard / View Payments
            </li>
        </ol>
    </div> <!-- col-lg-12 end -->
</div> <!-- row 1 end -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money"></i> View Payments
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-stripped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> Payment No: </th>
                                <th> Invoice No: </th>
                                <th> Amount Paid: </th>
                                <th> Method: </th>
                                <th> Reference No: </th>
                                <th> Payment Code: </th>
                                <th> Payment Date: </th>
                                <th> Delete Payment: </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                $get_payment = "select * from payments order by 1 DESC";
                                $run_payment = mysqli_query($conn, $get_payment);
                                while($row_payment = mysqli_fetch_array($run_payment))
                                {
                                    $payment_id = $row_payment['payment_id'];
                                    $invoice_no = $row_payment['invoice_no'];
                                    $amount_paid = $row_payment['amount'];                      
                                    $payment_mode = $row_payment['payment_mode'];
                                    $ref_no = $row_payment['ref_no'];
                                    $payment_code = $row_payment['code'];
                                    $payment_date = $row_payment['payment_date'];             
                                    $i++;
                            ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>    
                                <td> <?php echo $invoice_no; ?> </td>
                                <td> <?php echo "$ " . $amount_paid; ?> </td>                                                                               
                                <td> <?php echo $payment_mode; ?> </td>
                                <td> <?php echo $ref_no; ?> </td>
                                <td> <?php echo $payment_code; ?> </td>
                                <td> <?php echo $payment_date; ?> </td>
                                <td>
                                    <a href="index.php?delete_payment=<?php echo $payment_id; ?>">
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