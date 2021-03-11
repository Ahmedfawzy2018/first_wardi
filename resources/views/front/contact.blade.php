@extends('layouts.front')



@section('content')

<style>
    .bg-contact {
    position: relative !important;
    width: 100%;
    margin-top: 20px;
}
.img-contact {
    position: absolute;
    top: 0;
    left: 50%;
    right: 50%;
    transform: translate(-50%,-50%);
    width: 475px;
}

.bg-h2-contact {
    position: absolute;
    top: 0px;
    left: 50%;
    right: 50%;
    transform: translate(-50%,-50%);
    width: 475px;
    z-index: 999;
}
.form-contact {
    display: block;
    width: 100%;
    padding: 15px;
    border-radius: 4px;
    border: 1px solid #D1D1D1;
    font-family: "Tajawal", sans-serif;
}
.form-contact:focus {
    outline: none;
}
.form-contact::placeholder{
    font-family: "Tajawal", sans-serif;
    font-size: 16px;
}
.btn-contact {
    display: block;
    width: 100%;
    background: #ED64A5;
    color: #fff;
    border: 0;
    border-radius: 4px;
    font-size: 17px;
    padding: 10px;
    font-family: "Tajawal", sans-serif;
} 
</style>


<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="pages">
                    <li>
                        <a href="{{ route('front.index') }}">
                            {{ $langg->lang17 }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.contact') }}">
                            {{ $langg->lang20 }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->


    <!-- Contact Us Area Start -->
    <!--<section class="contact-us">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
                    <!--<div class="contact-section-title" >-->
                    <!--        {!! $ps->contact_title !!}-->
                            
                    <!--</div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row justify-content-between">-->
    <!--            <div class="col-xl-12 col-lg-12 col-md-6">-->
    <!--                <div class="left-area">-->
    <!--                    <div class="contact-form">-->
    <!--                        <div class="gocover" style="background: url({{ asset('assets/images/'.$gs->loader) }}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>-->
    <!--                        <form id="contactform" action="{{route('front.contact.submit')}}" method="POST">-->
    <!--                            {{csrf_field()}}-->
    <!--                                @include('includes.admin.form-both')  -->

    <!--                                <div class="form-input">-->
    <!--                                    <input type="text" name="name" placeholder="{{ $langg->lang47 }} *" required="">-->
    <!--                                    <i class="icofont-user-alt-5"></i>-->
    <!--                                </div>-->
    <!--                                <div class="form-input">-->
    <!--                                        <input type="text" name="phone"  placeholder="{{ $langg->lang48 }} *">-->
				<!--																		<i class="icofont-ui-call"></i>-->
    <!--                                </div>-->
    <!--                                <div class="form-input">-->
    <!--                                        <input type="email" name="email"  placeholder="{{ $langg->lang49 }} *" required="">-->
				<!--																		<i class="icofont-envelope"></i>-->
    <!--                                </div>-->
    <!--                                <div class="form-input">-->
    <!--                                        <textarea name="text" placeholder="{{ $langg->lang50 }} *" required=""></textarea>-->
    <!--                                </div>-->
   
                                    <!-- @if($gs->is_capcha == 1)

    <!--                                <ul class="captcha-area">-->
    <!--                                    <li>-->
    <!--                                        <p><img class="codeimg1" src="{{asset("assets/images/capcha_code.png")}}" alt=""> <i class="fas fa-sync-alt pointer refresh_code"></i></p>-->
                                        
    <!--                                    </li>-->
    <!--                                    <li>-->
    <!--                                            <input name="codes" type="text" class="input-field" placeholder="{{ $langg->lang51 }}" required="">-->
                                                
    <!--                                        </li>-->
    <!--                                </ul>-->

    <!--                                @endif -->


    <!--                                <input type="hidden" name="to" value="{{ $ps->contact_email }}">-->
    <!--                                <button class="submit-btn" type="submit">{{ $langg->lang52 }}</button>-->
    <!--                        </form>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            {{-- <div class="col-xl-4 col-lg-5 col-md-6">-->
    <!--                <div class="right-area">-->

    <!--                    @if($ps->site != null || $ps->email != null )-->
    <!--                    <div class="contact-info ">-->
    <!--                        <div class="left ">-->
    <!--                                <div class="icon">-->
    <!--                                        <i class="icofont-email"></i>-->
    <!--                                </div>-->
    <!--                        </div>-->
    <!--                        <div class="content d-flex align-self-center">-->
    <!--                            <div class="content">-->
    <!--                                    @if($ps->site != null && $ps->email != null) -->
    <!--                                    <a href="{{$ps->site}}" target="_blank">{{$ps->site}}</a>-->
    <!--                                    <a href="mailto:{{$ps->email}}">{{$ps->email}}</a>-->
    <!--                                    @elseif($ps->site != null)-->
    <!--                                    <a href="{{$ps->site}}" target="_blank">{{$ps->site}}</a>-->
    <!--                                    @else-->
    <!--                                    <a href="mailto:{{$ps->email}}">{{$ps->email}}</a>-->
    <!--                                    @endif-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    @endif-->
    <!--                    @if($ps->street != null) -->
    <!--                    <div class="contact-info">-->
    <!--                            <div class="left">-->
    <!--                                    <div class="icon">-->
    <!--                                            <i class="icofont-google-map"></i>-->
    <!--                                    </div>-->
    <!--                            </div>-->
    <!--                            <div class="content d-flex align-self-center">-->
    <!--                                <div class="content">-->
    <!--                                        <p>-->
    <!--                                            @if($ps->street != null) -->
    <!--                                                {!! $ps->street !!}-->
    <!--                                            @endif-->
    <!--                                        </p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    @endif-->
    <!--                    @if($ps->phone != null || $ps->fax != null ) -->
    <!--                        <div class="contact-info">-->
    <!--                                <div class="left">-->
    <!--                                        <div class="icon">-->
    <!--                                                <i class="icofont-smart-phone"></i>-->
    <!--                                        </div>-->
    <!--                                </div>-->
    <!--                                <div class="content d-flex align-self-center">-->
    <!--                                    <div class="content">-->
    <!--                                        @if($ps->phone != null && $ps->fax != null)-->
    <!--                                        <a href="tel:{{$ps->phone}}">{{$ps->phone}}</a>-->
    <!--                                        <a href="tel:{{$ps->fax}}">{{$ps->fax}}</a>-->
    <!--                                        @elseif($ps->phone != null)-->
    <!--                                        <a href="tel:{{$ps->phone}}">{{$ps->phone}}</a>-->
    <!--                                        @else-->
    <!--                                        <a href="tel:{{$ps->fax}}">{{$ps->fax}}</a>-->
    <!--                                        @endif-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                    @endif-->


    <!--                            <div class="social-links">-->
    <!--                                <h4 class="title">{{ $langg->lang53 }} :</h4>-->
    <!--                                <ul>-->

    <!--                                 @if(App\Models\Socialsetting::find(1)->f_status == 1)-->
    <!--                                  <li>-->
    <!--                                    <a href="{{ App\Models\Socialsetting::find(1)->facebook }}" class="facebook" target="_blank">-->
    <!--                                        <i class="fab fa-facebook-f"></i>-->
    <!--                                    </a>-->
    <!--                                  </li>-->
    <!--                                  @endif-->

    <!--                                  @if(App\Models\Socialsetting::find(1)->g_status == 1)-->
    <!--                                  <li>-->
    <!--                                    <a href="{{ App\Models\Socialsetting::find(1)->gplus }}" class="google-plus" target="_blank">-->
    <!--                                        <i class="fab fa-google-plus-g"></i>-->
    <!--                                    </a>-->
    <!--                                  </li>-->
    <!--                                  @endif-->

    <!--                                  @if(App\Models\Socialsetting::find(1)->t_status == 1)-->
    <!--                                  <li>-->
    <!--                                    <a href="{{ App\Models\Socialsetting::find(1)->twitter }}" class="twitter" target="_blank">-->
    <!--                                        <i class="fab fa-twitter"></i>-->
    <!--                                    </a>-->
    <!--                                  </li>-->
    <!--                                  @endif-->

    <!--                                  @if(App\Models\Socialsetting::find(1)->l_status == 1)-->
    <!--                                  <li>-->
    <!--                                    <a href="{{ App\Models\Socialsetting::find(1)->linkedin }}" class="linkedin" target="_blank">-->
    <!--                                        <i class="fab fa-linkedin-in"></i>-->
    <!--                                    </a>-->
    <!--                                  </li>-->
    <!--                                  @endif-->

    <!--                                  @if(App\Models\Socialsetting::find(1)->d_status == 1)-->
    <!--                                  <li>-->
    <!--                                    <a href="{{ App\Models\Socialsetting::find(1)->dribble }}" class="dribbble" target="_blank">-->
    <!--                                        <i class="fab fa-dribbble"></i>-->
    <!--                                    </a>-->
    <!--                                  </li>-->
    <!--                                  @endif-->

    <!--                                    </ul>-->
    <!--                            </div>-->
    <!--                </div>-->
    <!--            </div> --}}-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- Contact Us Area End -->
    
    
    <!--  new contact -->
    
    <div class="container text-center px-0 my-5">
    <div class="row mx-0">
        <div class="col-10 mx-auto text-center mb-4">
            <img src="{{asset('assets/images/contact.png')}}" width="150" height="150" alt="contact us">
        </div>
       
         <div class="col-lg-12 ">
						<center><div class="section-top">
							<h2 class="section-title">
								{{ $langg->lang20 }}
							</h2>
						</div></center>
					</div>
    </div>
    <div class="row mx-0 ">
        <div class="col-10 mx-auto 5">
                  <form id="contactform" action="{{route('front.contact.submit')}}" class="mt-5" method="POST">
            {{csrf_field()}}
            @include('includes.admin.form-both')

                <div>
                    <input type="text" class="form-contact text-right" name="name" placeholder="{{ $langg->lang47 }}">
                </div>
                <div class="mt-4">
                    <input type="email" class="form-contact text-right" name="email"  placeholder="{{ $langg->lang49 }} ">
                </div>
                <div class="mt-4">
                    <input type="text" class="form-contact text-right" name="phone"  placeholder="{{ $langg->lang48 }}">
                </div>
                <div class="mt-4">
                    <textarea name="text" class="form-contact text-right" cols="30" rows="8" placeholder="{{ $langg->lang50 }}"></textarea>
                </div>

                <button class="mt-4 btn-contact" type="submit">{{ $langg->lang52 }}</button>
            </form>
        </div>
    </div>
</div>

    <!--end new contact -->

@endsection