@extends('layout.index')
@section('css')
@endsection
@section('content')
    <!-- music_area  -->
    <div class="music_area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            {!! $products[0]->link_spotify ?? ($products[1]->link_spotify ?? ($products[3]->link_spotify ?? null)) !!}
                        </div>
                        {{-- <div class="col-xl-9 col-md-9">
                            <div class="music_field">
                                <div class="thumb">
                                    <img height="200px" width="200px"
                                        src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($products[0]->img ?? null) }}"
                                        alt="">
                                </div>
                                <div class="audio_name">
                                    <div class="name">
                                        <h4>{{ $products[0]->name ?? null }}</h4>
                                        <p>{{ $products[0]->time_create ?? null }}</p>
                                    </div>
                                    <audio preload="auto" controls>
                                        <source src="https://www.w3schools.com/html/horse.mp3">
                                    </audio>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-xl-12 col-md-12">
                            <div class="music_btn d-flex justify-content-center">
                                <a href="{{ $products[0]->link_ytb ?? 'https://www.youtube.com/@try92' }}" target="_blank"
                                    class="boxed-btn">Xem video ca nhạc</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- music_area end  -->

    <!-- about_area  -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="about_thumb">
                        <img class="img-fluid" src="img/imageTry92/try92.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="about_info">
                        <h3>Try92</h3>
                        <p>Mình tên thật là Phan Văn Trí, sinh ra ở Quảng Nam(92) <br>
                            Là GenZ chính hiệu | 09-02-2000, Mình đã tập viết nhạc từ những năm cấp 3 và nuôi dưỡng niềm đam
                            mê đến bây giờ.</p>
                        {{-- <div class="signature">
                            <img src="img/about/signature.png" alt="">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_area  -->

    <!-- youtube_video_area  -->
    {{-- <div class="youtube_video_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                @foreach ($blogs as $item)
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single_video">
                            <div class="thumb">
                                <img width="475px" height="475px"
                                    src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($item->img ?? null) }}"
                                    alt="">
                            </div>
                            <div class="hover_elements">
                                <div class="video">
                                    <a class="popup-video" href="https://www.youtube.com/watch?app=desktop&v=dILfyDeQaRk">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>

                                <div class="hover_inner">
                                    <span>{{ $item->created_at ?? null }}</span>
                                    <h3><a href="{{ route('blogsItem', ['id' => $item->id]) }}"
                                            target="_blank">{{ $item->name ?? null }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- / youtube_video_area  -->

    <!-- music_area  -->
    <div class="music_area music_gallery">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <h3>Bản phát hành</h3>
                    </div>
                </div>
            </div>
            @foreach ($products as $item)
                <div class="row align-items-center justify-content-center mb-20">

                    <div class="col-xl-10">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-md-12">
                                {!! $item->link_apple ?? null !!}
                                {{-- <div class="music_field">
                                    <div class="thumb">
                                        <img width="148px" height="148px"
                                            src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($item->img ?? null) }}"
                                            alt="">
                                    </div>
                                    <div class="audio_name">
                                        <div class="name">
                                            <h4>{{ $item->name ?? null }}</h4>
                                            <p>{{ $item->time_create ?? null }}</p>
                                        </div>
                                        <audio preload="auto" controls>
                                            <source src="https://www.w3schools.com/html/horse.mp3">
                                        </audio>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="music_btn d-flex justify-content-center">
                                    <a href="{{ $item->link_ytb ?? 'https://www.youtube.com/@try92' }}" target="_blank"
                                        class="boxed-btn">Xem video ca nhạc</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach


        </div>
    </div>
    <!-- music_area end  -->

    <!-- gallery -->
    @include('layout.images')
    <!--/ gallery -->

    <!-- contact_rsvp -->
    <div class="contact_rsvp">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text text-center">
                        <h3>Liên Hệ Try92</h3>
                        <a class="boxed-btn3" href="{{ route('contact') }}" target="_blank">Liên Hệ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ contact_rsvp -->
@endsection
@section('scripts')
@endsection
