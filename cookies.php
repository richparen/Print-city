<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Cookies | Louvenir</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="asaaab/user/themes/base/images/favicon.png">
    <link rel="canonical" href="cookies.php" id="canonical">
    <meta name="google-site-verification" content="LBVZwwVA-IThrACK_isQTfjceIOsSGotEtaWEtbu_wA">
    
    <script src="js/platform.js" async="" defer=""></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);w.gtag=function(){dataLayer.push(arguments);}
})(window,document,'script','dataLayer','GTM-KP49M54');</script>
<!-- End Google Tag Manager -->    

        <meta name="description" content=" ">
        <meta name="twitter:card" property="twitter:card" content="summary">
        <meta property="og:site_name" content="Louvenir">
        <meta property="og:title" content="Cookies">
        <meta property="og:url" content="https://www.mappin.kz/cookies">
        <meta property="og:description" content=" ">

                
    <script type="javascript">document.documentElement.style.setProperty('--vh', `${window.innerHeight/100}px`);</script>

    <link href="asaaab/assets/5bee41ecfbc9d9cc65aec49cf0e2778d.css" type="text/css" rel="stylesheet">
    <script src="asaaab/assets/68f800f04a686f4d4748d1adfb376a5c.js"></script>
</head>

<body class="page-loading page-cookies bullets-row-is-visible">

            <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="ns.html?id=GTM-KP49M54" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->    
    <script>        

        var page = {};
        var __dcid = __dcid || [];

    
            page = {  
                type: "home",
                language: "ru",
                currency: "kzt"
            };

    
        page.translations = {                
            readMore: "Подробнее",
            readLess: "Читать меньше",
            imageUploaded: "Ваше изображение загружено.",
            imageEvaluate: "Наши художники оценят ваше изображение, чтобы гарантировать, что оно соответствует нашим высоким стандартам создания прекрасного искусства. Мы свяжемся с вами, если качество изображения будет недостаточно высоким или если ракурс не подходит для произведения искусства. Мы всегда отправляем цифровое подтверждение для окончательного утверждения перед печатью, чтобы убедиться, что вы останетесь довольны своей покупкой.",
            changeImage: "Сменить изображение",
            payWithPaypal: "Платить с помощью"
        };
        page.links = {
            'page-privacy-policy': '/privacy-policy',
            'page-cookies': '/cookies',
            'page-terms': '/terms'
        };
        
    </script>

<?php include("includes/header.php"); ?>

<div class="container-main">

<?php include("includes/navbar.php"); ?>


        
	<div class="container mt-4 mt-lg-5">
		<div class="row pb-5 justify-content-lg-center">
			<div class="col col-lg-8 height-min-50vh">
				<h1 class="text-center">Cookies</h1> <p>mappin.kz использует файлы cookie, чтобы сделать покупки удобными. Файлы cookie используются по ряду причин и, среди прочего, позволяют нам обрабатывать содержимое вашей корзины покупок, а также информацию, необходимую при входе в систему. </p> <p> Мы также используем файлы cookie для измерения и оптимизации нашего маркетинга. Если ваш веб-браузер не принимает файлы cookie, вы не сможете пользоваться магазином. В этом случае вы можете легко изменить этот параметр..</p>

			</div>
		</div>
	</div>



<!-- footer -->
<footer class="container-fluid p-0 pt-5 border-gray-top">
	<?php include("includes/footer.php"); ?>
