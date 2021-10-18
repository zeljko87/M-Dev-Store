<?php
    $active = "Home";
    include("includes/header.php");
?>
        <div class="container" id="slider">
            <div class="col-md-12">
                <div class="carousel slide" id="myCarousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol> <!-- carousel-indicators end -->
                    <div class="carousel-inner">
                        <?php
                            $get_slides = "select * from slider LIMIT 0,1";
                            $run_slides = mysqli_query($conn, $get_slides);
                            $row_slides = mysqli_fetch_array($run_slides);
                            // There we have only fetch one row for initial slide from database, so while loop is not necessary       
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slider_image'];
                            $slide_url = $row_slides['slide_url'];
                            echo "
                            <div class='item active'>
                                <a href='$slide_url'>
                                    <img src='admin_area/slides_images/$slide_image'>
                                </a>
                            </div>
                            ";
                            
                            // adding rest of images
                            $get_slides = "select * from slider LIMIT 1,3";
                            $run_slides = mysqli_query($conn, $get_slides);
                            while($row_slides = mysqli_fetch_array($run_slides))
                            {
                                $slide_name = $row_slides['slide_name'];
                                $slide_image = $row_slides['slider_image'];
                                $slide_url = $row_slides['slide_url'];
                                echo "
                                    <div class='item'>
                                        <a href='$slide_url'>
                                            <img src='admin_area/slides_images/$slide_image'>
                                        </a>
                                    </div>
                                ";
                            }
                        ?>
                    </div> <!-- carousel-inner end -->
                    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a> <!-- left carousel-control end -->
                    <a href="#myCarousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a> <!-- right carousel-control end -->
                </div> <!-- carousel slide end -->
            </div> <!-- col-md-12 end -->
        </div> <!-- container end -->
        <div id="advantages">
            <div class="container">
                <div class="same-height-row">
                    <?php
                        $get_boxes = "select * from boxes_section";
                        $run_boxes = mysqli_query($conn, $get_boxes);
                        while($row_boxes = mysqli_fetch_array($run_boxes))
                        {
                            $box_id = $row_boxes['box_id'];
                            $box_title = $row_boxes['box_title'];
                            $box_desc = $row_boxes['box_desc'];
                        
                    ?>
                        <div class="col-sm-4">
                            <div class="box same-height">
                                <div class="icon">
                                    <i class="fa fa-heart"></i>
                                </div> <!-- icon end -->
                                <h3><a href=""> <?php echo $box_title; ?> </a></h3>
                                <p>
                                    <?php echo $box_desc; ?>
                                </p>
                            </div> <!-- box same-height end -->
                        </div> <!-- col-sm-4 end -->
                    <?php } ?>
                </div> <!-- same-height-row end -->
            </div> <!-- container end -->
        </div> <!-- advantages end -->
        <div id="hot">
            <div class="box">
                <div class="container">
                    <div class="col-md-12">
                        <h2>
                            Our Latest Products
                        </h2>
                    </div> <!-- col-md-12 end -->
                </div> <!-- container end -->
            </div> <!-- box end -->
        </div> <!-- hot end -->
        <div id="content" class="container">
            <div class="row">
                <?php
                    getPro();
                ?>
            </div> <!-- row end -->
        </div> <!-- content container end -->

        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>
