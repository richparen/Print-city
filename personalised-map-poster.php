<?php
session_start();
include('includes/config.php');



if(isset($_POST['submit']))
{
$labelTitle=$_POST['labelTitle'];
$labelSubTitle=$_POST['labelSubTitle'];
$zoom=$_POST['zoom'];
$longitude=md5($_POST['longitude']);
$latitude=$_POST['latitude'];
$labelLocation=$_POST['labelLocation'];
$style=$_POST['style'];
$size=md5($_POST['size']);
$labelUpdateCoordinate=$_POST['labelUpdateCoordinate'];
$shape=$_POST['shape'];
$layout=$_POST['layout'];

$query=mysqli_query($con,"INSERT INTO poster(labelTitle, labelSubTitle, zoom, longitude,	latitude, labelLocation, style, size, labelUpdateCoordinate, shape, layout) values('$labelTitle','$labelSubTitle','$zoom','$longitude','$latitude','$labelLocation','$style','$size','$labelUpdateCoordinate','$shape','$layout')");
if($query)
{
	echo "<script>alert('Вы успешно зарегистрировались');</script>";
}
else{
echo "<script>alert('Не зарегистрируйтесь, что-то пошло не так');</script>";
}
}


mysqli_close($con)
?>


<!DOCTYPE html>
<html lang="ru" >
<head>
    <meta charset="utf-8">
    <title>Редактор плакатов карты </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="asaaab/user/themes/base/images/favicon.png">
    <link rel="canonical" href="personalised-map-poster.php" id="canonical">
	<meta name="google-site-verification" content="LBVZwwVA-IThrACK_isQTfjceIOsSGotEtaWEtbu_wA">
    
    <script src="js/platform.js" async="" defer=""></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);w.gtag=function(){dataLayer.push(arguments);}
})(window,document,'script','dataLayer','GTM-KP49M54');</script>
<!-- End Google Tag Manager -->    

        <meta name="description" content="Design your own custom city map poster.">
        <meta name="twitter:card" property="twitter:card" content="summary_large_image">
        <meta property="og:site_name" content="Louvenir">
        <meta property="og:title" content="Map poster editor">
        <meta property="og:type" content="product">
        <meta property="og:url" content="https://www.mappin.kz/personalised-map-poster">
        <meta property="og:description" content="Design your own custom city map poster.">
        <meta property="og:image" content="user://pages/products/posters/poster-street-map/poster-street-map.jpg">        
        <meta property="og:image:width" content="500">
        <meta property="og:image:height" content="700">
        
    <script type="javascript">document.documentElement.style.setProperty('--vh', `${window.innerHeight/100}px`);</script>

    <link href="asaaab/assets/5bee41ecfbc9d9cc65aec49cf0e2778d.css" type="text/css" rel="stylesheet">
    <script src="asaaab/assets/68f800f04a686f4d4748d1adfb376a5c.js"></script>
</head>

<body class="page-loading page-product page-poster page-poster-street-map poster-animate-resize  size-portrait size-50x70cm map-1 layout-2 editor-layoutCustom-2 noShape checkbox_checked">

            <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="ns.html?id=GTM-KP49M54" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->    
    <script>        



        var page = {};
        var __dcid = __dcid || [];

    
            page = {  
                type: "poster",              
                language: "ru",              
                currency: "kzt",              
                defaultCountry: "KZ",              
                product: {
                    id: 'poster-street-map',
                    variation: {"size":"50x70cm","zoom":"11","bearing":"0","longitude":"76.920634","latitude":"43.238200","style":"map1","layout":"layout2","shape":"noShape","labelTitle":"ALMATY","labelSubTitle":"KAZAKHSTAN","labelLocation":"43.238200\u00b0N \/ 76.920634\u00b0E","labelUpdateCoordinate":"checked"},
                    labels: {"style":"Light Grey","layout":"Layout 2","shape":"No shape","size":"50x70cm \/ 20x28inch"},
                    classes: {"style":{"map1":"map-1","map2":"map-2","map3":"map-3","map4":"map-4","map5":"map-5","map13":"map-13","map7":"map-7","map8":"map-8","map9":"map-9","map10":"map-10","map11":"map-11","map12":"map-12","map6":"map-6"},"layout":{"layout1":"layout-2 editor-layoutCustom-1","layout2":"layout-2 editor-layoutCustom-2","layout3":"layout-2 editor-layoutCustom-3","layout5":"layout-2 editor-layoutCustom-5"},"shape":{"noShape":"noShape","map1":"editor-mask-space shape-map-1","map2":"editor-mask-space shape-map-2","map3":"editor-mask-space shape-map-3","map4":"editor-mask-space shape-map-4","map5":"editor-mask-space shape-map-5","map6":"editor-mask-space shape-map-6","map7":"editor-mask-space shape-map-7"},"labelUpdateCoordinate":{"checked":"checkbox_checked","unchecked":"checkbox_unchecked"},"size":{"30x40cm":"size-portrait size-30x40cm","50x70cm":"size-portrait size-50x70cm","70x100cm":"size-portrait size-70x100cm","40x30cm":"size-landscape size-40x30cm","70x50cm":"size-landscape size-70x50cm","100x70cm":"size-landscape size-100x70cm"}},
                    options: {"style":{"map1":{"mapboxStyle":"magnuslouvenir\/ck6kslkri11ea1jmkeevglu33"},"map2":{"mapboxStyle":"magnuslouvenir\/ck6l29tgn1aie1ipqk8f4fqq6"},"map3":{"mapboxStyle":"magnuslouvenir\/ck6l80s221fuk1jmkjshrxxu0"},"map4":{"mapboxStyle":"magnuslouvenir\/ck6l9a78500ec1iqpt21qcdzb"},"map5":{"mapboxStyle":"magnuslouvenir\/ck6lcdeej036g1imzzxsd883y"},"map13":{"mapboxStyle":"magnuslouvenir\/ckfvh832n50x519nroxzo693j"},"map7":{"mapboxStyle":"magnuslouvenir\/ck6lw51v00ln31iqutgj41z0w"},"map8":{"mapboxStyle":"magnuslouvenir\/ck6mee4xv0yt31imdild7v8vm"},"map9":{"mapboxStyle":"magnuslouvenir\/ck6t89ocl14ha1it8ks7r90n4"},"map10":{"mapboxStyle":"magnuslouvenir\/ck6t94pg40p7r1inkwigs3962"},"map11":{"mapboxStyle":"magnuslouvenir\/ck6t8j6mr7g9m1ipfm7vw3u5p"},"map12":{"mapboxStyle":"magnuslouvenir\/ck6t9mbcb2ai11inve8oha8bn"},"map6":{"mapboxStyle":"magnuslouvenir\/ck6ltub4b0ji21iquq2eyrka6"}}},
                }
            };

            var UPLOADCARE_MANUAL_START = true;
            var UPLOADCARE_LOCALE = 'ru';
            var UPLOADCARE_TABS = 'file camera facebook instagram';
            
            console.log(page);
    
    
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

                

        
	<div class="container-fluid vh100">
		<div class="row vh100 p-0">
			<div class="col-lg vh100 pl-0 pr-0 position-relative">
				<div id="header-row" class="container-fluid sticky-top border-dark-gray-bottom bg-white text-small shadow-sm pr-3 pl-3 header-poster">
    				<div class="d-flex align-items-center justify-content-between">

        <div class="pt-25 pb-25">
            <a href="#" class="txt-dark-gray text-smallest" js-action-click="menu-left-open">
                <img loading="eager" src="asaaab/user/themes/base/images/icon/icon-menu.svg" class="icon" width="21" height="16">
            </a>
        </div>

        <div class="pt-25 pb-25">
            <a href="index.php">
                <img loading="eager" src="asaaab/user/themes/base/images/logos/louvenir-horizontal-web.svg" class="nav-poster-logo">
            </a>
        </div>

        <div>


            <span class="snipcart-summary">
                <a href="#" class="snipcart-checkout float-right">
                    <img loading="eager" src="asaaab/user/themes/base/images/icon/icon-shopping-bag.svg" class="icon mr-1" width="18" height="21">
                    <span class="snipcart-total-items snipcart-items-count">0</span>                            
                </a>
            </span>

        </div>
    </div>
