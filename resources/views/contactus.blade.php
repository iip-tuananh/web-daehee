@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/contacts.scss.css')}}" />
<link href="{{asset('frontend/css/contacts.scss.css')}}" rel="stylesheet" type="text/css" />
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
				<li><strong ><span>Liên hệ</span></strong></li>
			</ul>
		</div>
	</div>
	</div>
</section>
<h1 class="d-none">Liên hệ</h1>
<div class="page_contact page-contacts">
	<div class="form_content lazy leave-your-message" data-src="{{url('frontend/images/bg_contact.jpg')}}">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12 offset-lg-6">
				<h3>Bạn cần hỗ trợ?</h3>
				<p class="p-bottom">{{$setting->company}} rất hân hạnh được hỗ trợ bạn, hãy để lại thông tin cho chúng tôi nhé. Yêu cầu của bạn sẽ được xử lý và phản hồi trong thời gian sớm nhất.</p>
				<form accept-charset="utf-8" action="{{route('search_result')}}" id="contact" method="post">
					@csrf
				<div class="row">
					<div class="col-xl-6 col-sm-6 col-xs-12">
						<fieldset class="form-group">
							<label>Họ tên*</label>
							<input placeholder="Tên đầy đủ" type="text" name="name" id="name" class="form-control  form-control-lg" required />
						</fieldset>
					</div>
					<div class="col-xl-6 col-sm-6 col-xs-12">
						<fieldset class="form-group">
							<label>Số điện thoại *</label>
							<input placeholder="Số điện thoại" type="number" name="phone" id="phone" class="form-control form-control-lg" required />
						</fieldset>
					</div>
					<div class="col-xl-12 col-sm-12 col-xs-12">
						<fieldset class="form-group">
							<label>Email*</label>
							<input placeholder="Địa chỉ email" type="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg= "Email sai định dạng" id="email" class="form-control form-control-lg" required />
						</fieldset>
					</div>
					<div class="col-sm-12 col-xs-12">
						<label>Tin nhắn*</label>
						<fieldset class="form-group">
							<textarea placeholder="Đừng ngại hỏi về đơn hàng của bạn" name="mess" id="comment" class="form-control form-control-lg" rows="5"  data-validation="required" required></textarea>
						</fieldset>
						<fieldset class="form-group">
							<button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi</button>
						</fieldset>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	</div>
	<div class="container contact page-contacts leave-your-message">
	<div class="row">
		<div class="col-lg-7 col-12">
			<h3 class="hoa">{{$setting->company}}</h3>
			<p class="p-bottom">{{$setting->webname}}</p>
			<ul class="contact-page">
				<li>
				Địa chỉ: {{$setting->address1}}
				</li>
				@if ($setting->address2)
				<li>
				Địa chỉ 2: {{$setting->address2}}
				</li>
				@endif
			</ul>
		</div>
		<div class="col-lg-5 col-12 contact_info_right">
			<h3 class="hoa">Liên hệ với chúng tôi</h3>
			<ul class="contact-page">
				<li>
				Email: <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
				</li>
				<li>
				Hotline: <a class="fone" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a>
				</li>
				@if ($setting->phone2)
				<li>
				CSKH: <a class="fone" href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a>
				</li>
				@endif
				<li>
				Thời gian làm việc: 8h - 21h (Thứ 2 - Thứ 7)
				</li>
				<li>
				Fanpage: <a href="{{$setting->facebook}}" title="{{$setting->facebook}}">{{$setting->facebook}}</a>
				</li>
			</ul>
		</div>
	</div>
	</div>
</div>
@endsection