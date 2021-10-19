<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
?>

<?php 
    if(isset($_GET['edit_term'])) 
    {
        $edit_id = $_GET['edit_term'];
        $get_terms = "select * from terms where term_id='$edit_id'";
        $run_terms = mysqli_query($conn, $get_terms);
        $row_terms = mysqli_fetch_array($run_terms);
        $term_title = $row_terms['term_title'];
        $term_link = $row_terms['term_link'];
        $term_desc = $row_terms['term_desc'];
    }
?>

<script src="https://cdn.tiny.cloud/1/utwjh5feafeg7tegsl32o1keecz6ang85o07s8mzoxvvagy1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector: 'textarea'});</script>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Edit Term
            </li>
        </ol>
    </div>
</div> <!-- row end -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-table fa-fw"></i> Edit Term
                </h3>
            </div> <!-- panel-heading end -->
            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Term Title</label>
                        <div class="col-md-6">
                            <input name="term_title" value="<?php echo $term_title; ?>" type="text" class="form-control" required>
                        </div>
                    </div> <!-- form-group end -->
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Term URL </label>
                        <div class="col-md-6">
                            <input name="term_link" value="<?php echo $term_link; ?>" type="text" class="form-control" required>
                        </div>
                    </div> <!-- form group end -->
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Term Description </label>
                        <div class="col-md-6">
                            <textarea name="term_desc" cols="19" rows="6" class="form-control"><?php echo $term_desc; ?>

                            </textarea>
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="update" type="submit" value="Update Term" class="btn btn-primary form-control">

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
        $term_title = $_POST['term_title'];
        $term_link = $_POST['term_link'];
        $term_desc = $_POST['term_desc'];

        $update_term = "update terms set term_title='$term_title', term_link='$term_link', term_desc='$term_desc' where term_id='$edit_id'";
        $run_update = mysqli_query($conn, $update_term);
        if($run_update) 
        {
            echo "<script>alert('You have successfully updated term.')</script>";
            echo "<script>window.open('index.php?view_terms', '_self')</script>";
        }
    }
?>

<?php } ?>