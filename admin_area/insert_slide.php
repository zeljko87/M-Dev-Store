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
                <i class="fa fa-dashboard"></i> Dashboard / Insert Slide
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-slideshare fa-fw"></i> Insert Slide
                </h3>
            </div>
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Slide Name </label>
                        <div class="col-md-6">
                            <input name="slide_name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Slide Image </label>
                        <div class="col-md-6">
                            <input type="file" name="slide_image" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Slide Url </label>
                        <div class="col-md-6">
                            <input name="slide_url" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"></label>
                        <div class="col-md-6">
                            <input type="submit" value="Insert" name="submit" class="btn btn-primary form-control">
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
        $slide_name = $_POST['slide_name'];
        $image = $_FILES['slide_image']['name'];
        $tmp_image = $_FILES['slide_image']['tmp_name'];
        $slide_url = $_POST['slide_url'];
        $view_slides = "select * from slider";
        $view_run_slide = mysqli_query($conn, $view_slides);
        $count = mysqli_num_rows($view_run_slide);
        if($count < 4)
        {
            move_uploaded_file($tmp_image, "slides_images/$image");
            $insert_slides = "insert into slider (slide_name, slider_image, slide_url) values ('$slide_name', '$image', '$slide_url')";
            $run_insert = mysqli_query($conn, $insert_slides);
            if($run_insert)
            {
                echo "<script>alert('Your new slider image has been inserted.')</script>";
                echo "<script>window.open('index.php?view_slides', '_self')</script>";
            }
        }
        else
        {
            echo "<script>alert('You have already inserted 4 slides')</script>";
        }
    }
?>

<?php } ?>