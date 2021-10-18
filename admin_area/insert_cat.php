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
                <i class="fa fa-dashboard"></i> Dashboard / Insert Category
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tag fa-fw"></i> Insert Category
                </h3>
            </div>
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Category Title </label>
                        <div class="col-md-6">
                            <input name="cat_title" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Category Description </label>
                        <div class="col-md-6">
                            <textarea name="cat_desc" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> </label>
                        <div class="col-md-6">
                            <input value="Submit" name="submit" type="submit" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div> <!-- panel-body end -->
        </div> <!-- panel panel-default end -->
    </div> <!-- col-lg-12 end -->
</div> <!-- row 2 end -->

<?php
    if(isset($_POST['submit']))
    {
        $cat_title = $_POST['cat_title'];
        $cat_desc = $_POST['cat_desc'];
        $insert_cat = "insert into categories (category_title, category_desc) values('$cat_title', '$cat_desc')";
        $run_insert = mysqli_query($conn, $insert_cat);
        if($run_insert)
        {
            echo "<script>alert('Your new category has been inserted.')</script>";
            echo "<script>window.open('index.php?view_cats', '_self')</script>";
        }
    }
?>

<?php } ?>