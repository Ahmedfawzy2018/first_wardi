@extends('layouts.front')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <ul class="pages">
               <li>
                  <a href="{{route('front.index')}}">{{ $langg->lang17 }}</a>
               </li>
               <!-- @if (!empty($cat))
               <li>
                  <a href="{{route('front.category', $cat->slug)}}">{{ $cat->nameLang() }}</a>
               </li>
               @endif
               @if (!empty($subcat))
               <li>
                  <a href="{{route('front.category', [$cat->slug, $subcat->slug])}}">{{ $subcat->nameLang() }}</a>
               </li>
               @endif
               @if (!empty($childcat))
               <li>
                  <a href="{{route('front.category', [$cat->slug, $subcat->slug, $childcat->slug])}}">{{ $childcat->nameLang() }}</a>
               </li>
               @endif
               @if (empty($childcat) && empty($subcat) && empty($cat))
               <li>
                  <a href="{{route('front.category')}}">{{ $langg->lang36 }}</a>
               </li>
               @endif -->

            </ul>
         </div>
      </div>
   </div>
</div>
<!-- Breadcrumb Area End -->
<!-- SubCategori Area Start -->
<section class="sub-categori">
   <div class="container">
      <div class="row">
        <!--  @include('includes.catalog') -->
         <div class="col-lg-12 ">
            <div class="right-area" id="app">

               <!-- @include('includes.filter') -->
               <div class="categori-item-area">
                 <div class="row" id="ajaxContent">
                   @include('includes.product.filtered-products2')
                 </div>
                 <div id="ajaxLoader" class="ajax-loader" style="background: url({{asset('assets/images/'.$gs->loader)}}) no-repeat scroll center center rgba(0,0,0,.6);"></div>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>
<!-- SubCategori Area End -->
@endsection