</footer>            
<!-- footer -->            
                    
            
        
    </div>

        <div hidden="" id="snipcart" data-api-key="ODRkZDAxN2UtY2U3My00YWYwLTkzZDEtMDFjNGVlYjE3OTI1NjM2Njg2NDMyNjQ3NjA0NjAz" data-currency="eur">

    <featured-payment-methods>
        <div class="snipcart-featured-payment-methods">
            <h3 class="snipcart__font--secondary snipcart__font--bold  snipcart-featured-payment-methods__title">
                <a :href="securedByUrl" class="snipcart-featured-payment-methods__link" target="_blank" rel="nofollow noopener">
                    <icon name="lock" class="snipcart-featured-payment-methods__title-icon"></icon>
                    {{ $localize('cart.secured_by') }}
                </a>
            </h3>
        </div>
    </featured-payment-methods>

    <cart-summary-fees>

        <div class="snipcart-cart-summary-fees">

            <div class="snipcart-cart-summary-fees">                

                <div class="snipcart-cart-summary-fees__discount-container" v-for="discount in discounts" :key="discount.id">
                    <div class="snipcart-cart-summary-fees__discount-name snipcart__font--black">{{ discount.name }}</div>
                    <div class="snipcart-cart-summary-fees__discount-amount-saved snipcart__font--black">-{{ discount.amountSaved | money(cart.currency)}}</div>
                </div>

                <div class="snipcart-cart-summary-fees__item snipcart__font--slim" v-if="subtotal">
                    <span class="snipcart-cart-summary-fees__title">{{ $localize('cart_summary.subtotal') }}</span>
                    <span class="snipcart-cart-summary-fees__amount">{{ subtotal | money(cart.currency) }}</span>
                </div>

                <div class="snipcart-cart-summary-fees__item snipcart__font--slim" v-if="hasShipping">
                    <span class="snipcart-cart-summary-fees__title">{{ $localize('cart_summary.shipping') }}</span>
                    <span class="snipcart-cart-summary-fees__amount">{{ shipping.cost | money(cart.currency) }}</span>
                </div>

                <div class="snipcart-cart-summary-fees__item snipcart__font--slim snipcart-taxes" v-for="tax in taxes" :key="tax.name">
                    <span class="snipcart-cart-summary-fees__title"> {{ tax.name }}</span>
                    <span class="snipcart-cart-summary-fees__amount">{{ tax.amount | money(cart.currency) }}</span>
                </div>

                <div class="snipcart-cart-summary-fees__item snipcart-cart-summary-fees__total snipcart__font--bold snipcart__font--secondary">
                    <span class="snipcart-cart-summary-fees__title snipcart-cart-summary-fees__title--highlight snipcart__font--large">{{ $localize('cart_summary.total')}}</span>
                    <span class="snipcart-cart-summary-fees__amount snipcart-cart-summary-fees__amount--highlight snipcart__font--large">{{ total| money(cart.currency) }}</span>
                </div>
                
            </div>
        </div>

    </cart-summary-fees>

    <payment-methods-list>

        <loading-overlay :message="$localize('payment.processing_payment')" class="snipcart-payment-methods-list__container" :opaque="true">         

            <div class="snipcart-overlay--disabled" v-if="disabled"></div>

            <div>
                <div class="snipcart-terms">By approving this purchase, you agree to Louvenir's  <a href="terms.html" target='blank' style="text-decoration: underline; display: inline;">Terms &amp; Conditions</a></div>

                <div style="text-align: center;margin-top: 10px;">
                    <h3 class="snipcart__font--secondary snipcart__font--bold" style="display: inline-block;">
                        <a class="snipcart-featured-payment-methods__link" onclick="return false;">
                            <icon name="lock" class="snipcart-featured-payment-methods__title-icon"></icon>
                            {{ $localize('cart.secured_by') }}
                        </a>
                    </h3>
                </div>

                <div class="snipcart-paymentlogos">
                    <img loading="lazy" src="asaaab/user/themes/base/images/logos/cart-payment-logos.png" width="888" height="93">
                </div>
            </div>

            <ul class="snipcart-payment-methods-list snipcart__font--secondary snipcart__font--bold" v-if="paymentMethods.length > 0">
                <payment-methods-list-item :payment-method="paymentMethod" v-for="(paymentMethod, index) in paymentMethods" :key="`${paymentMethod.id}:${index}`" @click="onPaymentMethodSelected"></payment-methods-list-item>
            </ul>  


        </loading-overlay>

    </payment-methods-list>

    <item-line tag="<string>" item="<CartItem>">        
        <li :class="{'snipcart-item-line': true, 'snipcart-item-line--cart-edit': editingCart}">
            <flash-message type="info" icon="box" v-if="stockLimitReached">
                {{ $localize('errors.quantity_revised') }}
            </flash-message>
            <flash-message type="error" icon="box" v-if="outOfStock">
                {{ $localize('errors.quantity_out_of_stock') }}
            </flash-message>
            <div class="snipcart-item-line__container">
                <figure class="snipcart-item-line__media" v-if="showLargeImage">
                    <item-image class="snipcart-item-line__image"></item-image>
                </figure>
                <div class="snipcart-item-line__product">
                    <div class="snipcart-item-line__header">
                        <figure class="snipcart-item-line__media snipcart-item-line__media--small" v-if="showSmallImage">
                            <item-image class="snipcart-item-line__image"></item-image>
                        </figure>

                        <h2 class="snipcart-item-line__title snipcart__font--xlarge snipcart__font--secondary snipcart__font--black">
                            {{ item.name }}
                        </h2>
                        <div class="snipcart-item-line__actions">
                            <remove-item-action class="snipcart__button--icon">
                                <icon name="trash" class="snipcart__icon--red" alt="item.remove_item"></icon>
                            </remove-item-action>
                        </div>
                    </div>

                    <div class="snipcart-item-line__content">
                        <div class="snipcart-item-line__body">
                            <div class="snipcart-item-line__info">
                                <item-description></item-description>
                            </div>
                            <div class="snipcart-item-line__variants">
                                <item-custom-fields v-if="!adding"></item-custom-fields>
                                <item-quantity class="snipcart-item-line__quantity" v-if="!adding" :disabled="outOfStock"></item-quantity>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        
    </item-line>

    <billing>
        <div class="snipcart__box">
            <div class="snipcart__box--header">
                <div class="snipcart__box--title">
                    <div class="snipcart__box--badge snipcart__box--badge snipcart__box--badge-highlight snipcart__font--bold snipcart__font--secondary">{{ number }}</div>
                    <h1 class="snipcart__font--subtitle">
                        {{ $localize('billing.title') }}
                    </h1>
                </div>
            </div>

            <snipcart-error-message></snipcart-error-message>
            
            <fieldset class="snipcart-form__set">
                <div class="snipcart-form__field">
                    <snipcart-label class="snipcart__font--tiny" for="name">
                        {{ $localize('address_form.name') }}
                    </snipcart-label>
                    
                    <snipcart-input name="name"></snipcart-input>
                    <snipcart-error-message name="name"></snipcart-error-message>
                </div>

                <div class="snipcart-form__field">
                    <snipcart-label class="snipcart__font--tiny" for="email">
                        {{ $localize('address_form.email' )}}
                    </snipcart-label>

                    <snipcart-input name="email" v-if="!emailIsReadonly"></snipcart-input>
                    <span class="snipcart__font--secondary snipcart__font--bold" v-else="">{{ state.email }}</span>
                    <snipcart-error-message name="email"></snipcart-error-message>
                </div>
            </fieldset>

            <div class="snipcart-form__field">
                <snipcart-label class="snipcart__font--tiny" for="telephone">
                    Telephone
                </snipcart-label>
                
                <snipcart-input name="telephone"></snipcart-input>
                <snipcart-error-message name="telephone"></snipcart-error-message>
            </div>

            <address-fields></address-fields>

            <hr class="snipcart-form__separator" v-if="shippingEnabled">

            <fieldset class="snipcart-form__set" v-if="shippingEnabled">
                <div class="snipcart-form__field">
                    <div class="snipcart-form__field-checkbox">
                        <snipcart-checkbox name="useDifferentShippingAddress" @input="useDifferentShippingAddressHandler"></snipcart-checkbox>

                        <snipcart-label class="snipcart__font--tiny snipcart-form__label--checkbox" for="useDifferentShippingAddress">
                            {{ $localize('billing.use_different_shipping_address') }}
                        </snipcart-label>
                    </div>
                </div>
            </fieldset>

            <fieldset class="snipcart-form__set">
                <div class="snipcart-form__field">
                    <div class="snipcart-form__field-checkbox">
                        <snipcart-checkbox name="subscribeToNewsletter"></snipcart-checkbox>
                        <snipcart-label class="snipcart__font--tiny snipcart-form__label--checkbox" for="subscribeToNewsletter">
                            Sign me up for news, offers and exclusive subscriber discounts.
                        </snipcart-label>
                    </div>
                </div>
            </fieldset>

            <div class="snipcart-form__footer">
                <submit-button type="submit" class="snipcart-cart-button--highlight snipcart__font--large">
                    {{ shippingEnabled ? $localize('billing.continue_to_shipping') : $localize('payment.continue_to_payment') }}
                </submit-button>
            </div>
        </div>
    </billing>

    <shipping-address section="top">

        <div>

            <div class="snipcart-form__field">
                <snipcart-label class="snipcart__font--tiny" for="name">
                    {{ $localize('address_form.name') }}
                </snipcart-label>
                
                <snipcart-input name="name"></snipcart-input>
                <snipcart-error-message name="name"></snipcart-error-message>
            </div>

            <div class="snipcart-form__field">
                <snipcart-label class="snipcart__font--tiny" for="telephone">
                    Telephone
                </snipcart-label>
                
                <snipcart-input name="telephone"></snipcart-input>
                <snipcart-error-message name="telephone"></snipcart-error-message>
            </div>

        </div>

    </shipping-address>

    <cart>
        <section class="snipcart-cart__content">

            <item-list item-template="item-line" class="snipcart-item-list--no-shadow"></item-list>

            <div class="snipcart-cart__footer">
                <div class="snipcart-cart__footer-col cart__footer-discount-box snipcart-cart__actions">
                    <discount-box class="snipcart-cart__discount-box"></discount-box>
                </div>

                <div class="snipcart-cart__footer-col">
                    <cart-summary-fees class="snipcart-cart-summary-fees--reverse">
                        {{ $localize('cart.shipping_taxes_calculated_at_checkout')}}
                    </cart-summary-fees>

                    <footer v-if="!editingCart">
                        <cart-button class="snipcart-cart__checkout-button snipcart-cart-button--highlight snipcart__font--large" icon-right="continue-arrow" :disabled="checkoutDisabled" @click="checkout">
                            {{ $localize('actions.checkout') }}
                        </cart-button>
                    </footer>
                    
                    <div class="snipcart-cart__featured-payment-methods-container">
                        <featured-payment-methods v-if="!editingCart"></featured-payment-methods>
                    </div>
                </div>
            </div>

              

            <div class="checkoutOffer hidden">
                <div class="checkoutOffer-box">
                    <div class="checkoutOffer-titleBox">
                        <div class="checkoutOffer-title">Buy more, save more!</div>
                        <div class="checkoutOffer-subTitle">Get <span>20% extra discount</span> when buying two or more products.</div>
                    </div>
                </div>
               
                <div class="checkoutOffer-carousel">
                    <div class="container text-center">
	
	</div>

