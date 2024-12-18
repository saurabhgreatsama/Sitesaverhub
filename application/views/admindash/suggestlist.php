<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Suggest Tables</h1>
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
                        <li class="breadcrumb-item active">Suggest Tables</li>
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
                            <h3 class="card-title">Suggest Table</h3>

                            <div class="card-tools">
                                <!-- <a href="<?= base_url("productcategorypage") ?>"> <button type="button"
                                        class="btn btn-block bg-gradient-primary btn-sm">Add Category</button></a> -->
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="example">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Email</th>
										<th>Webname</th>
										<th>Weblink</th>
										<th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                
                                  foreach($suggestlists as $row)
                                  {
                                  ?>
                                    <tr>
                                        <td><?php echo $row->id ?></td>
                                        <td><?php echo $row->fname ?></td>
                                        <td><?php echo $row->email ?></td>
										<td><?php echo $row->webname ?></td>
										<td><?php echo $row->weblink ?></td>
										<td>
                                            <details>
                                                <summary>Click Here</summary>
                                                <p><?php echo $row->message ?></p>
                                            </details>
                                        </td>
                                        <!-- <td>
                                            <a href="deletefacility?id=<?php echo $row->id ?>"><button type="button"
                                                    class="btn btn-primary">View</button></a>
                                            <a href="deletefacility?id=<?php echo $row->id ?>"><button type="button"
                                                    class="btn btn-danger">Delete</button></a>
                                        </td> -->
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
