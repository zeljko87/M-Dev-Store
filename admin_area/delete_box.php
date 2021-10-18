<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
        if(isset($_GET['delete_box']))
        {
            $delete_id = $_GET['delete_box'];
            $delete_query = "delete from boxes_section where box_id='$delete_id'";
            $run_delete = mysqli_query($conn, $delete_query);
            if($run_delete)
            {
                echo "<script>alert('You have successfully deleted box.')</script>";
                echo "<script>window.open('index.php?view_boxes', '_self')</script>";
            }
        }
    }
?>