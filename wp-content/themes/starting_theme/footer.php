</div>
<footer <?php if(!is_404()){ ?>  class="mt110" <?php } ?>>
    <div class="container-fluid footer_fluid footer_top_fluid pt68 pb26">
        <div class="container">
            <div class="row">
                <div class="col-menu-f col-lg-3 col-md-6 col-sm-12 footer_logo mb26">
					<?php dynamic_sidebar( 'footer_logo' ); ?>
                </div>
                <div class=" col-menu-f col-lg-3 col-md-6 col-sm-12 footer_left mb26 pb6">
					<?php
					if ( has_nav_menu( 'footer_menu-onehalf' ) ) {
						wp_nav_menu( array(
							'theme_location'  => 'footer_menu-onehalf',
							'menu_class'      => 'footer_menu',
							'container'       => '',
							'container_class' => '',
							'walker'          => new Main_Submenu_Class()
						) );
					}
					?>
                </div>

                <div class="col-menu-f col-lg-3 col-md-6 col-sm-12 footer_center mb26 pb6">
                    <?php
                    if (has_nav_menu('footer_menu-center')) {
                        wp_nav_menu(array(
                            'theme_location' 	=> 'footer_menu-center',
                            'menu_class' 	 	=> 'footer_menu',
                            'container'		 	=> '',
                            'container_class' 	=> '',
                            'walker' 			=> new Main_Submenu_Class()
                        ));
                    }
                    ?>
                </div>
                <div class="col-menu-f col-lg-3 col-md-6 col-sm-12 footer_right mb26">
                    <?php
                    if (has_nav_menu('footer_social')) {
                        wp_nav_menu(array(
                            'theme_location' 	=> 'footer_social',
                            'menu_class' 	 	=> 'footer_menu',
                            'container'		 	=> '',
                            'container_class' 	=> '',
                            'walker' 			=> new Main_Submenu_Class()
                        ));
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid footer_fluid footer_bottom_fluid p26">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 footer_bottom">
                    <div class="copyright_f"><?php dynamic_sidebar( 'footer_copyright' ); ?><span><?php echo date('Y');?></span></div>
                 <?php dynamic_sidebar( 'footer_design' ); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>