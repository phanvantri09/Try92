@extends('layout.index')
@section('css')
@endsection
@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Liên Hệ</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section section_padding">
        <div class="container">
            


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Gửi tin nhắn đến Try92</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('contactPost') }}" method="post" id="contactForm"
                        novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">

                                    <textarea class="form-control w-100" name="content" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tin nhắn của bạn đến Try92'" placeholder = 'Tin nhắn của bạn đến Try92'></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tên của bạn'"
                                        placeholder = 'Tên của bạn'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email của bạn'"
                                        placeholder = 'Email của bạn'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="numberPhone" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số điện thoại của bạn'"
                                        placeholder = 'Số điện thoại của bạn'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_4 boxed-btn">Gửi tin nhắn này</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Quảng Nam - Đà nẵng</h3>
                            <p>Rất vui khi được hợp tác với bạn.</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>0372868775</h3>
                            <p>Tôi nhận điện thoại từ 8h đến 20h nhé</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>try92.fan@gmail.com</h3>
                            <p>Gửi mail cho tôi nhé</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-sm-block mb-5 pb-4">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.7978654398494!2d108.24307577583852!3d16.024034540644863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314217522546880f%3A0x4a6fccdd5f369b81!2zxJAuIE5ndXnhu4VuIMSQw6xuaCBDaGnhu4N1LCBLaHXDqiBN4bu5LCBOZ8WpIEjDoG5oIFPGoW4sIMSQw6AgTuG6tW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1697796561517!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
@section('scripts')
@endsection
