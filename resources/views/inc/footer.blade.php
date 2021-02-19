	<!-- newsletter -->
	<div class="footer-top">
		<div class="container-fluid">
			<div class="col-xs-4 w3l-rightmk">
				<img src="{{ asset('frontend/images/tab3.png') }}" alt=" ">
			</div>
			<div class="col-xs-8 agile-leftmk">
				<h2 style="text-align: right;">
					احصل على البقالة الخاصة بك من المتاجر المحلية</h2>
				<p style="text-align: right;">توصيل مجاني على طلبك الأول</p>
				<form action="#" method="post">
					<div style="display: flex; justify-content: flex-end;">
						<input type="submit" value="تابع">
						<input style="text-align: right;" type="email" placeholder="البريد الالكتروني" name="email" required="">
					</div>
				</form>
				<div class="newsform-w3l">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<footer>
		<div class="container">
			<!-- footer first section -->
			<h4 style="color: grey;text-align:right" > أفضل موقع محلّي للإعلانات المُبوبة. حيث ستتمكّن من بيع وشراء أي شيئ ممكن أن تتخيله، من موبايلك القديم والمقاعد التي مللت منها أو حتى سيارتك، أو الشقة التي تسكن فيها. والأفضل من ذلك، قد تتمكن من العثور على وظيفة أحلامك

            </h4><br>

			<!-- //footer first section -->
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<div class="col-xs-4 offer-footer">

					<div class="col-xs-8 text-form-footer">
						<h3>احصل علي طلبك </h3>
					</div>
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-8 text-form-footer">
						<h3>
							إرجاع مجاني وسهل</h3>
					</div>
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-refresh" aria-hidden="true"></span>
					</div>

					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">

					<div class="col-xs-8 text-form-footer">
						<h3>
							الإلغاء عبر الإنترنت</h3>
					</div>
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-times" aria-hidden="true"></span>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section -->
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info ">
				<!-- footer categories -->
				<div class="col-sm-3 address-right">
					<div class="col-xs-6 footer-grids" id="footer-categories">
						<h3 style="text-align: center;">
							خدماتنا</h3>
						<ul style="text-align: center;">
							<li>
								<a href="{{ asset('frontend/') }}product.html">قواعد السلامة</a>
							</li>
							<li>
								<a href="{{ asset('frontend/') }}product.html">خريطة الموقع</a>
							</li>
							<li>
								<a href="{{ asset('frontend/') }}product.html">شروط الاسنخدام</a>
							</li>
						</ul>
					</div>
					<!-- <div class="col-xs-6 footer-grids agile-secomk">
						<ul>
							<li>
								<a href="{{ asset('frontend/') }}product.html">Snacks & Beverages</a>
							</li>
							<li>
								<a href="{{ asset('frontend/') }}product.html">Bread & Bakery</a>
							</li>
							<li>
								<a href="{{ asset('frontend/') }}product.html">Sweets</a>
							</li>
							<li>
								<a href="{{ asset('frontend/') }}product.html">Chocolates & Biscuits</a>
							</li>
							<li>
								<a href="{{ asset('frontend/') }}product2.html">Personal Care</a>
							</li>
							<li>
								<a href="{{ asset('frontend/') }}product.html">Dried Fruits & Nuts</a>
							</li>
						</ul>
					</div> -->
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids ">
						<h3 >
							روابط سريعة</h3>
						<ul style="text-align: center; margin-right:35%" >
							<li>
								<a href={{ route('aboutUs') }}">شروط واحكام </a>
							</li>
							<li>
								<a href="{{ route('aboutUs') }}">سياسة الخصوصية </a>
							</li>
						</ul>
					</div>

					<div class="col-xs-6 footer-grids">
						<h3>
							تواصل معنا</h3>
						<ul >
							<li>
								<i class="fa fa-map-marker"></i> {{ $setting->location }}
							</li>
							<li>
								<i class="fa fa-mobile"></i> {{ $setting->phone1 }}
							</li>
							<li>
								<i class="fa fa-phone"></i> {{ $setting->phone2 }}
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<div class="col-sm-4 footer-grids  w3l-socialmk">
					<h3 style="text-align: center;">
						تابعنا</h3>
					<div style="display: flex; justify-content: center;" class="social">
						<ul>
							<li>
								<a class="icon fb" href="{{ $setting->facebook }}">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href="{{ $setting->twitter }}">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="{{ $setting->instegram }}">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="agileits_app-devices">
						<h5 style="text-align: center;">حمل التطبيق</h5>
						<a class="download-app" href="{{ asset('frontend/') }}#">
							<img src="{{ asset('frontend/images/1.png') }}" alt="">
						</a>
						<a class="download-app" href="{{ asset('frontend/') }}#">
							<img src="{{ asset('frontend/images/2.png') }}" alt="">
						</a>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
		</div>
	</footer>
	<!-- //footer -->
