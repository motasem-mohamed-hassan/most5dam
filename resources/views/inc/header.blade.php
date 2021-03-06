

	<div class="header-bot">


        {{-- <nav class="relative flex flex-wrap items-center justify-between px-2 py-1 navbar-expand-lg mb-3 bg-green-300">
            <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
              <div class="lg:flex flex-grow items-center" id="example-navbar-warning">
                <ul class="flex flex-col lg:flex-row list-none ml-auto items-center">
                    <li class="nav-item mr-5">
                        <a class="px-5 py-2 flex items-center text-xs font-bold leading-snug text-black hover:opacity-75" href="{{ route('home') }}">
                            الرئيسية
                        </a>

                    </li>
                    <li class="nav-item mr-5">
                        <a class="px-5 py-2 flex items-center text-xs font-bold leading-snug text-black hover:opacity-75" href="{{ route('aboutUs') }}">
                            سياسة الاستخدام
                        </a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="px-5 py-2 flex items-center text-xs font-bold leading-snug text-black hover:opacity-75" href="{{ route('aboutUs') }}">
                            من نحن
                        </a>
                    </li>
                    @auth
                    <li class="nav-item mr-5">
                        <a class="px-5 py-2 flex items-center text-xs font-bold leading-snug text-black hover:opacity-75" href="{{ route('profile', Auth::user()->id) }}">
                            الصفحة الشخصية
                        </a>
                    </li>
                    @endauth
                    <li class="nav-item mr-5">
                        <a class="px-5 py-2 flex items-center text-xs font-bold leading-snug text-black hover:opacity-75" href="{{ route('get_add') }}">
                            اضف منتجات
                        </a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="px-5 py-2 flex items-center text-xs font-bold leading-snug text-black hover:opacity-75" href="{{ route('contactPage') }}">
                            تواصل معنا
                        </a>
                    </li>
                </ul>
              </div>
            </div>
        </nav> --}}
		<header id="navbar">
            <nav class="navbar-container container">
                {{-- <a href="/" class="home-link">
                <div class="navbar-logo"></div>
                Website Name
                </a> --}}
                <button type="button" class="navbar-toggle" aria-label="Open navigation menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-menu">
                <ul class="navbar-links">
                    <li class="navbar-item ">
                        <a  href="{{ route('aboutUs') }}">
                            من نحن
                        </a>
                    </li>
                    <li class="navbar-item ">
                        <a  href="{{ route('aboutUs') }}">
                            سياسة الاستخدام
                        </a>
                    </li>
                    @auth
                    <li class="navbar-item ">
                        <a  href="{{ route('profile', Auth::user()->id) }}">
                            الصفحة الشخصية
                        </a>
                    </li>
                    @endauth
                    <li class="navbar-item ">
                        <a  href="{{ route('contactPage') }}">
                            تواصل معنا
                        </a>
                    </li>
                    <li class="navbar-item ">
                        <a  href="{{ route('get_add') }}">
                            اضف منتجات
                        </a>
                    </li>
                    <li class="navbar-item ">
                        <a href="{{ route('home') }}">
                            الرئيسية
                        </a>
                    </li>
                </ul>
                </div>
            </nav>

            <div class="header-bot_inner_wthreeinfo_header_mid">
                <!-- header-bot-->
                <div class="col-md-2 logo_agile" style="float:right">
                    <h1>
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="logo" width="100%" style="height:48px">
                        </a>
                    </h1>
                </div>
                <!-- //header-bot -->

                <div class="col-md-10 header" style="direction: rtl; float:right" >
                    <!-- header lists -->
                    <div class="search col-md-8" style="direction: rtl;float:right" >
                        <form action="#" method="GET" class="search-form">
                            <input  type="text" name="search" placeholder="ابحث..." required>
                                <button type="submit" class="btn btn-default">
                                    <span class="fa fa-search" aria-hidden="true"> </span>
                                </button>
                        </form>
                    </div>

                    <div class="col-md-2 " style="float:right;margin:auto;">
                    <ul>
                        <li>
                            <div class="dropdown">
                                @if(auth()->check())
                                <button class="dropbtn">حسابك</button>
                                <div class="dropdown-content" style="padding: 20px;" >

                                    <a class="btn btn-primary" href="{{ route('profile', Auth::id())}}">
                                        <span class="fa fa-user" aria-hidden="true"></span>الصفحة الشخصية
                                    </a><br>

                                    <a class="btn btn-primary" href="{{ route('personal-products', Auth::id()) }}">
                                        منتجاتك
                                    </a><br>

                                    @role('admin|superAdmin')
                                    <a class="btn btn-success" href="{{ route('admin.dashboard') }}">
                                        صفحة الأدمن
                                    </a><br>
                                    @endrole

                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" id="logout-btn">
                                            <span class="fa fa-unlock-alt" aria-hidden="true"></span> تسجيل خروج  </a>
                                        </button>
                                    </form>

                                </div>

                                @else
                                <button class="dropbtn" > سجّل الدخول</button>
                                <div class="dropdown-content" style="padding: 20px;">
                                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal1">
                                        تسجيل دخول <span class="fa fa-unlock-alt" aria-hidden="true"></span>
                                    </a><br>
                                    <small>لا تمتلك حساب؟</small>
                                    <a href="#" data-toggle="modal" data-target="#myModal2">
                                        سجّل الآن <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                                    </a>
                                </div>
                                @endif
                            <!-- //login -->
                        </li>
                    </ul>
                    {{-- </div> --}}
                </div>

                <div class="clearfix"></div>

            </div>
        </header>

	</div>

	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">تسجيل دخول </h3>
						<p style="text-align: right;">
							سجّل الدخول الآن ، لنبدأ للتسوق . ليس لديك حساب؟
							<a href="#" data-toggle="modal" data-target="#myModal2">
								تسجيل جديد </a>
						</p>
						<form action="{{ route('login') }}" method="post"  autocomplete="off">
							@csrf
							<div class="styled-input agile-styled-input-top">
								<input style="text-align: right;" type="text" placeholder="رقم الهاتف" name="phone_number" required="">
							</div>
							<div class="styled-input">
								<input style="text-align: right;" type="password" placeholder="كلمة السر" name="password" required="">
							</div>
							<div style="display: flex; justify-content: flex-end;">
								<input type="submit" value="تسجيل دخول ">
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">تسجيل جديد </h3>
						<h4 style="text-align: right;">
							دعنا ننشئ حسابك
						</h4><br>
						<form action="{{ route('register') }}" method="post" autocomplete="off">
							@csrf
							<div class="styled-input">
								<input style="text-align: right;" type="text" placeholder="الاسم" name="name"  autocomplete="off" required>
							</div>
							<div class="styled-input">
								<input style="text-align: right;" type="email" placeholder="البريد الالكتروني" name="email"  autocomplete="off" required>
							</div>
                            <div class="styled-input">
								<input style="text-align: right;" type="text" placeholder="رقم الهاتف" name="phone_number"  autocomplete="off" required>
							</div>
                            <div class="form-group" >
                                <div class="row d-flex justify-content-start" >
                                    <div  class="col-md-1"></div>
                                    <div class="col-md-9">

                                        <select name="city" class="form-control selectCity" id="" required>
                                            <option value="" selected>--اختر المدينة--</option>
                                            @foreach ($cities->where('city_id', null) as $city)
                                            <option city_id="{{ $city->id }}" id="citiesOption" value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <label class="col-md-2 text-center">المدينة</label>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="row d-flex justify-content-start" >
                                    <div  class="col-md-1"></div>
                                    <div class="col-md-9" >
                                        <select name="neighborhood" class="form-control" id="child_city" required>
                                            <option value="" selected>--اختر الحي--</option>
                                        </select>
                                    </div>

                                    <label class="col-md-2 text-center">الحي</label>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="styled-input" id="bank-account-inputs" style="font-weight:light ">

								<input id="f" type="text" maxlength="4"  name="acc_number_6" required>
								<input id="e" type="text" maxlength="4"  name="acc_number_5" required>
								<input id="d" type="text" maxlength="4"  name="acc_number_4" required>
								<input id="c" type="text" maxlength="4"  name="acc_number_3" required>
								<input id="b" type="text" maxlength="4"  name="acc_number_2" required>
								<input id="a" style="position: relative;" type="text" maxlength="2"  name="acc_number_1" required><span style="position: absolute;right:89%;font-weight:bolder;fond-size:28px">S A</span>


							</div>

							<div class="styled-input">
								<input style="text-align: right;" type="password" placeholder="كلمةالسر"  autocomplete="off" name="password" id="password1" required>
							</div>
                            <div class="styled-input">
                                <input style="text-align: right;" type="password" placeholder="تأكيد كلمة السر"  autocomplete="off" name="password_confirmation" required>
                            </div>
                            <div class="form-check" style="text-align: right">

                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
								<label class="form-check-label" for="exampleCheck1" style="text-decoration: underline"><a href="{{ route('aboutUs') }}">
                                     أوافق على الشروط و الاحكام</a></label>
                            </div>
							<div class="form-check" style="text-align: right">

                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
								<label class="form-check-label" for="exampleCheck1" style="text-decoration: underline"><a href="{{ route('aboutUs') }}">
                                   أوافق على دفع نسبة مخصصة للموقع عند البيع</a></label>
                            </div>
							<div style="display: flex; justify-content: flex-end;">
								<input type="submit" value="تسجيل جديد ">
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="dropdown" style="direction: rtl">
									<a href="{{ asset('frontend/') }}#" class=" nav-stylehead" data-toggle="dropdown" style="color: orangered " role="button" aria-haspopup="true" aria-expanded="false">جميع الأقسام
										<span class="caret"></span>
									</a>
                                    <div id="lines"></div>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info" style="direction: rtl;text-align:right">
                                            @foreach ($categories->chunk(10) as $chunk)
											<div class="col-sm-6 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                @foreach($chunk as $category)
                                                <li>
                                                    <a href="{{ route('categoryPage', $category->id) }}">{{ $category->الاسم }}</a>
                                                </li>
                                                @endforeach
                                                </ul>
                                            </div>
                                            @endforeach
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
                                <?php $segment = Request::segment(1) ?>
                                @foreach($categories as $key => $category)
                                <li class="@if($segment== 'adding') active @endif">
									<a class="nav-stylehead " href="{{ route('categoryPage', $category->id) }}">{{ $category->الاسم }}</a>
                                    @if ($key == 0)
                                        <div id="lines" style="background-color:maroon"></div>
                                    @endif
                                    @if ($key == 1)
                                        <div id="lines" style="background-color:purple"></div>
                                    @endif
                                    @if ($key == 2)
                                        <div id="lines" style="background-color:orange"></div>
                                    @endif
                                    @if ($key == 3)
                                        <div id="lines" style="background-color:green"></div>
                                    @endif
                                    @if ($key == 4)
                                    <div id="lines" style="background-color:blue"></div>
                                    @endif
                                    @if ($key == 5)
                                    <div id="lines" style="background-color:pink"></div>
                                    @endif
								</li>
                                @if ($key == 5)
                                    @break
                                @endif

                                @endforeach
                                {{-- <li class="@if($segment== 'adding') active @endif">
									<a class="nav-stylehead " href="{{ route('get_add') }}">اضف منتجات</a>
                                    <div id="lines" style="background-color:maroon"></div>
								</li> --}}
                                {{-- <li class="@if(!$segment) active @endif">
									<a class="nav-stylehead " href="{{ route('home') }}">الرئيسية
										<span class="sr-only">(current)</span>
									</a>
                                    <div id="lines" style="background-color: coral"></div>
								</li> --}}
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <script>
        var a = document.getElementById("a"),
            b = document.getElementById("b"),
            c = document.getElementById("c");
            d = document.getElementById("d");
            e = document.getElementById("e");
            f = document.getElementById("f");

            a.onkeyup = function() {
            if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
                b.focus();
            }
        }

        b.onkeyup = function() {
            if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
                c.focus();
            }
        }
        c.onkeyup = function() {
            if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
                d.focus();
            }
        }
        d.onkeyup = function() {
            if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
                e.focus();
            }
        }
        e.onkeyup = function() {
            if (this.value.length === parseInt(this.attributes["maxlength"].value)) {
                f.focus();
            }
        }



        const navbar = document.getElementById("navbar");
        const navbarToggle = navbar.querySelector(".navbar-toggle");

        function openMobileNavbar() {
        navbar.classList.add("opened");
        navbarToggle.setAttribute("aria-label", "Close navigation menu.");
        }

        function closeMobileNavbar() {
        navbar.classList.remove("opened");
        navbarToggle.setAttribute("aria-label", "Open navigation menu.");
        }

        navbarToggle.addEventListener("click", () => {
        if (navbar.classList.contains("opened")) {
            closeMobileNavbar();
        } else {
            openMobileNavbar();
        }
        });

        const navbarMenu = navbar.querySelector(".navbar-menu");
        const navbarLinksContainer = navbar.querySelector(".navbar-links");

        navbarLinksContainer.addEventListener("click", (clickEvent) => {
        clickEvent.stopPropagation();
        });

        navbarMenu.addEventListener("click", closeMobileNavbar);

    </script>
