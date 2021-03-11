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
                    <center><p style="top: 601px;left: 835px;width: 250px;height: 250px;background: transparent url('{{ asset('assets/images/prescription1.png') }}') 0% 0% no-repeat padding-box;opacity: 1;"></p></center>
                    <center><div class="section-top" >
                            <h2 class="section-title" style="">
                                {{ $langg->lang88800 }}
                            </h2>
                        </div></center>

                        <br>
                        <center>
                            <h2 class="section-title" style="">
                                {{ $langg->lang888880 }}
                            </h2></center>
                </div>
                <br>
                <br>
                <br>
                <div class="col-lg-12">
                    <div class="checkout-area mb-0 pb-0">
                        <div class="checkout-process">
                                <ul class="nav"  role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-step1-tab" data-toggle="pill" href="#pills-step1" role="tab" aria-controls="pills-step1" aria-selected="true">
                                        <span>1</span> {{ $langg->lang888888 }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-step2-tab" data-toggle="pill" href="#pills-step2" role="tab" aria-controls="pills-step2" aria-selected="false" >
                                        <span>2</span> {{ $langg->lang888889 }} 
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-step3-tab" data-toggle="pill" href="#pills-step3" role="tab" aria-controls="pills-step3" aria-selected="false">
                                        <span>3</span> {{ $langg->lang8888810 }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                <br>
                <br>
                <br>
                <div class="col-lg-12">
                    <center><h5 style="top: 1640px;left: 416px;width: 1059px;height: 51px;text-align: center;font: normal normal bold 35px/50px Tajawal;letter-spacing: 0px;color: #646464;opacity: 1;">@if(Session::get('language') == '1') You should login first @else يجب عليك تسجيل الدخول اولا  @endif </h5></center>
                    
                </div>

                <br>
                <br>
                <div class="col-lg-12">
                    <select style="top: 1741px;left: 692px;width: 70%;height: 72px;background: transparent url('{{ asset('assets/images/Rectangle 1.svg')}}') 0% 0% no-repeat padding-box;border: 1px solid #D1D1D1;border-radius: 10px;opacity: 1;">
                        <option value="" > @if(Session::get('language') == '1') Shipping Address @else عنوان التوصيل  @endif</option>
                    </select>
                    <button style="top: 1741px;left: 278px;width: 25%;height: 72px;background: transparent url('img/Rectangle 274.png') 0% 0% no-repeat padding-box;border: 1px solid #ED64A5;border-radius: 10px;opacity: 1;"><img src="{{ asset('assets/images/add.png') }}"> @if(Session::get('language') == '1') New Address @else عنوان جديد @endif </button>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Area End-->

@endsection