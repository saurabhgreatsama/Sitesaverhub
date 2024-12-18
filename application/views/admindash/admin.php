<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
          $posting = 0;
          // $wholesaler = 0;
          // $retailer = 0;
          foreach ($sitelists as $value) {
            if ($value->value == 1) {
              $posting++;
            }
          }
          ?>
    <?php
          $product = 0;
          // $wholesaler = 0;
          // $retailer = 0;
          foreach ($contactlist as $value) {
            if ($value->value == 1) {
              $product++;
            }
          }
          ?>

    <?php
          $users = 0;
          // $wholesaler = 0;
          // $retailer = 0;
          foreach ($categorylist as $value) {
            if ($value->value == 1) {
              $users++;
            }
          }
          ?>

<?php
          $extensioncat = 0;
          // $wholesaler = 0;
          // $retailer = 0;
          foreach ($extcategorylists as $value) {
            if ($value->value == 1) {
              $extensioncat++;
            }
          }
          ?>

<?php
          $extensionlist = 0;
          // $wholesaler = 0;
          // $retailer = 0;
          foreach ($extlists as $value) {
            if ($value->value == 1) {
              $extensionlist++;
            }
          }
          ?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $extensioncat ?></h3>

                            <p>Extension Category</p>
                        </div>
                        <div class="icon">
                            <i class=""></i>
                        </div>
                        <a href="<?= base_url("extcategorylistpage") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
				<div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?php echo $extensionlist ?></h3>

                            <p>Extension List</p>
                        </div>
                        <div class="icon">
                            <i class=""></i>
                        </div>
                        <a href="<?= base_url("extlistpage") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $posting ?><sup style="font-size: 20px"></sup></h3>

                            <p>Total site</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="<?= base_url("sitelistpage") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $users ?></h3>

                            <p>Category</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?= base_url("categorylistpage") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!--<div class="col-lg-3 col-6">-->
                    <!-- small box -->
                <!--    <div class="small-box bg-danger">-->
                <!--        <div class="inner">-->
                <!--            <h3><?php echo $product ?></h3>-->

                <!--            <p>Total contact</p>-->
                <!--        </div>-->
                <!--        <div class="icon">-->
                <!--            <i class="ion ion-pie-graph"></i>-->
                <!--        </div>-->
                <!--        <a href="<?= base_url("contactlistpage") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
                <!--    </div>-->
                <!--</div>-->
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">



                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">

                    <!--Right side things from here  -->

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
