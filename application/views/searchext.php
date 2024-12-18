<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Search According To your keywords</span>
                <h2 class="mb-4">Search Result</h2>
            </div>
        </div>

        <div class="row">
		<?php if (count((is_countable($records)?$records:[]))): ?>
                        <?php
                        foreach ($records as $row) {
                        ?>
            <div class="col-md-4">
                <div class="services-wrap ftco-animate">
                    <div class="img" style="background-image: url(<?php echo $row->extimage ?>);"></div>
                    <div class="text">
                        
                        <h2><?php echo $row->extname ?></h2>
                        <p><?php echo $row->extintro ?></p>
                        <a href="<?php echo $row->extlink ?>" target="__blank" class="btn-custom">Click Here</a>
                    </div>
                </div>
            </div>
			<?php } ?>
        </div>

		
        <section class="ftco-intro">
		<?php else: ?>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <div class="img" style="background-image: url(images/bg_2.jpg);">
                            <div class="overlay"></div>
                            <h2>SORRY THE EXTENSION YOU ARE LOOKING IS NOT FOUND</h2>
                            <p>Maybe you entered the wrong name please check again</p>
                            <p class="mb-0"><a href="extensionlistpage" class="btn btn-primary px-4 py-3">Extensionlists</a></p>
                        </div>
                    </div>
                </div>
            </div>
			<?php endif ?>
        </section>

    </div>
</section>
