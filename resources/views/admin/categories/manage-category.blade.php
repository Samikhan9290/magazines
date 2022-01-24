@extends('admin-layout.app')
@section('title','index')
@section('mainContent')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title">Category Detail</h4>

                            @if(session('success'))
                                <p class="alert alert-success">{{session('success')}}</p>
                            @endif

                            <div class="row">
                                <div class="col-12">
                                    <div class="p-2">
                                        <form method="post" class="form-horizontal" role="form" >
                                            @csrf


                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="example-placeholder">Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" id="name" name="name" class="form-control" placeholder="PleaseEnter Category name">
                                                    @error('name')
                                                    <div class="alert alert-danger my-2" role="alert">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label" for="description">Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                                                    @error('description')
                                                    <div class="alert alert-danger my-2" role="alert">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <input type="submit" class="btn-block btn-block btn-primary btn-lg">
                                            </div>




                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>





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

