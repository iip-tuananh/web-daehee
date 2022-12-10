
<!DOCTYPE html>
<html class="floating-labels">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="KoKo Pet - Thanh toán đơn hàng" />
	<title>NMIGROUP - Thanh toán đơn hàng</title>
	<link rel="icon" href="{{url(''.$setting->favicon)}}" type="image/x-icon">
	<link rel="stylesheet" href="{{ asset('frontend/css/checkout.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Begin checkout custom css -->
	<style>
	</style>
	<!-- End checkout custom css -->
	<script src="{{	asset('frontend/js/jquery.js')}}" type="text/javascript"></script>
	<script src="{{	asset('frontend/js/notify.min.js')}}" type="text/javascript"></script>
	<script src="{{ asset('frontend/js/checkout.vendor.min.js') }}"></script>
	<script src="{{ asset('frontend/js/checkout.min.js') }}"></script>


</head>
<body data-no-turbolink>
	<header class="banner">
		<div class="wrap">
			<div class="logo logo--left ">
				<h1 class="shop__name">
					<a href="{{ route('home') }}">
					NMIGROUP
					</a>
				</h1>
			</div>
		</div>
	</header>
	<aside>
		<button class="order-summary-toggle" data-toggle="#order-summary" data-toggle-class="order-summary--is-collapsed">
			<span class="wrap">
				<span class="order-summary-toggle__inner">
					<span class="order-summary-toggle__text expandable">
						Đơn hàng ({{count($cart)}} sản phẩm)
					</span>
					<span class="order-summary-toggle__total-recap"></span>
				</span>
			</span>
		</button>
	</aside>
	<div class="content">
		<form action="{{route('postBill')}}" method="post">
			@csrf
			<div class="wrap">
				<main class="main">
					<header class="main__header">
						<div class="logo logo--left ">
							<h1 class="shop__name">
								<a href="{{ route('home') }}">
									NMIGROUP
								</a>
							</h1>
						</div>
					</header>
					<div class="main__content">
						<article class="animate-floating-labels row">
							<div class="col col--two">
								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>
												Thông tin nhận hàng
											</h2>
										</div>
									</div>
									<div class="section__content">
										<div class="fieldset">
											<div class="field " data-bind-class="{'field--show-floating-label': email}">
												<div class="field__input-wrapper">
													<label for="email" class="field__label">
														Email
													</label>
													<input name="billingEmail" id="email"
														type="email" class="field__input"
														data-bind="email" value="{{ old('billingEmail') }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg= "Email sai định dạng" id="email" class="form-control form-control-lg" required>
												</div>
												@error('billingEmail')
													<div class="alert alert-danger">{{ $message }}</div>
												@enderror
											</div>
											<div class="field " data-bind-class="{'field--show-floating-label': billing.name}">
												<div class="field__input-wrapper">
													<label for="billingName" class="field__label">Họ và tên</label>
													<input name="billingName" id="billingName"
														type="text" class="field__input"
														data-bind="billing.name" value="{{ old('billingName') }}" required>
												</div>
												@error('billingName')
													<div class="alert alert-danger">{{ $message }}</div>
												@enderror
											</div>
											<div class="field " data-bind-class="{'field--show-floating-label': billing.phone}">
												<div class="field__input-wrapper">
													<label for="billingPhone" class="field__label">
														Số điện thoại
													</label>
													<input name="billingPhone" id="billingPhone"
														type="tel" class="field__input"
														data-bind="billing.phone" value="{{ old('billingPhone') }}" required>
												</div>
												@error('billingPhone')
													<div class="alert alert-danger">{{ $message }}</div>
												@enderror
											</div>
											<div class="field">
												<div class="field__input-wrapper">
													<select name="calc_shipping_provinces" required="" class="field__input">
		
														<option value="" class="field__label">Tỉnh / Thành phố</option>
													
													</select>

												</div>

											</div>
											<div class="field">
												<div class="field__input-wrapper">
													<select name="calc_shipping_district" required="" class="field__input">
											
														<option value="" class="field__label">Quận / Huyện</option>
													
													</select>

												</div>

											</div>
											
											
											
											<input class="billing_address_1" name="billingAddress1" type="hidden" value="">
											
											<input class="billing_address_2" name="billingAddress2" type="hidden" value="">
											<div class="field " data-bind-class="{'field--show-floating-label': billing.address}">
												<div class="field__input-wrapper">
													<label for="billingAddress" class="field__label">
														Địa chỉ
													</label>
													<input name="billingAddress" id="billingAddress"
											type="text" class="field__input"
											data-bind="billing.address" value="{{ old('billingAddress') }}" required>
												</div>
												@error('billingAddress')
													<div class="alert alert-danger">{{ $message }}</div>
												@enderror
											</div>
										</div>
									</div>
								</section>
								
								<div class="fieldset">
									<h3 class="visually-hidden">Ghi chú</h3>
									<div class="field " data-bind-class="{'field--show-floating-label': note}">
										<div class="field__input-wrapper">
											<label for="note" class="field__label">
												Ghi chú (tùy chọn)
											</label>
											<textarea name="note" id="note"
										type="text" class="field__input"
										data-bind="note">{{ old('note') }}</textarea>
										</div>
										
									</div>
								</div>
								
							</div>
							<div class="col col--two">
								<section class="section" data-define="{shippingMethod: ''}">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-truck fa-lg section__title--icon hide-on-desktop"></i>
												Vận chuyển
											</h2>
										</div>
									</div>
									<div class="section__content" data-tg-refresh="refreshShipping" id="shippingMethodList"
										data-define="{isAddressSelecting: true, shippingMethods: []}">
										<div class="alert alert--loader spinner spinner--active" data-bind-show="isLoadingShippingMethod">
											<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
												<use href="#spinner"></use>
											</svg>
										</div>

										
										<div class="alert alert-retry alert--danger hide"
								data-bind-event-click="handleShippingMethodErrorRetry()"
								data-bind-show="!isLoadingShippingMethod && !isAddressSelecting && isLoadingShippingError">
											<span data-bind="loadingShippingErrorMessage"></span> <i class="fa fa-refresh"></i>
										</div>

										
										<div class="alert alert--info hide" data-bind-show="!isLoadingShippingMethod && isAddressSelecting">
											Vui lòng nhập thông tin giao hàng
										</div>
									</div>
								</section>
								
								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
												Thanh toán
											</h2>
										</div>
									</div>
									<div class="section__content">
										<div class="content-box" data-define="{paymentMethod: undefined}">
											<div class="content-box__row">
												<div class="radio-wrapper">
													<div class="radio__input">
														<input name="paymentMethod" id="paymentMethod-509901"
															type="radio" class="input-radio"
															data-bind="paymentMethod"
															value="509901"
															>
													</div>
													<label for="paymentMethod-509901" class="radio__label">
														<span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
														<span class="radio__label__accessory">
															<span class="radio__label__icon">
																<i class="payment-icon payment-icon--4"></i>
															</span>
														</span>
													</label>
												</div>
												<div class="content-box__row__desc" data-bind-show="paymentMethod == 509901">
													<p>Bạn chỉ phải thanh toán khi nhận được hàng</p>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</article>
						<div class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
							<button type="submit" class="btn btn-checkout spinner">
								<span class="spinner-label">ĐẶT HÀNG</span>
								<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
									<use href="#spinner"></use>
								</svg>
							</button>
							<a href="{{ route('home') }}" class="previous-link">
								<i class="previous-link__arrow">❮</i>
								<span class="previous-link__content">Quay về giỏ hàng</span>
							</a>
						</div>
						<div id="common-alert" data-tg-refresh="refreshError">
							<div class="alert alert--danger hide-on-desktop"
						data-bind-show="!isSubmitingCheckout && isSubmitingCheckoutError"
						data-bind="submitingCheckoutErrorMessage">
							</div>
						</div>
					</div>
				</main>
				<aside class="sidebar">
					<div class="sidebar__header">
						<h2 class="sidebar__title">
							Đơn hàng ({{ count($cart) }} sản phẩm)
						</h2>
					</div>
					<div class="sidebar__content">
						<div id="order-summary" class="order-summary order-summary--is-collapsed">
							<div class="order-summary__sections">
								<div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
									<table class="product-table">
										<caption class="visually-hidden">Chi tiết đơn hàng</caption>
										<thead class="product-table__header">
											<tr>
												<th>
													<span class="visually-hidden">Ảnh sản phẩm</span>
												</th>
												<th>
													<span class="visually-hidden">Mô tả</span>
												</th>
												<th>
													<span class="visually-hidden">Sổ lượng</span>
												</th>
												<th>
													<span class="visually-hidden">Đơn giá</span>
												</th>
											</tr>
										</thead>
										<tbody>
											@php
												$totalPrice = 0;
											@endphp
											@foreach ($cart as $item)
												@php
												if ($item['discount'] > 0) {
													$pricePro = $item['discount'];
												} else {
													$pricePro = $item['price'];
												}
												$totalPrice += $pricePro * $item['quantity'];
												@endphp
												<tr class="product">
												<td class="product__image">
													<div class="product-thumbnail">
														<div class="product-thumbnail__wrapper" data-tg-static>
															<img src="{{ $item['image']}}"
															alt="{{ languageName($item['name']) }}" class="product-thumbnail__image">
														</div>
														<span class="product-thumbnail__quantity">{{$item['quantity']}}</span>
													</div>
												</td>
												<th class="product__description">
													<span class="product__description__name">
														{{ languageName($item['name']) }}
													</span>
												</th>
												<td class="product__quantity visually-hidden"><em>Số lượng:</em>{{$item['quantity']}}</td>
												<td class="product__price">
													{{number_format($pricePro* $item['quantity'])}}₫
												</td>
												</tr>
											@endforeach
										</tbody>
									</table>
								</div>
								<div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element"
						data-define="{subTotalPriceText: '190.000₫'}"
						data-tg-refresh="refreshOrderTotalPrice" id="orderSummary">
									<table class="total-line-table">
										<caption class="visually-hidden">Tổng giá trị</caption>
										<thead>
											<tr>
												<td><span class="visually-hidden">Mô tả</span></td>
												<td><span class="visually-hidden">Giá tiền</span></td>
											</tr>
										</thead>
										<tbody class="total-line-table__tbody">
											<tr class="total-line total-line--subtotal">
												<th class="total-line__name">
													Tạm tính
												</th>
												<td class="total-line__price">{{number_format($totalPrice)}}₫</td>
												<input name="total_money" type="text" value="{{$totalPrice}}" hidden>
											</tr>
											<tr class="total-line total-line--shipping-fee">
												<th class="total-line__name">
													Phí vận chuyển
												</th>
												<td class="total-line__price" >
													30,000₫
												</td>
											</tr>
										</tbody>
										<tfoot class="total-line-table__footer">
											<tr class="total-line payment-due">
												<th class="total-line__name">
													<span class="payment-due__label-total">
														Tổng cộng
													</span>
												</th>
												<td class="total-line__price">
													<span class="payment-due__price">{{number_format($totalPrice + 30000)}}₫</span>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
									<button type="submit" class="btn btn-checkout spinner">
										<span class="spinner-label">ĐẶT HÀNG</span>
										<svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
											<use href="#spinner"></use>
										</svg>
									</button>
									<a href="{{ route('home') }}" class="previous-link">
										<i class="previous-link__arrow">❮</i>
										<span class="previous-link__content">Quay về giỏ hàng</span>
									</a>
								</div>
								<div id="common-alert-sidebar" data-tg-refresh="refreshError">
									<div class="alert alert--danger hide-on-mobile hide"
							data-bind-show="!isSubmitingCheckout && isSubmitingCheckoutError"
							data-bind="submitingCheckoutErrorMessage">
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</form>
		<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
			<symbol id="spinner">
				<svg viewBox="0 0 30 30">
					<circle stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-dasharray="85%"
							cx="50%" cy="50%" r="40%">
						<animateTransform attributeName="transform"
							type="rotate"
							from="0 15 15"
							to="360 15 15"
							dur="0.7s"
							repeatCount="indefinite" />
					</circle>
				</svg>
			</symbol>
		</svg>
	</div>
	<style>
		.alert-danger {
			color: red;
		}
	</style>
	<script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>
	<script>
	if (address_2 = localStorage.getItem('address_2_saved')) {
	  $('select[name="calc_shipping_district"] option').each(function() {
		if ($(this).text() == address_2) {
		  $(this).attr('selected', '')
		}
	  })
	  $('input.billing_address_2').attr('value', address_2)
	}
	if (district = localStorage.getItem('district')) {
	  $('select[name="calc_shipping_district"]').html(district)
	  $('select[name="calc_shipping_district"]').on('change', function() {
		var target = $(this).children('option:selected')
		target.attr('selected', '')
		$('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
		address_2 = target.text()
		$('input.billing_address_2').attr('value', address_2)
		district = $('select[name="calc_shipping_district"]').html()
		localStorage.setItem('district', district)
		localStorage.setItem('address_2_saved', address_2)
	  })
	}
	$('select[name="calc_shipping_provinces"]').each(function() {
	  var $this = $(this),
		stc = ''
	  c.forEach(function(i, e) {
		e += +1
		stc += '<option value=' + e + '>' + i + '</option>'
		$this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
		if (address_1 = localStorage.getItem('address_1_saved')) {
		  $('select[name="calc_shipping_provinces"] option').each(function() {
			if ($(this).text() == address_1) {
			  $(this).attr('selected', '')
			}
		  })
		  $('input.billing_address_1').attr('value', address_1)
		}
		$this.on('change', function(i) {
		  i = $this.children('option:selected').index() - 1
		  var str = '',
			r = $this.val()
		  if (r != '') {
			arr[i].forEach(function(el) {
			  str += '<option value="' + el + '">' + el + '</option>'
			  $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)
			})
			var address_1 = $this.children('option:selected').text()
			var district = $('select[name="calc_shipping_district"]').html()
			localStorage.setItem('address_1_saved', address_1)
			localStorage.setItem('district', district)
			$('select[name="calc_shipping_district"]').on('change', function() {
			  var target = $(this).children('option:selected')
			  target.attr('selected', '')
			  $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
			  var address_2 = target.text()
			  $('input.billing_address_2').attr('value', address_2)
			  district = $('select[name="calc_shipping_district"]').html()
			  localStorage.setItem('district', district)
			  localStorage.setItem('address_2_saved', address_2)
			})
		  } else {
			$('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')
			district = $('select[name="calc_shipping_district"]').html()
			localStorage.setItem('district', district)
			localStorage.removeItem('address_1_saved', address_1)
		  }
		})
	  })
	})</script>
</body>
</html>
