<br />
<div class="row">
    <div class="footer_widget">
        <div class="footer_title">
            <h1 class="subhead">{{ @$subscribeContent->title }}</h1>
			<h6>Don't miss out on exciting promotions and the latest shopping news</h6>
        </div>
        <div class="subcribe-form mb_20 theme_mailChimp2" id="mc_embed_signup">
            <form id="subscriptionForm" method="" class="subscription relative">
			    <div class="row">
				<div class="col-lg-8 col-md-8">
                <input name="email" id="subscription_email_id" class="form-control" placeholder="{{ __('defaultTheme.enter_email_address') }}" type="email">
                <div class="message_div d-none">
                </div></div>
				
				<div class="col-lg-3 col-md-3">
                <button id="subscribeBtn">{{ __('defaultTheme.subscribe') }}</button></div>
				</div>
				<div class="col-lg-1 col-md-1"></div>
                <div class="info"></div>
            </form>
        </div>
        <div class="social__Links">           
            @foreach($sellerSocialLinks as $sellerSocialLink)
                <a target="__blank" href="{{$sellerSocialLink->url}}">
                    <i class="{{$sellerSocialLink->icon}}"></i>
                </a>
            @endforeach     
        </div>
    </div>
</div>
