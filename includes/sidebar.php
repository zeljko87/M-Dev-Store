
<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">
            Manufacturer
            <div class="pull-right">
                <a href="#" style="color: black;">
                    <span class="nav-toggle hide-show">
                        Hide
                    </span>
                </a>
            </div>
        </h3>
        <div class="panel-collapse collapse-data">
        </div>
    </div>
    <div class="panel-body">
        <div class="input-group">
            <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-manufacturer" data-action="filter" placeholder="Manufacturer">
            <a href="" class="input-group-addon">
                <i class="fa fa-search"></i>
            </a>
        </div>
    </div>
    <div class="panel-body scroll-menu">
        <ul class="nav nav-pills nav-stacked category-menu" id="dev-manufacturer">
            <?php
                getManufacturers();
             ?>
        </ul>
    </div> <!-- panel-body scroll-menu end -->
</div>

<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="panel-title">
            Categories
            <div class="pull-right">
                <a href="#" style="color: black;">
                    <span class="nav-toggle hide-show">
                        Hide
                    </span>
                </a>
            </div>
        </h3>
    </div>
    <div class="panel-collapse collapse-data">
    </div>
    <div class="panel-body">
        <div class="input-group">
            <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-category" data-action="filter" placeholder="Categories">
            <a href="#" class="input-group-addon">
                <i class="fa fa-search"></i>
            </a>
        </div>
    </div>
    <div class="panel-body scroll-menu">
        <ul class="nav nav-pills nav-stacked category-menu">
            <?php getCategories(); ?>
        </ul>
    </div>
</div> <!-- panel panel-default sidebar-menu end -->
    <div class="panel panel-default sidebar-menu">
        <div class="panel-heading">
            <h3 class="panel-title">
                Products Categories
                <div class="pull-right">
                    <a href="#" style="color: black;">
                        <span class="nav-toggle hide-show">
                            Hide
                        </span>
                    </a>
                </div>
            </h3>
        </div>
    <div class="panel-collapse collapse-data">
    </div>
    <div class="panel-body">
        <div class="input-group">
            <input type="text" class="form-control" id="dev-table-filter" data-filters="#def-category" data-action="filter" placeholder="Product Categories">
            <a href="#" class="input-group-addon">
                <i class="fa fa-search"></i>
            </a>
        </div>
    </div>
    <div class="panel-body scroll-menu">
        <ul class="nav nav-pills nav-stacked category-menu">
            <?php getProductCategories(); ?>
        </ul>
    </div>
</div> <!-- panel panel-default sidebar-menu end -->
