<?php 

$con=mysqli_connect("localhost","root","","real_estate");

if(isset($_POST['save']))
{
    
    
    $email = $_POST['Email'];
    $title = $_POST['Title'];
    $rating = $_POST['Rating'];
    $review = $_POST['Review'];
    $property_id = $_GET['pro_id'];
    // $property_id = 1;
    $sql = "insert into property_review (Email,Title,Rating,Review,Property_id,Date) values ('$email','$title','$rating','$review','$property_id',CURDATE())";
    mysqli_query($con,$sql);
}
$property_id = $_GET['pro_id'];
$sql_select ="select * from property_review where Property_id=".$property_id;
$res_select = mysqli_query($con,$sql_select);

?> 
 
 
 <!-- header start -->
      <?php
            include('header-light.php');
         ?>
    <!-- header end -->
    <main id="main-wrap" class="main-wrap main-wrap-js">
              
        <section class="content-wrap property-wrap property-detail-v3 ">
            <div class="property-navigation-wrap">
                <div class="container-fluid">
                    <ul class="property-navigation list-unstyled d-flex justify-content-between">
                        <li class="property-navigation-item">
                            <a class="back-top" href="#main-wrap">
                                <i class="houzez-icon icon-arrow-button-circle-up"></i>
                            </a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-description-wrap">Description</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-address-wrap">Address</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-detail-wrap">Details</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-energy-class-wrap">Energy Class</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-features-wrap">Features</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-mortgage-calculator-wrap">Mortgage Calculator</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-floor-plans-wrap">Floor Plans</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-schedule-tour-wrap">Schedule a Tour</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-video-wrap">Video</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-virtual-tour-wrap">360° Virtual Tour</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-walkscore-wrap">Walk Score</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-nearby-wrap">What's Nearby?</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-contact-agent-wrap">Contact</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#property-review-wrap">Reviews</a>
                        </li>
                        <li class="property-navigation-item">
                            <a class="target" href="#similar-listings-wrap">Similar Listings</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-title-wrap">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <div class="breadcrumb-wrap">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item breadcrumb-item-home"><i
                                            class="las la-home mr-2"></i><a
                                            href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a
                                            href="#">
                                            <i class="las la-angle-right mr-2"></i> All Property</a></li>
                                    <li class="breadcrumb-item active"><i class="las la-angle-right mr-2"></i> Property</li>
                                </ol>
                            </nav>
                        </div>
                        <ul class="item-tools">
                            <li class="item-tool houzez-favorite">
                                <span class="add-favorite-js item-tool-favorite d-flex justify-content-center align-items-center" data-listid="17405">
                                    <i class="las la-heart"></i>
                                </span>
                            </li>
                            <li class="item-tool houzez-share">
                                <span class="item-tool-share d-flex justify-content-center align-items-center dropdown-toggle" data-toggle="dropdown">
                                    <i class="las la-share-alt"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right item-tool-dropdown-menu">
                                    <a class="dropdown-item" target="_blank"
                                        href="#">
                                        <i class="lab la-whatsapp mr-1"></i> WhatsApp</a>
                                    <a class="dropdown-item"
                                        href="#">
                                        <i class="lab la-facebook mr-1"></i> Facebook
                                    </a>
                                    <a class="dropdown-item"
                                        href="#">
                                        <i class="houzez-icon icon-x-logo-twitter-logo-2 mr-1"></i> Twitter
                                    </a>
                                    <a class="dropdown-item"
                                        href="#">
                                        <i class="houzez-icon icon-social-pinterest mr-1"></i> Pinterest
                                    </a>
                                    <a class="dropdown-item"
                                        href="#">
                                        <i class="houzez-icon icon-professional-network-linkedin mr-1"></i> Linkedin
                                    </a>
                                    <a class="dropdown-item"
                                        href="#">
                                        <i class="houzez-icon icon-envelope mr-1"></i>Email
                                    </a>
                                </div>
                            </li>
                            <li class="item-tool houzez-print " data-propid="17405">
                                <span class="item-tool-compare d-flex justify-content-center align-items-center">
                                    <i class="las la-print"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center property-title-price-wrap">
                        <div class="page-title">
                            <h1>New Apartment</h1>
                        </div>
                        <ul class="item-price-wrap hide-on-list">
                            <li class="item-price">$125,000</li>
                            <li class="item-sub-price">$900/Sq Ft</li>
                        </ul>
                    </div>
                    <div class="property-labels-wrap">
                        <a href="#" class="label-status label status-color-18">
                            For Sale
                        </a>
                    </div>
                    <address class="item-address"><i class="las la-map-marker mr-1"></i>6701 South Dixie Highway,
                        Miami, FL, USA</address>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="property-top-wrap">
                            <div class="property-banner">
                                <div class="container hidden-on-mobile">
                                    <ul class="nav nav-pills houzez-media-tabs-5" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center align-items-center active" id="pills-gallery-tab" data-toggle="pill"
                                                href="#pills-gallery" role="tab" aria-controls="pills-gallery"
                                                aria-selected="true">
                                                <i class="las la-image"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center align-items-centerd-flex justify-content-center align-items-center" id="pills-map-tab" data-toggle="pill" href="#pills-map"
                                                role="tab" aria-controls="pills-map" aria-selected="true">
                                                <i class="las la-map"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex justify-content-center align-items-centerd-flex justify-content-center align-items-center" id="pills-street-view-tab" data-toggle="pill"
                                                href="#pills-street-view" role="tab" aria-controls="pills-street-view"
                                                aria-selected="false">
                                                <i class="las la-street-view"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane show active" id="pills-gallery" role="tabpanel"
                                        aria-labelledby="pills-gallery-tab">
                                        <div class="top-gallery-section h-auto">
                                            <div id="property-gallery-js"
                                                class="houzez-photoswipe listing-slider cS-hidden">
                                                <div
                                                    data-thumb="assets/residancy3.jpg">
                                                    <a rel="gallery-1" data-slider-no="1" href="#"
                                                        class="houzez-trigger-popup-slider-js swipebox sub-imgs"
                                                        data-toggle="modal" data-target="#property-lightbox">
                                                        <img class="img-fluid"
                                                            src="assets/residancy3.jpg"
                                                            alt title="205">
                                                    </a></div>
                                                <div
                                                    data-thumb="assets/residancy1.jpg">
                                                    <a rel="gallery-1" data-slider-no="2" href="#"
                                                        class="houzez-trigger-popup-slider-js swipebox sub-imgs"
                                                        data-toggle="modal" data-target="#property-lightbox">
                                                        <img class="img-fluid"
                                                            src="assets/residancy1.jpg"
                                                            alt title="030">
                                                    </a></div>
                                                <div
                                                    data-thumb="assets/residancy2.jpg">
                                                    <a rel="gallery-1" data-slider-no="3" href="#"
                                                        class="houzez-trigger-popup-slider-js swipebox sub-imgs"
                                                        data-toggle="modal" data-target="#property-lightbox">
                                                        <img class="img-fluid"
                                                            src="assets/residancy2.jpg"
                                                            alt title="006">
                                                    </a></div>
                                                <div
                                                    data-thumb="assets/residancy4.jpg">
                                                    <a rel="gallery-1" data-slider-no="4" href="#"
                                                        class="houzez-trigger-popup-slider-js swipebox sub-imgs"
                                                        data-toggle="modal" data-target="#property-lightbox">
                                                        <img class="img-fluid"
                                                            src="assets/residancy4.jpg"
                                                            alt title="007">
                                                    </a></div>
                                                <div
                                                    data-thumb="assets/residancy5.jpg">
                                                    <a rel="gallery-1" data-slider-no="5" href="#"
                                                        class="houzez-trigger-popup-slider-js swipebox sub-imgs"
                                                        data-toggle="modal" data-target="#property-lightbox">
                                                        <img class="img-fluid"
                                                            src="assets/residancy5.jpg"
                                                            alt title="008">
                                                    </a></div>
                                                <div
                                                    data-thumb="assets/residancy6.jpg">
                                                    <a rel="gallery-1" data-slider-no="6" href="#"
                                                        class="houzez-trigger-popup-slider-js swipebox sub-imgs"
                                                        data-toggle="modal" data-target="#property-lightbox">
                                                        <img class="img-fluid"
                                                            src="assets/residancy6.jpg"
                                                            alt title="035">
                                                    </a></div>
                                                <div
                                                    data-thumb="assets/gallary4.jpg">
                                                    <a rel="gallery-1" data-slider-no="7" href="#"
                                                        class="houzez-trigger-popup-slider-js swipebox sub-imgs"
                                                        data-toggle="modal" data-target="#property-lightbox">
                                                        <img class="img-fluid"
                                                            src="assets/gallary4.jpg"
                                                            alt title="036">
                                                    </a></div>
                                                <div
                                                    data-thumb="assets/gallary8.jpg">
                                                    <a rel="gallery-1" data-slider-no="8" href="#"
                                                        class="houzez-trigger-popup-slider-js swipebox sub-imgs"
                                                        data-toggle="modal" data-target="#property-lightbox">
                                                        <img class="img-fluid"
                                                            src="assets/gallary8.jpg"
                                                            alt title="045">
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="pills-map" role="tabpanel"
                                        aria-labelledby="pills-map-tab">
                                        <div class="map-wrap">
                                            <div id="houzez-single-listing-map"></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane " id="pills-street-view" role="tabpanel"
                                        aria-labelledby="pills-street-view-tab">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-view">
                            <div class="visible-on-mobile">
                                <div class="mobile-top-wrap">
                                    <div class="mobile-property-tools clearfix">
                                        <ul class="nav nav-pills houzez-media-tabs-5" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link d-flex justify-content-center align-items-center" id="pills-gallery-tab" data-toggle="pill"
                                                    href="#pills-gallery" role="tab" aria-controls="pills-gallery"
                                                    aria-selected="true">
                                                    <i class="las la-image"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex justify-content-center align-items-centerd-flex justify-content-center align-items-center" id="pills-map-tab" data-toggle="pill"
                                                    href="#pills-map" role="tab" aria-controls="pills-map"
                                                    aria-selected="true">
                                                    <i class="las la-map"></i>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link d-flex justify-content-center align-items-center" id="pills-street-view-tab" data-toggle="pill"
                                                    href="#pills-street-view" role="tab"
                                                    aria-controls="pills-street-view" aria-selected="false">
                                                    <i class="las la-street-view"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="item-tools">
                                            <li class="item-tool houzez-favorite">
                                                <span class="add-favorite-js item-tool-favorite d-flex justify-content-center align-items-center d-flex justify-content-center align-items-center" data-listid="17405">
                                                    <i class="las la-heart"></i>
                                                </span>
                                            </li>
                                            <li class="item-tool houzez-share">
                                                <span class="item-tool-share d-flex justify-content-center align-items-center dropdown-toggle" data-toggle="dropdown">
                                                    <i class="las la-share-alt"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right item-tool-dropdown-menu">
                                                    <a class="dropdown-item" target="_blank"
                                                        href="#">
                                                        <i class="lab la-whatsapp mr-1"></i>
                                                        WhatsApp</a>
                                                    <a class="dropdown-item"
                                                        href="#"false;">
                                                        <i class="lab la-facebook mr-1"></i>
                                                        Facebook
                                                    </a>
                                                    <a class="dropdown-item"
                                                        href="#">
                                                        <i class="houzez-icon icon-x-logo-twitter-logo-2 mr-1"></i>
                                                        Twitter
                                                    </a>
                                                    <a class="dropdown-item"
                                                        href="#">
                                                        <i class="houzez-icon icon-social-pinterest mr-1"></i> Pinterest
                                                    </a>
                                                    <a class="dropdown-item"
                                                        href="#">
                                                        <i
                                                            class="houzez-icon icon-professional-network-linkedin mr-1"></i>
                                                        Linkedin
                                                    </a>
                                                    <a class="dropdown-item"
                                                        href="#">
                                                        <i class="houzez-icon icon-envelope mr-1"></i>Email
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="item-tool houzez-print " data-propid="17405">
                                                <span class="item-tool-compare d-flex justify-content-center align-items-center">
                                                    <i class="las la-print"></i>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mobile-property-title clearfix">
                                        <span class="labels-wrap labels-right">
                                            <a href="#"
                                                class="label-status label status-color-18">
                                                For Sale
                                            </a>
                                        </span>
                                        <div class="page-title">
                                            <span class="item-title property-title-mobile">New Apartment</span>
                                        </div>
                                        <address class="item-address"><i class="las la-map-marker mr-1"></i>6701
                                            South Dixie Highway, Miami, FL, USA</address>
                                        <ul class="item-price-wrap hide-on-list">
                                            <li class="item-price">$125,000</li>
                                            <li class="item-sub-price">$900/Sq Ft</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-overview-wrap property-section-wrap" id="property-overview-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap d-flex justify-content-between align-items-center">
                                        <h2>Overview</h2>
                                        <div><strong>Property ID:</strong> Hz-11</div>
                                    </div>
                                    <div class="d-flex property-overview-data">
                                        <ul class="list-unstyled flex-fill">
                                            <li class="property-overview-item"><strong>Apartment</strong></li>
                                            <li class="hz-meta-label property-overview-type">Property Type</li>
                                        </ul>
                                        <ul class="list-unstyled flex-fill">
                                            <li class="property-overview-item"><i
                                                    class="las la-bed mr-1"></i>
                                                <strong>2</strong> </li>
                                            <li class="hz-meta-label h-beds">Bedrooms</li>
                                        </ul>
                                        <ul class="list-unstyled flex-fill">
                                            <li class="property-overview-item"><i
                                                    class="las la-bath mr-1"></i>
                                                <strong>2</strong></li>
                                            <li class="hz-meta-label h-baths">Bathrooms</li>
                                        </ul>
                                        <ul class="list-unstyled flex-fill">
                                            <li class="property-overview-item"><i
                                                    class="las la-car mr-1"></i> <strong>1</strong></li>
                                            <li class="hz-meta-label h-garage">Garage</li>
                                        </ul>
                                        <ul class="list-unstyled flex-fill">
                                            <li class="property-overview-item"><i
                                                    class="las la-rular-combined mr-1"></i>
                                                <strong>1987</strong></li>
                                            <li class="hz-meta-label h-area">sqft</li>
                                        </ul>
                                        <ul class="list-unstyled flex-fill">
                                            <li class="property-overview-item"><i
                                                    class="las la-calendar mr-1"></i> <strong>2020</strong>
                                            </li>
                                            <li class="hz-meta-label h-year-built">Year Built</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description-wrap property-section-wrap" id="property-description-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap">
                                        <h2>Description</h2>
                                    </div>
                                    <div class="block-content-wrap">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut
                                            wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                            lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                                            dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                                            dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio
                                            dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te
                                            feugait nulla facilisi.</p>
                                        <div class="block-title-wrap block-title-property-doc">
                                            <h3>Property Documents</h3>
                                        </div>
                                        <div class="property-documents">
                                            <div class="d-flex justify-content-between">
                                                <div class="property-document-title">
                                                    <i class="las la-file mr-1"></i> Brochure
                                                </div>
                                                <div class="property-document-link login-link">
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#login-register-form">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-address-wrap property-section-wrap" id="property-address-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap d-flex justify-content-between align-items-center">
                                        <h2>Address</h2>
                                        <a class="btn btn-primary btn-slim"
                                            href="#"
                                            target="_blank"><i class="las la-map mr-1"></i> Open on Google
                                            Maps</a>
                                    </div>
                                    <div class="block-content-wrap">
                                        <ul class="list-2-cols list-unstyled">
                                            <li class="detail-address"><strong>Address</strong> <span>6701 South Dixie
                                                    Highway, Miami, FL, USA</span></li>
                                            <li class="detail-city"><strong>City</strong> <span>Miami</span></li>
                                            <li class="detail-state"><strong>State/county</strong> <span>Florida</span>
                                            </li>
                                            <li class="detail-zip"><strong>Zip/Postal Code</strong> <span>33143</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-detail-wrap property-section-wrap" id="property-detail-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap d-flex justify-content-between align-items-center">
                                        <h2>Details</h2>
                                        <span class="small-text grey"><i class="las la-calendar mr-1"></i>
                                            Updated on January 27, 2023 at 7:47 pm</span>
                                    </div>
                                    <div class="block-content-wrap">
                                        <div class="detail-wrap">
                                            <ul class="list-2-cols list-unstyled">
                                                <li>
                                                    <strong>Property ID:</strong>
                                                    <span>Hz-11</span>
                                                </li>
                                                <li>
                                                    <strong>Price:</strong>
                                                    <span> $125,000</span>
                                                </li>
                                                <li>
                                                    <strong>Property Size:</strong>
                                                    <span>1987 sqft</span>
                                                </li>
                                                <li>
                                                    <strong>Land Area:</strong>
                                                    <span>987 sqft</span>
                                                </li>
                                                <li>
                                                    <strong>Bedrooms:</strong>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <strong>Bathrooms:</strong>
                                                    <span>2</span>
                                                </li>
                                                <li>
                                                    <strong>Garage:</strong>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <strong>Garage Size:</strong>
                                                    <span>350 Sq Ft</span>
                                                </li>
                                                <li>
                                                    <strong>Year Built:</strong>
                                                    <span>2020</span>
                                                </li>
                                                <li class="prop_type">
                                                    <strong>Property Type:</strong>
                                                    <span>Apartment</span>
                                                </li>
                                                <li class="prop_status">
                                                    <strong>Property Status:</strong>
                                                    <span>For Sale</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="block-title-wrap">
                                            <h3>Additional details</h3>
                                        </div>
                                        <ul class="list-2-cols list-unstyled">
                                            <li><strong>Swimming Pool:</strong> <span>Swimming Pool</span></li>
                                            <li><strong>Pool Size:</strong> <span>Pool Size</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-gallery-grid property-section-wrap" id="property-gallery-grid">
                                <div class="d-flex flex-wrap">
                                    <a href="#" data-toggle="modal" data-slider-no="1" data-target="#property-lightbox"
                                        class="houzez-trigger-popup-slider-js gallery-grid-item ">
                                        <img class="img-fluid"
                                            src="assets/gallary1.jpg"
                                            alt>
                                    </a>
                                    <a href="#" data-toggle="modal" data-slider-no="2" data-target="#property-lightbox"
                                        class="houzez-trigger-popup-slider-js gallery-grid-item ">
                                        <img class="img-fluid"
                                            src="assets/gallary2.jpg"
                                            alt>
                                    </a>
                                    <a href="#" data-toggle="modal" data-slider-no="3" data-target="#property-lightbox"
                                        class="houzez-trigger-popup-slider-js gallery-grid-item ">
                                        <img class="img-fluid"
                                            src="assets/gallary3.jpg"
                                            alt>
                                    </a>
                                    <a href="#" data-toggle="modal" data-slider-no="4" data-target="#property-lightbox"
                                        class="houzez-trigger-popup-slider-js gallery-grid-item ">
                                        <img class="img-fluid"
                                            src="assets/gallary4.jpg"
                                            alt>
                                    </a>
                                    <a href="#" data-toggle="modal" data-slider-no="5" data-target="#property-lightbox"
                                        class="houzez-trigger-popup-slider-js gallery-grid-item ">
                                        <img class="img-fluid"
                                            src="assets/gallary5.jpg"
                                            alt>
                                    </a>
                                    <a href="#" data-toggle="modal" data-slider-no="6" data-target="#property-lightbox"
                                        class="houzez-trigger-popup-slider-js gallery-grid-item ">
                                        <img class="img-fluid"
                                            src="assets/gallary6.jpg"
                                            alt>
                                    </a>
                                    <a href="#" data-toggle="modal" data-slider-no="7" data-target="#property-lightbox"
                                        class="houzez-trigger-popup-slider-js gallery-grid-item ">
                                        <img class="img-fluid"
                                            src="assets/gallary7.jpg"
                                            alt>
                                    </a>
                                    <a href="#" data-toggle="modal" data-slider-no="8" data-target="#property-lightbox"
                                        class="houzez-trigger-popup-slider-js gallery-grid-item ">
                                        <img class="img-fluid"
                                            src="assets/gallary8.jpg"
                                            alt>
                                    </a>
                                    <a href="#" data-toggle="modal" data-slider-no="9" data-target="#property-lightbox"
                                        class="houzez-trigger-popup-slider-js gallery-grid-item more-images">
                                        <span>2+</span> <img class="img-fluid"
                                            src="assets/gallary9.jpg"
                                            alt>
                                    </a>
                                    <a href="#" data-toggle="modal" data-slider-no="10" data-target="#property-lightbox"
                                        class="houzez-trigger-popup-slider-js gallery-grid-item gallery-hidden">
                                        <img class="img-fluid"
                                            src="assets/gallary10.jpg"
                                            alt>
                                    </a>
                                    <a href="#" data-toggle="modal" data-slider-no="11" data-target="#property-lightbox"
                                        class="houzez-trigger-popup-slider-js gallery-grid-item gallery-hidden">
                                        <img class="img-fluid"
                                            src="assets/gallary11.jpg"
                                            alt>
                                    </a>
                                </div>
                            </div>
                            <style>
                                .property-gallery-grid .gallery-grid-item {
                                    max-width: calc(33.333333333333% - 1px);
                                    margin-right: 1px;
                                    margin-bottom: 1px;
                                }
                            </style>
                            <div class="property-energy-class-wrap property-section-wrap"
                                id="property-energy-class-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap">
                                        <h2>Energy Class</h2>
                                    </div>
                                    <div class="block-content-wrap">
                                        <ul class="class-energy-list list-unstyled">
                                            <li>
                                                <strong>Energetic class:</strong>
                                                <span>A+</span>
                                            </li>
                                            <li>
                                                <strong>Global Energy Performance Index:</strong>
                                                <span>92.42 kWh / m²a</span>
                                            </li>
                                            <li>
                                                <strong>Renewable energy performance index:</strong>
                                                <span>0.00 kWh / m²a</span>
                                            </li>
                                            <li>
                                                <strong>Energy performance of the building:</strong>
                                                <span>XYZ</span>
                                            </li>
                                            <li>
                                                <strong>EPC Current Rating:</strong>
                                                <span>80</span>
                                            </li>
                                            <li>
                                                <strong>EPC Potential Rating:</strong>
                                                <span>60</span>
                                            </li>
                                        </ul>
                                        <ul class="class-energy energy-class-9">
                                            <li class="class-energy-indicator">
                                                <div class="indicator-energy" data-energyclass="A+">92.42 kWh / m²a |
                                                    Energy class A+</div>
                                                <span class="energy-A+">A+</span>
                                            </li>
                                            <li class="class-energy-indicator">
                                                <span class="energy-A">A</span>
                                            </li>
                                            <li class="class-energy-indicator">
                                                <span class="energy-B">B</span>
                                            </li>
                                            <li class="class-energy-indicator">
                                                <span class="energy-C">C</span>
                                            </li>
                                            <li class="class-energy-indicator">
                                                <span class="energy-D">D</span>
                                            </li>
                                            <li class="class-energy-indicator">
                                                <span class="energy-E">E</span>
                                            </li>
                                            <li class="class-energy-indicator">
                                                <span class="energy-F">F</span>
                                            </li>
                                            <li class="class-energy-indicator">
                                                <span class="energy-G">G</span>
                                            </li>
                                            <li class="class-energy-indicator">
                                                <span class="energy-H">H</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-features-wrap property-section-wrap" id="property-features-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap d-flex justify-content-between align-items-center">
                                        <h2>Features</h2>
                                    </div>
                                    <div class="block-content-wrap">
                                        <ul class="list-3-cols list-unstyled">
                                            <li><i class="las la-check-circle mr-2"></i><a
                                                    href="#">Air
                                                    Conditioning</a></li>
                                            <li><i class="las la-check-circle mr-2"></i><a
                                                    href="#">Barbeque</a></li>
                                            <li><i class="las la-check-circle mr-2"></i><a
                                                    href="#">Gym</a></li>
                                            <li><i class="las la-check-circle mr-2"></i><a
                                                    href="#">Laundry</a></li>
                                            <li><i class="las la-check-circle mr-2"></i><a
                                                    href="#">Outdoor
                                                    Shower</a></li>
                                            <li><i class="las la-check-circle mr-2"></i><a
                                                    href="#">Refrigerator</a>
                                            </li>
                                            <li><i class="las la-check-circle mr-2"></i><a
                                                    href="#">Sauna</a></li>
                                            <li><i class="las la-check-circle mr-2"></i><a
                                                    href="#">Swimming
                                                    Pool</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="property-mortgage-calculator-wrap property-section-wrap"
                                id="property-mortgage-calculator-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap">
                                        <h2>Mortgage Calculator</h2>
                                    </div>
                                    <div class="block-content-wrap">
                                        <div class="d-flex align-items-center sm-column">
                                            <div class="mortgage-calculator-chart flex-fill">
                                                <div class="mortgage-calculator-monthly-payment-wrap">
                                                    <div id="m_monthly_val" class="mortgage-calculator-monthly-payment">
                                                    </div>
                                                    <div class="mortgage-calculator-monthly-requency">Monthly</div>
                                                </div>
                                                <canvas id="mortgage-calculator-chart" width="300"
                                                    height="300"></canvas>
                                            </div>
                                            <div class="mortgage-calculator-data flex-fill">
                                                <ul class="list-unstyled">
                                                    <li class="mortgage-calculator-data-1 stats-data-01">
                                                        <i class="las la-circle mr-1"></i>
                                                        <strong>Down Payment</strong>
                                                        <span id="downPaymentResult"></span>
                                                    </li>
                                                    <li class="mortgage-calculator-data-1 stats-data-01">
                                                        <i class="las la-circle mr-1"></i>
                                                        <strong>Loan Amount</strong>
                                                        <span id="loadAmountResult"></span>
                                                    </li>
                                                    <li class="mortgage-calculator-data-1 stats-data-1">
                                                        <i class="las la-circle mr-1"></i>
                                                        <strong>Monthly Mortgage Payment</strong>
                                                        <span id="monthlyMortgagePaymentResult"></span>
                                                    </li>
                                                    <li class="mortgage-calculator-data-2 stats-data-2">
                                                        <i class="las la-circle mr-1"></i>
                                                        <strong>Property Tax</strong>
                                                        <span id="monthlyPropertyTaxResult"></span>
                                                    </li>
                                                    <li class="mortgage-calculator-data-3 stats-data-3">
                                                        <i class="las la-circle mr-1"></i>
                                                        <strong>Home Insurance</strong>
                                                        <span id="monthlyHomeInsuranceResult"></span>
                                                    </li>
                                                    <li class="mortgage-calculator-data-4 rslt-pmi stats-data-4">
                                                        <i class="las la-circle mr-1"></i>
                                                        <strong>PMI</strong>
                                                        <span id="monthlyPMIResult"></span>
                                                    </li>
                                                    <li class="mortgage-calculator-data-4 stats-data-04">
                                                        <i class="las la-circle mr-1"></i>
                                                        <strong>Monthly HOA Fees</strong>
                                                        <span id="monthlyHOAResult"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <form id="houzez-calculator-form" method="post">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Total Amount</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">$</div>
                                                            </div>
                                                            <input id="homePrice" type="text" class="form-control"
                                                                placeholder="Total Amount" value="125000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Down Payment</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">%</div>
                                                            </div>
                                                            <input id="downPaymentPercentage" type="text"
                                                                class="form-control" placeholder="Down Payment"
                                                                value="15">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Interest Rate</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">%</div>
                                                            </div>
                                                            <input id="annualInterestRate" type="text"
                                                                class="form-control" placeholder="Interest Rate"
                                                                value="3.5">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Loan Terms (Years)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="las la-calendar"></i>
                                                                </div>
                                                            </div>
                                                            <input id="loanTermInYears" type="text" class="form-control"
                                                                placeholder="Loan Terms (Years)" value="20">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Property Tax</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">%</div>
                                                            </div>
                                                            <input id="annualPropertyTaxRate" type="text"
                                                                class="form-control" placeholder="Property Tax"
                                                                value="1.2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Home Insurance</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">$</div>
                                                            </div>
                                                            <input id="annualHomeInsurance" type="text"
                                                                class="form-control" placeholder="Home Insurance"
                                                                value="2000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Monthly HOA Fees</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">$</div>
                                                            </div>
                                                            <input id="monthlyHOAFees" type="text" class="form-control"
                                                                placeholder="Monthly HOA Fees" value="250">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>PMI</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">%</div>
                                                            </div>
                                                            <input id="pmi" type="text" class="form-control"
                                                                placeholder="PMI" value>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="property-floor-plans-wrap property-section-wrap" id="property-floor-plans-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap d-flex justify-content-between align-items-center">
                                        <h2>Floor Plans</h2>
                                    </div>
                                    <div class="block-content-wrap">
                                        <div class="accordion">
                                            <div class="accordion-tab floor-plan-wrap">
                                                <div class="accordion-header" data-toggle="collapse"
                                                    data-target="#floor-1" aria-expanded="false">
                                                    <div class="d-flex align-items-center" id="floor-plans-1">
                                                        <div class="accordion-title flex-grow-1">
                                                            <i class="las la-play-circle mr-1"></i>
                                                            First Floor </div>
                                                        <ul class="floor-information list-unstyled list-inline">
                                                            <li class="list-inline-item fp-size">
                                                                Size:
                                                                <strong> 900 Sq Ft</strong>
                                                            </li>
                                                            <li class="list-inline-item fp-room">
                                                                <i class="las la-bed mr-1"></i>
                                                                <strong>2</strong>
                                                            </li>
                                                            <li class="list-inline-item fp-bath">
                                                                <i class="las la-bath mr-1"></i>
                                                                <strong>1</strong>
                                                            </li>
                                                            <li class="list-inline-item fp-price">
                                                                Price:
                                                                <strong>$1,500 / Sq Ft</strong>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="floor-1" class="collapse " data-parent="#floor-plans-1">
                                                    <div class="accordion-body">
                                                        <a target="_blank"
                                                            href="#"
                                                            data-lightbox="roadtrip">
                                                            <img class="img-fluid"
                                                                src="assets/plan-1.jpg"
                                                                alt="image">
                                                        </a>
                                                        <div class="floor-plan-description">
                                                            <p><strong>Description:</strong><br>
                                                                Plan description. Lorem ipsum dolor sit amet,
                                                                consectetuer adipiscing elit, sed diam nonummy nibh
                                                                euismod tincidunt ut laoreet dolore magna aliquam erat
                                                                volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                                                exerci tation ullamcorper suscipit lobortis nisl ut
                                                                aliquip ex ea commodo consequat. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-schedule-tour-wrap property-schedule-tour-wrap-v2 property-section-wrap"
                                id="property-schedule-tour-wrap">
                                <div class="block-wrap">
                                    <div class="block-content-wrap">
                                        <form method="post" action="#">
                                            <input type="hidden" name="schedule_contact_form_ajax" value="b2300d9565" />
                                            <input type="hidden" name="property_permalink"/>
                                            <input type="hidden" name="property_title" value="New Apartment" />
                                            <input type="hidden" name="action" value="houzez_schedule_send_message">
                                            <input type="hidden" name="listing_id" value="17405">
                                            <input type="hidden" name="property_id" value="Hz-11" />
                                            <input type="hidden" name="is_listing_form" value="yes">
                                            <input type="hidden" name="is_schedule_form" value="yes">
                                            <input type="hidden" name="redirect_to" value>
                                            <input type="hidden" name="agent_id" value="17365">
                                            <input type="hidden" name="agent_type" value="agent_info">
                                            <input type="hidden" name="target_email"
                                                value="&#109;ike.m&#111;o&#114;e&#64;houze&#122;&#46;&#99;&#111;">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="property-schedule-tour-image"
                                                        style="background-image: url(assets/gallary1.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="property-schedule-tour-form-wrap">
                                                        <h2 class="sch-title">Schedule a Tour</h2>
                                                        <div class="property-schedule-tour-day-form">
                                                            <div class="tour-day-form-slide-arrow next sche-next-js">
                                                                <i class="las la-angle-right"></i>
                                                            </div>
                                                            <div class="tour-day-form-slide-arrow prev sche-prev-js">
                                                                <i class="las la-angle-left"></i>
                                                            </div>
                                                            <div class="property-schedule-tour-day-form-slide-wrap">
                                                                <div
                                                                    class="property-schedule-tour-day-form-slide-v2-bottom">
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Sun 04 Aug">
                                                                                <span class="control__indicator">
                                                                                    Sun<br>
                                                                                    <span
                                                                                        class="control__indicator_day">04</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Mon 05 Aug">
                                                                                <span class="control__indicator">
                                                                                    Mon<br>
                                                                                    <span
                                                                                        class="control__indicator_day">05</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Tue 06 Aug">
                                                                                <span class="control__indicator">
                                                                                    Tue<br>
                                                                                    <span
                                                                                        class="control__indicator_day">06</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Wed 07 Aug">
                                                                                <span class="control__indicator">
                                                                                    Wed<br>
                                                                                    <span
                                                                                        class="control__indicator_day">07</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Thu 08 Aug">
                                                                                <span class="control__indicator">
                                                                                    Thu<br>
                                                                                    <span
                                                                                        class="control__indicator_day">08</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Fri 09 Aug">
                                                                                <span class="control__indicator">
                                                                                    Fri<br>
                                                                                    <span
                                                                                        class="control__indicator_day">09</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Sat 10 Aug">
                                                                                <span class="control__indicator">
                                                                                    Sat<br>
                                                                                    <span
                                                                                        class="control__indicator_day">10</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Sun 11 Aug">
                                                                                <span class="control__indicator">
                                                                                    Sun<br>
                                                                                    <span
                                                                                        class="control__indicator_day">11</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Mon 12 Aug">
                                                                                <span class="control__indicator">
                                                                                    Mon<br>
                                                                                    <span
                                                                                        class="control__indicator_day">12</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Tue 13 Aug">
                                                                                <span class="control__indicator">
                                                                                    Tue<br>
                                                                                    <span
                                                                                        class="control__indicator_day">13</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Wed 14 Aug">
                                                                                <span class="control__indicator">
                                                                                    Wed<br>
                                                                                    <span
                                                                                        class="control__indicator_day">14</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Thu 15 Aug">
                                                                                <span class="control__indicator">
                                                                                    Thu<br>
                                                                                    <span
                                                                                        class="control__indicator_day">15</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Fri 16 Aug">
                                                                                <span class="control__indicator">
                                                                                    Fri<br>
                                                                                    <span
                                                                                        class="control__indicator_day">16</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Sat 17 Aug">
                                                                                <span class="control__indicator">
                                                                                    Sat<br>
                                                                                    <span
                                                                                        class="control__indicator_day">17</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hz-date-item">
                                                                        <div class="form-group">
                                                                            <label class="control control--radio">
                                                                                <input name="schedule_date" type="radio"
                                                                                    value="Sun 18 Aug">
                                                                                <span class="control__indicator">
                                                                                    Sun<br>
                                                                                    <span
                                                                                        class="control__indicator_day">18</span><br>
                                                                                    Aug </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="property-schedule-tour-form-title">Tour Type</div>
                                                        <div
                                                            class="property-schedule-tour-type-form d-flex justify-content-between">
                                                            <div class="form-group">
                                                                <label class="control control--radio">
                                                                    <input name="schedule_tour_type" type="radio"
                                                                        checked value="In Person">
                                                                    <span class="control__indicator">In Person</span>
                                                                </label>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control control--radio">
                                                                    <input name="schedule_tour_type" type="radio"
                                                                        value="Video Chat">
                                                                    <span class="control__indicator">Video Chat</span>
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <select name="schedule_time"
                                                                class="selectpicker form-control bs-select-hidden"
                                                                title="Time" data-live-search="false">
                                                                <option value="10:00 am">10:00 am</option>
                                                                <option value="10:15 pm"> 10:15 pm</option>
                                                                <option value="10:30 pm"> 10:30 pm</option>
                                                                <option value="12:00 pm"> 12:00 pm</option>
                                                                <option value="12:15 pm"> 12:15 pm</option>
                                                                <option value="12:30 pm"> 12:30 pm</option>
                                                                <option value="12:45 pm"> 12:45 pm</option>
                                                                <option value="01:00 pm"> 01:00 pm</option>
                                                                <option value="01:15 pm"> 01:15 pm</option>
                                                                <option value="01:30 pm"> 01:30 pm</option>
                                                                <option value="01:45 pm"> 01:45 pm</option>
                                                                <option value="02:00 pm"> 02:00 pm</option>
                                                                <option value="05:00 pm"> 05:00 pm</option>
                                                            </select>

                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" name="name" placeholder="Name"
                                                                type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" name="phone" placeholder="Phone"
                                                                type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" name="email" placeholder="Email"
                                                                type="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="message" rows="3"
                                                                placeholder="Enter your Message"></textarea>
                                                        </div>
                                                        <div class="form-group form-group-terms">
                                                            <label
                                                                class="control control--checkbox hz-no-gdpr-checkbox">
                                                                <div class="gdpr-text-wrap">
                                                                    By submitting this form I agree to <a
                                                                        target="_blank"
                                                                        href="#">Terms
                                                                        of Use</a>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <button
                                                            class="schedule_contact_form btn btn-secondary btn-full-width">
                                                            <span class="btn-loader houzez-loader-js"></span> Submit a
                                                            Tour Request
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form_messages mt-4"></div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                            <div class="property-video-wrap property-section-wrap" id="property-video-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap d-flex justify-content-between align-items-center">
                                        <h2>Video</h2>
                                    </div>
                                    <div class="block-content-wrap">
                                        <div class="block-video-wrap">
                                            <iframe title="Dubai Luxury Property Highlight The Glass Penthouse"
                                                width="1170" height="658"
                                                src="https://www.youtube.com/embed/-NInBEdSvp8?feature=oembed"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-virtual-tour-wrap property-section-wrap"
                                id="property-virtual-tour-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap d-flex justify-content-between align-items-center">
                                        <h2>360° Virtual Tour</h2>
                                    </div>
                                    <div class="block-content-wrap">
                                        <div class="block-virtual-video-wrap">
                                            <iframe width="853" height="480"
                                                src="https://my.matterport.com/show/?m=zEWsxhZpGba&play=1&qs=1"
                                                frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-walkscore-wrap property-section-wrap" id="property-walkscore-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap d-flex justify-content-between align-items-center">
                                        <h2>Walk Score</h2>
                                    </div>
                                    <div class="block-content-wrap">
                                        <div id="ws-walkscore-tile"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-nearby-wrap property-section-wrap" id="property-nearby-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap d-flex justify-content-between align-items-center">
                                        <h2>What's Nearby?</h2>
                                        <div class="small-text grey nearby-logo">Powered by <i
                                                class="houzez-icon icon-social-media-yelp"></i> <strong>Yelp</strong>
                                        </div>
                                    </div>
                                    <div class="block-content-wrap">
                                        <div class="what-nearby">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-contact-agent-wrap property-section-wrap"
                                id="property-contact-agent-wrap">
                                <div class="block-wrap">
                                    <div class="block-title-wrap d-flex justify-content-between align-items-center">
                                        <h2>Contact Information</h2>
                                        <a class="btn btn-primary btn-slim"
                                            href="#" target="_blank">View
                                            Listings</a>
                                    </div>
                                    <div class="block-content-wrap">
                                        <form method="post" action="#">
                                            <div class="agent-details">
                                                <div class="d-flex align-items-center">
                                                    <div class="agent-image"><a
                                                            href="#"><img
                                                                class="rounded"
                                                                src="assets/client1.jpg"
                                                                alt="Mike Moore" width="80" height="80"></a></div>
                                                    <ul class="agent-information list-unstyled">
                                                        <li class="agent-name"><i
                                                                class="las la-user mr-1"></i> Mike
                                                            Moore</li>
                                                        <li class="agent-phone-wrap clearfix"><i
                                                                class="las la-phone mr-1"></i><span
                                                                class="agent-phone "><a href="tel:7894563210">789 456
                                                                    3210</a></span><i
                                                                class="las la-mobile mr-1"></i><span
                                                                class="agent-phone "><a href="tel:8976541258">897 654
                                                                    1258</a></span><i
                                                                class="lab la-whatsapp mr-1"></i><span><a
                                                                    target="_blank"
                                                                    href="#">WhatsApp</a></span>
                                                        </li>
                                                        <li class="agent-social-media"><span><a class="btn-facebook"
                                                                    target="_blank" href="#"><i
                                                                        class="lab la-facebook mr-2"></i></a></span><span><a
                                                                    class="btn-twitter" target="_blank"
                                                                    href="#"><i
                                                                        class="lab la-twitter"></i></a></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="block-title-wrap">
                                                <h3>Enquire About This Property</h3>
                                            </div>
                                            <div class="form_messages"></div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input class="form-control" name="name"
                                                            placeholder="Enter your name" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input class="form-control" name="mobile"
                                                            placeholder="Enter your Phone" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" name="email"
                                                            placeholder="Enter your email" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>I'm a</label>
                                                        <select name="user_type"
                                                            class="selectpicker form-control bs-select-hidden"
                                                            title="Select">
                                                            <option value="buyer">I'm a buyer</option>
                                                            <option value="tennant">I'm a tennant</option>
                                                            <option value="agent">I'm an agent</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="form-group form-group-textarea">
                                                        <label>Message</label>
                                                        <textarea class="form-control hz-form-message" name="message"
                                                            rows="5"
                                                            placeholder="Enter your Message">Hello, I am interested in [New Apartment]</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label
                                                            class="control control--checkbox m-0 hz-terms-of-use hz-no-gdpr-checkbox">
                                                            <div class="gdpr-text-wrap">
                                                                By submitting this form I agree to <a target="_blank"
                                                                    href="#">Terms
                                                                    of Use</a></div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xs-12">
                                                    <input type="hidden" name="target_email"
                                                        value="&#109;ike&#46;&#109;&#111;o&#114;&#101;&#64;&#104;&#111;&#117;&#122;ez&#46;&#99;o">
                                                    <input type="hidden" name="property_agent_contact_security"
                                                        value="bb9a5e698d" />
                                                    <input type="hidden" name="property_permalink" />
                                                    <input type="hidden" name="property_title" value="New Apartment" />
                                                    <input type="hidden" name="property_id" value="Hz-11" />
                                                    <input type="hidden" name="action"
                                                        value="houzez_property_agent_contact">
                                                    <input type="hidden" class="is_bottom" value="bottom">
                                                    <input type="hidden" name="listing_id" value="17405">
                                                    <input type="hidden" name="is_listing_form" value="yes">
                                                    <input type="hidden" name="agent_id" value="17365">
                                                    <input type="hidden" name="agent_type" value="agent_info">
                                                    <button
                                                        class="houzez_agent_property_form btn btn-secondary btn-sm-full-width">
                                                        <span class="btn-loader houzez-loader-js"></span> Request
                                                        Information
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="property-review-wrap property-section-wrap" id="property-review-wrap">
                                <div class="block-title-wrap review-title-wrap d-flex align-items-center">
                                    <h2>3 Reviews</h2>
                                    <div class="rating-score-wrap flex-grow-1">
                                        <span class="star"><i class="icon-rating full-star"></i></span>
                                        <span class="star"><i class="icon-rating full-star"></i></span>
                                        <span class="star"><i class="icon-rating full-star"></i></span>
                                        <span class="star"><i class="icon-rating empty-star"></i></span>
                                        <span class="star"><i class="icon-rating empty-star"></i></span>
                                        <span class="star-text star-text-right">
                                            (<span itemprop="ratingValue">3</span> out of <span
                                                itemprop="bestRating">5</span>)
                                        </span>
                                    </div>
                                    <div class="sort-by">
                                        <div class="d-flex align-items-center">
                                            <div class="sort-by-title">
                                                Sort by:
                                            </div>
                                            <select id="sort_review" class="selectpicker form-control bs-select-hidden"
                                                title data-live-search="false" data-dropdown-align-right="auto">
                                                <option value>Default Order</option>
                                                <option value="a_date">Date Old to New</option>
                                                <option value="d_date">Date New to Old</option>
                                                <option value="a_rating">Rating (Low to High)</option>
                                                <option value="d_rating">Rating (High to Low)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary btn-slim" href="#property-review-form">Leave a Review</a>
                                </div>
                                <input type="hidden" name="review_paged" id="review_paged" value="1">
                                <input type="hidden" name="total_pages" id="total_pages" value="1">

                                <ul id="houzez_reviews_container" class="review-list-wrap list-unstyled">
                                    <?php while($row = mysqli_fetch_assoc($res_select)) { ?>
                                    <li id="review-17881" class="property-review">
                                        <div class="d-flex">
                                            <div class="review-image flex-grow-1">
                                                <img class="rounded-circle"
                                                    src="assets/profile.webp"
                                                    width="64" height="64" alt="thumb">
                                            </div>
                                            <div class="review-message">
                                                <div class="d-flex align-items-center">
                                                    <h4 class="review-title"><?php echo $row['Title'];?></h4>
                                                    <div class="rating-score-wrap flex-grow-1">
                                                        <span class="star"><i class="icon-rating full-star"></i></span>
                                                        <span class="star"><i class="icon-rating empty-star"></i></span>
                                                        <span class="star"><i class="icon-rating empty-star"></i></span>
                                                        <span class="star"><i class="icon-rating empty-star"></i></span>
                                                        <span class="star"><i class="icon-rating empty-star"></i></span>
                                                    </div>
                                                </div>
                                                <time class="review-date"><i
                                                        class="las la-paperclip mr-1"></i><?php echo $row['Date'];?> </time>
                                                <p><?php echo $row['Review'];?></p>
                                                <div class="review-like mt-2">
                                                    <ul class="likes-container-js list-inline">
                                                        <li class="list-inline-item"><span class="vote-msg"></span></li>
                                                        <span class="btn-loader houzez-loader-js"></span>
                                                        <li class="list-inline-item review-like-button">
                                                            <a class="hz-like-dislike-js" data-id="17881"
                                                                data-type="likes" data-msg="You have already voted">
                                                                <i class="las la-thumbs-up mr-1"></i>
                                                            </a>
                                                            <span class="likes-count">0</span>
                                                        </li>
                                                        <li class="list-inline-item review-dislike-button">
                                                            <a class="hz-like-dislike-js" data-id="17881"
                                                                data-type="dislikes" data-msg="You have already voted">
                                                                <i class="las la-thumbs-down mr-1"></i>
                                                            </a>
                                                            <span class="dislikes-count">0</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <div class="block-wrap" id="property-review-form">
                                    <div class="block-title-wrap">
                                        <h3>Leave a Review</h3>
                                    </div>
                                    <div class="block-content-wrap">
                                        <form method="post">
                                            <div class="form_messages"></div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" name="Email"
                                                            placeholder="you@example.com" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input class="form-control" name="Title" value
                                                            placeholder="Enter a title" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Rating</label>
                                                        <select name="Rating"
                                                            class="selectpicker form-control bs-select-hidden"
                                                            title="Select" data-live-search="false">
                                                            <option value>Select</option>
                                                            <option value="1">1 Star - Poor</option>
                                                            <option value="2">2 Star - Fair</option>
                                                            <option value="3">3 Star - Average</option>
                                                            <option value="4">4 Star - Good</option>
                                                            <option value="5">5 Star - Excellent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="form-group form-group-textarea">
                                                        <label>Review</label>
                                                        <textarea class="form-control" name="Review" rows="5"
                                                            placeholder="Write a review"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-xs-12">
                                                    <input type="submit" value="Submit Review" name="save" class="btn btn-secondary btn-sm-full-width">
                                                    <!-- <button id="submit-review" type="submit" name="save" value="save"
                                                        class="btn btn-secondary btn-sm-full-width">
                                                        <span class="houzez-loader-js"></span> Submit Review
                                                    </button> -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="similar-listings-wrap" class="similar-property-wrap listing-v1">
                                <div class="block-title-wrap">
                                    <h2>Similar Listings</h2>
                                </div>
                                <div class="listing-view grid-view card-deck">
                                <div class="item-listing-wrap hz-item-gallery-js card"
                                    data-hz-id="hz-282">
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
                                                        class="label-status label status-color-18">
                                                        For Sale
                                                    </a>
                                                </div>
                                                <ul
                                                    class="item-price-wrap hide-on-list">
                                                    <li class="item-price"> $540,000
                                                    </li>
                                                    <li class="item-sub-price">
                                                        $3,700/sq ft</li>
                                                </ul>
                                                <ul class="item-tools">
                                                    <li
                                                        class="item-tool item-preview">
                                                        <span
                                                            class="hz-show-lightbox-js"
                                                            data-listid="282"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Preview">
                                                            <i class="las la-compress-arrows-alt"></i>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="item-tool item-favorite">
                                                        <span
                                                            class="add-favorite-js item-tool-favorite d-flex justify-content-center align-items-center d-flex justify-content-center align-items-center"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Favourite"
                                                            data-listid="282">
                                                            <i class="las la-heart"></i>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="item-tool item-compare">
                                                        <span
                                                            class="houzez_compare compare-282 item-tool-compare d-flex justify-content-center align-items-center show-compare-panel"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Add to Compare"
                                                            data-listing_id="282">
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
                                                                src="assets/gallary5.jpg"
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
                                                        class="label-status label status-color-18">
                                                        For Sale
                                                    </a>
                                                </div>
                                                <h2 class="item-title">
                                                    <a target="_self"
                                                        href="#">Renovated
                                                        studio</a>
                                                </h2>
                                                <ul
                                                    class="item-price-wrap hide-on-list">
                                                    <li class="item-price"> $540,000
                                                    </li>
                                                    <li class="item-sub-price">
                                                        $3,700/sq ft</li>
                                                </ul>
                                                <address class="item-address">194
                                                    Mercer Street, 627 Broadway, New
                                                    York, NY 10012, USA</address>
                                                <ul
                                                    class="item-amenities item-amenities-with-icons">
                                                    <li class="h-beds"><i class="las la-bed"></i><span
                                                            class="item-amenities-text">Beds:</span>
                                                        <span
                                                            class="hz-figure">4</span>
                                                    </li>
                                                    <li class="h-baths"><i class="las la-bath"></i><span
                                                            class="item-amenities-text">Baths:</span>
                                                        <span
                                                            class="hz-figure">2</span>
                                                    </li>
                                                    <li class="h-cars"><i
                                                            class="las la-car mr-1"></i><span
                                                            class="item-amenities-text">Garage:</span>
                                                        <span
                                                            class="hz-figure">1</span>
                                                    </li>
                                                    <li class="h-area"><i
                                                            class="las la-ruler-combined mr-1"></i><span
                                                            class="hz-figure">1200</span>
                                                        <span
                                                            class="hz-figure area_postfix">Sq
                                                            Ft</span>
                                                    </li>
                                                    <li class="h-type">
                                                        <span>Studio</span>
                                                    </li>
                                                </ul> <a
                                                    class="btn btn-primary btn-item "
                                                    target="_self"
                                                    href="#">
                                                    Details</a>
                                                <div class="item-author">
                                                    <i
                                                        class="las la-user mr-1"></i>
                                                    <a
                                                        href="#">Michelle
                                                        Ramirez</a>
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
                                                        href="#">Michelle
                                                        Ramirez</a>
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
                                <div class="item-listing-wrap hz-item-gallery-js card"
                                    data-hz-id="hz-282">
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
                                                        class="label-status label status-color-18">
                                                        For Sale
                                                    </a>
                                                </div>
                                                <ul
                                                    class="item-price-wrap hide-on-list">
                                                    <li class="item-price"> $540,000
                                                    </li>
                                                    <li class="item-sub-price">
                                                        $3,700/sq ft</li>
                                                </ul>
                                                <ul class="item-tools">
                                                    <li
                                                        class="item-tool item-preview">
                                                        <span
                                                            class="hz-show-lightbox-js"
                                                            data-listid="282"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Preview">
                                                            <i class="las la-compress-arrows-alt"></i>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="item-tool item-favorite">
                                                        <span
                                                            class="add-favorite-js item-tool-favorite d-flex justify-content-center align-items-center d-flex justify-content-center align-items-center"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Favourite"
                                                            data-listid="282">
                                                            <i class="las la-heart"></i>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="item-tool item-compare">
                                                        <span
                                                            class="houzez_compare compare-282 item-tool-compare d-flex justify-content-center align-items-center show-compare-panel"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Add to Compare"
                                                            data-listing_id="282">
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
                                                                src="assets/gallary5.jpg"
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
                                                        class="label-status label status-color-18">
                                                        For Sale
                                                    </a>
                                                </div>
                                                <h2 class="item-title">
                                                    <a target="_self"
                                                        href="#">Renovated
                                                        studio</a>
                                                </h2>
                                                <ul
                                                    class="item-price-wrap hide-on-list">
                                                    <li class="item-price"> $540,000
                                                    </li>
                                                    <li class="item-sub-price">
                                                        $3,700/sq ft</li>
                                                </ul>
                                                <address class="item-address">194
                                                    Mercer Street, 627 Broadway, New
                                                    York, NY 10012, USA</address>
                                                <ul
                                                    class="item-amenities item-amenities-with-icons">
                                                    <li class="h-beds"><i class="las la-bed"></i><span
                                                            class="item-amenities-text">Beds:</span>
                                                        <span
                                                            class="hz-figure">4</span>
                                                    </li>
                                                    <li class="h-baths"><i class="las la-bath"></i><span
                                                            class="item-amenities-text">Baths:</span>
                                                        <span
                                                            class="hz-figure">2</span>
                                                    </li>
                                                    <li class="h-cars"><i
                                                            class="las la-car mr-1"></i><span
                                                            class="item-amenities-text">Garage:</span>
                                                        <span
                                                            class="hz-figure">1</span>
                                                    </li>
                                                    <li class="h-area"><i
                                                            class="las la-ruler-combined mr-1"></i><span
                                                            class="hz-figure">1200</span>
                                                        <span
                                                            class="hz-figure area_postfix">Sq
                                                            Ft</span>
                                                    </li>
                                                    <li class="h-type">
                                                        <span>Studio</span>
                                                    </li>
                                                </ul> <a
                                                    class="btn btn-primary btn-item "
                                                    target="_self"
                                                    href="#">
                                                    Details</a>
                                                <div class="item-author">
                                                    <i
                                                        class="las la-user mr-1"></i>
                                                    <a
                                                        href="#">Michelle
                                                        Ramirez</a>
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
                                                        href="#">Michelle
                                                        Ramirez</a>
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
                                <div class="item-listing-wrap hz-item-gallery-js card"
                                    data-hz-id="hz-344">
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
                                                        For Rent
                                                    </a>
                                                </div>
                                                <ul
                                                    class="item-price-wrap hide-on-list">
                                                    <li class="item-price">
                                                        $11,000/mo</li>
                                                </ul>
                                                <ul class="item-tools">
                                                    <li
                                                        class="item-tool item-preview">
                                                        <span
                                                            class="hz-show-lightbox-js"
                                                            data-listid="344"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Preview">
                                                            <i class="las la-compress-arrows-alt"></i>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="item-tool item-favorite">
                                                        <span
                                                            class="add-favorite-js item-tool-favorite d-flex justify-content-center align-items-center d-flex justify-content-center align-items-center"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Favourite"
                                                            data-listid="344">
                                                            <i class="las la-heart"></i>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="item-tool item-compare">
                                                        <span
                                                            class="houzez_compare compare-344 item-tool-compare d-flex justify-content-center align-items-center show-compare-panel"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Add to Compare"
                                                            data-listing_id="344"]>
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
                                                                src="assets/gallary4.jpg"
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
                                                        For Rent
                                                    </a>
                                                </div>
                                                <h2 class="item-title">
                                                    <a target="_self"
                                                        href="#">New
                                                        apartment nice view</a>
                                                </h2>
                                                <ul
                                                    class="item-price-wrap hide-on-list">
                                                    <li class="item-price">
                                                        $11,000/mo</li>
                                                </ul>
                                                <address class="item-address">8100 S
                                                    Ashland Ave, Chicago, IL 60620,
                                                    USA</address>
                                                <ul
                                                    class="item-amenities item-amenities-with-icons">
                                                    <li class="h-beds">
                                                        <i class="las la-bed"></i><span
                                                            class="item-amenities-text">Beds:</span>
                                                        <span
                                                            class="hz-figure">3</span>
                                                    </li>
                                                    <li class="h-baths"><i class="las la-bath"></i><span
                                                            class="item-amenities-text">Bath:</span>
                                                        <span
                                                            class="hz-figure">1</span>
                                                    </li>
                                                    <li class="h-cars"><i
                                                            class="las la-car mr-1"></i><span
                                                            class="item-amenities-text">Garage:</span>
                                                        <span
                                                            class="hz-figure">1</span>
                                                    </li>
                                                    <li class="h-area"><i
                                                            class="las la-ruler-combined mr-1"></i><span
                                                            class="hz-figure">1789</span>
                                                        <span
                                                            class="hz-figure area_postfix">Sq
                                                            Ft</span>
                                                    </li>
                                                    <li class="h-type">
                                                        <span>Apartment</span>
                                                    </li>
                                                </ul> <a
                                                    class="btn btn-primary btn-item "
                                                    target="_self"
                                                    href="#">
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
                                <div class="item-listing-wrap hz-item-gallery-js card"
                                    data-hz-id="hz-282">
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
                                                        class="label-status label status-color-18">
                                                        For Sale
                                                    </a>
                                                </div>
                                                <ul
                                                    class="item-price-wrap hide-on-list">
                                                    <li class="item-price"> $540,000
                                                    </li>
                                                    <li class="item-sub-price">
                                                        $3,700/sq ft</li>
                                                </ul>
                                                <ul class="item-tools">
                                                    <li
                                                        class="item-tool item-preview">
                                                        <span
                                                            class="hz-show-lightbox-js"
                                                            data-listid="282"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Preview">
                                                            <i class="las la-compress-arrows-alt"></i>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="item-tool item-favorite">
                                                        <span
                                                            class="add-favorite-js item-tool-favorite d-flex justify-content-center align-items-center"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Favourite"
                                                            data-listid="282">
                                                            <i class="las la-heart"></i>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="item-tool item-compare">
                                                        <span
                                                            class="houzez_compare compare-282 item-tool-compare show-compare-panel"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="Add to Compare"
                                                            data-listing_id="282">
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
                                                                src="assets/gallary5.jpg"
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
                                                        class="label-status label status-color-18">
                                                        For Sale
                                                    </a>
                                                </div>
                                                <h2 class="item-title">
                                                    <a target="_self"
                                                        href="#">Renovated
                                                        studio</a>
                                                </h2>
                                                <ul
                                                    class="item-price-wrap hide-on-list">
                                                    <li class="item-price"> $540,000
                                                    </li>
                                                    <li class="item-sub-price">
                                                        $3,700/sq ft</li>
                                                </ul>
                                                <address class="item-address">194
                                                    Mercer Street, 627 Broadway, New
                                                    York, NY 10012, USA</address>
                                                <ul
                                                    class="item-amenities item-amenities-with-icons">
                                                    <li class="h-beds"><i class="las la-bed"></i><span
                                                            class="item-amenities-text">Beds:</span>
                                                        <span
                                                            class="hz-figure">4</span>
                                                    </li>
                                                    <li class="h-baths"><i class="las la-bath"></i><span
                                                            class="item-amenities-text">Baths:</span>
                                                        <span
                                                            class="hz-figure">2</span>
                                                    </li>
                                                    <li class="h-cars"><i
                                                            class="las la-car mr-1"></i><span
                                                            class="item-amenities-text">Garage:</span>
                                                        <span
                                                            class="hz-figure">1</span>
                                                    </li>
                                                    <li class="h-area"><i
                                                            class="las la-ruler-combined mr-1"></i><span
                                                            class="hz-figure">1200</span>
                                                        <span
                                                            class="hz-figure area_postfix">Sq
                                                            Ft</span>
                                                    </li>
                                                    <li class="h-type">
                                                        <span>Studio</span>
                                                    </li>
                                                </ul> <a
                                                    class="btn btn-primary btn-item "
                                                    target="_self"
                                                    href="#">
                                                    Details</a>
                                                <div class="item-author">
                                                    <i
                                                        class="las la-user mr-1"></i>
                                                    <a
                                                        href="#">Michelle
                                                        Ramirez</a>
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
                                                        href="#">Michelle
                                                        Ramirez</a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
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
                                    value="/property/apartment-for-sale-2/" /> <input type="hidden" name="action"
                                    id="login_action" value="houzez_login">
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
                            value="bee08a8d9a" /><input type="hidden" name="_wp_http_referer"
                            value="/property/apartment-for-sale-2/" /> <button type="button" id="houzez_forgetpass"
                            class="btn btn-primary btn-block">
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
    <div class="mobile-property-contact visible-on-mobile">
        <div class="d-flex justify-content-between">
            <div class="agent-details flex-grow-1">
                <div class="d-flex align-items-center">
                    <div class="agent-image">
                        <img class="rounded" src="assets/client1.jpg"
                            width="50" height="50" alt="Mike Moore">
                    </div>
                    <ul class="agent-information list-unstyled">
                        <li class="agent-name">
                            Mike Moore </li>
                    </ul>
                </div>
            </div>
            <button class="btn btn-secondary" data-toggle="modal" data-target="#mobile-property-form">
                <i class="houzez-icon icon-messages-bubble"></i>
            </button>
            <a href="#"
                class="btn btn-secondary-outlined"><i class="lab la-whatsapp mr-1"></i></a>
            <a class="btn btn-secondary-outlined" href="tel:8976541258">
                <i class="las la-phone"></i>
            </a>
        </div>
    </div>
    <div class="modal fade mobile-property-form" id="mobile-property-form">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="property-form-wrap">
                        <div class="property-form clearfix">
                            <form method="post" action="#">
                                <div class="agent-details">
                                    <div class="d-flex align-items-center">
                                        <div class="agent-image"><img class="rounded"
                                                src="assets/client2.jpg"
                                                alt="Mike Moore" width="70" height="70"></div>
                                        <ul class="agent-information list-unstyled">
                                            <li class="agent-name"><i class="las la-user mr-1"></i>
                                                Mike Moore</li>
                                            <li class="agent-link"><a
                                                    href="#">View Listings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="name" value type="text" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="mobile" value type="text" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" value type="email" placeholder="Email">
                                </div>
                                <div class="form-group form-group-textarea">
                                    <textarea class="form-control hz-form-message" name="message" rows="4"
                                        placeholder="Message">Hello, I am interested in [New Apartment]</textarea>
                                </div>
                                <div class="form-group">
                                    <select name="user_type" class="selectpicker form-control bs-select-hidden"
                                        title="Select">
                                        <option value="buyer">I'm a buyer</option>
                                        <option value="tennant">I'm a tennant</option>
                                        <option value="agent">I'm an agent</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control control--checkbox m-0 hz-terms-of-use hz-no-gdpr-checkbox">
                                        <div class="gdpr-text-wrap">
                                            By submitting this form I agree to <a target="_blank"
                                                href="#">Terms of Use</a>
                                        </div>
                                    </label>
                                </div>
                                <input type="hidden" name="target_email"
                                    value="&#109;&#105;&#107;e&#46;&#109;oor&#101;&#64;ho&#117;zez&#46;&#99;o">
                                <input type="hidden" name="property_agent_contact_security" value="bb9a5e698d" />
                                <input type="hidden" name="property_permalink"/>
                                <input type="hidden" name="property_title" value="New Apartment" />
                                <input type="hidden" name="property_id" value="Hz-11" />
                                <input type="hidden" name="action" value="houzez_property_agent_contact">
                                <input type="hidden" name="listing_id" value="17405">
                                <input type="hidden" name="is_listing_form" value="yes">
                                <input type="hidden" name="agent_id" value="17365">
                                <input type="hidden" name="agent_type" value="agent_info">
                                <div class="form_messages"></div>
                                <button type="button"
                                    class="houzez_agent_property_form btn btn-secondary btn-half-width">
                                    <span class="btn-loader houzez-loader-js"></span> Send Message
                                </button>
                                <a href="tel:8976541258" class="btn btn-secondary-outlined btn-half-width">

                                    <span class="hide-on-click">Call</span>
                                    <span class="show-on-click">897 654 1258</span>

                                </a>
                                <a target="_blank"
                                    href="#"
                                    class="btn btn-secondary-outlined btn-full-width mt-10"><i
                                        class="lab la-whatsapp mr-1"></i> WhatsApp</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="property-lightbox">
        <div class="modal fade" id="property-lightbox" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="d-flex align-items-center">
                            <div class="lightbox-logo">
                                <img class="img-fluid"
                                    src="assets/dreamwell-light.jpg"
                                    alt="New Apartment">
                            </div>
                            <div class="lightbox-title flex-grow-1">
                            </div>
                            <div class="lightbox-tools">
                                <ul class="list-inline">
                                    <li class="list-inline-item btn-favorite">
                                        <a class="add-favorite-js" data-listid="17405" href="#"><i
                                                class="las la-heartmr-2 "></i> <span
                                                class="display-none">Favorite</span></a>
                                    </li>
                                    <li class="list-inline-item btn-share">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                class="las la-share-alt mr-2"></i> <span>Share</span></a>
                                        <div class="dropdown-menu dropdown-menu-right item-tool-dropdown-menu">
                                            <a class="dropdown-item" target="_blank"
                                                href="#">
                                                <i class="lab la-whatsapp mr-1"></i> WhatsApp</a>
                                            <a class="dropdown-item"
                                                href="#">
                                                <i class="lab la-facebook mr-1"></i> Facebook
                                            </a>
                                            <a class="dropdown-item"
                                                href="#">
                                                <i class="houzez-icon icon-x-logo-twitter-logo-2 mr-1"></i> Twitter
                                            </a>
                                            <a class="dropdown-item"
                                                href="#">
                                                <i class="houzez-icon icon-social-pinterest mr-1"></i> Pinterest
                                            </a>
                                            <a class="dropdown-item"
                                                href="#">
                                                <i class="houzez-icon icon-professional-network-linkedin mr-1"></i>
                                                Linkedin
                                            </a>
                                            <a class="dropdown-item"
                                                href="#">
                                                <i class="houzez-icon icon-envelope mr-1"></i>Email
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item btn-email">
                                        <a href="#"><i class="houzez-icon icon-envelope"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body clearfix">
                        <div class="lightbox-gallery-wrap ">
                            <a class="btn-expand">
                                <i class="houzez-icon icon-expand-3"></i>
                            </a>
                            <div class="lightbox-gallery">
                                <div id="lightbox-slider-js" class="lightbox-slider">
                                    <div><img class="img-fluid"
                                            src="assets/gallary1.jpg" alt
                                            title="205"></div>
                                    <div><img class="img-fluid"
                                            src="assets/gallary2.jpg" alt
                                            title="030"></div>
                                    <div><img class="img-fluid"
                                            src="assets/gallary3.jpg" alt
                                            title="006"></div>
                                    <div><img class="img-fluid"
                                            src="assets/gallary4.jpg" alt
                                            title="007"></div>
                                    <div><img class="img-fluid"
                                            src="assets/gallary5.jpg" alt
                                            title="008"></div>
                                    <div><img class="img-fluid"
                                            src="assets/gallary6.jpg" alt
                                            title="035"></div>
                                    <div><img class="img-fluid"
                                            src="assets/gallary7.jpg" alt
                                            title="036"></div>
                                    <div><img class="img-fluid"
                                            src="assets/gallary8.jpg" alt
                                            title="045"></div>
                                    <div><img class="img-fluid"
                                            src="assets/gallary9.jpg" alt
                                            title="040"></div>
                                    <div><img class="img-fluid"
                                            src="assets/gallary10.jpg" alt
                                            title="012"></div>
                                    <div><img class="img-fluid"
                                            src="assets/gallary11.jpg" alt
                                            title="047"></div>
                                </div>
                            </div>
                        </div>
                        <div class="lightbox-form-wrap">
                            <div class="property-form-wrap">
                                <div class="property-form clearfix">
                                    <form method="post" action="#">
                                        <div class="agent-details">
                                            <div class="d-flex align-items-center">
                                                <div class="agent-image"><img class="rounded"
                                                        src="assets/client1.jpg"
                                                        alt="Mike Moore" width="70" height="70"></div>
                                                <ul class="agent-information list-unstyled">
                                                    <li class="agent-name"><i
                                                            class="las la-user mr-1"></i> Mike Moore
                                                    </li>
                                                    <li class="agent-link"><a
                                                            href="#">View
                                                            Listings</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="name" value type="text"
                                                placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="mobile" value type="text"
                                                placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="email" value type="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group form-group-textarea">
                                            <textarea class="form-control hz-form-message" name="message" rows="4"
                                                placeholder="Message">Hello, I am interested in [New Apartment]</textarea>
                                        </div>
                                        <div class="form-group">
                                            <select name="user_type" class="selectpicker form-control bs-select-hidden"
                                                title="Select">
                                                <option value="buyer">I'm a buyer</option>
                                                <option value="tennant">I'm a tennant</option>
                                                <option value="agent">I'm an agent</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                class="control control--checkbox m-0 hz-terms-of-use hz-no-gdpr-checkbox">
                                                <div class="gdpr-text-wrap">
                                                    By submitting this form I agree to <a target="_blank"
                                                        href="#">Terms of
                                                        Use</a>
                                                </div>
                                            </label>
                                        </div>
                                        <input type="hidden" name="target_email"
                                            value="m&#105;k&#101;.mo&#111;r&#101;&#64;&#104;&#111;&#117;zez.&#99;&#111;">
                                        <input type="hidden" name="property_agent_contact_security"
                                            value="bb9a5e698d" />
                                        <input type="hidden" name="property_permalink" />
                                        <input type="hidden" name="property_title" value="New Apartment" />
                                        <input type="hidden" name="property_id" value="Hz-11" />
                                        <input type="hidden" name="action" value="houzez_property_agent_contact">
                                        <input type="hidden" name="listing_id" value="17405">
                                        <input type="hidden" name="is_listing_form" value="yes">
                                        <input type="hidden" name="agent_id" value="17365">
                                        <input type="hidden" name="agent_type" value="agent_info">
                                        <div class="form_messages"></div>
                                        <button type="button"
                                            class="houzez_agent_property_form btn btn-secondary btn-half-width">
                                            <span class="btn-loader houzez-loader-js"></span> Send Message
                                        </button>
                                        <a href="tel:8976541258" class="btn btn-secondary-outlined btn-half-width">

                                            <span class="hide-on-click">Call</span>
                                            <span class="show-on-click">897 654 1258</span>

                                        </a>
                                        <a target="_blank"
                                            href="#"
                                            class="btn btn-secondary-outlined btn-full-width mt-10"><i
                                                class="lab la-whatsapp mr-1"></i> WhatsApp</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
    <script type="text/javascript" src="https://demo01.houzez.co/wp-content/themes/houzez/js/vendors/lightslider.min.js"
        id="lightslider-js"></script>
    <script type="text/javascript" src="https://demo01.houzez.co/wp-content/themes/houzez/js/vendors/Chart.min.js"
        id="chart-js"></script>
    <script type="text/javascript" src="https://demo01.houzez.co/wp-includes/js/jquery/ui/core.min.js"
        id="jquery-ui-core-js"></script>
    <script type="text/javascript" src="https://demo01.houzez.co/wp-includes/js/jquery/ui/mouse.min.js"
        id="jquery-ui-mouse-js"></script>
    <script type="text/javascript" src="https://demo01.houzez.co/wp-includes/js/jquery/ui/slider.min.js"
        id="jquery-ui-slider-js"></script>
    <script type="text/javascript" src="https://demo01.houzez.co/wp-content/themes/houzez/js/vendors/jquery.vide.min.js"
        id="vide-js"></script>
    <script type="text/javascript"
        src="https://demo01.houzez.co/wp-content/themes/houzez/js/vendors/bootstrap-datepicker.min.js"
        id="bootstrap-datepicker-js"></script>
    <script type="text/javascript" id="houzez-custom-js-extra">
        /* <![CDATA[ */
        var houzez_vars = { "admin_url": "https:\/\/demo01.houzez.co\/wp-admin\/", "houzez_rtl": "no", "user_id": "0", "redirect_type": "diff_page", "login_redirect": "https:\/\/demo01.houzez.co\/my-profile\/", "property_gallery_popup_type": "houzez", "wp_is_mobile": "", "default_lat": "25.686540", "default_long": "-80.431345", "houzez_is_splash": "", "prop_detail_nav": "yes", "add_to_favorite_login_required": "0", "disable_property_gallery": "1", "grid_gallery_behaviour": "houzez-show-gallery", "is_singular_property": "1", "search_position": "under_nav", "login_loading": "Sending user info, please wait...", "not_found": "We didn't find any results", "houzez_map_system": "google", "for_rent": "for-rent", "for_rent_price_slider": "for-rent", "search_min_price_range": "200", "search_max_price_range": "2500000", "search_min_price_range_for_rent": "50", "search_max_price_range_for_rent": "25000", "get_min_price": "0", "get_max_price": "0", "currency_position": "before", "currency_symbol": "$", "decimals": "0", "decimal_point_separator": ".", "thousands_separator": ",", "is_halfmap": "", "houzez_date_language": "", "houzez_default_radius": "50", "houzez_reCaptcha": "", "geo_country_limit": "0", "geocomplete_country": "", "is_edit_property": "", "processing_text": "Processing, Please wait...", "halfmap_layout": "", "prev_text": "Prev", "next_text": "Next", "keyword_search_field": "prop_title", "keyword_autocomplete": "1", "autosearch_text": "Searching...", "paypal_connecting": "Connecting to paypal, Please wait... ", "transparent_logo": "", "is_transparent": "", "is_top_header": "0", "simple_logo": "https:\/\/demo01.houzez.co\/wp-content\/uploads\/2020\/02\/logo-houzez-color.png", "retina_logo": "https:\/\/demo01.houzez.co\/wp-content\/uploads\/2016\/03\/logo-houzez-color@2x.png", "mobile_logo": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white.png", "retina_logo_mobile": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png", "retina_logo_mobile_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png", "custom_logo_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white.png", "retina_logo_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png", "monthly_payment": "Monthly Payment", "weekly_payment": "Weekly Payment", "bi_weekly_payment": "Bi-Weekly Payment", "compare_url": "https:\/\/demo01.houzez.co\/compare-properties\/", "favorite_url": "https:\/\/demo01.houzez.co\/favorite-properties\/", "template_thankyou": "https:\/\/demo01.houzez.co\/thank-you\/", "compare_page_not_found": "Please create page using compare properties template", "compare_limit": "Maximum item compare are 4", "compare_add_icon": "", "compare_remove_icon": "", "add_compare_text": "Add to Compare", "remove_compare_text": "Remove from Compare", "is_mapbox": "google", "api_mapbox": "", "is_marker_cluster": "1", "g_recaptha_version": "v3", "s_country": "", "s_state": "", "s_city": "", "s_areas": "", "woo_checkout_url": "", "agent_redirection": "" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://demo01.houzez.co/wp-content/themes/houzez/js/custom.min.js"
        id="houzez-custom-js"></script>
    <script type="text/javascript" id="houzez-single-property-map-js-extra">
        /* <![CDATA[ */
        var houzez_single_property_map = { "title": "New Apartment", "price": " $125,000", "property_id": "17405", "pricePin": "$125,000", "property_type": "Apartment", "address": "6701 South Dixie Highway, Miami, FL, USA", "lat": "25.6950387", "lng": "-80.3017672", "term_id": "7", "marker": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/map\/pin-single-family.png", "retinaMarker": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/map\/pin-single-family.png", "thumbnail": "https:\/\/demo01.houzez.co\/wp-content\/uploads\/2020\/04\/036-592x444.jpg" };
        var houzez_map_options = { "markerPricePins": "no", "single_map_zoom": "14", "map_type": "roadmap", "map_pin_type": "marker", "googlemap_stype": "[{\r\n\t\t\t\t\"elementType\": \"labels.text\",\r\n\t\t\t\t\"stylers\": [\r\n\t\t\t\t{\r\n\t\t\t\t\t\"weight\": 5\r\n\t\t\t\t}\r\n\t\t\t\t]\r\n\t\t\t},\r\n\t\t\t{\r\n\t\t\t\t\"featureType\": \"landscape\",\r\n\t\t\t\t\"elementType\": \"geometry.fill\",\r\n\t\t\t\t\"stylers\": [\r\n\t\t\t\t{\r\n\t\t\t\t\t\"color\": \"#f5f7ff\"\r\n\t\t\t\t}\r\n\t\t\t\t]\r\n\t\t\t},\r\n\t\t\t{\r\n\t\t\t\t\"featureType\": \"road\",\r\n\t\t\t\t\"stylers\": [\r\n\t\t\t\t{\r\n\t\t\t\t\t\"visibility\": \"off\"\r\n\t\t\t\t}\r\n\t\t\t\t]\r\n\t\t\t},\r\n\t\t\t{\r\n\t\t\t\t\"featureType\": \"water\",\r\n\t\t\t\t\"elementType\": \"geometry.fill\",\r\n\t\t\t\t\"stylers\": [\r\n\t\t\t\t{\r\n\t\t\t\t\t\"color\": \"#84dcff\"\r\n\t\t\t\t}\r\n\t\t\t\t]\r\n\t\t\t}]", "closeIcon": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/map\/close.png", "show_map": "1", "infoWindowPlac": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/pixel.gif" };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="https://demo01.houzez.co/wp-content/themes/houzez/js/single-property-google-map.min.js"
        id="houzez-single-property-map-js"></script>
    <script type="text/javascript" id="houzez-walkscore-js-before">
        /* <![CDATA[ */
        var ws_wsid = '6acf594b7b8899d0954d11fb38b90e3f';
        var ws_address = '6701 South Dixie Highway, Miami, FL, USA';
        var ws_format = 'wide';
        var ws_width = '650';
        var ws_width = '100%';
        var ws_height = '400';
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://www.walkscore.com/tile/show-walkscore-tile.php"
        id="houzez-walkscore-js"></script>
    <script type="text/javascript" defer
        src="https://demo01.houzez.co/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js"
        id="mc4wp-forms-api-js"></script>
</body>

</html>