</div>





				<div class="product-preview">
					<div class="product-preview-inner">
						
                
            
	
	<div class="preview-content position-absolute-cover">
		<div class="preview-content-inner position-absolute-cover editor-space">

			<div class="editor-border-top"></div>
			<div class="editor-border-left"></div>
			<div class="editor-border-right"></div>
			<div class="editor-border-bottom"></div>

			<div class="editor-mask-top-space"></div>
			<div class="editor-mask-bottom-space"></div>
			<div class="editor-mask-left-space"></div>
			<div class="editor-mask-right-space"></div>



			<div id="map"></div>
            <div class="zoom-controls-container" id="zoom-controls-container">
                <div class="zoom-in" js-action-click="map-zoomin">
                    <i class="material-icon mr-0">+</i>
                </div>
                <div class="zoom-out" js-action-click="map-zoomout">
                    <i class="material-icon mr-0">-</i>
                </div>
            </div>

            <div class="editor-mask position-absolute-cover"></div>

			<div class="editor-labels text-center position-absolute" id="labels-container">
				<span class="headline-container">
					<span class="headline headline-scale-five-1 headline1" pattern="%labelTitle%">ALMATY</span>
					<span class="headline headline2" pattern="%labelSubTitle%">KAZAKHSTAN</span>
					<span class="headline headline3" pattern="%labelLocation%">43.301270°N / 76.911133°E</span>
				</span>

			</div>

		</div>
	</div>
	
					</div>
				</div>


    <style>

    .map-attr {
    	position: absolute;
    	top: 170px;
    	font-size: 13px;
		transform: translateX(-48%) rotate(-90deg) scale(0.8);
		color: #999;
		padding-top: 5px;
    }

	.map-attr .text {
		display: inline-block;
	}


    .device-xs-sm-md .map-attr .text {
		font-size: 9px;
    }

    .device-xs-sm-md .map-attr .text-logo {
    	display: none;
    }

    .device-lg-xl .map-attr {
    	font-size: 12px;
		margin-top: 20px;
    }

	.device-lg-xl .text-logo {
    	display: inline-block;
		margin-right: 10px;
    }
    </style>

			</div>

			<div class="col-lg p-0 editor-side bg-white" id="sidebar-row">
				<div class="editor-show-hide line-height-1 pb-1">
					<a href="#" class="action-controls-show" js-action-click="editmode-show"><i class="material-icon">expand_more</i>Показать</a>
					<a href="#" class="action-controls-hide" js-action-click="editmode-hide"><i class="material-icon">expand_less</i>Скрывать</a>
				</div>


				<div class="editor-info">
		           	<h1 class="text-uppercase text-small txt-white m-0">Плакат с картой</h1>
		        </div>


<div class="controls">
	<button class="collapsible accordion-expander" js-action-click="sidebar-tab-toggle">
	    <span class="d-none d-md-inline">Введите место</span>
	    <span class="d-md-none">Введите место</span>
	    <i class="material-icon collapsible-icon show-if-contracted">chevron_right</i>
	    <i class="material-icon collapsible-icon show-if-expanded">expand_more</i>
	</button>

		<div class="section pl-3 pr-3 pb-2 pt-0 hidden accordion-content">	
		<div class="tabs-nav"></div>
			<div class="content mt-2 pt-2">		
				<label class="text-smallest strong mb-0">Введите город или место</label>
				<div id="geocoder" class="pb-3"></div>
			</div>
		</div>	


	<button class="collapsible accordion-expander" js-action-click="sidebar-tab-toggle">
	    <span class="d-none d-md-inline">Выберите дизайн</span>
	    <span class="d-md-none">Дизайн</span>
	    <i class="material-icon collapsible-icon show-if-contracted">chevron_right</i>
	    <i class="material-icon collapsible-icon show-if-expanded">expand_more</i>
	</button>

	

			<div class="section pl-3 pr-3 pb-2 pt-0 hidden accordion-content">	
				<div class="tabs-nav">
					<a class="clickable strong text-smallest" js-action-click="sidebar-tab-sub-open" data-id="tab-colorsTab">Цвета</a>
					<a class="clickable strong text-smallest" js-action-click="sidebar-tab-sub-open" data-id="tab-layoutsTab">Макеты</a>
					<a class="clickable strong text-smallest" js-action-click="sidebar-tab-sub-open" data-id="tab-shapeTab">Форма</a>
				</div>

		<div class="content mt-2 pt-2">			
		<div class="tab" id="tab-colorsTab">
			<div class="list-with-images gray-scroll row">	
			<div class="col-3 pl-2 pr-2 mb-4 active" data-value="map1" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map1.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">Светло-серый</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map2" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map2.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">Темно-синий</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map3" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map3.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">Светло-синий</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map4" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map4.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">Розовый</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map5" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map5.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">Винтаж</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map13" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map13.png" width="79" height="79">
	            	</div>
	            	<div class="title text-10 text-center strong">коричневый</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map7" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map7.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">Ретро</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map8" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map8.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">Голубая печать</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map9" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map9.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">Зеленый</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map10" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map10.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">красный</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map11" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map11.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">Чернить</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map12" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map12.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">Бирюзовый</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-4 " data-value="map6" js-action-click="product-configuration-change" data-key="style">
				<div class="position-relative">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/style/poster-street-map/map6.png" width="75" height="75">
	            	</div>
	            	<div class="title text-10 text-center strong">Розовый синий</div>
	        	</div>
	        </div>	
			</div>
		</div>
			


		<div class="tab" id="tab-layoutsTab">
			<div class="list-with-images list-with-layouts gray-scroll row">	
				
			<div class="col-3 pl-2 pr-2 mb-2 " data-value="layout1" js-action-click="product-configuration-change" data-key="layout">
				<div class="position-relative d-inlineblock">
	            	<div class="image d-flex justify-content-center clickable">
	            		<img src="asaaab/user/themes/base/images/placeholder/ph-51x71.gif.html" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/layout/streetmap1.png" width="51" height="71">
	            	</div>
	            	<div class="title text-10 text-center strong">Макет 1</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-2 active" data-value="layout2" js-action-click="product-configuration-change" data-key="layout">
				<div class="position-relative d-inlineblock">
	            	<div class="image d-flex justify-content-center clickable">
	            	<img src="asaaab/user/themes/base/images/placeholder/ph-51x71.gif.html" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/layout/streetmap2.png" width="51" height="71">
	            			            	</div>
	            	<div class="title text-10 text-center strong">Макет 2</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-2 " data-value="layout3" js-action-click="product-configuration-change" data-key="layout">
				<div class="position-relative d-inlineblock">
	            	<div class="image d-flex justify-content-center clickable">
	            	<img src="asaaab/user/themes/base/images/placeholder/ph-51x71.gif.html" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/layout/streetmap3.png" width="51" height="71">
	            			            	</div>
	            	<div class="title text-10 text-center strong">Макет 3</div>
	        	</div>
	        </div>
					
			<div class="col-3 pl-2 pr-2 mb-2 " data-value="layout5" js-action-click="product-configuration-change" data-key="layout">
				<div class="position-relative d-inlineblock">
	            	<div class="image d-flex justify-content-center clickable">
	            	<img src="asaaab/user/themes/base/images/placeholder/ph-51x71.gif.html" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/layout/streetmap4.png" width="51" height="71">
	            			            	</div>
	            	<div class="title text-10 text-center strong">Нет текста</div>
	        	</div>
	        </div>
		
		
