@extends('front-layout.app')
@section('mainContent')
    <div id="main-section">
        <!--========== BEGIN .CONTAINER ==========-->
        <div class="container"> </div>
        <!--========== END .CONTAINER ==========-->
        <!--========== BEGIN .MODULE ==========-->
        <section class="module">
            <div class="container">
                <!--========== BEGIN .BREAKING-NEWS ==========-->

                <!--========== END .BREAKING-NEWS ==========-->
                <!--========== BEGIN .ROW ==========-->
                <div class="row no-gutter">
                    <!--========== BEGIN .COL-MD-8 ==========-->
                    <div class="col-md-12">
                        <!--========== BEGIN .POST ==========-->
                        <div class="post post-full clearfix">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="entry-media"> <a href="#"><img src="../MagazinesImages/{{$magazine[0]->image}}" alt="Foto" class="img-responsive"></a> </div>

                                </div>
                                <div class="col-md-8">
                                    <div class="entry-title">
                                        <h2 class="entry-title"><a style="color: brown;font-weight: bold" href="#">{{$magazine[0]->title}}</a></h2>
                                        <hr >
                                    </div>



                                        <div style="margin-top: 30px"> <h4> <i class="fa fa-user"></i>{{$magazine[0]->name}}</h4></div>
                                        <div style="margin-left: 600px" > <h4> <i class="fa fa-calendar"></i>{{$magazine[0]->created_at}}</h4></div>

                                </div>
                            </div>
                      <div class="entry-main">

                                <div class="entry-content">
                                    <p>{{$magazine[0]->description}}</p>

                                    <h2>PDF File</h2>
                                    <embed src="{{ asset('/Magazines_pdf/'.$magazine[0]->pdf) }}" width="100%" height="500" alt="pdf" />

                                    <br>


                                </div>

                            </div>
                        </div>
                        <!--  End .post -->


                        <!--  Begin .comment-section -->
                        @if(isset($comments[0]))
                        <div class="comment-section">
                            <!-- Begin .title-style01 -->
                            <div class="comment-title title-style01">
                                <h4 class="fa fa-comment">{{$totlalComment}} Comments</h4>
                            </div>
                            <!-- End .title-style01 -->
                            <ul class="comments-list">
                                @foreach($comments as $comment)
                                <li>
                                    <div class="comment clearfix">
                                        <div class="comment-content">
                                            <div class="comment-title">
                                                <h5 class="comment-author">{{$comment->name}}</h5>
                                                <div class="comment-date"><i class="fa fa-calendar"></i><span class="day"> {{$comment->created_at}}</span></div>
                                            </div>
                                            <p>{{$comment->comment}}</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        @else
                            <h2>No Comment yet</h2>

                        <!--  End .comment-section -->
                    @endif
                        <!--  Begin .form-reply-section -->

                        <div class="form-reply-section">
                            <div class="comment-title title-style01">
                                <h4>leave a reply</h4>
                            </div>
                            @if(session('success'))
                                <p class="alert alert-success">{{session('success')}}</p>
                            @endif
                            <form class="form-reply ui-form" method="post" action="{{url('comments')}}">
                                @csrf
                                <div class="row no-gutter">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input placeholder="Your Name" name="name" class="form-control" type="text" title="Reply"/>
                                      @error('name')
                                            <div class="alert alert-danger alert-dismissible my-2" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input placeholder="Email" name="email" class="form-control" type="email" title="Email"/>
                                        @error("email")
                                        <div class="alert alert-danger alert-dismissible my-2" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input  placeholder="Magazine" name="magazine_id" value="{{$magazine[0]->id}}" class="form-control" type="hidden" title="magazine"/>
                                    </div>
                                </div>
                                <div class="row no-gutter">
                                    <div class="col-md-12">
                                        <textarea rows="5" placeholder="Comment" name="comment" class="form-control" title="Comment"></textarea>
                                        @error("comment")
                                        <div class="alert alert-danger alert-dismissible my-2" role="alert">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row no-gutter">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-black">submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!--  End .form-reply-section -->
                    </div>
                    <!--========== END .COL-MD-8 ==========-->

                </div>
            </div>
            <!--========== END .CONTAINER ==========-->
        </section>

    </div>

@endsection
