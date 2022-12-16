@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link rel='stylesheet'  href='{{asset('frontend/css/owl.carousel.min.css')}}' type='text/css' />
<link rel='stylesheet'  href='{{asset('frontend/css/owl.theme.default.min.css')}}' type='text/css' />
@endsection
@section('js')
<script type='text/javascript' src='{{asset('frontend/js/owl.carousel.min.js')}}'></script>
<script>
   $('.home-banner').owlCarousel({
   loop:true,
   margin:10,
   nav:false,
   dots:false,
   autoplay:true,
   responsive:{
      0:{
            items:1
      },
      600:{
            items:1
      },
      1000:{
            items:1
      }
   }
   })
</script>
@endsection
@section('content')
<main id="main" class="">
   <div class="portfolio-page-wrapper portfolio-single-page">
      <div class="page-title portfolio-featured-title featured-title no-overflow">
         <div class="page-title-bg fill">
            <div class="title-bg fill bg-fill" style="background-image: url('');" data-parallax-container=".page-title" data-parallax="-2" data-parallax-background></div>
            <div class="title-overlay fill" style="background-color: rgba(0,0,0,.6)"></div>
         </div>
         <div class="page-title-inner container  flex-row  dark">
            <div class="flex-col flex-center text-center">
               <h1 class="entry-title is-xlarge uppercase">{{languageName($product->name)}}</h1>
            </div>
         </div>
      </div>
      <div class="portfolio-top">
         <div class="page-wrapper row">
            <div id="content" class="large-9 left col col-divided" role="main">
               <div class="page-inner">
                  <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_16166">
                     <div class="owl-carousel owl-theme home-banner">
                        @foreach ($imgs as $img)
                        <p class="mau_web"><img src="{{$img}}"></p>
                        @endforeach
                     </div>
                     <style scope="scope">
                     </style>
                  </div>
                  <div class="container section-title-container" style="margin-top:20px;">
                     <h3 class="section-title section-title-normal"><span class="section-title-main" style="font-size:92%;"><i class="icon-search" ></i>Thông tin chi tiết dự án</span></h3>
                  </div>
                  <h1 class="entry-title is-xlarge uppercase">{{languageName($product->name)}}</h1>
                  <!-- .section-title -->
                  {!!languageName($product->content)!!}
               </div>
               <!-- .page-inner -->
            </div>
            <!-- .#content large-9 left -->
            <div class="large-3 col">
               <div id="secondary" class="widget-area " role="complementary">
                  <aside id="block_widget-3" class="widget block_widget">
                  <div class="slider-wrapper relative" id="slider-1352373194" >
                     <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                        data-flickity-options='{
                        "cellAlign": "center",
                        "imagesLoaded": true,
                        "lazyLoad": 1,
                        "freeScroll": false,
                        "wrapAround": true,
                        "autoPlay": 6000,
                        "pauseAutoPlayOnHover" : true,
                        "prevNextButtons": false,
                        "contain" : true,
                        "adaptiveHeight" : true,
                        "dragThreshold" : 10,
                        "percentPosition": true,
                        "pageDots": false,
                        "rightToLeft": false,
                        "draggable": true,
                        "selectedAttraction": 0.1,
                        "parallax" : 0,
                        "friction": 0.6        }'
                        >
                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1058409493">
                           <div class="img-inner dark" >
                           <img width="480" height="361" src="{{url('frontend/images/56.png')}}" class="attachment-large size-large" alt="" loading="lazy" />						
                           </div>
                           <style scope="scope">
                           #image_1058409493 {
                           width: 100%;
                           }
                           </style>
                        </div>
                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2127263472">
                           <div class="img-inner dark" >
                           <img width="480" height="361" src="{{url('frontend/images/R57I.png')}}" class="attachment-large size-large" alt="" loading="lazy" />						
                           </div>
                           <style scope="scope">
                           #image_2127263472 {
                           width: 100%;
                           }
                           </style>
                        </div>
                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1926486446">
                           <div class="img-inner dark" >
                           <img width="480" height="361" src="{{url('frontend/images/TKK.png')}}" class="attachment-large size-large" alt="" loading="lazy" />						
                           </div>
                           <style scope="scope">
                           #image_1926486446 {
                           width: 100%;
                           }
                           </style>
                        </div>
                     </div>
                     <div class="loading-spin dark large centered"></div>
                     <style scope="scope">
                     </style>
                  </div>
                  </aside>
                  <aside id="tuyendung_widget-3" class="widget tuyendung_widget">
                  <span class="widget-title "><span>Dự án nổi bật</span></span>
                  <div class="is-divider small"></div>
                  <div class="tuyendung_widget_wrap">
                     <table class="table table-striped locnhoo">
                        <tbody>
                           @foreach ($hotProduct as $product)
                           <tr>
                           <td><i class="icon-angle-right" style=" margin-right: 10px; "></i><a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" title="{{languageName($product->name)}}"> {{languageName($product->name)}}</a></td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
                  </aside>
                  <aside id="block_widget-2" class="widget block_widget">
                  <span class="widget-title "><span>Lĩnh vực hoạt động</span></span>
                  <div class="is-divider small"></div>
                  <ul class="menu-right">
                     @foreach ($servicehome as $service)
                     <li><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}"><span class="arrow"></span> {{$service->name}}</a></li>
                     @endforeach
                  </ul>
                  </aside>
               </div>
            </div>
            <!-- .large-3 -->
         </div>
         <!-- .row -->
      </div>
      <!-- .portfolio-top -->
   </div>
</main>
@endsection