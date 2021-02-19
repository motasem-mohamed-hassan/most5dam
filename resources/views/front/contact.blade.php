@extends('layouts.master')

@section('content')

<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div style="display: flex; justify-content: flex-end;" class="container">
            <ul class="w3_short">

                <li>تواصل معنا </li>
                <li>
                <i>|</i>
                    <a href="{{ route('home') }}">الرئيسية</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- contact page -->
<div class="contact-w3l">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">تواصل معنا
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        <!-- contact -->
        <div class="contact agileits">
            <div class="contact-agileinfo">
                <div class="contact-form wthree">
                    <form action="{{ route('sendEmail') }}" method="post">
                        @csrf
                        <div class="">
                            <input style="text-align: right;" type="text" name="name" placeholder="الاسم" value="{{ old('name') }}">
                            <div>{{ $errors->first('name') }}</div>
                        </div>
                        <div class="">
                            <input style="text-align: right;" class="email" type="email" name="Email" placeholder="البريد الالكتروني" value="{{ old('email') }}">
                            <div>{{ $errors->first('email') }}</div>
                        </div>
                        <div class="">
                            <input style="text-align: right;" class="text" type="text" name="subject" placeholder="الموضوع" value="{{ old('subject') }}">
                            <div>{{ $errors->first('subject') }}</div>
                        </div>
                        <div class="">
                            <textarea style="text-align: right;" placeholder="الرسالة" name="message" value="{{ old('message') }}"></textarea>
                            <div>{{ $errors->first('name') }}</div>
                        </div>
                        <div style="display: flex; justify-content: flex-end;">
                        <input type="submit" value="ارسال">
                        </div>
                    </form>
                </div>
                <div  class="contact-right wthree">
                    <div  class=" contact-text w3-agileits">
                        <h4 style="text-align: right;">:تواصل معنا</h4>
                        <p style="text-align: right;">
                            {{ $setting->location }}
                            <i class="fa fa-map-marker"></i>

                        </p>
                        <p style="text-align: right;">
                             {{ $setting->phone1 }} :التليفون
                            <i class="fa fa-phone"></i>
                        </p>
                        <p style="text-align: right;">
                            {{ $setting->phone2 }} :التليفون
                           <i class="fa fa-phone"></i>

                       </p>
                    </div>
                    <div class="col-xs-5 contact-agile">
                        <img src="images/contact2.jpg" alt="">
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //contact -->
    </div>
</div>
<!-- map -->
<div class="map w3layouts">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55565170.29301636!2d-132.08532758867793!3d31.786060306224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1512365940398"
        allowfullscreen></iframe>
</div>
<!-- //map -->


@endsection
