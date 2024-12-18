<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Site Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Site Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <?php 
			$sid = 0;
			foreach ($sitelists as $row) {
				$sid = $row->sid;
			
			?>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none"><?php echo $row->sitename ?></h3>
                        <div class="col-12">
                            <img src="<?php echo $row->siteimage ?>" class="product-image" alt="Product Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3"><?php echo $row->sitename ?></h3>
                        <h5><?php echo $row->sitecategoryname ?></h5>
						<h5><?php echo $row->sitelink ?></h5>
						<p><?php echo $row->sitedetails ?></p>

                        <hr>
                      
						<p><?php echo $row->siteintroduction ?></p>

                        <div class="bg-gray py-2 px-3 mt-4">
                            <h2 class="mb-0">
							<?php echo $row->siteintro ?>
                            </h2>
                           
                        </div>
                    </div>
                </div>
          
                <?php } ?>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
