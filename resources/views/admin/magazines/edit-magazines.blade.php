@extends('admin-layout.app')
@section('title','index')
@section('mainContent')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">


                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            @if(session('success'))
                                <p class="alert alert-success">{{session('success')}}</p>
                            @endif
                            <form method="post" class="form-horizontal" role="form" enctype="multipart/form-data" >
                                @csrf
                                @method('put')


                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="example-placeholder">title</label>
                                    <div class="col-md-10">
                                        <input value="{{$magazine->title}}" type="text" id="title" name="title" class="form-control" placeholder="PleaseEnter Magazine name">
                                  @error('title')
                                   <div class="alert alert-danger alert-dismissible my-2" role="alert">
                                       {{$message}}
                                   </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">Select category</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="category_id">
                                            <option value="">Select Category</option>

                                        @foreach($categories as $category)
                                            @if($magazine->category_id==$category->id)
                                                    <option selected value="{{$category->id}}">{{$category->name}}</option>
                                                @else

                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endif
                                            @endforeach
{{--                                            <option value="{{$magazine->name}}" {{ $magazine->name == "2 side" ? 'selected' : '' }}>2 side</option>--}}
{{--                                            <option value="{{$magazine->name}}" {{ $magazine->name == "2 side 1 front" ? 'selected' : '' }}>2 side 1 front</option>--}}
{{--                                            <option value="{{$magazine->name}}t" {{ $magazine->name == "1 side 1 front" ? 'selected' : '' }}>1 side 1 front</option>--}}
{{--                                            <option value="{{$magazine->name}}" {{ $magazine->name == "2 side 1 front shalwar pocket" ? 'selected' : '' }}>2 side 1 front shalwar pocket</option>--}}


                                        </select>
                                        @error('category_id')
                                        <div class="alert alert-danger alert-dismissible my-2" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="description">Description</label>
                                    <div class="col-md-10">
                                        <textarea value="" class="form-control" rows="5" id="description" name="description">{{$magazine->description}}</textarea>
                                        @error('description')
                                        <div class="alert alert-danger alert-dismissible my-2" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                                <div>
                                    <label>Old image</label>
                                    <img width="200px" height="200px" src="/MagazinesImages/{{$magazine->image}}">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="example-fileinput">Image</label>
                                    <div class="col-md-10">
                                        <input type="file" name="image" class="form-control" id="example-fileinput">
                                        @error('image')
                                        <div class="alert alert-danger alert-dismissible my-2" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label" for="example-fileinput">PDF File</label>
                                    <div class="col-md-10">
                                        <input type="file" name="pdf" class="form-control" id="example-fileinput">
                                        @error('pdf')
                                        <div class="alert alert-danger alert-dismissible my-2" role="alert">
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

                <!-- end row -->





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
