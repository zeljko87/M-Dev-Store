<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
        if(isset($_GET['delete_payment']))
        {
            $delete_id = $_GET['delete_payment'];
            $delete_payment = "delete from payments where payment_id='$delete_id'";
            $run_delete = mysqli_query($conn, $delete_payment);
            if($run_delete)
            {
                echo "<script>alert('You have successfully deleted payment.')</script>";
                echo "<script>window.open('index.php?view_payments', '_self')</script>";
            }
        }
    }
?>