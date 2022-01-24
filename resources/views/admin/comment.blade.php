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
                                <div class="col-sm-6 my-4 mb-4">
                                    <h4 class="mt-0 header-title mb-4">Comments</h4>

                                    @if(session('success'))
                                        <p class="alert alert-success">{{session('success')}}</p>
                                    @endif
                                </div>



                            </div>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>S-no</th>
                                    <th>Date Created</th>
                                    <th>from</th>
                                    <th>comment</th>
                                    <th>status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>


                                <tbody>

                                @if(\Illuminate\Support\Facades\Auth::user()->userType==1)





                                @foreach($comments as $mag)



                                    <tr>
                                        <td>{{$mag->id}}</td>

                                        <td>{{$mag->created_at}}</td>
                                        <td>{{$mag->name}}</td>
                                        <td>{{$mag->comment}}</td>
                                        @if($mag->status==1)
                                            <td>
                                                <a class="btn btn-success btn-sm btn-rounded" href="{{url('admin/comment/status/0',$mag->id)}}">Verified</a>
                                            </td>
                                        @else
                                            <td>
                                                <a class="btn btn-warning btn-small btn-rounded" href="{{url('admin/comment/status/1',$mag->id)}}">Not Verified</a>

                                            </td>

                                        @endif
                                        <td>
                                            <a href="{{url('admin/comment/delete',$mag->id)}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    @foreach($magazines as $list)
                                    @foreach($comments[$list->id] as $mag)



                                        <tr>
                                            <td>{{$mag->id}}</td>

                                            <td>{{$mag->created_at}}</td>
                                            <td>{{$mag->name}}</td>
                                            <td>{{$mag->comment}}</td>
                                            @if($mag->status==1)
                                                <td>
                                                    <button class="btn btn-success btn-sm btn-rounded">Verified</button>
                                                </td>
                                            @else
                                                <td>
                                                    <button class="btn btn-warning btn-small btn-rounded">Not Verified</button>

                                                </td>

                                            @endif
                                            <td>
                                                <a href="{{url('admin/comment/delete',$mag->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endforeach

                                @endif

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

