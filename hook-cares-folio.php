<!DOCTYPE html>
<!--
    Name: Mimilism - Minimal and Modern Portfolio HTML Template
    Version: 1.0.0
    Author: dexad
    Website: https://dkcoder.info/
    Purchase: https://themeforest.net/user/unvab/portfolio
    Support: https://dkcoder.info/
    License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
    Copyright 2018.
-->

<html lang="en">

<?php include_once('./inc/head.php'); ?>

<body>
    <div class="dk-main">

        <?php include_once('./inc/nav.php'); ?>

        <div class="dk-box-4 pt-16 pb-16">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="display-3 text-dark-2 font-400">Hook Cares</h1>
                        <p class="text-dark mb-0">
                            Providing branding and marketing materials for a handmade crochet business with a spooky edge.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="dk-box-2 pb-16 pt-0">
            <div class="container">
                <div class="row vertical-gap dk-gallery">
                    <div class="col-sm-6">
                        <a href="assets/images/Hook-Cares-Folio1.jpg" class="dk-gallery-item">
                            <img src="assets/images/Hook-Cares-Folio1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="assets/images/Hook-Cares-Folio2.jpg" class="dk-gallery-item">
                            <img src="assets/images/Hook-Cares-Folio2.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-sm-6">
                        <a href="assets/images/Hook-Cares-Folio3.jpg" class="dk-gallery-item">
                            <img src="assets/images/Hook-Cares-Folio3.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="assets/images/Hook-Cares-Folio4.jpg" class="dk-gallery-item">
                            <img src="assets/images/Hook-Cares-Folio4.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="dk-box-2 pb-16 pt-0">
            <div class="container mnb-8">
                <div class="row justify-content-between vertical-gap mnt-35">
                    <div class="col-12 col-lg-3">
                        <ul class="dk-list">
                            <li><strong>Client</strong><br>Hook Cares Crochet</li>
                            <li><strong>Date</strong><br>October 2022</li>
                            <li>
                                <strong>Key Responsibilities</strong><br>
                                Brand Development<br>
                                Logo Design<br>
                                Illustration<br>
                                Print Design<br>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <p class="pb-20 mb-0">Hook Cares Crochet is a small handmade crochet business specialising in alternative gifts and horror amigurumi.</p>
                        <p class="mb-0">They needed branding that resonated with their target market to boost sales in local boutiques and at events such as The Gothic Market in Glasgow.  Drawing inspiration from the likes of American Horror Story and The Nightmare Before Christmas I created a wordmark logo and accompanying graphics that are clean and elegant with a spooky edge.</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <p class="pb-20 mb-0"></p>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once('./inc/pagination.php'); ?>

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