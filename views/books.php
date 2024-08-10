<?php 
	echo $head_content;
	echo $top_panel_content;
	
	?>									

<!-- header container -->
        <div class='header_cont'>
            <div class='header_mask'>
                <div class='header_pattern'></div>
                <div class='header_img'></div>
            </div>
			<?php echo $menu_content; ?>
			<!-- #masthead -->
        </div>
        <!-- / header container -->
        <!-- breadcrumbs -->
        <section class='page_title wave'>
            <div class='container'>
                <div class='title'>
				<h1><?php echo $book . '&nbsp; &nbsp; ' . $class ; ?></h1></div>
			<nav class="bread-crumbs"><a href="https://www.ndmcedu.com/">Home</a></nav>
                <!-- .breadcrumbs -->
            </div>
            <canvas class='breadcrumbs' data-bg-color='#f8f2dc' data-line-color='#f9e8b2'></canvas>
        </section>
        <!-- / breadcrumbs -->
        <!-- main container -->
        <div id="main" class="site-main">
            <div class="page_content">
                <!-- pattern container / -->
                <div class='left-pattern pattern pattern-2'></div>
                <main>
                    <div class='grid_row clearfix'>
                        <!-- filter -->
                        <section class='cws_portfolio massonry'>
                            <!-- filter items -->
                            <div class='cws_wrapper'>
                                <div class='cws_portfolio_items grid grid-4 isotope'>
									<?php generate_article($article); ?> 
                                </div>
                            </div>
                            <!-- / filter items -->
                        </section>
                        <!-- / filter -->
                    </div>
                </main>
                <!-- / main content -->
                <!-- pattern container / -->
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