<?php
    $conn = mysqli_connect("localhost", "root", "hello_world", "ecom_store");

    function getRealIpUser()
    {
        switch(true)
        {
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

            default: return $_SERVER['REMOTE_ADDR'];
        }
    }

    function add_cart()
    {
        global $conn;
        if(isset($_GET['add_cart']))
        {
            $ip_add = getRealIpUser();
            $p_id = $_GET['add_cart'];
            $product_qty = $_POST['product_qty'];
            $product_size = $_POST['product_size'];
            $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
            $run_check = mysqli_query($conn, $check_product);
            if(mysqli_num_rows($run_check) > 0)
            {
                echo "<script> alert('This product has already added in cart') </script>";
                echo "<script> window.open('details.php?pro_id=$p_id', '_self') </script>";
            }
            else
            {
                $query = "insert into cart (p_id, ip_add, quantity, size) values('$p_id', '$ip_add', '$product_qty', '$product_size')";
                $run_query = mysqli_query($conn, $query);
                echo "<script> window.open('details.php?pro_id=$p_id', '_self') </script>";
            }
        }
    }

    function getPro()
    {
        global $conn;
        $get_products = "select * from products order by 1 DESC LIMIT 0,8";
        $run_products = mysqli_query($conn, $get_products);
        while($row_products = mysqli_fetch_array($run_products))
        {
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];

            echo "
            <div class='col-md-4 col-sm-6 single'>
                <div class='product'>
                    <a href='details.php?pro_id=$pro_id'>
                        <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                    </a>
                    <div class='text'>
                        <h3>
                            <a href='details.php?pro_id=$pro_id'>
                                $pro_title
                            </a>
                        </h3>
                        <p class='price'>
                            $pro_price $
                        </p>
                        <p class='button'>
                            <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                View Details
                            </a>
                            <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                <i class='fa fa-shopping-cart'></i> Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            ";
        }
    }

    function getProductCategories()
    {
        global $conn;
        $get_p_cats = "select * from product_categories";
        $run_p_cats = mysqli_query($conn, $get_p_cats);
        while($row_p_cats = mysqli_fetch_array($run_p_cats))
        {
            $p_cat_id = $row_p_cats['p_category_id'];
            $p_cat_title = $row_p_cats['p_category_title'];
            echo "
                <li>
                    <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a>
                </li>
            ";
        }
    }

    function getCategories()
    {
        global $conn;
        $get_cats = "select * from categories";
        $run_cats = mysqli_query($conn, $get_cats);
        while($row_cats = mysqli_fetch_array($run_cats))
        {
            $cat_id = $row_cats['category_id'];
            $cat_title = $row_cats['category_title'];
            echo "
                <li>
                    <a href='shop.php?cat=$cat_id'> $cat_title </a>
                </li>
            ";
        }
    }

    function getpcatpro()
    {
        global $conn;
        if(isset($_GET['p_cat']))
        {
            $p_cat_id = $_GET['p_cat'];
            $get_p_cat = "select * from product_categories where p_category_id='$p_cat_id'";
            $run_p_cat = mysqli_query($conn, $get_p_cat);
            $row_p_cat = mysqli_fetch_array($run_p_cat);
            $p_cat_title = $row_p_cat['p_category_title'];
            $get_products = "select * from products where p_category_id='$p_cat_id'";
            $run_products = mysqli_query($conn, $get_products);
            $count = mysqli_num_rows($run_products);
            if($count == 0)
            {
                echo   "<div class='box'>
                            <h1> No Product Found in This Product Categories </h1>
                        </div>";
            }
            else
            {
                echo    "<div class='box'>
                            <h1>$p_cat_title</h1>
                        </div>";
            }
            while($row_products = mysqli_fetch_array($run_products))
            {
                $pro_id = $row_products['product_id'];
                $pro_title = $row_products['product_title'];
                $pro_price = $row_products['product_price'];
                $pro_img1 = $row_products['product_img1'];

                echo "<div class='col-md-4 col-sm-6 center-responsive'>
                        <div class='product'>
                            <a href='details.php?pro_id=$pro_id'>
                                <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                            </a>
                            <div class='text'>
                                <h3>
                                    <a href='details.php?pro_id=$pro_id'>
                                        $pro_title
                                    </a>
                                </h3>
                                <p class='price'> $ $pro_price </p>
                                <p class='button'>
                                    <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                        View Details
                                    </a>
                                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                        <i class='fa fa-shopping-cart'></i> Add to Cart
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>";
            }
        }
    }
    function getcatpro()
    {
        global $conn;
        if(isset($_GET['cat']))
        {
            $cat_id = $_GET['cat'];
            $get_cat = "select * from categories where category_id=$cat_id";
            $run_cat = mysqli_query($conn, $get_cat);
            $row_cat = mysqli_fetch_array($run_cat);
            $cat_title = $row_cat['category_title'];
            $get_cat = "select * from products where category_id='$cat_id' LIMIT 0,6";
            $run_cat = mysqli_query($conn, $get_cat);
            $count = mysqli_num_rows($run_cat);
            if($count == 0)
            {
                echo    "<div class='box'>
                            <h1> No Product Found in This Categories </h1>
                        </div>
                ";
            }
            else
            {
                echo    "<div class='box'>
                            <h1> $cat_title </h1>
                        </div>
                ";
            }
            while($row_products = mysqli_fetch_array($run_cat))
            {
                $pro_id = $row_products['product_id'];
                $pro_title = $row_products['product_title'];
                $pro_price = $row_products['product_price'];
                $pro_img1 = $row_products['product_img1'];

                echo "<div class='col-md-4 col-sm-6 center-responsive'>
                        <div class='product'>
                            <a href='details.php?pro_id=$pro_id'>
                                <img class='img-responsive' src='admin_area/product_images/$pro_img1'>
                            </a>
                            <div class='text'>
                                <h3>
                                    <a href='details.php?pro_id=$pro_id'>
                                        $pro_title
                                    </a>
                                </h3>
                                <p class='price'> $ $pro_price </p>
                                <p class='button'>
                                    <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                        View Details
                                    </a>
                                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                        <i class='fa fa-shopping-cart'></i> Add to Cart
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>";
            }
        }
    }

    function getManufacturers()
    {
        global $conn;
        $get_manufacturer = "select * from manufacturers where manufacturer_top='yes'";
        $run_manufacturer = mysqli_query($conn, $get_manufacturer);
        while($row_manufacturer = mysqli_fetch_array($run_manufacturer))
        {
            $manufacturer_id = $row_manufacturer['manufacturer_id'];
            $manufacturer_title = $row_manufacturer['manufacturer_title'];
            $manufacturer_image = $row_manufacturer['manufacturer_image'];

            if($manufacturer_image == "")
            {

            }
            else
            {
                $manufacturer_image = "<img src='admin_area/$manufacturer_image' width='20'> &nbsp";
            }
            echo "<li style='background: #dddddd;' class='checkbox checkbox-primary'>
                      <a>
                          <label>
                               <input value='$manufacturer_id' type='checkbox' class='get_manufacturer' name='manufacturer'>
                                $manufacturer_image = '';
                                $manufacturer_title = '';
                          </label>
                      </a>
                  </li>
            ";
        }
    }

    function items()
    {
        global $conn;
        $ip_add = getRealIpUser();
        $get_items = "select * from cart where ip_add='$ip_add'";
        $run_items = mysqli_query($conn, $get_items);

        $count_items = mysqli_num_rows($run_items);
        echo $count_items;
    }

    function total_price()
    {
        global $conn;
        $ip_add = getRealIpUser();
        $total = 0;
        $select_cart = "select * from cart where ip_add='$ip_add'";
        $run_cart = mysqli_query($conn, $select_cart);
        while($record = mysqli_fetch_array($run_cart))
        {
            $pro_id = $record['p_id'];
            $pro_qty = $record['quantity'];
            $get_price = "select * from products where product_id='$pro_id'";
            $run_price = mysqli_query($conn, $get_price);
            while($row_price = mysqli_fetch_array($run_price))
            {
                $sub_total = $row_price['product_price'] * $pro_qty;
                $total += $sub_total;
            }
        }
        echo "$ " . $total;
    }
?>
