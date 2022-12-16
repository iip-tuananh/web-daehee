@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
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
   <div id="content" role="main" class="content-area">
      <div class="banner has-hover has-video is-full-height">
         <div class="banner-inner owl-carousel owl-theme home-banner">
            @foreach ($banners as $banner)
               <div class="banner-bg" >
                  <img src="{{$banner->image}}" alt="banner">
               </div>
            @endforeach
         </div>
      </div>
      <section class="section" id="section_1813782232">
         <div class="bg section-bg fill bg-fill  bg-loaded" >
         </div>
         <div class="section-content relative">
         <div class="row"  id="row-731532712">
               <div class="col small-12 large-12"  >
                  <div class="col-inner"  >
                     <h3 style="text-align: center; text-transform:uppercase;"><span style="font-size: 160%;">Lĩnh vực hoạt động </span></h3>
                     <p style="text-align: center;">Công trình của công ty thực hiện trên khắp cả nước luôn là những công trình nổi bật, phức tạp, đòi hỏi công nghệ xây dựng cập nhật nhất hiện nay.</p>
                  </div>
               </div>
         </div>
         <div class="row row-small"  id="row-1707601186">
            @foreach ($servicehome as $service)
            <div class="col medium-6 small-12 large-6"  >
               <div class="col-inner"  >
                  <div class="banner has-hover hover12" id="banner-1246011188">
                  <div class="banner-inner fill">
                        <div class="banner-bg fill" >
                           <div class="bg fill bg-fill " style="background-image: url({{$service->image}});"></div>
                        </div>
                        <div class="banner-layers container">
                           <a class="fill" href="{{route('serviceDetail', ['slug'=>$service->slug])}}"  >
                              <div class="fill banner-link"></div>
                           </a>
                           <div id="text-box-879394954" class="text-box banner-layer x50 md-x50 lg-x50 y95 md-y95 lg-y95 res-text">
                              <div class="text dark">
                              <div class="text-inner text-center">
                                    <h2 style="text-align: center;text-transform:uppercase"><span style="font-size: 100%;">{{$service->name}}</span></h2>
                              </div>
                              </div>
                              <style scope="scope">
                              #text-box-879394954 {
                              width: 100%;
                              }
                              #text-box-879394954 .text {
                              font-size: 100%;
                              }
                              </style>
                           </div>
                        </div>
                  </div>
                  <style scope="scope">
                        #banner-1246011188 {
                        padding-top: 361px;
                        }
                        #banner-1246011188 .bg {
                        background-position: 31% 98%;
                        }
                  </style>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
         </div>
         <style scope="scope">
         #section_1813782232 {
         padding-top: 80px;
         padding-bottom: 80px;
         background-color: rgb(238, 238, 238);
         }
         </style>
      </section>
      <section class="section has-parallax" id="section_675738257">
         <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background data-parallax="-6">
         </div>
         <div class="section-content relative">
         <div class="row"  id="row-803199395">
               <div class="col small-12 large-12"  >
                  <div class="col-inner"  >
                     <div class="row"  id="row-816068474">
                     <div class="col small-12 large-12"  >
                           <div class="col-inner"  >
                              <h3 style="text-align: center;text-transform:uppercase"><span style="font-size: 160%;" data-line-height="m">Những dự án nổi bật</span></h3>
                              <p style="text-align: center;">Công trình của công ty thực hiện trên khắp cả nước luôn là những công trình nổi bật, phức tạp, đòi hỏi công nghệ xây dựng cập nhật nhất hiện nay.</p>
                           </div>
                     </div>
                     </div>
                     <div class="banner-grid-wrapper">
                     <div id="banner-grid-238497033" class="banner-grid row row-grid row-small" data-packery-options="">
                        @foreach ($homeProduct as $key=>$arr)
                           @if ($key % 2 == 0)
                           @foreach ($arr as $key=>$product)
                           @php
                              $img = json_decode($product['images']);
                           @endphp
                              @if ($key%2==0)
                                 <div class="col grid-col large-8 grid-col-1-2" >
                                    <div class="col-inner">
                                       <div class="banner has-hover" id="banner-227730913">
                                       <div class="banner-inner fill">
                                             <div class="banner-bg fill" >
                                                <div class="bg fill bg-fill "></div>
                                                <div class="overlay"></div>
                                                <div class="is-border"
                                                   style="border-width:3px 3px 3px 3px;margin:12px 12px 12px 12px;">
                                                </div>
                                             </div>
                                             <div class="banner-layers container">
                                                <a class="fill" href="{{route('detailProduct', ['cate'=>$product['cate_slug'], 'slug'=>$product['slug']])}}"  >
                                                   <div class="fill banner-link"></div>
                                                </a>
                                                <div id="text-box-689043007" class="text-box banner-layer x5 md-x0 lg-x0 y95 md-y95 lg-y95 res-text">
                                                   <div class="text dark">
                                                   <div class="text-inner text-center">
                                                         <p><span style="font-size: 200%;">{{languageName($product['name'])}}</span></p>
                                                   </div>
                                                   </div>
                                                   <style scope="scope">
                                                   #text-box-689043007 {
                                                   width: 88%;
                                                   }
                                                   #text-box-689043007 .text {
                                                   font-size: 100%;
                                                   }
                                                   @media (min-width:550px) {
                                                   #text-box-689043007 {
                                                   width: 44%;
                                                   }
                                                   }
                                                   </style>
                                                </div>
                                             </div>
                                       </div>
                                       <style scope="scope">
                                             #banner-227730913 {
                                             padding-top: 500px;
                                             }
                                             #banner-227730913 .bg.bg-loaded {
                                             background-image: url({{$img[0]}});
                                             }
                                             #banner-227730913 .overlay {
                                             background-color: rgba(0, 0, 0, 0.34);
                                             }
                                             #banner-227730913 .bg {
                                             background-position: 36% 26%;
                                             }
                                       </style>
                                       </div>
                                    </div>
                                 </div>
                              @else
                                 <div class="col grid-col large-4 grid-col-1-2" >
                                    <div class="col-inner">
                                       <div class="banner has-hover" id="banner-1901663180">
                                       <div class="banner-inner fill">
                                             <div class="banner-bg fill" >
                                                <div class="bg fill bg-fill "></div>
                                                <div class="overlay"></div>
                                                <div class="is-border"
                                                   style="border-width:3px 3px 3px 3px;margin:12px 12px 12px 12px;">
                                                </div>
                                             </div>
                                             <div class="banner-layers container">
                                                <a class="fill" href="{{route('detailProduct', ['cate'=>$product['cate_slug'], 'slug'=>$product['slug']])}}"  >
                                                   <div class="fill banner-link"></div>
                                                </a>
                                                <div id="text-box-1915615124" class="text-box banner-layer x5 md-x5 lg-x5 y95 md-y95 lg-y95 res-text">
                                                   <div class="text dark">
                                                   <div class="text-inner text-center">
                                                         <p><span style="font-size: 200%;">{{languageName($product['name'])}} </span></p>
                                                   </div>
                                                   </div>
                                                   <style scope="scope">
                                                   #text-box-1915615124 {
                                                   width: 90%;
                                                   }
                                                   #text-box-1915615124 .text {
                                                   font-size: 100%;
                                                   }
                                                   @media (min-width:550px) {
                                                   #text-box-1915615124 {
                                                   width: 60%;
                                                   }
                                                   }
                                                   </style>
                                                </div>
                                             </div>
                                       </div>
                                       <style scope="scope">
                                             #banner-1901663180 {
                                             padding-top: 500px;
                                             }
                                             #banner-1901663180 .bg.bg-loaded {
                                             background-image: url({{$img[0]}});
                                             }
                                             #banner-1901663180 .overlay {
                                             background-color: rgba(0, 0, 0, 0.34);
                                             }
                                             #banner-1901663180 .bg {
                                             background-position: 15% 0%;
                                             }
                                       </style>
                                       </div>
                                    </div>
                                 </div>
                              @endif
                           @endforeach
                           @else
                           @foreach ($arr as $key=>$product)
                           @php
                              $img = json_decode($product['images']);
                           @endphp
                              @if ($key%2==0)
                                 <div class="col grid-col large-4 grid-col-1-2" >
                                    <div class="col-inner">
                                       <div class="banner has-hover" id="banner-1868809937">
                                       <div class="banner-inner fill">
                                             <div class="banner-bg fill" >
                                                <div class="bg fill bg-fill "></div>
                                                <div class="overlay"></div>
                                                <div class="is-border"
                                                   style="border-width:3px 3px 3px 3px;margin:12px 12px 12px 12px;">
                                                </div>
                                             </div>
                                             <div class="banner-layers container">
                                                <a class="fill" href="{{route('detailProduct', ['cate'=>$product['cate_slug'], 'slug'=>$product['slug']])}}"  >
                                                   <div class="fill banner-link"></div>
                                                </a>
                                                <div id="text-box-1997359097" class="text-box banner-layer x0 md-x0 lg-x0 y95 md-y95 lg-y95 res-text">
                                                   <div class="text dark">
                                                   <div class="text-inner text-center">
                                                         <p><span style="font-size: 200%;">{{languageName($product['name'])}}</span></p>
                                                   </div>
                                                   </div>
                                                   <style scope="scope">
                                                   #text-box-1997359097 {
                                                   width: 90%;
                                                   }
                                                   #text-box-1997359097 .text {
                                                   font-size: 100%;
                                                   }
                                                   @media (min-width:550px) {
                                                   #text-box-1997359097 {
                                                   width: 60%;
                                                   }
                                                   }
                                                   </style>
                                                </div>
                                             </div>
                                       </div>
                                       <style scope="scope">
                                             #banner-1868809937 {
                                             padding-top: 500px;
                                             }
                                             #banner-1868809937 .bg.bg-loaded {
                                             background-image: url({{$img[0]}});
                                             }
                                             #banner-1868809937 .overlay {
                                             background-color: rgba(0, 0, 0, 0.34);
                                             }
                                             #banner-1868809937 .bg {
                                             background-position: 31% 31%;
                                             }
                                       </style>
                                       </div>
                                    </div>
                                 </div>
                              @else
                                 <div class="col grid-col large-8 grid-col-1-2" >
                                    <div class="col-inner">
                                       <div class="banner has-hover" id="banner-420440000">
                                       <div class="banner-inner fill">
                                             <div class="banner-bg fill" >
                                                <div class="bg fill bg-fill "></div>
                                                <div class="overlay"></div>
                                                <div class="is-border"
                                                   style="border-width:3px 3px 3px 3px;margin:12px 12px 12px 12px;">
                                                </div>
                                             </div>
                                             <div class="banner-layers container">
                                                <a class="fill" href="{{route('detailProduct', ['cate'=>$product['cate_slug'], 'slug'=>$product['slug']])}}"  >
                                                   <div class="fill banner-link"></div>
                                                </a>
                                                <div id="text-box-1511554178" class="text-box banner-layer x0 md-x0 lg-x0 y95 md-y95 lg-y95 res-text">
                                                   <div class="text dark">
                                                   <div class="text-inner text-center">
                                                         <p><span style="font-size: 200%;">{{languageName($product['name'])}}</span></p>
                                                   </div>
                                                   </div>
                                                   <style scope="scope">
                                                   #text-box-1511554178 {
                                                   width: 60%;
                                                   }
                                                   #text-box-1511554178 .text {
                                                   font-size: 100%;
                                                   }
                                                   @media (min-width:550px) {
                                                   #text-box-1511554178 {
                                                   width: 40%;
                                                   }
                                                   }
                                                   </style>
                                                </div>
                                             </div>
                                       </div>
                                       <style scope="scope">
                                             #banner-420440000 {
                                             padding-top: 500px;
                                             }
                                             #banner-420440000 .bg.bg-loaded {
                                             background-image: url($img[0]);
                                             }
                                             #banner-420440000 .overlay {
                                             background-color: rgba(0, 0, 0, 0.34);
                                             }
                                             #banner-420440000 .bg {
                                             background-position: 92% 57%;
                                             }
                                       </style>
                                       </div>
                                    </div>
                                 </div>
                              @endif
                           @endforeach
                           @endif
                        @endforeach
                     </div>
                     <style scope="scope">
                           #banner-grid-238497033 .grid-col-1{height: 600px}
                           #banner-grid-238497033 .grid-col-1-2{height: 300px}
                           #banner-grid-238497033 .grid-col-1-3{height:200px}
                           #banner-grid-238497033 .grid-col-2-3{height: 400px}
                           #banner-grid-238497033 .grid-col-1-4{height: 150px}
                           #banner-grid-238497033 .grid-col-3-4{height: 450px}
                     </style>
                     </div>
                  </div>
               </div>
         </div>
         </div>
         <style scope="scope">
         #section_675738257 {
         padding-top: 34px;
         padding-bottom: 34px;
         }
         #section_675738257 .section-bg.bg-loaded {
         background-image: url({{url('frontend/images/Capture6.png')}});
         }
         #section_675738257 .section-bg {
         background-position: 41% 0%;
         }
         </style>
      </section>
      <section class="section dark hide-for-small has-parallax" id="section_1516049535">
         <div class="bg section-bg fill bg-fill  " data-parallax-container=".section" data-parallax-background data-parallax="-6">
         <div class="section-bg-overlay absolute fill"></div>
         </div>
         <div class="section-content relative">
         <div id="gap-1446504491" class="gap-element clearfix" style="display:block; height:auto;">
               <style scope="scope">
                  #gap-1446504491 {
                  padding-top: 80px;
                  }
               </style>
         </div>
         <div class="row row-large align-middle align-center"  id="row-896525026">
               <div class="col medium-10 small-12 large-6"  >
                  <div class="col-inner"  >
                     <div class="is-border"
                     style="border-color:rgb(255, 255, 255);border-width:30px 0px 0px 30px;margin:-30px 30px 30px -30px;">
                     </div>
                     <div class="banner has-hover" id="banner-1161536167">
                     <div class="banner-inner fill">
                           <div class="banner-bg fill" >
                              <div class="bg fill bg-fill "></div>
                           </div>
                           <div class="banner-layers container">
                              <div class="fill banner-link"></div>
                              <div id="text-box-1285652597" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                                 <div class="text dark">
                                 <div class="text-inner text-center">
                                 </div>
                                 </div>
                                 <style scope="scope">
                                 #text-box-1285652597 {
                                 width: 60%;
                                 }
                                 #text-box-1285652597 .text {
                                 font-size: 100%;
                                 }
                                 </style>
                              </div>
                           </div>
                     </div>
                     <style scope="scope">
                           #banner-1161536167 {
                           padding-top: 300px;
                           }
                           #banner-1161536167 .bg.bg-loaded {
                           background-image: url({{$aboutUs->image}});
                           }
                           #banner-1161536167 .bg {
                           background-position: 31% 18%;
                           }
                           @media (min-width:550px) {
                           #banner-1161536167 {
                           padding-top: 400px;
                           }
                           }
                           @media (min-width:850px) {
                           #banner-1161536167 {
                           padding-top: 396px;
                           }
                           }
                     </style>
                     </div>
                  </div>
               </div>
               <div class="col medium-10 small-12 large-6"  >
                  <div class="col-inner" style="padding:30px 0px 0px 0px; text-align:justify;" >
                     <h3 style="text-align: center;"><span style="font-size: 200%;">Hợp tác cùng <i style="color: #62a438; font-family: 'Russo One', sans-serif;position: relative;"><span style="color: #ec1d26">Dae</span>hee<span style="border: 2px solid #62a438;
                        border-radius: 50%;
                        font-size: 8px;
                        padding: 0 6px;
                        position: absolute;
                        right: -26px;
                        top: 0;">R</span></i> </span></h3>
                     {!!$aboutUs->description!!}
                     <div id="gap-585892834" class="gap-element clearfix" style="display:block; height:auto;">
                     <style scope="scope">
                           #gap-585892834 {
                           padding-top: 10px;
                           }
                     </style>
                     </div>
                     <div class="row"  id="row-1447487844">
                     <div class="col medium-11 small-12 large-11"  >
                           <div class="col-inner"  >
                              <a href="{{route('aboutUs')}}" target="_self" class="button white is-outline lowercase"  style="border-radius:99px;">
                              <span>Giới thiệu chi tiết</span>
                              <i class="icon-angle-right" ></i></a>
                              <a href="{{route('lienHe')}}" target="_self" class="button white lowercase"  style="border-radius:99px;">
                              <span>Liên hệ Daehee</span>
                              <i class="icon-angle-right" ></i></a>
                           </div>
                     </div>
                     </div>
                     <div id="gap-1905666679" class="gap-element clearfix" style="display:block; height:auto;">
                     <style scope="scope">
                           #gap-1905666679 {
                           padding-top: 20px;
                           }
                     </style>
                     </div>
                  </div>
               </div>
               <style scope="scope">
               </style>
         </div>
         </div>
         <style scope="scope">
         #section_1516049535 {
         padding-top: 100px;
         padding-bottom: 100px;
         background-color: rgb(0, 23, 77);
         }
         #section_1516049535 .section-bg-overlay {
         background-color: rgba(22, 22, 22, 0.87);
         }
         #section_1516049535 .section-bg.bg-loaded {
         background-image: url(https://deltagroup.vn/wp-content/uploads/2020/07/18216686_1417437778321522_1758129339191944561_o-1-1.jpg);
         }
         #section_1516049535 .section-bg {
         background-position: 79% 78%;
         }
         @media (min-width:850px) {
         #section_1516049535 {
         padding-top: 27px;
         padding-bottom: 27px;
         }
         }
         </style>
      </section>
      <section class="section" id="section_146125855">
         <div class="bg section-bg fill bg-fill  " >
         </div>
         <div class="section-content relative">
         <div class="row"  id="row-999228269">
               <div class="col small-12 large-12"  data-animate="fadeInUp">
                  <div class="col-inner"  >
                     <h3 style="text-align: center;text-transform:uppercase"><span style="font-size: 160%;">Tin tức </span></h3>
                     <p style="text-align: center;">Cập nhật những thông tin mới nhất</p>
                     <div class="nl-blog-grid">
                     <div class="row">
                        @foreach ($homeBlog as $key=>$arr)
                        @if ($key%2==0)
                           @foreach ($arr as $key=>$blog)
                              @if ($key%2==0)
                                 <div class="col medium-12 small-12 item-large post-item large-3">
                                    <a href="{{route('detailBlog', ['slug'=>$blog['slug']])}}" class="link-post">
                                       <figure>
                                       <img width="1200" height="800" src="{{$blog['image']}}" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="{{$blog['image']}} 1200w, {{$blog['image']}} 300w" sizes="(max-width: 1200px) 100vw, 1200px" />                            
                                       <figcaption>
                                             <div class="post_name">{{languageName($blog['title'])}}</div>
                                       </figcaption>
                                       <figcaption class="fig_hover">
                                             <div class="post_name">{{languageName($blog['title'])}}</div>
                                             <div class="post_time">{{date('d.m.Y', strtotime($blog['created_at']))}}</div>
                                             <div class="post_expcert">
                                                {{languageName($blog['description'])}}                              
                                             </div>
                                       </figcaption>
                                       </figure>
                                    </a>
                                 </div>
                              @else
                                 <div class="col medium-12 small-12 item-large post-item large-6">
                                    <a href="{{route('detailBlog', ['slug'=>$blog['slug']])}}" class="link-post">
                                       <figure>
                                       <img width="1200" height="800" src="{{$blog['image']}}" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="{{$blog['image']}} 1200w, {{$blog['image']}} 300w" sizes="(max-width: 1200px) 100vw, 1200px" />                            
                                       <figcaption>
                                             <div class="post_name">{{languageName($blog['title'])}}</div>
                                       </figcaption>
                                       <figcaption class="fig_hover">
                                             <div class="post_name">{{languageName($blog['title'])}}</div>
                                             <div class="post_time">{{date('d.m.Y', strtotime($blog['created_at']))}}</div>
                                             <div class="post_expcert">
                                                {{languageName($blog['description'])}}                              
                                             </div>
                                       </figcaption>
                                       </figure>
                                    </a>
                                 </div>
                              @endif
                           @endforeach
                        @else
                           @foreach ($arr as $key=>$blog)
                              @if ($key!=0 && $key%2==0)
                                 <div class="col medium-12 small-12 item-large post-item large-6">
                                    <a href="{{route('detailBlog', ['slug'=>$blog['slug']])}}" class="link-post">
                                       <figure>
                                       <img width="1200" height="800" src="{{$blog['image']}}" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="{{$blog['image']}} 1200w, {{$blog['image']}} 300w" sizes="(max-width: 1200px) 100vw, 1200px" />                            
                                       <figcaption>
                                             <div class="post_name">{{languageName($blog['title'])}}</div>
                                       </figcaption>
                                       <figcaption class="fig_hover">
                                             <div class="post_name">{{languageName($blog['title'])}}</div>
                                             <div class="post_time">{{date('d.m.Y', strtotime($blog['created_at']))}}</div>
                                             <div class="post_expcert">
                                                {{languageName($blog['description'])}}                              
                                             </div>
                                       </figcaption>
                                       </figure>
                                    </a>
                                 </div>
                              @else
                                 <div class="col medium-12 small-12 item-large post-item large-3">
                                    <a href="{{route('detailBlog', ['slug'=>$blog['slug']])}}" class="link-post">
                                       <figure>
                                       <img width="1200" height="800" src="{{$blog['image']}}" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="{{$blog['image']}} 1200w, {{$blog['image']}} 300w" sizes="(max-width: 1200px) 100vw, 1200px" />                            
                                       <figcaption>
                                             <div class="post_name">{{languageName($blog['title'])}}</div>
                                       </figcaption>
                                       <figcaption class="fig_hover">
                                             <div class="post_name">{{languageName($blog['title'])}}</div>
                                             <div class="post_time">{{date('d.m.Y', strtotime($blog['created_at']))}}</div>
                                             <div class="post_expcert">
                                                {{languageName($blog['description'])}}                              
                                             </div>
                                       </figcaption>
                                       </figure>
                                    </a>
                                 </div>
                              @endif
                           @endforeach
                        @endif
                        @endforeach
                     </div>
                     </div>
                  </div>
                  <style>
                     .nl-blog-grid .row{
                     margin: 0;
                     }
                     .nl-blog-grid .row .col{
                     padding: 4px;
                     margin: 0;
                     }
                     .nl-blog-grid a.link-post {
                     background-image: linear-gradient(to top, #62a438 0%, #62a438 26%, #83d152 99%, #98e467 100%);
                     display: block;
                     color: #fff;
                     overflow: hidden;
                     }
                     .nl-blog-grid figure {
                     margin: 0;
                     position: relative;
                     }
                     .nl-blog-grid img {
                     height: 250px;
                     object-fit: cover;
                     object-position: center;
                     display: block;
                     }
                     .nl-blog-grid figcaption {
                     display: -webkit-box;
                     display: -ms-flexbox;
                     display: flex;
                     -webkit-box-align: end;
                     -ms-flex-align: end;
                     align-items: flex-end;
                     position: absolute;
                     width: 100%;
                     height: 100%;
                     top: 0;
                     left: 0;
                     padding: 0 25px;
                     background-image: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0) 44%, rgba(0, 0, 0, 0) 100%);
                     z-index: 10;
                     }
                     .nl-blog-grid .post_name {
                     font-size: 16px;
                     font-weight: 700;
                     line-height: 20px;
                     max-height: 40px;
                     margin-bottom: 25px;
                     overflow: hidden;
                     text-overflow: ellipsis;
                     display: -webkit-box !important;
                     -webkit-box-orient: vertical;
                     -webkit-line-clamp: 2;
                     }
                     .nl-blog-grid figcaption.fig_hover {
                     background-image: linear-gradient(to top, #62a438 0%, #62a438 26%, #83d152 99%, #98e467 100%);
                     -webkit-transform: translateX(-100%);
                     -ms-transform: translateX(-100%);
                     transform: translateX(-100%);
                     -webkit-transition: .2s all ease-in-out;
                     -o-transition: .2s all ease-in-out;
                     transition: .2s all ease-in-out;
                     -webkit-box-orient: vertical;
                     -webkit-box-direction: normal;
                     -ms-flex-direction: column;
                     flex-direction: column;
                     -webkit-box-align: start;
                     -ms-flex-align: start;
                     align-items: flex-start;
                     -webkit-box-pack: center;
                     -ms-flex-pack: center;
                     justify-content: center;
                     z-index: 20;
                     }
                     .nl-blog-grid figcaption.fig_hover .post_name {
                     margin-bottom: 15px;
                     max-height: 60px;
                     -webkit-line-clamp: 3;
                     color: #ec1d26;
                     }
                     .nl-blog-grid figcaption.fig_hover .post_time {
                     font-size: 12px;
                     font-weight: 400;
                     line-height: 15px;
                     margin-bottom: 15px;
                     }
                     .nl-blog-grid figcaption.fig_hover .post_expcert {
                     font-size: 12px;
                     font-weight: 400;
                     line-height: 15px;
                     }
                     .nl-blog-grid a.link-post:hover figcaption.fig_hover {
                     -webkit-transform: translateX(0);
                     -ms-transform: translateX(0);
                     transform: translateX(0);
                     }
                     @media(max-width: 849px){
                     .nl-blog-grid img {
                     height: 200px;
                     }
                     }
                  </style>
               </div>
         </div>
         <style scope="scope">
               #row-999228269 > .col > .col-inner {
               padding: 9px 0px 28px 0px;
               }
         </style>
         </div>
   </div>
   <style scope="scope">
   #section_146125855 {
   padding-top: 61px;
   padding-bottom: 61px;
   background-color: rgb(255, 255, 255);
   }
   #section_146125855 .section-bg.bg-loaded {
   background-image: 318;
   }
   #section_146125855 .section-bg {
   background-position: 61% 31%;
   }
   </style>
   </section>
   <div class="banner has-hover" id="banner-819433840">
      <div class="banner-inner fill">
         <div class="banner-bg fill" >
         <div class="bg fill bg-fill "></div>
         <div class="overlay"></div>
         </div>
         <div class="banner-layers container">
         <div class="fill banner-link"></div>
         <div id="text-box-1670830949" class="text-box banner-layer x50 md-x50 lg-x50 y90 md-y90 lg-y90 res-text">
               <div class="text dark">
                  <div class="text-inner text-center">
                     <h2 style="text-align: center;"><span style="font-size: 120%;"><strong>
                        <i style="color: #62a438; font-family: 'Russo One', sans-serif;position: relative;"><span style="color: #ec1d26">Dae</span>hee<span style="border:2px solid #62a438; border-radius: 50% 40%;
                        font-size: 9px;
                        padding: 3px 4px;
                        position: absolute;
                        right: -30px;">R</span></i>
                        </strong></span></h2>
                     <p style="text-align: center;"><span style="font-size: 200%;"><strong>Xây dựng bằng lương tâm và tri thức</strong></span></p>
                  </div>
               </div>
               <style scope="scope">
                  #text-box-1670830949 {
                  width: 60%;
                  }
                  #text-box-1670830949 .text {
                  font-size: 100%;
                  }
               </style>
         </div>
         </div>
      </div>
      <style scope="scope">
         #banner-819433840 {
         padding-top: 326px;
         }
         #banner-819433840 .bg.bg-loaded {
         background-image: url(https://deltagroup.vn/wp-content/uploads/2020/07/DJI_0952-1-2-1.jpg);
         }
         #banner-819433840 .overlay {
            background-color: rgb(0 0 0 / 64%);
         }
         #banner-819433840 .bg {
         background-position: 37% 74%;
         }
      </style>
   </div>
</div>
</main>
@endsection