@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
   <div id="content" role="main" class="content-area">
      <div class="slider-wrapper relative" id="slider-1294845702" >
         <div class="slider slider-nav-dots-simple slider-nav-simple slider-nav-large slider-nav-light slider-style-normal"
            data-flickity-options='{
            "cellAlign": "center",
            "imagesLoaded": true,
            "lazyLoad": 1,
            "freeScroll": false,
            "wrapAround": true,
            "autoPlay": 3000,
            "pauseAutoPlayOnHover" : false,
            "prevNextButtons": true,
            "contain" : true,
            "adaptiveHeight" : true,
            "dragThreshold" : 10,
            "percentPosition": true,
            "pageDots": false,
            "rightToLeft": false,
            "draggable": false,
            "selectedAttraction": 0.1,
            "parallax" : 0,
            "friction": 0.6        }'
            >
            <section class="section dark" id="section_164547122">
               <div class="bg section-bg fill bg-fill  " >
                  <div class="section-bg-overlay absolute fill"></div>
               </div>
               <div class="section-content relative">
                  <div class="row row-full-width align-center"  id="row-920679219">
                     <div class="col medium-10 small-12 large-6"  data-animate="fadeInDown">
                        <div class="col-inner text-center"  >
                           <img src="{{url('frontend/images/daehee-02.png')}}" alt="logo">
                           <p>Nguồn nhân lực là giá trị cốt lõi và là nền tảng vững chắc<br />giúp DAEHEE không ngừng tạo nên những giá trị gia tăng hiệu quả cho khách hàng.</p>
                           <p>
                           <div id="gap-1664761282" class="gap-element clearfix" style="display:block; height:auto;">
                              <style scope="scope">
                                 #gap-1664761282 {
                                 padding-top: 10px;
                                 }
                              </style>
                           </div>
                        </div>
                     </div>
                     <style scope="scope">
                        #row-920679219 > .col > .col-inner {
                        padding: 0px 0px 0px 0px;
                        }
                     </style>
                  </div>
               </div>
               <style scope="scope">
                  #section_164547122 {
                  padding-top: 100px;
                  padding-bottom: 100px;
                  min-height: 600px;
                  }
                  #section_164547122 .section-bg-overlay {
                     background-color: rgb(0 0 0 / 64%);
                  }
                  #section_164547122 .section-bg.bg-loaded {
                  background-image: url({{url('frontend/images/bg-aboutus.jpg')}});
                  }
                  #section_164547122 .section-bg {
                  background-position: 49% 8%;
                  }
                  @media (min-width:550px) {
                  #section_164547122 {
                  padding-top: 30px;
                  padding-bottom: 30px;
                  }
                  }
               </style>
            </section>
         </div>
         <div class="loading-spin dark large centered"></div>
      </div>
      <section class="section dark" id="section_1781319086">
         <div class="bg section-bg fill bg-fill  bg-loaded" >
         </div>
         <div class="section-content relative">
            <div class="row align-center"  id="row-400259888">
               <div class="col small-12 large-12"  >
                  <div class="col-inner" style="background-color:#62a438;margin:-100px 0px 0px 0px;" >
                     <div class="row row-small row-full-width align-middle align-center"  id="row-1249657022">
                        <div class="col medium-12 small-12 large-5"  >
                           <div class="col-inner text-center"  >
                              </p>
                              <h2 style="text-align: center;"><span style="font-size: 25px;">Giới thiệu chung</span></h2>
                              <p>
                              <div id="gap-455077018" class="gap-element clearfix" style="display:block; height:auto;">
                                 <style scope="scope">
                                    #gap-455077018 {
                                    padding-top: 1px;
                                    }
                                 </style>
                              </div>
                              <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_645908757">
                                 <div class="img-inner dark" >
                                    <img width="258" height="137" src="{{$pageContent->image}}" class="attachment-large size-large" alt="" loading="lazy" />						
                                 </div>
                                 <style scope="scope">
                                    #image_645908757 {
                                    width: 60%;
                                    }
                                 </style>
                              </div>
                           </div>
                        </div>
                        <div class="col medium-12 small-12 large-7"  >
                           <div class="col-inner" style="text-align: justify"  >
                              {!!$pageContent->description!!}
                           </div>
                        </div>
                        <style scope="scope">
                        </style>
                     </div>
                  </div>
               </div>
               <style scope="scope">
                  #row-400259888 > .col > .col-inner {
                  padding: 45px 25px 15px 25px;
                  background-color: rgb(34, 49, 246);
                  }
                  @media (min-width:550px) {
                  #row-400259888 > .col > .col-inner {
                  padding: 45px 80px 15px 80px;
                  }
                  }
                  @media (min-width:850px) {
                  #row-400259888 > .col > .col-inner {
                  padding: 50px 50px 30px 50px;
                  }
                  }
               </style>
            </div>
         </div>
         <style scope="scope">
            #section_1781319086 {
            padding-top: 0px;
            padding-bottom: 0px;
            min-height: 0px;
            background-color: rgb(246, 246, 246);
            }
         </style>
      </section>
      <section class="section" id="section_2022941501">
         <div class="bg section-bg fill bg-fill  bg-loaded" >
         </div>
         <div class="section-content relative">
            <div class="row align-middle"  id="row-53785916">
               <div class="col small-12 large-12" style="text-align: justify" >
                  {!!$pageContent->content!!}
               </div>
            </div>
         </div>
         <style scope="scope">
            #section_2022941501 {
            padding-top: 7px;
            padding-bottom: 7px;
            background-color: rgb(246, 246, 246);
            }
            @media (min-width:550px) {
            #section_2022941501 {
            padding-top: 50px;
            padding-bottom: 50px;
            }
            }
         </style>
      </section>
      <div class="row"  id="row-42386624">
         <div class="col small-12 large-12"  >
            <div class="col-inner"  >
               </p>
               <h3 style="font-size: 200%; text-align: center;">Các đơn vị thành viên</h3>
               <p>
            </div>
         </div>
      </div>
      <div class="row align-equal align-center"  id="row-765598478">
         @foreach ($partner as $item)
            <div class="col medium-3 small-6 large-3"  >
               <div class="col-inner"  >
                  <section class="section" id="section_1723869250">
                     <div class="bg section-bg fill bg-fill  bg-loaded" >
                     </div>
                     <div class="section-content relative">
                        </p>
                        <p><img loading="lazy" class="size-full wp-image-10165 aligncenter" src="{{$item->image}}" alt="" width="225" height="auto" /></p>
                        <p>
                     </div>
                     <style scope="scope">
                        #section_1723869250 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                        }
                     </style>
                  </section>
               </div>
            </div>
         @endforeach
      </div>
   </div>
</main>
@endsection