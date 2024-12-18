<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">SAVED EXTERNAL LINKS</h4>
                        <p class="card-description">
                            SAVE MORE SITE <code>AND EXTENSIONS</code>
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
                                            Name
                                        </th>
										<th>
                                            Link 
                                        </th>
										<th>
                                            Description 
                                        </th>
                                        <th>
                                            ACTION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
										foreach ($externaldata as $row) {
											# code...
										?>
									 <?php 
    $full_string = $row->url;
    $url = substr($full_string, strpos($full_string, ':') + 2);
?>
                                    <tr>
								
                                       
                                        <td>
										<?php echo $row->sitename ?>
                                        </td>
										<td>
										<?php echo $url; ?>
                                        </td>
										<td>
										<details>
                                                <summary>Click Here</summary>
                                                <p><?php echo $row->details ?></p>
                                            </details>
										
                                        </td>
										<td>
										<a href="sendingexternalremove?id=<?php echo $row->id; ?>"><button type="button" class="btn btn-danger btn-rounded btn-fw">Remove</button></a>
									   <a href="https://<?php echo $url; ?>" target="_blank"><button type="button" class="btn btn-primary btn-rounded btn-fw">Visit site</button></a>
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
