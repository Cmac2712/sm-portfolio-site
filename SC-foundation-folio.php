<?php include_once('./inc/head.php'); ?>

<body>
    <div class="dk-main">
        
	<?php include_once('./inc/nav.php'); ?>
            
    <div class="dk-box-4">
        <div class="bg-image bg-image-parallax">
            <img src="/assets/images/SCF-Folio1.png" class="jarallax-img" alt="">
            <div style="background-color: rgba(32, 32, 32, .6);"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="display-3 text-white">The Sporting Chance Foundation</h1>
                    <p class="lead text-white mb-0">Branding and promotional material for The Sporting Chance Foundation who aim to give young people opportunities to participate and achieve through sport.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="dk-box-2">
        <div class="container mnb-8">
            <div class="row justify-content-between vertical-gap mnt-35">
                <div class="col-12 col-lg-3">
                    <ul class="dk-list">
                        <li><strong>Client</strong><br>The Sporting Chance Foundation</li>
                        <li><strong>Date</strong><br>October 2018</li>
                        <li><strong>Key Responsibilities</strong><br>Logo Design<br>Video Editing<br></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p class="pb-20 mb-0">The Sporting Chance Foundation's ambition is to give young people a chance to participate, progress and achieve through sport.</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <p class="pb-20 mb-0">I created a logo for the charity, and edited footage from their successful 2018 summer camps into a promotional video.</p>
                </div>
            </div>
        </div>
    </div>

       <div class="dk-box-2 dk-padding-bot">
        <div class="container">
            <div class="row vertical-gap dk-gallery">
 
                <div class="col-12">
                    <!-- Hidden video div -->
                    <div style="display:none;" id="video1">
                        <video class="lg-video-object lg-html5" controls preload="none">
                            <source src="./assets/video/Sporting Chance Promo Video.mp4" type="video/mp4">
                             Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <!-- data-src should not be provided when you use html5 videos -->
                    <div id="html5-videos">
                      <div data-poster="video-poster1.jpg" data-sub-html="The Sporting Chance Foundation" data-html="#video1" class="dk-gallery-video text-center">
                          <img src="/assets/images/SCF-for-Folio.png" />
                          <a class="dk-btn dk-btn-play btn-center"></a>
                      </div>
                    </div>  
                </div> 
            </div>
        </div>
    </div>


    <div class="dk-pagination">
        <div class="container">
            <a href="brill-muffins-folio" class="dk-pagination-prev justify-content-start"><span class="dk-pagination-icon"><span class="icon pe-7s-angle-left"></span></span>Previous Project</a>
            <a href="/" class="dk-pagination-center">
                <span class="dk-pagination-center justify-content-center">
                                    <span class="dk-icon-quote"></span>
                </span>

            </a>
            <a href="disney-kitchen-folio" class="dk-pagination-next justify-content-end">
                Next Project<span class="dk-pagination-icon"><span class="icon pe-7s-angle-right"></span></span>
            </a>
        </div>
    </div>

    
<!-- START: Footer -->
<footer class="dk-footer-copyright">
    <div class="container">
        <ul class="dk-social-links dk-social-links-dark text-center mb-13">
            <li><a href="mailto:hello@sammacintyre.com" class="dk-social-behance"><span class="fas fa-envelope"></span></a></li>
            <li><a href="https://www.linkedin.com/in/sammacintyre/" class="dk-social-linkedin"><span class="fab fa-linkedin"></span></a></li>
            <li><a href="https://www.instagram.com/sammacintyre.design/" class="dk-social-instagram"><span class="fab fa-instagram"></span></a></li>
        </ul>
        <p class="mb-0">&copy; Sam MacIntyre <?php echo date('Y'); ?> </p>
    </div>
</footer>
<!-- END: Footer -->




    </div>

    

    
<!-- START: Scripts -->

<!-- Object Fit Images -->
<script src="/assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- Popper -->
<script src="/assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="/assets/vendor/tether/dist/js/tether.min.js"></script>
<script src="/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="/assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="/assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- Isotope -->
<script src="/assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>

<!-- ImagesLoaded -->
<script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Lightgallery -->
<script src="/assets/vendor/lightgallery/dist/js/lightgallery.min.js"></script>
<script src="/assets/vendor/lg-fullscreen/dist/lg-fullscreen.min.js"></script>
<script src="/assets/vendor/lg-video/dist/lg-video.min.js"></script>

<!-- Swiper -->
<script src="/assets/vendor/swiper/dist/js/swiper.min.js"></script>

<!-- The Mimilism -->
<script src="/assets/js/mimilism.min.js"></script>
<script src="/assets/js/mimilism-init.js"></script>
<!-- END: Scripts -->

<script>
    $('#html5-videos').lightGallery();
</script>
    
</body>
</html>
