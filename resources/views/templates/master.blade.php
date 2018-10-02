<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>MAT School Master</title>

    <!-- Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

</head>

<body>
<section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo"><b>MAT<span>School Master</span></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-theme">4</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 4 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">MAT Admin Panel</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Database Update</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Product Development</div>
                                    <div class="percent">80%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Payments Sent</div>
                                    <div class="percent">70%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <span class="sr-only">70% Complete (Important)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-theme">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                                <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                                <span class="message">
                  Hi mate, how is everything?
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                                <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                                <span class="message">
                  Hi, I need your help with this.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                                <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                                <span class="message">
                  Love your new Dashboard.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                                <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                                <span class="message">
                  Please, answer asap.
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">You have 7 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                Server Overloaded.
                                <span class="small italic">4 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                Memory #2 Not Responding.
                                <span class="small italic">30 mins.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                Disk Space Reached 85%.
                                <span class="small italic">2 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="fa fa-plus"></i></span>
                                New User Registered.
                                <span class="small italic">3 hrs.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{route('login')}}"><i class="fa fa-user"></i>  Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                {{--<span style="margin-left:20%;">--}}
            {{--&nbsp;&nbsp;&nbsp;&nbsp;    <img src="/logo/{{$schoolsettings->school_logo}}" width="80" height="80" alt="">--}}
                {{--</span><br>--}}
                <span style="margin-left:20%;"><img src="{{asset('logo/logo.png')}}" width="80" height="80"></span>
                <li class="active">
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Students</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('newstudent')}}">New Student</a></li>
                        <li><a href="#">Manage Students</a></li>
                        <li><a href="{{route('students')}}">View Students</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Academics</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Add Student Scores</a></li>
                        <li><a href="#">Manage Scores</a></li>
                        <li><a href="#">Upload Past Exams</a></li>
                        <li><a href="#">Report Forms</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>School Fees</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Receive Fee</a></li>
                        <li><a href="#">Refunds</a></li>
                        <li><a href="#">Manage Transactions</a></li>
                        <li><a href="#">Reports</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-graduation-cap"></i>
                        <span>Teachers</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">New Teacher</a></li>
                        <li><a href="#">Manage Teachers</a></li>
                        <li><a href="{{route('teachers')}}">View Teachers</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                        <span class="label label-theme pull-right mail-info">2</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Library</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">Register Books</a></li>
                        <li><a href="#">Lend</a></li>
                        <li><a href="#">Receive</a></li>
                        <li><a href="#">Reports</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-comments-o"></i>
                        <span>Boarding</span>
                    </a>
                    <ul class="sub">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                    </ul>
                </li>

                <li class="active">
                    <a href="{{route('allsettings')}}">
                        <i class="fa fa-gears"></i>
                        <span>Settings</span>
                    </a>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><!--PAGE HEADER GOES HERE-->
                @yield('pageheader')
            </h3>

            <div class="row mt">
                <div class="col-lg-12" style="border-top: 1px solid menu;">

                    <!-- CONTENT GOES HERE-->
                    @yield('bodycontent')

                </div>
            </div>
        </section>
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            <p>
                &copy; Copyrights <strong>MAT School Master</strong>. All Rights Reserved
            </p>
            <div class="credits">
                Developed by <a href="http://matricuda.com/">Matricuda Technologies (+254723403292)</a>
            </div>
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/common-scripts.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>


</body>

</html>