@extends('admin-layout.app')
@section('title','index')
@section('mainContent')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box bg-primary">


                            <h4 class="header-title mt-0 mb-4 text-white">Total Magazines</h4>

                            <div class="widget-chart-1">
                                <i class="fas fa-book-open text-white"></i>


                                <div class="widget-detail-1 text-right">
                                    <h2 class="font-weight-normal pt-2 mb-1 text-white"> {{$total_magazines}} </h2>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box bg-success">


                            <h4 class="header-title mt-0 mb-4 text-white">publish Magazines</h4>

                            <div class="widget-chart-1">
                                <i class="fas fa-book-open text-white"></i>


                                <div class="widget-detail-1 text-right">
                                    <h2 class="font-weight-normal pt-2 mb-1 text-white"> {{$publish_magazines}} </h2>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->


                    <div class="col-xl-3 col-md-6">
                        <div class="card-box bg-danger">


                            <h4 class="header-title mt-0 mb-4 text-white">not Publish Magazines</h4>

                            <div class="widget-chart-1">
                                <i class="fas fa-book-open"></i>


                                <div class="widget-detail-1 text-right">
                                    <h2 class="text-white pt-2 mb-1"> {{$not_publish_magazines}} </h2>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->
@if(\Illuminate\Support\Facades\Auth::user()->userType==1)


                    <div class="col-xl-3 col-md-6">
                        <div class="card-box bg-indigo-500">


                            <h4 class="header-title mt-0 mb-3">Verified Users</h4>
                            <i class="fa fa-users"></i>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-right">
                                    <h2 class="font-weight-normal mb-1"> {{$verified_users}} </h2>
                                    <p class="text-muted mb-3"> </p>
                                </div>

                            </div>
                        </div>

                    </div><!-- end col -->
    @endif

                </div>
                @if(\Illuminate\Support\Facades\Auth::user()->userType==1)
                <div class="row">

                    <div class="col-xl-3 col-md-6">
                        <div class="card-box bg-danger">


                            <h4 class="header-title mt-0 mb-4">Not varified</h4>

                            <div class="widget-chart-1">
                                <i class="fa fa-users"></i>


                                <div class="widget-detail-1 text-right">
                                    <h2 class="font-weight-normal pt-2 mb-1"> {{$Not_verified_users}} </h2>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->



                </div>
                <!-- end row -->
                @endif






            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2016 - 2020 &copy; Adminto theme by <a href="#">Coderthemes</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
