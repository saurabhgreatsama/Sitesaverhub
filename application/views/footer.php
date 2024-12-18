<footer class="ftco-footer">
    <!--<div class="container mb-5 pb-4">-->

    <!--</div>-->
    <div class="container-fluid bg-primary">
        <div class="container">
            <div class="row">
              
                <div class="col-lg col-md-6" style="margin-top: -20px;">
                   <center>  <ul class="ftco-footer-social list-unstyled mt-4">
                        <li><a href="https://www.instagram.com/sitesaverhub?igsh=aXU0OWt5M2NkdDZz"><span class="fa fa-instagram"></span></a></li>
                        <li><a href="https://in.pinterest.com/sitesaverhub/?invite_code=600f03336c2445daad379b611687a974&sender=1027243133664159506"><span class="fa fa-pinterest"></span></a></li>
                        <li><a href="https://www.linkedin.com/in/sitesaverhub-company-196a532a4/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="https://www.reddit.com/user/Front_Ad_5447/?utm_source=share&utm_medium=mweb3x&utm_name=mweb3xcss&utm_term=1&utm_content=share_button"><span class="fa fa-reddit"></span></a></li>
                         <!--<li><a href="#"><span class="fa fa-quora"></span></a></li>-->
                        <li><a href="mailto: support@sitesaverhub.com"><span class="fa fa-paper-plane"></span></a></li>
                    </ul></center>
                       <center>   <p class="mb-0">
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved by SITESAVERHUB
                    </p></center>
                    </div>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="fa fa-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <form action="sendingwebopnion" method="post" class="appointment-form ftco-animate">
                    <h3>Suggest Websites and Extensions</h3>
                    <div class="">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
						<div class="form-group">
                            <select name="type" class="form-control" id="" required>
							<option>Please Select</option>
                                <option value="0">Website</option>
                                <option value="1">
                                    Extension</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="webname" placeholder="Website Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="weblink" placeholder="Website Link" required>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="4" class="form-control" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="exampleModalCenters" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="fa fa-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <form action="sendingsavefiles" method="POST" class="appointment-form ftco-animate">
                    <input type="hidden" id="product_id" name="sid" value="">
                    <input type="hidden" name="user_id"
                        value="<?php echo $session = $this->session->userdata('uid'); ?>">
                    <h3>Almost There...</h3>
                   
                    <div class="">
                        <div class="form-group">
                            <input type="submit" value="save" class="btn btn-primary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Example model for extension starts from here -->

<div class="modal fade" id="examplemodelextension" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close d-flex align-items-center justify-content-center"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="fa fa-close"></span>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5">
                <form class="appointment-form ftco-animate">
                  <center><h3>We are working hard to make it live soon.</h3></center>
                    <div class="">
                        <div class="form-group">

                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                           <a href="<?= base_url("extensionlistpage") ?>"><input value="ThankYou" class="btn btn-primary py-3 px-4"></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>

<script src="<?php echo base_url('news/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('news/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
<script src="<?php echo base_url('news/js/popper.min.js'); ?>"></script>
<script src="<?php echo base_url('news/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('news/js/jquery.easing.1.3.js'); ?>"></script>
<script src="<?php echo base_url('news/js/jquery.waypoints.min.js'); ?>"></script>
<script src="<?php echo base_url('news/js/jquery.stellar.min.js'); ?>"></script>
<script src="<?php echo base_url('news/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('news/js/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?php echo base_url('news/js/jquery.animateNumber.min.js'); ?>"></script>
<script src="<?php echo base_url('news/js/bootstrap-datepicker.js'); ?>"></script>
<script src="<?php echo base_url('news/js/jquery.timepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('news/js/scrollax.min.js'); ?>"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script> -->
 <!--<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>-->
<!-- <script src="<?php echo base_url('news/js/google-map.js'); ?>"></script> -->

<script src="<?php echo base_url('news/js/main.js'); ?>"></script>

<script>
function setProductId(productId) {
    document.getElementById('product_id').value = productId;
}

function submitForm() {
  
}

// When the Save These Site button is clicked, set the product ID
document.addEventListener("DOMContentLoaded", function() {
    var saveButton = document.querySelector('.btn-primary[data-target="#exampleModalCenters"]');
    saveButton.addEventListener('click', function() {
        var productId = saveButton.getAttribute('data-product-id');
        setProductId(productId);
    });

   
});

  $(document).ready(function(){
        $('.category-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true, // Enable automatic sliding
            autoplaySpeed: 2000, // Set the speed in milliseconds (e.g., 2000 for 2 seconds)
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
    
</script>
</body>

</html>
