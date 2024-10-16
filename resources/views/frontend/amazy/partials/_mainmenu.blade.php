<style>
    @media (max-width: 991px){
        .mobile_menu {
            top: 54px;
        }
    }
    @media (max-width: 767.98px){
        header.amazcartui_header .header_area .header_top_area .header__wrapper .header__left {
              justify-content: flex-start;
              margin-left: 0;
        }
        .mobile_menu {
            top: 46px;
        }
    }
    .spacing_class_r {
        margin-right: 22px; /* Adjust the spacing value as needed */
    }
    .cart_count_bottom_r {
        color: #000 !important;
    }
    .cart_count_bottom_r {
        color: #000 !important;
    }
    .wishlist_count_r {
        color: #000 !important;
    }
    .cart_count_bottom_r:hover {
        color: #dc3545 !important;
    }
    .cart_count_bottom_r:hover {
        color: #dc3545 !important;
    }
    .wishlist_count_r:hover {
        color: #dc3545 !important;
    }
    .single_wishcart_lists {
        grid-gap: 18px !important;
    }
    /* Mobile responsive CSS for header layout */
@media only screen and (max-width: 480px) {
  header.amazcartui_header .header_area .header_top_area .header__wrapper {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
  }
  
  header.amazcartui_header .header_area .header_top_area .header__wrapper .header_top_area_right {
    margin-right: -266px !important;
  }
  
  header.amazcartui_header .header_area .header_top_area {
    padding: 2.5px 0px !important;
  }
}


@media (min-width: 768px) and (max-width: 991.98px){
.amazcartui_header .slicknav_menu .slicknav_icon {
    top: 31px !important;
}
header.amazcartui_header .header_area .header_top_area {
    padding: 5.5px 0px !important;
}
}


</style>

