<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme px-3"
  id="layout-navbar">

  <!-- Left toggle (hamburger) -->
  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
      <i class="bx bx-menu bx-sm"></i>
    </a>
  </div>

  <!-- Right section -->
  <div class="navbar-nav-right d-flex align-items-center flex-grow-1" id="navbar-collapse">

    <!-- Search -->
    <div class="flex-grow-1">
      <div class="input-group shadow-sm rounded-pill">
        <span class="input-group-text bg-white border-0">
          <i class="bx bx-search fs-5 text-muted"></i>
        </span>
        <input type="text" 
               class="form-control border-0 shadow-none bg-white" 
               placeholder="Search..." 
               aria-label="Search" />
      </div>
    </div>
    <!-- /Search -->

    <!-- User Menu -->
    <ul class="navbar-nav flex-row align-items-center ms-3">
      <li class="nav-item navbar-dropdown dropdown-user dropdown">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar avatar-online">
            <img src="assets/img/avatars/6.png" alt="User" class="rounded-circle" style="width:45px; height:45px; object-fit:cover;" />
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <a class="dropdown-item" href="#">
              <div class="d-flex align-items-center">
                <div class="avatar me-3">
                  <img src="assets/img/avatars/6.png" alt="Admin" class="rounded-circle" style="width:40px; height:40px; object-fit:cover;" />
                </div>
                <div>
                  <span class="fw-semibold d-block">Admin</span>
                  <small class="text-muted">Administrator</small>
                </div>
              </div>
            </a>
          </li>
          <li><div class="dropdown-divider"></div></li>
          <li>
            <a class="dropdown-item" href="../common/logout.php">
              <i class="bx bx-power-off me-2"></i>
              <span class="align-middle">Log Out</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
