<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Ready Bootstrap Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="{{ asset('admin_assets/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('admin_assets/assets/css/ready.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/assets/css/demo.css') }}">
</head>

<body>
    @vite('resources/css/app.css')

    <div class="wrapper" id="admin_management">
        <div class="main-header">
            <div class="logo-header">
                <a href="index.html" class="logo">
                    Ready Dashboard
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">

                    <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                        <div class="input-group">
                            <input type="text" placeholder="Search ..." class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-search search-icon"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-envelope"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-bell"></i>
                                <span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-icon notif-primary"> <i class="la la-user-plus"></i>
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    New user registered
                                                </span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Rahmad commented on Admin
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{ asset('admin_assets/assets/img/profile2.jpg') }}"
                                                    alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Reza send messages to you
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Farrah liked Admin
                                                </span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);"> <strong>See all
                                            notifications</strong> <i class="la la-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false"> <img src="{{ asset('admin_assets/assets/img/profile.jpg') }}"
                                    alt="user-img" width="36"
                                    class="img-circle"><span>{{ auth()->user()->first_name }}</span></span> </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <div class="user-box">
                                        <div class="u-img"><img
                                                src="{{ asset('admin_assets/assets/img/profile.jpg') }}"
                                                alt="user"></div>
                                        <div class="u-text">
                                            <h4>Hizrian</h4>
                                            <p class="text-muted">hello@themekita.com</p><a href="profile.html"
                                                class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
                                <a class="dropdown-item" href="#"></i> My Balance</a>
                                <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account
                                    Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth-normal-sign-in.html"
                                    onclick="event.preventDefault(); document.getElementById('form_logout').submit()"><i
                                        class="fa fa-power-off"></i> Logout</a>

                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <div class="sidebar">
            <toggle-display :user_auth="{{Auth::user()}}">
                <div class="scrollbar-inner sidebar-wrapper">
                    <div class="user">
                        <div class="photo">
                            <img src="{{ asset('admin_assets/assets/img/profile.jpg') }}">
                        </div>
                        <div class="info">
                            <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Hizrian
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>
    
                            <div class="collapse in" id="collapseExample" aria-expanded="true">
                                <ul class="nav">
                                    <li>
                                        <a href="#profile">
                                            <span class="link-collapse">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item active">
                            <a href="{{ route('home') }}">
                                <i class="la la-dashboard"></i>
                                <p>Dashboard</p>
                                <span class="badge badge-count">5</span>
                            </a>
                        </li>
                       
                        <show-element>
                            <li class="nav-item">
                                <a href="{{ route('form_annonce') }}">
                                    <i class="la la-table"></i>
                                    <p>Créer annonce</p>
                                    <span class="badge badge-count">14</span>
                                </a>
                            </li>
                        </show-element>
                        <show-element>
                            <li class="nav-item">
                                <a href="/annonce">
                                    <i class="la la-keyboard-o"></i>
                                    <p>Mes annonces </p>
                                    <span class="badge badge-count">50</span>
                                </a>
                            </li>
                        </show-element>
                        <show-student-element>
                            <li class="nav-item">
                                <a href="tables.html">
                                    <i class="la la-th"></i>
                                    <p>Cours disponibles</p>
                                    <span class="badge badge-count">6</span>
                                </a>
                            </li>
                        </show-student-element>
                        
                        <li class="nav-item">
                            <a href="notifications.html">
                                <i class="la la-bell"></i>
                                <p>Notifications</p>
                                <span class="badge badge-success">3</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="typography.html">
                                <i class="la la-font"></i>
                                <p>Typography</p>
                                <span class="badge badge-danger">25</span>
                            </a>
                        </li>
                       
                        <show-element>
                            <li class="nav-item">
                                <a href="icons.html">
                                    <i class="la la-fonticons"></i>
                                    <p>Icons</p>
                                </a>
                                
                            </li>
                        </show-element>
                        <li class="nav-item">
                            <toggle-button :user_auth="{{Auth::user()}}"></toggle-button>
                        </li>
                       
                    </ul>
                </div>
            </toggle-display>
            
        </div>
        <div class="main-panel">
            @yield('main')

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="http://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://themewagon.com/license/#free-item">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2018, made with <i class="la la-heart heart text-danger"></i> by <a
                            href="http://www.themekita.com">ThemeKita</a>
                    </div>
                </div>
            </footer>
        </div>
    </div></div>
   @vite('resources/js/app.js')
    <!-- Modal -->
    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                    <p>
                        <b>We'll let you know when it's done</b>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('admin_assets/assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/ready.min.js') }}"></script>
<script src="{{ asset('admin_assets/assets/js/demo.js') }}"></script>

</html>

<a href="auth-normal-sign-in.html" onclick="event.preventDefault(); document.getElementById('form_logout').submit()">
    <i class="ti-layout-sidebar-left"></i> Logout
</a>

<form action="{{ route('logout') }}" method="POST" id="form_logout">
    @csrf
</form>
