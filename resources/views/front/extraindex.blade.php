
	
	{{-- Slider buttom Category Start --}}
	<section class="trending">
		<div class="container">
			<div class="row">
				<div class="trending-item-slider">
				@foreach($home_cat_banners as $cat)
					<div class="col-12 remove-padding" style="opacity: 1;">
						<a href="{{ $cat->link }}" class="banner-effect">
							<img class="img-fluid" src="{{asset('assets/images/banners/'.$cat->photo)}}"  alt="">
						</a>
					</div>
				@endforeach
				</div>
			</div>
		</div>
	</section>
	{{-- Slider buttom banner End --}}


		<!-- Trending Item Area Start -->
		<section  class="trending">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 ">
						<center><div class="section-top">
							<h2 class="section-title">
								{{ $langg->lang32 }}
							</h2>
							{{-- <a href="#" class="link">View All</a> --}}
						</div></center>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<div class="trending-item-slider">
							@foreach($trending_products as $prod)
								@include('includes.product.slider-product')
							@endforeach
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Tranding Item Area End -->
		
	<section  class="trending">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 ">
						<center><div class="section-top">
							<h2 class="section-title">
								{{ $langg->lang31 }}
							</h2>
						</div></center>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<div class="trending-item-slider">
							@foreach($latest_products as $prod)
								@include('includes.product.slider-product')
							@endforeach
						</div>
					</div>

				</div>
			</div>
		</section>
		

	<!-- @if($ps->flash_deal == 1)
		<section class="categori-item electronics-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<div class="section-top">
							<h2 class="section-title">
								{{ $langg->lang244 }}
							</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="flash-deals">
							<div class="flas-deal-slider">

								@foreach($discount_products as $prod)
									@include('includes.product.flash-product')
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	@endif -->

	@if($ps->large_banner == 1)
		<!-- Banner Area One Start -->
		<section class="banner-section">
			<div class="container">
				@foreach($large_banners->chunk(1) as $chunk)
					<div class="row">
						@foreach($chunk as $img)
							<div class="col-lg-12 remove-padding">
								<div class="img">
									<a class="banner-effect" href="{{ $img->link }}">
										<img src="{{asset('assets/images/banners/'.$img->photo)}}" alt="">
									</a>
								</div>
							</div>
						@endforeach
					</div>

					
				@endforeach
			</div>
		</section>
		<!-- Banner Area One Start -->
	@endif

	@if($ps->top_rated == 1)
		<!-- Electronics Area Start -->
		<section class="categori-item electronics-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<center><div class="section-top">
							<h2 class="section-title">
								{{ $langg->lang28 }}
							</h2>
						</div></center>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">

							@foreach($top_products as $prod)
								@include('includes.product.top-product')
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Electronics Area start-->
	@endif

	@if($ps->bottom_small == 1)
		<!-- Banner Area One Start -->
		<section class="banner-section">
			<div class="container">
				@foreach($bottom_small_banners->chunk(3) as $chunk)
					<div class="row">
						@foreach($chunk as $img)
							<div class="col-lg-4 remove-padding">
								<div class="left">
									<a class="banner-effect" href="{{ $img->link }}" target="_blank">
										<img src="{{asset('assets/images/banners/'.$img->photo)}}" alt="">
									</a>
								</div>
							</div>
						@endforeach
					</div>
				@endforeach
			</div>
		</section>
		<!-- Banner Area One Start -->
	@endif

	@if($ps->big == 1)
		<!-- Clothing and Apparel Area Start -->
		<section class="categori-item clothing-and-Apparel-Area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<center><div class="section-top">
							<h2 class="section-title">
								{{ $langg->lang29 }}
							</h2>

						</div></center>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9">
						<div class="row">
							@foreach($big_products as $prod)
								@include('includes.product.home-product')
							@endforeach



						</div>
					</div>
					<div class="col-lg-3 remove-padding d-none d-lg-block">
						<div class="aside">
							<a class="banner-effect mb-10" href="{{ $ps->big_save_banner_link }}">
								<img src="{{asset('assets/images/'.$ps->big_save_banner)}}" alt="">
							</a>
							<a class="banner-effect" href="{{ $ps->big_save_banner_link1 }}">
								<img src="{{asset('assets/images/'.$ps->big_save_banner1)}}" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
		<!-- Clothing and Apparel Area start-->
	@endif

	@if($ps->hot_sale == 1)
		<!-- hot-and-new-item Area Start -->
		<section class="hot-and-new-item">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="accessories-slider">
							<div class="slide-item">
								<div class="row">
									<div class="col-lg-3 col-sm-6">
										<div class="categori">
											<div class="section-top">
												<h2 class="section-title">
													{{ $langg->lang30 }}
												</h2>
											</div>
											<div class="hot-and-new-item-slider">
												@foreach($hot_products->chunk(3) as $chunk)
													<div class="item-slide">
														<ul class="item-list">
															@foreach($chunk as $prod)
																@include('includes.product.list-product')
															@endforeach
														</ul>
													</div>
												@endforeach
											</div>

										</div>
									</div>
									<div class="col-lg-3 col-sm-6">
										<div class="categori">
											<div class="section-top">
												<h2 class="section-title">
													{{ $langg->lang31 }}
												</h2>
											</div>

											<div class="hot-and-new-item-slider">

												@foreach($latest_products->chunk(3) as $chunk)
													<div class="item-slide">
														<ul class="item-list">
															@foreach($chunk as $prod)
																@include('includes.product.list-product')
															@endforeach
														</ul>
													</div>
												@endforeach

											</div>
										</div>
									</div>
									<div class="col-lg-3 col-sm-6">
										<div class="categori">
											<div class="section-top">
												<h2 class="section-title">
													{{ $langg->lang32 }}
												</h2>
											</div>


											<div class="hot-and-new-item-slider">

												@foreach($trending_products->chunk(3) as $chunk)
													<div class="item-slide">
														<ul class="item-list">
															@foreach($chunk as $prod)
																@include('includes.product.list-product')
															@endforeach
														</ul>
													</div>
												@endforeach

											</div>

										</div>
									</div>
									<div class="col-lg-3 col-sm-6">
										<div class="categori">
											<div class="section-top">
												<h2 class="section-title">
													{{ $langg->lang33 }}
												</h2>
											</div>

											<div class="hot-and-new-item-slider">

												@foreach($sale_products->chunk(3) as $chunk)
													<div class="item-slide">
														<ul class="item-list">
															@foreach($chunk as $prod)
																@include('includes.product.list-product')
															@endforeach
														</ul>
													</div>
												@endforeach

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Clothing and Apparel Area start-->
	@endif

	@if($ps->review_blog == 1)
		<!-- Blog Area Start -->
		<section class="blog-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="aside">
							<div class="slider-wrapper">
								<div class="aside-review-slider">
									@foreach($reviews as $review)
										<div class="slide-item">
											<div class="top-area">
												<div class="left">
													<img src="{{ $review->photo ? asset('assets/images/reviews/'.$review->photo) : asset('assets/images/noimage.png') }}" alt="">
												</div>
												<div class="right">
													<div class="content">
														<h4 class="name">{{ $review->title }}</h4>
														<p class="dagenation">{{ $review->subtitle }}</p>
													</div>
												</div>
											</div>
											<blockquote class="review-text">
												<p>
													{!! $review->details !!}
												</p>
											</blockquote>
										</div>
									@endforeach


								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						@foreach(DB::table('blogs')->orderby('views','desc')->take(2)->get() as $blogg)

							<div class="blog-box">
								<div class="blog-images">
									<div class="img">
										<img src="{{ $blogg->photo ? asset('assets/images/blogs/'.$blogg->photo):asset('assets/images/noimage.png') }}" class="img-fluid" alt="">
										<div class="date d-flex justify-content-center">
											<div class="box align-self-center">
												<p>{{date('d', strtotime($blogg->created_at))}}</p>
												<p>{{date('M', strtotime($blogg->created_at))}}</p>
											</div>
										</div>
									</div>

								</div>
								<div class="details">
									<a href='{{route('front.blogshow',$blogg->id)}}'>
										<h4 class="blog-title">
											{{mb_strlen($blogg->title,'utf-8') > 40 ? mb_substr($blogg->title,0,40,'utf-8')."...":$blogg->title}}
										</h4>
									</a>
									<p class="blog-text">
										{{substr(strip_tags($blogg->details),0,170)}}
									</p>
									<a class="read-more-btn" href="{{route('front.blogshow',$blogg->id)}}">{{ $langg->lang34 }}</a>
								</div>
							</div>

						@endforeach

					</div>
				</div>
			</div>
		</section>
		<!-- Blog Area start-->
	@endif

		<!-- Banner Area One Start -->
		<section class="trending">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<center><div class="section-top">
							<h2 class="section-title">
								{{ $langg->lang30 }}
							</h2>
						</div></center>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<div class="trending-item-slider">
				@foreach($bottom_small_banners->chunk(3) as $chunk)
						@foreach($chunk as $img)
									<a class="banner-effect" href="{{ url('/offers',['id' => $img->id ])}}" target="_blank">
										<img src="{{asset('assets/images/banners/'.$img->photo)}}" alt="">
									</a>
									&nbsp;
						@endforeach
				@endforeach
						</div>
					</div>
						
				</div>
			</div>
		</section>
		<!-- Banner Area One Start -->

	


		<!-- Banner Area One Start -->
		<section  class="trending">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 ">
						<center><div class="section-top">
							<h2 class="section-title">
								@if(Session::get('language') == '1' )  Hair Care  @else العنايه بالشعر  @endif
							</h2>
						</div></center>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<div class="trending-item-slider">
							@foreach($hair_products as $prod)
								@include('includes.product.slider-product')
							@endforeach
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- Banner Area One Start -->
		<section  class="trending">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 ">
						<center><div class="section-top">
							<h2 class="section-title">
								@if(Session::get('language') == '1' )  Skin Care @else العنايه بالبشره  @endif
							</h2>
						</div></center>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<div class="trending-item-slider">
							@foreach($skin_products as $prod)
								@include('includes.product.slider-product')
							@endforeach
						</div>
					</div>

				</div>
			</div>
		</section>

		<section  class="trending">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 ">
						<center><div class="section-top">
							<h2 class="section-title">
								@if(Session::get('language') == '1' )  MakeUp & Beauty @else  المكياج و الجمال  @endif
							</h2>
						</div></center>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 remove-padding">
						<div class="trending-item-slider">
							@foreach($makeup_products as $prod)
								@include('includes.product.slider-product')
							@endforeach
						</div>
					</div>

				</div>
			</div>
		</section>
		
		
		<!--<div class="col-lg-12" style="background: #ED64A5 0% 0% no-repeat padding-box;opacity: 1;">-->
			
  <!--      		<div class="row ">-->
  <!--      			<div class="col-lg-1">-->
		<!--			</div>-->
  <!--      			<div class="col-lg-6">-->
		<!--				<h2 style="       font: normal normal bold 30px/70px Tajawal;-->
  <!--  letter-spacing: 0px;-->
  <!--  color: #FFFFFF;-->
  <!--  opacity: 1;-->
  <!--  text-align: center; ">@if(Session::get('language') == '2')  حمل تطبيق صيدليات وردى  @else Download Wardi Pharmacy App @endif</h2>-->
		<!--				<h3 style="     letter-spacing: 0px;-->
  <!--  color: #FFFFFF;-->
  <!--  opacity: 1;-->
  <!--  font-family: 'Tajawal';-->
  <!--  line-height: 1.5;-->
  <!--  text-align: center;-->
  <!--  font-size: 21px;"> @if(Session::get('language') == '2') الآن يمكنك طلب وجدولة كل احتياجاتك من الأدوية ومستحضرات التجميل ومنتجات العناية الشخصية لتصلك على عنوانك من أقرب صيدلية في منطقتك.  @else Now you can get personal care cosmetics at your address from the nearest pharmacy in your area. @endif</h3>-->

		<!--				<br>-->
		<!--					<br>-->
		<!--				<div style="top: 12730px;left: 1500px;width: 82%;height: 94px;">-->
		<!--					<a href="#" >-->
		<!--						<img src="{{asset('assets/images/mod.png')}}" alt="" style="width: 40%;height: 55px;">-->
		<!--					</a>-->
							
		<!--					<a href="#" >-->
		<!--						<img src="{{asset('assets/images/mod2.png')}}" alt="" style="width: 40%;height: 55px;">-->
		<!--					</a>-->
		<!--				</div>-->
					
						
		<!--			</div>-->
		<!--			<div class="col-lg-1">-->
		<!--			</div>-->
		<!--			<div class="col-lg-3">-->
		<!--				<div class="footer-logo">-->
		<!--					<a href="#" class="logo-link">-->
							
		<!--					<img class="imgwr d-none d-md-block" src="{{asset('assets/images/mobile-mockup.png')}}" alt="" width="200">-->
					
		<!--					</a>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--			<div class="col-lg-1">-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--	<br>-->
		<!--	<br>-->
		<!--	<br>-->
	<!-- main -->
	
	@if($ps->partners == 1)
		<!-- Partners Area Start -->
		<section class="trending">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<center><div class="section-top">
							<h2 class="section-title">
								{{ $langg->lang236 }}
							</h2>
						</div></center>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="partner-slider">
							@foreach($partners as $data)
								<div class="item-slide">
									<a href="{{ $data->link }}" target="_blank">
							
										<img src="{{asset('assets/images/partner/'.$data->photo)}}" alt="">
									</a>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<br>
		<br>
		<!-- Partners Area Start -->
	@endif
	
	
	<script src="{{asset('assets/front/js/mainextra.js')}}"></script>