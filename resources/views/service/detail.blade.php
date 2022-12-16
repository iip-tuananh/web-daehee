@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
	<div class="page-header-excerpt">
	<div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1899118318">
		<div data-animate="fadeInUp">
			<div class="img-inner dark" >
				<img width="1200" height="342" src="https://deltagroup.vn/wp-content/uploads/2017/03/xde4.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://deltagroup.vn/wp-content/uploads/2017/03/xde4.jpg 1200w, https://deltagroup.vn/wp-content/uploads/2017/03/xde4-768x219.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px" />						
			</div>
		</div>
		<style scope="scope">
			#image_1899118318 {
			width: 100%;
			}
		</style>
	</div>
	</div>
	<div class="page-wrapper page-right-sidebar">
	<div class="row">
		<div id="content" class="large-9 left col col-divided" role="main">
			<div class="page-inner">
				<div class="related-posts clear" style="margin-top: 30px;">
				<h1 style="font-weight: 300; color: #263846; font-size: 2.1em; float: left; margin: -18px 16px 20px 0; /* line-height: 1.6; */width: auto;">{{($detail_service->name)}}</h1>
				<div class="stripe-line"></div>
				</div>
				{!!languageName($detail_service->content)!!}
				<div class="related-posts clear" style="margin-top: 40px; margin-bottom: 20px;">
				<h1 style="font-weight: 300; color: #263846; font-size: 2.1em; float: left; margin: -18px 16px 20px 0; /* line-height: 1.6; */width: auto;">Xem thêm <strong style="color: #027ec5;">các lĩnh vực khác</strong></h1>
				<div class="stripe-line"></div>
				</div>
				<section class="section dark" id="section_696405211">
				<div class="bg section-bg fill bg-fill  bg-loaded" >
				</div>
				<div class="section-content relative">
					<div class="row"  id="row-1114815591">
						@foreach ($services as $service)
							@if ($service->id != $detail_service->id)
								<div class="col small-12 large-12"  >
									<div class="col-inner"  >
									<div class="icon-box featured-box icon-box-left text-left"  >
										<div class="icon-box-img" style="width: 107px">
											<div class="icon">
												<div class="icon-inner" >
												<img width="400" height="400" src="{{$service->image}}" class="attachment-medium size-medium" alt="" loading="lazy" srcset="{{$service->image}} 400w, {{$service->image}} 75w" sizes="(max-width: 400px) 100vw, 400px" />					
												</div>
											</div>
										</div>
										<div class="icon-box-text last-reset">
											<h3><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}">{{$service->name}}</a></h3>
											<p>{!!languageName($service->description)!!}</p>
										</div>
									</div>
									</div>
								</div>
							@endif
						@endforeach
					</div>
				</div>
				<style scope="scope">
					#section_696405211 {
					padding-top: 30px;
					padding-bottom: 30px;
					background-color: #162D61;
					}
				</style>
				</section>
			</div>
		</div>
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
	</div>
	</div>
</main>
@endsection