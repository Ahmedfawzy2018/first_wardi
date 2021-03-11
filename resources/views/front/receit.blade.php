@extends('layouts.front')


@section('content')

    <style type="text/css">
        .area-new {
            border: 1px solid #ddd;
        }

        .area-new:focus {
            outline: none;
        }

        .area-new::placeholder {
            font-size: 18px;
            color: #888;
            font-weight: 400
        }

        .w-25-inp {
            width: 25% !important;
        }

        .w-75-inp {
            width: 73% !important;
        }

        .true-inp {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 6px
        }

        .btn-inp {
            background: #ed64a5;
            border: 0;
            color: #fff;
            width: 100%;
            padding: 17px;
            font-size: 20px;
            border-radius: 6px;
        }

        .btn-inp:focus {
            outline: none
        }
        .li-new {
            line-height: 5 ;
        }

        @media only screen and (max-width: 900px) {
            .checkout-area .checkout-process ul{
                display: flex !important;
            }
            .checkout-area .checkout-process li a {
                width: 120px !important;
            }
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

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->


    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                    <center>
                        <p
                            style="top: 601px;left: 835px;width: 250px;height: 250px;background: transparent url('{{ asset('assets/images/prescription1.png') }}') 0% 0% no-repeat padding-box;opacity: 1;">
                        </p>
                    </center>
                    <center>
                        <div class="section-top">
                            <h2 class="section-title" style="font-family: 'tajawal';">
                                @if(Session::get('language') == '1')  Prescription @else الروشته   @endif
                            </h2>
                        </div>
                    </center>

                    <br>
                    <center>
                        <h4 class="section-title" style="font-family: 'tajawal';">
                            @if(Session::get('language') == '1') Fill your data and will contact you @else  املأ بياناتك وسيتم التواصل معك   @endif
                        </h4>
                    </center>
                </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-12 col-lg-12 col-md-6">
                    <div class="left-area">
                        <div class="contact-form">
                            
                            <form id="contactform" action="{{route('front.preception.submit')}}" method="POST">
                                {{csrf_field()}}
                                    @include('includes.admin.form-both')  

                                    <div class="form-input">
                                        <input type="text" name="name" placeholder="{{ $langg->lang47 }} *" required="">
                                        <i class="icofont-user-alt-5"></i>
                                    </div>
                                    <div class="form-input">
                                            <input type="text" name="phone"  placeholder="{{ $langg->lang48 }} *" required>
                                                                                        <i class="icofont-ui-call"></i>
                                    </div>
                                    <div class="form-input">
                                            <input type="email" name="email"  placeholder="{{ $langg->lang49 }} *" required>
                                                                                        <i class="icofont-envelope"></i>
                                    </div>
                                    <div class="form-input">
                                            <input type="text" name="address"  placeholder="{{ $langg->lang155 }} *" required>
                                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="form-input">
                                            <textarea name="text" placeholder="{{ $langg->lang50 }} *" ></textarea>
                                    </div>
                                    <div  style="top: 1873px;left: 278px;width: 100%;height: 264px;background: transparent url('{{ asset('assets/images/logo.png') }}') 0% 0% no-repeat padding-box;border: 1px dashed #D1D1D1;border-radius: 10px;opacity: 1;">
                                       <center> <input type="file" name="photo"  id="image-upload" style="top: 1985px;
left: 694px;
width: 487px;
height: 41px;
background: transparent url('{{ asset('assets/images/اضف صورة الروشته او المنتج الذى تريده.svg') }}') 0% 0% no-repeat padding-box;
opacity: 1;"></center>
                                  
                                    </div>
                                    <br>
                                    
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
