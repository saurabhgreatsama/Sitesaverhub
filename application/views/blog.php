<style>
.category-item {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
    text-align: center;
    transition: transform 0.3s;
}

.category-item:hover {
    transform: scale(1.05);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>




<br><br><br>
<div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Site Lists See all kinds of websites here</span>
            <h2 class="mb-4">Site Lists</h2>
            <?php if ($this->session->flashdata('msg')): ?>
            <div class="alert alert-success">
                <center><?php echo $this->session->flashdata('msg'); ?></center>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container text-center mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="sidebar-box bg-light rounded">
                    <form action="searching" method="POST" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" name="search" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

   <div class="row mt-4">
    <div class="col-md-8 offset-md-2">
        <div class="col-md-12">
                <div class="category-item">
                    <a href="<?= base_url('sitelistpages') ?>">ALL WEB CATEGORY</a>
                </div>
            </div>
        <div class="row category-slider">
            <?php foreach ($sitecat as $row) { ?>
                <div class="col-md-4">
                    <div class="category-item">
                        <a href="site?id=<?php echo $row->id ?>"><?php echo $row->sitecategoryname ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>





<section class="ftco-section bg-half-light">
    <div class="container">
        <div class="row">
            <?php 
					foreach ($sitelists as $row) {
						# code...
					
					?>
            <div class="col-md-4">
                <div class="services-wrap ftco-animate">
                    <div class="img" style="background-image: url(<?php echo $row->siteimage ?>);"></div>
                    <div class="text">
                        <!-- <div class="icon"><span class="flaticon-architect"></span></div> -->
                        <h2><?php echo $row->sitename ?></h2>
                        <p><?php echo $row->sitedetails ?></p>
                        <a href="sitedetails?sid=<?php echo $row->sid ?>" class="btn-custom">Explore
                            Us</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
