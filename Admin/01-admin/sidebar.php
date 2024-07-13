<div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="assets/img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
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
                <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Admin</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="add_admin.php">
                        <span class="sub-item">Add Admin</span>
                      </a>
                    </li>
                    <li>
                      <a href="../demo1/index.html">
                        <span class="sub-item">New Admin</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>     
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#.">
                  <i class="fas fa-layer-group"></i>
                  <p>Property Type</p>
                  <span class="caret"></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_features.php">
                  <i class="fas fa-th-list"></i>
                  <p>Features</p>
                </a>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-pen-square"></i>
                  <p>Area</p>
                  <span class="caret"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>