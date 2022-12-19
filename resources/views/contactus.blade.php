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
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="">
	<div id="content" role="main" class="content-area">
	<div class="banner has-hover" id="banner-1673961428">
		<div class="banner-inner fill">
			<div class="banner-bg fill" >
				<div class="bg fill bg-fill "></div>
			</div>
			<div class="banner-layers container">
				<div class="fill banner-link"></div>
			</div>
		</div>
		<style scope="scope">
			#banner-1673961428 {
			padding-top: 420px;
			}
			#banner-1673961428 .bg.bg-loaded {
			background-image: url({{url('frontend/images/bg-contact.jpg')}});
			}
			#banner-1673961428 .bg {
			background-position: 81% 52%;
			}
		</style>
	</div>
	<div class="row"  id="row-1655900888">
		<div class="col medium-6 small-12 large-6"  >
			<div class="col-inner"  >
				<div class="tabbed-content">
				<ul class="nav nav-line-grow nav-normal nav-size-large nav-center">
					<li class="tab active has-icon"><a href="#tab_trỤ-sỞ-hÀ-nỘi"><span>VĂN PHÒNG TRỤ SỞ</span></a></li>
				</ul>
				<div class="tab-panels">
					<div class="panel active entry-content" id="tab_trỤ-sỞ-hÀ-nỘi">
						{!!$setting->iframe_map!!}
					</div>
				</div>
				</div>
			</div>
		</div>
		<div class="col medium-6 small-12 large-6"  >
			<div class="col-inner" style="margin:29px 0px 0px 0px;" >
				<div role="form" class="wpcf7" id="wpcf7-f8263-p20-o1" lang="vi" dir="ltr">
				<div class="screen-reader-response">
					<p role="status" aria-live="polite" aria-atomic="true"></p>
					<ul></ul>
				</div>
				<form action="{{route('postcontact')}}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
					@csrf
					<p><label><br />
						<span class="wpcf7-form-control-wrap ten-435"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Họ và tên" required/></span></label>
					</p>
					<p><label><span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" required/></span> </label><br />
						<label><span class="wpcf7-form-control-wrap tel-198"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Số điện thoại" required/></span> </label><br />
						<label><br />
						<span class="wpcf7-form-control-wrap your-message"><textarea name="mess" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Nội dung" required></textarea></span> </label><br />
					</p>
					<p><input type="submit" value="Gửi đi" class="wpcf7-form-control wpcf7-submit" /></p>
					<div class="wpcf7-response-output" aria-hidden="true"></div>
				</form>
				</div>
			</div>
		</div>
	</div>
	</div>
</main>
@endsection