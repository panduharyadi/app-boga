<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
          <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.home') }}" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.menu') }}" aria-expanded="false">
              <span>
                <i class="ti ti-tools-kitchen"></i>
              </span>
              <span class="hide-menu">Menu</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.category') }}" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Category</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.promo') }}" aria-expanded="false">
              <span>
                <i class="ti ti-tags"></i>
              </span>
              <span class="hide-menu">Promo</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.transaksi') }}" aria-expanded="false">
              <span>
                <i class="ti ti-brand-cashapp"></i>
              </span>
              <span class="hide-menu">Transaksi</span>
            </a>
          </li>
          <li class="sidebar-item" hidden>
            <a class="sidebar-link" href="{{ route('admin.alamat') }}" aria-expanded="false">
              <span>
                <i class="ti ti-address-book"></i>
              </span>
              <span class="hide-menu">Alamat</span>
            </a>
          </li>
        </ul>
        <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
          <div class="d-flex">
            <div class="unlimited-access-title me-3">
              <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
              <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
            </div>
            <div class="unlimited-access-img">
              <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>