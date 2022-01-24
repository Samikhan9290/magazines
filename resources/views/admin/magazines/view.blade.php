@extends('admin-layout.app')
@section('title','magazines')
@section('mainContent')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">


                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box task-detail">

                            <div class="media mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="" alt="64x64" src="/MagazinesImages/{{$magazine->image}}">

                                        <div class="media-body">
                                            @if($magazine->status==1)
                                                <span class="badge badge-danger my-4">
                                            <h2>Bublished</h2>
                                    </span>
                                            @else
                                                <span class="badge badge-info my-4">
                                            <h2>Not Bublished</h2>
                                    </span>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="col-md-8 my-4">
                                        <h2 class="my-4" style="font-size: 50px;color: brown;font-weight: bold">{{$magazine->title}}</h2>
                                        <hr>
                                        <h5 class="font-600 m-b-5 my-2">Upload Date</h5>
                                        <p> {{$magazine->created_at}}</p>
                                    </div>
                                </div>
                            </div>

<p style="font-size: 20px" class="my-2">description</p>
                           <p>{{$magazine->description}}</p>

                            <div class="row task-dates mb-0 mt-2">
                                <div class="col-lg-6">

                                </div>
                            </div>
                            <div class="clearfix"></div>




                        </div>
                        <h2>PDF File</h2>
                        <embed src="{{ asset('/Magazines_pdf/'.$magazine->pdf) }}" width="100%" height="500" alt="pdf" />

<br>
                        <a href="{{url('admin/magazine')}}" class="btn btn-primary">Back</a>
                        <a href="{{url('admin/magazine/edit',$magazine->id)}}" class="btn btn-success">Edit</a>

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

