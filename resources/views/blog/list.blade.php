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
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/blogs.scss.css')}}" />
<link href="{{asset('frontend/css/blogs.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
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
               <li><strong ><span>{{$title_page}}</span></strong></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<div class="blog-padding margin-bottom-30" itemscope itemtype="http://schema.org/Blog">
   <div class="container">
      <div class="row">
         <div class="col-xl-12 col-lg-12 col-12">
            <h1 class="news-h1">{{$title_page}}</h1>
         </div>
      </div>
      <div class="list-news row">
         @foreach ($blogs as $blog)
         <div class="col-lg-4 col-md-4 col-sm-6 col-12 news-item small">
            <div class="item_blog_base">
               <a class="thumb" href="{{route('detailBlog', ['slug'=>$blog->slug])}}">
               <img src="{{$blog->image}}" alt="{{languageName($blog->title)}}" loading="lazy" />
               </a>
               <div class="content_blog clearfix">
                  <div class="time-post">
                     {{date('d/m/Y', strtotime($blog->created_at))}}
                  </div>
                  <h3><a href="{{route('detailBlog', ['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}" class="a-title">{{languageName($blog->title)}}</a></h3>
                  <p>
                     {{languageName($blog->description)}}
                  </p>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <div class="row">
         <div class="paginate">
            {{$blogs->links()}}
         </div>
      </div>
   </div>
</div>
@endsection