</div>
		
	
</div>
			
		<div class="tab" id="tab-shapeTab">
			<div class="list-with-images gray-scroll row">	
				<div class="col-3 pl-2 pr-2 mb-4 active" data-value="noShape" js-action-click="product-configuration-change" data-key="shape">
					<div class="position-relative">
		            	<div class="image d-flex justify-content-center clickable">
		            		<img src="asaaab/user/themes/base/images/placeholder/ph-7x10.gif.html" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/shape/poster-street-map/no-shape.png" width="49" height="70">
		            	</div>
		            	<div class="title text-10 text-center strong">Нет формы</div>
		        	</div>
		        </div>
						
				<div class="col-3 pl-2 pr-2 mb-4 " data-value="map1" js-action-click="product-configuration-change" data-key="shape">
					<div class="position-relative">
		            	<div class="image d-flex justify-content-center clickable">
		            		<img src="asaaab/user/themes/base/images/placeholder/ph-79x71.gif.html" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/shape/poster-street-map/map1.png" width="79" height="71">
		            	</div>
		            	<div class="title text-10 text-center strong">Сердце</div>
		        	</div>
		        </div>	
			</div>
		</div>



</div>

	</div>	

	<button class="collapsible accordion-expander" js-action-click="sidebar-tab-toggle">
	    <span class="d-none d-md-inline">Изменить текст</span>
	    <span class="d-md-none">Изменить текст</span>
	    <i class="material-icon collapsible-icon show-if-contracted">chevron_right</i>
	    <i class="material-icon collapsible-icon show-if-expanded">expand_more</i>
	</button>

	

	<div class="section pl-3 pr-3 pb-2 pt-0 hidden accordion-content">	
		<div class="tabs-nav"></div>
		<div class="content mt-2 pt-2">
		<div class="controls-row mb-1 align-items-baseline d-flex" id="row-labelTitle">
			<label style="max-width: 95px;" class="text-11 strong flex-1 m-0">Заголовок</label>
			<div class="flex-1">
			<input type="text" value="ALMATY" maxlength="45" autocomplete="off" js-action-oninput="product-configuration-change" data-key="labelTitle" data-label-css-class="headline1">	</div>
		</div>
		<div class="controls-row mb-1 align-items-baseline d-flex" id="row-labelSubTitle">
			<label style="max-width: 95px;" class="text-11 strong flex-1 m-0">Подзаголовок</label>
			<div class="flex-1">
			<input type="text" value="KAZAKHSTAN" maxlength="120" autocomplete="off" js-action-oninput="product-configuration-change" data-key="labelSubTitle" data-label-css-class="">	</div>
		</div>
		<div class="controls-row mb-1 align-items-baseline d-flex" id="row-labelLocation">
			<label style="max-width: 95px;" class="text-11 strong flex-1 m-0">Координаты</label>
			<div class="flex-1">
			<input type="text" value="43.301270°N / 76.911133°E" autocomplete="off" js-action-oninput="product-configuration-change" data-key="labelLocation" data-label-css-class="">	</div>
		</div>
		<div class="d-flex flex-nowrap">
			<input type="checkbox" data-key="labelUpdateCoordinate" js-action-oninput="product-configuration-change" id="checkbox-labelUpdateCoordinate" autocomplete="off" checked="">
			<label style="line-height: 1.2rem;" class="ml-2 text-11" for="checkbox-labelUpdateCoordinate"><strong>Обновить координаты</strong>при изменении положения карты.</label>
		</div>
		</div>
	</div>	


	<button class="collapsible accordion-expander" js-action-click="sidebar-tab-toggle">
	    <span class="d-none d-md-inline">Выбрать размер</span>
	    <span class="d-md-none">Размер</span>
	    <i class="material-icon collapsible-icon show-if-contracted">chevron_right</i>
	    <i class="material-icon collapsible-icon show-if-expanded">expand_more</i>
	</button>

	

	<div class="section pl-3 pr-3 pb-2 pt-0 hidden accordion-content">	
		<div class="tabs-nav"></div>
			<div class="content mt-2 pt-2">
				<div class="dropdown list-with-sizes" js-action-click="dropdown-open">
					<div class="option-active">
						<a href="#" class="text-smallest"></a>
					</div>
				<div class="options">
					<a href="#" class="text-smallest active" js-action-click="dropdown-option-select" data-price-regular="15000" data-price-current="15000 Тг" data-key="size" data-value="50x70cm">
						<img src="asaaab/user/themes/base/images/placeholder/ph-5x7.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/size/size-50x70cm.png" width="100" height="140">
						50x70 см / 20x28 дюйм  / 15000 Тг
					</a>
								<a href="#" class="text-smallest " js-action-click="dropdown-option-select" data-price-regular="20000" data-price-current="20000 Тг" data-key="size" data-value="70x100cm">
						<img src="asaaab/user/themes/base/images/placeholder/ph-7x10.gif.html" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/size/size-70x100cm.png" width="140" height="200">
						70x100 см / 28x40 дюйм / 20000 Тг
					</a>
								<a href="#" class="text-smallest " js-action-click="dropdown-option-select" data-price-regular="150000" data-price-current="15000 Тг" data-key="size" data-value="40x30cm">
						<img src="asaaab/user/themes/base/images/placeholder/ph-4x3.gif.html" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/size/size-40x30cm.png" width="80" height="60">
						40x30 см / 16x12 дюйм / 15000 Тг
					</a>
				</div>
			</div>
		</div>
	</div>
</div>


				<div class="editor-buy">
					<div class="editor-flexGrow"></div>

					<div class="editor-buy-wrapper">
			

						<div class="snipcart-add-item" id="snipcart-add-item" data-item-id="poster-street-map" data-item-stackable="never" data-item-shippable="true" data-item-has-taxes-included="true" data-item-taxes="VAT (MAP)|IVA (MAPPA)|IVA (MAPA)|IVA (MAPAS)|MWST. (Karte)|T.V.A. (Carte)|MOMS (Karta)|MOMS (KORT)|BTW (KAART)|ALV. (KARTTA)|HANDLING FEE MAP (INCLUDED IN PRICE)|HÅNDTERINGSGEBYR KART (INKLUDERT I PRISEN)" data-item-name="Map poster - 50x70cm" data-item-price='"kzt":495' data-item-weight="0" data-item-url="https://www.mappin.kz/personalised-map-poster" data-item-image="asaaab/user/pages/products/posters/poster-street-map/poster-street-map.jpg" data-item-description="50x70cm Fine art paper - Text: ALMATY, KAZAKHSTAN" data-item-metadata='{"product":"poster-street-map","size":"50x70cm","material":"fap","language":"ru","key":null,"url":"https:\/\/www.mappin.kz\/personalised-map-poster"}'></div>
						<div class="editor-buy-btn button-primary" js-action-click="preview-poster">

							<div class="editor-buy-btn-price">
							    <div class="total" id="total-cost-price">15 000 Тенге</div>
							</div> 

							<div class="editor-buy-btn-text" name="submit">
						    	<i class="material-icon">shopping_cart</i> Добавить в корзину
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script>
    // Cycle offer text in editor
    var cycleText = $('div[id^="js-offerText-cycle-"]').hide(),
        i = 0;
        var cycleCount = 0;

    (function cycleOfferText() { 

    	if(cycleCount < 4) {

	        cycleText.eq(i).fadeIn(400)
	                .delay(7000)
	                .fadeOut(400, cycleOfferText);

	        i = ++i % cycleText.length;

	        cycleCount++;
    	} else {
    		cycleText.eq(i).fadeIn(400);
    	}

    })();
