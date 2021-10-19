<?php 
    if(!isset($_SESSION['admin_email'])) 
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else 
    {
        if(isset($_GET['delete_term'])) 
        {
            $delete_id = $_GET['delete_term'];
            $delete_query = "delete from terms where term_id='$delete_id'";
            $run_delete = mysqli_query($conn, $delete_query);
            if($run_delete) 
            {
                echo "<script>alert('You successfully deleted term.')</script>";
                echo "<script>window.open('index.php?view_terms', '_self')</script>";
            }
        }
    }
?>