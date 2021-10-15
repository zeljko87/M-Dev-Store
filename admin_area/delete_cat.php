<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
        if(isset($_GET['delete_cat']))
        {
            $cat_id = $_GET['delete_cat'];
            $delete_cat = "delete from categories where category_id='$cat_id'";
            $run_delete = mysqli_query($conn, $delete_cat);
            if($run_delete)
            {
                echo "<script>alert('Category has been deleted.')</script>";
                echo "<script>window.open('index.php?view_cats', '_self')</script>";
            }
        }
    }
?>