</script>


<link href="mapbox-gl-js/v1.11.1/mapbox-gl.css" type="text/css" rel="stylesheet">
<link href="mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css" rel="stylesheet">

<script src="asaaab/assets/4d24707b663e44900829dcbd82b3e33b.js"></script>
<script src="mapbox-gl-js/v1.11.1/mapbox-gl.js"></script>
<script src="mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>

        
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

              



        </section>
    </cart> 

</div>    
    <div class="hidden">     
        	<div id="modal-save-or-share">

    <header class="modal__header">
        <h4 class="modal__title text-norm" id="modal-saveorshare-title">
            Save your masterpiece for later
        </h4>

        <i class="material-icon modal__close mr-0" js-action-click="modal-close">close</i>
    </header>

    <div class="modal__content" id="modal-saveorshare-content">
        <h4 class="text-small">Direct link</h4>
        <div class="d-md-flex">

            <div class="flex-md-fill">
                <input type="text" readonly="readonly" class="input-text js-section-share-link-input mb-3" js-action-onfocus="modal-link-copy">
            </div>

            <div class="pl-md-2 text-center text-md-left">
                <input type="button" class="button button-large button-primary" js-action-click="modal-link-copy" value="Copy">
            </div>

        </div>
    </div>

</div>        
	<div id="modal-guide">

    <div class="modal__content pb-0">

        <!--Tabs menu-->
        <ul class="js_tabs-content-nav tabs-content-nav">
            <li class="active" data-id="tab-material" js-action-click="modal-tab-open"><a href="#" rel="nofollow">Material</a></li>
            <li data-id="tab-faq" js-action-click="modal-tab-open"><a href="#" rel="nofollow" class="js-modal-tab-link">FAQ</a></li>
            <li data-id="tab-howitworks" js-action-click="modal-tab-open"><a href="#" rel="nofollow" class="js-modal-tab-link">How it works</a></li>
            <li class="tabs-content-nav-close"><i class="material-icon modal__close" style="font-size: 24px;" js-action-click="modal-close">close</i></li>
        </ul>
        <!--Tabs menu ends-->

        <!--Tabs content-->
        <div class="js_tabs-content-text tabs-content-text">
            <!--Tab material-->
            <div id="tab-material" class="js-modal-tab-section">
                <div class="mb-12">
                    <img src="asaaab/user/themes/base/images/placeholder/ph-3x2.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/material/material-poster-paper.jpg" width="600" height="400">

                    <div class="text-center mt-2 mb-2"><i>100 Year Color Guarantee</i></div>
                </div>

                <h4>Fine art paper</h4>
                <p>Enhanced Matte Art 200gsm premium-quality heavyweight fine art paper gentle textured surface. Brilliant vibrant colours, deep blacks and almost three dimensional depth. Perfect for fine art.</p>
            </div>

            <!--Tab faq-->
            <div id="tab-faq" class="js-modal-tab-section hidden js_collapsibles">
                
                <p class="mb-3">On this page we have gathered information on some of the most relevant questions you might be asking yourself. If you don't find the information you are looking for, please feel free to get in touch with us via e-mail <a href="mailto:info@louvenir.com">info@louvenir.com</a></p>

                <div class="collapse-container js_collapse mt-20">
                    <h5 class="js_collapse_toggle clickable d-flex text-smallest">What materials do you use for the personalised posters?</h5>
                    <div class="js_collapse_content mb-3">All our posters are printed on fine museum art quality paper to ensure your artwork is showcased in the best possible way. The paper is 200 gsm with a lightly defined felt structure that gives the artwork an impressive depth that feels almost three-dimensional. The paper is coated with premium inkjet coating that allows the prints to feature brilliant vibrant colours and deep blacks that give the maximum capability of contrast to depict the perfect details. To ensure that your poster will stand the test of time it is designed for FineArt applications where it is completely acid- and lignin-free.</div>

                    <h5 class="js_collapse_toggle clickable d-flex text-smallest">Where are your artworks made?</h5>
                    <div class="js_collapse_content mb-3">We collaborate with reputable printing partners in the UK, Netherlands, USA and Australia in order to offer fast delivery with a low carbon footprint. All design work is done in our head office in Sweden.</div>

                    <h5 class="js_collapse_toggle clickable d-flex text-smallest">How much is the shipping cost?</h5>
                    <div class="js_collapse_content mb-3">
                        We offer free shipping on all orders to the UK, Australia and USA. Please check out the shipping table for detailed information about the shipping costs.
                                            </div>

                    <h5 class="js_collapse_toggle clickable d-flex text-smallest">How long is the delivery time?</h5>
                    <div class="js_collapse_content mb-3">All products are custom made after the order. For personalised posters it usually takes 1-2 business days to print the posters. Thereafter, the shipping time is usually between 2-4 business days to the UK, Australia or USA; and 2-14 days Worldwide.</div>

                    <h5 class="js_collapse_toggle clickable d-flex text-smallest">How will my order be delivered?</h5>
                    <div class="js_collapse_content mb-3">We use fully trackable shipping couriers in order to let you follow the status of your delivery. As soon as your order has been sent from our warehouse we will send you a dispatch confirmation mail together with your tracking number. Depending on the delivery address and product type, we use the following courier firms; Royal Mail, Australia Post, USPS, UPS, FedEx, DPD, PostNL and Canada Post.</div>

                    <h5 class="js_collapse_toggle clickable d-flex text-smallest">How are your orders packaged?</h5>
                    <div class="js_collapse_content mb-3">
                        <p>A delivery note is included with each package but this does not contain any cost prices so you don't need to worry if you are buying a print as a gift.</p>
                        <p>We use bespoke double-walled boxes so that arworks arrive in an undamaged condition wherever they are shipped in the world. Using the right box for the right product ensures all packages are optimised for transport resulting in excellent and cost effective international shipping rates.</p>
                        Our packaging standards have been refined many times, over many years and it is now extremely rare for breakages or damage to occur. On those rare occasions when incidents do happen we strive to ensure that your collection and replacement are organised immediately and shipped back out on a priority service without any fuss.
                    </div>

                    <h5 class="js_collapse_toggle clickable d-flex text-smallest">How do I pay for my order?</h5>
                    <div class="js_collapse_content mb-3 text-smallest clickable">We accept all major credit cards (Visa, Mastercard and American Express). We use Stripe as our payment partner to guarantee safe and secure payments.</div>

                    <h5 class="js_collapse_toggle clickable d-flex text-smallest">Who pays the customs duties and taxes?</h5>
                    <div class="js_collapse_content mb-3">All our prices include VAT for deliveries within the European Union and no extra customs duties or taxes will be applied to orders sent to EU countries, USA or Australia. When ordering from outside the European Union (EU), USA or Australia it is the sole responsibility of the importer (customer) to handle any custom or import duties. Usually these charges must be paid in order for the package to be released by customs. Please note that if you are sending a gift - these charges may fall to the recipient. If you would like more information about the cost estimates for the custom or import duties - please contact the customs office for the country of delivery.</div>

                    <h5 class="js_collapse_toggle clickable d-flex text-smallest">What is your return & refund policy?</h5>
                    <div class="js_collapse_content mb-3">
                        <p>If your items are misprinted, materially flawed, or defective in any way, please contact us at <a href='mailto:info@louvenir.com'>info@louvenir.com</a> within 14 days from receipt of merchandise and we will be happy to arrange for a return, reprint, or credit. Please provide your order number with all correspondence.</p>
                        <p>Due to the nature of custom ordered products, we can not accept returns or exchanges of any items unless the merchandise is misprinted, materially flawed, defective or damaged in transport.</p>
                        We can not be responsible for the purchase of incorrect sizes or wrongly entered information in the design and will not be able to accept returns for this reason once the posters are custom printed.
                    </div>
                </div>

            </div>

            <!--Tab howitworks-->
            <div id="tab-howitworks" class="js-modal-tab-section hidden">
                
                <p>Design your own unique personalised custom poster easily with our poster editor by getting an instant preview each time you add a personal touch.</p>
                <p>Click your way through each tab where you can change almost every part of the poster. Depending on the poster there are different choices to be made.</p>

            </div>
        </div>
        <!-- Tabs content ends -->

        <div class="popup-usps position-sticky" style="bottom: 0;">
            <span><i class="material-icon">check</i> Free shipping on posters*</span>
            <span><i class="material-icon">check</i> Happy-customer guarantee</span>
            <span><i class="material-icon">check</i> High quality paper & print</span>                 
        </div>

    </div>

