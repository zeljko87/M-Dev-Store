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
                <i class="fa fa-dashboard"></i> Dashboard / Insert Terms
            </li>
        </ol>
    </div>
</div> <!-- row end -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-table fa-fw"></i> Create Term
                </h3>
            </div> <!-- panel-heading end -->
            <div class="panel-body">
                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Term Title</label>
                        <div class="col-md-6">
                            <input name="term_title" type="text" class="form-control" required>
                        </div>
                    </div> <!-- form-group end -->
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Term URL </label>
                        <div class="col-md-6">
                            <input name="term_link" type="text" class="form-control" required>
                        </div>
                    </div> <!-- form group end -->
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label"> Term Description </label>
                        <div class="col-md-6">
                            <textarea name="term_desc" cols="19" rows="6" class="form-control"></textarea>
                        </div>
                    </div> <!-- form group end -->
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input name="submit" type="submit" value="Create Term" class="btn btn-primary form-control">

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
        $term_title = $_POST['term_title'];
        $term_link = $_POST['term_link'];
        $term_desc = $_POST['term_desc'];
        $insert_term = "insert into terms (term_title, term_link, term_desc) values ('$term_title', '$term_link', '$term_desc')";
        $run_insert = mysqli_query($conn, $insert_term);
        if($run_insert)
        {
            echo "<script>alert('You have successfully created new term.')</script>";
            echo "<script>window.open('index.php?view_terms', '_self')</script>";
        }
    }
?>

<?php } ?>