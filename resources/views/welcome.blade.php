<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>
        @include('layouts.backend-dashboard.stylesheet')
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                      </div><!-- /.col -->
                    </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
            
                <!-- Main content -->
                <section class="content">
                <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                        <div class="inner">
                          <h3>150</h3>
            
                          <p>New Orders</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('submit_request')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-success">
                        <div class="inner">
                          <h3>53<sup style="font-size: 20px">%</sup></h3>
            
                          <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-warning">
                        <div class="inner">
                          <h3>44</h3>
            
                          <p>User Registrations</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                      <!-- small box -->
                      <div class="small-box bg-danger">
                        <div class="inner">
                          <h3>65</h3>
            
                          <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <!-- ./col -->
                  </div>
                  <!-- /.row -->
                  <!-- Main row -->
                  <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-7 connectedSortable">
                      <!-- Custom tabs (Charts with tabs)-->
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Sales
                          </h3>
                          <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                              <li class="nav-item">
                                <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                              </li>
                            </ul>
                          </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                          <div class="tab-content p-0">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="revenue-chart"
                                 style="position: relative; height: 300px;">
                                <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                             </div>
                            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                              <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                            </div>
                          </div>
                        </div><!-- /.card-body -->
                      </div>
                      <!-- /.card -->
            
                      <!-- DIRECT CHAT -->
                      <div class="card direct-chat direct-chat-primary">
                        <div class="card-header">
                          <h3 class="card-title">Direct Chat</h3>
            
                          <div class="card-tools">
                            <span title="3 New Messages" class="badge badge-primary">3</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                              <i class="fas fa-comments"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <!-- Conversations are loaded here -->
                          <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
            
                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                You better believe it!
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
            
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                Working with AdminLTE on a great new app! Wanna join?
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
            
                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                              <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                              </div>
                              <!-- /.direct-chat-infos -->
                              <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                              <!-- /.direct-chat-img -->
                              <div class="direct-chat-text">
                                I would love to.
                              </div>
                              <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
            
                          </div>
                          <!--/.direct-chat-messages-->
            
                          <!-- Contacts are loaded here -->
                          <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">
            
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Count Dracula
                                      <small class="contacts-list-date float-right">2/28/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">
            
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Sarah Doe
                                      <small class="contacts-list-date float-right">2/23/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">I will be waiting for...</span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">
            
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Nadia Jolie
                                      <small class="contacts-list-date float-right">2/20/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">I'll call you back at...</span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">
            
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Nora S. Vans
                                      <small class="contacts-list-date float-right">2/10/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Where is your new...</span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">
            
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      John K.
                                      <small class="contacts-list-date float-right">1/27/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Can I take a look at...</span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                              <li>
                                <a href="#">
                                  <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">
            
                                  <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                      Kenneth M.
                                      <small class="contacts-list-date float-right">1/4/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Never mind I found...</span>
                                  </div>
                                  <!-- /.contacts-list-info -->
                                </a>
                              </li>
                              <!-- End Contact Item -->
                            </ul>
                            <!-- /.contacts-list -->
                          </div>
                          <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <form action="#" method="post">
                            <div class="input-group">
                              <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                              <span class="input-group-append">
                                <button type="button" class="btn btn-primary">Send</button>
                              </span>
                            </div>
                          </form>
                        </div>
                        <!-- /.card-footer-->
                      </div>
                      <!--/.direct-chat -->
            
                      <!-- TO DO List -->
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            To Do List
                          </h3>
            
                          <div class="card-tools">
                            <ul class="pagination pagination-sm">
                              <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                              <li class="page-item"><a href="#" class="page-link">1</a></li>
                              <li class="page-item"><a href="#" class="page-link">2</a></li>
                              <li class="page-item"><a href="#" class="page-link">3</a></li>
                              <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                            </ul>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <ul class="todo-list" data-widget="todo-list">
                            <li>
                              <!-- drag handle -->
                              <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                              </span>
                              <!-- checkbox -->
                              <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                <label for="todoCheck1"></label>
                              </div>
                              <!-- todo text -->
                              <span class="text">Design a nice theme</span>
                              <!-- Emphasis label -->
                              <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                              <!-- General tools such as edit or delete-->
                              <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                              </div>
                            </li>
                            <li>
                              <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                              </span>
                              <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                <label for="todoCheck2"></label>
                              </div>
                              <span class="text">Make the theme responsive</span>
                              <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                              <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                              </div>
                            </li>
                            <li>
                              <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                              </span>
                              <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                <label for="todoCheck3"></label>
                              </div>
                              <span class="text">Let theme shine like a star</span>
                              <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                              <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                              </div>
                            </li>
                            <li>
                              <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                              </span>
                              <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                <label for="todoCheck4"></label>
                              </div>
                              <span class="text">Let theme shine like a star</span>
                              <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                              <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                              </div>
                            </li>
                            <li>
                              <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                              </span>
                              <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                <label for="todoCheck5"></label>
                              </div>
                              <span class="text">Check your messages and notifications</span>
                              <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                              <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                              </div>
                            </li>
                            <li>
                              <span class="handle">
                                <i class="fas fa-ellipsis-v"></i>
                                <i class="fas fa-ellipsis-v"></i>
                              </span>
                              <div  class="icheck-primary d-inline ml-2">
                                <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                <label for="todoCheck6"></label>
                              </div>
                              <span class="text">Let theme shine like a star</span>
                              <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                              <div class="tools">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash-o"></i>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                          <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
                        </div>
                      </div>
                      <!-- /.card -->
                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">
            
                      <!-- Map card -->
                      <div class="card bg-gradient-primary">
                        <div class="card-header border-0">
                          <h3 class="card-title">
                            <i class="fas fa-map-marker-alt mr-1"></i>
                            Visitors
                          </h3>
                          <!-- card tools -->
                          <div class="card-tools">
                            <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                              <i class="far fa-calendar-alt"></i>
                            </button>
                            <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                          <!-- /.card-tools -->
                        </div>
                        <div class="card-body">
                          <div id="world-map" style="height: 250px; width: 100%;"></div>
                        </div>
                        <!-- /.card-body-->
                        <div class="card-footer bg-transparent">
                          <div class="row">
                            <div class="col-4 text-center">
                              <div id="sparkline-1"></div>
                              <div class="text-white">Visitors</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-4 text-center">
                              <div id="sparkline-2"></div>
                              <div class="text-white">Online</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-4 text-center">
                              <div id="sparkline-3"></div>
                              <div class="text-white">Sales</div>
                            </div>
                            <!-- ./col -->
                          </div>
                          <!-- /.row -->
                        </div>
                      </div>
                      <!-- /.card -->
            
                      <!-- solid sales graph -->
                      <div class="card bg-gradient-info">
                        <div class="card-header border-0">
                          <h3 class="card-title">
                            <i class="fas fa-th mr-1"></i>
                            Sales Graph
                          </h3>
            
                          <div class="card-tools">
                            <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                          <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-transparent">
                          <div class="row">
                            <div class="col-4 text-center">
                              <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                                     data-fgColor="#39CCCC">
            
                              <div class="text-white">Mail-Orders</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-4 text-center">
                              <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                                     data-fgColor="#39CCCC">
            
                              <div class="text-white">Online</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-4 text-center">
                              <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                                     data-fgColor="#39CCCC">
            
                              <div class="text-white">In-Store</div>
                            </div>
                            <!-- ./col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                      </div>
                      <!-- /.card -->
            
                      <!-- Calendar -->
                      <div class="card bg-gradient-success">
                        <div class="card-header border-0">
            
                          <h3 class="card-title">
                            <i class="far fa-calendar-alt"></i>
                            Calendar
                          </h3>
                          <!-- tools card -->
                          <div class="card-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                              <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                                <i class="fas fa-bars"></i>
                              </button>
                              <div class="dropdown-menu" role="menu">
                                <a href="#" class="dropdown-item">Add new event</a>
                                <a href="#" class="dropdown-item">Clear events</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">View calendar</a>
                              </div>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                          <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pt-0">
                          <!--The calendar -->
                          <div id="calendar" style="width: 100%"></div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                    </section>
                    <!-- right col -->
                  </div>
                  <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
              </div>
            {{-- <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div> --}}
        </div>
        @include('layouts.backend-dashboard.javascript')
    </body>
</html>
