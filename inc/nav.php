<?php

$page_name = basename($_SERVER['PHP_SELF']);

?>

        <!--
            START: Navbar

            Additional Classes:
                .dk-navbar-sticky
                .dk-navbar-transparent
                .dk-navbar-white
                .dk-navbar-fullscreen || .dk-navbar-(xl, lg, md, sm)-fullscreen
        -->
        <nav class="dk-navbar dk-navbar-sticky dk-navbar-lg-fullscreen">
            <div class="container">
                <div class="dk-nav-content">
                    
                    <a href="/" class="dk-nav-logo">Sam&nbsp;MacIntyre</a>
                    
                    
                    
            <ul class="dk-nav dk-nav-align-right">
                <!-- LINK ONE -->
                <li class="dk-drop-item <?php if ($page_name === 'index.php') echo 'active'; ?>">
                    <a href="/">
                        Work
                    </a>
                </li>
                <!-- LINK TWO -->
				<li class="dk-drop-item <?php if ($page_name === 'about-me.php') echo 'active'; ?>">
                    <a href="about-me">
                        About Me
                    </a>
                </li>
                <!-- LINK THREE -->
                <li class="dk-drop-item <?php if ($page_name === 'contact.php') echo 'active'; ?>">
                    <a href="contact">
                        Contact
                    </a>
                </li>  
                <!-- LINK FOUR -->
                <li class="dk-drop-item">
                    <a href="https://www.linkedin.com/in/sammacintyre/">
                        <span class="fab fa-linkedin"></span>
                    </a>
                </li>
                 <!-- LINK FIVE -->
                <li class="dk-drop-item">
                    <a href="https://www.instagram.com/sammacintyre.design/">
                        <span class="fab fa-instagram"></span>
                    </a>
                </li>
            </ul>
                    
                </div>
            </div>
        </nav>

<div class="dk-navbar dk-navbar-fullscreen">
    <div class="container">
        <div class="d-block"></div>
        <div class="dk-nav-content">
            <!-- This will copy the contents of the dk-nav-content -->
        </div>
        <ul class="dk-social-links text-center">
            <li><a href="#" class="dk-social-facebook"><span class="fab fa-facebook-f"></span></a></li>
            <li><a href="#" class="dk-social-twitter"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#" class="dk-social-google-plus"><span class="fab fa-google-plus-g"></span></a></li>
            <li><a href="#" class="dk-social-behance"><span class="fab fa-behance"></span></a></li>
            <li><a href="#" class="dk-social-pinterest"><span class="fab fa-pinterest"></span></a></li>
            <li><a href="#" class="dk-social-instagram"><span class="fab fa-instagram"></span></a></li>
        </ul>
    </div>
</div>	
       
        <!-- END: Navbar -->