</div>                    
	<div class="modal__container" id="modal-reviews">
    <header class="modal__header">
        <h4 class="modal__title text-norm" id="modal-reviews-title">
            Reviews
        </h4>

        <i class="material-icon modal__close" js-action-click="modal-close">close</i>
    </header>

    <div class="modal__content modal-review" id="modal-reviews-content">

            <div class="col-12 reviews-row">
	<div class="review-items-fixed contracted position-relative">
		<div class="review-items-col review-items-col1"></div>
		<div class="review-items-col review-items-col2"></div>
		<div class="review-items-col review-items-col3"></div>
		<div class="review-items-col review-items-col4"></div>
		<div class="review-items-col review-items-col5"></div>
		<div class="review-items-col review-items-col6"></div>
	</div>

			<div class="show-more text-center">
			<div class="button button-primary d-inline-block clickable mt-4 mb-3" js-action-click="review-expand">
				Show more reviews <i class="material-icon">expand_more</i>
			</div>
		</div>
	
	<div class="review-items">
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Roberto T.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Ottimo. Consigliato!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-it mr-1"></div> Translated by Google</small></i>

								Great. Recommended!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Patrice J.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Trés contente de mon achat, superbe qualité et temps de livraison correct.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Very happy with my purchase, superb quality and decent delivery time.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">L P.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Het duurde een week voordat het binnen was

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								It took a week to arrive

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									Thank you for your review. I am sorry to hear that you were not happy with our delivery times. The printing usually takes 1-2 business days and then the actual delivery time within the Netherlands is usually 2-3 business days. So it is possible that it can take a week for an order to be delivered but, we hope that you are happy with the quality and will appreciate it for many years to come. 
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Carla T.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Muy bonito! Muchísimas gracias

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								Very pretty! Many thanks

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Håkon R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Fint papir, veldig fornøyd

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-no mr-1"></div> Translated by Google</small></i>

								Nice paper, very happy

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Jasmin A.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Super schnelle Lieferung, Super Qualität, Super zufrieden!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Super fast delivery, super quality, super satisfied!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Line T.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Har brugt Louvenir to gange og gør det gerne igen!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								Have used Louvenir twice and would love to do it again!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Emanuelle V.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Magnifique poster. Tout est parfait, merci

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Beautiful poster. Everything is perfect thanks

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Marc P.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Tog längre tid än jag förväntade mig. Fick vänta tio dagar att få min beställning. Jag hade inte beställt om jag visste att leveranstiderna var så långa.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Took longer than I expected. Had to wait ten days to receive my order. I would not have ordered if I knew the delivery times were so long.

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									Thanks for your feedback. I am sorry to hear that the delivery was delayed and we apologize for the inconvenience it caused you. Usually the delivery time to Sweden is 2-5 working days, but delays can occur. The delivery times we specify are updated to show the average delivery time in recent times.
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Patrick O.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Super mooie poster!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Super nice poster!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Loulou C.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Contente de mon achat. Merci

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Happy with my purchase. Thank you

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Malin L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Hjälpsam kundservice som hjälpte mig att rätta ett stavfel jag upptäckte efter jag beställde.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Helpful customer service that helped me correct a spelling mistake I discovered after I ordered.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Guillaume L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Merci pour le SAV.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Thank you for the after-sales service.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Elin W.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Inget att klaga på

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Nothing to complain about

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Thérèse Y.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Les affiches sont superbes, heureuse de mon achat.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								The posters are great, happy with my purchase.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Morten U.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								13 dages leveringstid

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								13 days delivery time

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									Thank you for your review. I am very sorry to see that the delivery took so long. Unfortunately, there may be delivery delays but the delivery estimates that we provide on our website are based on the latest averages and we are not seeing any problems with deliveries at the moment. 
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Nils S.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Utmärkt!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Excellent!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">D K.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								geweldige service zoals het hoort

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								great service as it should be

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Marc G.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								The actual quality is very impressive and we love the concept. Would be nice if we could zoom out more though.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Pedro U.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Estoy muy satisfecho

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								I am very satisfied

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Belinda P.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Duidelijke site en goede service

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Clear site and good service

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Ali S.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Livraison sous 1 semaine, c'est pas mal!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Delivery within 1 week is not bad!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Håkon M.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								God service.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-no mr-1"></div> Translated by Google</small></i>

								Good service.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Kim V.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								The paper was much better than anything i expected. Really thick and feels very proper

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">María U.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Adorei, posters lindíssimos e rapidez no serviço

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-pt mr-1"></div> Translated by Google</small></i>

								I loved it, beautiful posters and quick service

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Nicolas M.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Commander deux affiches, reçu au bout de 9 jours.  Je recommande la qualité est top. Merci

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								I ordered two posters, received after 9 days. I recommend, the quality is top. Thank you

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Duveken H.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Snel geleverd en goede service. Helemaal top!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Delivered quickly and good service. Absolutely great!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Kasper L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Flotte plakater af en god kvalitet.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								Beautiful posters of a good quality.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Åsa B.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Supernöjd med min snygga karta! God Jul!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Super happy with my nice map! Merry Christmas!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Ester V.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Vraiment très déçue. Dates de livraisons non respectées!!!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Really very disappointed. Delivery dates not respected !!!

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									I am sorry to see that your order is yet to be delivered. There are unfortunately some delays with shipments to France due to the current pandemic. Unfortunately we must ask for your patience and hopefully your package will reach you soon. We will of course ensure that you do get your package and if we see no progress after 21 business days since dispatch, then you are entitled to a replacement order to be sent with Express shipping or to have a full refund. But, I sincerely hope and expect that your package will be delivered before then.
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">B V.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Tout Parfait

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								All Perfect

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Nina F.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Snygg design med härliga färgtoner

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Stylish design with beautiful color tones

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Jean-Marc E.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Pour moi tout est parfait

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								For me everything is perfect

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Annie L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Goede snelle service en de posters zien er top uit

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Good fast service and the posters look great

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Aymerique P.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Les livraisons par La Poste sont trop longue!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Deliveries by La Poste are too long!

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									Thank you for your feedback. Unfortunately, it seems that La Poste is experiencing problems with deliveries due to the high volumes being sent for Christmas during the pandemic. We are currently offering a 50% discount on all Express shippings to France. Hopefully things will be back to normal soon.
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Niels V.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								super service og hurtig levering

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								super service and fast delivery

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Christine L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Ravie de mon premier achat. Superbe qualité.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Delighted with my first purchase. Superb quality.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Karin M.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Perfekt gåva som verkligen blev uppskattad!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Perfect gift that was really appreciated!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Olivia R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Poster arrived fast, in very good quality. So happy I found this site!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">James L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								They are beautiful but we would've preferred buying a frame directly from them.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Alma C.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Très bonne expérience. Merci bcp

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Very good experience. thanks a lot

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Julien W.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Livraison rapide et affiches très jolies. Au top, merci

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Fast delivery and very pretty posters. At the top, thank you

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Jakob C.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Har fortfarande inte fått mina varor efter nästan 2 veckor!!!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Still have not received my goods after almost 2 weeks !!!

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									Thank you for your review. I can confirm that your package is waiting to be picked up at your nearest pickup point since 16/11. I have emailed you the address and your tracking number. Please contact our customer relations team for any assistance.
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Marja R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Kartan är jättefin! Toppbetyg

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								The map is great! Top marks

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Øyvind T.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								En flott nettbutikk. Veldig fornøyd

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-no mr-1"></div> Translated by Google</small></i>

								A great online store. Very satisfied

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Leena M.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Olen oikein tyytyväinen. Kiitos!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fi mr-1"></div> Translated by Google</small></i>

								I am very happy. Thank you!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Virginie F.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Très beau rendu. Colis reçu en 1 semaine.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Very nice rendering. Package received in 1 week.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Birgitta Å.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Beställde två kartor och den ena var skadad med vikmärken. Kundtjänsten var snälla och lovade skicka en ny men fortfarande tråkigt att man ska behöva vänta igen.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Ordered two maps and one was damaged with fold marks. The customer service was kind and promised to send a new one but still disappointed that I will have to wait again.

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									I send you our sincerest apologies for the inconvenience caused. I can confirm that a replacement package has been sent out with express to ensure that it arrives as quickly as possible.
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Lise S.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Så fint! Et flot produkt og super hurtig levering. Jeg har anbefalet til andre som også har bestilt

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								So nice! A great product and super fast delivery. I have recommended to others who have also ordered

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Jenny W.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								We ordered three maps and they all turned out lovely.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Ramón N.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Muy bonito. Estoy muy contenta

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								Very pretty. I am very happy

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Angela C.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Qualità eccellente, consiglio davvero

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-it mr-1"></div> Translated by Google</small></i>

								Excellent quality, really recommend

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Marianne L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								La qualité est superbe, vraiment satisfaite. Merci à vous!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								The quality is superb, really satisfied. Thank you!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Laura K.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								High quality print with fantastic detail. Looks stunning in our home office

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Josefine E.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								God købsoplevelse. Flotte plakater og hurtig levering.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								Good shopping experience. Great posters and fast delivery.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Gunilla R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Paketet kom fram skadat, rullen var helt trasig och postern går inte att använda. Otroligt besviken efter att ha väntat i en hel vecka så kommer den fram så här. Vill ha mina pengar tillbaka eftersom vi inte har någon nytta av den längre. Hemsk upplevelse, kommer aldrig handla här igen!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								The package arrived damaged, the roll was completely broken and the poster could not be used. Incredibly disappointed after waiting for a whole week, it comes out like this. Want my money back because we have no use for it anymore. Horrible experience, will never shop here again!

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									Thank you for taking the time to write a review. We are of course very sorry to hear about this and can assure you that we take these kind of things very seriously. Our packaging standards have been refined many times, over many years and it is now extremely rare for breakages or damage to occur. On those rare occasions when incidents do happen we strive to ensure that your collection and replacement are organised immediately and shipped back out on a priority service without any fuss. We will gladly issue you a full refund for your order and send you our sincerest apologies for the inconvenience this has caused you. 
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Pilar E.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								¡Me ha encatado! Ha superado todas mis expectativas.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								I loved it! It has exceeded all my expectations.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Diede F.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Goede kwaliteit print en snel verstuurd. Heel tevreden!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Good quality print and shipped quickly. Very satisfied!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Nora E.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Tusen tack till fantastisk kundtjänst och service. Har redan rekommenderat sidan till andra!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Many thanks for fantastic customer service. Have already recommended the site to others!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Dina B.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								È arrivato nei tempi previsti. La carta è spessa e di ottima qualità!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-it mr-1"></div> Translated by Google</small></i>

								It arrived on schedule. The paper is thick and of excellent quality!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Anders Ø.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Fin nettbutikk med mange flotte produkter. Kvaliteten er i top og rask levering. Kan varmt anbefales!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								Nice online store with many great products. The quality is top notch and fast delivery. Highly recommended!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Santiago H.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Me encanto todo, como esperaba

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								I loved everything, as expected

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Erich W.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Zweimal bestellt und rundum zufrieden!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Ordered twice and completely satisfied!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Lone E.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Nemt at handle og hurtigt levering

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								Easy to order and fast delivery

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Jasmijn L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Hele mooie poster, niets op aan te merken.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Very nice poster, nothing to criticize.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Phillip D.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Super Poster - aber schon recht teuer

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Great poster - but quite expensive

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									Thank you for your feedback. We are sorry to hear that you found the price to be a bit expensive. We use a premium-quality fine art paper (200gsm) that is designed for archival storage. The paper is acid-free and lignin-free to guarantee it will not yellow with age and are tested to be light resistant for at least 100 years. We have chosen to only use premium materials so that our customers can appreciate their artworks for many years to come.
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Pedro F.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Servicio rapido y professional. Muy recomendable.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								Fast and professional service. Highly recommended.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Katja L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Heel erg tevreden!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Very satisfied!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Christian B.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Leveringen tog lidt tid men det er forståeligt nok. Handler uden tvivl der igen

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								Delivery took some time but that is understandable enough. Will buy again without hesitation

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Vera P.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Stunning print and the delivery was just in time for my boyfriends birthday

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Anna K.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Die Qualität ist hervorragend!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								The quality is excellent!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Roger L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Tog ca en vecka att få hem beställningen. Resultatet var t.o.m över förväntan

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Took about a week to get the order home. The result was beyond expectations

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Niels L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Lekker dik papier. Heel blij met mijn aankoop!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Nice thick paper. Very happy with my purchase!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Filippa I.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Fint papper och bra tryck

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Fine paper and good print

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Carla P.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Serviço super rápido

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-pt mr-1"></div> Translated by Google</small></i>

								Super fast service

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Pénélope V.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								La livraison a été rapide et l'affiche est parfaite

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								The delivery was fast and the poster is perfect

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Ralf H.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Problemlos

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Problem-free

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Karin P.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Kartan är otroligt snygg där vi t.o.m är förvånade över hur pass bra kvalitén är. Pappret är tjockt och färgerna är så fina. Tack Louvenir vi är hur nöjda som helst!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								The map is incredibly nice where we are even surprised at how good the quality is. The paper is thick and the colors are so nice. Thank you Louvenir we are very happy!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">D L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Parfait *****

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Perfect *****

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Paula M.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Todo bien estoy contenta con Louvenir

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								All good, I am happy with Louvenir

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Ahmad S.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Jag gillar min karta. Bra papper 

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								I like my map. Good paper

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Lars N.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Super tilfreds kunde

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								Super satisfied customer

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Anne I.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Mooie posters, perfect verpakt

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Beautiful posters, perfectly packaged

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">P C.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Delivery took a few days more than expected. Customer service was helpful and informative. Maps look great and the paper feels very thick. All in all a positive experience.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Jean-Olivier L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Très satisfaite. Merci beaucoup.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Very satisfied. Thank you so much.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Monika K.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Fina prints och snabb leverans!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Nice prints and fast delivery!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Nicolas R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Très bon service client

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Very good customer service

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Sergio L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Muy bonitas y de calidad, recomiendo 100%

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								Very beautiful and of quality, I recommend 100%

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Cassie T.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Exactly as described and what I wanted

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Kirstein M.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Falschlieferung eines Posters. Der Kundenservice hat umgehend reagiert und die neue Lieferung erfolgte sehr schnell.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Wrong delivery of a poster. The customer service responded immediately and the new delivery was made very quickly.

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									Thank you for taking the time to write a review. We send you our sincerest apologies for the inconvenience caused and are glad to hear that the replacement poster arrived quickly. 
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Helga K.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Helemaal top! Goed kwaliteit posters. 

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Absolutely great! Good quality posters.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Santiago F.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Todo un acierto

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								Everything a success

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Henrik S.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Myket bra kvalitet premium känsla

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Very good quality premium feel

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Guiseppa L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								È stupenda. La spedizione corrisponde ai tempi indicati.<br>


							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-it mr-1"></div> Translated by Google</small></i>

								Is beautiful. The shipment corresponds to the times indicated.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Rikke H.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Super godt tilfreds - har anbefalet til venner!!!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								Super well satisfied - have recommended to friends !!!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Richard P.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Very pleased with our map; quality is amazing. I will be purchasing a few more for my office space. Thank you

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Jerome I.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Magnifique poster. Livraison cependant un peu longue...

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Beautiful poster. Delivery however a bit long ...

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									Thank you for your review. We are happy to hear you were pleased with your poster. And we are sorry to see that your poster was delivered two days after our estimated delivery time. Unfortunately, delays may occur which is why we only offer estimated delivery times based on the latest information we receive from our shipping couriers. Have a nice day!
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Stig L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Super fin plakat, kom hurtigt med posten.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								Super nice poster, came quickly with the mail.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Michelle T.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Enjoyed designing my map of our neighbourhood. Turned out great!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">C R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Premier achat chez Louvenir: Très beau poster, qualité parfaite, livraison assez rapide...

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								First purchase at Louvenir: Very nice poster, perfect quality, fairly fast delivery ...

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Carla V.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Looks amazing on my wall

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Martina R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Köpt flera gånger, alltid nöjd

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Bought several times, always satisfied

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Mona I.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Super einfach zu bestellen. Schnell und gute Qualität

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Super easy to order. Fast and good quality

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Raquel  B.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Estoy algo decepcionada, primero con el retraso del envío que ha tardado 3 semanas, para el precio que tiene el envío debería ser más rápido, de hecho lo compré un 17 de junio y hasta un 23 de junio no lo enviaron, lo cual retrasó más su llegada. Por otro lado, no me ha gustado el papel, sí gramaje alto, porque es una impresión en una cartulina tal cual, pero el papel no tiene ese ligero brillo que esperas en este tipo de impresiones, es mate mate, cero brillos como si lo imprimeses en la papelería de tu barrio en una cartulina. El marco de alrededor es muy pequeño con lo que al poner un marco por fuera se come mucho al diseño. Lo único bueno que puedo decir es que usan una buena base de datos, porque en mi caso era un pueblo y sale con muchos detalles tipo zonas verdes, etc. y te deja ampliar el diseño mucho. Pero en general no repetiría a menos que cambien de tipo de papel.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								Im a bit disappointed, first with the shipping delay that has taken 3 weeks, for the price the shipping should be faster, in fact I bought it on June 17 and until June 23 they did not send it, which delayed more his arrival. On the other hand, I did not like the paper, it did have a high grammage, because it is a print on cardboard as it is, but the paper does not have that slight gloss that you expect in this type of print, it is matte matte, zero gloss as if it Print yourself on stationery in your neighborhood on cardboard. The surrounding frame is very small, so putting a frame on the outside eats the design a lot. The only good thing I can say is that they use a good database, because in my case it was a town and it comes out with many details like green areas, etc. and it lets you expand the design a lot. But in general I would not repeat unless they change the type of paper.

							</div>

						
													<div class="review-reply mt-3 ml-3 p-2">
								<div class="review-reply-title line-height-1 strong text-smallest txt-dark-gray">Louvenir replied:</div>
								<div class="review-reply-descr text-smallest txt-light-gray mt-2">
									Thank you for taking the time to write a review. We send you our sincerest apologies that your order was so delayed; unfortunately there were some production and delivery delays during the period you ordered due to the COVID-19 situation. We were just as frustrated as you about this as we of course always want to offer our customers the fastest possible shipping. Fortunately the situation is better now and we are not experiencing any such serious delays. Thank you for your feedback about the paper - as you said, we do use a matte paper instead of a glossy one as, we find that it is more suited for giclée printing that is used for fine art prints where the colors last over 100 years if stored correctly. Perhaps in the future we can offer a glossy type also, to accommodate those that prefer it to matte paper. Have a lovely summer!
								</div>
							</div>
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Alain L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								très beau rendu. Je recommande vivement!!!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								very beautiful rendering. I highly recommend!!!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Kurt L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Alles bestens gelaufen

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Everything went well

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Marianne Å.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Jättefin poster super nöjd med allt

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Very nice poster super happy with everything

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Diane B.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Erg blij met de mooie posters

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Very happy with the beautiful posters

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Kylie G.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Stunning details on the map. Arrived within a week which was very impressive

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Adrian L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								J’avais demandé une livraison à domicile et j’ai dû aller dans un relais colis ...

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								I had requested a home delivery and I had to go to a service point ...

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Isabel M.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								La calidad es increíble. ¡Gracias!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								The quality is incredible. Thank you!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Bettina L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Wunderschöne Poster, Alles in allem bin ich sehr zufrieden !!!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Beautiful poster, all in all I am very happy !!!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Silvia N.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Prodotto fantastico, pienamente soddisfatta

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-it mr-1"></div> Translated by Google</small></i>

								Fantastic product, fully satisfied

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Frédéric C.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Conforme à mes attentes. Merci

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Met my expectations. Thank you

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Anne L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Nice quality but, I would like to be able to zoom out more.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Giselle R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Sehr schönes Design. Wir würden jederzeit wieder bei Louvenir bestellen.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Very nice design. We would order from Louvenir again at any time.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Martin E.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Snabb och bra service. 

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Fast and good service.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Louise R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Super flot! Og hurtig levering

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								Super great! And fast delivery

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Terry N.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Very impressed with the paper

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Frank R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Alles perfekt, immer wieder eine tolle Geschenkidee

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Everything perfect, always a great gift idea

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Aini T.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Nopea ja luotettava

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fi mr-1"></div> Translated by Google</small></i>

								Fast and reliable

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Saskia K.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Schöne Poster. Es ist alles glatt gelaufen.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Nice posters. Everything went smoothly.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Milly W.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Quick delivery, nice quality. They should offer frames tho

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">James U.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Perfect experience from point of purchase, to delivery of my poster.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Françoise L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								2ème commande, toujours satisfaite

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								2nd time i ordered, always satisfied

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Paula L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Entrega en el plazo acordado

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								Delivery within the agreed time

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Camille E.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								superbe merci

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								superb thank you

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Jack G.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Fast delivery to Melbourne, the paper has an excellent quality

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Rita A.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Hurtig service og flotte plakater

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-da mr-1"></div> Translated by Google</small></i>

								Quick service and great posters

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Claudia N.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Tutto perfetto - Consigliatissimo !!!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-it mr-1"></div> Translated by Google</small></i>

								Everything perfect - Highly recommended !!!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Larissa A.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								¡Es genial - la calidad es increíble!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								It's great - the quality is amazing!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Charlotte E.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Gave a map of Auckland to my husband for our anniversary since our flights got cancelled due to the whole lockdown. He absolutely loved it

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Börje R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Suverän kvalité och leverans i tid

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Superb quality and timely delivery

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Karim R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Expédition et livraison rapides

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Fast dispatch and delivery

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Julia D.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Alles top!!! Bin total zufrieden

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-de mr-1"></div> Translated by Google</small></i>

								Everything perfect!!! I am totally satisfied

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Eric W.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Friendly customer service and great quality.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Marianne E.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Leveransen tog ca en vecka och vi är hur nöjda som helst med vår karta

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Delivery took about a week and we are very satisfied with our map 

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Marc M.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								The maps looks great, however I would appreciate the option to purchase frames to go along with the maps.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Tessa J.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								<br>
Overall it worked out well. Order was delayed by a few days but we were surprised that the quality of the paper is so high. Never seen a poster that thick before.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Nils H.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Jätte nöjd med mina tre kartposters. Snygg design och toppen kvalitet!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Really happy with my three map posters. Stylish design and top quality!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">João C.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Ótimo produto

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-pt mr-1"></div> Translated by Google</small></i>

								Great product

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Martín R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Empresa muy competente. ¡Saludos!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								Very competent company. Cheers!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Liza D.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								5/5

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Linus A.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Helnöjd med mitt köp. Hade varit bra om man kunde köpa till ram också.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Satisfied with my purchase. Would have been good if one could buy a frame too.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Pia R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Allt bra! Inget att klaga på

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								All good! Nothing to complain about

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Florent R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Je suis fan de mon affiche et je recommande sans hésiter !!!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								I am a fan of my poster and I recommend without hesitation !!!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Giulia F.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Ottimo prodotto e ottimo prezzo

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-it mr-1"></div> Translated by Google</small></i>

								Great product and great price

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Maria L.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Qualité impeccable - superbe idée de cadeau !!!

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Impeccable quality - great gift idea !!!

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Mary D.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Perfect gift for my husband<br>


							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Erik G.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Vi köpte flera olika kartor och alla blev jättefina. 

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								We bought several different maps and all turned out really nice.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Emilia W.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star_border</i>
								<i class="material-icon">star_border</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								The poster is nice but the delivery took too long.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Noah H.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								Great service! Would definitely order again.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Marisol  G.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Me encanta. super bonito

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-es mr-1"></div> Translated by Google</small></i>

								I love it. super pretty

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Nick D.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2">

								The map looks fantastic & I can't wait to give it as a present. Definitely gonna order another one.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Karin A.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Super fin design <3<br>


							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Super nice design <3

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Fanny I.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Meget flot plakat og design

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-nl mr-1"></div> Translated by Google</small></i>

								Very nice poster and design

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Roman G.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Tout est parfait

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-fr mr-1"></div> Translated by Google</small></i>

								Everything is perfect

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Silvia R.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Meraviglioso !!! Arrivato in meno di una settimana.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-it mr-1"></div> Translated by Google</small></i>

								Wonderful !!! Arrived in less than a week.

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
		
			
			<div class="review-item-container js-review-item-container">
				<div class="review-item bg-white mb-3">
					
					<div class="review-info p-3 border-lightest-gray">


						<div class="review-name-date line-height-1 strong text-smallest txt-dark-gray d-flex justify-content-between">
							<div class="review-name mb-1">Lisa M.</div>

													</div>

						<div class="rating">
							<span class="rating-stars yes-rating">
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
								<i class="material-icon">star</i>
							</span>
						</div>

						
							<div class="review-descr text-smallest txt-light-gray mt-2 js-desc hidden">

								Bästa presenten till min mamma som fyllde 40! Hur nöjd som helst.

							</div>

							<a class="review-descr-translated-link d-block text-smallest mt-1" href="#" js-action-click="review-original-show">Show original</a>

							<div class="review-descr review-descr-translated text-smallest txt-light-gray mt-2 p-3 bg-lightest-gray">

								<i class="d-block mb-2"><small><div class="flag flag-sv mr-1"></div> Translated by Google</small></i>

								Best gift to my mother who turned 40! Very pleased with everything

							</div>

						
													<!--<div class="size">Size: 8x10"</div>-->
						
											</div>
				</div>
			</div>
			</div>
	</div>    
    </div>
