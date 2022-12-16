@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
<script>
   $('#portfolio-865934645 .filter-nav li').click(function(e) {
      e.preventDefault();
      $('#portfolio-865934645 .filter-nav li').removeClass('active');
      $(this).addClass('active');
      var id = $(this).children().data('filter');
      var url = $(this).data('url');
      // console.log(url);
      $.ajax({
         type: 'post',
         url: url,
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {id:id},
         success: function(data){
            $('#portfolio-865934645 .row-isotope').html(data.html);
         }
      })
   })
</script>
@endsection
@section('content')
<main id="main" class="">
   <div class="portfolio-page-wrapper portfolio-archive page-featured-item">
      <div class="page-title portfolio-featured-title featured-title no-overflow">
         <div class="page-title-bg">
            <div class="title-bg fill bg-fill" data-parallax-container=".page-title" data-parallax-background  data-parallax="-4"
               >
            </div>
            <div class="title-overlay fill" style="background-color: rgba(0,0,0,.6)"></div>
         </div>
         <div class="page-title-inner container  flex-row  dark">
            <div class="flex-col flex-grow">
            </div>
            <div class="flex-col flex-center text-center" data-parallax="-1" data-parallax-fade="true">
               <h1 class="entry-title is-xlarge uppercase">
                  Dự án			
               </h1>
            </div>
            <div class="flex-col flex-grow text-right">
            </div>
         </div>
      </div>
      <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1580028901">
         <div class="img-inner dark" >
            <img width="1200" height="342" src="https://deltagroup.vn/wp-content/uploads/2017/03/det-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://deltagroup.vn/wp-content/uploads/2017/03/det-1.jpg 1200w, https://deltagroup.vn/wp-content/uploads/2017/03/det-1-768x219.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px" />						
         </div>
         <style scope="scope">
            #image_1580028901 {
            width: 100%;
            }
         </style>
      </div>
      <div id="content" role="main" class="page-wrapper">
         <div id="portfolio-865934645" class="portfolio-element-wrapper has-filtering">
            <div class="container mb-half">
               <ul class="nav nav-center nav-center nav-box nav-uppercase filter-nav">
                  <li class="active" data-url="{{route('listCatePro')}}"><a href="#" data-filter="0">All</a></li>
                  @foreach ($categoryhome as $cate)
                  <li data-url="{{route('listCatePro')}}"><a href="#" data-filter="{{$cate->id}}">{{languageName($cate->name)}}</a></li>
                  @endforeach
               </ul>
            </div>
            <div class="row row-isotope large-columns-4 medium-columns-3 small-columns-2 row-small">
               @foreach ($list as $product)
               @php
                  $img = json_decode($product->images);
               @endphp
               <div class="col" >
                  <div class="col-inner" >
                     <a href="{{route('detailProduct', ['cate'=>$product->cate_slug, 'slug'=>$product->slug])}}" class="plain ">
                        <div class="portfolio-box box has-hover box-shade dark">
                           <div class="box-image" >
                              <div class="image-cover" style="padding-top:100%;">
                                 <img width="1200" height="671" src="{{$img[0]}}" class="attachment-medium size-medium" alt="" loading="lazy" srcset="{{$img[0]}} 1200w, {{$img[0]}} 768w" sizes="(max-width: 1200px) 100vw, 1200px" />                                
                                 <div class="shade"></div>
                              </div>
                           </div>
                           <div class="box-text text-center" >
                              <div class="box-text-inner">
                                 <h6 class="uppercase portfolio-box-title">{{languageName($product->name)}}</h6>
                                 <p class="uppercase portfolio-box-category is-xsmall op-6">
                                    <span class="show-on-hover">
                                    {{languageName($product->cate->name)}}</span>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               @endforeach
               {{$list->links()}}
            </div>
         </div>
         <style scope="scope">
         </style>
      </div>
      <!-- #content -->
      <div class="container">
      </div>
   </div>
</main>
@endsection