@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
	<div id="content" class="blog-wrapper blog-single page-wrapper">
	<div class="row row-large ">
		<div class="large-9 col">
			<article id="post-12113" class="post-12113 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc category-tin-tuc-su-kien tag-delta-group tag-dai-hoc-xay-dung tag-dhxd tag-masteri-west-heights">
				<div class="article-inner has-shadow box-shadow-1">
				<header class="entry-header">
					<div class="entry-header-text entry-header-text-top text-left">
						<h1 class="entry-title">{{languageName($blog_detail->title)}}</h1>
						<div class="entry-divider is-divider small"></div>
					</div>
				</header>
				<div class="entry-content single-page">
					{!!languageName($blog_detail->content)!!}
				</div>
				<!-- .entry-content2 -->
				<footer>
					<div class="locdong">
					</div>
				</footer>
				@if (count($blogs) > 1)
				<h3 class="title-related-post">Bài viết liên quan</h3>
				<ul class="news-related">
					@foreach ($blogs as $blog)
						@if ($blog->id != $blog_detail->id)
						<li>
							<a href="{{route('detailBlog', ['slug'=>$blog->slug])}}">
								<div class="new-img"><img width="300" height="200" src="{{$blog->image}}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy" srcset="{{$blog->image}} 300w, {{$blog->image}} 1200w" sizes="(max-width: 300px) 100vw, 300px" /></div>
								<h4>{{languageName($blog->title)}}</h4>
							</a>
						</li>
						@endif
					@endforeach
				</ul>
				@endif
				</div>
			</article>
			<div id="comments" class="comments-area">
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
	</div>
</main>
@endsection