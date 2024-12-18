<style>
.center-content {
    display: flex;
    justify-content: center;
}

.btn-wrapper {
    margin-right: 10px;
    /* Adjust this value to increase or decrease the space between buttons */
}
</style>
<?php 
			$sid = 0;
			foreach ($sitedeep as $row) {
				$sid = $row->sid;
			
			?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $row->siteimage ?>');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a
                            href="blog.html">Sitelists
                            <i class="fa fa-chevron-right"></i></a></span> <span><?php echo $row->sitename ?> <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread"><?php echo $row->sitename ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
<?php if ($this->session->flashdata('msg')): ?>
                        <div class="alert alert-success">
                            <center><?php echo $this->session->flashdata('msg'); ?></center>
                        </div>
                        <?php endif; ?>
    <div class="container">
        <div class="row">
		
            <div class="col-lg-8 ftco-animate">
                <center>
                    <h2 class="mb-3">You should visit these site</h2>
                </center>
                <p>
                    <center>
                        <img src="<?php echo $row->siteimage ?>" height="50px" alt="" class="img-fluid">
                    </center>
                </p>
                <p><?php echo $row->siteintroduction ?></p>


                <!-- <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">Life</a>
                        <a href="#" class="tag-cloud-link">Sport</a>
                        <a href="#" class="tag-cloud-link">Tech</a>
                        <a href="#" class="tag-cloud-link">Travel</a>
                    </div>
                </div> -->

                <!-- <section class="ftco-intro">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center">
					<div class="img"  style="background-image: url(images/bg_2.jpg);">
						<div class="overlay"></div>
						<h2>Providing Personalized and High Quality Services</h2>
						<p>We can manage your dream building A small river named Duden flows by their place</p>
						
					</div>
				</div>
			</div>
		</div>
	</section> -->


                <div class="row center-content">
                    <?php
					if(!empty($this->session->userdata('uid')))
					{
					?>
                    <!-- <p class="mb-0 btn-wrapper"><a href="#"
                            class="btn btn-primary px-4 py-3"  data-toggle="modal" data-target="#exampleModalCenters">Save These Site</a></p> -->
                    <p class="mb-0 btn-wrapper">
                        <a href="#" class="btn btn-primary px-4 py-3" data-toggle="modal"
                            data-target="#exampleModalCenters" data-product-id="<?php echo $row->sid ?>">
                            Save These Site
                        </a>
                    </p>

                    <?php
					}
					else{
					?>
                    <p class="mb-0 btn-wrapper"><a href="userloginpage/<?php echo $row->sid ?>"
                            class="btn btn-primary px-4 py-3">Save These Site</a></p>
                    <?php
					}
					?>

                    <p class="mb-0 btn-wrapper"><a href="<?php echo $row->sitelink ?>" target="_blank"
                            class="btn btn-primary px-4 py-3">Go to site</a></p>
                </div>




                <?php } ?>


            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form action="searching" method="POST" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" name="search" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Services</h3>
                        <li><a href="<?= base_url('sitelistpages') ?>">All Site Category</a></li>
                        <?php foreach ($sitecat as $row) {
							# code...
						 ?>
                        <li><a href="site?id=<?php echo $row->id ?>"><?php echo $row->sitecategoryname ?></a></li>
                        <?php } ?>
                    </div>
                </div>



                <div class="sidebar-box ftco-animate">
                    <h3>Mostly Used Websites</h3>
                    <div class="tagcloud">
                        <a href="https://zubtitle.com/" target="_blank" class="tag-cloud-link">Zubtitle</a>
                        <a href="https://www.synthesia.io/" target="_blank" class="tag-cloud-link">Synthesia</a>
                        <a href="https://tubitv.com/" target="_blank" class="tag-cloud-link">Tubi</a>
                        <a href="https://roadmap.sh/" target="_blank" class="tag-cloud-link">Roadmap</a>
                        <a href="https://www.renderforest.com/" target="_blank" class="tag-cloud-link">Renderforest</a>
                        <a href="https://fakeyou.com/" target="_blank" class="tag-cloud-link">Fakeyou</a>
                        <a href="https://www.repairclinic.com/" target="_blank" class="tag-cloud-link">Repairclinic</a>
                        <a href="https://toffeeshare.com/" target="_blank" class="tag-cloud-link">Toffeeshare</a>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading-sidebar">Paragraph</h3>
                    <p>We understand that finding the right extensions and websites can be time-consuming and expensive.
                        That's why we are committed to offering our services for free. With our website, you can access
                        a wide range of extensions and websites without paying a single penny.</p>
                </div>
            </div>

        </div>
    </div>
</section> <!-- .section -->
