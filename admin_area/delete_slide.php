<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>alert('login.php', '_self')</script>";
    }
    else
    {
        if(isset($_GET['delete_slide']))
        {
            $delete_id = $_GET['delete_slide'];
            $delete_query = "delete from slider where slide_id='$delete_id'";
            $run_delete = mysqli_query($conn, $delete_query);
            if($run_delete)
            {
                echo "<script>alert('Slide has been successfully deleted.')</script>";
                echo "<script>window.open('index.php?view_slides', '_self')</script>";
            }
        }
    }
?>