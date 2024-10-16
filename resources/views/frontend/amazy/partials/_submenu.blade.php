<style>
    /* Custom styles for Google Translate element */
    #google_translate_element {
      font-family: Arial, sans-serif;
      margin: 20px 0;
    }

    /* Style for the dropdown container */
    .goog-te-combo {
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 5px;
      background-color: #f9f9f9;
      font-size: 14px;
      color: #333;
    }

    .goog-te-gadget {
        font-family: arial;
        font-size: 11px;
        color: #f4f7f9 !important;
        white-space: nowrap;
    }

    .VIpgJd-ZVi9od-l4eHX-hSRGPd {
    display: none; /* Hide the "Powered by" link */
    }

    /* Style for the dropdown */
    .goog-te-combo option {
      padding: 10px;
    }

    /* Optional: Add a hover effect */
    .goog-te-combo:hover {
      border-color: #007BFF;
    }
</style>

  <div class="header_topbar_area {{$top_bar->status == 0 ? 'd-none':''}}" id="top_bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__wrapper">
                    <!-- header__left__start  -->
                    <div class="header__left d-flex align-items-center dynamic_svg">
                      {{-- {{$topnavbar_left_menu}} --}}
                      <div id="google_translate_element" style="margin-top:auto;overflow:auto;"></div>
                        @if($topnavbar_left_menu)
                            @foreach($topnavbar_left_menu->elements->where('has_parent',null) as $element)
                                @if($element->type == 'link')
                                <a href="{{ $element->link }}" class="single_top_lists d-flex align-items-center">
                                    <span class="top_menu_icon"><i class="{{$element->icon}}"></i></span>
                                    <span>{{textLimit($element->title,25)}}</span>
                                </a>
                                @elseif($element->type == 'link' && strtolower($element->title) == 'appstore' || $element->type == 'link' && strtolower($element->title) == 'app store')
                                    <a href="{{ $element->link }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <svg  width="9.781" height="11.997" viewBox="0 0 9.781 11.997">
                                            <g id="apple" transform="translate(-2.104)">
                                              <g id="Group_2646" data-name="Group 2646" transform="translate(2.104)">
                                                <path id="Path_3137" data-name="Path 3137" d="M13.673,0h.085a2.569,2.569,0,0,1-.647,1.936,2.005,2.005,0,0,1-1.765.829A2.492,2.492,0,0,1,12,.889,2.844,2.844,0,0,1,13.673,0Z" transform="translate(-6.474)" fill="#fd4949"/>
                                                <path id="Path_3138" data-name="Path 3138" d="M11.885,11.4v.024a6.98,6.98,0,0,1-1,1.925c-.381.524-.848,1.23-1.681,1.23-.72,0-1.2-.463-1.937-.476-.781-.013-1.21.387-1.924.488H5.1a2.174,2.174,0,0,1-1.255-.865A7.578,7.578,0,0,1,2.1,9.371V8.834A3.516,3.516,0,0,1,3.639,5.948a2.592,2.592,0,0,1,1.741-.4,4.378,4.378,0,0,1,.853.244,2.355,2.355,0,0,0,.852.255,2.046,2.046,0,0,0,.6-.183,3.679,3.679,0,0,1,1.924-.341A2.669,2.669,0,0,1,11.568,6.69a2.517,2.517,0,0,0-1.279,2.5A2.578,2.578,0,0,0,11.885,11.4Z" transform="translate(-2.104 -2.599)" fill="#fd4949"/>
                                              </g>
                                            </g>
                                          </svg>
                                        <span>{{textLimit($element->title,25)}}</span>
                                    </a>

                                @elseif($element->type == 'page' && $element->page->slug == 'merchant' && isModuleActive('MultiVendor'))
                                    @if (app('business_settings')->where('category_type', 'vendor_configuration')->where('type',
                                    'Multi-Vendor System Activate')->first()->status)
                                        @if(auth()->check() && auth()->user()->role->type == 'customer')
                                            <a href="{{ route('frontend.merchant-register-step-first') }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                                <span>{{__('defaultTheme.become a merchant')}}</span>
                                            </a>
                                        @elseif(!auth()->check())
                                            <a href="{{ route('frontend.merchant-register-step-first') }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                                <span>{{__('defaultTheme.become a merchant')}}</span>
                                            </a>
                                        @else
                                            @continue
                                        @endif
                                    @else
                                        @continue
                                    @endif
                                @elseif($element->type == 'page' && $element->page->slug == 'track-order')
                                    <a href="{{ route('frontend.order.track') }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">

                                        <svg  width="17.308" height="11.999" viewBox="0 0 17.308 11.999">
                                            <g id="Track" transform="translate(0 -78.521)">
                                              <g id="Group_1585" data-name="Group 1585" transform="translate(10.89 86.157)">
                                                <g id="Group_1584" data-name="Group 1584">
                                                  <path id="Path_1903" data-name="Path 1903" d="M324.333,304.4a2.182,2.182,0,1,0,2.182,2.182A2.184,2.184,0,0,0,324.333,304.4Zm0,3.273a1.091,1.091,0,1,1,1.091-1.091A1.092,1.092,0,0,1,324.333,307.676Z" transform="translate(-322.151 -304.403)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1587" data-name="Group 1587" transform="translate(3.436 86.157)">
                                                <g id="Group_1586" data-name="Group 1586">
                                                  <path id="Path_1904" data-name="Path 1904" d="M103.829,304.4a2.182,2.182,0,1,0,2.182,2.182A2.184,2.184,0,0,0,103.829,304.4Zm0,3.273a1.091,1.091,0,1,1,1.091-1.091A1.092,1.092,0,0,1,103.829,307.676Z" transform="translate(-101.647 -304.403)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1589" data-name="Group 1589" transform="translate(11.181 79.612)">
                                                <g id="Group_1588" data-name="Group 1588">
                                                  <path id="Path_1905" data-name="Path 1905" d="M334.116,111.09a.546.546,0,0,0-.487-.3h-2.873v1.091h2.536l1.485,2.954.975-.49Z" transform="translate(-330.756 -110.79)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1591" data-name="Group 1591" transform="translate(7.309 87.811)">
                                                <g id="Group_1590" data-name="Group 1590">
                                                  <rect id="Rectangle_1137" data-name="Rectangle 1137" width="4.127" height="1.091" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1593" data-name="Group 1593" transform="translate(1.545 87.811)">
                                                <g id="Group_1592" data-name="Group 1592">
                                                  <path id="Path_1906" data-name="Path 1906" d="M48.151,353.345H46.26a.545.545,0,1,0,0,1.091h1.891a.545.545,0,1,0,0-1.091Z" transform="translate(-45.715 -353.345)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1595" data-name="Group 1595" transform="translate(1.545 78.521)">
                                                <g id="Group_1594" data-name="Group 1594">
                                                  <path id="Path_1907" data-name="Path 1907" d="M61.363,84.477,60.29,83.1a.545.545,0,0,0-.431-.211H55.9V79.066a.545.545,0,0,0-.545-.545H46.26a.545.545,0,1,0,0,1.091h8.545V83.43a.545.545,0,0,0,.545.545h4.242L60.387,85v2.813H58.878a.545.545,0,0,0,0,1.091h2.054a.545.545,0,0,0,.545-.545V84.812A.546.546,0,0,0,61.363,84.477Z" transform="translate(-45.715 -78.521)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1597" data-name="Group 1597" transform="translate(0.891 85.048)">
                                                <g id="Group_1596" data-name="Group 1596">
                                                  <path id="Path_1908" data-name="Path 1908" d="M29.407,271.6H26.9a.545.545,0,1,0,0,1.091h2.509a.545.545,0,0,0,0-1.091Z" transform="translate(-26.353 -271.597)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1599" data-name="Group 1599" transform="translate(0 82.903)">
                                                <g id="Group_1598" data-name="Group 1598">
                                                  <path id="Path_1909" data-name="Path 1909" d="M5.2,208.134H.545a.545.545,0,0,0,0,1.091H5.2a.545.545,0,0,0,0-1.091Z" transform="translate(0 -208.134)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1601" data-name="Group 1601" transform="translate(0.891 80.757)">
                                                <g id="Group_1600" data-name="Group 1600">
                                                  <path id="Path_1910" data-name="Path 1910" d="M31.553,144.672H26.9a.545.545,0,1,0,0,1.091h4.654a.545.545,0,0,0,0-1.091Z" transform="translate(-26.353 -144.672)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                            </g>
                                          </svg>

                                        <span>{{__('defaultTheme.track_your_order') }}</span>
                                    </a>
                                @elseif($element->type == 'page' && $element->page->slug == 'contact-us')
                                    <a href="{{ url('/contact-us') }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{ __('defaultTheme.support')}}</span>
                                    </a>
                                @elseif($element->type == 'page' && $element->page->status == 1 && $element->page->title != 'Compare' && $element->page->title != 'My Wish List' && $element->page->title != 'My Cart')
                                    @if(!isModuleActive('Lead') && $element->page->module == 'Lead')
                                        @continue
                                    @endif
                                    @if(!isModuleActive('MultiVendor') && $element->page->slug == 'merchant' || !isModuleActive('MultiVendor') && $element->page->module == 'MultiVendor')
                                        @continue
                                    @endif
                                    <a href="{{ url(@$element->page->slug) }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{ ucfirst(textLimit($element->title, 25)) }}</span>
                                    </a>
                                @elseif($element->type == 'category')
                                    <a href="{{route('frontend.category-product',['slug' => $element->category->slug, 'item' =>'category'])}}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{ textLimit($element->title,25) }}</span>
                                    </a>
                                @elseif($element->type == 'brand')
                                    <a href="{{route('frontend.category-product',['slug' => $element->brand->slug, 'item' =>'brand'])}}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{ $element->title }}</span>
                                    </a>
                                @elseif($element->type == 'tag')
                                    <a href="{{route('frontend.category-product',['slug' => $element->tag->name, 'item' =>'tag'])}}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{ $element->title }}</span>
                                    </a>
                                @elseif($element->type == 'product' && @$element->product)
                                    <a href="{{singleProductURL(@$element->product->seller->slug, @$element->product->slug)}}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{ $element->title }}</span>
                                    </a>
                                @elseif($element->type == 'function' & $element->element_id == 1)
                                    <div class="single_top_lists position-relative  d-flex align-items-center shoping_language d-none d-md-inline-flex">
                                        <div class="">
                                            <div class="language_toggle_btn gj-cursor-pointer d-flex align-items-center gap_10 ">
                                                <span>{{strtoupper($locale)}}</span>
                                                <span class="vertical_line style2 d-none d-md-block"></span>
                                                <span>{{strtoupper($currency_code)}}</span>
                                                <i class="ti-angle-down"></i>
                                            </div>
                                            <div class="language_toggle_box position-absolute top-100 end-0 bg-white">
                                                <form action="{{route('frontend.locale')}}" method="POST">
                                                    @csrf
                                                    <div class="lag_select">
                                                        <span class="font_12 f_w_500 text-uppercase mb_10 d-block">{{ __('defaultTheme.language') }}</span>
                                                        <select class="amaz_select6 wide mb_20" name="lang">
                                                            @foreach($langs as $key => $lang)
                                                            <option {{ $locale==$lang->code?'selected':'' }} value="{{$lang->code}}">
                                                                {{$lang->native}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="lag_select">
                                                        <span class="font_12 f_w_500 text-uppercase mb_10 d-block">{{ __('defaultTheme.currency') }}</span>
                                                        <select class="amaz_select6 wide" name="currency">
                                                            @foreach($currencies as $key => $item)
                                                            <option {{$currency_code==$item->code?'selected':'' }}
                                                                value="{{$item->id}}">
                                                                ({{$item->symbol}}) {{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="amaz_primary_btn style3 save_btn">{{ __('defaultTheme.save_change') }}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(!$loop->last)
                                    <span class="vertical_line style2 d-none d-lg-inline-flex"></span>
                                @endif
                            @endforeach

                        @endif


                        @if(app('general_setting')->disable_seller_plan==1)
                        <div class="single_top_lists position-relative  d-flex align-items-center shoping_language d-none d-md-inline-flex">
                            <div class="">
                                <div class="language_toggle_btn gj-cursor-pointer d-flex align-items-center gap_10 ">
                                    <span>{{__('common.Become a Seller')}}</span>
                                    <i class="ti-angle-down"></i>
                                </div>
                                <ul class="language_toggle_box position-absolute top-100 end-0 bg-white" style="padding: 20px 0px;width: 149px;">
                                    <li class="dropdown-item mb-2" style="font-size: 11px;"><a href="{{url('/merchant-register-step-2/none')}}"><i class="fas fa-file-signature" aria-hidden="true"></i> {{__('common.register')}}</a></li>
                                    <li class="dropdown-item" style="font-size: 11px;"><a href="{{url('/seller/login')}}"><i class="fas fa-sign-in-alt" aria-hidden="true"></i> {{__('common.login')}}</a></li>
                                </ul>
                            </div>
                        </div>
                        @endif

                    </div>
                    <!-- header__left__end  -->
                    <div class="header__center d-flex align-items-center dynamic_svg">
                        {{-- Sign up for 10% off your first order.
                        @if($topnavbar_center_menu)
                        @foreach($topnavbar_center_menu->elements->where('has_parent',null) as $element)
                            @if($element->type == 'link')
                                <a href="{{ $element->link }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                    <span>{{textLimit($element->title,25)}}</span>
                                </a>
                            @elseif($element->type == 'tag')
                                <a href="{{route('frontend.category-product',['slug' => $element->tag->name, 'item' =>'tag'])}}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                    <span>{{ $element->title }}</span>
                                </a>
                            @endif
                        @endforeach
                        @endif --}}
                    </div>
                    <!-- header__right_start  -->
                    <div class="header_top_area_right border-top-0 border-bottom-0 dynamic_svg">
                        @if(isset($topnavbar_right_menu))
                            @foreach($topnavbar_right_menu->elements->where('has_parent',null) as $element)
                                @if($element->type == 'page' && $element->page->slug == 'track-order')
                                    <a href="{{ route('frontend.order.track') }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">

                                        <svg  width="17.308" height="11.999" viewBox="0 0 17.308 11.999">
                                            <g id="Track" transform="translate(0 -78.521)">
                                              <g id="Group_1585" data-name="Group 1585" transform="translate(10.89 86.157)">
                                                <g id="Group_1584" data-name="Group 1584">
                                                  <path id="Path_1903" data-name="Path 1903" d="M324.333,304.4a2.182,2.182,0,1,0,2.182,2.182A2.184,2.184,0,0,0,324.333,304.4Zm0,3.273a1.091,1.091,0,1,1,1.091-1.091A1.092,1.092,0,0,1,324.333,307.676Z" transform="translate(-322.151 -304.403)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1587" data-name="Group 1587" transform="translate(3.436 86.157)">
                                                <g id="Group_1586" data-name="Group 1586">
                                                  <path id="Path_1904" data-name="Path 1904" d="M103.829,304.4a2.182,2.182,0,1,0,2.182,2.182A2.184,2.184,0,0,0,103.829,304.4Zm0,3.273a1.091,1.091,0,1,1,1.091-1.091A1.092,1.092,0,0,1,103.829,307.676Z" transform="translate(-101.647 -304.403)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1589" data-name="Group 1589" transform="translate(11.181 79.612)">
                                                <g id="Group_1588" data-name="Group 1588">
                                                  <path id="Path_1905" data-name="Path 1905" d="M334.116,111.09a.546.546,0,0,0-.487-.3h-2.873v1.091h2.536l1.485,2.954.975-.49Z" transform="translate(-330.756 -110.79)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1591" data-name="Group 1591" transform="translate(7.309 87.811)">
                                                <g id="Group_1590" data-name="Group 1590">
                                                  <rect id="Rectangle_1137" data-name="Rectangle 1137" width="4.127" height="1.091" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1593" data-name="Group 1593" transform="translate(1.545 87.811)">
                                                <g id="Group_1592" data-name="Group 1592">
                                                  <path id="Path_1906" data-name="Path 1906" d="M48.151,353.345H46.26a.545.545,0,1,0,0,1.091h1.891a.545.545,0,1,0,0-1.091Z" transform="translate(-45.715 -353.345)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1595" data-name="Group 1595" transform="translate(1.545 78.521)">
                                                <g id="Group_1594" data-name="Group 1594">
                                                  <path id="Path_1907" data-name="Path 1907" d="M61.363,84.477,60.29,83.1a.545.545,0,0,0-.431-.211H55.9V79.066a.545.545,0,0,0-.545-.545H46.26a.545.545,0,1,0,0,1.091h8.545V83.43a.545.545,0,0,0,.545.545h4.242L60.387,85v2.813H58.878a.545.545,0,0,0,0,1.091h2.054a.545.545,0,0,0,.545-.545V84.812A.546.546,0,0,0,61.363,84.477Z" transform="translate(-45.715 -78.521)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1597" data-name="Group 1597" transform="translate(0.891 85.048)">
                                                <g id="Group_1596" data-name="Group 1596">
                                                  <path id="Path_1908" data-name="Path 1908" d="M29.407,271.6H26.9a.545.545,0,1,0,0,1.091h2.509a.545.545,0,0,0,0-1.091Z" transform="translate(-26.353 -271.597)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1599" data-name="Group 1599" transform="translate(0 82.903)">
                                                <g id="Group_1598" data-name="Group 1598">
                                                  <path id="Path_1909" data-name="Path 1909" d="M5.2,208.134H.545a.545.545,0,0,0,0,1.091H5.2a.545.545,0,0,0,0-1.091Z" transform="translate(0 -208.134)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                              <g id="Group_1601" data-name="Group 1601" transform="translate(0.891 80.757)">
                                                <g id="Group_1600" data-name="Group 1600">
                                                  <path id="Path_1910" data-name="Path 1910" d="M31.553,144.672H26.9a.545.545,0,1,0,0,1.091h4.654a.545.545,0,0,0,0-1.091Z" transform="translate(-26.353 -144.672)" fill="#fc5e49"/>
                                                </g>
                                              </g>
                                            </g>
                                          </svg>

                                        <span>{{__('defaultTheme.track_your_order') }}</span>
                                    </a>
                                @elseif($element->type == 'link' && strtolower($element->title) == 'playstore' || $element->type == 'link' && strtolower($element->title) == 'play store')
                                    <a href="{{ $element->link }}" class="single_top_lists d-flex align-items-center">

                                        <svg  width="10.685" height="11.998" viewBox="0 0 10.685 11.998">
                                            <g id="playstore" transform="translate(-0.5 0)">
                                              <path id="Path_3133" data-name="Path 3133" d="M.721,18.855a1.1,1.1,0,0,0-.221.666V29.3a1.1,1.1,0,0,0,.192.625l5.323-5.552Zm0,0" transform="translate(0 -18.414)" fill="#fd4949"/>
                                              <path id="Path_3134" data-name="Path 3134" d="M40.32,5.455l1.727-1.8-6.07-3.5a1.094,1.094,0,0,0-.848-.109Zm0,0" transform="translate(-33.817 0)" fill="#fd4949"/>
                                              <path id="Path_3135" data-name="Path 3135" d="M38.134,276.18l-5.243,5.469a1.088,1.088,0,0,0,.347.057,1.1,1.1,0,0,0,.553-.15l6.114-3.53Zm0,0" transform="translate(-31.632 -269.708)" fill="#fd4949"/>
                                              <path id="Path_3136" data-name="Path 3136" d="M281.079,172.419l-1.775-1.025-1.867,1.947,1.91,1.993,1.731-1a1.106,1.106,0,0,0,0-1.916Zm0,0" transform="translate(-270.448 -167.378)" fill="#fd4949"/>
                                            </g>
                                          </svg>
                                        <span>{{textLimit($element->title,25)}}</span>
                                    </a>
                                @elseif($element->type == 'link' && strtolower($element->title) == 'appstore' || $element->type == 'link' && strtolower($element->title) == 'app store')
                                    <a href="{{ $element->link }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">


                                        <svg  width="9.781" height="11.997" viewBox="0 0 9.781 11.997">
                                            <g id="apple" transform="translate(-2.104)">
                                              <g id="Group_2646" data-name="Group 2646" transform="translate(2.104)">
                                                <path id="Path_3137" data-name="Path 3137" d="M13.673,0h.085a2.569,2.569,0,0,1-.647,1.936,2.005,2.005,0,0,1-1.765.829A2.492,2.492,0,0,1,12,.889,2.844,2.844,0,0,1,13.673,0Z" transform="translate(-6.474)" fill="#fd4949"/>
                                                <path id="Path_3138" data-name="Path 3138" d="M11.885,11.4v.024a6.98,6.98,0,0,1-1,1.925c-.381.524-.848,1.23-1.681,1.23-.72,0-1.2-.463-1.937-.476-.781-.013-1.21.387-1.924.488H5.1a2.174,2.174,0,0,1-1.255-.865A7.578,7.578,0,0,1,2.1,9.371V8.834A3.516,3.516,0,0,1,3.639,5.948a2.592,2.592,0,0,1,1.741-.4,4.378,4.378,0,0,1,.853.244,2.355,2.355,0,0,0,.852.255,2.046,2.046,0,0,0,.6-.183,3.679,3.679,0,0,1,1.924-.341A2.669,2.669,0,0,1,11.568,6.69a2.517,2.517,0,0,0-1.279,2.5A2.578,2.578,0,0,0,11.885,11.4Z" transform="translate(-2.104 -2.599)" fill="#fd4949"/>
                                              </g>
                                            </g>
                                          </svg>
                                        <span>{{textLimit($element->title,25)}}</span>
                                    </a>

                                
                                @elseif($element->type == 'page' && $element->page->slug == 'about-us')
                                    <a href="{{ url('/about-us') }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <svg  width="16" height="16" viewBox="0 0 16 16">
                                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                                        </svg>
                                        <span>{{ ucfirst(textLimit($element->title, 25))}}</span>
                                    </a>
                                @elseif($element->type == 'page' && $element->page->slug == 'contact-us')
                                    <a href="{{ url('/contact-us') }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <svg  width="16" height="16" viewBox="0 0 15 16">
                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                        </svg>
                                        <span>{{ __('defaultTheme.contact_us')}}</span>
                                    </a>
                                {{-- @elseif($element->type == 'page' && $element->page->slug == 'compare')
                                    <a href="{{ url('/compare') }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">

                                        <svg  width="9.426" height="11.997" viewBox="0 0 9.426 11.997">
                                            <path id="compare" d="M19.957,41.426H18.779v-9A.428.428,0,0,0,18.35,32h-.428a.428.428,0,0,0-.428.428v9H16.315a.321.321,0,0,0-.234.542L17.9,43.9a.321.321,0,0,0,.467,0l1.821-1.928a.321.321,0,0,0-.233-.542Zm5.375-7.4L23.511,32.1a.321.321,0,0,0-.467,0l-1.821,1.928a.321.321,0,0,0,.234.542h1.178v9a.428.428,0,0,0,.428.428h.428a.428.428,0,0,0,.428-.428v-9H25.1a.321.321,0,0,0,.234-.542Z" transform="translate(-15.993 -32)" fill="#fd4949"/>
                                          </svg>

                                          <span>{{__('defaultTheme.compare') }}(<span class="compare_count">{{getNumberTranslate($compares)}}</span>)</span>
                                    </a> --}}
                                @elseif($element->type == 'link')
                                    <a href="{{ $element->link }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{textLimit($element->title,25)}}</span>
                                    </a>
                                @elseif($element->type == 'page' && $element->page->status == 1 && $element->page->title != 'Compare' && $element->page->title != 'My Wish List' && $element->page->title != 'My Cart' && $element->page->title != 'Track Orders' && $element->page->title != 'About Us' && $element->page->title != 'Help & Contact Us')
                                    <input type="hidden" name="element" value="{{ $element }}">
                                    @if(!isModuleActive('Lead') && $element->page->module == 'Lead')
                                        @continue
                                    @endif
                                    @if(!isModuleActive('MultiVendor') && $element->page->slug == 'merchant' || !isModuleActive('MultiVendor') && $element->page->module == 'MultiVendor')
                                        @continue
                                    @endif
                                    <a href="{{ url(@$element->page->slug) }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{ ucfirst(textLimit($element->title, 25)) }}</span>
                                    </a>

                                @elseif($element->type == 'category')
                                    <a href="{{route('frontend.category-product',['slug' => $element->category->slug, 'item' =>'category'])}}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{textLimit($element->title,25)}}</span>
                                    </a>
                                @elseif($element->type == 'brand')
                                    <a href="{{route('frontend.category-product',['slug' => $element->brand->slug, 'item' =>'brand'])}}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{textLimit($element->title,25)}}</span>
                                    </a>
                                @elseif($element->type == 'tag')
                                    <a href="{{route('frontend.category-product',['slug' => $element->tag->name, 'item' =>'tag'])}}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{textLimit($element->title,25)}}</span>
                                    </a>
                                @elseif($element->type == 'product' && @$element->product)
                                    <a href="{{singleProductURL(@$element->product->seller->slug, @$element->product->slug)}}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex">
                                        <span>{{textLimit($element->title,25)}}</span>
                                    </a>
                                @elseif($element->type == 'function' & $element->element_id == 1)
                                    <div class="single_top_lists position-relative  d-flex align-items-center shoping_language d-none d-md-inline-flex">
                                        <div class="">
                                            <div class="language_toggle_btn gj-cursor-pointer d-flex align-items-center gap_10 ">
                                                <span>{{strtoupper($locale)}}</span>
                                                <span class="vertical_line style2 d-none d-md-block"></span>
                                                <span>{{strtoupper($currency_code)}}</span>
                                                <i class="ti-angle-down"></i>
                                            </div>
                                            <div class="language_toggle_box position-absolute top-100 end-0 bg-white">
                                                <form action="{{route('frontend.locale')}}" method="POST">
                                                    @csrf
                                                    <div class="lag_select">
                                                        <span class="font_12 f_w_500 text-uppercase mb_10 d-block">{{ __('defaultTheme.language') }}</span>
                                                        <select class="amaz_select6 wide mb_20" name="lang">
                                                            @foreach($langs as $key => $lang)
                                                            <option {{ $locale==$lang->code?'selected':'' }} value="{{$lang->code}}">
                                                                {{$lang->native}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="lag_select">
                                                        <span class="font_12 f_w_500 text-uppercase mb_10 d-block">{{ __('defaultTheme.currency') }}</span>
                                                        <select class="amaz_select6 wide" name="currency">
                                                            @foreach($currencies as $key => $item)
                                                            <option {{$currency_code==$item->code?'selected':'' }}
                                                                value="{{$item->id}}">
                                                                ({{$item->symbol}}) {{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="amaz_primary_btn style3 save_btn">{{ __('defaultTheme.save_change') }}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                    </div>
                    <!-- header__right_end  -->
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement(
        {
          includedLanguages: 'en,hi,kn',
        },
        'google_translate_element'
      );
      console.log('Translate widget initialized');
      setDefault();
      // Ensure English is selected
      removePoweredBy();  // Remove the powered by

    }
    function setDefault()
    {
        var select = document.querySelector('.goog-te-combo');
        if (select) {
          select.value = 'en';
          select.dispatchEvent(new Event('change'));
        }
    }
    function removePoweredBy() {
        var targetNode = document.querySelector('.goog-te-gadget');
        if (targetNode) {
            var divNode = document.querySelector('#\\:0\\.targetLanguage');
            var poweredBy = targetNode.querySelector('span');
            if (poweredBy && divNode) {  // Use && for logical AND
                targetNode.innerHTML = '';  // This will empty the div
                targetNode.appendChild(divNode);
                targetNode.appendChild(poweredBy);
            }
        }
    }
    </script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
