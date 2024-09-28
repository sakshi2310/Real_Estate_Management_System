<?php 

$con = mysqli_connect("localhost", "root", "", "real_estate");

$sql = "SELECT * FROM `property_register` WHERE Approval_status='Approved'";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);
$sql_user = "select * from users where id=".$row['User_id']; 
$res_user = mysqli_query($con,$sql); 
$row_user = mysqli_fetch_assoc($res_user);


$sql_explore = "SELECT * FROM `property_register` WHERE Approval_status='Approved' ORDER BY id DESC LIMIT 6";
$res_explore = mysqli_query($con, $sql_explore);


?>

        <!-- header start -->
         <?php
            include('header.php');
         ?>
        <!-- header end -->

        <section class="content-wrap">
            <div data-elementor-type="wp-page" data-elementor-id="10" class="elementor elementor-10">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-b147f27 elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle banner-slider"
                    data-id="b147f27" data-element_type="section"
                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default slider-banner-breadcrumbs">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1c7ef66"
                            data-id="1c7ef66" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-832f136 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="832f136" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-4953fca"
                                            data-id="4953fca" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-66 elementor-inner-column elementor-element elementor-element-b488bd4"
                                            data-id="b488bd4" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5f1a2d6 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="5f1a2d6" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Welcome To Dreamwell</h2>
                                                            <p class="houzez_section_subtitle">Dreamwell is an innovative
                                                                real estate WordPress theme that helps to ensure your
                                                                website’s success in this super-competitive market.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-5dacfcd"
                                            data-id="5dacfcd" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-de02c12 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="de02c12" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5c73b61"
                            data-id="5c73b61" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-3a474c0 elementor-button-align-stretch elementor-widget elementor-widget-houzez_elementor_search_builder"
                                    data-id="3a474c0" data-element_type="widget"
                                    data-widget_type="houzez_elementor_search_builder.default">
                                    <div class="elementor-widget-container">
                                        <form class="houzez-search-form-js houzez-search-builder-form-js"
                                            id="houzez-search-3a474c0" method="get"
                                            action="#">
                                            <ul id="houzez-search-tabs-wrap" class="houzez-status-tabs nav nav-pills"
                                                role="tablist" data-toggle="buttons">
                                                <!-- <li class="nav-item">
                                                    <a class="nav-link active" data-val data-toggle="pill" href="#"
                                                        role="tab" aria-selected="true">
                                                        All Status </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="status-tab-js nav-link " data-val="for-rent"
                                                        data-toggle="pill" href="#" role="tab" aria-selected="true">
                                                        For Rent
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="status-tab-js nav-link " data-val="for-sale"
                                                        data-toggle="pill" href="#" role="tab" aria-selected="true">
                                                        For Sale
                                                    </a>
                                                </li> <input type="hidden" name="status[]" id="search-tabs" value> -->
                                            </ul>
                                            <div
                                                class="houzez-ele-search-form-wrapper elementor-form-fields-wrapper elementor-labels-above slider-box" style="margin-top:50px;">
                                                <div
                                                    class="elementor-field-group elementor-column form-group elementor-field-group-field-types elementor-col-20 elementor-sm-100">
                                                    <label for="form-field-field-types"
                                                        class="elementor-field-label">Looking for</label>
                                                    <div class="elementor-field elementor-select-wrapper">
                                                        <select multiple="multiple" title="Property Type"
                                                            data-selected-text-format="count &gt; 1"
                                                            data-select-all-text="Select All"
                                                            data-deselect-all-text="Deselect All"
                                                            data-actions-box="true"
                                                            data-count-selected-text="{0} types selected" data-size="5"
                                                            name="type[]" id="form-field-field-types"
                                                            class="selectpicker bs-select-hidden houzez-field-textual form-control elementor-size-sm "
                                                            data-none-results-text="No results matched {0}">
                                                            <option data-ref="commercial" value="commercial">Commercial
                                                            </option>
                                                            <option data-ref="office" value="office"> - Office</option>
                                                            <option data-ref="shop" value="shop"> - Shop</option>
                                                            <option data-ref="residential" value="residential">
                                                                Residential</option>
                                                            <option data-ref="apartment" value="apartment"> - Apartment
                                                            </option>
                                                            <option data-ref="condo" value="condo"> - Condo</option>
                                                            <option data-ref="multi-family-home"
                                                                value="multi-family-home"> - Multi Family Home</option>
                                                            <option data-ref="single-family-home"
                                                                value="single-family-home"> - Single Family Home
                                                            </option>
                                                            <option data-ref="studio" value="studio"> - Studio</option>
                                                            <option data-ref="villa" value="villa"> - Villa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-field-group elementor-column form-group elementor-field-group-6b0017d elementor-col-20">
                                                    <label for="form-field-6b0017d"
                                                        class="elementor-field-label">Location</label>
                                                    <div class="elementor-field elementor-select-wrapper">
                                                        <select data-size="5" name="location[]" id="form-field-6b0017d"
                                                            class="selectpicker bs-select-hidden houzez-field-textual form-control elementor-size-sm houzezSelectFilter houzezCityFilter houzezThirdList houzez-city-js"
                                                            data-none-results-text="No results matched {0}"
                                                            data-target="houzezFourthList">
                                                            <option value>All Cities</option>
                                                            <option data-ref="chicago" data-belong="illinois"
                                                                data-subtext="Illinois" value="chicago">Chicago</option>
                                                            <option data-ref="chivilcoy"
                                                                data-belong="provincia-de-buenos-aires"
                                                                data-subtext="Provincia de Buenos Aires"
                                                                value="chivilcoy">Chivilcoy</option>
                                                            <option data-ref="los-angeles" data-belong="california"
                                                                data-subtext="California" value="los-angeles">Los
                                                                Angeles</option>
                                                            <option data-ref="miami" data-belong="florida"
                                                                data-subtext="Florida" value="miami">Miami</option>
                                                            <option data-ref="new-york" data-belong="new-york"
                                                                data-subtext="New York" value="new-york">New York
                                                            </option>
                                                            <option data-ref="uyo" data-belong="akwa-ibom"
                                                                data-subtext="AKWA IBOM" value="uyo">Uyo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-field-group elementor-column form-group elementor-field-group-field-beds elementor-col-20 elementor-sm-100">
                                                    <label for="form-field-field-beds"
                                                        class="elementor-field-label">Property Size</label>
                                                    <div class="elementor-field elementor-select-wrapper">
                                                        <select data-size="5" name="bedrooms" id="form-field-field-beds"
                                                            class="selectpicker bs-select-hidden houzez-field-textual form-control elementor-size-sm">
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
                                                <div
                                                    class="elementor-field-group elementor-column form-group elementor-field-group-field-max-price elementor-col-20 elementor-sm-100">
                                                    <label for="form-field-field-max-price"
                                                        class="elementor-field-label">Your budget</label>
                                                    <div
                                                        class="prices-for-all elementor-field elementor-select-wrapper">
                                                        <select data-size="5" name="max-price"
                                                            id="form-field-field-max-price" data-live-search="true"
                                                            data-live-search-normalize="true"
                                                            class="selectpicker bs-select-hidden houzez-field-textual form-control elementor-size-sm">
                                                            <option value>Max. Price</option>
                                                            <option value="any">Any</option>
                                                            <option value="5000">$5,000</option>
                                                            <option value="10000">$10,000</option>
                                                            <option value="50000">$50,000</option>
                                                            <option value="100000">$100,000</option>
                                                            <option value="200000">$200,000</option>
                                                            <option value="300000">$300,000</option>
                                                            <option value="400000">$400,000</option>
                                                            <option value="500000">$500,000</option>
                                                            <option value="600000">$600,000</option>
                                                            <option value="700000">$700,000</option>
                                                            <option value="800000">$800,000</option>
                                                            <option value="900000">$900,000</option>
                                                            <option value="1000000">$1,000,000</option>
                                                            <option value="1500000">$1,500,000</option>
                                                            <option value="2000000">$2,000,000</option>
                                                            <option value="2500000">$2,500,000</option>
                                                            <option value="5000000">$5,000,000</option>
                                                            <option value="10000000">$10,000,000</option>
                                                        </select>
                                                    </div>
                                                    <div
                                                        class="hide prices-only-for-rent elementor-field elementor-select-wrapper">
                                                        <select data-size="5" name="max-price"
                                                            id="form-field-field-max-price" data-live-search="true"
                                                            data-live-search-normalize="true"
                                                            class="selectpicker bs-select-hidden houzez-field-textual form-control elementor-size-sm">
                                                            <option value>Max. Price</option>
                                                            <option value="any">Any</option>
                                                            <option value="1000">$1,000</option>
                                                            <option value="2000">$2,000</option>
                                                            <option value="3000">$3,000</option>
                                                            <option value="4000">$4,000</option>
                                                            <option value="5000">$5,000</option>
                                                            <option value="7500">$7,500</option>
                                                            <option value="10000">$10,000</option>
                                                            <option value="15000">$15,000</option>
                                                            <option value="20000">$20,000</option>
                                                            <option value="25000">$25,000</option>
                                                            <option value="30000">$30,000</option>
                                                            <option value="40000">$40,000</option>
                                                            <option value="50000">$50,000</option>
                                                            <option value="75000">$75,000</option>
                                                            <option value="100000">$100,000</option>
                                                            <option value="150000">$150,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-20">
                                                    <button type="submit"
                                                        class="houzez-search-button elementor-button elementor-size-sm">
                                                        Search </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-6fc59222 elementor-section-content-middle elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="6fc59222" data-element_type="section"
                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-766ac79d"
                            data-id="766ac79d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-5ea3651b elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="5ea3651b" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-35435fd1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="35435fd1" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4540024e"
                                            data-id="4540024e" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-61d75a7d animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="61d75a7d" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Discover Our Featured
                                                                Listings </h2>
                                                            <p class="houzez_section_subtitle">Lorem ipsum dolor sit
                                                                amet, consectetur adipisicing elit</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-30e331f elementor-widget elementor-widget-houzez_elementor_properties_carousel_v2"
                                                    data-id="30e331f" data-element_type="widget"
                                                    data-widget_type="houzez_elementor_properties_carousel_v2.default">
                                                    <div class="elementor-widget-container">
                                                        <div
                                                            class="property-carousel-module houzez-carousel-arrows-K4H2X houzez-carousel-cols-3 property-carousel-module-v2">
                                                            <div class="property-carousel-buttons-wrap">
                                                                <button type="button"
                                                                    class="slick-prev-js-K4H2X slick-prev btn-primary-outlined">Prev</button>
                                                                <button type="button"
                                                                    class="slick-next-js-K4H2X slick-next btn-primary-outlined">Next</button>
                                                            </div>
                                                            <div class="listing-view grid-view">
                                                                <div id="houzez-properties-carousel-K4H2X"
                                                                    data-token="K4H2X"
                                                                    class="houzez-properties-carousel-js houzez-all-slider-wrap card-deck">
                                                                    <?php  while($row=mysqli_fetch_assoc($res)) { ?>
                                                                    <div class="item-listing-wrap hz-item-gallery-js card"
                                                                        data-hz-id="hz-115"
                                                                        >
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
                                                                                            <?php  echo $row['Status'];?>
                                                                                        </a>
                                                                                    </div>
                                                                                    <ul
                                                                                        class="item-price-wrap hide-on-list">
                                                                                        <li class="item-price">$4,500/mo
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
                                                                                                data-listing_id="115"
                                                                                                data-listing_image="#">
                                                                                                <i class="las la-plus-circle"></i>
                                                                                            </span>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="listing-image-wrap">
                                                                                        <div class="listing-thumb">
                                                                                            <a target="_self"
                                                                                                href=""
                                                                                                class="listing-featured-thumb hover-effect overflow-hidden">
                                                                                                <img
                                                                                                    src="User/upload/<?php echo $row['Image1']; ?> "
                                                                                                    alt="" 
                                                                                                />
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
                                                                                            href="single_property.php?pro_id=<?php echo $row['id'];?>"><?php echo $row['Property_title']; ?></a>
                                                                                    </h2>
                                                                                    <ul
                                                                                        class="item-price-wrap hide-on-list">
                                                                                        <li class="item-price">$4,500/mo
                                                                                        </li>
                                                                                    </ul>
                                                                                    <address class="item-address"><?php echo $row['Description'];?>
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
                                                                                                class="item-amenities-text">Garage:</span>
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
                                                                                        href="#">
                                                                                        Details</a>
                                                                                    <div class="item-author">
                                                                                        <i
                                                                                            class="las la-user mr-1"></i>
                                                                                            <?php 
                                                                                           
                                                                                            
                                                                                            ?>
                                                                                        <a
                                                                                            href="#">#</a>
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
                                                                                            href="#"><?php   
                                                                                             echo $row['User_id'];  ?></a>
                                                                                    </div>
                                                                                    <div class="item-date">
                                                                                        <i
                                                                                            class="las la-paperclip mr-1"></i>
                                                                                        <?php echo $row['Pro_date'];?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php  } ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-b190306 elementor-widget elementor-widget-spacer"
                                    data-id="b190306" data-element_type="widget" data-widget_type="spacer.default">
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

                <!-- 3d section start -->
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-aac7c5c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                    data-id="aac7c5c" data-element_type="section" id="tour"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3fc292b"
                            data-id="3fc292b" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-b15f500 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="b15f500" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-fd8b393"
                                            data-id="fd8b393" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-8774f02 elementor-widget elementor-widget-spacer"
                                                    data-id="8774f02" data-element_type="widget"
                                                    data-widget_type="spacer.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-spacer">
                                                            <div class="elementor-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-66 elementor-inner-column elementor-element elementor-element-b488bd4 w-100"
                                                    data-id="b488bd4" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-5f1a2d6 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                            data-id="5f1a2d6" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                            data-widget_type="houzez_elementor_section_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div
                                                                    class="houzez_section_title_wrap section-title-module text-center">
                                                                    <h2 class="houzez_section_title text-dark">3d Tour
                                                                    </h2>
                                                                    <p class="houzez_section_subtitle text-dark">Lorem
                                                                        ipsum dolor sit
                                                                        amet, conse tetur elit</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-8502fb6 elementor-widget elementor-widget-houzez_elementor_space"
                                                    data-id="8502fb6" data-element_type="widget"
                                                    data-widget_type="houzez_elementor_space.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez-spacer">
                                                            <div class="houzez-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d90a141 elementor-widget elementor-widget-html"
                                                    data-id="d90a141" data-element_type="widget"
                                                    data-widget_type="html.default">
                                                    <div class="elementor-widget-container">
                                                        <iframe width="853" height="480"
                                                            src="https://my.matterport.com/show/?m=zEWsxhZpGba&play=1&qs=1"
                                                            frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d320cec elementor-widget elementor-widget-spacer"
                                                    data-id="d320cec" data-element_type="widget"
                                                    data-widget_type="spacer.default">
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
                                <div class="elementor-element elementor-element-4424405 elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="4424405" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 3d section end -->

                <!-- floor start -->
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-279621c elementor-section-boxed elementor-section-height-default elementor-section-height-default my-5"
                    data-id="279621c" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-a104ac4"
                            data-id="a104ac4" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-column elementor-col-66 elementor-inner-column elementor-element elementor-element-b488bd4 w-100"
                                data-id="b488bd4" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-5f1a2d6 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                        data-id="5f1a2d6" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                        data-widget_type="houzez_elementor_section_title.default">
                                        <div class="elementor-widget-container">
                                            <div
                                                class="houzez_section_title_wrap section-title-module text-center">
                                                <h2 class="houzez_section_title text-dark">Floor Plans
                                                </h2>
                                                <p class="houzez_section_subtitle text-dark">Lorem ipsum dolor sit amet, conse tetur elit</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="elementor-element elementor-element-fb6fbc5 elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="fb6fbc5" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-7cee9da elementor-tabs-view-vertical elementor-widget elementor-widget-tabs"
                                    data-id="7cee9da" data-element_type="widget" data-widget_type="tabs.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-tabs">
                                            <div class="elementor-tabs-wrapper" role="tablist">
                                                <div id="elementor-tab-title-1311"
                                                    class="elementor-tab-title elementor-tab-desktop-title"
                                                    aria-selected="true" data-tab="1" role="tab" tabindex="0"
                                                    aria-controls="elementor-tab-content-1311" aria-expanded="false">
                                                    First Floor</div>
                                                <div id="elementor-tab-title-1312"
                                                    class="elementor-tab-title elementor-tab-desktop-title"
                                                    aria-selected="false" data-tab="2" role="tab" tabindex="-1"
                                                    aria-controls="elementor-tab-content-1312" aria-expanded="false">
                                                    Second Floor</div>
                                            </div>
                                            <div class="elementor-tabs-content-wrapper" role="tablist"
                                                aria-orientation="vertical">
                                                <div class="elementor-tab-title elementor-tab-mobile-title"
                                                    aria-selected="true" data-tab="1" role="tab" tabindex="0"
                                                    aria-controls="elementor-tab-content-1311" aria-expanded="false">
                                                    First Floor</div>
                                                <div id="elementor-tab-content-1311"
                                                    class="elementor-tab-content elementor-clearfix" data-tab="1"
                                                    role="tabpanel" aria-labelledby="elementor-tab-title-1311"
                                                    tabindex="0" hidden="false">
                                                    <p><img 
                                                            src="assets/floor1.jpg"
                                                            sizes="(max-width: 883px) 100vw, 883px" /></p>
                                                </div>
                                                <div class="elementor-tab-title elementor-tab-mobile-title"
                                                    aria-selected="false" data-tab="2" role="tab" tabindex="-1"
                                                    aria-controls="elementor-tab-content-1312" aria-expanded="false">
                                                    Second Floor</div>
                                                <div id="elementor-tab-content-1312"
                                                    class="elementor-tab-content elementor-clearfix" data-tab="2"
                                                    role="tabpanel" aria-labelledby="elementor-tab-title-1312"
                                                    tabindex="0" hidden="hidden">
                                                    <p><img src="assets/floor2.jpg"
                                                            sizes="(max-width: 883px) 100vw, 883px" /></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- floor end -->

                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-995af2 elementor-section-content-middle elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="995af2" data-element_type="section"
                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-wider">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4888ba6e"
                            data-id="4888ba6e" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-36e652f elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="36e652f" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-3ce2b94b elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="3ce2b94b" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-645c6d3"
                                            data-id="645c6d3" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-d9620db animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="d9620db" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Residential </h2>
                                                            <p class="houzez_section_subtitle">Lorem ipsum dolor sit
                                                                amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                                incidi dunt </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-9d15012 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="9d15012" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1e7ee071 animated-slow elementor-invisible elementor-widget elementor-widget-Houzez_elementor_grid_builder"
                                                    data-id="1e7ee071" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="Houzez_elementor_grid_builder.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="grid-item houzez-lazy-bg houzez-lazyload grid-item-v2"
                                                            style="background-image: url(assets/residancy6.jpg)">
                                                            <a class="grid-item-link hover-effect-flat"
                                                                href="#">
                                                                <div class="grid-item-text-wrap">
                                                                    <div class="grid-item-subtitle">23 Properties</div>
                                                                    <div class="grid-item-title">Apartment</div>
                                                                    <div class="grid-item-text-link">More Details</div>
                                                                    <div class="grid-item-icon">
                                                                        <i
                                                                            class="las la-play"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4e79d749"
                                            data-id="4e79d749" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6826010a animated-slow elementor-invisible elementor-widget elementor-widget-Houzez_elementor_grid_builder"
                                                    data-id="6826010a" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="Houzez_elementor_grid_builder.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="grid-item houzez-lazy-bg houzez-lazyload grid-item-v3"
                                                            style="background-image: url(assets/residancy4.jpg)">
                                                            <a class="grid-item-link hover-effect-flat"
                                                                href="#">
                                                                <div class="grid-item-text-wrap">
                                                                    <div class="grid-item-subtitle">7 Properties</div>
                                                                    <div class="grid-item-title">Studio</div>
                                                                    <div class="grid-item-text-link">More Details</div>
                                                                    <div class="grid-item-icon">
                                                                        <i
                                                                            class="las la-play"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-24e437ea"
                                            data-id="24e437ea" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6b691415 animated-slow elementor-invisible elementor-widget elementor-widget-Houzez_elementor_grid_builder"
                                                    data-id="6b691415" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="Houzez_elementor_grid_builder.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="grid-item houzez-lazy-bg houzez-lazyload grid-item-v2"
                                                            style="background-image: url(assets/residancy5.jpg)">
                                                            <a class="grid-item-link hover-effect-flat"
                                                                href="#">
                                                                <div class="grid-item-text-wrap">
                                                                    <div class="grid-item-subtitle">12 Properties</div>
                                                                    <div class="grid-item-title">Single Family Home
                                                                    </div>
                                                                    <div class="grid-item-text-link">More Details</div>
                                                                    <div class="grid-item-icon">
                                                                        <i
                                                                            class="las la-play"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-13ca2776 animated-slow elementor-invisible elementor-widget elementor-widget-Houzez_elementor_grid_builder"
                                                    data-id="13ca2776" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="Houzez_elementor_grid_builder.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="grid-item houzez-lazy-bg houzez-lazyload grid-item-v2"
                                                            style="background-image: url(assets/residancy3.jpg)">
                                                            <a class="grid-item-link hover-effect-flat"
                                                                href="#">
                                                                <div class="grid-item-text-wrap">
                                                                    <div class="grid-item-subtitle">10 Properties</div>
                                                                    <div class="grid-item-title">Villa</div>
                                                                    <div class="grid-item-text-link">More Details</div>
                                                                    <div class="grid-item-icon">
                                                                        <i
                                                                            class="las la-play"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-db084f3 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="db084f3" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0fa8849"
                                            data-id="0fa8849" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-fc482ae animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="fc482ae" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Commercial </h2>
                                                            <p class="houzez_section_subtitle">Lorem ipsum dolor sit
                                                                amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                                incidi dunt </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-67ae070 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="67ae070" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-42ba807"
                                            data-id="42ba807" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-be0fd26 animated-slow elementor-invisible elementor-widget elementor-widget-Houzez_elementor_grid_builder"
                                                    data-id="be0fd26" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="Houzez_elementor_grid_builder.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="grid-item houzez-lazy-bg houzez-lazyload grid-item-v2"
                                                            style="background-image: url(assets/residancy2.jpg)">
                                                            <a class="grid-item-link hover-effect-flat"
                                                                href="#">
                                                                <div class="grid-item-text-wrap">
                                                                    <div class="grid-item-subtitle">3 Properties</div>
                                                                    <div class="grid-item-title">Office</div>
                                                                    <div class="grid-item-text-link">More Details</div>
                                                                    <div class="grid-item-icon">
                                                                        <i
                                                                            class="las la-play"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-af49379"
                                            data-id="af49379" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-fb73db3 animated-slow elementor-invisible elementor-widget elementor-widget-Houzez_elementor_grid_builder"
                                                    data-id="fb73db3" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="Houzez_elementor_grid_builder.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="grid-item houzez-lazy-bg houzez-lazyload grid-item-v2"
                                                            style="background-image: url(assets/residancy1.jpg)">
                                                            <a class="grid-item-link hover-effect-flat"
                                                                href="#">
                                                                <div class="grid-item-text-wrap">
                                                                    <div class="grid-item-subtitle">3 Properties</div>
                                                                    <div class="grid-item-title">Shop</div>
                                                                    <div class="grid-item-text-link">More Details</div>
                                                                    <div class="grid-item-icon">
                                                                        <i
                                                                            class="las la-play"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-8dc1877 elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="8dc1877" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-dbd6aa6 elementor-section-content-bottom elementor-section-stretched elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                    data-id="dbd6aa6" data-element_type="section"
                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-496312a"
                            data-id="496312a" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6c1ddec elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="6c1ddec" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-4aa51fc elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                    data-id="4aa51fc" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-wider">
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a22fcee"
                                            data-id="a22fcee" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6758436 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="6758436" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Why Houzez Is The Perfect
                                                                Choice?</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-acf2e6f elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="acf2e6f" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-a3a900b animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                    data-id="a3a900b" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default">01.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c500625 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="c500625" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                    
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Suitable For Agents And
                                                                Agencies</h2>
                                                            <p class="houzez_section_subtitle">Never miss a sale! It's
                                                                never been easier to turn leads into real customers</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-e54b2de elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="e54b2de" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-093e1d3"
                                            data-id="093e1d3" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-53c50de animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                    data-id="53c50de" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default">02.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-178029e animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="178029e" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Design Custom Leads Capture
                                                                Forms</h2>
                                                            <p class="houzez_section_subtitle">Keep track of your leads
                                                                without having to pay for an external CRM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-c8e9bb4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="c8e9bb4" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-1332eab animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                                    data-id="1332eab" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default">03.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-000c7d3 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="000c7d3" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Highly Customizable Theme
                                                            </h2>
                                                            <p class="houzez_section_subtitle">Customize your website
                                                                according to your expectations and requirements
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-94abbcf elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                    data-id="94abbcf" data-element_type="widget"
                                                    data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider">
                                                            <span class="elementor-divider-separator">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-db69370"
                                            data-id="db69370" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-4b2f91d animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="4b2f91d" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Real Estate Inquiry Form
                                                            </h2>
                                                            <p class="houzez_section_subtitle">Design custom lead
                                                                capture forms that integrate with the Houzez CRM</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-25a24dc elementor-button-align-stretch elementor-widget elementor-widget-houzez_elementor_inquiry_form"
                                                    data-id="25a24dc" data-element_type="widget"
                                                    data-widget_type="houzez_elementor_inquiry_form.default">
                                                    <div class="elementor-widget-container">
                                                        <script type="application/javascript">
                                                            jQuery(document).bind("ready", function () {
                                                                houzezValidateElementor("#houzez-form-25a24dc");
                                                            });
                                                        </script>
                                                        <form class="elementor-form" id="houzez-form-25a24dc"
                                                            method="post" name="New Form"
                                                            action="">
                                                            <input type="hidden" name="form_id" value="25a24dc" />
                                                            <input type="hidden" name="action"
                                                                value="houzez_ele_inquiry_form" />
                                                            <input type="hidden" name="source_link"
                                                                value="" />
                                                            <input type="hidden" name="lead_page_id" value="10" />
                                                            <input type="hidden" name="is_estimation" value="yes" />
                                                            <input type="hidden" name="email_to"
                                                                value="hello@favethemes.com" />
                                                            <input type="hidden" name="email_subject"
                                                                value="New message from &quot;Houzez 01&quot;" />
                                                            <input type="hidden" name="email_to_cc" value />
                                                            <input type="hidden" name="email_to_bcc" value />
                                                            <input type="hidden" name="webhook" value="false" />
                                                            <input type="hidden" name="webhook_url" value />
                                                            <input type="hidden" name="redirect_to" value />
                                                            <input type="hidden" name="google_recaptcha" value="yes" />
                                                            <div
                                                                class="elementor-form-fields-wrapper elementor-labels-above">
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-ba6c34c elementor-col-100 elementor-field-required">
                                                                    <label for="form-field-ba6c34c"
                                                                        class="elementor-field-label">Inquiry
                                                                        Type</label>
                                                                    <div
                                                                        class="elementor-field elementor-select-wrapper">
                                                                        <select name="enquiry_type"
                                                                            id="form-field-ba6c34c"
                                                                            class="elementor-field-textual form-control elementor-size-md"
                                                                            required="required" title="* Inquiry Type">
                                                                            <option value>Select</option>
                                                                            <option value="Purchase">Purchase</value>
                                                                            <option value="Rent"> Rent</value>
                                                                            <option value="Sell"> Sell</value>
                                                                            <option value="Miss"> Miss</value>
                                                                            <option value="Evaluation"> Evaluation
                                                                                </value>
                                                                            <option value="Mortgage"> Mortgage</value>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-b7fe77d elementor-col-100 elementor-field-required">
                                                                    <label for="form-field-b7fe77d"
                                                                        class="elementor-field-label">Information</label>
                                                                    <div
                                                                        class="elementor-field elementor-select-wrapper">
                                                                        <select name="user_type" id="form-field-b7fe77d"
                                                                            class="elementor-field-textual form-control elementor-size-md"
                                                                            required="required" title="* Information">
                                                                            <option value>I&#039;m a </option>
                                                                            <option value="I am a real estate agent">
                                                                                I&#039;m a real estate agent</option>
                                                                            <option value="I am a property owner">
                                                                                I&#039;m a property owner</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-cc6b92f elementor-col-50 elementor-field-required">
                                                                    <input type="text" name="first_name"
                                                                        id="form-field-cc6b92f"
                                                                        class="elementor-field form-control elementor-size-md elementor-field-textual"
                                                                        placeholder="First Name" title="* First Name"
                                                                        required="required">
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-3cc124e elementor-col-50">
                                                                    <input type="text" name="last_name"
                                                                        id="form-field-3cc124e"
                                                                        class="elementor-field form-control elementor-size-md elementor-field-textual"
                                                                        placeholder="Last Name" title="* Last Name">
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-932d82c elementor-col-100 elementor-field-required">
                                                                    <input type="email" name="email"
                                                                        id="form-field-932d82c"
                                                                        class="elementor-field form-control elementor-size-md elementor-field-textual"
                                                                        placeholder="Email Address"
                                                                        title="* Email Address" required="required">
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-2eaf20d elementor-col-50 elementor-field-required">
                                                                    <label for="form-field-2eaf20d"
                                                                        class="elementor-field-label">Location</label>
                                                                    <div
                                                                        class="elementor-field elementor-select-wrapper">
                                                                        <select name="e_meta[city]"
                                                                            id="form-field-2eaf20d"
                                                                            class="elementor-field-textual form-control elementor-size-md"
                                                                            required="required" title="* Location">
                                                                            <option value>Select</option>
                                                                            <option data-ref="chicago"
                                                                                data-belong="illinois" value="chicago">
                                                                                Chicago</option>
                                                                            <option data-ref="chivilcoy"
                                                                                data-belong="provincia-de-buenos-aires"
                                                                                value="chivilcoy"> Chivilcoy</option>
                                                                            <option data-ref="los-angeles"
                                                                                data-belong="california"
                                                                                value="los-angeles"> Los Angeles
                                                                            </option>
                                                                            <option data-ref="miami"
                                                                                data-belong="florida" value="miami">
                                                                                Miami</option>
                                                                            <option data-ref="new-york"
                                                                                data-belong="new-york" value="new-york">
                                                                                New York</option>
                                                                            <option data-ref="uyo"
                                                                                data-belong="akwa-ibom" value="uyo"> Uyo
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-f0ee6fc elementor-col-50 elementor-field-required">
                                                                    <label for="form-field-f0ee6fc"
                                                                        class="elementor-field-label">&nbsp;</label><input
                                                                        type="text" name="e_meta[zipcode]"
                                                                        id="form-field-f0ee6fc"
                                                                        class="elementor-field form-control elementor-size-md elementor-field-textual"
                                                                        placeholder="Zip Code" title="* Zip Code"
                                                                        required="required">
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-3180222 elementor-col-100 elementor-field-required">
                                                                    <label for="form-field-3180222"
                                                                        class="elementor-field-label">Property</label>
                                                                    <div
                                                                        class="elementor-field elementor-select-wrapper">
                                                                        <select name="e_meta[property_type]"
                                                                            id="form-field-3180222"
                                                                            class="elementor-field-textual form-control elementor-size-md"
                                                                            required="required" title="* Property">
                                                                            <option value>Select type</option>
                                                                            <option value="commercial"> Commercial
                                                                            </option>
                                                                            <option value="office">- Office</option>
                                                                            <option value="shop">- Shop</option>
                                                                            <option value="residential"> Residential
                                                                            </option>
                                                                            <option value="apartment">- Apartment
                                                                            </option>
                                                                            <option value="condo">- Condo</option>
                                                                            <option value="multi-family-home">- Multi
                                                                                Family Home</option>
                                                                            <option value="single-family-home">- Single
                                                                                Family Home</option>
                                                                            <option value="studio">- Studio</option>
                                                                            <option value="villa">- Villa</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-c549d17 elementor-col-50 elementor-field-required">
                                                                    <input type="number" name="e_meta[price]"
                                                                        id="form-field-c549d17"
                                                                        class="elementor-field form-control elementor-size-md elementor-field-textual"
                                                                        placeholder="Max price" title="* Max price"
                                                                        required="required" min="0">
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-e08cbcb elementor-col-50 elementor-field-required">
                                                                    <input type="number" name="e_meta[area-size]"
                                                                        id="form-field-e08cbcb"
                                                                        class="elementor-field form-control elementor-size-md elementor-field-textual"
                                                                        placeholder="Minimum size (Sq Ft)"
                                                                        title="* Minimum size (Sq Ft)"
                                                                        required="required" min="0">
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-66cc0de elementor-col-50 elementor-field-required">
                                                                    <input type="number" name="e_meta[beds]"
                                                                        id="form-field-66cc0de"
                                                                        class="elementor-field form-control elementor-size-md elementor-field-textual"
                                                                        placeholder="Number of beds"
                                                                        title="* Number of beds" required="required"
                                                                        min="0">
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column form-group elementor-field-group-dea086f elementor-col-50 elementor-field-required">
                                                                    <input type="number" name="e_meta[baths]"
                                                                        id="form-field-dea086f"
                                                                        class="elementor-field form-control elementor-size-md elementor-field-textual"
                                                                        placeholder="Number of baths"
                                                                        title="* Number of baths" required="required"
                                                                        min="0">
                                                                </div>
                                                                <div
                                                                    class="houzez-gdpr-agreement elementor-field-group elementor-col-100">
                                                                    <label for="gdpr_agreement"
                                                                        class="elementor-field-label">GDPR
                                                                        Agreement</label>
                                                                    <div class="gdpr-agreement-subgroup">
                                                                        <span class="gdpr-field-option">
                                                                            <label class="gdpr-text"
                                                                                for="gdpr_agreement">
                                                                                <input required type="checkbox"
                                                                                    title="* GDPR Agreement"
                                                                                    name="gdpr_agreement"
                                                                                    id="gdpr_agreement"> I consent to
                                                                                having this website store my submitted
                                                                                information </label>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class>
                                                                </div>
                                                                <div
                                                                    class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
                                                                    <button type="submit"
                                                                        class="houzez-submit-button houzez-contact-form-js elementor-button elementor-size-md">
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
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-558c7c6 elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="558c7c6" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-de5d104 elementor-section-content-middle elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="de5d104" data-element_type="section"
                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7ffe80e"
                            data-id="7ffe80e" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2d5c6cb elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="2d5c6cb" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-69e7f47 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="69e7f47" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5b49b36"
                                            data-id="5b49b36" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-855b4c2 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="855b4c2" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Check Our Selection Of
                                                                Finest Properties</h2>
                                                            <p class="houzez_section_subtitle">Lorem ipsum dolor sit
                                                                amet, consectetur adipisicing elit</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-adba3bf animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_property-card-v3"
                                                    data-id="adba3bf" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_property-card-v3.default">
                                                    <div class="elementor-widget-container">
                                                        <div id="properties_module_section"
                                                            class="property-cards-module property-cards-module-v1 property-cards-module-3-cols">
                                                            <div id="module_properties"
                                                                class="listing-view grid-view card-deck grid-view-3-cols">
                                                                <?php while($row_explore=mysqli_fetch_assoc($res_explore)){ ?>
                                                                <div class="item-listing-wrap hz-item-gallery-js item-listing-wrap-v3 card"
                                                                    data-hz-id="hz-115"
                                                                    data-images="">
                                                                    <div
                                                                        class="item-wrap item-wrap-v3 item-wrap-no-frame h-100">
                                                                        <div class="listing-image-wrap">
                                                                            <div class="listing-thumb">
                                                                                <a target="_self"
                                                                                    href="#"
                                                                                    class="listing-featured-thumb hover-effect">
                                                                                                <img src="User/upload/<?php echo $row_explore['Image1']; ?>">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <h2 class="item-title">
                                                                            <a target="_self"
                                                                                href="#"><?php echo $row_explore['Property_title'];?></a>
                                                                        </h2>
                                                                        <ul
                                                                            class="item-amenities item-amenities-with-icons">
                                                                            <li class="h-beds"><i class="las la-bed"></i><span
                                                                                    class="item-amenities-text">Beds:</span>
                                                                                <span class="hz-figure"><?php echo $row_explore['Badrooms']; ?></span>
                                                                            </li>
                                                                            <li class="h-baths"><i class="las la-bath"></i></i><span
                                                                                    class="item-amenities-text">Baths:</span>
                                                                                <span class="hz-figure"><?php echo $row_explore['Bathroom']; ?></span>
                                                                            </li>
                                                                            <li class="h-cars"><i
                                                                                    class="las la-car mr-1"></i><span
                                                                                    class="item-amenities-text">Balcony:</span>
                                                                                <span class="hz-figure"><?php echo $row_explore['Balcony']; ?></span>
                                                                            </li>
                                                                        </ul>
                                                                        <ul class="item-price-wrap hide-on-list">
                                                                            <li class="item-price"><?php echo $row_explore['Area_name']; ?></li>
                                                                        </ul>
                                                                        <div class="labels-wrap labels-right">
                                                                            <a href="#"
                                                                                class="label-status label status-color-34">
                                                                                For <?php echo $row_explore['Status']; ?>
                                                                            </a>
                                                                        </div>
                                                                        <span
                                                                            class="label-featured label">Featured</span>
                                                                        <ul class="item-tools">
                                                                            <li class="item-tool item-preview">
                                                                                <span class="hz-show-lightbox-js"
                                                                                    data-listid="115"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="Preview">
                                                                                    <i
                                                                                        class="houzez-icon icon-expand-3"></i>
                                                                                </span>
                                                                            </li>
                                                                            <li class="item-tool item-favorite">
                                                                                <span
                                                                                    class="add-favorite-js item-tool-favorite"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="Favourite" data-listid="115">
                                                                                    <i class="las la-heart"></i>
                                                                                </span>
                                                                            </li>
                                                                            <li class="item-tool item-compare">
                                                                                <span
                                                                                    class="houzez_compare compare-115 item-tool-compare show-compare-panel"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="Add to Compare"
                                                                                    data-listing_id="115"
                                                                                    data-listing_image="#">
                                                                                    <i class="las la-plus-circle"></i>
                                                                                </span>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="preview_loader"></div>
                                                                    </div>
                                                                </div>
                                                               <?php } ?>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-86b9f70 elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="86b9f70" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-60c7733 elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="60c7733" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d80a803"
                            data-id="d80a803" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-fd86b68 elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="fd86b68" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-6fc3e29 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="6fc3e29" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-378d81b"
                                            data-id="378d81b" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-94b1e3e elementor-widget elementor-widget-houzez_elementor_space"
                                                    data-id="94b1e3e" data-element_type="widget"
                                                    data-widget_type="houzez_elementor_space.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez-spacer">
                                                            <div class="houzez-spacer-inner"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-efcc126 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="efcc126" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Explore Cities</h2>
                                                            <p class="houzez_section_subtitle">Lorem ipsum dolor sit
                                                                amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                                incididunt ut labore et dolore magna </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-b7add35"
                                            data-id="b7add35" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-3426791 animated-slow elementor-invisible elementor-widget elementor-widget-Houzez_elementor_grid_builder"
                                                    data-id="3426791" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                                                    data-widget_type="Houzez_elementor_grid_builder.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="grid-item houzez-lazy-bg houzez-lazyload grid-item-v3"
                                                            style="background-image: url(assets/city1.jpg)">
                                                            <a class="grid-item-link hover-effect-flat"
                                                                href="#">
                                                                <div class="grid-item-text-wrap">
                                                                    <div class="grid-item-subtitle">13 Properties</div>
                                                                    <div class="grid-item-title">Chicago</div>
                                                                    <div class="grid-item-text-link">More Details</div>
                                                                    <div class="grid-item-icon">
                                                                        <i
                                                                            class="las la-play"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-0968f41"
                                            data-id="0968f41" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-809173e animated-slow elementor-invisible elementor-widget elementor-widget-Houzez_elementor_grid_builder"
                                                    data-id="809173e" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:500}"
                                                    data-widget_type="Houzez_elementor_grid_builder.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="grid-item houzez-lazy-bg houzez-lazyload grid-item-v3"
                                                            style="background-image: url(assets/city2.jpg)">
                                                            <a class="grid-item-link hover-effect-flat"
                                                                href="#">
                                                                <div class="grid-item-text-wrap">
                                                                    <div class="grid-item-subtitle">21 Properties</div>
                                                                    <div class="grid-item-title">Miami</div>
                                                                    <div class="grid-item-text-link">More Details</div>
                                                                    <div class="grid-item-icon">
                                                                        <i
                                                                            class="las la-play"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-152e15a"
                                            data-id="152e15a" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-3ada0d2 animated-slow elementor-invisible elementor-widget elementor-widget-Houzez_elementor_grid_builder"
                                                    data-id="3ada0d2" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:1000}"
                                                    data-widget_type="Houzez_elementor_grid_builder.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="grid-item houzez-lazy-bg houzez-lazyload grid-item-v3"
                                                            style="background-image: url(assets/city3.jpg)">
                                                            <a class="grid-item-link hover-effect-flat"
                                                                href="#">
                                                                <div class="grid-item-text-wrap">
                                                                    <div class="grid-item-subtitle">10 Properties</div>
                                                                    <div class="grid-item-title">New York</div>
                                                                    <div class="grid-item-text-link">More Details</div>
                                                                    <div class="grid-item-icon">
                                                                        <i
                                                                            class="las la-play"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-10b3e49"
                                            data-id="10b3e49" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-63b3517 animated-slow elementor-invisible elementor-widget elementor-widget-Houzez_elementor_grid_builder"
                                                    data-id="63b3517" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_animation_delay&quot;:1500}"
                                                    data-widget_type="Houzez_elementor_grid_builder.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="grid-item houzez-lazy-bg houzez-lazyload grid-item-v3"
                                                            style="background-image: url(assets/city4.jpg)">
                                                            <a class="grid-item-link hover-effect-flat"
                                                                href="#">
                                                                <div class="grid-item-text-wrap">
                                                                    <div class="grid-item-subtitle">14 Properties</div>
                                                                    <div class="grid-item-title">Los Angeles</div>
                                                                    <div class="grid-item-text-link">More Details</div>
                                                                    <div class="grid-item-icon">
                                                                        <i
                                                                            class="las la-play"></i>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-9f73de1 elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="9f73de1" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-e23522a elementor-section-content-middle elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="e23522a" data-element_type="section"
                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-422dc65"
                            data-id="422dc65" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-9c7be67 elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="9c7be67" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-afe86ce elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="afe86ce" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-dedb31d"
                                            data-id="dedb31d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-efce673 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="efce673" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Meet Our Agents</h2>
                                                            <p class="houzez_section_subtitle">Lorem ipsum dolor sit
                                                                amet, consectetur adipisicing elit</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-596f295 elementor-widget elementor-widget-houzez_elementor_agents"
                                                    data-id="596f295" data-element_type="widget"
                                                    data-widget_type="houzez_elementor_agents.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="agent-module module-3cols clearfix">
                                                            <div class="agent-item">
                                                                <div class="agent-thumb">
                                                                    <a
                                                                        href="#">
                                                                        <img width="150"
                                                                            height="150"
                                                                            src="assets/agent1.jpg"
                                                                            class="img-fluid rounded-circle"
                                                                            sizes="(max-width: 150px) 100vw, 150px" />
                                                                    </a>
                                                                </div>
                                                                <div class="agent-info">
                                                                    <div class="agent-name">
                                                                        <a
                                                                            href="#"><strong>Vincent
                                                                                Fuller</strong></a>
                                                                    </div>
                                                                    <div class="agent-company">
                                                                        Real Estate Agent , Country House Real Estate
                                                                    </div>
                                                                </div>
                                                                <div class="agent-body">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Phasellus porta justo eget risus
                                                                    consectetur,... </div>
                                                                <div class="agent-link">
                                                                    <a
                                                                        href="#">View
                                                                        Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="agent-item">
                                                                <div class="agent-thumb">
                                                                    <a
                                                                        href="#">
                                                                        <img width="150"
                                                                            height="150"
                                                                            src="assets/agent2.jpg"
                                                                            class="img-fluid rounded-circle"
                                                                            sizes="(max-width: 150px) 100vw, 150px" />
                                                                    </a>
                                                                </div>
                                                                <div class="agent-info">
                                                                    <div class="agent-name">
                                                                        <a
                                                                            href="#"><strong>Brittany
                                                                                Watkins</strong></a>
                                                                    </div>
                                                                    <div class="agent-company">
                                                                        Company Agent , All American Real Estate
                                                                    </div>
                                                                </div>
                                                                <div class="agent-body">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Phasellus porta justo eget risus
                                                                    consectetur,... </div>
                                                                <div class="agent-link">
                                                                    <a
                                                                        href="#">View
                                                                        Profile</a>
                                                                </div>
                                                            </div>
                                                            <div class="agent-item">
                                                                <div class="agent-thumb">
                                                                    <a
                                                                        href="#">
                                                                        <img width="150"
                                                                            height="150"
                                                                            src="assets/agent3.jpg"
                                                                            class="img-fluid rounded-circle"
                                                                            sizes="(max-width: 150px) 100vw, 150px" />
                                                                    </a>
                                                                </div>
                                                                <div class="agent-info">
                                                                    <div class="agent-name">
                                                                        <a
                                                                            href="#"><strong>Michelle
                                                                                Ramirez</strong></a>
                                                                    </div>
                                                                    <div class="agent-company">
                                                                        Company Agent , Modern House Real Estate
                                                                    </div>
                                                                </div>
                                                                <div class="agent-body">
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit. Phasellus porta justo eget risus
                                                                    consectetur,... </div>
                                                                <div class="agent-link">
                                                                    <a
                                                                        href="#">View
                                                                        Profile</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="elementor-element elementor-element-fb6e3ec elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="fb6e3ec" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-aaef360 elementor-section-content-middle elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="aaef360" data-element_type="section"
                    data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-wide">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-61455be"
                            data-id="61455be" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-0bdf8d8 elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="0bdf8d8" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-a96c118 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="a96c118" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-extended">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-17e3e56"
                                            data-id="17e3e56" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-88c2e66 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_section_title"
                                                    data-id="88c2e66" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_section_title.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="houzez_section_title_wrap section-title-module">
                                                            <h2 class="houzez_section_title">Testimonials</h2>
                                                            <p class="houzez_section_subtitle">Lorem ipsum dolor sit
                                                                amet, consectetur adipisicing elit</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-d8cb588 animated-slow elementor-invisible elementor-widget elementor-widget-houzez_elementor_testimonials_v2"
                                                    data-id="d8cb588" data-element_type="widget"
                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
                                                    data-widget_type="houzez_elementor_testimonials_v2.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="testimonials-module testimonials-module-v2">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="testimonial-item testimonial-item-v2">
                                                                        <div class="testimonial-icon">
                                                                            <i class="las la-quote-left"></i>
                                                                        </div>
                                                                        <div class="testimonial-body">
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna aliqua.
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="testimonial-thumb">
                                                                                <img 
                                                                                    width="70" height="70"
                                                                                    src="assets/client1.jpg"
                                                                                    class="img-fluid rounded-circle" />
                                                                            </div>
                                                                            <div class="testimonial-info">
                                                                                by <strong>Roy Bennett</strong><br>
                                                                                <em>
                                                                                    Manager, Company Inc. </em>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="testimonial-item testimonial-item-v2">
                                                                        <div class="testimonial-icon">
                                                                            <i class="las la-quote-left"></i>
                                                                        </div>
                                                                        <div class="testimonial-body">
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna aliqua.
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="testimonial-thumb">
                                                                            <img 
                                                                                    width="70" height="70"
                                                                                    src="assets/client2.jpg"
                                                                                    class="img-fluid rounded-circle" />
                                                                            </div>
                                                                            <div class="testimonial-info">
                                                                                by <strong>Kenya Soval</strong><br>
                                                                                <em>
                                                                                    Realtor, Company Inc. </em>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-12">
                                                                    <div class="testimonial-item testimonial-item-v2">
                                                                        <div class="testimonial-icon">
                                                                            <i class="las la-quote-left"></i>
                                                                        </div>
                                                                        <div class="testimonial-body">
                                                                            Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit, sed do eiusmod tempor
                                                                            incididunt ut labore et dolore magna aliqua.
                                                                        </div>
                                                                        <div class="d-flex align-items-center">
                                                                            <div class="testimonial-thumb">
                                                                            <img 
                                                                                    width="70" height="70"
                                                                                    src="assets/client3.jpg"
                                                                                    class="img-fluid rounded-circle" />
                                                                            </div>
                                                                            <div class="testimonial-info">
                                                                                by <strong>Kathleen
                                                                                    Peterson</strong><br>
                                                                                <em>
                                                                                    Manager, Company Inc. </em>
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
                                <div class="elementor-element elementor-element-7a8fd05 elementor-widget elementor-widget-houzez_elementor_space"
                                    data-id="7a8fd05" data-element_type="widget"
                                    data-widget_type="houzez_elementor_space.default">
                                    <div class="elementor-widget-container">
                                        <div class="houzez-spacer">
                                            <div class="houzez-spacer-inner"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-c1d4bed elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="c1d4bed" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-710af44"
                            data-id="710af44" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-2323b52 elementor-widget elementor-widget-image"
                                    data-id="2323b52" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                    <img src="assets/company1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-b5e5cbc"
                            data-id="b5e5cbc" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-014fe12 elementor-widget elementor-widget-image"
                                    data-id="014fe12" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img src="assets/company2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-de2dd6d"
                            data-id="de2dd6d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6fe48f6 elementor-widget elementor-widget-image"
                                    data-id="6fe48f6" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img src="assets/company3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-33a4f30"
                            data-id="33a4f30" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-c347fb3 elementor-widget elementor-widget-image"
                                    data-id="c347fb3" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                    <img src="assets/company4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-952f4ac"
                            data-id="952f4ac" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-f937195 elementor-widget elementor-widget-image"
                                    data-id="f937195" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <img src="assets/company5.jpg" alt="">
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
                                <a class="modal-toggle-1 nav-link" data-toggle="tab" href="#"
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
                                    value="c20799c110" /><input type="hidden" name="_wp_http_referer"
                                    value="/?_gl=1%2Aipnx0u%2A_gcl_au%2AODUxNDU0MjQ0LjE3MjEzMzg4MDk.%2A_ga%2AMTUzMDQyOTc1NS4xNzIxMzM4ODEw%2A_ga_RVPKT97G4N%2AMTcyMTc3ODAwNy4xMy4xLjE3MjE3NzkwOTUuMC4wLjA." />
                                <input type="hidden" name="action" id="login_action" value="houzez_login">
                                <input type="hidden" name="redirect_to" value="">
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
                            value="3c4267a688" /><input type="hidden" name="_wp_http_referer"
                            value="/?_gl=1%2Aipnx0u%2A_gcl_au%2AODUxNDU0MjQ0LjE3MjEzMzg4MDk.%2A_ga%2AMTUzMDQyOTc1NS4xNzIxMzM4ODEw%2A_ga_RVPKT97G4N%2AMTcyMTc3ODAwNy4xMy4xLjE3MjE3NzkwOTUuMC4wLjA." />
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
        var houzez_vars = { "admin_url": "https:\/\/demo01.houzez.co\/wp-admin\/", "houzez_rtl": "no", "user_id": "0", "redirect_type": "diff_page", "login_redirect": "https:\/\/demo01.houzez.co\/my-profile\/", "property_gallery_popup_type": "houzez", "wp_is_mobile": "", "default_lat": "25.686540", "default_long": "-80.431345", "houzez_is_splash": "", "prop_detail_nav": "yes", "add_to_favorite_login_required": "0", "disable_property_gallery": "1", "grid_gallery_behaviour": "houzez-show-gallery", "is_singular_property": "", "search_position": "under_nav", "login_loading": "Sending user info, please wait...", "not_found": "We didn't find any results", "houzez_map_system": "google", "for_rent": "for-rent", "for_rent_price_slider": "for-rent", "search_min_price_range": "200", "search_max_price_range": "2500000", "search_min_price_range_for_rent": "50", "search_max_price_range_for_rent": "25000", "get_min_price": "0", "get_max_price": "0", "currency_position": "before", "currency_symbol": "$", "decimals": "0", "decimal_point_separator": ".", "thousands_separator": ",", "is_halfmap": "", "houzez_date_language": "", "houzez_default_radius": "50", "houzez_reCaptcha": "", "geo_country_limit": "0", "geocomplete_country": "", "is_edit_property": "", "processing_text": "Processing, Please wait...", "halfmap_layout": "", "prev_text": "Prev", "next_text": "Next", "keyword_search_field": "prop_title", "keyword_autocomplete": "1", "autosearch_text": "Searching...", "paypal_connecting": "Connecting to paypal, Please wait... ", "transparent_logo": "1", "is_transparent": "1", "is_top_header": "0", "simple_logo": "https:\/\/demo01.houzez.co\/wp-content\/uploads\/2020\/02\/logo-houzez-color.png", "retina_logo": "https:\/\/demo01.houzez.co\/wp-content\/uploads\/2016\/03\/logo-houzez-color@2x.png", "mobile_logo": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white.png", "retina_logo_mobile": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png", "retina_logo_mobile_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png", "custom_logo_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white.png", "retina_logo_splash": "https:\/\/demo01.houzez.co\/wp-content\/themes\/houzez\/img\/logo-houzez-white@2x.png", "monthly_payment": "Monthly Payment", "weekly_payment": "Weekly Payment", "bi_weekly_payment": "Bi-Weekly Payment", "compare_url": "https:\/\/demo01.houzez.co\/compare-properties\/", "favorite_url": "https:\/\/demo01.houzez.co\/favorite-properties\/", "template_thankyou": "https:\/\/demo01.houzez.co\/thank-you\/", "compare_page_not_found": "Please create page using compare properties template", "compare_limit": "Maximum item compare are 4", "compare_add_icon": "", "compare_remove_icon": "", "add_compare_text": "Add to Compare", "remove_compare_text": "Remove from Compare", "is_mapbox": "google", "api_mapbox": "", "is_marker_cluster": "1", "g_recaptha_version": "v3", "s_country": "", "s_state": "", "s_city": "", "s_areas": "", "woo_checkout_url": "", "agent_redirection": "" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://demo01.houzez.co/wp-content/themes/houzez/js/custom.min.js"
        id="houzez-custom-js"></script>
    <script type="text/javascript" id="houzez_prop_caoursel-js-extra">
        /* <![CDATA[ */
        var houzez_prop_caoursel_K4H2X = { "slide_auto": "true", "auto_speed": "3000", "navigation": "true", "slide_dots": "true", "slide_infinite": "true", "slides_to_show": "3", "slides_to_scroll": "1" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://demo01.houzez.co/wp-content/themes/houzez/js/property-carousels.min.js"
        id="houzez_prop_caoursel-js"></script>
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
        var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.22.3", "is_static": false, "experimentalFeatures": { "e_optimized_assets_loading": true, "additional_custom_breakpoints": true, "container_grid": true, "e_swiper_latest": true, "e_onboarding": true, "home_screen": true, "ai-layout": true, "landing-pages": true }, "urls": { "assets": "https:\/\/demo01.houzez.co\/wp-content\/plugins\/elementor\/assets\/" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 10, "title": "Houzez%20%E2%80%93%20Highly%20Customizable%20Real%20Estate%20WordPress%20Theme", "excerpt": "", "featuredImage": false } };
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://demo01.houzez.co/wp-content/plugins/elementor/assets/js/frontend.min.js"
        id="elementor-frontend-js"></script>
</body>

</html>