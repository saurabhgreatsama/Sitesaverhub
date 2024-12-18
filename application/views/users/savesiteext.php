<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">SAVED SITES LIST TABLE</h4>
                        <p class="card-description">
                            SAVE MORE SITE
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
                                            SITE/EXTENSION NAME
                                        </th>
										<!--<th>-->
          <!--                                  CATEGORY -->
          <!--                              </th>-->
										<th>
                                            LINK 
                                        </th>
										<th>
                                            SITEINTRO 
                                        </th>
										<th>
                                            STATUS 
                                        </th>

                                        <th>
                                            ACTION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
										foreach ($savesitelists as $row) {
											# code...
										?>
                                    <tr>
								
                                       
                                        <td>
										<?php echo $row->sitename ?>
                                        </td>
										<!--<td>-->
										<!--<?php echo $row->category ?>-->
          <!--                              </td>-->
										<td>
										<?php echo $row->sitelink ?>
                                        </td>
										<td>
										<details>
                                                <summary>Click Here</summary>
                                                <p><?php echo $row->sitedetails ?></p>
                                            </details>
										
                                        </td>
										<td>
										<?php echo $row->siteintro
										 ?>
                                        </td>
										<td>
										<a href="sendingremovesavesite?id=<?php echo $row->id; ?>"><button type="button" class="btn btn-danger btn-rounded btn-fw">Remove</button></a>
									   <a href="<?php echo $row->sitelink ?>" target="_blank"><button type="button" class="btn btn-primary btn-rounded btn-fw">Visit site</button></a>
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
