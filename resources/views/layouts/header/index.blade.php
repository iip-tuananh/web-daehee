<header id="header" class="header has-sticky sticky-jump">
   <div class="header-wrapper">
      <div id="masthead" class="header-main ">
         <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
         <!-- Logo -->
         <div id="logo" class="flex-col logo">
               <!-- Header logo -->
               <a href="{{route('home')}}" title="{{$setting->company}}" rel="home">
               <img width="212" height="68" src="{{$setting->logo}}" class="header_logo header-logo" alt="{{$setting->company}}" /><img width="212" height="68" src="{{$setting->logo}}" class="header-logo-dark" alt="{{$setting->company}}" /></a>
         </div>
         <!-- Mobile Left Elements -->
         <div class="flex-col show-for-medium flex-left">
               <ul class="mobile-nav nav nav-left ">
                  <li class="nav-icon has-icon">
                     <div class="header-button">		<a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="icon button circle is-outline is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                     <i class="icon-menu" ></i>
                     </a>
                     </div>
                  </li>
               </ul>
         </div>
         <!-- Left Elements -->
         <div class="flex-col hide-for-medium flex-left
               flex-grow">
               <ul class="header-nav header-nav-main nav nav-left  nav-divided nav-size-medium nav-spacing-large nav-uppercase" >
               </ul>
         </div>
         <!-- Right Elements -->
         <div class="flex-col hide-for-medium flex-right">
               <ul class="header-nav header-nav-main nav nav-right  nav-divided nav-size-medium nav-spacing-large nav-uppercase">
                  <li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-28 active"><a href="{{route('home')}}" aria-current="page" class="nav-top-link">Trang ch???</a></li>
                  <li id="menu-item-1417" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1417"><a href="{{route('aboutUs')}}" class="nav-top-link">Gi???i thi???u</a></li>
                  <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-27 has-dropdown">
                     <a href="{{route('listService')}}" class="nav-top-link">L??nh v???c<i class="icon-angle-down" ></i></a>
                     <ul class="sub-menu nav-dropdown nav-dropdown-default">
                        @foreach ($servicehome as $service)
                        @if ($service->link != null)
                           <li id="menu-item-3084" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3084"><a href="javascript:void(0);" onclick="redirectLink('{{$service->link}}','{{route('serviceDetail', ['slug'=>$service->slug])}}')">{{$service->name}}</a></li>
                        @else
                           <li id="menu-item-3084" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3084"><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}">{{$service->name}}</a></li>
                        @endif
                        @endforeach
                     </ul>
                  </li>
                  <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="{{route('allProduct')}}" class="nav-top-link">D??? ??n</a></li>
                  <li id="menu-item-7782" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7782"><a href="{{route('allListBlog')}}" class="nav-top-link">Tin t???c</a></li>
                  <li id="menu-item-9337" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9337"><a href="{{route('helpCus')}}" class="nav-top-link">Tuy???n d???ng</a></li>
                  <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="{{route('lienHe')}}" class="nav-top-link">Li??n h???</a></li>
               </ul>
         </div>
         <!-- Mobile Right Elements -->
         <div class="flex-col show-for-medium flex-right">
               <ul class="mobile-nav nav nav-right ">
                  <li class="header-search header-search-lightbox has-icon">
                     <div class="header-button">		<a href="#search-lightbox" aria-label="Search" data-open="#search-lightbox" data-focus="input.search-field"
                     class="icon button circle is-outline is-small">
                     <i class="icon-search" style="font-size:16px;"></i></a>
                     </div>
                     <div id="search-lightbox" class="mfp-hide dark text-center">
                     <div class="searchform-wrapper ux-search-box relative form-flat is-large">
                           <form method="post" class="searchform" action="{{route('search_result')}}" role="search">
                              @csrf
                              <div class="flex-row relative">
                                 <div class="flex-col flex-grow">
                                 <input type="search" class="search-field mb-0" name="keyword" value="" id="s" placeholder="Search&hellip;" />
                                 </div>
                                 <div class="flex-col">
                                 <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                 <i class="icon-search" ></i>				</button>
                                 </div>
                              </div>
                              <div class="live-search-results text-left z-top"></div>
                           </form>
                     </div>
                     </div>
                  </li>
               </ul>
         </div>
         </div>
         <div class="container">
         <div class="top-divider full-width"></div>
         </div>
      </div>
      <div class="header-bg-container fill">
         <div class="header-bg-image fill"></div>
         <div class="header-bg-color fill"></div>
      </div>
   </div>
</header>
<!-- Mobile Sidebar -->
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
   <div class="sidebar-menu no-scrollbar ">
         <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
            <li class="header-search-form search-form html relative has-icon">
               <div class="header-search-form-wrapper">
               <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                     <form method="post" class="searchform" action="{{route('search_result')}}" role="search">
                        @csrf
                        <div class="flex-row relative">
                           <div class="flex-col flex-grow">
                           <input type="search" class="search-field mb-0" name="keyword" value="" id="s" placeholder="Search&hellip;" />
                           </div>
                           <div class="flex-col">
                           <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                           <i class="icon-search" ></i>				</button>
                           </div>
                        </div>
                        <div class="live-search-results text-left z-top"></div>
                     </form>
               </div>
               </div>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-28"><a href="{{route('home')}}" aria-current="page">Trang ch???</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1417"><a href="{{route('aboutUs')}}">Gi???i thi???u</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-27">
               <a href="{{route('listService')}}">L??nh v???c</a>
               <ul class="sub-menu nav-sidebar-ul children">
                  @foreach ($servicehome as $service)
                  @if ($service->link != null)
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3084"><a href="javascript:void(0);" onclick="redirectLink('{{$service->link}}','{{route('serviceDetail', ['slug'=>$service->slug])}}')">{{$service->name}}</a></li>
                  @else
                     <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3084"><a href="{{route('serviceDetail', ['slug'=>$service->slug])}}">{{$service->name}}</a></li>
                  @endif
                  @endforeach
               </ul>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="{{route('allProduct')}}">D??? ??n</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7782"><a href="{{route('allListBlog')}}">Tin t???c</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9337"><a href="{{route('helpCus')}}">Tuy???n d???ng</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="{{route('lienHe')}}">Li??n h???</a></li>
         </ul>
   </div>
</div>