<footer id="footer" class="footer-wrapper">
   <!-- FOOTER 1 -->
   <div class="footer-widgets footer footer-1">
         <div class="row large-columns-4 mb-0">
            <div id="text-13" class="col pb-0 widget widget_text">
               <span class="widget-title">GIỚI THIỆU</span>
               <div class="is-divider small"></div>
               <div class="textwidget">
               <p>{{$setting->webname}}</p>
               <div class="social-icons share-icons share-row relative" ><a href="whatsapp://send?text=Trang%20ch%E1%BB%A7 - {{url()->current()}}" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium" title="Share on WhatsApp"><i class="icon-whatsapp"></i></a><a href="{{url()->current()}}" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip facebook" title="Share on Facebook"><i class="icon-facebook" ></i></a><a href="{{url()->current()}}" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip twitter" title="Share on Twitter"><i class="icon-twitter" ></i></a><a href="/cdn-cgi/l/email-protection#3f5a514b5a4d46504a4d7f5e5b5b4d5a4c4c575a4d5a115c5052004c4a5d555a5c4b026b4d5e51581a0d0f5c571a7a0e1a7d7d1a7e08195e524f045d505b46027c575a5c541a0d0f4b57564c1a0d0f504a4b051a0d0f574b4b4f4c0510105b5a534b5e584d504a4f11495110" rel="nofollow" class="icon button circle is-outline tooltip email" title="Email to a Friend"><i class="icon-envelop" ></i></a><a href="//pinterest.com/pin/create/button/?url=https:{{url()->current()}}&amp;media=&amp;description=Trang%20ch%E1%BB%A7" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest" title="Pin on Pinterest"><i class="icon-pinterest" ></i></a><a href="{{url()->current()}}&#038;title=Trang%20ch%E1%BB%A7" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="noopener noreferrer nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin" title="Share on LinkedIn"><i class="icon-linkedin" ></i></a></div>
               </div>
            </div>
            <div id="nav_menu-4" class="col pb-0 widget widget_nav_menu">
               <span class="widget-title">LIÊN KẾT</span>
               <div class="is-divider small"></div>
               <div class="menu-menu-footer-container">
               <ul id="menu-menu-footer" class="menu">
                     <li id="menu-item-10142" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10142"><a href="{{route('listService')}}">Lĩnh vực</a></li>
                     <li id="menu-item-286" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-286"><a href="{{route('allProduct')}}">Dự án</a></li>
                     <li id="menu-item-287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-287"><a href="{{route('helpCus')}}">Tuyển dụng</a></li>
                     <li id="menu-item-288" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-288"><a href="{{route('lienHe')}}">Liên hệ</a></li>
               </ul>
               </div>
            </div>
            <div id="text-14" class="col pb-0 widget widget_text">
               <span class="widget-title">VĂN PHÒNG TRỤ SỞ</span>
               <div class="is-divider small"></div>
               <div class="textwidget">
               <p>Địa chỉ: {{$setting->address1}}<br />
                     Hotline: {{$setting->phone1}}<br />
                     @if ($setting->phone2)
                     ĐT: {{$setting->phone2}}<br />
                     @endif
                     Email: {{$setting->email}}
               </p>
               </div>
            </div>
            <div id="text-15" class="col pb-0 widget widget_text">
               <span class="widget-title">FANPAGE</span>
               <div class="is-divider small"></div>
               <div class="textwidget">
                  <div class="fb-page" 
                  data-href="{{$setting->facebook}}"
                  data-width="380" 
                  data-hide-cover="false"
                  data-show-facepile="false"></div>
               </div>
            </div>
         </div>
   </div>
   <!-- FOOTER 2 -->
   <div class="absolute-footer dark medium-text-center small-text-center">
         <div class="container clearfix">
            <div class="footer-secondary pull-right">
               <div class="footer-text inline-block small-block">
               <div class="row dark large-columns-3 mb-0">
                     <div class="col pb-0 footer-phone text-left"><a href="tel:">
                        <img src="{{url('frontend/images/icon-phone.png')}}" alt="icon-phone">
                        </a><span>Hotline: {{$setting->phone1}}</span>
                     </div>
                     <div class="col pb-0 footer-center" style="
                        text-align: center;
                        ">
                        Copyright © 2022 Daehee | All rights reserved
                        <p style="
                           color: #fff3;
                           ">Thiết kế và vận hành bởi sbtsoftware.vn</p>
                     </div>
                     <div class="col pb-0 footer-mxh text-right">
                        <span class="text-line">Kết nối với Daehee :</span>
                        <div class="social-icons follow-icons" style="font-size:120%"><a href="{{$setting->facebook}}" target="_blank" data-label="Facebook"  rel="noopener noreferrer nofollow" class="icon primary button circle facebook tooltip" title="Follow on Facebook"><i class="icon-facebook" ></i></a><a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer nofollow" data-label="YouTube" class="icon primary button circle  youtube tooltip" title="Follow on YouTube"><i class="icon-youtube" ></i></a></div>
                     </div>
               </div>
               </div>
            </div>
         </div>
   </div>
</footer>