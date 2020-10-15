<!DOCTYPE html>
<!--
   Template Name: Deepor - Responsive Bootstrap 4 Admin Dashboard Template
   Author: Hencework

   License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
   -->
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <title>ERP System | Dashboard</title>
      <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
      <!-- Favicon -->
      <link rel="shortcut icon" href="favicon.ico">
      <link rel="icon" href="favicon.ico" type="image/x-icon">
      <!-- vector map CSS -->
      <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
      <!-- Toggles CSS -->
      <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
      <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
      <!-- Toastr CSS -->
      <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
      <!-- Custom CSS -->
      <link href="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/css/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <!-- HK Wrapper -->
      <div class="hk-wrapper hk-vertical-nav">
         <!-- Top Navbar -->
         <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a class="navbar-brand" href="/dashboard.php">
            <img class="brand-img d-inline-block mr-5" src="dist/img/logo.png" alt="brand" />Deepor
            </a>
            <ul class="navbar-nav hk-navbar-content">
               <li class="nav-item dropdown dropdown-authentication">
                  <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <div class="media">
                        <div class="media-img-wrap">
                           <div class="avatar">
                              <img src="dist/img/avatar10.jpg" alt="user" class="avatar-img rounded-circle">
                           </div>
                           <span class="badge badge-success badge-indicator"></span>
                        </div>
                     </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                     <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                  </div>
               </li>
            </ul>
         </nav>
         <!-- /Top Navbar -->
    		<?php require_once $_SERVER['DOCUMENT_ROOT'].'/left_nav.php'?>
         <!-- Setting Panel -->
         <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
               <div class="settings-panel-wrap">
                  <div class="settings-panel-head mb-15">
                     <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
                  </div>
                  <h6 class="mb-5">Layout</h6>
                  <p class="font-14">Choose your preferred layout</p>
                  <div class="layout-img-wrap">
                     <div class="row">
                        <a href="javascript:void(0);" class="col-6 mb-30 active">
                        <img class="rounded opacity-70" src="dist/img/layout1.png" alt="layout">
                        <i class="zmdi zmdi-check"></i>
                        </a>
                        <a href="dashboard2.html" class="col-6 mb-30">
                        <img class="rounded opacity-70" src="dist/img/layout2.png" alt="layout">
                        <i class="zmdi zmdi-check"></i>
                        </a>
                        <a href="dashboard3.html" class="col-6">
                        <img class="rounded opacity-70" src="dist/img/layout3.png" alt="layout">
                        <i class="zmdi zmdi-check"></i>
                        </a>
                     </div>
                  </div>
                  <hr>
                  <h6 class="mb-5">Navigation</h6>
                  <p class="font-14">Menu comes in two modes: dark & light</p>
                  <div class="button-list hk-nav-select mb-10">
                     <button type="button" id="nav_light_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                     <button type="button" id="nav_dark_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                  </div>
                  <hr>
                  <h6 class="mb-5">Top Nav</h6>
                  <p class="font-14">Choose your liked color mode</p>
                  <div class="button-list hk-navbar-select mb-10">
                     <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                     <button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg"><span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                  </div>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                     <h6>Scrollable Header</h6>
                     <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                  </div>
                  <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
               </div>
            </div>
            <img class="d-none" src="dist/img/logo-light.png" alt="brand" />
            <img class="d-none" src="dist/img/logo-dark.png" alt="brand" />
         </div>
         <!-- /Setting Panel -->
         <!-- Main Content -->
         <div class="hk-pg-wrapper">
            <!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
               <!-- Row -->
               <div class="row">
                  <div class="col-xl-12">
                     <div class="hk-row">
                        <div class="col-lg-3 col-md-6">
                           <div class="card card-sm">
                              <div class="card-body">
                                 <div class="d-flex justify-content-between mb-5">
                                    <div>
                                       <span class="d-block font-15 text-dark font-weight-500">Users</span>
                                    </div>
                                    <div>
                                       <span class="text-success font-14 font-weight-500">+10%</span>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <span class="d-block display-4 text-dark mb-5">36.1K</span>
                                    <small class="d-block">172,458 Target Users</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <div class="card card-sm">
                              <div class="card-body">
                                 <div class="d-flex justify-content-between mb-5">
                                    <div>
                                       <span class="d-block font-15 text-dark font-weight-500">Campaign Leads</span>
                                    </div>
                                    <div>
                                       <span class="text-success font-14 font-weight-500">+12.5%</span>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <span class="d-block display-4 text-dark mb-5"><span class="counter-anim">168,856</span></span>
                                    <small class="d-block">472,458 Targeted</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <div class="card card-sm">
                              <div class="card-body">
                                 <div class="d-flex justify-content-between mb-5">
                                    <div>
                                       <span class="d-block font-15 text-dark font-weight-500">New Contacts</span>
                                    </div>
                                    <div>
                                       <span class="text-warning font-14 font-weight-500">-2.8%</span>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <span class="d-block display-4 text-dark mb-5">73</span>
                                    <small class="d-block">100 Targeted</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                           <div class="card card-sm">
                              <div class="card-body">
                                 <div class="d-flex justify-content-between mb-5">
                                    <div>
                                       <span class="d-block font-15 text-dark font-weight-500">Win/Loss Ratio</span>
                                    </div>
                                    <div>
                                       <span class="text-danger font-14 font-weight-500">-75%</span>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <span class="d-block display-4 text-dark mb-5">48:65</span>
                                    <small class="d-block">42:32 Targeted</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hk-row">
                        <div class="col-lg-7">
                           <div class="card card-refresh">
                              <div class="refresh-container">
                                 <div class="loader-pendulums"></div>
                              </div>
                              <div class="card-header card-header-action">
                                 <div>
                                    <h6 class="mb-10">Monthly Adwords Views</h6>
                                    <p class="font-14 w-80">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. </p>
                                 </div>
                                 <div class="d-flex align-items-center card-action-wrap">
                                    <a href="#" class="inline-block refresh mr-15">
                                    <i class="ion ion-md-radio-button-off"></i>
                                    </a>
                                    <div class="inline-block dropdown">
                                       <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-md-more"></i></a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Separated link</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body">
                                 <div id="area_adwords"></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <div class="card">
                              <div class="card-header card-header-action">
                                 <div>
                                    <h6 class="mb-10">Stock Price Movement</h6>
                                    <p class="font-14 w-80">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 </div>
                                 <div class="d-flex align-items-center card-action-wrap">
                                    <div class="inline-block dropdown">
                                       <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Separated link</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body">
                                 <div id="columnchart" style="height:250px;"></div>
                                 <div class="hk-legend-wrap mt-20">
                                    <div class="hk-legend">
                                       <span class="d-10 bg-sky-light-3 rounded-circle d-inline-block"></span><span>18-24</span>
                                    </div>
                                    <div class="hk-legend">
                                       <span class="d-10 bg-sky-light-4 rounded-circle d-inline-block"></span><span>25-34</span>
                                    </div>
                                    <div class="hk-legend">
                                       <span class="d-10 bg-sky-light-5 rounded-circle d-inline-block"></span><span>35-44</span>
                                    </div>
                                    <div class="hk-legend">
                                       <span class="d-10 bg-sky-light-2 rounded-circle d-inline-block"></span><span>45-54</span>
                                    </div>
                                    <div class="hk-legend">
                                       <span class="d-10 bg-light-20 rounded-circle d-inline-block"></span><span>55-64</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hk-row">
                        <div class="col-lg-7">
                           <div class="card">
                              <div class="card-header card-header-action">
                                 <h6>Country Stats<small class="text-muted pl-10">sub heading</small></h6>
                                 <div class="d-flex align-items-center card-action-wrap">
                                    <a href="#" class="inline-block refresh mr-15">
                                    <i class="ion ion-md-arrow-down"></i>
                                    </a>
                                    <a href="#" class="inline-block full-screen">
                                    <i class="ion ion-md-expand"></i>
                                    </a>
                                 </div>
                              </div>
                              <div class="card-body pa-0">
                                 <div class="pa-20">
                                    <div id="world_map_marker_1" style="height: 390px"></div>
                                 </div>
                                 <div class="table-wrap">
                                    <div class="table-responsive">
                                       <table class="table table-sm table-hover mb-0">
                                          <thead>
                                             <tr>
                                                <th class="w-25">Country</th>
                                                <th>Sessions</th>
                                                <th>Goals</th>
                                                <th>Goals Rate</th>
                                                <th>Bounce Rate</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Canada</td>
                                                <td>55,555</td>
                                                <td>210</td>
                                                <td>2.46%</td>
                                                <td>0.26%</td>
                                             </tr>
                                             <tr>
                                                <td>India</td>
                                                <td>24,152</td>
                                                <td>135</td>
                                                <td>0.58%</td>
                                                <td>0.43%</td>
                                             </tr>
                                             <tr>
                                                <td>UK</td>
                                                <td>15,640</td>
                                                <td>324</td>
                                                <td>5.15%</td>
                                                <td>2.47%</td>
                                             </tr>
                                             <tr>
                                                <td>Botswana</td>
                                                <td>12,148</td>
                                                <td>854</td>
                                                <td>4.19%</td>
                                                <td>0.1%</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-5">
                           <div class="card overflow-hide border-0">
                              <div class="card-body pa-0">
                                 <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                                    <div class="fadeOut item img-background overlay-wrap bg-warning">
                                       <div class="position-relative z-index-2 pa-20">
                                          <div class="position-relative text-white mnh-225p">
                                             <p>Very easy to use. Thanks to design, we've just launched our 5th website! Thank you for making it painless, pleasant and most of all hassle free! Just what I was looking for.</p>
                                             <div class="media position-absolute b-0 l-0 align-items-center">
                                                <div class="media-img-wrap d-flex mr-15">
                                                   <div class="avatar avatar-sm">
                                                      <span class="avatar-text avatar-text-inv-yellow rounded-circle"><span class="initial-wrap"><span>ZC</span></span></span>
                                                   </div>
                                                </div>
                                                <div class="media-body">
                                                   <span class="d-block font-14 font-weight-500">Zuck Chan</span>
                                                   <span class="d-block font-12">Design Lead, Hencework</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="fadeOut item img-background overlay-wrap bg-warning">
                                       <div class="position-relative z-index-2 pa-20">
                                          <div class="position-relative text-white mnh-225p">
                                             <p>Nice work on your design. Design is worth much more than I paid. We've used design for the last five years. I just can't get enough of design.</p>
                                             <div class="media position-absolute b-0 l-0 align-items-center">
                                                <div class="media-img-wrap d-flex mr-15">
                                                   <div class="avatar avatar-sm">
                                                      <span class="avatar-text avatar-text-inv-green rounded-circle"><span class="initial-wrap"><span>NT</span></span></span>
                                                   </div>
                                                </div>
                                                <div class="media-body">
                                                   <span class="d-block font-14 font-weight-500">Normand T.</span>
                                                   <span class="d-block font-12">Sales Executive, Media</span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="card-header card-header-action">
                                 <h6>Recent Activity</h6>
                                 <div class="d-flex align-items-center card-action-wrap">
                                    <div class="inline-block dropdown">
                                       <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Separated link</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body">
                                 <div class="user-activity user-activity-sm">
                                    <div class="media">
                                       <div class="media-img-wrap">
                                          <div class="avatar avatar-xs">
                                             <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                          </div>
                                       </div>
                                       <div class="media-body">
                                          <div>
                                             <span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Laura Thompson</span><span class="pl-5">joined josh groben team.</span></span>
                                             <span class="d-block font-13">3 hours ago</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="media">
                                       <div class="media-img-wrap">
                                          <div class="avatar avatar-xs">
                                             <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img rounded-circle">
                                          </div>
                                       </div>
                                       <div class="media-body">
                                          <div>
                                             <span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Meayme Fletcher</span><span class="pl-5">liked photos</span></span>
                                             <span class="d-block font-13 mb-10">6 hours ago</span>
                                          </div>
                                          <div class="d-flex">
                                             <a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/slide1.jpg" alt="Card image cap"></a>
                                             <a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/slide2.jpg" alt="Card image cap"></a>
                                             <a href="#" class="w-75p mr-10"><img class="card-img-top rounded" src="dist/img/slide3.jpg" alt="Card image cap"></a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="media">
                                       <div class="media-img-wrap">
                                          <div class="avatar avatar-xs">
                                             <img src="dist/img/avatar4.jpg" alt="user" class="avatar-img rounded-circle">
                                          </div>
                                       </div>
                                       <div class="media-body">
                                          <div>
                                             <span class="d-block mb-5"><span class="font-weight-500 text-dark text-capitalize">Billy Flowers</span><span class="pl-5">Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text.</span></span>
                                             <span class="d-block font-13">32 days ago</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="hk-row">
                        <div class="col-lg-12">
                           <div class="card">
                              <div class="card-body pa-0">
                                 <div class="table-wrap">
                                    <div class="table-responsive">
                                       <table class="table table-hover mb-0">
                                          <thead>
                                             <tr>
                                                <th>
                                                   <div class="custom-control custom-checkbox checkbox-primary">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                      <label class="custom-control-label" for="customCheck4">Lead Title</label>
                                                   </div>
                                                </th>
                                                <th>Sales</th>
                                                <th>Company</th>
                                                <th>Date Created</th>
                                                <th>Lead Status</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <div class="custom-control custom-checkbox checkbox-primary">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck41" checked="">
                                                      <label class="custom-control-label" for="customCheck41"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                   </div>
                                                </td>
                                                <td>$2000</td>
                                                <td>
                                                   <div class="media align-items-center">
                                                      <div class="media-img-wrap d-flex mr-10">
                                                         <div class="avatar avatar-xs">
                                                            <span class="avatar-text avatar-text-primary rounded-circle"><span class="initial-wrap"><span>A</span></span></span>
                                                         </div>
                                                      </div>
                                                      <div class="media-body">
                                                         <span class="d-block">American Express</span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   22/10/2018
                                                </td>
                                                <td><span class="badge badge-soft-primary">On track</span></td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="custom-control custom-checkbox checkbox-primary">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck42">
                                                      <label class="custom-control-label" for="customCheck42"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                   </div>
                                                </td>
                                                <td>$1600</td>
                                                <td>
                                                   <div class="media align-items-center">
                                                      <div class="media-img-wrap d-flex mr-10">
                                                         <div class="avatar avatar-xs">
                                                            <span class="avatar-text avatar-text-danger rounded-circle"><span class="initial-wrap"><span>M</span></span></span>
                                                         </div>
                                                      </div>
                                                      <div class="media-body">
                                                         <span class="d-block">Exxon Mobil</span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   15/09/2018
                                                </td>
                                                <td><span class="badge badge-soft-primary">On track</span></td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="custom-control custom-checkbox checkbox-primary">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck43">
                                                      <label class="custom-control-label" for="customCheck43"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                   </div>
                                                </td>
                                                <td>$1265</td>
                                                <td>
                                                   <div class="media align-items-center">
                                                      <div class="media-img-wrap d-flex mr-10">
                                                         <div class="avatar avatar-xs">
                                                            <span class="avatar-text avatar-text-teal rounded-circle"><span class="initial-wrap"><span>B</span></span></span>
                                                         </div>
                                                      </div>
                                                      <div class="media-body">
                                                         <span class="d-block">Big Blackship</span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   30/08/2018
                                                </td>
                                                <td><span class="badge badge-soft-danger">Behind</span></td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="custom-control custom-checkbox checkbox-primary">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck44">
                                                      <label class="custom-control-label" for="customCheck44"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                   </div>
                                                </td>
                                                <td>$4562</td>
                                                <td>
                                                   <div class="media align-items-center">
                                                      <div class="media-img-wrap d-flex mr-10">
                                                         <div class="avatar avatar-xs">
                                                            <span class="avatar-text avatar-text-indigo rounded-circle"><span class="initial-wrap"><span>F</span></span></span>
                                                         </div>
                                                      </div>
                                                      <div class="media-body">
                                                         <span class="d-block">Folkswagan</span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   14/03/2018
                                                </td>
                                                <td><span class="badge badge-soft-purple">Negotiation</span></td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="custom-control custom-checkbox checkbox-primary">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck45">
                                                      <label class="custom-control-label" for="customCheck45"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                   </div>
                                                </td>
                                                <td>$5012</td>
                                                <td>
                                                   <div class="media align-items-center">
                                                      <div class="media-img-wrap d-flex mr-10">
                                                         <div class="avatar avatar-xs">
                                                            <span class="avatar-text avatar-text-purple rounded-circle"><span class="initial-wrap"><span>N</span></span></span>
                                                         </div>
                                                      </div>
                                                      <div class="media-body">
                                                         <span class="d-block">Novotel</span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   21/02/2018
                                                </td>
                                                <td><span class="badge badge-soft-orange">Offer Made</span></td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="custom-control custom-checkbox checkbox-primary">
                                                      <input type="checkbox" class="custom-control-input" id="customCheck46">
                                                      <label class="custom-control-label" for="customCheck46"><span class="w-130p d-block text-truncate">abc@example.com</span></label>
                                                   </div>
                                                </td>
                                                <td>$1245</td>
                                                <td>
                                                   <div class="media align-items-center">
                                                      <div class="media-img-wrap d-flex mr-10">
                                                         <div class="avatar avatar-xs">
                                                            <span class="avatar-text avatar-text-pink rounded-circle"><span class="initial-wrap"><span>D</span></span></span>
                                                         </div>
                                                      </div>
                                                      <div class="media-body">
                                                         <span class="d-block">Displaypic</span>
                                                      </div>
                                                   </div>
                                                </td>
                                                <td>
                                                   3/02/2018
                                                </td>
                                                <td><span class="badge badge-soft-orange">Offer Made</span></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /Row -->
            </div>
            <!-- /Container -->
            <!-- Footer -->
            <div class="hk-footer-wrap container">
               <footer class="footer">
                  <div class="row">
                     <div class="col-md-6 col-sm-12">
                        <p>Pampered by<a href="#" class="text-dark" >Hencework</a> © 2019</p>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <p class="d-inline-block">Follow us</p>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                        <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                     </div>
                  </div>
               </footer>
            </div>
            <!-- /Footer -->
         </div>
         <!-- /Main Content -->
      </div>
      <!-- /HK Wrapper -->
      <!-- jQuery -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/popper.js/dist/umd/popper.min.js"></script>
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- Slimscroll JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/jquery.slimscroll.js"></script>
      <!-- Fancy Dropdown JS -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/dropdown-bootstrap-extended.js"></script>
      <!-- FeatherIcons JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/feather.min.js"></script>
      <!-- Toggles JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toggles/toggles.min.js"></script>
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/toggle-data.js"></script>
      <!-- Counter Animation JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/waypoints/lib/jquery.waypoints.min.js"></script>
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery.counterup/jquery.counterup.min.js"></script>
      <!-- Sparkline JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
      <!-- Vector Maps JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/vectormap-data.js"></script>
      <!-- Owl JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/owl.carousel/dist/owl.carousel.min.js"></script>
      <!-- Toastr JS -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
      <!-- Apex JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/vendors/apexcharts/dist/apexcharts.min.js"></script>
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/irregular-data-series.js"></script>
      <!-- Init JavaScript -->
      <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/dist/js/init.js"></script>
      <script src=<?php $_SERVER['DOCUMENT_ROOT']?>/"dist/js/dashboard-data.js"></script>
   </body>
</html>
