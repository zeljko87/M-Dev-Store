<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
?>

<?php
    if(isset($_GET['edit_slide']))
    {
        $slide_id = $_GET['edit_slide'];
        $edit_slide = "select * from slider where slide_id='$slide_id'";
        $run_edit = mysqli_query($conn, $edit_slide);
        $row_slide = mysqli_fetch_array($run_edit);
        $slide_name = $row_slide['slide_name'];
        $slide_image = $row_slide['slider_image'];
        $slide_url = $row_slide['slide_url'];
    }
?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-pencil"></i> Dashboard / Edit Slide
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tag fa-fw"></i> Edit Slide
                </h3>
            </div>
            
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Slide Name </label>
                        <div class="col-md-6">
                            <input name="slide_name" value="<?php echo $slide_name; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Slide Image </label>
                        <div class="col-md-6">
                            <input type="file" name="slide_image" value="<?php echo $slide_image; ?>" class="form-control">
                            <br/>
                            <img src="slides_images/<?php echo $slide_image; ?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Slide Url </label>
                        <div class="col-md-6">
                            <input name="slide_url" value="<?php echo $slide_url; ?>" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> </label>
                        <div class="col-md-6">
                            <input type="submit" value="Update Now" name="update" class="btn btn-primary form-control">
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
        $slide_name = $_POST['slide_name'];
        $slide_image = $_FILES['slide_image']['name'];
        $tmp_image = $_FILES['slide_image']['tmp_name'];
        move_uploaded_file($tmp_image, "slides_images/$slide_image");
        $slide_url = $_POST['slide_url'];
        $update_slide = "update slider set slide_name='$slide_name', slider_image='$slide_image', slide_url='$slide_url' where slide_id='$slide_id'";
        $run_update = mysqli_query($conn, $update_slide);
        if($run_update)
        {
            echo "<script>alert('You have successfully updated slide.')</script>";
            echo "<script>window.open('index.php?view_slides', '_self')</script>";
        }
    }
?>

<?php  } ?>

