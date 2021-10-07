<?php
    if(!isset($_SESSION['admin_email']))
    {
        echo "<script>window.open('login.php', '_self')</script>";
    }
    else
    {
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
                    </div> <!-- panel-heading end -->
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
                                <label class="col-md-3 control-label">Category</label>
                                <div class="col-md-6">
                                    <select name="category" class="form-control">
                                        <option> Select a Category </option>
                                        <?php
                                            $get_cat = "select * from categories";
                                            $run_cat = mysqli_query($conn, $get_cat);
                                            while($row_cat = mysqli_fetch_array($run_cat))
                                            {
                                                $cat_id = $row_cat['category_id'];
                                                $cat_name = $row_cat['category_title'];
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
                                    <input name="product_img2" type="file" class="form-control">
                                </div>
                            </div> <!-- form group end -->
                            <div class="form-group">
                                <label class="col-md-3 control-label"> Product Image 3 </label>
                                <div class="col-md-6">
                                    <input name="product_img3" type="file" class="form-control">
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
                                    <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>
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

<?php
    if(isset($_POST['submit']))
    {
        $product_title = $_POST['product_title'];
        $product_category = $_POST['product_category'];
        $category = $_POST['category'];
        $product_price = $_POST['product_price'];
        $product_keywords = $_POST['product_keywords'];
        $product_desc = $_POST['product_desc'];

        // product images
        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];

        move_uploaded_file($temp_name1, "product_images/$product_img1");
        move_uploaded_file($temp_name2, "product_images/$product_img2");
        move_uploaded_file($temp_name3, "product_images/$product_img3");

        $insert_product = "insert into products (p_category_id,	category_id, date, product_title, product_img1, product_img2, product_img3, product_price, product_keywords, product_desc)
        values ('$product_category', '$category', NOW(), '$product_title', '$product_img1', '$product_img2', '$product_img3', '$product_price', '$product_keywords', '$product_desc')";

        $run_product = mysqli_query($conn, $insert_product);
        if($run_product)
        {
            echo "<script>alert('Product has been inserted successfully')</script>";
            echo "<script>window.open('index.php?view_products', '_self')</script>";
        }
    }
?>

<?php } ?>
