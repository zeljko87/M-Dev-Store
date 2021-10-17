<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
?>

<?php
    if(isset($_GET['user_profile']))
    {
        $user_id = $_GET['user_profile'];
        $get_user = "select * from admins where admin_id='$user_id'";
        $run_user = mysqli_query($conn, $get_user);
        $row_user = mysqli_fetch_array($run_user);
        $user_name = $row_user['admin_name'];
        $user_email = $row_user['admin_email'];
        $user_image = $row_user['admin_image'];
        $user_country = $row_user['admin_country'];
        $user_contact = $row_user['admin_contact'];
        $user_job = $row_user['admin_job'];
        $user_about = $row_user['admin_about'];
    }
?>
<script src="js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Edit User
            </li>
        </ol>
    </div>
</div> <!-- row end -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-user fa-fw"></i> Edit User
                </h3>
            </div> <!-- panel-heading end -->
            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label">User Name</label>
                        <div class="col-md-6">
                            <input name="user_name" type="text" value="<?php echo $user_name; ?>" class="form-control">
                        </div>
                    </div> <!-- form-group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label">User Email</label>
                        <div class="col-md-6">
                            <input name="user_email" type="text" value="<?php echo $user_email; ?>" class="form-control">
                        </div>
                    </div> <!-- form group for Product Category end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-6">
                            <input name="user_pass" type="password" class="form-control">
                        </div>
                    </div> <!-- form group for Categories end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> User Image </label>
                        <div class="col-md-6">
                            <input name="user_img" type="file" value="<?php echo $user_image; ?>" class="form-control">
                            <br/>
                            <img src="admin_images/<?php echo $user_image ?>" alt="<?php $user_image; ?>" class="img-responsive">
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> User Country </label>
                        <div class="col-md-6">
                            <input name="user_country" type="text" value="<?php echo $user_country; ?>" class="form-control" required>
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> User Contact </label>
                        <div class="col-md-6">
                            <input name="user_contact" type="text" value="<?php echo $user_contact; ?>" class="form-control" required>
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> User Job </label>
                        <div class="col-md-6">
                            <input name="user_job" type="text" value="<?php echo $user_job; ?>" class="form-control" required>
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"> User About </label>
                        <div class="col-md-6">
                            <textarea name="user_about" cols="19" rows="6" class="form-control">
                                <?php echo $user_about; ?>
                            </textarea>
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="update" type="submit" value="Update" class="btn btn-primary form-control">
                        </div>
                    </div> <!-- form group end -->
                </form> <!-- form horizontal end -->
            </div> <!-- panel body end -->
        </div> <!-- panel panel-default end -->
    </div> <!-- col-lg-12 end -->
</div> <!-- row end -->

<?php
    if(isset($_POST['update']))
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
        
        $update_user = "update admins set admin_name='$user_name', admin_email='$user_email', admin_pass='$user_pass', admin_image='$user_img',
                        admin_country='$user_country', admin_about='$user_about', admin_contact='$user_contact', admin_job='$user_job' where admin_id='$user_id'";
        $run_update = mysqli_query($conn, $update_user);
        if($run_update)
        {
            echo "<script>alert('User has been updated successfully.')</script>";
            echo "<script>window.open('index.php?view_users', '_self')</script>";
        }
    }
?>

<?php } ?>