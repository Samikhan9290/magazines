@extends('admin-layout.app')
@section('title','magazines')
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
                                    <h4 class="mt-0 header-title">Total Magazines</h4>

                                    @if(session('success'))
                                        <p class="alert alert-success">{{session('success')}}</p>
                                    @endif
                                </div>
                                <div class="col-sm-6">

                                    <p class="float-left">
                                        <a href="{{url('admin/manage-magazines')}}" class="btn btn-success float-lg-left"><i class="fa fa-plus-circle"></i> Add new Magazine</a>
                                    </p>
                                </div>


                            </div>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>S-no</th>
                                    <th>Date Created</th>
                                    <th>Magazines</th>
                                    <th>Author</th>
                                    <th>status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>


                                <tbody>





                                @foreach($magazines as $mag)



                                    <tr>
                                        <td>{{$mag->id}}</td>

                                        <td>{{$mag->created_at}}</td>
                                        <td>{{$mag->title}}</td>
                                        <td>{{$mag->name}}</td>
                                        @if(\Illuminate\Support\Facades\Auth::user()->userType==1)
                                        @if($mag->status==1)
                                            <td>
                                                <a class="btn btn-success" href="{{url('admin/magazine/status/0',$mag->id)}}">Active</a>
                                            </td>
                                        @else
                                            <td>
                                                <a class="btn btn-warning" href="{{url('admin/magazine/status/1',$mag->id)}}">In Active</a>

                                            </td>

                                        @endif
                                        @else
                                            @if($mag->status==1)
                                                <td>
                                                    <button class="btn btn-success btn-sm"  style="height: 30px;border-radius: 20px;color: white">Publish</button>
                                                </td>
                                            @else
                                                <td>
                                                    <button class="btn btn-warning btn-sm" style="height: 30px;border-radius: 20px;color: black">Not Publish</button>

                                                </td>

                                            @endif
                                        @endif
                                        <td>
                                            <a href="{{url('admin/magazine/delete',$mag->id)}}" class="btn btn-danger">Delete</a>
                                            <a href="{{url('admin/magazine/edit',$mag->id)}}" class="btn btn-success">Edit</a>
                                            <a href="{{url('admin/magazine/view',$mag->id)}}" class="btn btn-success">View</a>
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

