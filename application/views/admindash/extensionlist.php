<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Extension Tables</h1>
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
                        <li class="breadcrumb-item active">Extension Tables</li>
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
                            <h3 class="card-title">Extension Table</h3>

                            <div class="card-tools">
                                <a href="<?= base_url("extensionaddingpage") ?>"> <button type="button"
                                        class="btn btn-block bg-gradient-primary btn-sm">Add Extension</button></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="example">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Extension Name</th>
                                        <th>Extension Link</th>
                                        <th>Extension Image</th>
                                        <th>Extension Category</th>
                                        <th>Description</th>
										<th>Extension Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                
                                  foreach($extlists as $row)
                                  {
                                  ?>
                                    <tr>
                                        <td><?php echo $row->eid ?></td>
                                        <td><?php echo $row->extname ?></td>
                                        <td><?php echo $row->extlink ?></td>
                                        <td><img src="<?php echo $row->extimage ?>" alt="" height="60"></td>
                                        <td><?php echo $row->extensioncategoryname ?></td>
                                        <td>
                                            <details>
                                                <summary>Click Here</summary>
                                                <p><?php echo $row->extdetails ?></p>
                                            </details>
                                        </td>
										<td>
                                            <details>
                                                <summary>Click Here</summary>
                                                <p><?php echo $row->extfree ?></p>
                                            </details>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger btn-sm"
                                                href="sendingremoveextlist?eid=<?php echo $row->eid; ?>">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
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
