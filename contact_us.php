<?php 

$con=mysqli_connect("localhost","root","","real_estate");

if(isset($_POST['Contact']))
{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$sql = "insert into website_contact_us (First_name,Last_name,Email,Message,Date) values ('$first_name','$last_name','$email','$message',CURDATE())";
	$res = mysqli_query($con,$sql);
	// show the alert
}



?>
			
			
			
			<!-- header start -->
			<?php 
				include('header.php');
			?>
			<!-- header end -->
		<section class="content-wrap">
			<div data-elementor-type="wp-page" data-elementor-id="16941" class="elementor elementor-16941">
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-125aa3d elementor-section-height-min-height animated-slow elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-invisible slider-banner"
					data-id="125aa3d" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-default sub-slider-banner">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3b3a0df"
							data-id="3b3a0df" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated banner-title">
								<div class="elementor-element elementor-element-1bdf606 elementor-widget elementor-widget-heading"
									data-id="1bdf606" data-element_type="widget" data-widget_type="heading.default">
									<div class="elementor-widget-container">
										<h1 class="elementor-heading-title elementor-size-default">Contact us</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-5ec2734 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="5ec2734" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e1bd41f"
							data-id="e1bd41f" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-1410556 elementor-widget elementor-widget-spacer"
									data-id="1410556" data-element_type="widget" data-widget_type="spacer.default">
									<div class="elementor-widget-container">
										<div class="elementor-spacer">
											<div class="elementor-spacer-inner"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-d0b02e7 elementor-section-content-top animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
					data-id="d0b02e7" data-element_type="section"
					data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3139327"
							data-id="3139327" data-element_type="column"
							data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-8ff1404 elementor-widget elementor-widget-text-editor"
									data-id="8ff1404" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<p>Design your custom contact forms with this Houzez Elementor custom widget and
											connect your leads with the integrated Houzez CRM.</p>
									</div>
								</div>
								<div class="elementor-element elementor-element-f4a5b85 elementor-button-align-stretch elementor-widget elementor-widget-houzez_elementor_contact_form"
									data-id="f4a5b85" data-element_type="widget"
									data-widget_type="houzez_elementor_contact_form.default">
									<div class="elementor-widget-container">
										<script type="application/javascript">
											jQuery(document).bind("ready", function () {
												houzezValidateElementor("#houzez-form-f4a5b85");
											});
										</script>
										<form class="elementor-form" id="" method="post"
											name="">
											<div class="elementor-form-fields-wrapper elementor-labels-above">
												<div
													class="elementor-field-group elementor-column form-group elementor-field-group-name elementor-col-50 elementor-field-required elementor-mark-required">
													<label for="form-field-name" class="elementor-field-label">First
														Name</label><input type="text" name="first_name"
														id="form-field-name"
														class="elementor-field form-control elementor-size-sm elementor-field-textual"
														placeholder="Enter your name" title="* First Name"
														required="required">
												</div>
												<div
													class="elementor-field-group elementor-column form-group elementor-field-group-bf18955 elementor-col-50 elementor-field-required elementor-mark-required">
													<label for="form-field-bf18955" class="elementor-field-label">Last
														Name</label><input type="text" name="last_name"
														id="form-field-bf18955"
														class="elementor-field form-control elementor-size-sm elementor-field-textual"
														placeholder="Enter your last name" title="* Last Name"
														required="required">
												</div>
												<div
													class="elementor-field-group elementor-column form-group elementor-field-group-email elementor-col-100 elementor-field-required elementor-mark-required">
													<label for="form-field-email"
														class="elementor-field-label">Email</label><input type="email"
														name="email" id="form-field-email"
														class="elementor-field form-control elementor-size-sm elementor-field-textual"
														placeholder="Email" title="* Email" required="required">
												</div>
												<div
													class="elementor-field-group elementor-column form-group elementor-field-group-message elementor-col-100 elementor-field-required elementor-mark-required">
													<label for="form-field-message"
														class="elementor-field-label">Message</label><textarea
														class="elementor-field-textual elementor-field elementor-size-sm"
														name="message" id="form-field-message" rows="4"
														placeholder="Message" required="required"
														title="* Message"></textarea>
												</div>
												
												<div class>
												</div>
												<div
													class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
													<button type="submit" name="Contact"
														class="houzez-submit-button houzez-contact-form-js elementor-button elementor-size-sm">
														<i class="btn-loader houzez-loader-js"></i>
														Submit </button>
												</div>
											</div>
											<br />
											<div class="ele-form-messages"></div>
											<div class="error-container"></div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-bd2c54b"
							data-id="bd2c54b" data-element_type="column">
							<div class="elementor-widget-wrap">
							</div>
						</div>
						<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-66ddd7d"
							data-id="66ddd7d" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-23057bd elementor-widget elementor-widget-text-editor"
									data-id="23057bd" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<p class="padding-top"><strong>For inquiries</strong><strong> contact:</strong>
										</p>
										<p><strong>Amy Miller</strong><br />Public Relations Manager<br />774 NE 84th St
											Miami, FL 33879<br /><a href="/cdn-cgi/l/email-protection"
												class="__cf_email__"
												data-cfemail="84e5e9fdaae9ede8e8e1f6c4ecebf1fee1feaae7ebe9">[email&#160;protected]</a>
										</p>
										<p><strong>Kyle Parker</strong><br />Public Relations Associated<br />774 NE
											84th St Miami, FL 33879<br /><a href="/cdn-cgi/l/email-protection"
												class="__cf_email__"
												data-cfemail="b0dbc9dcd59ec0d1c2dbd5c2f0d8dfc5cad5ca9ed3dfdd">[email&#160;protected]</a>
										</p>
									</div>
								</div>
								<div class="elementor-element elementor-element-3c1041e elementor-widget elementor-widget-text-editor"
									data-id="3c1041e" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<p class="padding-top"><strong>Corporate Headquarters</strong><br />1584
											Biscayne Boulevard<br />Miami FL, 33176</p>
									</div>
								</div>
								<div class="elementor-element elementor-element-0b2a1b4 e-grid-align-left elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
									data-id="0b2a1b4" data-element_type="widget"
									data-widget_type="social-icons.default">
									<div class="elementor-widget-container">
										<div class="elementor-social-icons-wrapper elementor-grid">
											<span class="elementor-grid-item">
												<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-animation-shrink elementor-repeater-item-4d4e750"
													href="#" target="_blank">
													<span class="elementor-screen-only">Facebook</span>
													<i class="fab fa-facebook"></i> </a>
											</span>
											<span class="elementor-grid-item">
												<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-shrink elementor-repeater-item-a2d8d9c"
													href="#" target="_blank">
													<span class="elementor-screen-only">Twitter</span>
													<i class="fab fa-twitter"></i> </a>
											</span>
											<span class="elementor-grid-item">
												<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-shrink elementor-repeater-item-4483b35"
													href="#" target="_blank">
													<span class="elementor-screen-only">Youtube</span>
													<i class="fab fa-youtube"></i> </a>
											</span>
											<span class="elementor-grid-item">
												<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-animation-shrink elementor-repeater-item-4cd5d30"
													href="#" target="_blank">
													<span class="elementor-screen-only">Linkedin</span>
													<i class="fab fa-linkedin"></i> </a>
											</span>
											<span class="elementor-grid-item">
												<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-shrink elementor-repeater-item-9e48d2c"
													href="#" target="_blank">
													<span class="elementor-screen-only">Instagram</span>
													<i class="fab fa-instagram"></i> </a>
											</span>
											<span class="elementor-grid-item">
												<a class="elementor-icon elementor-social-icon elementor-social-icon-skype elementor-animation-shrink elementor-repeater-item-a996753"
													href="#" target="_blank">
													<span class="elementor-screen-only">Skype</span>
													<i class="fab fa-skype"></i> </a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-7c709d6 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
					data-id="7c709d6" data-element_type="section"
					data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a68845"
							data-id="6a68845" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-0d7d3e2 elementor-widget elementor-widget-spacer"
									data-id="0d7d3e2" data-element_type="widget" data-widget_type="spacer.default">
									<div class="elementor-widget-container">
										<div class="elementor-spacer">
											<div class="elementor-spacer-inner"></div>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-6550704 elementor-widget elementor-widget-google_maps"
									data-id="6550704" data-element_type="widget" data-widget_type="google_maps.default">
									<div class="elementor-widget-container">
										<div class="elementor-custom-embed">
											<iframe loading="lazy"
												src="https://maps.google.com/maps?q=1584%20Biscayne%20Blvd%2C%20Miami%2C%20FL%2033132&#038;t=m&#038;z=12&#038;output=embed&#038;iwloc=near"
												title="1584 Biscayne Blvd, Miami, FL 33132"
												aria-label="1584 Biscayne Blvd, Miami, FL 33132"></iframe>
										</div>
									</div>
								</div>
								<div class="elementor-element elementor-element-81258c8 elementor-widget elementor-widget-text-editor"
									data-id="81258c8" data-element_type="widget" data-widget_type="text-editor.default">
									<div class="elementor-widget-container">
										<p style="text-align: left;"><strong>Address</strong>: 1584 Biscayne Blvd,
											Miami, FL 33132 &#8211; <a href="#">Get Directions</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-ddbf539 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="ddbf539" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-84f5425"
							data-id="84f5425" data-element_type="column">
							<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-11366a9 elementor-widget elementor-widget-spacer"
									data-id="11366a9" data-element_type="widget" data-widget_type="spacer.default">
									<div class="elementor-widget-container">
										<div class="elementor-spacer">
											<div class="elementor-spacer-inner"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>
	</main>
	
	<!-- footer start -->
     <?php
        include('footer.php');
     ?>
    <!-- footer end -->


	<div class="back-to-top-wrap">
		<a href="#top" id="scroll-top" class="btn btn-primary btn-back-to-top">
			<i class="las la-angle-up"></i>
		</a>
	</div>
	<div id="compare-property-panel"
		class="compare-property-panel compare-property-panel-vertical compare-property-panel-right">
		<button class="compare-property-label" style="display: none;">
			<span class="compare-count compare-label"></span>
			<i class="houzez-icon icon-move-left-right"></i>
		</button>
		<p><strong>Compare listings</strong></p>
		<div class="compare-wrap"></div>
		<a href class="compare-btn btn btn-primary btn-full-width mb-2">Compare</a>
		<button class="btn btn-grey-outlined btn-full-width close-compare-panel">Close</button>
	</div>
	<div class="modal fade login-register-form" id="login-register-form" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<div class="login-register-tabs">
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="modal-toggle-1 nav-link" data-toggle="tab" href="#login-form-tab"
									role="tab">Login</a>
							</li>
						</ul>
					</div>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="tab-content">
						<div class="tab-pane fade login-form-tab" id="login-form-tab" role="tabpanel">
							<div id="hz-login-messages" class="hz-social-messages"></div>
							<form>
								<div class="login-form-wrap">
									<div class="form-group">
										<div class="form-group-field username-field">
											<input class="form-control" name="username" placeholder="Username or Email"
												type="text" />
										</div>
									</div>
									<div class="form-group">
										<div class="form-group-field password-field">
											<input class="form-control" name="password" placeholder="Password"
												type="password" />
										</div>
									</div>
								</div>
								<div class="form-tools">
									<div class="d-flex">
										<label class="control control--checkbox flex-grow-1">
											<input name="remember" type="checkbox">Remember me <span
												class="control__indicator"></span>
										</label>
										<a href="#" data-toggle="modal" data-target="#reset-password-form"
											data-dismiss="modal">Lost your password?</a>
									</div>
								</div>
								<input type="hidden" id="houzez_login_security" name="houzez_login_security"
									value="72b9d8b37a" /><input type="hidden" name="_wp_http_referer"
									value="/contact/" /> <input type="hidden" name="action" id="login_action"
									value="houzez_login">
								<input type="hidden" name="redirect_to" value="https://demo01.houzez.co/my-profile/">
								<button id="houzez-login-btn" type="submit" class="btn btn-primary btn-full-width">
									<span class="btn-loader houzez-loader-js"></span> Login
								</button>
							</form>
						</div>
						<div class="tab-pane fade register-form-tab" id="register-form-tab" role="tabpanel">
							<div id="hz-register-messages" class="hz-social-messages"></div>
							User registration is disabled for demo purpose.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade reset-password-form" id="reset-password-form" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Reset Password</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div id="reset_pass_msg"></div>
					<p>Please enter your username or email address. You will receive a link to create a new password via
						email.</p>
					<form>
						<div class="form-group">
							<input type="text" class="form-control forgot-password" name="user_login_forgot"
								id="user_login_forgot" placeholder="Enter your username or email" class="form-control">
						</div>
						<input type="hidden" id="fave_resetpassword_security" name="fave_resetpassword_security"
							value="bee08a8d9a" /><input type="hidden" name="_wp_http_referer" value="/contact/" />
						<button type="button" id="houzez_forgetpass" class="btn btn-primary btn-block">
							<span class="btn-loader houzez-loader-js"></span> Get new password </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="property-lightbox">
		<div class="modal fade" id="houzez-listing-lightbox" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div id="hz-listing-model-content" class="modal-content">
				</div>
			</div>
		</div>
	</div>
	<script>
		window.RS_MODULES = window.RS_MODULES || {};
		window.RS_MODULES.modules = window.RS_MODULES.modules || {};
		window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
		window.RS_MODULES.defered = true;
		window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
		window.RS_MODULES.type = 'compiled';
	</script>
	<script>(function () {
			function maybePrefixUrlField() {
				const value = this.value.trim()
				if (value !== '' && value.indexOf('http') !== 0) {
					this.value = 'http://' + value
				}
			}

			const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
			for (let j = 0; j < urlFields.length; j++) {
				urlFields[j].addEventListener('blur', maybePrefixUrlField)
			}
		})();</script>
	<script type="text/javascript">
		const lazyloadRunObserver = () => {
			const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
			const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						let lazyloadBackground = entry.target;
						if (lazyloadBackground) {
							lazyloadBackground.classList.add('e-lazyloaded');
						}
						lazyloadBackgroundObserver.unobserve(entry.target);
					}
				});
			}, { rootMargin: '200px 0px 200px 0px' });
			lazyloadBackgrounds.forEach((lazyloadBackground) => {
				lazyloadBackgroundObserver.observe(lazyloadBackground);
			});
		};
		const events = [
			'DOMContentLoaded',
			'elementor/lazyload/observe',
		];
		events.forEach((event) => {
			document.addEventListener(event, lazyloadRunObserver);
		});
	</script>
	<link rel="stylesheet" id="e-animations-css"
		href="https://demo01.houzez.co/wp-content/plugins/elementor/assets/lib/animations/animations.min.css"
		type="text/css" media="all" />
	<link rel="stylesheet" id="rs-plugin-settings-css"
		href="//demo01.houzez.co/wp-content/plugins/revslider/sr6/assets/css/rs6.css" type="text/css" media="all" />
	<style id="rs-plugin-settings-inline-css" type="text/css">
		#rs-demo-id {}
	</style>
	<script type="text/javascript" src="//demo01.houzez.co/wp-content/plugins/revslider/sr6/assets/js/rbtools.min.js"
		defer async id="tp-tools-js"></script>
	<script type="text/javascript" src="//demo01.houzez.co/wp-content/plugins/revslider/sr6/assets/js/rs6.min.js" defer
		async id="revmin-js"></script>
	<script type="text/javascript" src="https://demo01.houzez.co/wp-content/themes/houzez/js/vendors/all-scripts.js"
		id="houzez-all-in-one-js"></script>
	<script type="module" src="https://demo01.houzez.co/wp-content/themes/houzez/js/houzez-instant-page.js"
		id="houzez-instant-page-js"></script>
	<script type="text/javascript" src="https://demo01.houzez.co/wp-includes/js/jquery/ui/core.min.js"
		id="jquery-ui-core-js"></script>
	<script type="text/javascript" src="https://demo01.houzez.co/wp-includes/js/jquery/ui/mouse.min.js"
		id="jquery-ui-mouse-js"></script>
	<script type="text/javascript" src="https://demo01.houzez.co/wp-includes/js/jquery/ui/slider.min.js"
		id="jquery-ui-slider-js"></script>
	<script type="text/javascript" src="https://demo01.houzez.co/wp-content/themes/houzez/js/vendors/jquery.vide.min.js"
		id="vide-js"></script>
	<script type="text/javascript" id="houzez-custom-js-extra">
		/* <![CDATA[ */
		var houzez_vars = { "admin_url": "https:\/\/demo01.houzez.co\/wp-admin\/", "houzez_rtl": "no", "user_id": "0", "redirect_type": "diff_page", "login_redirect": "https:\/\/demo01.houzez.co\/my-profile\/", "property_gallery_popup_type": "houzez", "wp_is_mobile": "", "default_lat": "25.686540", "default_long": "-80.431345", "houzez_is_splash": "", "prop_detail_nav": "yes", "add_to_favorite_login_required": "0", "disable_property_gallery": "1", "grid_gallery_behaviour": "houzez-show-gallery", "is_singular_property": "", "search_position": "under_nav", "login_loading": "Sending user info, please wait...", "not_found": "We didn't find any results", "houzez_map_system": "google", "for_rent": "for-rent", "for_rent_price_slider": "for-rent", "search_min_price_range": "200", "search_max_price_range": "2500000", "search_min_price_range_for_rent": "50", "search_max_price_range_for_rent": "25000", "get_min_price": "0", "get_max_price": "0", "currency_position": "before", "currency_symbol": "$", "decimals": "0", "decimal_point_separator": ".", "thousands_separator": ",", "is_halfmap": "", "houzez_date_language": "", "houzez_default_radius": "50", "houzez_reCaptcha": "", "geo_country_limit": "0", "geocomplete_country": "", "is_edit_property": "", "processing_text": "Processing, Please wait...", "halfmap_layout": "", "prev_text": "Prev", "next_text": "Next", "keyword_search_field": "prop_title", "keyword_autocomplete": "1", "autosearch_text": "Searching...", "paypal_connecting": "Connecting to paypal, Please wait... ", "transparent_logo": "", "is_transparent": "", "is_top_header": "0", "simple_logo": "https:\/\/demo01.houzez.co\/wp-content\/uploads\/2020\/02\/logo-houzez-color.png", "retina_logo": "https:\/\/demo01.houzez.co\/wp-content\/uploads\/2016\/03\/logo-houzez-color@2x.png", "mobile_logo": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white.png", "retina_logo_mobile": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png", "retina_logo_mobile_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png", "custom_logo_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white.png", "retina_logo_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png", "monthly_payment": "Monthly Payment", "weekly_payment": "Weekly Payment", "bi_weekly_payment": "Bi-Weekly Payment", "compare_url": "https:\/\/demo01.houzez.co\/compare-properties\/", "favorite_url": "https:\/\/demo01.houzez.co\/favorite-properties\/", "template_thankyou": "https:\/\/demo01.houzez.co\/thank-you\/", "compare_page_not_found": "Please create page using compare properties template", "compare_limit": "Maximum item compare are 4", "compare_add_icon": "", "compare_remove_icon": "", "add_compare_text": "Add to Compare", "remove_compare_text": "Remove from Compare", "is_mapbox": "google", "api_mapbox": "", "is_marker_cluster": "1", "g_recaptha_version": "v3", "s_country": "", "s_state": "", "s_city": "", "s_areas": "", "woo_checkout_url": "", "agent_redirection": "" };
		/* ]]> */
	</script>
	<script type="text/javascript" src="https://demo01.houzez.co/wp-content/themes/houzez/js/custom.min.js"
		id="houzez-custom-js"></script>
	<script type="text/javascript"
		src="https://demo01.houzez.co/wp-content/plugins/houzez-theme-functionality/assets/frontend/js/jquery.validate.min.js"
		id="validate-js"></script>
	<script type="text/javascript"
		src="https://demo01.houzez.co/wp-content/plugins/houzez-theme-functionality/assets/frontend/js/houzez-validate.js"
		id="houzez-validate-js-js"></script>
	<script type="text/javascript" src="https://demo01.houzez.co/wp-includes/js/jquery/jquery.form.min.js"
		id="jquery-form-js"></script>
	<script type="text/javascript" defer
		src="https://demo01.houzez.co/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js"
		id="mc4wp-forms-api-js"></script>
	<script type="text/javascript"
		src="https://demo01.houzez.co/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js"
		id="elementor-webpack-runtime-js"></script>
	<script type="text/javascript"
		src="https://demo01.houzez.co/wp-content/plugins/elementor/assets/js/frontend-modules.min.js"
		id="elementor-frontend-modules-js"></script>
	<script type="text/javascript"
		src="https://demo01.houzez.co/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js"
		id="elementor-waypoints-js"></script>
	<script type="text/javascript" id="elementor-frontend-js-before">
		/* <![CDATA[ */
		var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.23.2", "is_static": false, "experimentalFeatures": { "additional_custom_breakpoints": true, "container_grid": true, "e_swiper_latest": true, "e_nested_atomic_repeaters": true, "e_onboarding": true, "home_screen": true, "ai-layout": true, "landing-pages": true, "e_lazyload": true }, "urls": { "assets": "https:\/\/demo01.houzez.co\/wp-content\/plugins\/elementor\/assets\/", "ajaxurl": "https:\/\/demo01.houzez.co\/wp-admin\/admin-ajax.php" }, "nonces": { "floatingButtonsClickTracking": "ff7770c291" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 16941, "title": "Contact%20%E2%80%93%20Houzez", "excerpt": "", "featuredImage": false } };
		/* ]]> */
	</script>
	<script type="text/javascript" src="https://demo01.houzez.co/wp-content/plugins/elementor/assets/js/frontend.min.js"
		id="elementor-frontend-js"></script>
</body>

</html>