
@php
    $footer_content = \Modules\FooterSetting\Entities\FooterContent::first();
    $subscribeContent = \Modules\FrontendCMS\Entities\SubscribeContent::find(1);
    $about_section = Modules\FrontendCMS\Entities\HomePageSection::where('section_name','about_section')->first();
    $appUrl = config('app.url');
    // echo $appUrl;
@endphp
@if(url()->current() == url('/'))
{{-- <div id="about_section" class="amaz_section section_spacing4 {{ ($about_section)? ($about_section->status == 0?'d-none':'') : ''}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__title d-flex align-items-center gap-3 mb_20">
                    <h3 class="m-0 flex-fill">{{ app('general_setting')->footer_about_title }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="amaz_mazing_text">
                    @php echo app('general_setting')->footer_about_description; @endphp
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endif

<div class="footer-top" style="background-image: url('{{ $appUrl }}/public/uploads/all/66cec1a66c853.png'); ">
  <div class="container-fluid" >
    <div class="row">
	  <div class="col-xl-1 col-lg-1 col-md-6">
	    
	  </div>
	  <div class="col-xl-2 col-lg-2 col-md-6 footer_links_50">
      <center><img src="{{ $appUrl }}/public/frontend/amazy/img/free.png" alt="" class="lg"></center>
	    <div class="fotop-txt">Free Delivery</div>
	  </div>
	  <div class="col-xl-2 col-lg-2 col-md-6 footer_links_50">
      <center><img src="{{ $appUrl }}/public/frontend/amazy/img/pro.png" alt=""class="lg"></center>
	    <div class="fotop-txt">100% Purchase Protection</div>
	  </div>
	  <div class="col-xl-2 col-lg-2 col-md-6 footer_links_50">
      <center><img src="{{ $appUrl }}/public/frontend/amazy/img/sec.png" alt="" class="lg"></center>
	    <div class="fotop-txt">Secure Payment</div>
	  </div>
	  <div class="col-xl-2 col-lg-2 col-md-6 footer_links_50"> 
      <center><img src="{{ $appUrl }}/public/frontend/amazy/img/qual.png" alt="" class="lg"></center>
	    <div class="fotop-txt">Assured Quality</div>
	  </div>
	  <div class="col-xl-2 col-lg-2 col-md-6 footer_links_50">
      <center><img src="{{ $appUrl }}/public/frontend/amazy/img/org.png" alt=""  class="lg"></center>
	    <div class="fotop-txt">100% Original Products</div>
	  </div>
	  <div class="col-xl-1 col-lg-1 col-md-6">
	    
	  </div>
	</div>
  </div>
</div>

</div>

<!-- FOOTER::START  -->
    <footer class="home_three_footer">
        <div class="main_footer_wrap">
            <div class="container">
                 <div class="row">
                 <div class="col-lg-4  col-md-6">

                 <div class="logo_section">
        <img src="{{url('/')}}/public/frontend/amazy/img/newlg.png" alt="Logo" class="img-fluid"> <!-- Add your logo image here -->
        <p class="mt-3 newpara">Our mission is to provide a platform for these artisans to showcase their work and connect with customers who appreciate the value of handmade, sustainable goods.</p>
     
    </div>
    <div class="social_links mt-3">
        <a href="https://facebook.com" target="_blank" class="facebook-icon me-2" >
            <i class="fab fa-facebook"></i>
        </a>
   <a href="https://twitter.com" target="_blank" class="twitter-icon me-2">
 <img src="{{url('/')}}/public/frontend/amazy/img/amaz_icon/newttww.png" style="padding-bottom: 10px;">
</a>

        <a href="https://pinterest.com" target="_blank" class="pinterest-icon me-2">
            <i class="fab fa-pinterest"></i>
        </a>
        <a href="https://linkedin.com" target="_blank" class="linkedin-icon">
            <i class="fab fa-linkedin"></i>
        </a>
        
        
        <!--<a href="" target="_blank" class="tele-icon">-->
        <!--<i class="fab fa-telegram-plane"></i>-->
        <!--</a> -->
       
    </div>

                 </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 footer_links_50 ">
                        
                        <div class="footer_widget" >
						    <h4><b>Information</b></h4>
                            <ul class="footer_links">
                                @foreach($sectionWidgets->where('section','1') as $page)
                                    @if($page->pageData)
                                    @if(!isModuleActive('Lead') && $page->pageData->module == 'Lead')
                                        @continue
                                    @endif
                                    <li><a href="{{ url($page->pageData->slug) }}">{{$page->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 footer_links_50 ">
                        <div class="footer_widget">
						    <h4><b>My account</b></h4>
                            <ul class="footer_links">
                                @foreach($sectionWidgets->where('section','2') as $page)
                                    @if($page->pageData)
                                        @if(!isModuleActive('Lead') && $page->pageData->module == 'Lead')
                                            @continue
                                        @endif
                                        <li><a href="{{ url($page->pageData->slug) }}">{{$page->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
					<div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer_widget">
						    <h4><b>Our legal</b></h4>
                            <ul class="footer_links">
                                @foreach($sectionWidgets->where('section','4') as $page)
                                {{-- {{$page}} --}}
                                    @if($page->pageData)
                                        @if(!isModuleActive('Lead') && $page->pageData->module == 'Lead')
                                            @continue
                                        @endif
                                        <li><a href="{{ url($page->pageData->slug) }}">{{$page->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-xl-2 col-md-6">
                        <div class="footer_widget" >
                            <h4><b>Get it on</b></h4>
                            <div class="apps_box">
                                @if($footer_content->show_play_store)
                                <a href="{{$footer_content->play_store}}" class="google_play_boxx d-flex align-items-center mb_10">
                                    <div class="newimg">
                                        <img src="{{url('/')}}/public/frontend/amazy/img/amaz_icon/google-playss.jpg" alt="{{__('amazy.Google Play')}}" title="{{__('amazy.Google Play')}}">
                                    </div>
                                  
                                </a>
                                @endif
                                @if($footer_content->show_app_store)
                                <a href="{{$footer_content->app_store}}" class="google_play_boxx d-flex align-items-center">
                                    <div class="newimg">
                                        <img src="{{url('/')}}/public/frontend/amazy/img/amaz_icon/appleplay.jpg" alt="{{__('amazy.Apple Store')}}"  title="{{__('amazy.Apple Store')}}" >
                                    </div>
                                 
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                   
   
                    <!-- <x-subscribe-component :subscribeContent="$subscribeContent"/> -->
                     
                </div>
            </div>
        </div>
        <div class="copyright_area p-0">
            <div class="container">
                <div class="footer_border m-0"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy_right_text d-flex align-items-center gap_20 flex-wrap justify-content-between">
                            @php echo app('general_setting')->footer_copy_right; @endphp
                            <!--<div class="footer_list_links">
                                @foreach($sectionWidgets->where('section','3') as $page)
                                    @if($page->pageData)
                                        @if(!isModuleActive('Lead') && $page->pageData->module == 'Lead')
                                            @continue
                                        @endif
                                        <a href="{{ url($page->pageData->slug) }}">{{$page->name}}</a>
                                    @endif
                                @endforeach
                            </div>-->
							<img class="img-fluid" src="{{showImage($footer_content->payment_image)}}" alt="{{__('common.payment_method')}}" title="{{__('common.payment_method')}}">
                        </div>
                    </div>
                </div>
                @if($footer_content->show_payment_image != 0 && $footer_content->payment_image)
                    <div class="footer_border m-0"></div>
                    <!--<div class="row">
                        <div class="col-12">
                            <div class="payment_imgs text-center ">
                                <img class="img-fluid" src="{{showImage($footer_content->payment_image)}}" alt="{{__('common.payment_method')}}" title="{{__('common.payment_method')}}">
                            </div>
                        </div>
                    </div>-->
                @endif
            </div>
        </div>
    </footer>
    <!-- FOOTER::END  -->
@include('frontend.amazy.auth.partials._login_modal')
<div id="cart_data_show_div">
    @include('frontend.amazy.partials._cart_details_submenu')
</div>
<div id="cart_success_modal_div">
    @include('frontend.amazy.partials._cart_success_modal')
</div>
<input type="hidden" id="login_check" value="@if(auth()->check()) 1 @else 0 @endif">
<div class="add-product-to-cart-using-modal">

</div>

@include('frontend.amazy.partials._modals')

<div id="back-top" style="display: none;">
    <a title="{{__('common.go_to_top')}}" href="#"><i class="fas fa-chevron-up"></i></a>
</div>

@php
    $messanger_data = \Modules\GeneralSetting\Entities\FacebookMessage::first();
@endphp
@if($messanger_data->status == 1)
    @php echo $messanger_data->code; @endphp
@endif


@include('frontend.amazy.partials._script')
@stack('scripts')
@stack('wallet_scripts')



</body>




</html>

