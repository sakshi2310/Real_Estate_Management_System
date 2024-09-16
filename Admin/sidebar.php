<div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
          <a href="Dashborad.php" class="logo">
              <img
                src="assets/img/logo-dash.png"
                alt="navbar brand"
                class="navbar-brand"
                height="55"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div> 
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
               <li class="nav-item active">
                <a href="dashborad.php">
                 <i class="fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  data-bs-toggle="collapse"
                  href="#admin"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-user-tie"></i>
                  <p>Admin</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="admin">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="add_admin.php">
                        <span class="sub-item">Add Admin</span>
                      </a>
                    </li>
                    <li>
                      <a href="View_admin.php">
                        <span class="sub-item">View Admin</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>  
            <li class="nav-item">
                <a
                  data-bs-toggle="collapse"
                  href="#Property_type"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Property Type</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Property_type">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="Add_type.php">
                        <span class="sub-item">Add Property type</span>
                      </a>
                    </li>
                    <li>
                      <a href="View_type.php">
                        <span class="sub-item">View Property type</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>     
          
               <li class="nav-item">
                <a
                  data-bs-toggle="collapse"
                  href="#Feature"
                  class="collapsed"
                  aria-expanded="false">
                  <i class="fas fa-tasks"></i>
                  <p>Feature</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Feature">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="add_features.php">
                        <span class="sub-item">Add Feature</span>
                      </a>
                    </li>
                    <li>
                      <a href="View_feature.php">
                        <span class="sub-item">View Feature</span>
                      </a>
                    </li>
                  </ul>
                 </div>
              </li> 
               <li class="nav-item">
                <a
                  data-bs-toggle="collapse"
                  href="#Area"
                  class="collapsed"
                  aria-expanded="false">
                  <i class="fas fa-map-marked-alt"></i>
                  <p>Area</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Area">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="Add_area.php">
                        <span class="sub-item">Add Area</span>
                      </a>
                    </li>
                    <li>
                      <a href="View_area.php">
                        <span class="sub-item">View Area</span>
                      </a>
                    </li>
                  </ul>
                 </div>
              </li>
                 
              <li class="nav-item">
                <a
                  data-bs-toggle="collapse"
                  href="#Property"
                  class="collapsed"
                  aria-expanded="false">
                  <i class="fas fa-building"></i>
                  <p>View all Property</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Property">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="View_property.php">
                        <span class="sub-item">View All Property</span>
                      </a>
                    </li>
                    <li>
                      <a href="View_Approved_property.php">
                        <span class="sub-item">Approved Property</span>
                      </a>
                    </li>
                     <li>
                      <a href="View_Decline_property.php">
                        <span class="sub-item">Decline Property</span>
                      </a>
                    </li>
                  </ul>
                 </div>
              </li>
                 
              <li class="nav-item">
                <a href="View_reviews.php">
                  <i class="fas fa-star-half-alt"></i>
                  <p>Reviews</p>
                </a>
              </li>
                 
              <li class="nav-item">
                <a
                  data-bs-toggle="collapse"
                  href="#Page"
                  class="collapsed"
                  aria-expanded="false">
                  <i class="fas fa-file-alt"></i>
                  <p>Pages</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Page">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="View_property.php">
                        <span class="sub-item">About Us</span>
                      </a>
                    </li>
                    <li>
                      <a href="View_contact_us.php">
                        <span class="sub-item">Contact Us</span>
                      </a>
                    </li>
                   
                  </ul>
                 </div>
              </li>
              <li class="nav-item">
                <a
                  data-bs-toggle="collapse"
                  href="#Image_Gallery"
                  class="collapsed"
                  aria-expanded="false">
                  <i class="fas fa-file-alt"></i>
                  <p>Image Gallery</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Image_Gallery">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="Add_Images.php">
                        <span class="sub-item">Add Images</span>
                      </a>
                    </li>
                    <li>
                      <a href="View_image_gallery.php">
                        <span class="sub-item">View / Select Images</span>
                      </a>
                    </li>
                   
                  </ul>
                 </div>
              </li>
              <li class="nav-item">
                <a
                  data-bs-toggle="collapse"
                  href="#Service"
                  class="collapsed"
                  aria-expanded="false">
                  <i class="fas fa-file-alt"></i>
                  <p>website Services</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="Service">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="Add_webstie_services.php">
                        <span class="sub-item">Add Services</span>
                      </a>
                    </li>
                    <li>
                      <a href="View_website_services.php">
                        <span class="sub-item">View Services</span>
                      </a>
                    </li>
                   
                  </ul>
                 </div>
                 
               <li class="nav-item">
                <a href="View_profile.php">
                  <i class="fas fa-user-circle"></i>
                  <p>Profile</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="logout.php">
                  <i class="fas fa-sign-out-alt"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>