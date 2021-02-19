@extends('layouts.master')
@section('content')
<!-- page -->
<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
		<div style="display: flex; justify-content: flex-end;" class="container">
			<ul class="w3_short">

				<li>من نحن </li>
				<li>
					<i>|</i>

					<a href="{{ route('home') }}">الرئيسية</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- //page -->
<!-- about page -->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		<!-- tittle heading -->
		<h3 class="tittle-w3l">{{ $about->header }}
			<span class="heading-style">
				<i></i>
				<i></i>
				<i></i>
			</span>
		</h3>
		<!-- //tittle heading -->
		<div class="w3l-welcome-info">
			<div class="col-sm-6 col-xs-6 welcome-grids">
				<div class="welcome-img">
					<img src="images/about.jpg" class="img-responsive zoom-img" alt="">
				</div>
			</div>
			<div class="col-sm-6 col-xs-6 welcome-grids">
				<div class="welcome-img">
					<img src="images/about2.jpg" class="img-responsive zoom-img" alt="">
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="w3l-welcome-text">
			<h4 style="color: grey;">
                {{ $about->description }}
			</h4>
		</div>
	</div>
</div>
<!-- //welcome -->
<!-- video -->
{{-- conditions --}}
<div class="services-breadcrumb" >
	<div class="agile_inner_breadcrumb">
		<div style="display: flex; justify-content: flex-end;" class="container">
			<ul class="w3_short">

				<li>{{ $about->section2 }}</li>
				<li>
					<i>|</i>

					<a href="index.html">الرئيسية</a>
				</li>
			</ul>
		</div>
    </div>
</div>
        <div class="welcome" style="background-color: rgba(26, 204, 253, 0.23)">
            <div class="container">
                <!-- tittle heading -->
                <h3 class="tittle-w3l">{{ $about->section2 }}
                    <span class="heading-style">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </h3>
                <!-- //tittle heading -->
                <div class="w3l-welcome-info">
                    <div class="col-sm-6 col-xs-6 welcome-grids">
                        <div class="welcome-img">
                            <img src="images/about.jpg" class="img-responsive zoom-img" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6 welcome-grids">
                        <div class="welcome-img">
                            <img src="images/about2.jpg" class="img-responsive zoom-img" alt="">
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="w3l-welcome-text">
                    <h4 style="color: grey;">
                        {{ $about->description2 }}
                    </h4>
                </div>
            </div>
        </div>

{{-- //conditions --}}
{{-- privacy --}}
<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
		<div style="display: flex; justify-content: flex-end;" class="container">
			<ul class="w3_short">

				<li>{{ $about->section3 }}</li>
				<li>
					<i>|</i>

					<a href="index.html">الرئيسية</a>
				</li>
			</ul>
		</div>
	</div>
</div>
    <div class="welcome">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">{{ $about->section3 }}
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>
            <!-- //tittle heading -->
            <div class="w3l-welcome-info">
                <div class="col-sm-6 col-xs-6 welcome-grids">
                    <div class="welcome-img">
                        <img src="images/about.jpg" class="img-responsive zoom-img" alt="">
                    </div>
                </div>
                <div class="col-sm-6 col-xs-6 welcome-grids">
                    <div class="welcome-img">
                        <img src="images/about2.jpg" class="img-responsive zoom-img" alt="">
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3l-welcome-text">
                <h4 style="color: grey;">
                    {{ $about->description3 }}
                </h4>
            </div>
        </div>
    </div>

{{-- //privacy --}}

@endsection
