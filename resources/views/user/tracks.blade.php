@extends('layout.index')
@section('css')
    <style>
        .gallery_area {
            padding-top: 0px;
        }
    </style>
@endsection
@section('content')
    <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Các bản phát hành</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <!-- music_area  -->
    <div class="music_area music_gallery inc_padding">
        <div class="container">
            @foreach ($products as $item)
                <div class="row align-items-center justify-content-center mb-20">

                    <div class="col-xl-10">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-md-12">
                                {!! $item->link_apple ?? null !!}
                            </div>
                            {{-- <div class="col-xl-9 col-md-9">
                           <div class="music_field">
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
                           </div>
                       </div> --}}
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

    <!-- youtube_video_area  -->
    @include('layout.images')
    <!-- / youtube_video_area  -->

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
@endsection
@section('scripts')
@endsection
