<?php
    include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Insert Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard / Insert Products
                    </li>
                </ol>
            </div>
        </div> <!-- row end -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-money fa-fw"></i> Insert Product
                        </h3>
                    </div> <!-- panel-heading -->
                    <div class="panel-body">
                        <form method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Title</label>
                                <div class="col-md-6">
                                    <input name="product_title" type="text" class="form-control" required>
                                </div>
                            </div> <!-- form-group end -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Category</label>
                                <div class="col-md-6">
                                    <select name="product_category" class="form-control">
                                        <option>Select a Category Product</option>
                                        <?php
                                            $get_p_cats = "select * from product_categories";
                                            $run_p_cats = mysqli_query($conn, $get_p_cats);
                                            while($row_p_cats = mysqli_fetch_array($run_p_cats))
                                            {
                                                $p_cat_id = $row_p_cats['p_category_id'];
                                                $p_cat_title = $row_p_cats['p_category_title'];
                                                echo "
                                                    <option value='$p_cat_id'> $p_cat_title </option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div> <!-- form group for Product Category end -->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Categories</label>
                                <div class="col-md-6">
                                    <select name="category" class="form-control">
                                        <option> Select a Category </option>
                                        <?php
                                            $get_cats = "select * from categories";
                                            $run_cats = mysqli_query($conn, $get_cats);
                                            while($row_cats = mysqli_fetch_array($run_cats))
                                            {
                                                $cat_id = $row_cats['category_id'];
                                                $cat_name = $row_cats['category_title'];
                                                echo "
                                                    <option value='$cat_id'> $cat_name </option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div> <!-- form group for Categories end -->
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Product Image 1 </label>
                                <div class="col-md-6">
                                    <input name="product_img1" type="file" class="form-control" required>
                                </div>
                            </div> <!-- form group end -->
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Product Image 2 </label>
                                <div class="col-md-6">
                                    <input name="product_img2" type="file" class="form-control" required>
                                </div>
                            </div> <!-- form group end -->
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Product Image 3 </label>
                                <div class="col-md-6">
                                    <input name="product_img3" type="file" class="form-control" required>
                                </div>
                            </div> <!-- form group end -->
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Product Price </label>
                                <div class="col-md-6">
                                    <input name="product_price" type="text" class="form-control" required>
                                </div>
                            </div> <!-- form group end -->
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Product Keywords </label>
                                <div class="col-md-6">
                                    <input name="product_keywords" type="text" class="form-control" required>
                                </div>
                            </div> <!-- form group end -->
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Product Description </label>
                                <div class="col-md-6">
                                    <textarea name="product_desc" id="" cols="19" rows="6" class="form-control"></textarea>
                                </div>
                            </div> <!-- form group end -->
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-6">
                                    <input name="submit" type="submit" value="Insert Product" class="btn btn-primary form-control">

                                </div>
                            </div> <!-- form group end -->
                        </form> <!-- form horizontal end -->
                    </div> <!-- panel body end -->
                </div> <!-- panel panel-default end -->
            </div> <!-- col-lg-12 end -->
        </div> <!-- row end -->
    </body>
</html>
