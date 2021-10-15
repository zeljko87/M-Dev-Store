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
            <li>
                <i class="fa fa-dashboard"></i> Dashboard / View Categories
            </li>
        </ol>
    </div> <!-- col-lg-12 end -->
</div> <!-- row 1 end -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-tags fa-fw"></i> View Categories
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> Category ID </th>
                                <th> Category </th>
                                <th> Category Description </th>
                                <th> Edit Category </th>
                                <th> Delete Category </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;
                                $get_cats = "select * from categories";
                                $run_cats = mysqli_query($conn, $get_cats);
                                while($row_cats = mysqli_fetch_array($run_cats))
                                {
                                    $cat_id = $row_cats['category_id'];
                                    $cat_title = $row_cats['category_title'];
                                    $cat_desc = $row_cats['category_desc'];
                                    $i++;
                            ?>
                            <tr>
                                <td> <?php echo $cat_id; ?> </td>
                                <td> <?php echo $cat_title; ?> </td>
                                <td width="500"> <?php echo $cat_desc; ?> </td>
                                <td>
                                    <a href="index.php?edit_cat=<?php echo $cat_id; ?>">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?delete_cat=<?php echo $cat_id; ?>">
                                        <i class="fa fa-trash"></i> Delete 
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div> <!-- table-responsive end -->
            </div> <!-- panel-body end -->
        </div> <!-- panel panel-default end -->
    </div> <!-- col-lg-12 end -->
</div> <!-- row 2 end -->

<?php } ?>