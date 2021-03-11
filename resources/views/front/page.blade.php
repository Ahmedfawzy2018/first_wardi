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
          <li>
            <a href="{{ route('front.page',$page->slug) }}">
              @if(Session::get('language') == '1') {{ $page->slug }} @else {{ $page->title }} @endif
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Area End -->



<section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="about-info">
            <center><div class="section-top">
                <h2 class="section-title" style="font-family: 'Tajawal'">
              @if(Session::get('language') == '1') {{ $page->slug }} @else {{ $page->title }} @endif
                </h2>
            </div></center>
            <p style="font-family: 'Tajawal'">
              {!! $page->detailsLang() !!}
            </p>

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection