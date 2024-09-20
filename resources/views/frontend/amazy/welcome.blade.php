@extends('frontend.amazy.layouts.app')

@push('styles')
<style>
    .banner_img {
    width: 100%;
    position: relative;
    overflow: hidden;
    display: block;
    padding-bottom: 31.5%;
}

.banner_img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
}
.newsletter-signup {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-top: 20px;
}

.email-input {
    border-radius: 20px;
    border: 1px solid grey;
    padding: 4px;
    width: 350px;
    box-sizing: border-box;
}

.signup-button {
    background-color: #7f8534;
    color: white;
    border-radius: 20px;
    border: 1px solid grey;
    padding: 6px 20px;
    cursor: pointer;
}

.signup-button:hover {
    background-color: #6b722c;
}
.footer_title {
    min-width: 359px;
}
.pro_details_text {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    font-size: 14px;
    line-height: 21px;
    color: #9e9c9c;
}
.tag_link {
    display: inline-block; 
    margin-right: 5px; 
    white-space: nowrap;
}
 .container {
    max-width: 1160px;
    margin: 0 auto;     
    padding: 0 15px; 
}
</style>
@endpush

@section('content')
    <!-- home_banner::start  -->
    @php

        $headers = \Modules\Appearance\Entities\Header::all();
    @endphp
    <x-slider-component :headers="$headers"/>




<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="image-box">
                <img src="public/frontend/amazy/img/imgg.png" alt="Image 1" loading="lazy">
                <div class="content">
                    <div class="discount">
                    <div class="discount-row">
                        <strong class="big-discount">15%</strong>
                        <div class="discount-text">
                            <span class="right-discount">Discount</span>
                            <span class="on-text">ON</span>
                        </div>
                    </div>
                    <div class="white-line"></div> 
                </div>
                    <p class="textss">White Beaded Necklace Set & Designer Bangles</p>
                    <a href="{{route('frontend.category-product',['slug' =>  ('jewellery'), 'item' =>'category'])}}">
  <button class="shop-buttons">Shop Now</button>
</a>
                </div>
              
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="image-box">
                <img src="public/frontend/amazy/img/imgg1.png" alt="Image 2"loading="lazy" >
                <div class="content">
                    <div class="discount">
                    <div class="discount-row">
                        <strong class="big-discount">10%</strong>
                        <div class="discount-text">
                            <span class="right-discount">Discount</span>
                            <span class="on-text">ON</span>
                        </div>
                    </div>
                    <div class="white-line"></div> 
                </div>
                    <p class="texts">Gl Tags Products
                    Karnataka</p>
                    <a href="{{route('frontend.category-product',['slug' =>  ('bidri-artware'), 'item' =>'category'])}}">
  <button class="shop-buttons">Shop Now</button>
</a>
                </div>
                
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="image-box">
                <img src="public/frontend/amazy/img/imgg2.png" alt="Image 3" loading="lazy">
                <div class="content">
                    <div class="discount">
                    <div class="discount-row">
                        <strong class="big-discount">35%</strong>
                        <div class="discount-text">
                            <span class="right-discount">Discount</span>
                            <span class="on-text">ON</span>
                        </div>
                    </div>
                    <div class="white-line"></div> 
                </div>
                    <p class="texts">Channapatna Toys
                    Karnataka</p>
                    <a href="{{route('frontend.category-product',['slug' =>  ('channapatna-toys'), 'item' =>'category'])}}">
  <button class="shop-buttons">Shop Now</button>
</a>
                </div>
               
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="image-box">
                <img src="public/frontend/amazy/img/imgg3.png" alt="Image 4" loading="lazy">
                <div class="content">
                    <div class="discount">
                    <div class="discount-row">
                        <strong class="big-discount">20%</strong>
                        <div class="discount-text">
                            <span class="right-discount">Discount</span>
                            <span class="on-text">ON</span>
                        </div>
                    </div>
                    <div class="white-line"></div> 
                </div>
                    <p class="texts">Authentic Homemade Utensils</p>
                    <a href="{{route('frontend.category-product',['slug' =>  ('kitchen-storage'), 'item' =>'category'])}}">
  <button class="shop-buttons">Shop Now</button>
</a>
               </div>
              
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="image-box">
                <img src="public/frontend/amazy/img/imgg4.png" alt="Image 5" loading="lazy">
                <div class="content">
                    <div class="discount">
                    <div class="discount-row">
                        <strong class="big-discount">40%</strong>
                        <div class="discount-text">
                            <span class="right-discount">Discount</span>
                            <span class="on-text">ON</span>
                        </div>
                    </div>
                    <div class="white-line"></div> 
                </div>
                    <p class="texts">Bags Made With Banana Fibre & Jute</p>
                    <a href="{{route('frontend.category-product',['slug' =>  ('-banana-fiber'), 'item' =>'category'])}}">
  <button class="shop-buttons">Shop Now</button>
</a>          
</div>
             
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="image-box">
                <img src="public/frontend/amazy/img/imgg5.png" alt="Image 6" loading="lazy">
                <div class="content">
                    <div class="discount">
                    <div class="discount-row">
                        <strong class="big-discount">20%</strong>
                        <div class="discount-text">
                            <span class="right-discount">Discount</span>
                            <span class="on-text">ON</span>
                        </div>
                    </div>
                    <div class="white-line"></div> 
                </div>
                    <p class="texts">Designed Relum Gift Box & Bag</p>
                    <a href="{{route('frontend.category-product',['slug' =>  ('gifting'), 'item' =>'category'])}}">
  <button class="shop-buttons">Shop Now</button>
</a>
                </div>
             
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="image-box">
                <img src="public/frontend/amazy/img/imgg6.png" alt="Image 7" loading="lazy">
                <div class="content">
                    <div class="discount">
                    <div class="discount-row">
                        <strong class="big-discount">10%</strong>
                        <div class="discount-text">
                            <span class="right-discount">Discount</span>
                            <span class="on-text">ON</span>
                        </div>
                    </div>
                    <div class="white-line"></div> 
                </div>
                    <p class="texts">Tea and Coffee Collection</p>
                    <a href="{{route('frontend.category-product',['slug' =>  ('tea-&-coffee'), 'item' =>'category'])}}">
  <button class="shop-buttons">Shop Now</button>
</a>
                </div>
             
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="image-box">
                <img src="public/frontend/amazy/img/imgg7.png" alt="Image 8" loading="lazy">
                <div class="content">
                    <div class="discount">
                    <div class="discount-row">
                        <strong class="big-discount">10%</strong>
                        <div class="discount-text">
                            <span class="right-discount">Discount</span>
                            <span class="on-text">ON</span>
                        </div>
                    </div>
                    <div class="white-line"></div> 
                </div>
                    <p class="texts">Buddha, Choth Handmade Painting</p>
                    <a href="{{route('frontend.category-product',['slug' =>  ('gifting'), 'item' =>'category'])}}">
  <button class="shop-buttons">Shop Now</button>
</a>
                </div>
      
            </div>
        </div>
    </div>
</div>


</div>



@php
    $best_deal = $widgets->where('section_name','best_deals')->first();
@endphp
<div id="best_deals" class="amaz_section section_spacing {{$best_deal->status == 0?'d-none':''}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__title d-flex align-items-center gap-3 mb_30 flex-wrap">
                    <h3 id="best_deals_title" class="m-0 flex-fill">{{$best_deal->title}}</h3>
                    <a href="{{route('frontend.category-product',['slug' =>  ($best_deal->section_name), 'item' =>'product'])}}" class="title_link d-flex align-items-center lh-1">
                        <span class="title_text">{{ __('common.view_all') }}</span>
                        <span class="title_icon">
    <i class="fas fa-arrow-right"></i>