<div class="header_top_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__wrapper">
                    <!-- header__left__start  -->
                    <div class="header__left d-flex align-items-center">
                        <div class="logo_img">
                            <a href="{{ url('/') }}">
                                <img src="{{ showImage(app('general_setting')->logo) }}" alt="{{ app('general_setting')->company_name }}" title="{{ app('general_setting')->company_name }}">
                            </a>
                        </div>
                    </div>
                    <!-- header__left__end  -->
                    <div class="header_middle d-flex">
                        <form method="GET" id="search_form">
                            <div class="input-group header_search_field ">

                                <input type="text" class="form-control category_box_input lh-base" id="inlineFormInputGroup" placeholder="{{ __('defaultTheme.search_your_item') }}">

                                <div class="input-group-prepend">
                                    <button class="btn input-group-append" id="search_button"> <i class="ti-search"></i> </button>
                                </div>

                                <div class="live-search">
                                    <ul class="p-0" id="search_items">
                                        <li class="search_item" id="search_empty_list">

                                        </li>
                                        <li class="search_item" id="search_history">

                                        </li>
                                        <li class="search_item" id="tag_search">

                                        </li>
                                        <li class="search_item" id="category_search">

                                        </li>
                                        <li class="search_item" id="product_search">

                                        </li>
                                        <li class="search_item" id="seller_search">

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- header__right_start  -->
                    <div class="header_top_area_right">
                        <div class="wish_cart">
                            <div class="single_wishcart_lists" >
                                <div class="icon d-inline-block lh-1 dynamic_svg">
                                @guest
                                        <a href="{{url('/login')}}">
                                            <svg  width="16.5" height="16.5" viewBox="0 0 16.5 16.5">
                                                <g id="user" transform="translate(0.25 0.25)">
                                                  <g id="Group_1602" data-name="Group 1602" transform="translate(0)">
                                                    <path id="Path_1911" data-name="Path 1911" d="M13.657,10.343a7.969,7.969,0,0,0-3.04-1.907,4.625,4.625,0,1,0-5.234,0A8.013,8.013,0,0,0,0,16H1.25a6.75,6.75,0,0,1,13.5,0H16A7.948,7.948,0,0,0,13.657,10.343ZM8,8a3.375,3.375,0,1,1,3.375-3.375A3.379,3.379,0,0,1,8,8Z" transform="translate(0)" fill="#fd4949" stroke-width="0.5"/>
                                                    <path id="Path_1912" data-name="Path 1912" d="M13.657,10.343a7.969,7.969,0,0,0-3.04-1.907,4.625,4.625,0,1,0-5.234,0A8.013,8.013,0,0,0,0,16H1.25a6.75,6.75,0,0,1,13.5,0H16A7.948,7.948,0,0,0,13.657,10.343ZM8,8a3.375,3.375,0,1,1,3.375-3.375A3.379,3.379,0,0,1,8,8Z" transform="translate(0)" fill="#fd4949" stroke-width="0.5"/>
                                                  </g>
                                                </g>
                                              </svg></a>
                                @else
                                        @if (auth()->check() && auth()->user()->role->type == "superadmin" || auth()->check() && auth()->user()->role->type == "admin" || auth()->check() && auth()->user()->role->type == "staff")
                                            <a href="{{ route('admin.dashboard') }}">
                                                <svg  width="16.5" height="16.5" viewBox="0 0 16.5 16.5">
                                                    <g id="user" transform="translate(0.25 0.25)">
                                                      <g id="Group_1602" data-name="Group 1602" transform="translate(0)">
                                                        <path id="Path_1911" data-name="Path 1911" d="M13.657,10.343a7.969,7.969,0,0,0-3.04-1.907,4.625,4.625,0,1,0-5.234,0A8.013,8.013,0,0,0,0,16H1.25a6.75,6.75,0,0,1,13.5,0H16A7.948,7.948,0,0,0,13.657,10.343ZM8,8a3.375,3.375,0,1,1,3.375-3.375A3.379,3.379,0,0,1,8,8Z" transform="translate(0)" fill="#fd4949" stroke-width="0.5"/>
                                                        <path id="Path_1912" data-name="Path 1912" d="M13.657,10.343a7.969,7.969,0,0,0-3.04-1.907,4.625,4.625,0,1,0-5.234,0A8.013,8.013,0,0,0,0,16H1.25a6.75,6.75,0,0,1,13.5,0H16A7.948,7.948,0,0,0,13.657,10.343ZM8,8a3.375,3.375,0,1,1,3.375-3.375A3.379,3.379,0,0,1,8,8Z" transform="translate(0)" fill="#fd4949" stroke-width="0.5"/>
                                                      </g>
                                                    </g>
                                                  </svg>
                                            </a>
                                        @elseif (auth()->check() && auth()->user()->role->type == "seller" && isModuleActive('MultiVendor'))
                                            <a href="{{ route('seller.dashboard') }}">
                                                <svg  width="16.5" height="16.5" viewBox="0 0 16.5 16.5">
                                                    <g id="user" transform="translate(0.25 0.25)">
                                                      <g id="Group_1602" data-name="Group 1602" transform="translate(0)">
                                                        <path id="Path_1911" data-name="Path 1911" d="M13.657,10.343a7.969,7.969,0,0,0-3.04-1.907,4.625,4.625,0,1,0-5.234,0A8.013,8.013,0,0,0,0,16H1.25a6.75,6.75,0,0,1,13.5,0H16A7.948,7.948,0,0,0,13.657,10.343ZM8,8a3.375,3.375,0,1,1,3.375-3.375A3.379,3.379,0,0,1,8,8Z" transform="translate(0)" fill="#fd4949" stroke-width="0.5"/>
                                                        <path id="Path_1912" data-name="Path 1912" d="M13.657,10.343a7.969,7.969,0,0,0-3.04-1.907,4.625,4.625,0,1,0-5.234,0A8.013,8.013,0,0,0,0,16H1.25a6.75,6.75,0,0,1,13.5,0H16A7.948,7.948,0,0,0,13.657,10.343ZM8,8a3.375,3.375,0,1,1,3.375-3.375A3.379,3.379,0,0,1,8,8Z" transform="translate(0)" fill="#fd4949" stroke-width="0.5"/>
                                                      </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        @elseif (auth()->check() && auth()->user()->role->type == "affiliate")
                                            <a href="{{ route('affiliate.my_affiliate.index') }}">
                                                <svg  width="16.5" height="16.5" viewBox="0 0 16.5 16.5">
                                                    <g id="user" transform="translate(0.25 0.25)">
                                                      <g id="Group_1602" data-name="Group 1602" transform="translate(0)">
                                                        <path id="Path_1911" data-name="Path 1911" d="M13.657,10.343a7.969,7.969,0,0,0-3.04-1.907,4.625,4.625,0,1,0-5.234,0A8.013,8.013,0,0,0,0,16H1.25a6.75,6.75,0,0,1,13.5,0H16A7.948,7.948,0,0,0,13.657,10.343ZM8,8a3.375,3.375,0,1,1,3.375-3.375A3.379,3.379,0,0,1,8,8Z" transform="translate(0)" fill="#fd4949" stroke-width="0.5"/>
                                                        <path id="Path_1912" data-name="Path 1912" d="M13.657,10.343a7.969,7.969,0,0,0-3.04-1.907,4.625,4.625,0,1,0-5.234,0A8.013,8.013,0,0,0,0,16H1.25a6.75,6.75,0,0,1,13.5,0H16A7.948,7.948,0,0,0,13.657,10.343ZM8,8a3.375,3.375,0,1,1,3.375-3.375A3.379,3.379,0,0,1,8,8Z" transform="translate(0)" fill="#fd4949" stroke-width="0.5"/>
                                                      </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        @else
                                            <a href="{{ route('frontend.dashboard') }}">
                                                <svg  width="16.5" height="16.5" viewBox="0 0 16.5 16.5">
                                                    <g id="user" transform="translate(0.25 0.25)">
                                                      <g id="Group_1602" data-name="Group 1602" transform="translate(0)">
                                                        <path id="Path_1911" data-name="Path 1911" d="M13.657,10.343a7.969,7.969,0,0,0-3.04-1.907,4.625,4.625,0,1,0-5.234,0A8.013,8.013,0,0,0,0,16H1.25a6.75,6.75,0,0,1,13.5,0H16A7.948,7.948,0,0,0,13.657,10.343ZM8,8a3.375,3.375,0,1,1,3.375-3.375A3.379,3.379,0,0,1,8,8Z" transform="translate(0)" fill="#fd4949" stroke-width="0.5"/>
                                                        <path id="Path_1912" data-name="Path 1912" d="M13.657,10.343a7.969,7.969,0,0,0-3.04-1.907,4.625,4.625,0,1,0-5.234,0A8.013,8.013,0,0,0,0,16H1.25a6.75,6.75,0,0,1,13.5,0H16A7.948,7.948,0,0,0,13.657,10.343ZM8,8a3.375,3.375,0,1,1,3.375-3.375A3.379,3.379,0,0,1,8,8Z" transform="translate(0)" fill="#fd4949" stroke-width="0.5"/>
                                                      </g>
                                                    </g>
                                                </svg>
                                            </a>
                                        @endif
                                @endguest
                                </div>
                                <div class="header_top_area_right border-top-0 border-bottom-0 dynamic_svg">
                                    @if(isset($topnavbar_right_menu))
                                        @foreach($topnavbar_right_menu->elements->where('has_parent',null) as $element)
                                            @if($element->type == 'page' && $element->page->slug == 'my-wishlist')
                                                @if(auth()->check())
                                                    @if(isModuleActive('MultiVendor') && auth()->user()->role->type != 'superadmin' || isModuleActive('MultiVendor') && auth()->user()->role->type != 'admin' || isModuleActive('MultiVendor') && auth()->user()->role->type != 'staff' || auth()->user()->role->type == 'customer')
                                                        <a href="{{ route('frontend.my-wishlist') }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex spacing_class_r wishlist4">

                                                            <svg  width="20" height="22" viewBox="0 0 16 16"><path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.6 7.6 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/></svg>
                                                            &nbsp;
                                                            <span class="wishlist_count_r"> {{getNumberTranslate($wishlists)}}</span>
                                                        </a>
                                                    @else
                                                        @continue
                                                    @endif
                                                @else
                                                    <a href="{{ route('frontend.my-wishlist') }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex spacing_class_r wishlist4">

                                                        <svg  width="20" height="22" viewBox="0 0 16 16"><path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.6 7.6 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/></svg>
                                                        &nbsp;
                                                        <span class="wishlist_count_r"> {{getNumberTranslate($wishlists)}}</span>
                                                    </a>
                                                @endif
                                            @elseif($element->type == 'page' && $element->page->slug == 'cart')
                                                <a href="{{ url('/cart') }}" class="single_top_lists d-flex align-items-center d-none d-md-inline-flex spacing_class_r cart7">

                                                    <svg  width="20" height="22" viewBox="0 0 16 16"><path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/></svg>
                                                    &nbsp;
                                                    <span class="cart_count_bottom_r"> {{getNumberTranslate($items)}}&nbsp;/</span>
                                                    <span class="cart_count_bottom_r"> &nbsp;&nbsp;₹{{number_format($totalamount, 2)}}</span>
                                                </a>
                                            @endif
                                        @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>
                        <!-- <div class="single_top_lists position-relative me-3 d-flex align-items-center shoping_language d-lg-none d-inline-flex">-->
                        <!--    <div class="">-->
                        <!--        <div class="language_toggle_btn gj-cursor-pointer d-flex align-items-center gap_10 ">-->
                        <!--            <span>{{strtoupper($locale)}}</span>-->
                        <!--            <span class="vertical_line style2 d-none d-md-block"></span>-->
                        <!--            <span>{{strtoupper($currency_code)}}</span>-->
                        <!--            <i class="ti-angle-down"></i>-->
                        <!--        </div>-->
                        <!--        <div class="language_toggle_box position-absolute top-100 end-0 bg-white">-->
                        <!--            <form action="{{route('frontend.locale')}}" method="POST">-->
                        <!--                @csrf-->
                        <!--                <div class="lag_select">-->
                        <!--                    <span class="font_12 f_w_500 text-uppercase mb_10 d-block">{{ __('defaultTheme.language') }}</span>-->
                        <!--                    <select class="amaz_select6 wide mb_20" name="lang">-->
                        <!--                        @foreach($langs as $key => $lang)-->
                        <!--                        <option {{ $locale==$lang->code?'selected':'' }} value="{{$lang->code}}">-->
                        <!--                            {{$lang->native}}</option>-->
                        <!--                        @endforeach-->
                        <!--                    </select>-->
                        <!--                </div>-->
                        <!--                <div class="lag_select">-->
                        <!--                    <span class="font_12 f_w_500 text-uppercase mb_10 d-block">{{ __('defaultTheme.currency') }}</span>-->
                        <!--                    <select class="amaz_select6 wide" name="currency">-->
                        <!--                        @foreach($currencies as $key => $item)-->
                        <!--                        <option {{$currency_code==$item->code?'selected':'' }}-->
                        <!--                            value="{{$item->id}}">-->
                        <!--                            ({{$item->symbol}}) {{$item->name}}</option>-->
                        <!--                        @endforeach-->
                        <!--                    </select>-->
                        <!--                </div>-->
                        <!--                <button type="submit" class="amaz_primary_btn style3 save_btn">{{ __('defaultTheme.save_change') }}</button>-->
                        <!--            </form>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                                             <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                    <!-- header__right_end  -->
                </div>
            </div>
        </div>
    </div>
</div>
