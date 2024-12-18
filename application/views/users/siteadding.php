<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">SITE ADDING FORM</h4>
                        <p class="card-description">
                            Please Enter Your Site Details
							<?php if ($this->session->flashdata()) { ?>
                             <div class="alert alert-success">
                             <?= $this->session->flashdata('msg'); ?>
                             </div>
                        <?php } ?>
                        </p>
                        <form action="usersiteuploading" method="post" enctype="multipart/form-data"
                            class="forms-sample">
                            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('uid'); ?>">
                            <div class="form-group">
                                <input type="text" name="namese" class="form-control" id="exampleInputName1"
                                    placeholder="Enter Site Name">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="category" id="exampleSelectGender"
                                    placeholder="Enter Category">
                                    <option>Please Select Your Category</option>
                                    <?php 
										foreach ($categorylist as $row) {
											# code...
										?>
                                    <option value="<?php echo $row->id ?>">
                                        <?php echo $row->category ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="type" id="exampleSelectGender"
                                    placeholder="Enter Category">
                                    <option>Please Select Your Type</option>
                                    <option value="0">Website</option>
                                    <option value="1">Extensions</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="link" name="links" class="form-control" id="exampleInputName1"
                                    placeholder="Enter site Link" pattern="https://.*" required>
                            </div>
                            <div class="input-group col-xs-12">
                                <input type="file" name="images">
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"
                                    placeholder="Site Description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
