<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>
            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>
        <link rel="stylesheet" href="<?php echo base_url("public/css/sb-admin-2.css"); ?>">
    </head>
    <body>
<div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">NutriTrolley Admin</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li> <a href="<?php echo site_url('admin/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href='<?php echo site_url('examples/customers_management') ?>'><i class="fa fa-dashboard fa-fw"></i>Customers</a>
                            </li>

                            <li>
                                 <a href='<?php echo site_url('examples/orders_management') ?>'><i class="fa fa-table fa-fw"></i>Orders</a>
                            </li>
                            <li>
                               <a href='<?php echo site_url('examples/products_management') ?>'><i class="fa fa-edit fa-fw"></i>Products</a>
                            </li>
                            <li>
                               <a href='<?php echo site_url('examples/offices_management') ?>'><i class="fa fa-edit fa-fw"></i>Offices</a>
                            </li>
                             <li>
                               <a href='<?php echo site_url('examples/employees_management') ?>'><i class="fa fa-edit fa-fw"></i>Employees</a>
                            </li>
                            <li>
                             <a href='<?php echo site_url('examples/film_management') ?>'><i class="fa fa-edit fa-fw"></i>Films</a>
                            </li>
                             <li>
                              <a href='<?php echo site_url('examples/multigrids') ?>'><i class="fa fa-edit fa-fw"></i>Multigrid</a>
                            </li>
 </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dashboard</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo $output; ?>
                            </div> </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>


            </div>
            <!-- /#page-wrapper -->

        </div>        


    </body>
</html>
