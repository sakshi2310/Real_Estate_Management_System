<?php 


$con = mysqli_connect("localhost", "root", "", "real_estate");

// $sql = "SELECT * FROM `property_register` WHERE Approval_status='Approved' ORDER BY id DESC ";
// $res = mysqli_query($con,$sql);

$sql = "SELECT * FROM property_register WHERE Approval_status='Approved'";

// Handle property type checkboxes
if (!empty($_POST['propertyTypes'])) {
    $propertyTypes = $_POST['propertyTypes'];
    $propertyTypeConditions = [];
    foreach ($propertyTypes as $type) {
        $propertyTypeConditions[] = "Type = '$type'";
        $propertyTypeConditions[] = "Status = '$type'";
        $propertyTypeConditions[] = "Area_name = '$type'";
    }
    // Add the conditions for selected types
    $sql .= " AND (" . implode(' OR ', $propertyTypeConditions) . ")";
}

$sql .= " ORDER BY id DESC";

$res = mysqli_query($con, $sql);

// Output the data to be rendered in the table (replace 'data-table' in your HTML)





?>   
   
   
   <!-- header start -->
   <script src="Admin/assets/js/jquery.min.js"></script>
    <script>

        $(document).ready(function() {
            // Capture checkbox click events
            $('.btn-check').change(function() {
                // Capture selected checkboxes
                var propertyTypes = [];
                $('input[type="checkbox"]:checked').each(function() {
                    propertyTypes.push($(this).val());
                });

                console.log(propertyTypes); // Log selected property types
                
                $.ajax({
                    type: "POST",
                    data: { 
                        propertyTypes: propertyTypes // Send selected property types
                    },
                    url: "property.php", 
                    success: function(response) {
                        $('#data-table').html($(response).find('#data-table').html()); // Update the table with filtered results
                    },
                    error: function(xhr, status, error) {
                        console.log("Error: " + error); // Log errors if any
                    }
                });
            });
        });


    </script>


      <?php
        include('header-light.php');
        ?>
      <!-- header end -->
    
      <section class="listing-wrap listing-v1">
          <div class="container">
              <div class="page-title-wrap">
                  <div class="breadcrumb-wrap">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item breadcrumb-item-home"><i
                                      class="las la-home mr-2"></i><a href="#">Home</a>
                              </li>
                              <li class="breadcrumb-item active"><i class="las la-angle-right mr-2"></i> Property</li>
                          </ol>
                      </nav>
                  </div>
                  <div class="d-flex align-items-center">
                      <div class="page-title flex-grow-1">
                          <h1>Property</h1>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-12 bt-sidebar-wrap houzez_sticky">
                      <aside id="sidebar" class="sidebar-wrap">
                          <div id="houzez_property_taxonomies-3" class="widget widget-wrap widget-taxonomy">
                              <div class="widget-header">
                                  <h3 class="widget-title">Type of property</h3>
                              </div>
                            <div class="widget-body">
                                <div class="btn-group d-flex flex-wrap gap-4 checkboxs mt-3 property-type" role="group" aria-label="Basic checkbox toggle button group ">
                                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off" value="Villa">
                                    <label class="btn btn-outline-primary" for="btncheck1">Villa</label>
                                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" value="Plot of Land">
                                    <label class="btn btn-outline-primary" for="btncheck2">Plot of Land</label>
                                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off" value="Industrial Property">
                                    <label class="btn btn-outline-primary" for="btncheck3">Industrial Property</label>
                                    <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off" value="Apartment/Flat">
                                    <label class="btn btn-outline-primary" for="btncheck4">Apartment/Flat</label>
                                </div>
                            </div>
                            <style>
                                #btncheck1:checked + label , #btncheck2:checked + label , #btncheck3:checked + label , #btncheck4:checked + l   abel
                                {
                                    background-color: #00AEEF;
                                    color: white !important;
                                }
                            </style>
                          </div>
                          <div id="houzez_featured_properties-2" class="widget widget-wrap widget-featured-property">
                              <div class="widget-header">
                                  <h3 class="widget-title">Status</h3>
                              </div>
                              <div class="widget-body widget-featured-property-slider-wrap">
                                  <div class="btn-group d-flex flex-wrap gap-4 checkboxs mt-3 property-type" role="group" aria-label="Basic checkbox toggle button group ">
                                      <input type="checkbox" class="btn-check" id="Sbtn1" autocomplete="off" value="Rent">
                                      <label class="btn btn-outline-primary" for="Sbtn1">Rent</label>
                                      <input type="checkbox" class="btn-check" id="Sbtn2" autocomplete="off" value="Sale">
                                      <label class="btn btn-outline-primary" for="Sbtn2">Sale</label>
                                  </div>
                              </div>
                          </div>
                          <style>
                                #Sbtn1:checked + label ,  #Sbtn2:checked + label
                                {
                                    background-color: #00AEEF;
                                    color: white !important;
                                }
                            </style>
                         <div id="houzez_featured_properties-2" class="widget widget-wrap widget-featured-property">
                              <div class="widget-header">
                                  <h3 class="widget-title">Status</h3>
                              </div>
                              <div class="widget-body widget-featured-property-slider-wrap">
                                  <div class="btn-group d-flex flex-wrap gap-4 checkboxs mt-3 property-type" role="group" aria-label="Basic checkbox toggle button group ">
                                      <input type="checkbox" class="btn-check" id="a1" autocomplete="off" value="Pal">
                                      <label class="btn btn-outline-primary" for="a1">Pal</label>
                                      <input type="checkbox" class="btn-check" id="a2" autocomplete="off" value="Kamrej">
                                      <label class="btn btn-outline-primary" for="a2">Kamrej</label>
                                      <input type="checkbox" class="btn-check" id="a3" autocomplete="off" value="Olpad">
                                      <label class="btn btn-outline-primary" for="a3">Olpad</label>
                                      <input type="checkbox" class="btn-check" id="a4" autocomplete="off" value="Katargam">
                                      <label class="btn btn-outline-primary" for="a4">Katargam</label>
                                      <input type="checkbox" class="btn-check" id="a5" autocomplete="off" value="Palanpor">
                                      <label class="btn btn-outline-primary" for="a5">Palanpor</label>
                                      <input type="checkbox" class="btn-check" id="a6" autocomplete="off" value="Vesu">
                                      <label class="btn btn-outline-primary" for="a6">Vesu</label>
                                      <input type="checkbox" class="btn-check" id="a7" autocomplete="off" value="Simada">
                                      <label class="btn btn-outline-primary" for="a7">Simada</label>
                                      <input type="checkbox" class="btn-check" id="a8" autocomplete="off" value="Motavarachha">
                                      <label class="btn btn-outline-primary" for="a8">Motavarachha</label>
                                      <input type="checkbox" class="btn-check" id="a9" autocomplete="off" value="Utran">
                                      <label class="btn btn-outline-primary" for="a9">Utran</label>
                                      <input type="checkbox" class="btn-check" id="a10" autocomplete="off" value="Sarthana">
                                      <label class="btn btn-outline-primary" for="a10">Sarthana</label>

                                  </div>
                              </div>
                          </div>
                      </aside>
                      <style>
                                #a1:checked + label ,  #a2:checked + label,  #a3:checked + label,  #a4:checked + label,  #a5:checked + label,  #a6:checked + label,  #a7:checked + label,  #a8:checked + label,  #a9:checked + label,  #a10:checked + label
                                {
                                    background-color: #00AEEF;
                                    color: white !important;
                                }
                            </style>
                  </div>
                  <div class="col-lg-8 col-md-12 bt-content-wrap " id="data-table">
                      <article class="post-28 page type-page status-publish hentry">
                      </article>
                      <div class="listing-tools-wrap">
                          <div class="d-flex align-items-center mb-2">
                            
                          </div>
                      </div>
                      <div class="listing-view grid-view card-deck">
                        <?php while($row = mysqli_fetch_assoc($res) ) {  ?>
                          <div class="item-listing-wrap hz-item-gallery-js card"
                              data-hz-id="hz-115" id="data-table">
                              <div
                                  class="item-wrap item-wrap-v1 item-wrap-no-frame h-100">
                                  <div
                                      class="d-flex align-items-center h-100">
                                      <div class="item-header">
                                          <span
                                              class="label-featured label">Featured</span>
                                          <div
                                              class="labels-wrap labels-right">
                                              <a href="#"
                                                  class="label-status label status-color-34">
                                                  For <?php echo $row['Status']; ?>
                                              </a>
                                          </div>
                                          <ul
                                              class="item-price-wrap hide-on-list">
                                              <li class="item-price"> <?php echo $row['Price']; ?>
                                              </li>
                                          </ul>
                                          <ul class="item-tools">
                                              <li
                                                  class="item-tool item-preview">
                                                  <span
                                                      class="hz-show-lightbox-js"
                                                      data-listid="115"
                                                      data-toggle="tooltip"
                                                      data-placement="top"
                                                      title="Preview">
                                                      <i class="las la-compress-arrows-alt"></i>
                                                  </span>
                                              </li>
                                              <li
                                                  class="item-tool item-favorite">
                                                  <span
                                                      class="add-favorite-js item-tool-favorite"
                                                      data-toggle="tooltip"
                                                      data-placement="top"
                                                      title="Favourite"
                                                      data-listid="115">
                                                      <i class="las la-heart"></i>
                                                  </span>
                                              </li>
                                              <li
                                                  class="item-tool item-compare">
                                                  <span
                                                      class="houzez_compare compare-115 item-tool-compare show-compare-panel"
                                                      data-toggle="tooltip"
                                                      data-placement="top"
                                                      title="Add to Compare"
                                                      data-listing_id="115">
                                                      <i class="las la-plus-circle"></i>
                                                  </span>
                                              </li>
                                          </ul>
                                          <div class="listing-image-wrap">
                                              <div class="listing-thumb">
                                                  <a target=""
                                                      href="single_property.php?pro_id=<?php echo $row['id'];?>"
                                                      class="listing-featured-thumb hover-effect">
                                                      <img loading="lazy"
                                                          decoding="async"
                                                          width="592"
                                                          height="444"
                                                          src="User/upload/<?php echo $row['Image1']; ?>"
                                                          alt srcset
                                                          sizes="(max-width: 592px) 100vw, 592px" />
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="preview_loader"></div>
                                      </div>
                                      <div class="item-body flex-grow-1">
                                          <div
                                              class="labels-wrap labels-right">
                                              <a href="#"
                                                  class="label-status label status-color-34">
                                                  For <?php echo $row['Status']; ?>
                                              </a>
                                          </div>
                                          <h2 class="item-title">
                                              <a target=""
                                                  href="single_property.php?pro_id=<?php echo $row['id'];?>"><?php echo $row['Property_title']; ?></a>
                                          </h2>
                                          <ul
                                              class="item-price-wrap hide-on-list">
                                              <li class="item-price"><?php echo $row['Price']; ?>
                                              </li>
                                          </ul>
                                          <address class="item-address"><?php echo $row['Address']; ?>
                                          </address>
                                          <ul
                                              class="item-amenities item-amenities-with-icons">
                                              <li class="h-beds"><i class="las la-bed"></i><span
                                                      class="item-amenities-text">Beds:</span>
                                                  <span
                                                      class="hz-figure"><?php echo $row['Badrooms']; ?></span>
                                              </li>
                                              <li class="h-baths"><i class="las la-bath"></i><span
                                                      class="item-amenities-text">Baths:</span>
                                                  <span
                                                      class="hz-figure"><?php echo $row['Bathroom']; ?></span>
                                              </li>
                                              <li class="h-cars"><i
                                                      class="las la-car mr-1"></i><span
                                                      class="item-amenities-text">Balcony:</span>
                                                  <span
                                                      class="hz-figure"><?php echo $row['Balcony']; ?></span>
                                              </li>
                                              <li class="h-area"><i
                                                      class="las la-ruler-combined mr-1"></i><span
                                                      class="hz-figure"><?php echo $row['Land_price']; ?></span>
                                                  <span
                                                      class="hz-figure area_postfix"><?php echo $row['Land_postfix']; ?></span>
                                              </li>
                                              <li class="h-type">
                                                  <span><?php echo $row['Type']; ?></span>
                                              </li>
                                          </ul>                                           <div class="item-author">
                                              <i
                                                  class="las la-user mr-1"></i>
                                              <a
                                                  href="#">Samuel
                                                  Palmer</a>
                                          </div>
                                          <div class="item-date">
                                              <i
                                                  class="las la-paperclip mr-1"></i>
                                              4 years ago
                                          </div>
                                      </div>
                                      <div class="item-footer clearfix">
                                          <div class="item-author">
                                              <i
                                                  class="las la-user mr-1"></i>
                                              <a
                                                  href="#">Samuel
                                                  Palmer</a>
                                          </div>
                                          <div class="item-date">
                                              <i
                                                  class="las la-paperclip mr-1"></i>
                                              4 years ago
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <?php } ?>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      </main>

      <?php
        include('footer.php');
        ?>

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
                          <div class="header-inner-wrap">
                              <div class="navbar d-flex align-items-center">
                                  <div class="logo logo-splash">
                                      <a href="#" class="logo-img">
                                          <img src="assets/dreamwell-light.png" alt="">
                                      </a>
                                  </div>
                                  <nav class="main-nav on-hover-menu navbar-expand-lg flex-grow-1">
                                      <ul id="main-nav" class="navbar-nav justify-content-end">
                                          <li id="menu-item-60"
                                              class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children nav-item menu-item-60 menu-item-design-default dropdown">
                                              <a class="nav-link" href="index.php">Home</a>
                                          </li>
                                          <li id="menu-item-71"
                                              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-71 menu-item-design-default dropdown">
                                              <a class="nav-link" href="about.php">About Us</a>
                                          </li>
                                          <li id="menu-item-71"
                                              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-71 menu-item-design-default dropdown">
                                              <a class="nav-link" href="contact_us.php">Contact Us</a>
                                          </li>
                                          <li id="menu-item-2795"
                                              class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item menu-item-2795 menu-item-design-default dropdown">
                                              <a class="nav-link" href="property.php">Property</a>
                                          </li>
                                      </ul>
                                  </nav>
                                  <div class="login-register on-hover-menu">
                                      <ul class="login-register-nav dropdown d-flex align-items-center">
                                          <li>
                                              <a href="#"
                                                  class="btn btn-create-listing hidden-xs hidden-sm">Create a Listing</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
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
                                      value="/grid-default/" /> <input type="hidden" name="action" id="login_action"
                                      value="houzez_login">
                                  <input type="hidden" name="redirect_to">
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
                              value="bee08a8d9a" /><input type="hidden" name="_wp_http_referer" value="/grid-default/" />
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
      <script>
          (function() {
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
          })();
      </script>
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
              }, {
                  rootMargin: '200px 0px 200px 0px'
              });
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
          var houzez_vars = {
              "admin_url": "https:\/\/demo01.houzez.co\/wp-admin\/",
              "houzez_rtl": "no",
              "user_id": "0",
              "redirect_type": "diff_page",
              "login_redirect": "https:\/\/demo01.houzez.co\/my-profile\/",
              "property_gallery_popup_type": "houzez",
              "wp_is_mobile": "",
              "default_lat": "25.686540",
              "default_long": "-80.431345",
              "houzez_is_splash": "",
              "prop_detail_nav": "yes",
              "add_to_favorite_login_required": "0",
              "disable_property_gallery": "1",
              "grid_gallery_behaviour": "houzez-show-gallery",
              "is_singular_property": "",
              "search_position": "under_nav",
              "login_loading": "Sending user info, please wait...",
              "not_found": "We didn't find any results",
              "houzez_map_system": "google",
              "for_rent": "for-rent",
              "for_rent_price_slider": "for-rent",
              "search_min_price_range": "200",
              "search_max_price_range": "2500000",
              "search_min_price_range_for_rent": "50",
              "search_max_price_range_for_rent": "25000",
              "get_min_price": "0",
              "get_max_price": "0",
              "currency_position": "before",
              "currency_symbol": "$",
              "decimals": "0",
              "decimal_point_separator": ".",
              "thousands_separator": ",",
              "is_halfmap": "",
              "houzez_date_language": "",
              "houzez_default_radius": "50",
              "houzez_reCaptcha": "",
              "geo_country_limit": "0",
              "geocomplete_country": "",
              "is_edit_property": "",
              "processing_text": "Processing, Please wait...",
              "halfmap_layout": "",
              "prev_text": "Prev",
              "next_text": "Next",
              "keyword_search_field": "prop_title",
              "keyword_autocomplete": "1",
              "autosearch_text": "Searching...",
              "paypal_connecting": "Connecting to paypal, Please wait... ",
              "transparent_logo": "",
              "is_transparent": "",
              "is_top_header": "0",
              "simple_logo": "https:\/\/demo01.houzez.co\/wp-content\/uploads\/2020\/02\/logo-houzez-color.png",
              "retina_logo": "https:\/\/demo01.houzez.co\/wp-content\/uploads\/2016\/03\/logo-houzez-color@2x.png",
              "mobile_logo": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white.png",
              "retina_logo_mobile": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png",
              "retina_logo_mobile_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png",
              "custom_logo_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white.png",
              "retina_logo_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png",
              "monthly_payment": "Monthly Payment",
              "weekly_payment": "Weekly Payment",
              "bi_weekly_payment": "Bi-Weekly Payment",
              "compare_url": "https:\/\/demo01.houzez.co\/compare-properties\/",
              "favorite_url": "https:\/\/demo01.houzez.co\/favorite-properties\/",
              "template_thankyou": "https:\/\/demo01.houzez.co\/thank-you\/",
              "compare_page_not_found": "Please create page using compare properties template",
              "compare_limit": "Maximum item compare are 4",
              "compare_add_icon": "",
              "compare_remove_icon": "",
              "add_compare_text": "Add to Compare",
              "remove_compare_text": "Remove from Compare",
              "is_mapbox": "google",
              "api_mapbox": "",
              "is_marker_cluster": "1",
              "g_recaptha_version": "v3",
              "s_country": "",
              "s_state": "",
              "s_city": "",
              "s_areas": "",
              "woo_checkout_url": "",
              "agent_redirection": ""
          };
          /* ]]> */
      </script>

    


      </body>

      </html>