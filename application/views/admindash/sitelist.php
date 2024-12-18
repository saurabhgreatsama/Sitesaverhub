<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Site Tables</h1>
                    <br>
                    <?php if ($this->session->flashdata()) { ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('msg'); ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Site Tables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Site Table</h3>

                            <div class="card-tools">
                                <a href="<?= base_url("siteaddingpage") ?>"> <button type="button"
                                        class="btn btn-block bg-gradient-primary btn-sm">Add Site</button></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="example">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Site Name</th>
                                        <th>Site Link</th>
                                        <th>Site Image</th>
                                        <th>Site Category</th>
                                        <th>Description</th>
										<th>SiteIntro</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                
                                  foreach($sitelists as $row)
                                  {
                                  ?>
                                    <tr>
                                        <td><?php echo $row->id ?></td>
                                        <td><?php echo $row->sitename ?></td>
                                        <td><?php echo $row->sitelink ?></td>
                                        <td><img src="<?php echo $row->siteimage ?>" alt="" height="60"></td>
                                        <td><?php echo $row->sitecategoryname ?></td>
                                       <td>
                                            <details>
                                                <summary>Click Here</summary>
                                                <p><?php echo $row->sitedetails ?></p>
                                            </details>
                                        </td>
									
										<td>
                                            <details>
                                                <summary>Click Here</summary>
                                                <p><?php echo $row->siteintro ?></p>
                                            </details>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger btn-sm"
                                                href="sendingremovesite?sid=<?php echo $row->sid; ?>">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                            <a class="btn btn-primary btn-sm" href="viewsitedetails?sid=<?php echo $row->sid; ?>">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a>
											<a class="btn btn-primary btn-sm"
                                                href="sendingeditsite?sid=<?php echo $row->sid; ?>">
                                                <i class="fas fa-edit">
                                                </i>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <?php
                                  }
                                 ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
         $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          {
        extend: 'excel',
        text: 'Download to Excel',
        className: 'btn btn-default btn-xs bg-success'
      }
        ]
    } );
  </script>
