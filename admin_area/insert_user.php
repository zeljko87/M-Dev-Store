<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
?>

<script src="js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Insert User
            </li>
        </ol>
    </div>
</div> <!-- row end -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-user fa-fw"></i> Insert User
                </h3>
            </div> <!-- panel-heading end -->
            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label">User Name</label>
                        <div class="col-md-6">
                            <input name="user_name" type="text" class="form-control" required>
                        </div>
                    </div> <!-- form-group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label">User Email</label>
                        <div class="col-md-6">
                            <input name="user_email" type="text" class="form-control" required>
                        </div>
                    </div> <!-- form group for Product Category end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-6">
                            <input name="user_pass" type="password" class="form-control" required>
                        </div>
                    </div> <!-- form group for Categories end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> User Image </label>
                        <div class="col-md-6">
                            <input name="user_img" type="file" class="form-control" required>
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> User Country </label>
                        <div class="col-md-6">
                            <input name="user_country" type="text" class="form-control" required>
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> User Contact </label>
                        <div class="col-md-6">
                            <input name="user_contact" type="text" class="form-control" required>
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> User Job </label>
                        <div class="col-md-6">
                            <input name="user_job" type="text" class="form-control" required>
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> User About </label>
                        <div class="col-md-6">
                            <textarea name="user_about" cols="19" rows="6" class="form-control"></textarea>
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="submit" type="submit" value="Insert User" class="btn btn-primary form-control">
                        </div>
                    </div> <!-- form group end -->
                </form> <!-- form horizontal end -->
            </div> <!-- panel body end -->
        </div> <!-- panel panel-default end -->
    </div> <!-- col-lg-12 end -->
</div> <!-- row end -->

<?php
    if(isset($_POST['submit']))
    {
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_pass = $_POST['user_pass'];
        $user_img = $_FILES['user_img']['name'];
        $temp_img = $_FILES['user_img']['tmp_name'];
        move_uploaded_file($temp_img, "admin_images/$user_img");
        $user_country = $_POST['user_country'];
        $user_contact = $_POST['user_contact'];
        $user_job = $_POST['user_job'];
        $user_about = $_POST['user_about'];
        
        $insert_user = "insert into admins (admin_name, admin_email, admin_pass, admin_image, admin_country, admin_about, admin_contact, admin_job)
                        values ('$user_name', '$user_email', '$user_pass', '$user_img', '$user_country', '$user_about', '$user_contact', '$user_job')";
        $run_insert = mysqli_query($conn, $insert_user);
        if($run_insert)
        {
            echo "<script>alert('New user has been inserted successfully')</script>";
            echo "<script>window.open('index.php?view_users', '_self')</script>";
        }
    }
?>

<?php } ?>