<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">


            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category Name</h4>
                        <p class="card-description">
                            Please Enter Your Category Name
                        </p>
						<?php if ($this->session->flashdata()) { ?>
                             <div class="alert alert-success">
                             <?= $this->session->flashdata('msg'); ?>
                             </div>
                        <?php } ?>
                        <form action="addusercategory" method="post" class="forms-sample">
						<input type="hidden" name="user_id"
                                 value="<?php echo $this->session->userdata('uid'); ?>">
                            <div class="form-group">
                                <label for="exampleInputName1">Category Name</label>
                                <input type="text" name="category" class="form-control" id="exampleInputName1" placeholder="Enter Category Name" required>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
