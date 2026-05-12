@extends('layouts.app') 

@section('content')
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <span class="text-primary">
                <img src="data:image/png;base64,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" alt="bitcoin-sccepted">
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2" style="font-size: 1.1rem;">Finances-Tracker</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
            </a>
          </div>

          <div class="menu-divider mt-0"></div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
              <!--Dashboard -->
             <li class="menu-item active open">

              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon fa-solid fa-house "></i>
              <div class="text-truncate" data-i18n="Dashboards">Dashboard</div>
              </a>
            </li>
            <!-- Dashboards -->
             <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <!-- <i class="fa-light fa-wallet"></i> -->
                 <i class="menu-icon fa-solid fa-wallet"></i>
              <div class="text-truncate" data-i18n="Wallet">Wallet</div>
              </a>
            </li>

            <!-- Income -->
              <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <!-- <i class="fa-sharp fa-solid fa-box-dollar">
                  
                </i> -->
                 <i class="menu-icon fa-solid fa-money-bill"></i>

              <div class="text-truncate" data-i18n="Income">Income</div>
              </a>
            </li>

            <!-- Expenses -->


             <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
               <i class="menu-icon fa-solid fa-receipt"></i>
                <div class="text-truncate" data-i18n="Dashboards">Expenses</div>
              </a>
            </li>

             <!-- Savings -->


             <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                 <i class="menu-icon fa-solid fa-piggy-bank"></i>

              <div class="text-truncate" data-i18n="Dashboards">Savings</div>
              </a>
            </li>

            <!-- categories-->

             <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-layer-group"></i>
                <div class="text-truncate" data-i18n="Layouts">Categories</div>
              </a>

               <ul class="menu-sub">
                <li class="menu-item">
                  <a href="layouts-without-menu.html" class="menu-link">
                    <div class="text-truncate" data-i18n="Without menu">Profit</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="layouts-without-navbar.html" class="menu-link">
                    <div class="text-truncate" data-i18n="Without navbar">Loss</div>
                  </a>
                </li>
              </ul>
                </li>

      
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                <i class="icon-base bx bx-menu icon-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center me-auto">
                <div class="nav-item d-flex align-items-center">
                  <span class="w-px-22 h-px-22"><i class="icon-base bx bx-search icon-md"></i></span>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-4">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-bootstrap-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">John Doe</h6>
                            <small class="text-body-secondary">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="icon-base bx bx-user icon-md me-3"></i><span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="icon-base bx bx-cog icon-md me-3"></i><span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 icon-base bx bx-credit-card icon-md me-3"></i
                          ><span class="flex-grow-1 align-middle">Billing Plan</span>
                          <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="icon-base bx bx-power-off icon-md me-3"></i><span>Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-xxl-8 mb-6 order-0">
                  <div class="card">
                    <div class="d-flex align-items-start row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary mb-3">Congratulations John! 🎉</h5>
                          <p class="mb-6">
                            You have done 72% more sales today.<br />Check your new badge in your profile.
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-lg-12 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body">
                          
                          <p class="mb-1">Income</p>
                          <h4 class="card-title mb-3">$12,628</h4>
                          <small class="text-success fw-medium"
                            ><i class="icon-base bx bx-up-arrow-alt"></i> +72.80%</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body">
                         
                          <p class="mb-1">Savings</p>
                          <h4 class="card-title mb-3">$4,679</h4>
                          <small class="text-success fw-medium"
                            ><i class="icon-base bx bx-up-arrow-alt"></i> +28.42%</small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <div class="col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-6 total-revenue">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-lg-8">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Total Revenue</h5>
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="totalRevenue"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="icon-base bx bx-dots-vertical-rounded icon-lg text-body-secondary"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalRevenue">
                              <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                              <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                          </div>
                        </div>
                        <div id="totalRevenueChart" class="px-3"></div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card-body px-xl-9 py-12 d-flex align-items-center flex-column">
                          <div class="text-center mb-6">
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-primary">
                                <script>
                                  document.write(new Date().getFullYear() - 1);
                                </script>
                              </button>
                              <button
                                type="button"
                                class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">2021</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">2020</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">2019</a></li>
                              </ul>
                            </div>
                          </div>

                          <div id="growthChart"></div>
                          <div class="text-center fw-medium my-6">62% Company Growth</div>

                          <div class="d-flex gap-11 justify-content-between">
                            <div class="d-flex">
                              <div class="avatar me-2">
                                <span class="avatar-initial rounded-2 bg-label-primary"
                                  ><i class="icon-base bx bx-dollar icon-lg text-primary"></i
                                ></span>
                              </div>
                              <div class="d-flex flex-column">
                                <small>
                                  <script>
                                    document.write(new Date().getFullYear() - 1);
                                  </script>
                                </small>
                                <h6 class="mb-0">$32.5k</h6>
                              </div>
                            </div>
                            <div class="d-flex">
                              <div class="avatar me-2">
                                <span class="avatar-initial rounded-2 bg-label-info"
                                  ><i class="icon-base bx bx-wallet icon-lg text-info"></i
                                ></span>
                              </div>
                              <div class="d-flex flex-column">
                                <small>
                                  <script>
                                    document.write(new Date().getFullYear() - 2);
                                  </script>
                                </small>
                                <h6 class="mb-0">$41.2k</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <div class="col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2 profile-report">
                  <div class="row">
                   
                    <div class="col-12 mb-6 profile-report">
                      <div class="card h-100">
                        <div class="card-body">
                          <div
                            class="d-flex justify-content-between align-items-center flex-sm-row flex-column gap-10 flex-wrap">
                            <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                              <div class="card-title mb-6">
                                <h5 class="text-nowrap mb-1">Profile Report</h5>
                                <span class="badge bg-label-warning">YEAR 2022</span>
                              </div>
                              <div class="mt-sm-auto">
                                <span class="text-success text-nowrap fw-medium"
                                  ><i class="icon-base bx bx-up-arrow-alt"></i> 68.2%</span
                                >
                                <h4 class="mb-0">$84,686k</h4>
                              </div>
                            </div>
                            <div id="profileReportChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Order Statistics -->
               
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
               
                <!--/ Expense Overview -->

                <!-- Transactions -->
             
                <!--/ Transactions -->
              </div>
            </div>
          

          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
    </div>
@endsection