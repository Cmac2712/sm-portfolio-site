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
                    
                    <a href="/" class="dk-nav-logo font-500">Sam&nbsp;MacIntyre</a>
                    
                    
                    
            
                    
                </div>
            </div>
        </nav>

<div class="dk-navbar dk-navbar-fullscreen">
    <div class="container">
        <div class="d-block"></div>
        <div class="dk-nav-content">
            <!-- This will copy the contents of the dk-nav-content -->
<ul class="dk-nav">
                <!-- LINK ONE -->
                <li class="dk-drop-item <?php if ($page_name === '/index.php') echo 'active'; ?>">
                    <a href="/" class="font-500">
                        Work
                    </a>
                </li>
                <!-- LINK TWO -->
				<li class="dk-drop-item <?php if ($page_name === '/about-me.php') echo 'active'; ?>">
                    <a href="about-me" class="font-500">
                        About Me
                    </a>
                </li>
                <!-- LINK THREE -->
                <li class="dk-drop-item <?php if ($page_name === '/contact.php') echo 'active'; ?>">
                    <a href="contact" class="font-500">
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
</div>	
       
        <!-- END: Navbar -->
