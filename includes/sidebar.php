
<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <div class="panel-collapse collapse-data">
        </div>
    </div>
    <div class="panel-body">
        <div class="input-group">
            <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-manufacturer" data-action="filter" placeholder="Filter Manufacturer">
            <a href="" class="input-group-addon">
                <i class="fa fa-search"></i>
            </a>
        </div>
    </div>
    <div class="panel-body scroll-menu">
        <ul class="nav nav-pills nav-stacked category-menu" id="dev-manufacturer">
            <?php

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
                    $manufacturer_image = "<img src='admin_area/other_images/$manufacturer_image' width='20px'> &nbsp;";
                }
                echo "<li style='background: #ddd;' class='checkbox checkbox-primary'>
                          <a>
                              <label>
                                   <input value='$manufacturer_id' type='checkbox' class='get_manufacturer' name='manufacturer'>
                                   $manufacturer_image
                                   $manufacturer_title
                              </label>
                          </a>
                      </li>
                ";
            }
             ?>
        </ul>
    </div> <!-- panel-body scroll-menu end -->
</div>
<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Products Categories</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
            <?php getProductCategories(); ?>
        </ul>
    </div>
</div> <!-- panel panel-default sidebar-menu end -->

<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
    </div>
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked category-menu">
            <?php getCategories(); ?>
        </ul>
    </div>
</div> <!-- panel panel-default sidebar-menu end -->
