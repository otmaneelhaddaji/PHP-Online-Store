<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Shop By</h2>
        <div class="panel-group category-products" id="accordian">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            Theme
                        </a>
                    </h4>
                </div>
                <div id="sportswear" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <?php getThemes(); ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            Category
                        </a>
                    </h4>
                </div>
                <div id="mens" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <?php getCategories(); ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                            Room
                        </a>
                    </h4>
                </div>

                <h2>Popular</h2>
                <div id="womens" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <?php getMainCategories(); ?>
                        </ul>
                    </div>
                </div>
            </div>

            <?php getTitles(); ?>
        </div>
        <!--/category-products-->

        <div class="brands_products">
            <h2>Themes</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href=""> <span class="pull-right">(50)</span>Home</a></li>
                    <li><a href=""> <span class="pull-right">(56)</span>Bedroom</a></li>
                    <li><a href=""> <span class="pull-right">(27)</span>Kids</a></li>
                    <li><a href=""> <span class="pull-right">(32)</span>Living-room</a></li>
                    <li><a href=""> <span class="pull-right">(9)</span>Others</a></li>
                </ul>
            </div>
        </div>
        <!--/brands_products-->
    </div>
</div>