@extends('admin-layout.app')
@section('title','users List')
@section('mainContent')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="mt-0 header-title">Users List</h4>

                                    @if(session('success'))
                                        <p class="alert alert-success">{{session('success')}}</p>
                                    @endif
                                </div>

                            </div>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>S-no</th>
                                    <th>name</th>
                                    <th>User Name</th>
                                    <th>User Type</th>
                                    <th>status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>


                                <tbody>





                                @foreach($users as $mag)



                                    <tr>
                                        <td>{{$mag->id}}</td>

                                        <td>{{$mag->name}}</td>
                                        <td>{{$mag->email}}</td>
                                        <td>{{$mag->userType}}</td>
                                        @if($mag->status==1)
                                            <td>
                                                <a class="btn btn-success btn-sm btn-rounded" href="{{url('admin/users/status/0',$mag->id)}}">Verified</a>
                                            </td>
                                        @else
                                            <td>
                                                <a class="btn btn-warning btn-small btn-rounded" href="{{url('admin/users/status/1',$mag->id)}}">Not Verified</a>

                                            </td>

                                        @endif
                                        <td>
                                            <a href="{{url('admin/users/delete',$mag->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end row -->





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

