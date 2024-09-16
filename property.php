<?php 


$con = mysqli_connect("localhost", "root", "", "real_estate");

$sql = "SELECT * FROM `property_register` WHERE Approval_status='Approved' ORDER BY id DESC ";
$res = mysqli_query($con,$sql);





?>   
   
   
   <!-- header start -->
      <?php
        include('header-light.php');
        ?>
      <!-- header end -->
      <section id="desktop-header-search" class="advanced-search advanced-search-nav " data-hidden="0"
          data-sticky="1">
          <div class="container">
              <form class="houzez-search-form-js " method="get" autocomplete="off">
                  <div class="advanced-search-v1 ">
                      <div class="d-flex">
                          <div class="flex-search flex-grow-1">
                              <div class="form-group">
                                  <div class="search-icon">
                                      <input name="keyword" type="text"
                                          class="houzez-keyword-autocomplete form-control" value
                                          placeholder="Enter Keyword...">
                                      <div id="auto_complete_ajax" class="auto-complete"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="flex-search fields-width ">
                              <div class="form-group">
                                  <select name="status[]" data-size="5"
                                      class="selectpicker status-js  form-control bs-select-hidden" title="Status"
                                      data-live-search="false" data-selected-text-format="count > 1"
                                      data-live-search-normalize="true" data-actions-box="true" multiple
                                      data-select-all-text="Select All" data-deselect-all-text="Deselect All"
                                      data-none-results-text="No results matched {0}"
                                      data-count-selected-text="{0} Statuses" data-container="body">
                                      <option data-ref="for-rent" value="for-rent">For Rent</option>
                                      <option data-ref="for-sale" value="for-sale">For Sale</option>
                                      <option data-ref="foreclosures" value="foreclosures">Foreclosures</option>
                                      <option data-ref="new-costruction" value="new-costruction">New Costruction
                                      </option>
                                      <option data-ref="new-listing" value="new-listing">New Listing</option>
                                      <option data-ref="open-house" value="open-house">Open House</option>
                                      <option data-ref="reduced-price" value="reduced-price">Reduced Price</option>
                                      <option data-ref="resale" value="resale">Resale</option>
                                  </select>
                              </div>
                          </div>
                          <div class="flex-search fields-width ">
                              <div class="form-group">
                                  <select name="type[]" data-size="5"
                                      class="selectpicker  form-control bs-select-hidden" title="Type"
                                      data-live-search="true" data-selected-text-format="count > 1"
                                      data-actions-box="true" multiple data-select-all-text="Select All"
                                      data-deselect-all-text="Deselect All" data-live-search-normalize="true"
                                      data-count-selected-text="{0} Types"
                                      data-none-results-text="No results matched {0}" data-container="body">
                                      <option data-ref="commercial" value="commercial">Commercial</option>
                                      <option data-ref="office" value="office"> - Office</option>
                                      <option data-ref="shop" value="shop"> - Shop</option>
                                      <option data-ref="residential" value="residential">Residential</option>
                                      <option data-ref="apartment" value="apartment"> - Apartment</option>
                                      <option data-ref="condo" value="condo"> - Condo</option>
                                      <option data-ref="multi-family-home" value="multi-family-home"> - Multi Family
                                          Home</option>
                                      <option data-ref="single-family-home" value="single-family-home"> - Single
                                          Family Home</option>
                                      <option data-ref="studio" value="studio"> - Studio</option>
                                      <option data-ref="villa" value="villa"> - Villa</option>
                                  </select>
                              </div>
                          </div>
                          <div class="flex-search">
                              <a class="btn advanced-search-btn btn-full-width" data-toggle="collapse"
                                  href="#advanced-search-filters">
                                  <i class="las la-cog"></i> Advanced</a>
                          </div>
                          <div class="flex-search btn-no-right-padding">
                              <button type="submit"
                                  class="btn btn-search btn-secondary btn-full-width ">Search</button>
                          </div>
                      </div>
                  </div>
                  <div id="advanced-search-filters" class="collapse ">
                      <div class="advanced-search-filters search-v1-v2">
                          <div class="d-flex">
                              <div class="flex-search">
                                  <div class="form-group">
                                      <select name="location[]" data-target="houzezFourthList" data-size="5"
                                          class="houzezSelectFilter houzezCityFilter houzezThirdList selectpicker  houzez-city-js form-control bs-select-hidden"
                                          title="All Cities" data-selected-text-format="count > 1"
                                          data-live-search="true" data-actions-box="true"
                                          data-select-all-text="Select All" data-live-search-normalize="true"
                                          data-deselect-all-text="Deselect All"
                                          data-none-results-text="No results matched {0}"
                                          data-count-selected-text="{0} cities selected" data-container="body">
                                          <option value>All Cities</option>
                                          <option data-ref="chicago" data-belong="illinois" data-subtext="Illinois"
                                              value="chicago">Chicago</option>
                                          <option data-ref="chivilcoy" data-belong="provincia-de-buenos-aires"
                                              data-subtext="Provincia de Buenos Aires" value="chivilcoy">Chivilcoy
                                          </option>
                                          <option data-ref="los-angeles" data-belong="california"
                                              data-subtext="California" value="los-angeles">Los Angeles</option>
                                          <option data-ref="miami" data-belong="florida" data-subtext="Florida"
                                              value="miami">Miami</option>
                                          <option data-ref="new-york" data-belong="new-york" data-subtext="New York"
                                              value="new-york">New York</option>
                                          <option data-ref="uyo" data-belong="akwa-ibom" data-subtext="AKWA IBOM"
                                              value="uyo">Uyo</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="flex-search">
                                  <div class="form-group">
                                      <select name="bedrooms" data-size="5"
                                          class="selectpicker  form-control bs-select-hidden" title="Bedrooms"
                                          data-live-search="false">
                                          <option value>Bedrooms</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                          <option value="9">9</option>
                                          <option value="10">10</option>
                                          <option value="any">Any</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="flex-search">
                                  <div class="form-group">
                                      <input name="min-area" type="text" class="form-control " value
                                          placeholder="Min. Area ">
                                  </div>
                              </div>
                              <div class="flex-search">
                                  <div class="form-group">
                                      <input name="max-area" type="text" class="form-control " value
                                          placeholder="Max. Area ">
                                  </div>
                              </div>
                              <div class="flex-search">
                                  <div class="form-group">
                                      <input name="property_id" type="text" class=" form-control" value
                                          placeholder="Property ID">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </section>
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
                                      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck1">Rent</label>
                                      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck2">Farm House</label>
                                      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck2">Apartment</label>
                                      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck2">Villa</label>
                                  </div>
                              </div>
                          </div>
                          <div id="houzez_featured_properties-2" class="widget widget-wrap widget-featured-property">
                              <div class="widget-header">
                                  <h3 class="widget-title">No of Rooms</h3>
                              </div>
                              <div class="widget-body widget-featured-property-slider-wrap">
                                  <div class="btn-group d-flex flex-wrap gap-4 checkboxs mt-3 property-type" role="group" aria-label="Basic checkbox toggle button group ">
                                      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck1">1 RK / 1 BHK</label>
                                      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck2">2 BHK</label>
                                      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck2">3 BHK</label>
                                      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck2">4 BHK</label>
                                      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck2">5 BHK</label>
                                  </div>
                              </div>
                          </div>
                          <div id="houzez_property_taxonomies-2" class="widget widget-wrap widget-taxonomy">
                              <div class="widget-header">
                                  <h3 class="widget-title">Posted By</h3>
                              </div>
                              <div class="widget-body">
                                  <div class="btn-group d-flex flex-wrap gap-4 checkboxs mt-3 property-type" role="group" aria-label="Basic checkbox toggle button group ">
                                      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck1">Owner</label>
                                      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck2">Builder</label>
                                      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                      <label class="btn btn-outline-primary" for="btncheck2">Dealer</label>
                                  </div>
                              </div>
                          </div>
                      </aside>
                  </div>
                  <div class="col-lg-8 col-md-12 bt-content-wrap ">
                      <article class="post-28 page type-page status-publish hentry">
                      </article>
                      <div class="listing-tools-wrap">
                          <div class="d-flex align-items-center mb-2">
                              <div class="listing-tabs flex-grow-1">
                                  58 Properties</div>
                              <div class="sort-by">
                                  <div class="d-flex align-items-center">
                                      <div class="sort-by-title">
                                          Sort by: </div>
                                      <select id="sort_properties" class="selectpicker form-control bs-select-hidden"
                                          title="Default Order" data-live-search="false"
                                          data-dropdown-align-right="auto">
                                          <option value>Default Order</option>
                                          <option value="a_price">Price - Low to High</option>
                                          <option value="d_price">Price - High to Low</option>
                                          <option value="featured_first">Featured Listings First</option>
                                          <option value="a_date">Date - Old to New</option>
                                          <option value="d_date">Date - New to Old</option>
                                          <option value="a_title">Title - ASC</option>
                                          <option value="d_title">Title - DESC</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="listing-view grid-view card-deck">
                        <?php while($row = mysqli_fetch_assoc($res) ) {  ?>
                          <div class="item-listing-wrap hz-item-gallery-js card"
                              data-hz-id="hz-115">
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
                                                  <a target="_self"
                                                      href="single_property.php"
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
                                              <a target="_self"
                                                  href="single_property.php"><?php echo $row['Property_title']; ?></a>
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
                                          </ul> <a
                                              class="btn btn-primary btn-item "
                                              target="_self"
                                              href="single_property.php">
                                              Details</a>
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