<div class="container container-carousel carousel-checkout links-no-style position-relative hidden">

	<div class="carousel full-width overflow-hidden">
		<div class="carousel-inner d-flex">
			
				<a href="personalised-map-poster/spk6A6.html" class="carousel-image-link d-inlineblock text-center d-flex flex-column" js-action-click="carousel-item-clicked">
					<span class="d-flex align-items-center justify-content-center flex-1"><img src="asaaab/user/themes/base/images/placeholder/ph-5x7.gif" loading="lazy" data-src="https://d1w0afvwsjp99f.cloudfront.net/en/images/500x700/poster-street-map/pk6A6/poster-street-map.jpg" draggable="false" class="mb-3 border-gray" width="500" height="700"></span>
					<div class="carousel-info">
													<span class="text-small d-block txt-dark-gray strong mb-1">Map poster</span>
												<span class="text-smallest txt-color-gray price-from d-block font-italic">From €39</span>
					</div>
				</a>


			
				<a href="personalised-star-map-poster/spU5F5.html" class="carousel-image-link d-inlineblock text-center d-flex flex-column" js-action-click="carousel-item-clicked">
					<span class="d-flex align-items-center justify-content-center flex-1"><img src="asaaab/user/themes/base/images/placeholder/ph-5x7.gif" loading="lazy" data-src="https://d1w0afvwsjp99f.cloudfront.net/en/images/500x700/poster-star-map/pU5F5/poster-star-map.jpg" draggable="false" class="mb-3 border-gray" width="500" height="700"></span>
					<div class="carousel-info">
													<span class="text-small d-block txt-dark-gray strong mb-1">Star map poster</span>
												<span class="text-smallest txt-color-gray price-from d-block font-italic">From €39</span>
					</div>
				</a>


			
				<a href="personalised-wedding-poster/sjA2m4.html" class="carousel-image-link d-inlineblock text-center d-flex flex-column" js-action-click="carousel-item-clicked">
					<span class="d-flex align-items-center justify-content-center flex-1"><img src="asaaab/user/themes/base/images/placeholder/ph-5x7.gif" loading="lazy" data-src="https://d1w0afvwsjp99f.cloudfront.net/en/images/500x700/poster-wedding/jA2m4/poster-wedding.jpg" draggable="false" class="mb-3 border-gray" width="500" height="700"></span>
					<div class="carousel-info">
													<span class="text-small d-block txt-dark-gray strong mb-1">Wedding poster</span>
												<span class="text-smallest txt-color-gray price-from d-block font-italic">From €39</span>
					</div>
				</a>


			
				<a href="custom-pet-portrait-baron.html" class="carousel-image-link d-inlineblock text-center d-flex flex-column" js-action-click="carousel-item-clicked">
					<span class="d-flex align-items-center justify-content-center flex-1"><img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/pages/products/portraits/pet-portraits/pet-portrait-baron/pet-portrait-baron.jpg" draggable="false" class="mb-3 border-gray" width="750" height="750"></span>
					<div class="carousel-info">
													<span class="text-small d-block txt-dark-gray strong mb-1">Baron portrait</span>
												<span class="text-smallest txt-color-gray price-from d-block font-italic">From €39</span>
					</div>
				</a>


			
				<a href="custom-human-portrait-earl.html" class="carousel-image-link d-inlineblock text-center d-flex flex-column" js-action-click="carousel-item-clicked">
					<span class="d-flex align-items-center justify-content-center flex-1"><img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/pages/products/portraits/human-portraits/human-portrait-earl/human-portrait-earl.jpg" draggable="false" class="mb-3 border-gray" width="750" height="750"></span>
					<div class="carousel-info">
													<span class="text-small d-block txt-dark-gray strong mb-1">Earl portrait</span>
												<span class="text-smallest txt-color-gray price-from d-block font-italic">From €39</span>
					</div>
				</a>


			
				<a href="personalised-birth-poster/ssh5t1.html" class="carousel-image-link d-inlineblock text-center d-flex flex-column" js-action-click="carousel-item-clicked">
					<span class="d-flex align-items-center justify-content-center flex-1"><img src="asaaab/user/themes/base/images/placeholder/ph-5x7.gif" loading="lazy" data-src="https://d1w0afvwsjp99f.cloudfront.net/en/images/500x700/poster-birth/sh5t1/poster-birth.jpg" draggable="false" class="mb-3 border-gray" width="500" height="700"></span>
					<div class="carousel-info">
													<span class="text-small d-block txt-dark-gray strong mb-1">Birth poster</span>
												<span class="text-smallest txt-color-gray price-from d-block font-italic">From €49</span>
					</div>
				</a>


			
				<a href="pet-digital-sketch.html" class="carousel-image-link d-inlineblock text-center d-flex flex-column" js-action-click="carousel-item-clicked">
					<span class="d-flex align-items-center justify-content-center flex-1"><img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/pages/products/portraits/pet-portraits/pet-pencil-sketch/pet-pencil-sketch.jpg" draggable="false" class="mb-3 border-gray" width="750" height="750"></span>
					<div class="carousel-info">
													<span class="text-small d-block txt-dark-gray strong mb-1">Pet sketch</span>
												<span class="text-smallest txt-color-gray price-from d-block font-italic">From €39</span>
					</div>
				</a>


			
				<a href="pet-digital-aquarelle.html" class="carousel-image-link d-inlineblock text-center d-flex flex-column" js-action-click="carousel-item-clicked">
					<span class="d-flex align-items-center justify-content-center flex-1"><img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/pages/products/portraits/pet-portraits/pet-aquarelle-sketch/pet-aquarelle-sketch.jpg" draggable="false" class="mb-3 border-gray" width="750" height="750"></span>
					<div class="carousel-info">
													<span class="text-small d-block txt-dark-gray strong mb-1">Aquarelle sketch</span>
												<span class="text-smallest txt-color-gray price-from d-block font-italic">From €39</span>
					</div>
				</a>


			
				<a href="ultrasound-poster/shapetrapezoid.html" class="carousel-image-link d-inlineblock text-center d-flex flex-column" js-action-click="carousel-item-clicked">
					<span class="d-flex align-items-center justify-content-center flex-1"><img src="asaaab/user/themes/base/images/placeholder/ph-4x5.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/pages/products/portraits/portrait-ultrasound/images/environment/ultrasound-20x25-white-trapezoid.jpg" draggable="false" class="mb-3 border-gray" width="500" height="625"></span>
					<div class="carousel-info">
													<span class="text-small d-block txt-dark-gray strong mb-1">Ultrasound poster</span>
												<span class="text-smallest txt-color-gray price-from d-block font-italic">From €39</span>
					</div>
				</a>


					</div>

		<div class="carousel-dots d-flex justify-content-center text-center p-0 m-0 mt-2 mb-2">
			<div class="d-inline-block clickable" js-action-click="carousel-previous"><i class="material-icon" style="font-size: 22px;">chevron_left</i></div>
			<div class="d-inline-block clickable" js-action-click="carousel-next"><i class="material-icon" style="font-size: 22px;">chevron_right</i></div>
		</div>
	</div>

</div>


<style>
.carousel-image-link {
	margin: 20px !important;
}
</style>                </div>
            </div>

        </section>
    </cart> 

</div>    
    <div class="hidden">     
                     
    </div>

    <div class="widget-cookie animated fadeIn delay-05s" id="cookie-message">
        To improve the user experience at Louvenir we use cookies. By continuing on the page, you accept the use of <a href="#" class="cookies-link" js-action-click="link-open" data-id="page-cookies">cookies</a>.
        <a href="#" class="cookies-close" js-action-click="cookies-accept">OK</a>          
    </div>

</body>
</html>