</div>        
	<div id="modal-sizeguide">

    <header class="modal__header">
        <h4 class="modal__title text-norm" id="modal-sizeguide-title">
            Size guide
        </h4>

        <i class="material-icon modal__close" js-action-click="modal-close">close</i>
    </header>

    <div class="modal__content" id="modal-sizeguide-content">
        <img src="asaaab/user/themes/base/images/placeholder/ph-700x447.gif.html" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/size-guide.jpg" width="700" height="447">
    </div>

</div>        
	<div id="modal-photoguidelines">

    <header class="modal__header">
        <h4 class="modal__title text-norm" id="modal-photoguidelines-title">
            Photo guidelines
        </h4>

        <i class="material-icon modal__close" js-action-click="modal-close">close</i>
    </header>

    <div class="modal__content" id="modal-photoguidelines-content">
                    <ol><li>Take the photo in a place with good lighting.  Outdoor during the day will be best.</li><li>Ensure that the colour of the skin is not affected by the lighting and is the same colour in the photo as in real life.</li><li>Keep the angle as close to eye level with your model as possible.</li><li>Try to be as close as possible so your model takes up as much place in the photo as possible and we can see all the details as closely as possible.</li><li>Ensure that the photo is in focus and not blurry.</li><li>Ensure that all parts of the models head are in the photo.</li><li>It is not important to us that the model looks at the camera. Choose a photo that brings forth the feeling you want the artwork to portray.</li></ol>
        
        <div class="text-center">
            <a class="button button-large button-white" js-action-click="modal-close" aria-label="Close this dialog window">Close</a>
        </div>

    </div>

