
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/layouts-dark-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Sep 2021 14:25:06 GMT -->
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

    <!-- third party css -->
    <link href="{{asset('admin/assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->


    <!-- Bootstrap Css -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('admin/assets/css/app.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>



            <li class="dropdown notification-list">
                <x-app-layout>

                </x-app-layout>

            </li>



        </ul>

        <!-- LOGO -->
        <div class="logo-box">


        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
            <li>
                <button class="button-menu-mobile disable-btn waves-effect">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <h4 class="page-title-main">Dashboard</h4>
            </li>

        </ul>

    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!-- User box -->
            <div class="user-box text-center">
                <img src="{{asset('admin/assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme" style="margin-left: 80px;margin-bottom: 20px" class="rounded-circle img-thumbnail avatar-md ">

                <p class="text-muted">OMMS</p>

            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <li class="menu-title">Navigation</li>

                    <li>
                        <a href="{{url('redirect')}}">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('admin/magazine')}}">
                            <i class="fa fa-newspaper"></i>
                            <span> Magzines List </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/comment')}}">
                            <i class="fa fa-comment"></i>
                            <span> Comments List </span>
                        </a>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->userType==1)
                    <li>
                        <a href="{{url('admin/category')}}">
                            <i class="fa fa-list-alt"></i>
                            <span> Categories </span>
                        </a>
                    </li>
                        <li>
                        <a href="{{url('admin/users_list')}}">
                            <i class="fa fa-users"></i>
                            <span> users List </span>
                        </a>
                    </li>
                        @endif


                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    @yield('mainContent')

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->





<!-- Vendor js -->
<script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>

<!-- third party js -->
<script src="{{asset('admin/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables/buttons.flash.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/datatables/dataTables.select.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/pdfmake/vfs_fonts.js')}}"></script>
<!-- third party js ends -->

<!-- knob plugin -->
<script src="{{asset('admin/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('admin/assets/libs/morris-js/morris.min.js')}}"></script>
<script src="{{asset('admin/assets/libs/raphael/raphael.min.js')}}"></script>

<!-- Dashboard init js-->
<script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

<!-- Datatables init -->
<script src="{{asset('admin/assets/js/pages/datatables.init.js')}}"></script>
<!-- App js -->
<script src="{{asset('admin/assets/js/app.min.js')}}"></script>

</body>

<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/layouts-dark-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Sep 2021 14:25:06 GMT -->
</html>
