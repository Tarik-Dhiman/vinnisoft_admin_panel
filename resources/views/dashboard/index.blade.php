@extends('layouts.main')

@section('content')


<div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
        <div class="row align-items-center">
          <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Dashboard</h3>
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Dashboard
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-md-6 col-4 align-self-center">
            <div class="text-end upgrade-btn">
              <a href="https://www.wrappixel.com/templates/monsteradmin/?ref=33/"
                class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Upgrade to Pro</a>
            </div>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- Column -->
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Daily Sales</h4>
                <div class="text-end">
                  <h2 class="font-light mb-0">
                    <i class="mdi mdi-arrow-up fs-2 text-success"></i> $120
                  </h2>
                  <span class="text-muted">Todays Income</span>
                </div>
                <span class="text-success">80%</span>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px"
                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Weekly Sales</h4>
                <div class="text-end">
                  <h2 class="font-light mb-0">
                    <i class="mdi mdi-arrow-up fs-2 text-info"></i> $5,000
                  </h2>
                  <span class="text-muted">Todays Income</span>
                </div>
                <span class="text-info">30%</span>
                <div class="progress">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px"
                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- column -->
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Revenue Statistics</h4>
                <div class="flot-chart">
                  <div class="flot-chart-content" id="flot-line-chart" style="padding: 0px; position: relative">
                    <canvas class="flot-base w-100" height="400"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- column -->
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="d-md-flex">
                  <h4 class="
                        card-title
                        col-md-10
                        mb-md-0 mb-3
                        align-self-center
                      ">
                    Projects of the Month
                  </h4>
                  <div class="col-md-2 ms-auto">
                    <select class="form-select shadow-none col-md-2 ml-auto">
                      <option selected>January</option>
                      <option value="1">February</option>
                      <option value="2">March</option>
                      <option value="3">April</option>
                    </select>
                  </div>
                </div>
                <div class="table-responsive mt-5">
                  <table class="table stylish-table no-wrap">
                    <thead>
                      <tr>
                        <th class="border-top-0" colspan="2">Assigned</th>
                        <th class="border-top-0">Name</th>
                        <th class="border-top-0">Budget</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="width: 50px">
                          <span class="round">S</span>
                        </td>
                        <td class="align-middle">
                          <h6>Sunil Joshi</h6>
                          <small class="text-muted">Web Designer</small>
                        </td>
                        <td class="align-middle">Elite Admin</td>
                        <td class="align-middle">$3.9K</td>
                      </tr>
                      <tr class="active">
                        <td>
                          <span class="round"><img src="../assets/images/2.jpg" alt="user" width="50" /></span>
                        </td>
                        <td class="align-middle">
                          <h6>Andrew</h6>
                          <small class="text-muted">Project Manager</small>
                        </td>
                        <td class="align-middle">Real Homes</td>
                        <td class="align-middle">$23.9K</td>
                      </tr>
                      <tr>
                        <td><span class="round round-success">B</span></td>
                        <td class="align-middle">
                          <h6>Bhavesh patel</h6>
                          <small class="text-muted">Developer</small>
                        </td>
                        <td class="align-middle">MedicalPro Theme</td>
                        <td class="align-middle">$12.9K</td>
                      </tr>
                      <tr>
                        <td><span class="round round-primary">N</span></td>
                        <td class="align-middle">
                          <h6>Nirav Joshi</h6>
                          <small class="text-muted">Frontend Eng</small>
                        </td>
                        <td class="align-middle">Elite Admin</td>
                        <td class="align-middle">$10.9K</td>
                      </tr>
                      <tr>
                        <td><span class="round round-warning">M</span></td>
                        <td class="align-middle">
                          <h6>Micheal Doe</h6>
                          <small class="text-muted">Content Writer</small>
                        </td>
                        <td class="align-middle">Helping Hands</td>
                        <td class="align-middle">$12.9K</td>
                      </tr>
                      <tr>
                        <td><span class="round round-danger">N</span></td>
                        <td class="align-middle">
                          <h6>Johnathan</h6>
                          <small class="text-muted">Graphic</small>
                        </td>
                        <td class="align-middle">Digital Agency</td>
                        <td class="align-middle">$2.6K</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent blogss -->
        <!-- ============================================================== -->
        <div class="row justify-content-center">
          <!-- Column -->
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img class="card-img-top img-responsive" src="../assets/images/img1.jpg" alt="Card" />
              <div class="card-body">
                <ul class="list-inline d-flex align-items-center">
                  <li class="ps-0">20 May 2024</li>
                  <li class="ms-auto">
                    <a href="javascript:void(0)" class="link">3 Comment</a>
                  </li>
                </ul>
                <h3 class="font-normal">
                  Featured Hydroflora Pots Garden &amp; Outdoors
                </h3>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img class="card-img-top img-responsive" src="../assets/images/img2.jpg" alt="Card" />
              <div class="card-body">
                <ul class="list-inline d-flex align-items-center">
                  <li class="ps-0">20 May 2024</li>
                  <li class="ms-auto">
                    <a href="javascript:void(0)" class="link">3 Comment</a>
                  </li>
                </ul>
                <h3 class="font-normal">
                  Featured Hydroflora Pots Garden &amp; Outdoors
                </h3>
              </div>
            </div>
          </div>
          <!-- Column -->
          <!-- Column -->
          <div class="col-lg-4 col-md-6">
            <div class="card">
            <img class="card-img-top img-responsive" src="{{ asset('assets/images/img4.jpg') }}" alt="Card" />
            <div class="card-body">
                <ul class="list-inline d-flex align-items-center">
                  <li class="ps-0">20 May 2024</li>
                  <li class="ms-auto">
                    <a href="javascript:void(0)" class="link">3 Comment</a>
                  </li>
                </ul>
                <h3 class="font-normal">
                  Featured Hydroflora Pots Garden &amp; Outdoors
                </h3>
              </div>
            </div>
          </div>
          <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- Recent blogss -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
     
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->


</body>
@endsection