</div>
		
		<div class="bg-white modal-product-confirm" id="modal-product-confirm" data-modal-class="modal-product-confirm-modal">

    <header class="modal__header">
        <h4 class="modal__title text-norm txt-white">
            Отличная работа!
            <div class="modal__close" js-action-click="modal-close"><i class="material-icon m-0" style="font-size: 24px;">Закрыть</i></div>
        </h4>
    </header>

    <div class="modal-confirmProduct-item">

        <div class="textData position-relative mt-2 mt-sm-0">
            <div class="mainDescr font-italic">Пожалуйста, убедитесь, что все данные верны.</div>

            <div class="textData-item">
                <div class="image"><img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/editor-icon-size.png" width="30" height="30"></div>
                <div class="descr js-checkout-item-desc">
                    Size: 50x70cm
                </div>
            </div>

            <div class="textData-item">
    <div class="image"><img src="asaaab/user/themes/base/images/placeholder/ph-1x1.gif" loading="lazy" data-src="https://d361gbievcxqh7.cloudfront.net/asaaab/user/themes/base/images/editor-icons/editor-icon-text.png" width="30" height="30"></div>
    <div class="descr-holder">
        <div class="descr js-checkout-item-desc">
            KAZAKHSTAN
        </div>

        <div class="descr js-checkout-item-desc">
            ALMATY
        </div>


            </div>
</div>
        

        </div>
    </div>

    <div class="modal-confirmproduct-continue">
        <div class="d-flex">


            <div class="modal-confirmproduct-button modal-confirmproduct-button-buy button-primary d-flex justify-content-between flex-grow-1" js-action-click="cart-add">
                <div class="modal-confirmproduct-button-price d-flex align-items-center">
                    <div class="total" id="modal-total-cost-price"> 15 000 Тенге</div>
                      
                </div> 

                <div class="modal-confirmproduct-button-text d-flex align-items-center">
                    <i class="material-icon">shopping_cart</i> Добавить в корзину
                </div>
            </div>
        </div>
    </div>
</div>
	
	             
    </div>

    <div class="widget-cookie animated fadeIn delay-05s" id="cookie-message">
        Чтобы улучшить взаимодействие с пользователем в Louvenir, мы используем файлы cookie. Продолжая на странице, вы соглашаетесь с использованием <a href="#" class="cookies-link" js-action-click="link-open" data-id="page-cookies">cookies</a>.
        <a href="#" class="cookies-close" js-action-click="cookies-accept">OK</a>          
    </div>

</body>
</html>
