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
        <h1 class="page-header">Dashboard</h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> 17 </div>
                        <div> Products </div>
                    </div>
                </div>
            </div> <!-- panel-heading end -->
            <a href="index.php?view_products">
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div> <!-- panel panel-primary end -->
    </div> <!-- col-lg-3 col-md-6 -->

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> 7 </div>
                        <div> Customers </div>
                    </div>
                </div>
            </div> <!-- panel-heading -->
            <a href="index.php?view_customers">
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div> <!-- panel panel-green end -->
    </div> <!-- col-lg-3 col-md-6 end -->

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-orange">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tags fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> 5 </div>
                        <div> Categories </div>
                    </div>
                </div>
            </div> <!-- panel-heading -->
            <a href="index.php?view_p_cats">
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div> <!-- panel panel-orange end -->
    </div> <!-- col-lg-3 col-md-6 end -->

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"> 7 </div>
                        <div> Orders </div>
                    </div>
                </div>
            </div> <!-- panel-heading -->
            <a href="index.php?view_orders">
                <div class="panel-footer">
                    <span class="pull-left">
                        View Details
                    </span>
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div> <!-- panel panel-red end -->
    </div> <!-- col-lg-3 col-md-6 end -->

</div>

<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money"></i> New Orders
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th> Order No: </th>
                                <th> Customer Email: </th>
                                <th> Invoice No: </th>
                                <th> Product ID: </th>
                                <th> Product Quantity: </th>
                                <th> Size: </th>
                                <th> Status: </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> cereus87@gmail.com </td>
                                <td> 343io2343i </td>
                                <td> 24 </td>
                                <td> 2 </td>
                                <td> Large </td>
                                <td> Pending </td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td> cereus87@gmail.com </td>
                                <td> 343io2343i </td>
                                <td> 24 </td>
                                <td> 2 </td>
                                <td> Large </td>
                                <td> Pending </td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td> cereus87@gmail.com </td>
                                <td> 343io2343i </td>
                                <td> 24 </td>
                                <td> 2 </td>
                                <td> Large </td>
                                <td> Pending </td>
                            </tr>
                            <tr>
                                <td> 1 </td>
                                <td> cereus87@gmail.com </td>
                                <td> 343io2343i </td>
                                <td> 24 </td>
                                <td> 2 </td>
                                <td> Large </td>
                                <td> Pending </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- table-responsive end -->
                <div class="text-right">
                    <a href="index.php?view_orders">
                        View All Orders
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div> <!-- panel-body end -->
        </div>
    </div> <!-- col-lg-8 end -->
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-body">
                <div clas="mb-md thumb-info">
                    <img src="admin_images/admin-img.jpg" alt="admin-thumb-info" class="rounded img-responsive">
                    <div class="thumb-info-title">
                        <span class="thumb-info-inner"> Mr. Zex </span>
                        <span class="thumb-info-type"> Web Developer </span>
                    </div>
                </div> <!-- mb-md thumb-info -->
                <div class="mb-md">
                    <div class="widget-content-expanded">
                        <i class="fa fa-envelope"></i> <span> Email: </span> cereus87@gmail.com <br/>
                        <i class="fa fa-flag"></i> <span> Country: </span> Serbia <br/>
                        <i class="fa fa-phone"></i> <span> Contact: </span> 000-123-456 <br/>
                    </div>
                    <hr class="dotted short">
                    <h5 class="text-muted"> About Me </h5>
                    <p>
                        This application is created by me from tutorial, if you willing to contact me, please click this link. <br/>
                        <a href="#"> Zex-Home </a> <br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in arcu eros.
                        Etiam sed est feugiat, sagittis tortor id, malesuada mauris. Curabitur porttitor tristique congue.
                        Sed dui justo, eleifend in nisl et, rhoncus pulvinar elit. Aliquam viverra nibh tempor, congue metus sed, viverra enim.
                        Donec eu congue tellus, vel sagittis orci.
                    </p>
                </div>
            </div> <!-- panel-body -->
        </div> <!-- panel end -->
    </div> <!-- col-md-4 end -->
</div> <!-- row end -->

<?php } ?>
