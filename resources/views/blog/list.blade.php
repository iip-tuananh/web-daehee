@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}}
@endsection
@section('image')
{{url(''.$banners[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div id="content" role="main" class="content-area">
      <p>
      <div class="banner has-hover has-video hide-for-small" id="banner-70614414">
         <div class="banner-inner fill">
            <div class="banner-bg fill" >
               <div class="bg fill bg-fill bg-loaded"></div>
            </div>
            <div class="banner-layers container">
               <div class="fill banner-link"></div>
               <div id="text-box-1509068372" class="text-box banner-layer x50 md-x50 lg-x50 y50 md-y50 lg-y50 res-text">
                  <div class="text dark">
                     <div class="text-inner text-center">
                        </p>
                        <h3 class="uppercase"><strong> TIN TỨC – SỰ KIỆN DAEHEE</strong></h3>
                        <p>Góp ý vui lòng liên hệ : <a href="mailto:{{$setting->email}}" class="__cf_email__">{{$setting->email}}</a></p>
                        <p>
                     </div>
                  </div>
                  <style scope="scope">
                     #text-box-1509068372 {
                     width: 60%;
                     }
                     #text-box-1509068372 .text {
                     font-size: 100%;
                     }
                  </style>
               </div>
            </div>
         </div>
         <style scope="scope">
            #banner-70614414 {
            padding-top: 253px;
            }
            #banner-70614414 .overlay {
            background-color: rgba(51, 51, 51, 0.75);
            }
            #banner-70614414 .bg.bg-loaded {
            background-image: url(https://deltagroup.vn/wp-content/uploads/2020/07/IMG_9376-scaled-1.jpg);
            }
         </style>
      </div>
      <div id="gap-513899919" class="gap-element clearfix" style="display:block; height:auto;">
         <style scope="scope">
            #gap-513899919 {
            padding-top: 30px;
            }
         </style>
      </div>
      <div class="row row-small"  id="row-1953690405">
         <div class="col medium-9 small-12 large-9"  >
            <div class="col-inner"  >
               <div class="row large-columns-3 medium-columns-1 small-columns-1 row-small">
                  @foreach ($blogs as $blog)
                  <div class="col post-item" >
                     <div class="col-inner">
                        <a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" class="plain">
                           <div class="box box-normal box-text-bottom box-blog-post has-hover">
                              <div class="box-image" >
                                 <div class="image-cover" style="padding-top:52%;">
                                    <img width="1200" height="800" src="{{$blog->image}}" class="attachment-medium size-medium wp-post-image" alt="" loading="lazy" srcset="{{$blog->image}} 1200w, {{$blog->image}} 300w" sizes="(max-width: 1200px) 100vw, 1200px" />  							  							  						
                                 </div>
                              </div>
                              <div class="box-text text-center" >
                                 <div class="box-text-inner blog-post-inner">
                                    <h5 class="post-title is-large ">{{languageName($blog->title)}}</h5>
                                    <div class="is-divider"></div>
                                 </div>
                              </div>
                              <div class="badge absolute top post-date badge-square">
                                 <div class="badge-inner">
                                    <span class="post-date-day">{{date('d', strtotime($blog->created_at))}}</span><br>
                                    <span class="post-date-month is-xsmall">Th{{date('m', strtotime($blog->created_at))}}</span>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  @endforeach
                  {{$blogs->links()}}
               </div>
            </div>
         </div>
         <div class="post-sidebar large-3 col">
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
      </div>
      </p>
   </div>
</main>
@endsection