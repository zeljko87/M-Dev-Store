
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
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked category-menu" id="dev-manufacturer">
                <?php getManufacturers(); ?>
            </ul>
        </div>
    </div>
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
