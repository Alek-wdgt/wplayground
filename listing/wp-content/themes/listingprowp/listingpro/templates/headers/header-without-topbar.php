<?php

		
		global $listingpro_options;
		$lp_top_bar = $listingpro_options['top_bar_enable'];
		$headerBgcolor = $listingpro_options['header_bgcolor'];
		$listing_style = $listingpro_options['listing_style'];
		$header_fullwidth = $listingpro_options['header_fullwidth'];
		$headerSrch = $listingpro_options['search_switcher'];
		$topBannerView = lp_get_banner_style();


		$headerWidth = '';
		if($header_fullwidth == 1){
			$headerWidth = 'fullwidth-header';
		}else{
			$headerWidth = 'container';
		}

		
		$listing_styledata = '';
		$headerClass = 'header-normal';
		$listing_style = '';
		$listing_style = $listingpro_options['listing_style'];
		if(isset($_GET['list-style']) && !empty($_GET['list-style'])){
			$listing_style = esc_html($_GET['list-style']);
		}
		if(is_tax('location') || is_tax('listing-category') || is_tax('list-tags') || is_tax('features') || is_search()){
			if($listing_style == '2' || $listing_style == '3' || $listing_style == '6'){
				$headerClass = 'header-fixed';
			}
		}
		$menuColor= '';
		if(!is_front_page() || is_home()){
			$menuColor =  ' lp-menu-bar-color';
		}elseif ( $topBannerView == 'map_view' && is_front_page() ) {
			$menuColor =  ' lp-menu-bar-color';
		}

		$menuClass = '';
 		if(!is_front_page() && $headerSrch == 1 ){
		 	$menuClass = 'col-md-6';
	 	}elseif(!is_front_page() && $headerSrch != 1 ) {
		  	$menuClass = 'col-md-9';
	 	}else {
		  	$menuClass = 'col-md-9';
	 	}
	?>

	<!--================================full width with blue background====================================-->
 	
	<header class="header-without-topbar <?php echo esc_attr($headerClass); ?> pos-relative lp-header-full-width">
		<?php if(is_front_page()){ ?> <div class="lp-header-overlay"></div> <?php } ?>	
			
			<div id="menu" class="menu-height-0 small-screen">
				<?php
					$listing_access_only_users = $listingpro_options['lp_allow_vistor_submit'];
					$showAddListing = true;
					if( isset($listing_access_only_users)&& $listing_access_only_users==1 ){
						$showAddListing = false;
						if(is_user_logged_in()){
							$showAddListing = true;
						}
					}
					if($showAddListing==true) {
							$addURL = listingpro_url('add_listing_url_mode');
							if(!empty($addURL)) {
                                $lpl_add_listing    =   'lpl-add-listing-loggedout';
                                if(is_user_logged_in()) {
                                    $lpl_add_listing = 'lpl-add-listing-logedin';
                                }
							?>
							<a href="<?php echo listingpro_url('add_listing_url_mode'); ?>" class="lpl-button <?php echo esc_attr($lpl_add_listing); ?>"><?php esc_html_e('Add Listing', 'listingpro');?></a>
							<?php 
						}
					}
				?>
				<?php
					if (!is_user_logged_in()) {
                        $login_popup_style  =   $listingpro_options['login_popup_style'];
                        if($login_popup_style == 'style2') {
                            ?>
                            <a class="lpl-button lp-right-15 app-view-popup-style" data-target="#app-view-login-popup"><?php esc_html_e('Sign In', 'listingpro');?></a>
                            <?php
                        } else {
                            ?>
                            <a class="lpl-button md-trigger" data-modal="modal-3"><?php esc_html_e('Sign In', 'listingpro');?></a>
                            <?php
                        }
						?>

					<?php }  else { ?>					<a href="<?php echo wp_logout_url( esc_url(home_url('/')) ); ?>" class="lpl-button" style="right: 10px;"><?php esc_html_e('Sign out ','listingpro'); ?></a>					<?php } ?>
				<?php
					echo listingpro_mobile_menu();
				?>
			</div>

			<div class="lp-menu-bar header-bg-color-class">
			<div class="<?php echo esc_attr($headerWidth); ?>">
				<div class="row">
					<div class="col-md-2 col-xs-6 lp-logo-container">
						<div class="lp-logo">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<?php
								if(is_front_page()){
								    listingpro_primary_logo(); 
								}
								else{
									listingpro_secondary_logo(); 
								}
								?>
							</a>
						</div>
					</div>
					<div class="header-right-panel clearfix col-md-10 col-sm-10 col-xs-12">
						<?php 
							if($headerSrch == 1) {
								if(!is_front_page() && !is_page_template('template-dashboard.php')){
									get_template_part('templates/search/top_search');
								}
							}
						?>

						<div class="col-xs-6 mobile-nav-icon">
						
						
							<?php //echo listingpro_mobile_menu(); ?>
							<a href="#menu" class="nav-icon">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
						</div>
						<div class="<?php echo esc_attr($menuClass); ?> col-xs-12 lp-menu-container clearfix pull-right">
							<div class="pull-right">
								<div class="lp-joinus-icon">
									<?php get_template_part( 'templates/join-now'); ?>
								</div>
								<?php
									$listing_access_only_users = $listingpro_options['lp_allow_vistor_submit'];

									$showAddListing = true;
									if( isset($listing_access_only_users)&& $listing_access_only_users==1 ){
										$showAddListing = false;
										if(is_user_logged_in()){
											$showAddListing = true;
										}
									}
									
									if($showAddListing==true){
									$addURL = listingpro_url('add_listing_url_mode');
									if(!empty($addURL)){
								?>
										<div class="pull-right lp-add-listing-btn">
											<ul>
												<li>
													<a href="<?php echo esc_url($addURL); ?>">
														<i class="fa fa-plus"></i>
														<?php echo esc_html__('Add Listing', 'listingpro'); ?>
													</a>
													
												</li>
											</ul>
										</div>
								<?php 
									}
									}
								?>
							</div>
							<div class="pull-right padding-right-10">
								<div class="lp-menu menu">
									<?php
										if(is_front_page()) {
											echo listingpro_primary_menu();
										}else {
											echo listingpro_inner_menu();
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- ../menu-bar -->
		<?php //get_template_part( 'templates/banner'); ?>
	</header>
	<!--==================================Header Close=================================-->