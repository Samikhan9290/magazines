@extends('front-layout.app')
@section('mainContent')
    <section id="main-section">
        <!-- ========== BEGIN PARALLAX ========== -->
        <div id="parallax-section">
            <div class="image1 img-overlay1">
                <div class="container">
                    <div class="caption text-center">
                        <div class="color-white text-center weight-300 medium-caption">Get the latest breaking news and top news headlines</div>
                        <div class="color-white text-center weight-800 large-caption">Happening now on 24h News Channel</div>
                        <div class="color-white text-center weight-400 medium-caption">No one hurt in North Side blaze</div>
                        <h5>A fire that broke out Tuesday afternoon in the Park West, forcing residents to evacuate, is under control and no one was hurt.</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== END PARALLAX ========== -->

        <!--========== BEGIN .MODULE ==========-->
        <section class="module highlight">
            <div class="container">
                <div class="module-title">
                    <h3 class="title"><span class="bg-1">World News</span></h3>
                    <h3 class="subtitle">Watch the latest news</h3>
                </div>
                <!--========== BEGIN .ROW ==========-->
                @if($magazines!='')

                <div class="row no-gutter">
                    <!--========== BEGIN .COL-MD-6 ==========-->
                    @foreach($magazines as $magazine)
                    <div class="col-sm-12 col-md-12">
                        <!--========== BEGIN .NEWS ==========-->
                        <div class="news">
                            <!-- Begin .item -->
                            <div class="item">
                                <div class="item-image-1"><a class="img-link" href="{{url('singleMagazine',$magazine->id)}}"><img class="img-responsive img-full" src="MagazinesImages/{{$magazine->image}}" alt=""></a><span><a class="label-1" href="news.html">{{$magazine->name}}</a></span></div>
                                <div class="item-content">
                                    <div class="title-left title-style04 underline04">
                                        <p><strong class="mx-lg-4 my-4">Created at</strong><i class="fa fa-calendar mx-4"></i> {{$magazine->created_at}}</p><hr>
                                        <h3><a href="#"><strong>{{$magazine->title}}</strong></a></h3>
                                    </div>
                                    <p><a href="#" target="_blank" class="external-link">{{$magazine->description}}</a></p>
                                    <div><a href="news.html" target="_blank"><span class="read-more">News</span></a></div>
                                </div>
                            </div>
                            <!-- End .item -->
                            <!-- Begin .item -->

                            <!-- End .item -->
                        </div>
                        <!--========== END .NEWS ==========-->
                    </div>
                    @endforeach
                    <!--========== END .COL-MD-6 ==========-->
                @endif

                <!--========== BEGIN .COL-MD-6 ==========-->

                    <!--========== END .COL-MD-6 ==========-->
                </div>
            </div>
        </section>
        <!--========== END .MODULE ==========-->
        <!--========== BEGIN .MODULE ==========-->


    </section>
@endsection
