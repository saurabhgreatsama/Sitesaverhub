<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">SITE SUGGESTION ADDING FORM</h4>
                        <p class="card-description">
                            Please Enter Your Site Details
                        </p>
                        <form action="sendingwebopnion" method="POST" class="forms-sample">
                            <div class="form-group">
                                <input type="text" name="fname" value="<?php echo $this->session->userdata('custom_username'); ?>" class="form-control" id="exampleInputName1"
                                    placeholder="Enter Your Name">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="type" id="exampleSelectGender" placeholder="Enter Category">
                                    <option>Please Select Your Category</option>
                                    <option value="0">Website</option>
                                    <option value="1">Extensions</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="<?php echo $this->session->userdata('email'); ?>" class="form-control" id="exampleInputName1"
                                    placeholder="Enter Your Email">
                            </div>
							<div class="form-group">
                                <input type="text" name="webname"  class="form-control" id="exampleInputName1"
                                    placeholder="Enter site/Extension Name">
                            </div>
                            <div class="form-group">
                                <input type="link" name="weblink" class="form-control" id="exampleInputName1"
                                    placeholder="Enter site/Extension Link">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="message" id="exampleTextarea1" rows="4"
                                    placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
