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
                <i class="fa fa-dashboard"></i> Dashboard / View Terms
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-table fa-fw"></i> View Terms 
                </h3>
            </div>
            <div class="panel-body">              
                <?php
                    $get_terms = "select * from terms";
                    $run_terms = mysqli_query($conn, $get_terms);
                    while($row_terms = mysqli_fetch_array($run_terms))
                    {
                        $term_id = $row_terms['term_id'];
                        $term_title = $row_terms['term_title'];
                        $term_link = $row_terms['term_link'];
                        $term_desc = substr($row_terms['term_desc'], 0, 500);
                ?>
                <div class="col-lg-4 col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" align="center"> <?php echo $term_title; ?> </h3>
                        </div> <!-- panel-heading end -->
                        <div class="panel-body">
                            <?php echo $term_desc; ?>
                            <br>
                            <h4 text-align="center">
                                <?php echo $term_link; ?>
                            </h4>
                        </div> <!-- panel-body end -->
                        <div class="panel-footer">
                            <center>
                                <a href="index.php?edit_term=<?php echo $term_id; ?>" class="pull-left">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <a href="index.php?delete_term=<?php echo $term_id; ?>" class="pull-right">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                                <div class="clearfix"></div>
                            </center>
                        </div> <!-- panel footer end -->
                    </div> <!-- panel panel-primary -->
                </div> <!-- col-lg-4 col-md-4 end -->
                <?php } ?>
            </div> <!-- panel body end -->
        </div> <!-- panel panel default end -->
    </div> <!-- col-lg-12 end -->
</div> <!-- row end -->

<?php } ?>
