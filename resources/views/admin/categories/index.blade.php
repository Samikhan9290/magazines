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
                            <div class="row">
                                <div class="col-sm-6">
                            <h4 class="mt-0 header-title">Default Example</h4>

                                    @if(session('success'))
                                        <p class="alert alert-success">{{session('success')}}</p>
                                    @endif
                                </div>
                                <div class="col-sm-6">

                                <p class="text-muted font-14 mb-3">
                                <a href="{{url('admin/manage-category')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add new Category</a>
                            </p>
                                </div>


                            </div>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap">
                                <thead>
                                <tr>
                                    <th>S-no</th>
                                    <th>Date Created</th>
                                    <th>Name</th>
                                    <th>description</th>
                                    <th>status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>


                                <tbody>





@foreach($category as $cat)



                                <tr>
                                    <td>{{$cat->id}}</td>

                                    <td>{{$cat->created_at}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->description}}</td>
                                    @if($cat->status==1)
                                    <td>
                                        <a class="btn btn-success" href="{{url('admin/category/status/0',$cat->id)}}">Active</a>
                                    </td>
                                    @else
                                        <td>
                                            <a class="btn btn-warning" href="{{url('admin/category/status/1',$cat->id)}}">In Active</a>

                                        </td>

                                    @endif
                                    <td>
                                        <a href="{{url('admin/category/delete',$cat->id)}}" class="btn btn-danger">Delete</a>
                                        <a href="{{url('admin/category/edit',$cat->id)}}" class="btn btn-success">Edit</a>
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

