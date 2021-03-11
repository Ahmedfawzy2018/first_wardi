@extends('layouts.front')


@section('content')

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
                    
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->

 <!-- Contact Us Area Start -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <center><div class="section-top">
                            <h2 class="section-title" style="">
                                {{ $langg->lang531 }}
                            </h2>
                        </div></center>
                    <div class="com-heading">
                            <p class="text">
                                    {{ $langg->lang532 }}
                            </p>
                        </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-12 col-lg-12 col-md-6">
                    <div class="left-area">
                        <div class="contact-form">
                            <form id="contactform" action="{{route('front.pharmcy.submit')}}" method="POST">
                                {{csrf_field()}}
                                    @include('includes.admin.form-both')  

                                <div class="row clearfix">
                                    <div class="col-lg-6">
                                        <div class="form-input">
                                            <input type="text" name="name" placeholder="{{ $langg->lang47 }} *" required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-input">
                                            <input type="text" name="pname" placeholder="@if($langg->rtl == "1") اسم الصيدليه  @else Pharmacy Name @endif *" required="">
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-input">
                                        <input type="text" name="address" placeholder="@if($langg->rtl == "1") عنوان الصيديليه @else Pharmacy Address @endif *" required="">
                                    </div>

                                    <div class="form-input">
                                            <input type="text" name="phone"  placeholder="{{ $langg->lang48 }} *" required>
                                    </div>
                                    <div class="form-input">
                                            <input type="email" name="email"  placeholder="{{ $langg->lang49 }} *" required="">
                                    </div>
                                    


                                    <input type="hidden" name="to" value="{{ $ps->contact_email }}">
                                    <button class="submit-btn" type="submit">{{ $langg->lang52 }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Contact Us Area End-->

@endsection