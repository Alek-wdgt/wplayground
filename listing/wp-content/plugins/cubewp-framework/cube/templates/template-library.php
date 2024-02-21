<?php
wp_enqueue_style('cubewp-template-library');
$current_user = wp_get_current_user();
if( $current_user->user_firstname ){
	$display_name = $current_user->user_firstname;
}else{
	$display_name = $current_user->user_login;
}
?>
<div class="cwp-welcome-title">
    <h2>Welcome <?php echo $display_name; ?>! Let’s Get Started.</h2>
</div>
<div class="cubwp-welcome">
    <div class="cwp-dashboard-content-panel" id="Dashboard">
        <div class="cwp-dashboard-content">
			<?php do_action( 'cwp-welcome-theme-header' ); ?>
            <div class="cwp-dashboard-data-structure first-data-structure">
                <div class="cwp-dashboard-data-structure-header">
                    <div class="cwp-dashboard-data-structure-header-details">
                        <h3>All CubeWP Dynamic Templates Library</h3>
                        <p>Discover here variety of templates for different categories that will help you kick start your project. All currently available templates are exclusively available with any CubeWP <a href="https://cubewp.com/pricing/" target="_blank">All Access</a> premium plan.</p>
                    </div>
                </div>
                <div class="cwp-dashboard-data-structure-content">
                    <div class="cwp-dashboard-data-structure-pages yellowBooks">
                        <div class="cwp-dashboard-data-structure-pages-details">
                            <h2 class="title">YellowBooks</h2>
                            <p class="description">Create a traditional YellowPages inspired business directory.</p>
                            <span class="featured-text">CORE HIGHLIGHTED FEATURES</span>
                            <div class="features">
                                <ul>
                                    <li><span class="dashicons dashicons-yes"></span> Advanced Search & Filtering</li>
                                    <li><span class="dashicons dashicons-yes"></span> Front-end Listing Submission Form</li>
                                    <li><span class="dashicons dashicons-yes"></span> Claim Your Business Listing</li>
                                    <li><span class="dashicons dashicons-yes"></span> Multi-Criteria Reviews & Rating</li>
                                </ul>
                            </div>
                            <div class="download-btn">
                                <a href="https://cubewp.com/pricing/" target="_blank">Download Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
                                <a href="https://demowp.io/get-demo.php?demo=CubeWP" target="_blank"class="higlighted">Get instant Demo</a>
                            </div>
                            <p class="cubewp-library-small-headings">Included with All CubeWP Premium Plans</p>
                        </div>
                        <div class="cwp-dashboard-data-structure-pages-image">
                            <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/welcome-dashboard/template-library/YELLOW-BOOKS.png'; ?>" alt="" />
                        </div>
                    </div>
                    <div class="cwp-dashboard-data-structure-pages clx">
                        <div class="cwp-dashboard-data-structure-pages-details">
                            <h2 class="title">CLX</h2>
                            <p class="description">Create a local classified ads website.</p>
                            <span class="featured-text">CORE HIGHLIGHTED FEATURES</span>
                            <div class="features">
                                <ul>
                                    <li><span class="dashicons dashicons-yes"></span> Advanced Search & Filtering</li>
                                    <li><span class="dashicons dashicons-yes"></span> Front-end Listing Submission Form</li>
                                    <li><span class="dashicons dashicons-yes"></span> User Profile Listing</li>
                                    <li><span class="dashicons dashicons-yes"></span> Dedicated User Profile Page</li>
                                </ul>
                            </div>
                            <div class="download-btn">
                                <a  href="https://cubewp.com/pricing/" target="_blank">Download Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
								<a href="https://demowp.io/get-demo.php?demo=CubeWP" target="_blank">Get instant Demo</a>
                            </div>
                            <p class="cubewp-library-small-headings">Included with All CubeWP Premium Plans</p>
                        </div>
                        <div class="cwp-dashboard-data-structure-pages-image">
                            <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/welcome-dashboard/template-library/CLX.png'; ?>" alt="" />
                        </div>
                    </div>
                    <div class="cwp-dashboard-data-structure-pages streetWise">
                        <div class="cwp-dashboard-data-structure-pages-details">
                            <h2 class="title">StreetWise</h2>
                            <p class="description">Create an advanced Real Estate website.</p>
                            <span class="featured-text">CORE HIGHLIGHTED FEATURES</span>
                            <div class="features">
                                <ul>
                                    <li><span class="dashicons dashicons-yes"></span> Advanced Search & Filtering</li>
                                    <li><span class="dashicons dashicons-yes"></span> Agent Profile with Listings</li>
                                    <li><span class="dashicons dashicons-yes"></span> Agent / Owner Profile with Listings</li>
                                    <li><span class="dashicons dashicons-yes"></span> Dedicated User Profile Page</li>
                                </ul>
                            </div>
                            <div class="download-btn">
                                <a  href="https://cubewp.com/pricing/" target="_blank">Download Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
								<a href="https://demowp.io/get-demo.php?demo=CubeWP" target="_blank" class="higlighted"class="higlighted">Get instant Demo</a>
                            </div>
                            <p class="cubewp-library-small-headings">Included with All CubeWP Premium Plans</p>
                        </div>
                        <div class="cwp-dashboard-data-structure-pages-image">
                            <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/welcome-dashboard/template-library/STREET-WISE.png'; ?>" alt="" />
                        </div>
                    </div>
                    <div class="cwp-dashboard-data-structure-pages classifiedPro">
                        <div class="cwp-dashboard-data-structure-pages-details">
                            <h2 class="title">ClassifiedPro</h2>
                            <p class="description">Multipurpose Local Ads & Listing WordPress Theme.</p>
                            <span class="featured-text">CORE HIGHLIGHTED FEATURES</span>
                            <div class="features">
                                <ul>
                                    <li><span class="dashicons dashicons-yes"></span> AI-powered Recommendation Engine</li>
                                    <li><span class="dashicons dashicons-yes"></span> ‘Make an Offer’ functionality</li>
                                    <li><span class="dashicons dashicons-yes"></span> Peer-to-Peer messaging system</li>
                                    <li><span class="dashicons dashicons-yes"></span> Front-end submission feature with live preview</li>
                                </ul>
                            </div>
                            <div class="download-btn">
								<a  href="https://themeforest.net/item/classifiedpro-recommerce-classified-wordpress-theme/44528010?s_rank=1" target="_blank">Purchase Now <span class="dashicons dashicons-arrow-right-alt"></span></a>
                                <a href="https://demowp.io/get-demo.php?demo=ClassifiedPro" target="_blank" class="higlighted">Get instant Demo</a>
                            </div>
                            <p class="cubewp-library-small-headings">Exclusive Available on <img class="data-envato-logo" src="data:image/x-icon;base64,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" alt="image"></p>
                        </div>
                        <div class="cwp-dashboard-data-structure-pages-image">
                            <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/welcome-dashboard/template-library/CLASSIFIED-PRO.png'; ?>" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cwp-dashboard-content-sidebar">
            <div class="cwp-dashboard-sidebar">
                <div class="cwp-welcome-box">
                    <div class="cwp-welcome-box-content">
                        <h2>CubeWP Framework</h2>
                        <p>CubeWP is an end-to-end dynamic content framework for WordPress to help you shrink time and cut cost of development up to 90%.</p>
                        <div class="cwp-learmore-addons">
                            <a target="_blank" href="https://cubewp.com/store/">Learn More</a>
                        </div>
                    </div>
                    <div class="cwp-welcome-box-logo">
                        <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/cube-addons.png'; ?>" alt="" />
                    </div>
                </div>
                <div class="cwp-welcome-sidebar-box">
                    <div class="cwp-welcome-alert-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <h5>Looking for WordPress Customization Vendor for CubeWP?</h5>
                    </div>
                    <div class="cwp-welcome-box-content">
                    <h2>Request a Free Quote Today!</h2>
                    <p>WPVender team specializes in delivering white-label services for CubeWP framework and they are tailored to fit all your specific WordPress customization needs.</p>
                        <div class="cwp-learmore-addons">
                            <a target="_blank" href="https://wpvender.com/service/cubewp-customization-services/" >Learn More</a>
                        </div>
                    </div>
                    <div class="cwp-welcome-box-logo">
                        <img src="<?php echo CWP_PLUGIN_URI . 'cube/assets/admin/images/welcome-dashboard/template-library/WPVender.png'; ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
