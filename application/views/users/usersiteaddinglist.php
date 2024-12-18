<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ADDED SITE/EXTENSIONS LIST TABLE</h4>
                        <p class="card-description">
                            ADD MORE SITES MANNUALLY <code>ADD SITES/EXTENSIONS</code>
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
                                            SITE/EXTENSION IMAGE
                                        </th>
                                        <th>
                                            SITE/EXTENSION NAME
                                        </th>
                                        <th>
                                            SITE/EXTENSION CATEGORY
                                        </th>
                                        <th>
                                            TYPE
                                        </th>
                                        <th>
                                            SITE/EXTENSION LINK
                                        </th>
                                        <th>
                                            SITE/EXTENSION DESCRIPTION
                                        </th>
                                        <th>
                                            ACTION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
										foreach ($usersitelist as $row) {
											# code...
										?>
                                    <tr>
                                       

                                        <td class="py-1">
                                            <img src="<?php echo $row->images ?>" alt="image" />
                                        </td>
                                        <td>
										<?php echo $row->namese ?>
                                        </td>
										<td>
										<?php echo $row->category ?>
                                        </td>
										<td>
										<?php 
										if ($row->type == 1) {
											echo "Extension";
										}else{
											echo "Website";
										}
										?>
                                        </td>
										<td>
										<?php echo $row->links ?>
                                        </td>
										<td>
										<details>
                                                <summary>Click Here</summary>
                                                <p><?php echo $row->description ?></p>
                                            </details>
                                        </td>
                                        
                                       <td>
									   <a href="sendingusersiteremove?id=<?php echo $row->id; ?>"><button type="button" class="btn btn-danger btn-rounded btn-fw">Remove</button></a>
									   <a href="<?php echo $row->links ?>" target="_blank"><button type="button" class="btn btn-primary btn-rounded btn-fw">Visit site</button></a>
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
