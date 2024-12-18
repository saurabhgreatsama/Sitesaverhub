<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ADDED CATEGORY LIST TABLE</h4>
                        <p class="card-description">
                            ADD MORE CATEGORY MANNUALLY <code>ADD CATEGORY</code>
							<?php if ($this->session->flashdata()) { ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('msg'); ?>
                    </div>
                    <?php } ?>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>
                                            CATEGORY NAME
                                        </th>
										<th>
                                            DATE 
                                        </th>
                                        <th>
                                            ACTION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
										foreach ($categorylist as $row) {
											# code...
										?>
                                    <tr>
								
                                       
                                        <td>
										<?php echo $row->category ?>
                                        </td>
										<td>
										<?php echo $row->date ?>
                                        </td>
										<td>
										<a href="sendingusercatremove?id=<?php echo $row->id; ?>"><button type="button" class="btn btn-danger btn-rounded btn-fw">Remove</button></a>
                                        </td>
										
                                    </tr>
									<?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
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
