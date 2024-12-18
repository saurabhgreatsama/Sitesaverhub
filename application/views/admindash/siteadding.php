<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Site</h1>
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
                        <li class="breadcrumb-item active">Add Site</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header" style="background-color:#445a70 !important">
                            <h3 class="card-title">Add Site</small></h3>
                        </div>
                        <br>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="sendingaddingsite" method="POST" id="quickForm" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Site Name</label>
                                        <input type="text" name="sitename" class="form-control" id="exampleInputEmail1"
                                            placeholder="Site Name" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Site Link</label>
                                        <input type="url" name="sitelink" class="form-control" id="exampleInputEmail1"
                                            placeholder="Site Link" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Site Image</label>
                                        <input type="file" name="siteimage" class="form-control" id="exampleInputEmail1"
                                            placeholder="Site Image" required>
                                    </div>
                                    <div class="form-group col-md-4">

                                        <label for="exampleInputEmail1">Site Category</label>
                                        <select name="sitecategory_id" class="form-control" id="exampleInputEmail1"
                                            required>
                                            <?php 
										foreach ($categorylist as $row) {
											# code...
										?>
                                            <option value="<?php echo $row->id ?>">
                                                <?php echo $row->sitecategoryname ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Site Description
                                                </h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <textarea name="siteintroduction" id="summernote">
                                         Place <em>some</em> <u>text</u> <strong>here</strong>
                                             </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Site Introduction
                                            </h3>
                                        </div>
                                        <textarea name="sitedetails"></textarea>
                                        <!-- <textarea name="productdes" id="summernote">
                                         Place <em>some</em> <u>text</u> <strong>here</strong>
                                             </textarea> -->
                                        <script>
                                        CKEDITOR.replace('sitedetails');
                                        </script>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Site free or paid</label>
                                        <input type="text" name="siteintro" class="form-control" id="exampleInputEmail1"
                                            placeholder="Free or paid" required>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
