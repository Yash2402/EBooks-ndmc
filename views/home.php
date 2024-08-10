<?php 
	echo $head_content;
	echo $top_panel_content;
?>
	
        <!-- slider and menu container -->
        <div class='slider_vs_menu'>
            <div class='header_cont'>
                <div class='header_mask'>
                    <div class='header_pattern'></div>
                </div>
				<?php echo $menu_content; ?>
				<!-- #masthead -->
            </div>
			<?php echo $slider_content; ?>
        </div>
        <!-- / slider and menu container -->
        <div class='benefits_area wave'>
            <!-- canvas -->
            <div class='cloud_wrapper'>
                <canvas class='cloud' data-bg-color='#f9e8b2' data-line-color='#ffffff' data-pattern-src='img/dots-pattern.png'></canvas>
            </div>
            <!-- / canvas -->
            <div class='container'>

            </div>
        </div>
        <!-- canvas -->
        <div class="cloud_wrapper">
            <canvas class="white_cloud"></canvas>
        </div>
        <!-- / canvas -->
        <!-- main container -->
        <div id="main" class="site-main">
            <div class="page_content">
                <!-- pattern conatainer / -->
                <div class='left-pattern pattern pattern-2'></div>
                <main>
                    <!-- divider -->
                    <div class='grid_row clearfix' style='padding-bottom: 50px;'>
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / divider -->
                    <!-- section -->
                    <div class='grid_row clearfix' style='padding-top: 50px;padding-bottom: 50px;'>
                        <div class='grid_col grid_col_12'>
                            <div class='ce clearfix'>
                                <div class='cws_callout'>
                                    <div class='content_section'>
                                        <div class='callout_title'>
                                            <div class="bees bees-end"><span></span></div>e-Books Download Portal</div>
                                        <div class='separate'></div>
                                        <div class='callout_text'>
                                            <p>Looking for books in digital format ? <br />
											This e-Books Download Portal is designed for students to provide them free <br />
											and easy access to all books taught in North DMC schools, in digital format.</p>
                                        </div>
                                    </div>
                                    <div class='button_section'><a href='#' class='cws_button xlarge'>PDF e-Books<div class='button-shadow'></div></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / section -->
                </main>
                <!-- pettaren container / -->
                <div class='right-pattern pattern pattern-2'></div>
                <!-- footer image container / -->
                <div class="footer_image"></div>
            </div>
            <!-- svg filter -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="0" style='display:none;'>
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                        <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                    </filter>
                </defs>
            </svg>
            <!-- / svg filter -->
        </div>
        <!-- #main -->

<?php 
	echo $footer_content;
?>
