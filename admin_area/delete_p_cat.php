<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
        if(isset($_GET['delete_p_cat']))
        {
            $delete_cat_id = $_GET['delete_p_cat'];
            $delete_query = "delete from product_categories where p_category_id='$delete_cat_id'";
            $run_delete = mysqli_query($conn, $delete_query);
            if($run_delete)
            {
                echo "<script>alert('You have sucessfully deleted product category.')</script>";
                echo "<script>window.open('index.php?view_p_cats', '_self')</script>";
            }
        }
    }
?>
