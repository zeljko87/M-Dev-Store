<?php include("includes/header.php"); ?>
<div id="content">
    <div class="container">
        <div class="col-md-12">           
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Terms & Conditions | Refund</li>
            </ul>          
        </div> <!-- col-md-12 end -->
        <div class="col-md-3">
            <div class="box">
                <ul class="nav nav-pills nav-stacked">
                    <?php
                        $get_terms = "select * from terms LIMIT 0,1";
                        $run_terms = mysqli_query($conn, $get_terms);
                        $row_terms = mysqli_fetch_array($run_terms);
                        $term_title = $row_terms['term_title'];
                        $term_link = $row_terms['term_link'];
                    ?>
                        <li class="active">
                            <a data-toggle="pill" href="#<?php echo $term_link; ?>">
                                <?php echo $term_title; ?>
                            </a>
                        </li>
                    <?php 
                        $count_terms = "select * from terms";
                        $run_count_terms = mysqli_query($conn, $count_terms);
                        $count = mysqli_num_rows($run_count_terms);
                        $get_terms = "select * from terms LIMIT 1,$count";
                        $run_terms = mysqli_query($conn, $get_terms);
                        while($row_terms = mysqli_fetch_array($run_terms))
                        {
                            $term_title = $row_terms['term_title'];
                            $term_link = $row_terms['term_link'];
                    ?>
                            <li>
                                <a data-toggle="pill" href="#<?php echo $term_link; ?>">
                                    <?php echo $term_title; ?>
                                </a>
                            </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="box">
                <div class="tab-content">
                    <?php
                        $get_terms = "select * from terms LIMIT 0,1";
                        $run_terms = mysqli_query($conn, $get_terms);
                        $row_terms = mysqli_fetch_array($run_terms);
                        $term_title = $row_terms['term_title'];
                        $term_desc = $row_terms['term_desc'];
                        $term_link = $row_terms['term_link'];
                    ?>
                        <div id="<?php echo $term_link; ?>" class="tab-pane fade in active">
                            <h1 class="tabTitle"><?php echo $term_title; ?></h1>
                            <p class="tabDesc"><?php echo $term_desc; ?></p>
                        </div>
                    <?php
                        $count_terms = "select * from terms";
                        $run_count = mysqli_query($conn, $count_terms);
                        $count = mysqli_num_rows($run_count);
                        $get_terms = "select * from terms LIMIT 1,$count";
                        $run_terms = mysqli_query($conn, $get_terms);
                        while($row_terms = mysqli_fetch_array($run_terms))
                        {
                            $term_title = $row_terms['term_title'];
                            $term_desc = $row_terms['term_desc'];
                            $term_link = $row_terms['term_link'];
                    ?>
                            <div id="<?php echo $term_link; ?>" class="tab-pane fade in">
                                <h1 class="tabTitle"><?php echo $term_title; ?></h1>
                                <p class="tabDesc"><?php echo $term_desc; ?></p>
                            </div>     
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </div> <!-- end container -->  
</div> <!-- end content -->
<?php include("includes/footer.php"); ?>












































