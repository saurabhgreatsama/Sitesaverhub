<section class="hero-wrap hero-wrap-2" style="background-image: url('assest/5.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Contact us <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Contact us</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Contact us</span>
                <h2 class="mb-4">Message us for more details</h2>
                <p>We're always here to help! Get in touch with us using the contact form on our website.</p>
                <?php if ($this->session->flashdata()) { ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('msg'); ?>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="row block-9">
            <div class="col-md-8">
                <form action="sendingmessage" method="POST" class="p-4 p-md-5 contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="message" id="" cols="30" rows="7" class="form-control"
                                    placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-md-4 d-flex pl-md-5">
                <div class="row">
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-pinterest"></span>
                        </div>
                        <div class="text">
                            <p><span>Pinterest:</span><a herf="https://in.pinterest.com/sitesaverhub/">Sitesaverhub</a> </p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-instagram"></span>
                        </div>
                        <div class="text">
                            <p><span>Instagram:</span> <a href="https://www.instagram.com/sitesaverhub?igsh=aXU0OWt5M2NkdDZz">Sitesaverhub</a></p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <div class="text">
                            <p><span>Email:</span> <a href="mailto:support@sitesaverhub.com">support@sitesaverhub.com</a></p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-globe"></span>
                        </div>
                        <div class="text">
                            <p><span>Website</span> <a href="https://sitesaverhub.com">sitesaverhub.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
