<?php
    $active = "Cart";
    include("includes/header.php");
?>
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                    </ul>
                </div> <!-- col-md-12 end -->
                <div class="col-md-3">
                    <?php include("includes/sidebar.php"); ?>
                </div> <!-- col-md-3 end -->

                <div class="col-md-9">
                    <div id="productMain" class="row">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <center><img class="img-responsive" src="admin_area/product_images/Product-3a.jpg" alt="Product 3-a"></center>
                                        </div>
                                        <div class="item">
                                            <center><img class="img-responsive" src="admin_area/product_images/Product-3b.jpg" alt="Product 3-b"></center>
                                        </div>
                                        <div class="item">
                                            <center><img class="img-responsive" src="admin_area/product_images/Product-3c.jpg" alt="Product 3-c"></center>
                                        </div>
                                    </div> <!-- carousel-inner end -->
                                    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div> <!-- myCarousel carousel slide end -->
                            </div> <!-- mainImage end -->
                        </div> <!-- col-sm-6 -->
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center">M-Dev Polo Shirt Men</h1>
                                <form action="details.php" class="form-horizontal" method="post">
                                    <div class="form-group">
                                        <label for="" class="col-md-5 control-label">Products Quantity</label>
                                        <div class="col-md-7">
                                            <select name="product_qty" id="" class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div> <!-- form-group end -->

                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Product Size</label>
                                        <div class="col-md-7">
                                            <select name="product_size" class="form-control">
                                                <option>Select a size:</option>
                                                <option>Small</option>
                                                <option>Medium</option>
                                                <option>Large</option>
                                            </select>
                                        </div>
                                    </div> <!-- form-group end -->
                                    <p class="price">$50</p>
                                    <p class="text-center buttons">
                                        <button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button>
                                    </p>
                                </form>
                            </div> <!-- box end -->
                        </div> <!-- col-sm-6 end -->
                        <div class="col-sm-6">
                            <div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                        <img src="admin_area/product_images/Product-3a.jpg" alt="Product 3a" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a data-target="#myCarousel" data-slide-to="1" href="" class="thumb">
                                        <img src="admin_area/product_images/Product-3b.jpg" alt="Product 3b" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a data-target="#myCarousel" data-slide-to="2" href="" class="thumb">
                                        <img src="admin_area/product_images/Product-3c.jpg" alt="Product 3c" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div> <!-- col-sm-6 end -->
                    </div> <!-- productMain row end -->
                    <div class="box" id="details">
                        <h4>Product Details</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione praesentium ipsum accusantium facere nulla, beatae vitae
                            consequatur enim et nesciunt possimus dolor-ibus omnis dolorum, ea quibusdam excepturi asperiores, tempribus! Consequatur?
                        </p>
                        <h4>Size</h4>
                        <ul>
                            <li>Small</li>
                            <li>Medium</li>
                            <li>Large</li>
                        </ul>
                        <hr>
                    </div>
                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box same-height headline">
                                <h3 class="text-center">Products You Maybe Like</h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 center-responsive">
                            <div class="product same-height">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/Product-4a.jpg" alt="Product 4">
                                </a>
                                <div class="text">
                                    <h3><a href="details.php">M-Dev Polo T-Shirt Women</a></h3>
                                    <p class="price">$50</p>
                                </div>
                            </div>
                        </div> <!-- col-md-3 col-sm-6 center-responsive end -->
                        <div class="col-md-3 col-sm-6 center-responsive">
                            <div class="product same-height">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/Product-5a.jpg" alt="Product 5">
                                </a>
                                <div class="text">
                                    <h3><a href="details.php">M-Dev Street Shirt Women</a></h3>
                                    <p class="price">$45</p>
                                </div>
                            </div>
                        </div> <!-- col-md-3 col-sm-6 center-responsive end -->

                        <div class="col-md-3 col-sm-6 center-responsive">
                            <div class="product same-height">
                                <a href="details.php">
                                    <img class="img-responsive" src="admin_area/product_images/Product-6a.jpg" alt="Product 6">
                                </a>
                                <div class="text">
                                    <h3><a href="details.php">M-Dev Tank Top Women</a></h3>
                                    <p class="price">$40</p>
                                </div>
                            </div>
                        </div> <!-- col-md-3 col-sm-6 center-responsive end -->
                    </div> <!-- row same-height-row end -->
                </div> <!-- col-md-9 end -->
            </div> <!-- container end -->
        </div> <!-- content end -->
        <?php
            include("includes/footer.php");
        ?>
    </body>
</html>