</span>


                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="hidden" class="productQtyCount" value="{{$best_deal->getProductByQuery()->count()}}">
                <div class="trending_product_active owl-carousel">
                    @foreach($best_deal->getProductByQuery() as $key => $product)
                        <div class="product_widget5 mb_30 style5">
                            <div class="product_thumb_upper">
                                @php
                                    if (@$product->thum_img != null) {
                                        $thumbnail = showImage(@$product->thum_img);
                                    } else {
                                        $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                    }

                                    $price_qty = getProductDiscountedPrice(@$product);
                                    $showData = [
                                        'name' => @$product->product_name,
                                        'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                        'price' => $price_qty,
                                        'thumbnail' => $thumbnail,
                                    ];
                                @endphp
                                <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                    class="thumb">
                                    @if(app('general_setting')->lazyload == 1)
                                        <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                        alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                        class="lazyload">
                                    @else
                                        <img  src="{{ $thumbnail }}"  alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}" >
                                    @endif
                                </a>
                                @if(isGuestAddtoCart() == true)
                                <div class="product_action">
                                    <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                        data-producttype="{{ @$product->product->product_type }}"
                                        data-seller={{ $product->user_id }}
                                        data-product-sku={{ @$product->skus->first()->id }}
                                        data-product-id={{ $product->id }}>
                                        <i class="ti-control-shuffle"
                                            title="{{ __('defaultTheme.compare') }}"></i>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                        id="wishlistbtn_{{ $product->id }}"
                                        data-product_id="{{ $product->id }}"
                                        data-seller_id="{{ $product->user_id }}">
                                        <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                    </a>
                                    <a class="quickView" data-product_id="{{ $product->id }}"
                                        data-type="product">
                                        <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                    </a>
                                </div>
                                @endif
                                <div class="product_badge">
                                @if(isGuestAddtoCart() == true)
                                    @if($product->hasDeal)
                                        @if($product->hasDeal->discount >0)
                                            <span class="d-flex align-items-center discount">
                                                @if($product->hasDeal->discount_type ==0)
                                                    {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                                @else
                                                    {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                                @endif
                                            </span>
                                        @endif
                                    @else
                                        @if($product->hasDiscount == 'yes')
                                            @if($product->discount >0)
                                                <span class="d-flex align-items-center discount">
                                                    @if($product->discount_type ==0)
                                                        {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                    @else
                                                        {{single_price($product->discount)}} {{__('common.off')}}
                                                    @endif
                                                </span>
                                            @endif
                                        @endif
                                    @endif
                                @endif
                                    @if(isModuleActive('ClubPoint'))
                                    <span class="d-flex align-items-center point">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                            <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        {{getNumberTranslate(@$product->product->club_point)}}
                                    </span>
                                    @endif
                                    @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices->count())
                                        <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="product_star mx-auto">
                                @php
                                    $reviews = @$product->reviews->where('status', 1)->pluck('rating');

                                    if (count($reviews) > 0) {
                                        $value = 0;
                                        $rating = 0;
                                        foreach ($reviews as $review) {
                                            $value += $review;
                                        }
                                        $rating = $value / count($reviews);
                                        $total_review = count($reviews);
                                    } else {
                                        $rating = 0;
                                        $total_review = 0;
                                    }
                                @endphp
                                <x-rating :rating="$rating" />
                            </div>
                            <div class="product__meta text-center">
                                <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                                <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                    <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                    <p class="pro_details_text">
                                        @foreach($product->product->tags->take(3) as $key => $tag)
                                            {{$tag->name}}{{ $loop->last ? '' : ',' }}
                                        @endforeach
                                    </p>
                                </a>


                                @if(isGuestAddtoCart() == true)
                                    <div class="product_price ">
                                    <p>
                                            @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                                <del>
                                                    {{getProductwitoutDiscountPrice(@$product)}}
                                                </del>
                                            @endif
                                            <strong>
                                                {{getProductDiscountedPrice(@$product)}}
                                            </strong>
                                        </p>
                                        <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                            @if (@$product->hasDeal)
                                                data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                            @else
                                                @if (@$product->hasDiscount == 'yes')
                                                    data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                                @else
                                                    data-base-price={{ @$product->skus->first()->sell_price }}
                                                @endif
                                            @endif
                                            data-shipping-method=0
                                            data-product-id={{ $product->id }}
                                            data-stock_manage="{{$product->stock_manage}}"
                                            data-stock="{{@$product->skus->first()->product_stock}}"
                                            data-min_qty="{{@$product->product->minimum_order_qty}}"
                                            data-prod_info="{{ json_encode($showData) }}"
                                            >
                                            <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" >
                                                <path d="M0.464844 1.14286C0.464844 0.78782 0.751726 0.5 1.10561 0.5H1.58256C2.39459 0.5 2.88079 1.04771 3.15883 1.55685C3.34414 1.89623 3.47821 2.28987 3.58307 2.64624C3.61147 2.64401 3.64024 2.64286 3.66934 2.64286H14.3464C15.0557 2.64286 15.5679 3.32379 15.3734 4.00811L13.8119 9.50163C13.5241 10.5142 12.6019 11.2124 11.5525 11.2124H6.47073C5.41263 11.2124 4.48508 10.5028 4.20505 9.47909L3.55532 7.10386L2.48004 3.4621L2.47829 3.45572C2.34527 2.96901 2.22042 2.51433 2.03491 2.1746C1.85475 1.84469 1.71115 1.78571 1.58256 1.78571H1.10561C0.751726 1.78571 0.464844 1.49789 0.464844 1.14286ZM4.79882 6.79169L5.44087 9.1388C5.56816 9.60414 5.98978 9.92669 6.47073 9.92669H11.5525C12.0295 9.92669 12.4487 9.60929 12.5795 9.14909L14.0634 3.92857H3.95529L4.78706 6.74583C4.79157 6.76109 4.79548 6.77634 4.79882 6.79169ZM7.72683 13.7857C7.72683 14.7325 6.96184 15.5 6.01812 15.5C5.07443 15.5 4.30942 14.7325 4.30942 13.7857C4.30942 12.8389 5.07443 12.0714 6.01812 12.0714C6.96184 12.0714 7.72683 12.8389 7.72683 13.7857ZM6.4453 13.7857C6.4453 13.5491 6.25405 13.3571 6.01812 13.3571C5.7822 13.3571 5.59095 13.5491 5.59095 13.7857C5.59095 14.0224 5.7822 14.2143 6.01812 14.2143C6.25405 14.2143 6.4453 14.0224 6.4453 13.7857ZM13.7073 13.7857C13.7073 14.7325 12.9423 15.5 11.9986 15.5C11.0549 15.5 10.2899 14.7325 10.2899 13.7857C10.2899 12.8389 11.0549 12.0714 11.9986 12.0714C12.9423 12.0714 13.7073 12.8389 13.7073 13.7857ZM12.4258 13.7857C12.4258 13.5491 12.2345 13.3571 11.9986 13.3571C11.7627 13.3571 11.5714 13.5491 11.5714 13.7857C11.5714 14.0224 11.7627 14.2143 11.9986 14.2143C12.2345 14.2143 12.4258 14.0224 12.4258 13.7857Z" fill="currentColor"/>
                                            </svg> -->
                                            {{__('defaultTheme.add_to_cart')}}
                                        </a>
                                      
                                    </div>

                                @else
                                    <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                        <a class="amaz_primary_btn w-100" href="{{ url('/login') }}" style="text-indent: 0;">
                                            {{__('defaultTheme.login_to_order')}}
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- amaz_section::end  -->
<!-- amaz_section::start  -->
@php
    $filter_category_1 = $widgets->where('section_name','filter_category_1')->first();
    $category = @$filter_category_1->customSection->category;
@endphp

<div id="filter_category_1" class="amaz_section section_spacing2 {{@$filter_category_1->status == 0?'d-none':''}}">
    <div class="container ">
      
        @if($category)
            <div class="row no-gutters">
                <div class="col-xl-5 p-0 col-lg-12">
                    <div class="House_Appliances_widget">
                        <div class="House_Appliances_widget_left d-flex flex-column flex-fill">
                            <h4 id="filter_category_title">{{$filter_category_1->title}}</h4>
                            <ul class="nav nav-tabs flex-fill flex-column border-0" id="myTab10" role="tablist">
                                @foreach(@$category->subCategories as $key => $subcat)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{$key == 0?'active':''}}" id="tab_link_{{$subcat->id}}" data-bs-toggle="tab" data-bs-target="#house_appliance_tab_pane_subcat_{{$subcat->id}}" type="button" role="tab" aria-controls="Dining" aria-selected="true">{{$subcat->name}}</button>
                                </li>
                                @endforeach
                            </ul>
                            <a href="{{route('frontend.category-product',['slug' => $category->slug, 'item' =>'category'])}}" class="title_link d-flex align-items-center lh-1">
                                <span class="title_text">{{__('common.more_deals')}}</span>
                                <span class="title_icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                        <a href="{{route('frontend.category-product',['slug' => $category->slug, 'item' =>'category'])}}" class="House_Appliances_widget_right overflow-hidden p-0 {{$filter_category_1->customSection->field_2?'':'d-none'}}">
                            <img class="h-100 lazyload" data-src="{{showImage($filter_category_1->customSection->field_2)}}" src="{{showImage(themeDefaultImg())}}" alt="{{@$filter_category_1->title}}" title="{{@$filter_category_1->title}}">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 p-0 col-lg-12">
                    <div class="tab-content" id="myTabContent10">
                        @if($category->subCategories->count())
                            @foreach($category->subCategories as $key => $subcat)
                                <div class="tab-pane fade {{$key == 0?'show active':''}}" id="house_appliance_tab_pane_subcat_{{$subcat->id}}" role="tabpanel" aria-labelledby="Dining-tab">
                                    <!-- content  -->
                                    <div class="House_Appliances_product">
                                        @foreach($subcat->sellerProductTake() as $product)
                                        <div class="product_widget5 style4 mb-0 style5">
                                            <div class="product_thumb_upper">
                                                @php
                                                    if (@$product->thum_img != null) {
                                                        $thumbnail = showImage(@$product->thum_img);
                                                    } else {
                                                        $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                                    }

                                                    $price_qty = getProductDiscountedPrice(@$product);
                                                    $showData = [
                                                        'name' => @$product->product_name,
                                                        'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                                        'price' => $price_qty,
                                                        'thumbnail' => $thumbnail,
                                                    ];
                                                @endphp
                                                <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                                    class="thumb">
                                                    @if(app('general_setting')->lazyload == 1)
                                                       <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                                        alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                                        class="lazyload">
                                                    @else
                                                       <img src="{{ $thumbnail }}" alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"   >
                                                    @endif
                                                </a>
                                                @if(isGuestAddtoCart())
                                                    <div class="product_action">
                                                        <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                                            data-producttype="{{ @$product->product->product_type }}"
                                                            data-seller={{ $product->user_id }}
                                                            data-product-sku={{ @$product->skus->first()->id }}
                                                            data-product-id={{ $product->id }}>
                                                            <i class="ti-control-shuffle"
                                                                title="{{ __('defaultTheme.compare') }}"></i>
                                                        </a>
                                                        <a href="javascript:void(0)"
                                                            class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                                            id="wishlistbtn_{{ $product->id }}"
                                                            data-product_id="{{ $product->id }}"
                                                            data-seller_id="{{ $product->user_id }}">
                                                            <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                                        </a>
                                                        <a class="quickView" data-product_id="{{ $product->id }}"
                                                            data-type="product">
                                                            <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                                        </a>
                                                    </div>
                                                @endif
                                                <div class="product_badge">
                                                    @if(isGuestAddtoCart())
                                                        @if($product->hasDeal)
                                                            @if($product->hasDeal->discount >0)
                                                                <span class="d-flex align-items-center discount">
                                                                    @if($product->hasDeal->discount_type ==0)
                                                                        {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                                                    @else
                                                                        {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                                                    @endif
                                                                </span>
                                                            @endif
                                                        @else
                                                            @if($product->hasDiscount == 'yes')
                                                                @if($product->discount >0)
                                                                    <span class="d-flex align-items-center discount">
                                                                        @if($product->discount_type ==0)
                                                                            {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                                        @else
                                                                            {{single_price($product->discount)}} {{__('common.off')}}
                                                                        @endif
                                                                    </span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                    @if(isModuleActive('ClubPoint'))
                                                    <span class="d-flex align-items-center point">
                                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                                            <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        {{getNumberTranslate(@$product->product->club_point)}}
                                                    </span>
                                                    @endif
                                                    @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices->count())
                                                        <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product_star mx-auto">
                                                @php
                                                    $reviews = @$product->reviews->where('status', 1)->pluck('rating');

                                                    if (count($reviews) > 0) {
                                                        $value = 0;
                                                        $rating = 0;
                                                        foreach ($reviews as $review) {
                                                            $value += $review;
                                                        }
                                                        $rating = $value / count($reviews);
                                                        $total_review = count($reviews);
                                                    } else {
                                                        $rating = 0;
                                                        $total_review = 0;
                                                    }
                                                @endphp
                                                <x-rating :rating="$rating" />
                                            </div>
                                            <div class="product__meta text-center">
                                                <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                                                <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                                    <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                                </a>
                                                @if(isGuestAddtoCart())
                                                <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                                    <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                                        @if (@$product->hasDeal)
                                                            data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                                        @else
                                                            @if (@$product->hasDiscount == 'yes')
                                                                data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                                            @else
                                                                data-base-price={{ @$product->skus->first()->sell_price }}
                                                            @endif
                                                        @endif
                                                        data-shipping-method=0
                                                        data-product-id={{ $product->id }}
                                                        data-stock_manage="{{$product->stock_manage}}"
                                                        data-stock="{{@$product->skus->first()->product_stock}}"
                                                        data-min_qty="{{@$product->product->minimum_order_qty}}"
                                                        data-prod_info="{{ json_encode($showData) }}"
                                                        >
                                                        <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" >
                                                            <path d="M0.464844 1.14286C0.464844 0.78782 0.751726 0.5 1.10561 0.5H1.58256C2.39459 0.5 2.88079 1.04771 3.15883 1.55685C3.34414 1.89623 3.47821 2.28987 3.58307 2.64624C3.61147 2.64401 3.64024 2.64286 3.66934 2.64286H14.3464C15.0557 2.64286 15.5679 3.32379 15.3734 4.00811L13.8119 9.50163C13.5241 10.5142 12.6019 11.2124 11.5525 11.2124H6.47073C5.41263 11.2124 4.48508 10.5028 4.20505 9.47909L3.55532 7.10386L2.48004 3.4621L2.47829 3.45572C2.34527 2.96901 2.22042 2.51433 2.03491 2.1746C1.85475 1.84469 1.71115 1.78571 1.58256 1.78571H1.10561C0.751726 1.78571 0.464844 1.49789 0.464844 1.14286ZM4.79882 6.79169L5.44087 9.1388C5.56816 9.60414 5.98978 9.92669 6.47073 9.92669H11.5525C12.0295 9.92669 12.4487 9.60929 12.5795 9.14909L14.0634 3.92857H3.95529L4.78706 6.74583C4.79157 6.76109 4.79548 6.77634 4.79882 6.79169ZM7.72683 13.7857C7.72683 14.7325 6.96184 15.5 6.01812 15.5C5.07443 15.5 4.30942 14.7325 4.30942 13.7857C4.30942 12.8389 5.07443 12.0714 6.01812 12.0714C6.96184 12.0714 7.72683 12.8389 7.72683 13.7857ZM6.4453 13.7857C6.4453 13.5491 6.25405 13.3571 6.01812 13.3571C5.7822 13.3571 5.59095 13.5491 5.59095 13.7857C5.59095 14.0224 5.7822 14.2143 6.01812 14.2143C6.25405 14.2143 6.4453 14.0224 6.4453 13.7857ZM13.7073 13.7857C13.7073 14.7325 12.9423 15.5 11.9986 15.5C11.0549 15.5 10.2899 14.7325 10.2899 13.7857C10.2899 12.8389 11.0549 12.0714 11.9986 12.0714C12.9423 12.0714 13.7073 12.8389 13.7073 13.7857ZM12.4258 13.7857C12.4258 13.5491 12.2345 13.3571 11.9986 13.3571C11.7627 13.3571 11.5714 13.5491 11.5714 13.7857C11.5714 14.0224 11.7627 14.2143 11.9986 14.2143C12.2345 14.2143 12.4258 14.0224 12.4258 13.7857Z" fill="currentColor"/>
                                                        </svg> -->
                                                        {{__('defaultTheme.add_to_cart')}}
                                                    </a>
                                                    <p>
                                                        @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                                            <del>
                                                                {{getProductwitoutDiscountPrice(@$product)}}
                                                            </del>
                                                         @endif
                                                        <strong>
                                                            {{getProductDiscountedPrice(@$product)}}
                                                        </strong>
                                                    </p>
                                                </div>
                                                @else
                                                <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                                    <a href="{{ url('/login') }}" class="amaz_primary_btn w-100" style="text-indent: 0;">

                                                        {{__('defaultTheme.login_to_order')}}
                                                    </a>

                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- content  -->
                                </div>
                            @endforeach
                        @else
                            <div class="tab-pane fade show active" id="house_appliance_tab_pane_subcat_1" role="tabpanel" aria-labelledby="Dining-tab">
                                <!-- content  -->
                                <div class="House_Appliances_product">
                                    @foreach($category->sellerProductTake() as $product)
                                    <div class="product_widget5 style4 mb-0 style5">
                                        <div class="product_thumb_upper">
                                            @php
                                                if (@$product->thum_img != null) {
                                                    $thumbnail = showImage(@$product->thum_img);
                                                } else {
                                                    $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                                }

                                                $price_qty = getProductDiscountedPrice(@$product);
                                                $showData = [
                                                    'name' => @$product->product_name,
                                                    'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                                    'price' => $price_qty,
                                                    'thumbnail' => $thumbnail,
                                                ];
                                            @endphp
                                            <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                                class="thumb">
                                                @if(app('general_setting')->lazyload == 1)
                                                <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                                    alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                                    class="lazyload">

                                                @else
                                                <img  src="{{ $thumbnail }}" alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}">
                                                @endif
                                            </a>
                                            @if(isGuestAddtoCart())
                                            <div class="product_action">
                                                <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                                    data-producttype="{{ @$product->product->product_type }}"
                                                    data-seller={{ $product->user_id }}
                                                    data-product-sku={{ @$product->skus->first()->id }}
                                                    data-product-id={{ $product->id }}>
                                                    <i class="ti-control-shuffle"
                                                        title="{{ __('defaultTheme.compare') }}"></i>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                                    id="wishlistbtn_{{ $product->id }}"
                                                    data-product_id="{{ $product->id }}"
                                                    data-seller_id="{{ $product->user_id }}">
                                                    <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                                </a>
                                                <a class="quickView" data-product_id="{{ $product->id }}"
                                                    data-type="product">
                                                    <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                                </a>
                                            </div>
                                            @endif
                                            <div class="product_badge">
                                                @if(isGuestAddtoCart())
                                                    @if($product->hasDeal)
                                                        @if($product->hasDeal->discount >0)
                                                            <span class="d-flex align-items-center discount">
                                                                    @if($product->hasDeal->discount_type ==0)
                                                                        {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                                                    @else
                                                                        {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                                                    @endif
                                                                </span>
                                                            @endif
                                                        @else
                                                            @if($product->hasDiscount == 'yes')
                                                                @if($product->discount >0)
                                                                    <span class="d-flex align-items-center discount">
                                                                        @if($product->discount_type ==0)
                                                                            {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                                        @else
                                                                            {{single_price($product->discount)}} {{__('common.off')}}
                                                                        @endif
                                                                    </span>
                                                                @endif
                                                            @endif
                                                    @endif
                                                @endif
                                                @if(isModuleActive('ClubPoint'))
                                                <span class="d-flex align-items-center point">
                                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                                        <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    {{getNumberTranslate(@$product->product->club_point)}}
                                                </span>
                                                @endif
                                                @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices->count())
                                                    <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product_star mx-auto">
                                            @php
                                                $reviews = @$product->reviews->where('status', 1)->pluck('rating');

                                                if (count($reviews) > 0) {
                                                    $value = 0;
                                                    $rating = 0;
                                                    foreach ($reviews as $review) {
                                                        $value += $review;
                                                    }
                                                    $rating = $value / count($reviews);
                                                    $total_review = count($reviews);
                                                } else {
                                                    $rating = 0;
                                                    $total_review = 0;
                                                }
                                            @endphp
                                            <x-rating :rating="$rating" />
                                        </div>
                                        <div class="product__meta text-center">
                                            <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                                            <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                                <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                            </a>
                                            @if(isGuestAddtoCart())
                                                <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                                    <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                                        @if (@$product->hasDeal)
                                                            data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                                        @else
                                                            @if (@$product->hasDiscount == 'yes')
                                                                data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                                            @else
                                                                data-base-price={{ @$product->skus->first()->sell_price }}
                                                            @endif
                                                        @endif
                                                        data-shipping-method=0
                                                        data-product-id={{ $product->id }}
                                                        data-stock_manage="{{$product->stock_manage}}"
                                                        data-stock="{{@$product->skus->first()->product_stock}}"
                                                        data-min_qty="{{@$product->product->minimum_order_qty}}"
                                                        data-prod_info="{{ json_encode($showData) }}"
                                                        >
                                                        <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" >
                                                            <path d="M0.464844 1.14286C0.464844 0.78782 0.751726 0.5 1.10561 0.5H1.58256C2.39459 0.5 2.88079 1.04771 3.15883 1.55685C3.34414 1.89623 3.47821 2.28987 3.58307 2.64624C3.61147 2.64401 3.64024 2.64286 3.66934 2.64286H14.3464C15.0557 2.64286 15.5679 3.32379 15.3734 4.00811L13.8119 9.50163C13.5241 10.5142 12.6019 11.2124 11.5525 11.2124H6.47073C5.41263 11.2124 4.48508 10.5028 4.20505 9.47909L3.55532 7.10386L2.48004 3.4621L2.47829 3.45572C2.34527 2.96901 2.22042 2.51433 2.03491 2.1746C1.85475 1.84469 1.71115 1.78571 1.58256 1.78571H1.10561C0.751726 1.78571 0.464844 1.49789 0.464844 1.14286ZM4.79882 6.79169L5.44087 9.1388C5.56816 9.60414 5.98978 9.92669 6.47073 9.92669H11.5525C12.0295 9.92669 12.4487 9.60929 12.5795 9.14909L14.0634 3.92857H3.95529L4.78706 6.74583C4.79157 6.76109 4.79548 6.77634 4.79882 6.79169ZM7.72683 13.7857C7.72683 14.7325 6.96184 15.5 6.01812 15.5C5.07443 15.5 4.30942 14.7325 4.30942 13.7857C4.30942 12.8389 5.07443 12.0714 6.01812 12.0714C6.96184 12.0714 7.72683 12.8389 7.72683 13.7857ZM6.4453 13.7857C6.4453 13.5491 6.25405 13.3571 6.01812 13.3571C5.7822 13.3571 5.59095 13.5491 5.59095 13.7857C5.59095 14.0224 5.7822 14.2143 6.01812 14.2143C6.25405 14.2143 6.4453 14.0224 6.4453 13.7857ZM13.7073 13.7857C13.7073 14.7325 12.9423 15.5 11.9986 15.5C11.0549 15.5 10.2899 14.7325 10.2899 13.7857C10.2899 12.8389 11.0549 12.0714 11.9986 12.0714C12.9423 12.0714 13.7073 12.8389 13.7073 13.7857ZM12.4258 13.7857C12.4258 13.5491 12.2345 13.3571 11.9986 13.3571C11.7627 13.3571 11.5714 13.5491 11.5714 13.7857C11.5714 14.0224 11.7627 14.2143 11.9986 14.2143C12.2345 14.2143 12.4258 14.0224 12.4258 13.7857Z" fill="currentColor"/>
                                                        </svg> -->
                                                        {{__('defaultTheme.add_to_cart')}}
                                                    </a>
                                                    <p>
                                                        @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                                            <del>
                                                                {{getProductwitoutDiscountPrice(@$product)}}
                                                            </del>
                                                        @endif
                                                        <strong>
                                                            {{getProductDiscountedPrice(@$product)}}
                                                        </strong>
                                                    </p>
                                                </div>
                                            @else
                                            <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                                <a href="{{ url('/login') }}" class="amaz_primary_btn w-100" style="text-indent: 0;">
                                                    {{__('defaultTheme.login_to_order')}}
                                                </a>

                                            </div>

                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- content  -->
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@php
    $filter_category_2 = $widgets->where('section_name','filter_category_2')->first();
    $category = @$filter_category_2->customSection->category;
@endphp

<div id="filter_category_2" class="amaz_section section_spacing2 {{@$filter_category_2->status == 0?'d-none':''}}">
    <div class="container ">
        @if($category)
            <div class="row no-gutters">
                <div class="col-xl-3 p-0 col-lg-12">
                    <div class="House_Appliances_widget">
                        <div class="House_Appliances_widget_left d-flex flex-column flex-fill">
                            <h4 id="filter_category_title">{{$filter_category_2->title}}</h4>
                            <ul class="nav nav-tabs flex-fill flex-column border-0" id="myTab10" role="tablist">
                              
                                @foreach(@$category->subCategories as $key => $subcat)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{$key == 0?'active':''}}" id="tab_link_{{$subcat->id}}" data-bs-toggle="tab" data-bs-target="#fashion_tab_pane_subcat_{{$subcat->id}}" type="button" role="tab" aria-controls="Dining" aria-selected="true">{{$subcat->name}}</button>
                                </li>
                                @endforeach
                            </ul>
                            <a href="{{route('frontend.category-product',['slug' => $category->slug, 'item' =>'category'])}}" class="title_links d-flex align-items-center lh-1">
                                <span class="title_text">{{__('common.more_deals')}}</span>
                                <span class="title_icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                        <!-- <a href="{{route('frontend.category-product',['slug' => $category->slug, 'item' =>'category'])}}" class="House_Appliances_widget_right overflow-hidden p-0 {{$filter_category_2->customSection->field_2?'':'d-none'}}">
                            <img class="h-100 lazyload" data-src="{{showImage($filter_category_2->customSection->field_2)}}" src="{{showImage(themeDefaultImg())}}" alt="{{@$filter_category_2->title}}" title="{{@$filter_category_2->title}}">
                        </a> -->
                    </div>
                </div>
                <div class="col-xl-9 p-0 col-lg-12">
                    <div class="tab-content" id="myTabContent10">
                        @if($category->subCategories->count())
                            @foreach($category->subCategories as $key => $subcat)
                                <div class="tab-pane fade {{$key == 0?'show active':''}}" id="fashion_tab_pane_subcat_{{$subcat->id}}" role="tabpanel" aria-labelledby="Dining-tab">
                                    <!-- content  -->
                                    <div class="House_Appliances_product">
                                        @foreach($subcat->sellerProductTake() as $product)
                                        <div class="product_widget5 style4 mb-0 style5">
                                            <div class="product_thumb_upper">
                                                @php
                                                    if (@$product->thum_img != null) {
                                                        $thumbnail = showImage(@$product->thum_img);
                                                    } else {
                                                        $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                                    }

                                                    $price_qty = getProductDiscountedPrice(@$product);
                                                    $showData = [
                                                        'name' => @$product->product_name,
                                                        'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                                        'price' => $price_qty,
                                                        'thumbnail' => $thumbnail,
                                                    ];
                                                @endphp
                                                <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                                    class="thumb">
                                                    @if(app('general_setting')->lazyload == 1)
                                                    <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                                        alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                                        class="lazyload">
                                                    @else
                                                    <img  src="{{ $thumbnail }}"   alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}">
                                                    @endif
                                                </a>
                                                @if(isGuestAddtoCart())
                                                <div class="product_action">
                                                    <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                                        data-producttype="{{ @$product->product->product_type }}"
                                                        data-seller={{ $product->user_id }}
                                                        data-product-sku={{ @$product->skus->first()->id }}
                                                        data-product-id={{ $product->id }}>
                                                        <i class="ti-control-shuffle"
                                                            title="{{ __('defaultTheme.compare') }}"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                                        id="wishlistbtn_{{ $product->id }}"
                                                        data-product_id="{{ $product->id }}"
                                                        data-seller_id="{{ $product->user_id }}">
                                                        <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                                    </a>
                                                    <a class="quickView" data-product_id="{{ $product->id }}"
                                                        data-type="product">
                                                        <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                                    </a>
                                                </div>
                                                @endif
                                                <div class="product_badge">

                                                @if(isGuestAddtoCart())
                                                    @if($product->hasDeal)
                                                        @if($product->hasDeal->discount >0)
                                                            <span class="d-flex align-items-center discount">
                                                                @if($product->hasDeal->discount_type ==0)
                                                                    {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                                                @else
                                                                    {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                                                @endif
                                                            </span>
                                                        @endif
                                                    @else
                                                        @if($product->hasDiscount == 'yes')
                                                            @if($product->discount >0)
                                                                <span class="d-flex align-items-center discount">
                                                                    @if($product->discount_type ==0)
                                                                        {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                                    @else
                                                                        {{single_price($product->discount)}} {{__('common.off')}}
                                                                    @endif
                                                                </span>
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
                                                    @if(isModuleActive('ClubPoint'))
                                                    <span class="d-flex align-items-center point">
                                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                                            <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        {{getNumberTranslate(@$product->product->club_point)}}
                                                    </span>
                                                    @endif
                                                    @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices->count())
                                                        <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product_star mx-auto">
                                                @php
                                                    $reviews = @$product->reviews->where('status', 1)->pluck('rating');

                                                    if (count($reviews) > 0) {
                                                        $value = 0;
                                                        $rating = 0;
                                                        foreach ($reviews as $review) {
                                                            $value += $review;
                                                        }
                                                        $rating = $value / count($reviews);
                                                        $total_review = count($reviews);
                                                    } else {
                                                        $rating = 0;
                                                        $total_review = 0;
                                                    }
                                                @endphp
                                                <x-rating :rating="$rating" />
                                            </div>
                                            <div class="product__meta text-center">
                                                <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                                                <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                                    <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                                    <p class="pro_details_text">
                                                        @foreach($product->product->tags->take(3) as $key => $tag)
                                                            {{$tag->name}}{{ $loop->last ? '' : ',' }}
                                                        @endforeach
                                                    </p>
                                                </a>
                                                @if(isGuestAddtoCart())
                                                    <div class="product_price">
                                                           <p>
                                                            @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                                                <del>
                                                                    {{getProductwitoutDiscountPrice(@$product)}}
                                                                </del>
                                                            @endif
                                                            <strong>
                                                                {{getProductDiscountedPrice(@$product)}}
                                                            </strong>
                                                        </p>
                                                        <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                                            @if (@$product->hasDeal)
                                                                data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                                            @else
                                                                @if (@$product->hasDiscount == 'yes')
                                                                    data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                                                @else
                                                                    data-base-price={{ @$product->skus->first()->sell_price }}
                                                                @endif
                                                            @endif
                                                            data-shipping-method=0
                                                            data-product-id={{ $product->id }}
                                                            data-stock_manage="{{$product->stock_manage}}"
                                                            data-stock="{{@$product->skus->first()->product_stock}}"
                                                            data-min_qty="{{@$product->product->minimum_order_qty}}"
                                                            data-prod_info="{{ json_encode($showData) }}"
                                                            >
                                                            <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" >
                                                                <path d="M0.464844 1.14286C0.464844 0.78782 0.751726 0.5 1.10561 0.5H1.58256C2.39459 0.5 2.88079 1.04771 3.15883 1.55685C3.34414 1.89623 3.47821 2.28987 3.58307 2.64624C3.61147 2.64401 3.64024 2.64286 3.66934 2.64286H14.3464C15.0557 2.64286 15.5679 3.32379 15.3734 4.00811L13.8119 9.50163C13.5241 10.5142 12.6019 11.2124 11.5525 11.2124H6.47073C5.41263 11.2124 4.48508 10.5028 4.20505 9.47909L3.55532 7.10386L2.48004 3.4621L2.47829 3.45572C2.34527 2.96901 2.22042 2.51433 2.03491 2.1746C1.85475 1.84469 1.71115 1.78571 1.58256 1.78571H1.10561C0.751726 1.78571 0.464844 1.49789 0.464844 1.14286ZM4.79882 6.79169L5.44087 9.1388C5.56816 9.60414 5.98978 9.92669 6.47073 9.92669H11.5525C12.0295 9.92669 12.4487 9.60929 12.5795 9.14909L14.0634 3.92857H3.95529L4.78706 6.74583C4.79157 6.76109 4.79548 6.77634 4.79882 6.79169ZM7.72683 13.7857C7.72683 14.7325 6.96184 15.5 6.01812 15.5C5.07443 15.5 4.30942 14.7325 4.30942 13.7857C4.30942 12.8389 5.07443 12.0714 6.01812 12.0714C6.96184 12.0714 7.72683 12.8389 7.72683 13.7857ZM6.4453 13.7857C6.4453 13.5491 6.25405 13.3571 6.01812 13.3571C5.7822 13.3571 5.59095 13.5491 5.59095 13.7857C5.59095 14.0224 5.7822 14.2143 6.01812 14.2143C6.25405 14.2143 6.4453 14.0224 6.4453 13.7857ZM13.7073 13.7857C13.7073 14.7325 12.9423 15.5 11.9986 15.5C11.0549 15.5 10.2899 14.7325 10.2899 13.7857C10.2899 12.8389 11.0549 12.0714 11.9986 12.0714C12.9423 12.0714 13.7073 12.8389 13.7073 13.7857ZM12.4258 13.7857C12.4258 13.5491 12.2345 13.3571 11.9986 13.3571C11.7627 13.3571 11.5714 13.5491 11.5714 13.7857C11.5714 14.0224 11.7627 14.2143 11.9986 14.2143C12.2345 14.2143 12.4258 14.0224 12.4258 13.7857Z" fill="currentColor"/>
                                                            </svg> -->
                                                            {{__('defaultTheme.add_to_cart')}}
                                                        </a>
                                                     
                                                    </div>
                                                @else

                                                <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                                    <a class="amaz_primary_btn w-100" href="{{ url('/login') }}" style="text-indent: 0;">
                                                        {{__('defaultTheme.login_to_order')}}
                                                    </a>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- content  -->
                                </div>
                            @endforeach
                        @else
                            <div class="tab-pane fade show active" id="fashion_tab_pane_subcat_1" role="tabpanel" aria-labelledby="Dining-tab">
                                <!-- content  -->
                                <div class="House_Appliances_product">
                                    @foreach($category->sellerProductTake() as $product)
                                    <div class="product_widget5 style4 mb-0 style5">
                                        <div class="product_thumb_upper">
                                            @php
                                                if (@$product->thum_img != null) {
                                                    $thumbnail = showImage(@$product->thum_img);
                                                } else {
                                                    $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                                }

                                                $price_qty = getProductDiscountedPrice(@$product);
                                                $showData = [
                                                    'name' => @$product->product_name,
                                                    'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                                    'price' => $price_qty,
                                                    'thumbnail' => $thumbnail,
                                                ];
                                            @endphp
                                            <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                                class="thumb">
                                                @if(app('general_setting')->lazyload == 1)
                                                    <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                                        alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                                        class="lazyload">
                                                @else
                                                    <img  src="{{ $thumbnail }}"
                                                    alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                                    >
                                                @endif
                                            </a>
                                            @if(isGuestAddtoCart())
                                                <div class="product_action">
                                                    <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                                        data-producttype="{{ @$product->product->product_type }}"
                                                        data-seller={{ $product->user_id }}
                                                        data-product-sku={{ @$product->skus->first()->id }}
                                                        data-product-id={{ $product->id }}>
                                                        <i class="ti-control-shuffle"
                                                            title="{{ __('defaultTheme.compare') }}"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                                        id="wishlistbtn_{{ $product->id }}"
                                                        data-product_id="{{ $product->id }}"
                                                        data-seller_id="{{ $product->user_id }}">
                                                        <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                                    </a>
                                                    <a class="quickView" data-product_id="{{ $product->id }}"
                                                        data-type="product">
                                                        <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                                    </a>
                                                </div>
                                            @endif
                                            <div class="product_badge">

                                                @if(isGuestAddtoCart())
                                                    @if($product->hasDeal)
                                                        @if($product->hasDeal->discount >0)
                                                            <span class="d-flex align-items-center discount">
                                                                @if($product->hasDeal->discount_type ==0)
                                                                    {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                                                @else
                                                                    {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                                                @endif
                                                            </span>
                                                        @endif
                                                    @else
                                                        @if($product->hasDiscount == 'yes')
                                                            @if($product->discount >0)
                                                                <span class="d-flex align-items-center discount">
                                                                    @if($product->discount_type ==0)
                                                                        {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                                    @else
                                                                        {{single_price($product->discount)}} {{__('common.off')}}
                                                                    @endif
                                                                </span>
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
                                                @if(isModuleActive('ClubPoint'))
                                                <span class="d-flex align-items-center point">
                                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                                        <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    {{getNumberTranslate(@$product->product->club_point)}}
                                                </span>
                                                @endif
                                                @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices->count())
                                                    <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product_star mx-auto">
                                            @php
                                                $reviews = @$product->reviews->where('status', 1)->pluck('rating');

                                                if (count($reviews) > 0) {
                                                    $value = 0;
                                                    $rating = 0;
                                                    foreach ($reviews as $review) {
                                                        $value += $review;
                                                    }
                                                    $rating = $value / count($reviews);
                                                    $total_review = count($reviews);
                                                } else {
                                                    $rating = 0;
                                                    $total_review = 0;
                                                }
                                            @endphp
                                            <x-rating :rating="$rating" />
                                        </div>
                                        <div class="product__meta text-center">
                                            <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                                            <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                                <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                            </a>
                                            @if(isGuestAddtoCart())
                                            <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                                <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                                    @if (@$product->hasDeal)
                                                        data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                                    @else
                                                        @if (@$product->hasDiscount == 'yes')
                                                            data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                                        @else
                                                            data-base-price={{ @$product->skus->first()->sell_price }}
                                                        @endif
                                                    @endif
                                                    data-shipping-method=0
                                                    data-product-id={{ $product->id }}
                                                    data-stock_manage="{{$product->stock_manage}}"
                                                    data-stock="{{@$product->skus->first()->product_stock}}"
                                                    data-min_qty="{{@$product->product->minimum_order_qty}}"
                                                    data-prod_info="{{ json_encode($showData) }}"
                                                    >
                                                    <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" >
                                                        <path d="M0.464844 1.14286C0.464844 0.78782 0.751726 0.5 1.10561 0.5H1.58256C2.39459 0.5 2.88079 1.04771 3.15883 1.55685C3.34414 1.89623 3.47821 2.28987 3.58307 2.64624C3.61147 2.64401 3.64024 2.64286 3.66934 2.64286H14.3464C15.0557 2.64286 15.5679 3.32379 15.3734 4.00811L13.8119 9.50163C13.5241 10.5142 12.6019 11.2124 11.5525 11.2124H6.47073C5.41263 11.2124 4.48508 10.5028 4.20505 9.47909L3.55532 7.10386L2.48004 3.4621L2.47829 3.45572C2.34527 2.96901 2.22042 2.51433 2.03491 2.1746C1.85475 1.84469 1.71115 1.78571 1.58256 1.78571H1.10561C0.751726 1.78571 0.464844 1.49789 0.464844 1.14286ZM4.79882 6.79169L5.44087 9.1388C5.56816 9.60414 5.98978 9.92669 6.47073 9.92669H11.5525C12.0295 9.92669 12.4487 9.60929 12.5795 9.14909L14.0634 3.92857H3.95529L4.78706 6.74583C4.79157 6.76109 4.79548 6.77634 4.79882 6.79169ZM7.72683 13.7857C7.72683 14.7325 6.96184 15.5 6.01812 15.5C5.07443 15.5 4.30942 14.7325 4.30942 13.7857C4.30942 12.8389 5.07443 12.0714 6.01812 12.0714C6.96184 12.0714 7.72683 12.8389 7.72683 13.7857ZM6.4453 13.7857C6.4453 13.5491 6.25405 13.3571 6.01812 13.3571C5.7822 13.3571 5.59095 13.5491 5.59095 13.7857C5.59095 14.0224 5.7822 14.2143 6.01812 14.2143C6.25405 14.2143 6.4453 14.0224 6.4453 13.7857ZM13.7073 13.7857C13.7073 14.7325 12.9423 15.5 11.9986 15.5C11.0549 15.5 10.2899 14.7325 10.2899 13.7857C10.2899 12.8389 11.0549 12.0714 11.9986 12.0714C12.9423 12.0714 13.7073 12.8389 13.7073 13.7857ZM12.4258 13.7857C12.4258 13.5491 12.2345 13.3571 11.9986 13.3571C11.7627 13.3571 11.5714 13.5491 11.5714 13.7857C11.5714 14.0224 11.7627 14.2143 11.9986 14.2143C12.2345 14.2143 12.4258 14.0224 12.4258 13.7857Z" fill="currentColor"/>
                                                    </svg> -->
                                                    {{__('defaultTheme.add_to_cart')}}
                                                </a>
                                                <p>
                                                    @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                                        <del>
                                                            {{getProductwitoutDiscountPrice(@$product)}}
                                                        </del>
                                                     @endif
                                                    <strong>
                                                        {{getProductDiscountedPrice(@$product)}}
                                                    </strong>
                                                </p>
                                            </div>
                                            @else
                                            <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                                <a class="amaz_primary_btn w-100" href="{{ url('/login') }}" style="text-indent:0;">
                                                    {{__('defaultTheme.login_to_order')}}
                                                </a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- content  -->
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@php
    $filter_category_3 = $widgets->where('section_name','filter_category_3')->first();
    $category = @$filter_category_3->customSection->category;
@endphp

<div id="filter_category_3" class="amaz_section section_spacing2 {{@$filter_category_3->status == 0?'d-none':''}}">
    <div class="container ">
        @if($category)
            <div class="row no-gutters">
                <div class="col-xl-5 p-0 col-lg-12">
                    <div class="House_Appliances_widget">
                        <div class="House_Appliances_widget_left d-flex flex-column flex-fill">
                            <h4 id="filter_category_title">{{$filter_category_3->title}}</h4>
                            <ul class="nav nav-tabs flex-fill flex-column border-0" id="myTab10" role="tablist">
                                @foreach(@$category->subCategories as $key => $subcat)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{$key == 0?'active':''}}" id="tab_link_{{$subcat->id}}" data-bs-toggle="tab" data-bs-target="#electronics_tab_pane_subcat_{{$subcat->id}}" type="button" role="tab" aria-controls="Dining" aria-selected="true">{{$subcat->name}}</button>
                                </li>
                                @endforeach
                            </ul>
                            <a href="{{route('frontend.category-product',['slug' => $category->slug, 'item' =>'category'])}}" class="title_links d-flex align-items-center lh-1">
                                <span class="title_text">{{__('common.more_deals')}}</span>
                                <span class="title_icon">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </div>
                        <a href="{{route('frontend.category-product',['slug' => $category->slug, 'item' =>'category'])}}" class="House_Appliances_widget_right overflow-hidden p-0 {{$filter_category_3->customSection->field_2?'':'d-none'}}">
                            <img class="h-100 lazyload" data-src="{{showImage($filter_category_3->customSection->field_2)}}" src="{{showImage(themeDefaultImg())}}" alt="{{@$filter_category_3->title}}" title="{{@$filter_category_3->title}}">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 p-0 col-lg-12">
                    <div class="tab-content" id="myTabContent10">
                        @if($category->subCategories->count())
                            @foreach($category->subCategories as $key => $subcat)
                                <div class="tab-pane fade {{$key == 0?'show active':''}}" id="electronics_tab_pane_subcat_{{$subcat->id}}" role="tabpanel" aria-labelledby="Dining-tab">
                                    <!-- content  -->
                                    <div class="House_Appliances_product">
                                        @foreach($subcat->sellerProductTake() as $product)
                                        <div class="product_widget5 style4 mb-0 style5">
                                            <div class="product_thumb_upper">
                                                @php
                                                    if (@$product->thum_img != null) {
                                                        $thumbnail = showImage(@$product->thum_img);
                                                    } else {
                                                        $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                                    }

                                                    $price_qty = getProductDiscountedPrice(@$product);
                                                    $showData = [
                                                        'name' => @$product->product_name,
                                                        'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                                        'price' => $price_qty,
                                                        'thumbnail' => $thumbnail,
                                                    ];
                                                @endphp
                                                <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                                    class="thumb">
                                                    @if(app('general_setting')->lazyload == 1)
                                                      <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                                        alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                                        class="lazyload">
                                                    @else
                                                      <img  src="{{ $thumbnail }}"  alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}" >
                                                    @endif
                                                </a>
                                                @if(isGuestAddtoCart())
                                                <div class="product_action">
                                                    <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                                        data-producttype="{{ @$product->product->product_type }}"
                                                        data-seller={{ $product->user_id }}
                                                        data-product-sku={{ @$product->skus->first()->id }}
                                                        data-product-id={{ $product->id }}>
                                                        <i class="ti-control-shuffle"
                                                            title="{{ __('defaultTheme.compare') }}"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                                        id="wishlistbtn_{{ $product->id }}"
                                                        data-product_id="{{ $product->id }}"
                                                        data-seller_id="{{ $product->user_id }}">
                                                        <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                                    </a>
                                                    <a class="quickView" data-product_id="{{ $product->id }}"
                                                        data-type="product">
                                                        <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                                    </a>
                                                </div>
                                                @endif
                                                <div class="product_badge">
                                                    @if(isGuestAddtoCart())
                                                        @if($product->hasDeal)
                                                            @if($product->hasDeal->discount >0)
                                                                <span class="d-flex align-items-center discount">
                                                                    @if($product->hasDeal->discount_type ==0)
                                                                        {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                                                    @else
                                                                        {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                                                    @endif
                                                                </span>
                                                            @endif
                                                        @else
                                                            @if($product->hasDiscount == 'yes')
                                                                @if($product->discount >0)
                                                                    <span class="d-flex align-items-center discount">
                                                                        @if($product->discount_type ==0)
                                                                            {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                                        @else
                                                                            {{single_price($product->discount)}} {{__('common.off')}}
                                                                        @endif
                                                                    </span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                    @if(isModuleActive('ClubPoint'))
                                                    <span class="d-flex align-items-center point">
                                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                                            <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        {{getNumberTranslate(@$product->product->club_point)}}
                                                    </span>
                                                    @endif
                                                    @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices->count())
                                                        <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product_star mx-auto">
                                                @php
                                                    $reviews = @$product->reviews->where('status', 1)->pluck('rating');

                                                    if (count($reviews) > 0) {
                                                        $value = 0;
                                                        $rating = 0;
                                                        foreach ($reviews as $review) {
                                                            $value += $review;
                                                        }
                                                        $rating = $value / count($reviews);
                                                        $total_review = count($reviews);
                                                    } else {
                                                        $rating = 0;
                                                        $total_review = 0;
                                                    }
                                                @endphp
                                                <x-rating :rating="$rating" />
                                            </div>
                                            <div class="product__meta text-center">
                                                <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                                                <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                                    <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                                </a>

                                                @if(isGuestAddtoCart())
                                                <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                                    <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                                        @if (@$product->hasDeal)
                                                            data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                                        @else
                                                            @if (@$product->hasDiscount == 'yes')
                                                                data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                                            @else
                                                                data-base-price={{ @$product->skus->first()->sell_price }}
                                                            @endif
                                                        @endif
                                                        data-shipping-method=0
                                                        data-product-id={{ $product->id }}
                                                        data-stock_manage="{{$product->stock_manage}}"
                                                        data-stock="{{@$product->skus->first()->product_stock}}"
                                                        data-min_qty="{{@$product->product->minimum_order_qty}}"
                                                        data-prod_info="{{ json_encode($showData) }}"
                                                        >
                                                        <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" >
                                                            <path d="M0.464844 1.14286C0.464844 0.78782 0.751726 0.5 1.10561 0.5H1.58256C2.39459 0.5 2.88079 1.04771 3.15883 1.55685C3.34414 1.89623 3.47821 2.28987 3.58307 2.64624C3.61147 2.64401 3.64024 2.64286 3.66934 2.64286H14.3464C15.0557 2.64286 15.5679 3.32379 15.3734 4.00811L13.8119 9.50163C13.5241 10.5142 12.6019 11.2124 11.5525 11.2124H6.47073C5.41263 11.2124 4.48508 10.5028 4.20505 9.47909L3.55532 7.10386L2.48004 3.4621L2.47829 3.45572C2.34527 2.96901 2.22042 2.51433 2.03491 2.1746C1.85475 1.84469 1.71115 1.78571 1.58256 1.78571H1.10561C0.751726 1.78571 0.464844 1.49789 0.464844 1.14286ZM4.79882 6.79169L5.44087 9.1388C5.56816 9.60414 5.98978 9.92669 6.47073 9.92669H11.5525C12.0295 9.92669 12.4487 9.60929 12.5795 9.14909L14.0634 3.92857H3.95529L4.78706 6.74583C4.79157 6.76109 4.79548 6.77634 4.79882 6.79169ZM7.72683 13.7857C7.72683 14.7325 6.96184 15.5 6.01812 15.5C5.07443 15.5 4.30942 14.7325 4.30942 13.7857C4.30942 12.8389 5.07443 12.0714 6.01812 12.0714C6.96184 12.0714 7.72683 12.8389 7.72683 13.7857ZM6.4453 13.7857C6.4453 13.5491 6.25405 13.3571 6.01812 13.3571C5.7822 13.3571 5.59095 13.5491 5.59095 13.7857C5.59095 14.0224 5.7822 14.2143 6.01812 14.2143C6.25405 14.2143 6.4453 14.0224 6.4453 13.7857ZM13.7073 13.7857C13.7073 14.7325 12.9423 15.5 11.9986 15.5C11.0549 15.5 10.2899 14.7325 10.2899 13.7857C10.2899 12.8389 11.0549 12.0714 11.9986 12.0714C12.9423 12.0714 13.7073 12.8389 13.7073 13.7857ZM12.4258 13.7857C12.4258 13.5491 12.2345 13.3571 11.9986 13.3571C11.7627 13.3571 11.5714 13.5491 11.5714 13.7857C11.5714 14.0224 11.7627 14.2143 11.9986 14.2143C12.2345 14.2143 12.4258 14.0224 12.4258 13.7857Z" fill="currentColor"/>
                                                        </svg> -->
                                                        {{__('defaultTheme.add_to_cart')}}
                                                    </a>
                                                    <p>
                                                        @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                                            <del>
                                                                {{getProductwitoutDiscountPrice(@$product)}}
                                                            </del>
                                                         @endif
                                                        <strong>
                                                            {{getProductDiscountedPrice(@$product)}}
                                                        </strong>
                                                    </p>
                                                </div>
                                                @else
                                                <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                                    <a class="amaz_primary_btn w-100" href="{{ url('/login') }}" style="text-indent:0; ">

                                                        {{__('defaultTheme.login_to_order')}}
                                                    </a>

                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- content  -->
                                </div>
                            @endforeach
                        @else
                            <div class="tab-pane fade show active" id="electronics_tab_pane_subcat_1" role="tabpanel" aria-labelledby="Dining-tab">
                                <!-- content  -->
                                <div class="House_Appliances_product">
                                    @foreach($category->sellerProductTake() as $product)
                                    <div class="product_widget5 style4 mb-0 style5">
                                        <div class="product_thumb_upper">
                                            @php
                                                if (@$product->thum_img != null) {
                                                    $thumbnail = showImage(@$product->thum_img);
                                                } else {
                                                    $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                                }

                                                $price_qty = getProductDiscountedPrice(@$product);
                                                $showData = [
                                                    'name' => @$product->product_name,
                                                    'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                                    'price' => $price_qty,
                                                    'thumbnail' => $thumbnail,
                                                ];
                                            @endphp
                                            <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                                class="thumb">

                                                    @if(app('general_setting')->lazyload == 1)
                                                      <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                                        alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                                        class="lazyload">
                                                    @else
                                                      <img  src="{{ $thumbnail }}"  alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}" >
                                                    @endif
                                            </a>
                                            @if(isGuestAddtoCart())
                                            <div class="product_action">
                                                <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                                    data-producttype="{{ @$product->product->product_type }}"
                                                    data-seller={{ $product->user_id }}
                                                    data-product-sku={{ @$product->skus->first()->id }}
                                                    data-product-id={{ $product->id }}>
                                                    <i class="ti-control-shuffle"
                                                        title="{{ __('defaultTheme.compare') }}"></i>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                                    id="wishlistbtn_{{ $product->id }}"
                                                    data-product_id="{{ $product->id }}"
                                                    data-seller_id="{{ $product->user_id }}">
                                                    <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                                </a>
                                                <a class="quickView" data-product_id="{{ $product->id }}"
                                                    data-type="product">
                                                    <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                                </a>
                                            </div>
                                            @endif
                                            <div class="product_badge">
                                                @if(isGuestAddtoCart())
                                                    @if($product->hasDeal)
                                                        @if($product->hasDeal->discount >0)
                                                            <span class="d-flex align-items-center discount">
                                                                @if($product->hasDeal->discount_type ==0)
                                                                    {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                                                @else
                                                                    {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                                                @endif
                                                            </span>
                                                        @endif
                                                    @else
                                                        @if($product->hasDiscount == 'yes')
                                                            @if($product->discount >0)
                                                                <span class="d-flex align-items-center discount">
                                                                    @if($product->discount_type ==0)
                                                                        {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                                    @else
                                                                        {{single_price($product->discount)}} {{__('common.off')}}
                                                                    @endif
                                                                </span>
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
                                                @if(isModuleActive('ClubPoint'))
                                                <span class="d-flex align-items-center point">
                                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                                        <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    {{getNumberTranslate(@$product->product->club_point)}}
                                                </span>
                                                @endif
                                                @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices->count())
                                                    <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product_star mx-auto">
                                            @php
                                                $reviews = @$product->reviews->where('status', 1)->pluck('rating');

                                                if (count($reviews) > 0) {
                                                    $value = 0;
                                                    $rating = 0;
                                                    foreach ($reviews as $review) {
                                                        $value += $review;
                                                    }
                                                    $rating = $value / count($reviews);
                                                    $total_review = count($reviews);
                                                } else {
                                                    $rating = 0;
                                                    $total_review = 0;
                                                }
                                            @endphp
                                            <x-rating :rating="$rating" />
                                        </div>
                                        <div class="product__meta text-center">
                                            <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                                            <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                                <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                            </a>

                                            @if(isGuestAddtoCart())
                                            <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                                <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                                    @if (@$product->hasDeal)
                                                        data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                                    @else
                                                        @if (@$product->hasDiscount == 'yes')
                                                            data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                                        @else
                                                            data-base-price={{ @$product->skus->first()->sell_price }}
                                                        @endif
                                                    @endif
                                                    data-shipping-method=0
                                                    data-product-id={{ $product->id }}
                                                    data-stock_manage="{{$product->stock_manage}}"
                                                    data-stock="{{@$product->skus->first()->product_stock}}"
                                                    data-min_qty="{{@$product->product->minimum_order_qty}}"
                                                    data-prod_info="{{ json_encode($showData) }}"
                                                    >
                                                    <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" >
                                                        <path d="M0.464844 1.14286C0.464844 0.78782 0.751726 0.5 1.10561 0.5H1.58256C2.39459 0.5 2.88079 1.04771 3.15883 1.55685C3.34414 1.89623 3.47821 2.28987 3.58307 2.64624C3.61147 2.64401 3.64024 2.64286 3.66934 2.64286H14.3464C15.0557 2.64286 15.5679 3.32379 15.3734 4.00811L13.8119 9.50163C13.5241 10.5142 12.6019 11.2124 11.5525 11.2124H6.47073C5.41263 11.2124 4.48508 10.5028 4.20505 9.47909L3.55532 7.10386L2.48004 3.4621L2.47829 3.45572C2.34527 2.96901 2.22042 2.51433 2.03491 2.1746C1.85475 1.84469 1.71115 1.78571 1.58256 1.78571H1.10561C0.751726 1.78571 0.464844 1.49789 0.464844 1.14286ZM4.79882 6.79169L5.44087 9.1388C5.56816 9.60414 5.98978 9.92669 6.47073 9.92669H11.5525C12.0295 9.92669 12.4487 9.60929 12.5795 9.14909L14.0634 3.92857H3.95529L4.78706 6.74583C4.79157 6.76109 4.79548 6.77634 4.79882 6.79169ZM7.72683 13.7857C7.72683 14.7325 6.96184 15.5 6.01812 15.5C5.07443 15.5 4.30942 14.7325 4.30942 13.7857C4.30942 12.8389 5.07443 12.0714 6.01812 12.0714C6.96184 12.0714 7.72683 12.8389 7.72683 13.7857ZM6.4453 13.7857C6.4453 13.5491 6.25405 13.3571 6.01812 13.3571C5.7822 13.3571 5.59095 13.5491 5.59095 13.7857C5.59095 14.0224 5.7822 14.2143 6.01812 14.2143C6.25405 14.2143 6.4453 14.0224 6.4453 13.7857ZM13.7073 13.7857C13.7073 14.7325 12.9423 15.5 11.9986 15.5C11.0549 15.5 10.2899 14.7325 10.2899 13.7857C10.2899 12.8389 11.0549 12.0714 11.9986 12.0714C12.9423 12.0714 13.7073 12.8389 13.7073 13.7857ZM12.4258 13.7857C12.4258 13.5491 12.2345 13.3571 11.9986 13.3571C11.7627 13.3571 11.5714 13.5491 11.5714 13.7857C11.5714 14.0224 11.7627 14.2143 11.9986 14.2143C12.2345 14.2143 12.4258 14.0224 12.4258 13.7857Z" fill="currentColor"/>
                                                    </svg> -->
                                                    {{__('defaultTheme.add_to_cart')}}
                                                </a>
                                                <p>
                                                    @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                                        <del>
                                                            {{getProductwitoutDiscountPrice(@$product)}}
                                                        </del>
                                                     @endif
                                                    <strong>
                                                        {{getProductDiscountedPrice(@$product)}}
                                                    </strong>
                                                </p>
                                            </div>
                                            @else
                                            <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                                <a class="amaz_primary_btn w-100" href="{{ url('/login') }}" style="text-indent: 0;">

                                                    {{__('defaultTheme.login_to_order')}}
                                                </a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- content  -->
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<!-- amaz_section::end  -->
<!-- cta::start  -->

<!-- cta::end  -->

@php
    $best_deal_1 = $widgets->where('section_name','toys')->first();
    $section_name_01 = "channapatna-toys";
@endphp
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section__title d-flex align-items-center gap-3 mb_30 flex-wrap">
                <h3 id="best_deals_title" class="m-0 flex-fill">{{$best_deal_1->title}}</h3>
                <a href="{{route('frontend.category-product',['slug' =>  ($section_name_01), 'item' =>'category'])}}" class="title_link d-flex align-items-center lh-1">
                    <span class="title_text">{{ __('common.view_all') }}</span>
                    <span class="title_icon">
<i class="fas fa-arrow-right"></i>
</span>


                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <input type="hidden" class="productQtyCount" value="{{$best_deal_1->getProductByQuery()->count()}}">
            <div class="trending_product_active owl-carousel">
                @foreach($best_deal_1->getProductByQuery() as $key => $product)
                    <div class="product_widget5 mb_30 style5">
                        <div class="product_thumb_upper">
                            @php
                                if (@$product->thum_img != null) {
                                    $thumbnail = showImage(@$product->thum_img);
                                } else {
                                    $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                }

                                $price_qty = getProductDiscountedPrice(@$product);
                                $showData = [
                                    'name' => @$product->product_name,
                                    'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                    'price' => $price_qty,
                                    'thumbnail' => $thumbnail,
                                ];
                            @endphp
                            <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                class="thumb">
                                @if(app('general_setting')->lazyload == 1)
                                    <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                    alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                    class="lazyload">
                                @else
                                    <img  src="{{ $thumbnail }}"  alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}" >
                                @endif
                            </a>
                            @if(isGuestAddtoCart() == true)
                            <div class="product_action">
                                <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                    data-producttype="{{ @$product->product->product_type }}"
                                    data-seller={{ $product->user_id }}
                                    data-product-sku={{ @$product->skus->first()->id }}
                                    data-product-id={{ $product->id }}>
                                    <i class="ti-control-shuffle"
                                        title="{{ __('defaultTheme.compare') }}"></i>
                                </a>
                                <a href="javascript:void(0)"
                                    class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                    id="wishlistbtn_{{ $product->id }}"
                                    data-product_id="{{ $product->id }}"
                                    data-seller_id="{{ $product->user_id }}">
                                    <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                </a>
                                <a class="quickView" data-product_id="{{ $product->id }}"
                                    data-type="product">
                                    <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                </a>
                            </div>
                            @endif
                            <div class="product_badge">
                            @if(isGuestAddtoCart() == true)
                                @if($product->hasDeal)
                                    @if($product->hasDeal->discount >0)
                                        <span class="d-flex align-items-center discount">
                                            @if($product->hasDeal->discount_type ==0)
                                                {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                            @else
                                                {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                            @endif
                                        </span>
                                    @endif
                                @else
                                    @if($product->hasDiscount == 'yes')
                                        @if($product->discount >0)
                                            <span class="d-flex align-items-center discount">
                                                @if($product->discount_type ==0)
                                                    {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                @else
                                                    {{single_price($product->discount)}} {{__('common.off')}}
                                                @endif
                                            </span>
                                        @endif
                                    @endif
                                @endif
                            @endif
                                @if(isModuleActive('ClubPoint'))
                                <span class="d-flex align-items-center point">
                                    <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                        <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    {{getNumberTranslate(@$product->product->club_point)}}
                                </span>
                                @endif
                                @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices->count())
                                    <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                @endif
                            </div>
                        </div>
                        <div class="product_star mx-auto">
                            @php
                                $reviews = @$product->reviews->where('status', 1)->pluck('rating');

                                if (count($reviews) > 0) {
                                    $value = 0;
                                    $rating = 0;
                                    foreach ($reviews as $review) {
                                        $value += $review;
                                    }
                                    $rating = $value / count($reviews);
                                    $total_review = count($reviews);
                                } else {
                                    $rating = 0;
                                    $total_review = 0;
                                }
                            @endphp
                            <x-rating :rating="$rating" />
                        </div>
                        <div class="product__meta text-center">
                            <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                            <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                <p class="pro_details_text">
                                    @foreach($product->product->tags->take(3) as $key => $tag)
                                        {{$tag->name}}{{ $loop->last ? '' : ',' }}
                                    @endforeach
                                </p>
                            </a>

                            @if(isGuestAddtoCart() == true)
                                <div class="product_price ">
                                <p>
                                        @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                            <del>
                                                {{getProductwitoutDiscountPrice(@$product)}}
                                            </del>
                                        @endif
                                        <strong>
                                            {{getProductDiscountedPrice(@$product)}}
                                        </strong>
                                    </p>
                                    <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                        @if (@$product->hasDeal)
                                            data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                        @else
                                            @if (@$product->hasDiscount == 'yes')
                                                data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                            @else
                                                data-base-price={{ @$product->skus->first()->sell_price }}
                                            @endif
                                        @endif
                                        data-shipping-method=0
                                        data-product-id={{ $product->id }}
                                        data-stock_manage="{{$product->stock_manage}}"
                                        data-stock="{{@$product->skus->first()->product_stock}}"
                                        data-min_qty="{{@$product->product->minimum_order_qty}}"
                                        data-prod_info="{{ json_encode($showData) }}"
                                        >
                                        {{__('defaultTheme.add_to_cart')}}
                                    </a>
                                  
                                </div>

                            @else
                                <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                    <a class="amaz_primary_btn w-100" href="{{ url('/login') }}" style="text-indent: 0;">
                                        {{__('defaultTheme.login_to_order')}}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
@php
    $top_rating = $widgets->where('section_name','top_rating')->first();
    $peoples_choice = $widgets->where('section_name','people_choices')->first();
    $top_picks = $widgets->where('section_name','top_picks')->first();
@endphp
<div class="amaz_section section_spacing3" style="padding:55px 0 0px 0";>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav amzcart_tabs d-flex align-items-center justify-content-center flex-wrap " id="myTab" role="tablist">
                    <li class="nav-item {{$top_rating->status == 0 ? 'd-none' : ''}}" role="presentation" id="top_rating">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><span id="top_rating_title">{{$top_rating->title}}</span></button>
                    </li>
                    <li class="nav-item {{$peoples_choice->status == 0 ? 'd-none' : ''}}" role="presentation" id="people_choices">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><span id="people_choice_title">{{$peoples_choice->title}}</span></button>
                    </li>
                    <li class="nav-item {{$top_picks->status == 0 ? 'd-none' : ''}}" role="presentation" id="top_picks">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><span id="top_picks_title">{{$top_picks->title}}</span></button>
                    </li>
                </ul>
            </div>
            <div class="col-xl-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade {{$top_rating->status == 0 ? 'hide' : 'show active'}}" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- conttent  -->
                        <div class="amaz_fieature_active fieature_crousel_area owl-carousel">
                            @foreach($top_rating->getHomePageProductByQuery() as $key => $product)

                            <div class="product_widget5 mb_30 style5">
                                <div class="product_thumb_upper">
                                    @php
                                        if (@$product->thum_img != null) {
                                            $thumbnail = showImage(@$product->thum_img);
                                        } else {
                                            $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                        }

                                        $price_qty = getProductDiscountedPrice(@$product);
                                        $showData = [
                                            'name' => @$product->product_name,
                                            'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                            'price' => $price_qty,
                                            'thumbnail' => $thumbnail,
                                        ];
                                    @endphp
                                    <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                        class="thumb">
                                            @if(app('general_setting')->lazyload == 1)
                                                <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                                alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                                class="lazyload">
                                            @else
                                                <img  src="{{ $thumbnail }}"  alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}" >
                                            @endif
                                    </a>
                                    @if(isGuestAddtoCart())
                                        <div class="product_action">
                                            <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                                data-producttype="{{ @$product->product->product_type }}"
                                                data-seller={{ $product->user_id }}
                                                data-product-sku={{ @$product->skus->first()->id }}
                                                data-product-id={{ $product->id }}>
                                                <i class="ti-control-shuffle"
                                                    title="{{ __('defaultTheme.compare') }}"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                                id="wishlistbtn_{{ $product->id }}"
                                                data-product_id="{{ $product->id }}"
                                                data-seller_id="{{ $product->user_id }}">
                                                <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                            </a>
                                            <a class="quickView" data-product_id="{{ $product->id }}"
                                                data-type="product">
                                                <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                            </a>
                                        </div>
                                    @endif
                                    <div class="product_badge">
                                        @if(isGuestAddtoCart())
                                            @if($product->hasDeal)
                                                @if($product->hasDeal->discount >0)
                                                    <span class="d-flex align-items-center discount">
                                                        @if($product->hasDeal->discount_type ==0)
                                                            {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                                        @else
                                                            {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                                        @endif
                                                    </span>
                                                @endif
                                            @else
                                                @if($product->hasDiscount == 'yes')
                                                    @if($product->discount >0)
                                                        <span class="d-flex align-items-center discount">
                                                            @if($product->discount_type ==0)
                                                                {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                            @else
                                                                {{single_price($product->discount)}} {{__('common.off')}}
                                                            @endif
                                                        </span>
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
                                        @if(isModuleActive('ClubPoint'))
                                        <span class="d-flex align-items-center point">
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                                <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            {{getNumberTranslate(@$product->product->club_point)}}
                                        </span>
                                        @endif
                                        @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices->count())
                                            <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="product_star mx-auto">
                                    @php
                                        $reviews = @$product->reviews->where('status', 1)->pluck('rating');

                                        if (count($reviews) > 0) {
                                            $value = 0;
                                            $rating = 0;
                                            foreach ($reviews as $review) {
                                                $value += $review;
                                            }
                                            $rating = $value / count($reviews);
                                            $total_review = count($reviews);
                                        } else {
                                            $rating = 0;
                                            $total_review = 0;
                                        }
                                    @endphp
                                    <x-rating :rating="$rating" />
                                </div>
                                <div class="product__meta px-3 text-center">
                                    <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                                    <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                        <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                    </a>
                                    <p class="pro_details_text">
                                        @foreach($product->product->tags->take(3) as $key => $tag)
                                            {{$tag->name}}{{ $loop->last ? '' : ',' }}
                                        @endforeach
                                    </p>
                                    @if(isGuestAddtoCart())
                                        <div class="product_price ">
                                        <p>
                                                @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                                    <del>
                                                        {{getProductwitoutDiscountPrice(@$product)}}
                                                    </del>
                                                    @endif
                                                <strong>
                                                    {{getProductDiscountedPrice(@$product)}}
                                                </strong>
                                            </p>
                                            <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                                @if (@$product->hasDeal)
                                                    data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                                @else
                                                    @if (@$product->hasDiscount == 'yes')
                                                        data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                                    @else
                                                        data-base-price={{ @$product->skus->first()->sell_price }}
                                                    @endif
                                                @endif
                                                data-shipping-method=0
                                                data-product-id={{ $product->id }}
                                                data-stock_manage="{{$product->stock_manage}}"
                                                data-stock="{{@$product->skus->first()->product_stock}}"
                                                data-min_qty="{{@$product->product->minimum_order_qty}}"
                                                data-prod_info="{{ json_encode($showData) }}"
                                                >
                                                <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" >
                                                    <path d="M0.464844 1.14286C0.464844 0.78782 0.751726 0.5 1.10561 0.5H1.58256C2.39459 0.5 2.88079 1.04771 3.15883 1.55685C3.34414 1.89623 3.47821 2.28987 3.58307 2.64624C3.61147 2.64401 3.64024 2.64286 3.66934 2.64286H14.3464C15.0557 2.64286 15.5679 3.32379 15.3734 4.00811L13.8119 9.50163C13.5241 10.5142 12.6019 11.2124 11.5525 11.2124H6.47073C5.41263 11.2124 4.48508 10.5028 4.20505 9.47909L3.55532 7.10386L2.48004 3.4621L2.47829 3.45572C2.34527 2.96901 2.22042 2.51433 2.03491 2.1746C1.85475 1.84469 1.71115 1.78571 1.58256 1.78571H1.10561C0.751726 1.78571 0.464844 1.49789 0.464844 1.14286ZM4.79882 6.79169L5.44087 9.1388C5.56816 9.60414 5.98978 9.92669 6.47073 9.92669H11.5525C12.0295 9.92669 12.4487 9.60929 12.5795 9.14909L14.0634 3.92857H3.95529L4.78706 6.74583C4.79157 6.76109 4.79548 6.77634 4.79882 6.79169ZM7.72683 13.7857C7.72683 14.7325 6.96184 15.5 6.01812 15.5C5.07443 15.5 4.30942 14.7325 4.30942 13.7857C4.30942 12.8389 5.07443 12.0714 6.01812 12.0714C6.96184 12.0714 7.72683 12.8389 7.72683 13.7857ZM6.4453 13.7857C6.4453 13.5491 6.25405 13.3571 6.01812 13.3571C5.7822 13.3571 5.59095 13.5491 5.59095 13.7857C5.59095 14.0224 5.7822 14.2143 6.01812 14.2143C6.25405 14.2143 6.4453 14.0224 6.4453 13.7857ZM13.7073 13.7857C13.7073 14.7325 12.9423 15.5 11.9986 15.5C11.0549 15.5 10.2899 14.7325 10.2899 13.7857C10.2899 12.8389 11.0549 12.0714 11.9986 12.0714C12.9423 12.0714 13.7073 12.8389 13.7073 13.7857ZM12.4258 13.7857C12.4258 13.5491 12.2345 13.3571 11.9986 13.3571C11.7627 13.3571 11.5714 13.5491 11.5714 13.7857C11.5714 14.0224 11.7627 14.2143 11.9986 14.2143C12.2345 14.2143 12.4258 14.0224 12.4258 13.7857Z" fill="currentColor"/>
                                                </svg> -->
                                                {{__('defaultTheme.add_to_cart')}}
                                            </a>
                                        
                                        </div>
                                    @else
                                        <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                            <a class="amaz_primary_btn w-100" href="{{ url('/login') }}"  style="text-indent: 0;">

                                                {{__('defaultTheme.login_to_order')}}
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            @endforeach
                        </div>
                        <!-- conttent  -->
                    </div>
                    <div class="tab-pane fade {{ $peoples_choice->status == 1 && $top_rating->status == 0 ? 'show active': 'hide' }}" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- conttent  -->
                        <div class="amaz_fieature_active fieature_crousel_area owl-carousel">
                            @foreach($peoples_choice->getHomePageProductByQuery() as $key => $product)

                            <div class="product_widget5 mb_30 style5">
                                <div class="product_thumb_upper">
                                    @php
                                        if (@$product->thum_img != null) {
                                            $thumbnail = showImage(@$product->thum_img);
                                        } else {
                                            $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                        }

                                        $price_qty = getProductDiscountedPrice(@$product);
                                        $showData = [
                                            'name' => @$product->product_name,
                                            'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                            'price' => $price_qty,
                                            'thumbnail' => $thumbnail,
                                        ];
                                    @endphp
                                    <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                        class="thumb">
                                        @if(app('general_setting')->lazyload == 1)
                                            <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                            alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                            class="lazyload">
                                        @else
                                            <img  src="{{ $thumbnail }}"  alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}" >
                                        @endif
                                    </a>

                                    @if(isGuestAddtoCart())
                                        <div class="product_action">
                                            <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                                data-producttype="{{ @$product->product->product_type }}"
                                                data-seller={{ $product->user_id }}
                                                data-product-sku={{ @$product->skus->first()->id }}
                                                data-product-id={{ $product->id }}>
                                                <i class="ti-control-shuffle"
                                                    title="{{ __('defaultTheme.compare') }}"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                                id="wishlistbtn_{{ $product->id }}"
                                                data-product_id="{{ $product->id }}"
                                                data-seller_id="{{ $product->user_id }}">
                                                <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                            </a>
                                            <a class="quickView" data-product_id="{{ $product->id }}"
                                                data-type="product">
                                                <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                            </a>
                                        </div>
                                    @endif
                                    <div class="product_badge">
                                        @if(isGuestAddtoCart())
                                            @if($product->hasDeal)
                                                @if($product->hasDeal->discount >0)
                                                    <span class="d-flex align-items-center discount">
                                                        @if($product->hasDeal->discount_type ==0)
                                                            {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                                        @else
                                                            {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                                        @endif
                                                    </span>
                                                @endif
                                            @else
                                                @if($product->hasDiscount == 'yes')
                                                    @if($product->discount >0)
                                                        <span class="d-flex align-items-center discount">
                                                            @if($product->discount_type ==0)
                                                                {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                            @else
                                                                {{single_price($product->discount)}} {{__('common.off')}}
                                                            @endif
                                                        </span>
                                                    @endif
                                                @endif
                                            @endif
                                        @endif


                                        @if(isModuleActive('ClubPoint'))
                                        <span class="d-flex align-items-center point">
                                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                                <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            {{getNumberTranslate(@$product->product->club_point)}}
                                        </span>
                                        @endif
                                        @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices != '')
                                            <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="product_star mx-auto">
                                    @php
                                        $reviews = @$product->reviews->where('status', 1)->pluck('rating');

                                        if (count($reviews) > 0) {
                                            $value = 0;
                                            $rating = 0;
                                            foreach ($reviews as $review) {
                                                $value += $review;
                                            }
                                            $rating = $value / count($reviews);
                                            $total_review = count($reviews);
                                        } else {
                                            $rating = 0;
                                            $total_review = 0;
                                        }
                                    @endphp
                                    <x-rating :rating="$rating" />
                                </div>
                                <div class="product__meta px-3 text-center">
                                    <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                                    <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                        <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                    </a>
                                    <p class="pro_details_text">
                                        @foreach($product->product->tags->take(3) as $key => $tag)
                                            {{$tag->name}}{{ $loop->last ? '' : ',' }}
                                        @endforeach
                                    </p>
                                    @if(isGuestAddtoCart())
                                    <div class="product_price ">
                                    <p>
                                            @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                                <del>
                                                    {{getProductwitoutDiscountPrice(@$product)}}
                                                </del>
                                                @endif
                                            <strong>
                                                {{getProductDiscountedPrice(@$product)}}
                                            </strong>
                                        </p>
                                        <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                            @if (@$product->hasDeal)
                                                data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                            @else
                                                @if (@$product->hasDiscount == 'yes')
                                                    data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                                @else
                                                    data-base-price={{ @$product->skus->first()->sell_price }}
                                                @endif
                                            @endif
                                            data-shipping-method=0
                                            data-product-id={{ $product->id }}
                                            data-stock_manage="{{$product->stock_manage}}"
                                            data-stock="{{@$product->skus->first()->product_stock}}"
                                            data-min_qty="{{@$product->product->minimum_order_qty}}"
                                            data-prod_info="{{ json_encode($showData) }}"
                                            >
                                            <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" >
                                                <path d="M0.464844 1.14286C0.464844 0.78782 0.751726 0.5 1.10561 0.5H1.58256C2.39459 0.5 2.88079 1.04771 3.15883 1.55685C3.34414 1.89623 3.47821 2.28987 3.58307 2.64624C3.61147 2.64401 3.64024 2.64286 3.66934 2.64286H14.3464C15.0557 2.64286 15.5679 3.32379 15.3734 4.00811L13.8119 9.50163C13.5241 10.5142 12.6019 11.2124 11.5525 11.2124H6.47073C5.41263 11.2124 4.48508 10.5028 4.20505 9.47909L3.55532 7.10386L2.48004 3.4621L2.47829 3.45572C2.34527 2.96901 2.22042 2.51433 2.03491 2.1746C1.85475 1.84469 1.71115 1.78571 1.58256 1.78571H1.10561C0.751726 1.78571 0.464844 1.49789 0.464844 1.14286ZM4.79882 6.79169L5.44087 9.1388C5.56816 9.60414 5.98978 9.92669 6.47073 9.92669H11.5525C12.0295 9.92669 12.4487 9.60929 12.5795 9.14909L14.0634 3.92857H3.95529L4.78706 6.74583C4.79157 6.76109 4.79548 6.77634 4.79882 6.79169ZM7.72683 13.7857C7.72683 14.7325 6.96184 15.5 6.01812 15.5C5.07443 15.5 4.30942 14.7325 4.30942 13.7857C4.30942 12.8389 5.07443 12.0714 6.01812 12.0714C6.96184 12.0714 7.72683 12.8389 7.72683 13.7857ZM6.4453 13.7857C6.4453 13.5491 6.25405 13.3571 6.01812 13.3571C5.7822 13.3571 5.59095 13.5491 5.59095 13.7857C5.59095 14.0224 5.7822 14.2143 6.01812 14.2143C6.25405 14.2143 6.4453 14.0224 6.4453 13.7857ZM13.7073 13.7857C13.7073 14.7325 12.9423 15.5 11.9986 15.5C11.0549 15.5 10.2899 14.7325 10.2899 13.7857C10.2899 12.8389 11.0549 12.0714 11.9986 12.0714C12.9423 12.0714 13.7073 12.8389 13.7073 13.7857ZM12.4258 13.7857C12.4258 13.5491 12.2345 13.3571 11.9986 13.3571C11.7627 13.3571 11.5714 13.5491 11.5714 13.7857C11.5714 14.0224 11.7627 14.2143 11.9986 14.2143C12.2345 14.2143 12.4258 14.0224 12.4258 13.7857Z" fill="currentColor"/>
                                            </svg> -->
                                            {{__('defaultTheme.add_to_cart')}}
                                        </a>
                                   
                                    </div>
                                    @else
                                    <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                        <a class="amaz_primary_btn w-100"  style="text-indent: 0;" href="{{ url('/login') }}" >

                                            {{__('defaultTheme.login_to_order')}}
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            @endforeach
                        </div>
                        <!-- conttent  -->
                    </div>
                    <div class="tab-pane fade {{$top_picks->status == 1 && $peoples_choice->status == 0 && $top_rating->status == 0 ? 'show active': 'hide' }}" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <!-- conttent  -->
                        <div class="amaz_fieature_active fieature_crousel_area owl-carousel">
                            @foreach($top_picks->getHomePageProductByQuery() as $key => $product)
                                <div class="product_widget5 mb_30 style5">
                                    <div class="product_thumb_upper">
                                        @php
                                            if (@$product->thum_img != null) {
                                                $thumbnail = showImage(@$product->thum_img);
                                            } else {
                                                $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                            }

                                            $price_qty = getProductDiscountedPrice(@$product);
                                            $showData = [
                                                'name' => @$product->product_name,
                                                'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                                'price' => $price_qty,
                                                'thumbnail' => $thumbnail,
                                            ];
                                        @endphp
                                        <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                            class="thumb">
                                            @if(app('general_setting')->lazyload == 1)
                                                <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                                alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                                class="lazyload">
                                            @else
                                                <img  src="{{ $thumbnail }}"  alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}" >
                                            @endif
                                        </a>
                                        @if(isGuestAddtoCart())
                                            <div class="product_action">
                                                <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                                    data-producttype="{{ @$product->product->product_type }}"
                                                    data-seller={{ $product->user_id }}
                                                    data-product-sku={{ @$product->skus->first()->id }}
                                                    data-product-id={{ $product->id }}>
                                                    <i class="ti-control-shuffle"
                                                        title="{{ __('defaultTheme.compare') }}"></i>
                                                </a>
                                                <a href="javascript:void(0)"
                                                    class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                                    id="wishlistbtn_{{ $product->id }}"
                                                    data-product_id="{{ $product->id }}"
                                                    data-seller_id="{{ $product->user_id }}">
                                                    <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                                </a>
                                                <a class="quickView" data-product_id="{{ $product->id }}"
                                                    data-type="product">
                                                    <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                                </a>
                                            </div>
                                        @endif
                                        <div class="product_badge">
                                            @if(isGuestAddtoCart())
                                                @if($product->hasDeal)
                                                    @if($product->hasDeal->discount >0)
                                                        <span class="d-flex align-items-center discount">
                                                            @if($product->hasDeal->discount_type ==0)
                                                                {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                                            @else
                                                                {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                                            @endif
                                                        </span>
                                                    @endif
                                                @else
                                                    @if($product->hasDiscount == 'yes')
                                                        @if($product->discount >0)
                                                            <span class="d-flex align-items-center discount">
                                                                @if($product->discount_type ==0)
                                                                    {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                                @else
                                                                    {{single_price($product->discount)}} {{__('common.off')}}
                                                                @endif
                                                            </span>
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                            @if(isModuleActive('ClubPoint'))
                                            <span class="d-flex align-items-center point">
                                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                                    <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                {{getNumberTranslate(@$product->product->club_point)}}
                                            </span>
                                            @endif
                                            @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices != '')
                                                <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product_star mx-auto">
                                        @php
                                            $reviews = @$product->reviews->where('status', 1)->pluck('rating');

                                            if (count($reviews) > 0) {
                                                $value = 0;
                                                $rating = 0;
                                                foreach ($reviews as $review) {
                                                    $value += $review;
                                                }
                                                $rating = $value / count($reviews);
                                                $total_review = count($reviews);
                                            } else {
                                                $rating = 0;
                                                $total_review = 0;
                                            }
                                        @endphp
                                        <x-rating :rating="$rating" />
                                    </div>
                                    <div class="product__meta px-3 text-center">
                                        <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                                        <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                            <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                        </a>
                                        <p class="pro_details_text">
                                            @foreach($product->product->tags->take(3) as $key => $tag)
                                                {{$tag->name}}{{ $loop->last ? '' : ',' }}
                                            @endforeach
                                        </p>
                                        @if(isGuestAddtoCart())
                                            <div class="product_price ">
                                            <p>
                                                    @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                                        <del>
                                                            {{getProductwitoutDiscountPrice(@$product)}}
                                                        </del>
                                                    @endif
                                                    <strong>
                                                        {{getProductDiscountedPrice(@$product)}}
                                                    </strong>
                                                </p>
                                                <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                                    @if (@$product->hasDeal)
                                                        data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                                    @else
                                                        @if (@$product->hasDiscount == 'yes')
                                                            data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                                        @else
                                                            data-base-price={{ @$product->skus->first()->sell_price }}
                                                        @endif
                                                    @endif
                                                    data-shipping-method=0
                                                    data-product-id={{ $product->id }}
                                                    data-stock_manage="{{$product->stock_manage}}"
                                                    data-stock="{{@$product->skus->first()->product_stock}}"
                                                    data-min_qty="{{@$product->product->minimum_order_qty}}"
                                                    data-prod_info="{{ json_encode($showData) }}"
                                                    >
                                                    <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" >
                                                        <path d="M0.464844 1.14286C0.464844 0.78782 0.751726 0.5 1.10561 0.5H1.58256C2.39459 0.5 2.88079 1.04771 3.15883 1.55685C3.34414 1.89623 3.47821 2.28987 3.58307 2.64624C3.61147 2.64401 3.64024 2.64286 3.66934 2.64286H14.3464C15.0557 2.64286 15.5679 3.32379 15.3734 4.00811L13.8119 9.50163C13.5241 10.5142 12.6019 11.2124 11.5525 11.2124H6.47073C5.41263 11.2124 4.48508 10.5028 4.20505 9.47909L3.55532 7.10386L2.48004 3.4621L2.47829 3.45572C2.34527 2.96901 2.22042 2.51433 2.03491 2.1746C1.85475 1.84469 1.71115 1.78571 1.58256 1.78571H1.10561C0.751726 1.78571 0.464844 1.49789 0.464844 1.14286ZM4.79882 6.79169L5.44087 9.1388C5.56816 9.60414 5.98978 9.92669 6.47073 9.92669H11.5525C12.0295 9.92669 12.4487 9.60929 12.5795 9.14909L14.0634 3.92857H3.95529L4.78706 6.74583C4.79157 6.76109 4.79548 6.77634 4.79882 6.79169ZM7.72683 13.7857C7.72683 14.7325 6.96184 15.5 6.01812 15.5C5.07443 15.5 4.30942 14.7325 4.30942 13.7857C4.30942 12.8389 5.07443 12.0714 6.01812 12.0714C6.96184 12.0714 7.72683 12.8389 7.72683 13.7857ZM6.4453 13.7857C6.4453 13.5491 6.25405 13.3571 6.01812 13.3571C5.7822 13.3571 5.59095 13.5491 5.59095 13.7857C5.59095 14.0224 5.7822 14.2143 6.01812 14.2143C6.25405 14.2143 6.4453 14.0224 6.4453 13.7857ZM13.7073 13.7857C13.7073 14.7325 12.9423 15.5 11.9986 15.5C11.0549 15.5 10.2899 14.7325 10.2899 13.7857C10.2899 12.8389 11.0549 12.0714 11.9986 12.0714C12.9423 12.0714 13.7073 12.8389 13.7073 13.7857ZM12.4258 13.7857C12.4258 13.5491 12.2345 13.3571 11.9986 13.3571C11.7627 13.3571 11.5714 13.5491 11.5714 13.7857C11.5714 14.0224 11.7627 14.2143 11.9986 14.2143C12.2345 14.2143 12.4258 14.0224 12.4258 13.7857Z" fill="currentColor"/>
                                                    </svg> -->
                                                    {{__('defaultTheme.add_to_cart')}}
                                                </a>
                                              
                                            </div>
                                        @else

                                        <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                            <a class="amaz_primary_btn w-100"  style="text-indent: 0;" href="{{ url('/login') }}">
                                                {{__('defaultTheme.login_to_order')}}
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- conttent  -->
                    </div>
                </div>

            </div>
        </div>
    </div>
<div class="amaz_section">
    <div class="container-fluid" style="padding-left:0px;padding-right:0px">
        <div class="row">
            <div class="col-xl-12">
                <x-random-ads-component/>
            </div>
        </div>
    </div>
</div>
@php
    $discount_banner = $widgets->where('section_name','discount_banner')->first();
@endphp
<div id="discount_banner" class="amaz_section amaz_deal_area {{$discount_banner->status == 0?'d-none':''}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4 mb_20 {{!@$discount_banner->customSection->field_4?'d-none':''}}">
                <a href="{{@$discount_banner->customSection->field_4}}" class="mb_30">
                    <img data-src="{{showImage(@$discount_banner->customSection->field_1)}}" src="{{showImage(themeDefaultImg())}}" alt="{{$discount_banner->title}}" title="{{$discount_banner->title}}" class="img-fluid lazyload">
                </a>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 mb_20 {{!@$discount_banner->customSection->field_5?'d-none':''}}">
                <a href="{{@$discount_banner->customSection->field_5}}" class=" mb_30">
                    <img data-src="{{showImage(@$discount_banner->customSection->field_2)}}" src="{{showImage(themeDefaultImg())}}" alt="{{$discount_banner->title}}" title="{{$discount_banner->title}}" class="img-fluid lazyload">
                </a>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4 mb_20 {{!@$discount_banner->customSection->field_6?'d-none':''}}">
                <a href="{{@$discount_banner->customSection->field_6}}" class=" mb_30">
                    <img data-src="{{showImage(@$discount_banner->customSection->field_3)}}" src="{{showImage(themeDefaultImg())}}" alt="{{$discount_banner->title}}" title="{{$discount_banner->title}}" class="img-fluid lazyload">
                </a>
            </div>
        </div>
    </div>
</div>

@php
$subscribeContent = \Modules\FrontendCMS\Entities\SubscribeContent::find(1);
@endphp


<!-- amaz_recomanded::start  -->
<div class="newab">
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-6">
      <!-- Carousel for 3 images -->
      <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="public/uploads/images/24-08-2024/ab.jpg" class="d-block w-100" alt="Image 1" loading="lazy">
          </div>
          <div class="carousel-item">
            <img src="public/uploads/images/24-08-2024/ab2.jpg" class="d-block w-100" alt="Image 2 "loading="lazy">
          </div>
          <div class="carousel-item">
            <img src="public/uploads/images/24-08-2024/ab3.jpg" class="d-block w-100" alt="Image 3"loading="lazy">
          </div>
        </div>
        <!-- Custom carousel indicators -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
      </div>
    </div>
    
    <div class="col-md-6">
    <div class="contentss">
    <img src="public/uploads/images/24-08-2024/icon-1.png" alt="Icon" class="iconss">
      <p>
        Sanjeevini Mart, where every purchase tells a story of empowerment, craftsmanship, and sustainability. Nestled in the heart of Karnataka, our platform is a vibrant celebration of the ingenious creations from the Self-Help Groups.
        
        Step into a world where tradition meets innovation, where artisans weave dreams into every thread, carve history into each wooden masterpiece, and infuse love into every jar of homemade delicacy. From intricately designed handicrafts to tantalizing food items, from eco-friendly toys to ethereal cosmetics, our curated collection showcases the essence of Karnataka’s rich cultural heritage.
      </p>
    </div>
<x-subscribe-component :subscribeContent="$subscribeContent"/>
  </div>
</div>
                                        </div>
                                        </div>












@php
    $more_products = $widgets->where('section_name','more_products')->first();
@endphp
<div class="amaz_recomanded_area {{$more_products->status == 0?'d-none':''}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="more_products" class="amaz_recomanded_box mb_60">
                    <div class="amaz_recomanded_box_head">
                        <h4 class="mb-0">{{$more_products->title}}</h4>
                    </div>
                    <div class="amaz_recomanded_box_body2 dataApp">
                        @foreach($more_products->getHomePageProductByQuery() as $key => $product)
                        <div class="product_widget5 style5">
                            <div class="product_thumb_upper">
                                @php
                                    if (@$product->thum_img != null) {
                                        $thumbnail = showImage(@$product->thum_img);
                                    } else {
                                        $thumbnail = showImage(@$product->product->thumbnail_image_source);
                                    }

                                    $price_qty = getProductDiscountedPrice(@$product);
                                    $showData = [
                                        'name' => @$product->product_name,
                                        'url' => singleProductURL(@$product->seller->slug, @$product->slug),
                                        'price' => $price_qty,
                                        'thumbnail' => $thumbnail,
                                    ];
                                @endphp
                                <a href="{{ singleProductURL($product->seller->slug, $product->slug) }}"
                                    class="thumb">
                                    @if(app('general_setting')->lazyload == 1)
                                        <img data-src="{{ $thumbnail }}" src="{{ showImage(themeDefaultImg()) }}"
                                        alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}"
                                        class="lazyload">
                                    @else
                                        <img  src="{{ $thumbnail }}"  alt="{{ @$product->product_name }}" title="{{ @$product->product_name }}" >
                                    @endif
                                </a>
                                @if(isGuestAddtoCart())
                                <div class="product_action">
                                    <a href="javascript:void(0)" class="addToCompareFromThumnail"
                                        data-producttype="{{ @$product->product->product_type }}"
                                        data-seller={{ $product->user_id }}
                                        data-product-sku={{ @$product->skus->first()->id }}
                                        data-product-id={{ $product->id }}>
                                        <i class="ti-control-shuffle"
                                            title="{{ __('defaultTheme.compare') }}"></i>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="add_to_wishlist {{ $product->is_wishlist() == 1 ? 'is_wishlist' : '' }}"
                                        id="wishlistbtn_{{ $product->id }}"
                                        data-product_id="{{ $product->id }}"
                                        data-seller_id="{{ $product->user_id }}">
                                        <i class="far fa-heart" title="{{ __('defaultTheme.wishlist') }}"></i>
                                    </a>
                                    <a class="quickView" data-product_id="{{ $product->id }}"
                                        data-type="product">
                                        <i class="ti-eye" title="{{ __('defaultTheme.quick_view') }}"></i>
                                    </a>
                                </div>
                                @endif
                                <div class="product_badge">
                                    @if(isGuestAddtoCart())
                                        @if($product->hasDeal)
                                            @if($product->hasDeal->discount >0)
                                                <span class="d-flex align-items-center discount">
                                                    @if($product->hasDeal->discount_type ==0)
                                                        {{getNumberTranslate($product->hasDeal->discount)}} % {{__('common.off')}}
                                                    @else
                                                        {{single_price($product->hasDeal->discount)}} {{__('common.off')}}
                                                    @endif
                                                </span>
                                            @endif
                                        @else
                                            @if($product->hasDiscount == 'yes')
                                                @if($product->discount >0)
                                                    <span class="d-flex align-items-center discount">
                                                        @if($product->discount_type ==0)
                                                            {{getNumberTranslate($product->discount)}} % {{__('common.off')}}
                                                        @else
                                                            {{single_price($product->discount)}} {{__('common.off')}}
                                                        @endif
                                                    </span>
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                    @if(isModuleActive('ClubPoint'))
                                    <span class="d-flex align-items-center point">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" >
                                            <path d="M15 7.6087V10.087C15 11.1609 12.4191 12.5652 9.23529 12.5652C6.05153 12.5652 3.47059 11.1609 3.47059 10.087V8.02174M3.71271 8.2357C4.42506 9.18404 6.628 10.0737 9.23529 10.0737C12.4191 10.0737 15 8.74704 15 7.60704C15 6.96683 14.1872 6.26548 12.9115 5.77313M12.5294 3.47826V5.95652C12.5294 7.03044 9.94847 8.43478 6.76471 8.43478C3.58094 8.43478 1 7.03044 1 5.95652V3.47826M6.76471 5.9433C9.94847 5.9433 12.5294 4.61661 12.5294 3.47661C12.5294 2.33578 9.94847 1 6.76471 1C3.58094 1 1 2.33578 1 3.47661C1 4.61661 3.58094 5.9433 6.76471 5.9433Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        {{getNumberTranslate(@$product->product->club_point)}}
                                    </span>
                                    @endif
                                    @if(isModuleActive('WholeSale') && @$product->skus->first()->wholeSalePrices != '')
                                        <span class="d-flex align-items-center sale">{{__('common.wholesale')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="product_star mx-auto">
                                @php
                                    $reviews = @$product->reviews->where('status', 1)->pluck('rating');
                                    if (count($reviews) > 0) {
                                        $value = 0;
                                        $rating = 0;
                                        foreach ($reviews as $review) {
                                            $value += $review;
                                        }
                                        $rating = $value / count($reviews);
                                        $total_review = count($reviews);
                                    } else {
                                        $rating = 0;
                                        $total_review = 0;
                                    }
                               @endphp
                                <x-rating :rating="$rating" />
                            </div>
                            <div class="product__meta text-center">
                                <span class="product_banding ">{{ @$product->brand->name ?? " " }}</span>
                                <a href="{{singleProductURL(@$product->seller->slug, $product->slug)}}">
                                    <h4>@if ($product->product_name) {{ textLimit(@$product->product_name, 50) }} @else {{ textLimit(@$product->product->product_name, 50) }} @endif</h4>
                                </a>
                                @if(isGuestAddtoCart())
                                <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                    <a class="amaz_primary_btn addToCartFromThumnail" data-producttype="{{ @$product->product->product_type }}" data-seller={{ $product->user_id }} data-product-sku={{ @$product->skus->first()->id }}
                                        @if (@$product->hasDeal)
                                            data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->hasDeal->discount_type,@$product->hasDeal->discount) }}
                                        @else
                                            @if (@$product->hasDiscount == 'yes')
                                                data-base-price={{ selling_price(@$product->skus->first()->sell_price,@$product->discount_type,@$product->discount) }}
                                            @else
                                                data-base-price={{ @$product->skus->first()->sell_price }}
                                            @endif
                                        @endif
                                        data-shipping-method=0
                                        data-product-id={{ $product->id }}
                                        data-stock_manage="{{$product->stock_manage}}"
                                        data-stock="{{@$product->skus->first()->product_stock}}"
                                        data-min_qty="{{@$product->product->minimum_order_qty}}"
                                        data-prod_info="{{ json_encode($showData) }}"
                                        >
                                        <!-- <svg width="16" height="16" viewBox="0 0 16 16" fill="none" >
                                            <path d="M0.464844 1.14286C0.464844 0.78782 0.751726 0.5 1.10561 0.5H1.58256C2.39459 0.5 2.88079 1.04771 3.15883 1.55685C3.34414 1.89623 3.47821 2.28987 3.58307 2.64624C3.61147 2.64401 3.64024 2.64286 3.66934 2.64286H14.3464C15.0557 2.64286 15.5679 3.32379 15.3734 4.00811L13.8119 9.50163C13.5241 10.5142 12.6019 11.2124 11.5525 11.2124H6.47073C5.41263 11.2124 4.48508 10.5028 4.20505 9.47909L3.55532 7.10386L2.48004 3.4621L2.47829 3.45572C2.34527 2.96901 2.22042 2.51433 2.03491 2.1746C1.85475 1.84469 1.71115 1.78571 1.58256 1.78571H1.10561C0.751726 1.78571 0.464844 1.49789 0.464844 1.14286ZM4.79882 6.79169L5.44087 9.1388C5.56816 9.60414 5.98978 9.92669 6.47073 9.92669H11.5525C12.0295 9.92669 12.4487 9.60929 12.5795 9.14909L14.0634 3.92857H3.95529L4.78706 6.74583C4.79157 6.76109 4.79548 6.77634 4.79882 6.79169ZM7.72683 13.7857C7.72683 14.7325 6.96184 15.5 6.01812 15.5C5.07443 15.5 4.30942 14.7325 4.30942 13.7857C4.30942 12.8389 5.07443 12.0714 6.01812 12.0714C6.96184 12.0714 7.72683 12.8389 7.72683 13.7857ZM6.4453 13.7857C6.4453 13.5491 6.25405 13.3571 6.01812 13.3571C5.7822 13.3571 5.59095 13.5491 5.59095 13.7857C5.59095 14.0224 5.7822 14.2143 6.01812 14.2143C6.25405 14.2143 6.4453 14.0224 6.4453 13.7857ZM13.7073 13.7857C13.7073 14.7325 12.9423 15.5 11.9986 15.5C11.0549 15.5 10.2899 14.7325 10.2899 13.7857C10.2899 12.8389 11.0549 12.0714 11.9986 12.0714C12.9423 12.0714 13.7073 12.8389 13.7073 13.7857ZM12.4258 13.7857C12.4258 13.5491 12.2345 13.3571 11.9986 13.3571C11.7627 13.3571 11.5714 13.5491 11.5714 13.7857C11.5714 14.0224 11.7627 14.2143 11.9986 14.2143C12.2345 14.2143 12.4258 14.0224 12.4258 13.7857Z" fill="currentColor"/>
                                        </svg> -->
                                        {{__('defaultTheme.add_to_cart')}}
                                    </a>
                                    <p>
                                        @if (getProductwitoutDiscountPrice(@$product) != single_price(0))
                                            <del>
                                                {{getProductwitoutDiscountPrice(@$product)}}
                                            </del>
                                            @endif
                                        <strong>
                                            {{getProductDiscountedPrice(@$product)}}
                                        </strong>
                                    </p>
                                </div>
                                @else
                                <div class="product_price d-flex align-items-center justify-content-between flex-wrap">
                                    <a class="amaz_primary_btn w-100" style="text-indent: 0;" href="{{ url('/login') }}">

                                        {{__('defaultTheme.login_to_order')}}
                                    </a>
                                </div>

                                @endif
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                @if($more_products->getHomePageProductByQuery()->lastPage() > 1)
                <a id="loadmore" class="amaz_primary_btn2 min_200 load_more_btn_homepage">{{__('common.load_more')}}</a>
                @endif

                <input type="hidden" id="login_check" value="@if(auth()->check()) 1 @else 0 @endif">
            </div>
        </div>
    </div>
</div>
{{-- for prsanth --}}




{{-- for prsanth --}}


<!-- amaz_recomanded::end -->
<x-top-brand-component/>
<!-- amaz_brand::start  -->

<!-- amaz_brand::end  -->

<!-- Popular Searches::start  -->
<x-popular-search-component/>
<!-- Popular Searches::end  -->

@include(theme('partials._subscription_modal'))
@endsection
@include(theme('partials.add_to_cart_script'))
@include(theme('partials.add_to_compare_script'))
