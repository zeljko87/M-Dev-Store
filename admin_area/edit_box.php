<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
?>

<?php
    if(isset($_GET['edit_box']))
    {
        $box_id = $_GET['edit_box'];
        $get_boxes = "select * from boxes_section where box_id='$box_id'";
        $run_boxes = mysqli_query($conn, $get_boxes);
        $row_boxes = mysqli_fetch_array($run_boxes);
        $box_title = $row_boxes['box_title'];
        $box_desc = $row_boxes['box_desc'];
    }
?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Edit Box
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-pencil fa-fw"></i> Edit Box
                </h3>
            </div>
            
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Box Name </label>
                        <div class="col-md-6">
                            <input name="box_name" value="<?php echo $box_title; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Box Description </label>
                        <div class="col-md-6">
                            <textarea name="box_desc" cols="18" rows="6" class="form-control"><?php echo $box_desc; ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"> </label>
                        <div class="col-md-6">
                            <input type="submit" value="Update" name="update" class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div> <!-- panel-body end -->
        </div> <!-- panel panel-default end -->
    </div> <!-- col-lg-12 end -->
</div> <!-- row 2 end -->

<?php
    if(isset($_POST['update']))
    {
        $box_name = $_POST['box_name'];
        $box_desc = $_POST['box_desc'];
        $update_query = "update boxes_section set box_title='$box_name', box_desc='$box_desc' where box_id='$box_id'";
        $run_update = mysqli_query($conn, $update_query);
        if($run_update)
        {
            echo "<script>alert('You successfully update box.')</script>";
            echo "<script>window.open('index.php?view_boxes', '_self')</script>";
        }
    }
?>

<?php } ?>