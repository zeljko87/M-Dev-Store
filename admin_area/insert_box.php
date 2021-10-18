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
                <i class="fa fa-dashboard"></i> Dashboard / Insert Box
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-fw fa-dropbox"></i> Insert Box
                </h3>
            </div>
            <div class="panel-body">
                <form action="" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Box Title </label>
                        <div class="col-md-6">
                            <input name="box_title" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Box Description </label>
                        <div class="col-md-6">
                            <textarea name="box_desc" cols="18" rows="6" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> </label>
                        <div class="col-md-6">
                            <input value="Insert" name="submit" type="submit" class="form-control btn btn-primary">
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
        $box_title = $_POST['box_title'];
        $box_desc = $_POST['box_desc'];
        $insert_query = "insert into boxes_section (box_title, box_desc) values ('$box_title', '$box_desc')";
        $run_insert = mysqli_query($conn, $insert_query);
        if($run_insert)
        {
            echo "<script>alert('You have successfully inserted new box.')</script>";
            echo "<script>window.open('index.php?view_boxes', '_self')</script>";
        }
    }
?>

<?php } ?>