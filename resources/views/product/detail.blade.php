@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
@endsection
@section('image')
@php
$imgs = json_decode($product->images);
$imgColor = json_decode($product->size);
if ($product->discount > 0 && $product->price > 0) {
   $discount = round((($product['price'] - $product['discount']) / $product['price']) * 100, 1, PHP_ROUND_HALF_UP);
}
@endphp
{{url(''.$imgs[0])}}
@endsection
@section('css')
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/products.scss.css')}}" />
<link href="{{asset('frontend/css/products.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
<link rel="preload" as="script" href="{{asset('frontend/js/product.js')}}" />
<script src="{{asset('frontend/js/product.js')}}" type="text/javascript"></script>
@endsection
@section('content')
<section class="bread-crumb">
   <div class="container">
      <div class="row">
         <div class="col-12 a-left">
            <ul class="breadcrumb" >
               <li class="home">
                  <a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
                  <span class="mr_lr">&nbsp;/&nbsp;</span>
               </li>
               <li>
                  <a class="changeurl"  href="{{route('allListProCate', ['cate'=>$product->cate_slug])}}"><span >{{languageName($product->cate->name)}}</span></a>						
                  <span class="mr_lr">&nbsp;/&nbsp;</span>
               </li>
               <li><strong><span>{{languageName($product->name)}}</span></strong>
               <li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="container nd-product-page product product-margin" itemscope itemtype="http://schema.org/Product">
   <div class="nd-image-and-info-product">
      <div class="row">
         <div class="col-lg-6 col-md-12 col-12 nd-mobile-padding">
            <div class="product-image-block relative">
               <div class="swiper-container gallery-top">
                  <div class="swiper-wrapper" id="lightgallery">
                     @foreach ($imgs as $img)
                        <a class="swiper-slide" data-hash="0" href="{{$img}}" title="Click để xem">
                        <img height="600" width="600" src="{{$img}}" alt="{{languageName($product->name)}}" data-image="{{$img}}" class="img-responsive mx-auto d-block swiper-lazy" loadding="lazy" />
                        </a>
                     @endforeach
                  </div>
               </div>
               <div class="gallery_pro">
                  <div class="swiper-container gallery-thumbs">
                     <div class="swiper-wrapper">
                        @foreach ($imgs as $img)
                           <div class="swiper-slide" data-hash="0">
                              <img height="80" width="80" src="{{$img}}" alt="{{languageName($product->name)}}" data-image="{{$img}}" class="swiper-lazy" loading="lazy" />
                           </div>
                        @endforeach
                     </div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-12 col-12 details-pro">
            <div class="nd-info-product">
               <div class="brand-name">
                  <div class="sku-product"><span>{{$product->brand_id != '' ? $product->brand->name :''}}</span></div>
               </div>
               <h1 class="title-head">{{languageName($product->name)}}</h1>
               <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                  @if ($product->discount > 0)
                     <div class="price-box clearfix">
                        <span class="special-price">
                           <span class="price product-price">{{number_format($product->discount, 0, '', '.')}}₫</span>
                        </span>
                        <span class="save-price"><span class="discount_">- 
                        {{$discount}}% 
                        </span></span> <!-- Tiết kiệm -->
                        <span class="old-price" itemprop="priceSpecification" itemscope="" itemtype="http://schema.org/priceSpecification">
                           <del class="price product-price-old">
                           {{number_format($product->price, 0, '', '.')}}₫
                           </del>
                        </span>
                        <!-- Giá gốca -->
                        <span class="save-price-2">Tiết kiệm
                        <span class="price product-price-save"></span>
                        </span> <!-- Tiết kiệm -->
                     </div>
                  @else
                     <div class="price-box clearfix">
                        
                        <div class="special-price">
                           <span class="price product-price">{{number_format($product->price, 0, '', '.')}}₫</span>
                        </div>
                        
                     </div>
                  @endif
               </div>
               <div class="form-product nd-form-product">
                  <form enctype="multipart/form-data" id="add-to-cart-form" data-cart-form action="" method="" class="wishItem">
                     <div class="form-product">
                        <div class="select-swatch">
                           <script>$(window).load(function() { $('.selector-wrapper:eq(0)').hide(); });</script>
                           @if (json_decode($product->preserve)[0]->detail != null)
                              <div class="swatch clearfix">
                                 <div class="header hidden">Kích thước</div>
                                 @foreach (json_decode($product->preserve) as $key=>$item)
                                    <div data-value="{{$item->detail}}" class="swatch-element available">
                                       <input id="swatch-{{$key}}" type="radio" name="size" value="{{$item->detail}}" />
                                       <label for="swatch-{{$key}}">
                                       {{$item->detail}}
                                       </label>
                                    </div>
                                 @endforeach
                              </div>
                           @endif
                           @if (json_decode($product->size)[0]->title != null)
                              <div class="swatch clearfix">
                                 <div class="header hidden">Màu sắc</div>
                                 @foreach (json_decode($product->size) as $key=>$item)
                                    <div data-value="{{$item->title}}" class="swatch-element available">
                                       <input id="color-{{$key}}" type="radio" name="color" value="{{$item->title}}" />
                                       <label for="color-{{$key}}">
                                       {{$item->title}}
                                       </label>
                                    </div>
                                 @endforeach
                              </div>
                           @endif
                        </div>
                        <div class="parameter_product">
                           <div class="vendor-xuatxu">
                              {!!languageName($product->description)!!}
                           </div>
                        </div>
                        <div class="service-product">
                           <div class="item">
                              <div class="icon">
                                 <img src="{{url('frontend/images/icon_service_product_1.svg')}}" alt="Giao hàng toàn quốc"/>
                              </div>
                              <div class="info">
                                 <h3>
                                    Giao hàng toàn quốc
                                 </h3>
                              </div>
                           </div>
                           <div class="item">
                              <div class="icon">
                                 <img src="{{url('frontend/images/icon_service_product_2.svg')}}" alt="Thanh toán khi nhận hàng"/>
                              </div>
                              <div class="info">
                                 <h3>
                                    Thanh toán khi nhận hàng
                                 </h3>
                              </div>
                           </div>
                           <div class="item">
                              <div class="icon">
                                 <img src="{{url('frontend/images/icon_service_product_3.svg')}}" alt="Cam kết đổi/trả hàng miễn phí"/>
                              </div>
                              <div class="info">
                                 <h3>
                                    Cam kết đổi/trả hàng miễn phí
                                 </h3>
                              </div>
                           </div>
                           <div class="item">
                              <div class="icon">
                                 <img src="{{url('frontend/images/icon_service_product_4.svg')}}" alt="Cam kết hàng chính hãng"/>
                              </div>
                              <div class="info">
                                 <h3>
                                    Cam kết hàng chính hãng
                                 </h3>
                              </div>
                           </div>
                        </div>
                        <div class="form-groups clearfix from-action-addcart ">
                           <div class="qty-ant clearfix custom-btn-number ">
                              <label class="d-none">Số lượng:</label>
                              <div class="custom custom-btn-numbers clearfix input_number_product">		
                                 <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) & qty > 1 ) result.value--;return false;" class="btn-minus btn-cts" type="button">–</button>
                                 <input aria-label="Số lượng" type="text" class="qty input-text" id="qty" name="quantity" size="4" value="1" maxlength="3" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;" />
                                 <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="btn-plus btn-cts" type="button">+</button>
                              </div>
                              <div class="vd">
                                 <span class="vend_c">{{$product->status == 1 ? 'Còn hàng' : 'Hết hàng'}}</span>
                              </div>
                           </div>
                           <div class="btn-mua">
                              <input type="text" name="product_id" class="hidden" value="{{$product->id}}">
                              <button type="submit" data-url='{{route('addToCart')}}' class="btn btn-lg btn-gray btn-cart btn_buy add_to_cart">Thêm vào giỏ hàng</button>
                              <button type="button" data-url='{{route('addToCart')}}' class="btn btn-lg btn-gray btn_buy btn-buy-now">Mua ngay</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="nd-product-tab">
         <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
               <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" title="Chi tiết sản phẩm">
               <span>Chi tiết sản phẩm</span>
               </a>
            </li>
         </ul>
         <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
               {!!languageName($product->content)!!}
            </div>
         </div>
      </div>
   </div>
</section>
<div class="nd-similar-product">
   <div class="container">
      <div class="block-title">
         <h2>
            <a href="#" title="Có thể bạn cũng quan tâm">
            Có thể bạn cũng quan tâm
            </a>
         </h2>
      </div>
      <div class="product-slide">
         <div class="block-product-swiper">
            <div class="nd-similar-product-swiper swiper-container">
               <div class="swiper-wrapper">
                  @foreach ($productlq as $pro)
                     @if ($pro->id != $product->id)
                     <div class="swiper-slide">
                        <div class="item_product_main">
                           @include('layouts.product.item', ['product'=>$pro])
                        </div>
                     </div>
                     @endif
                  @endforeach
               </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
         </div>
      </div>
   </div>
</div>
<script>
   if ($('.nd-similar-product-swiper .swiper-wrapper').html().trim() ==  ''){
		$('.nd-similar-product').addClass('d-none');
	}
</script>
@endsection