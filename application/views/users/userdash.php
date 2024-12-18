<style>
	body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.copy-link-box {
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    max-width: 300px;
    width: 100%;
}

h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

@media (max-width: 768px) {
    .copy-link-box {
        max-width: 90%;
    }
}

</style>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome <?php echo $this->session->userdata('custom_username'); ?></h3>
                        <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <center><img src="userdash/images/welcome.png" alt="people" style="width: 50%;"></center>
                        <div class="weather-info">
                            <div class="d-flex">
                                <?php
          $category = 0;
          foreach ($categorylist as $value) {
            if ($value->value == 1) {
              $category++;
            }
          }
          ?>

                                <?php
          $sitelist = 0;
          foreach ($usersitelist as $value) {
            if ($value->value == 1) {
              $sitelist++;
            }
          }
          ?>


                                <!-- <?php
          $savedsite = 0;
          foreach ($savesitelists as $valuea) {
            if ($valuea->value == 1) {
              $savedsite++;
            }
          }
          ?> -->

<?php
$savedsite = 0;
foreach ($savesitelists as $value) {
    // Check if the property 'valuea' exists and is equal to 1
    if (isset($value->value) && $value->value == 1) {
        $savedsite++;
    }
}
?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <center>
                                    <p class="mb-4">Total Category</p>
                                    <p class="fs-30 mb-2"><?php echo $category ?></p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <center>
                                    <p class="mb-4">Total Sites/Extensions</p>
                                    <p class="fs-30 mb-2"><?php echo $sitelist ?></p>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 stretch-card transparent">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <center>
                                    <p class="mb-4">Total Saved Site</p>
                                    <p class="fs-30 mb-2"><?php echo $savedsite ?></p>
                                    <p class="fs-30 mb-2"></p>
                            </div>
                        </div>
                    </div>
					
                </div>
		<!--		<br>-->
		<!--		<center>-->
		<!--<div class="copy-link-box">-->
  <!--      <h5><bold>Copy This Link To Access Your Library</bold></h5>-->
  <!--      <input type="text" value="https://www.linklibrary.site/<?php echo $this->session->userdata('custom_username'); ?>" id="link-input">-->
  <!--      <button onclick="copyLink()">Copy</button>-->
  <!--  </div>-->
		<!--</center>-->
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Advanced Table</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="example" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Quote#</th>
                                                <th>Product</th>
                                                <th>Business type</th>
                                                <th>Policy holder</th>
                                                <th>Premium</th>
                                                <th>Status</th>
                                                <th>Updated at</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
	
    </div>


    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
	<script>
        function copyLink() {
            var linkInput = document.getElementById("link-input");
            linkInput.select();
            document.execCommand("copy");
            alert("Link copied to clipboard: " + linkInput.value);
        }
    </script>
