<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<?$APPLICATION->ShowHeadStrings();?>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			
		<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/img/favicon/apple-touch-icon-114x114.png">

		<?
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/normalize.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/bootstrap.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/fonts.min.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/main.min.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/jquery.mmenu.all.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/lightbox.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/owl.carousel.min.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/media.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/menu.css');
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/FontAwesome/css/font-awesome.min.css');
		?>
		<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=cyrillic" rel="stylesheet">

		<meta name="yandex-verification" content="674db7a535f59f8d" />
		<meta name="google-site-verification" content="hMualrUQiEQXAYcbWh9fclotq-bgjs1T7azPT6xvuYc" />

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-24274695-1', 'auto');
		  ga('send', 'pageview');

		</script>



	</head>
	<body>

	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>

	<div class="mobile_menu">
		<b>Меню</b>
		<div class="menu-right"> 
			<a href="#my-menu" class="toggle-mnu"><span></span></a>
		</div>
	</div>
<div class="page">

	<!-- header -->
	<header>


		<div class="top_line">
			<div class="container">
				
					<div class="top-line-container">

		                    <ul class="gpk-menu">
								<li class="big-i hamburger-button">
									<a class="toggle-menu" href="#">
										<div class="hamburger" id="hamburger-1">
								          <span class="line"></span>
								          <span class="line"></span>
								          <span class="line"></span>
								        </div>
								        <p>Разделы портала</p>
									</a>
									

									
								</li>
							</ul>
					

						<div class="float-right">
							<a href="#">
								<i class="fa fa-map-marker" aria-hidden="true"></i> 
								<span>МИНСК <br>Славинского, 4</span>
							</a>
							<a href="mailto:ips@gpk.gov.by">
								<i class="fa fa-envelope-open-o" aria-hidden="true"></i> 
								<span>ips@gpk.gov.by <br>Электронная почта</span>
							</a>
							<a href="tel:(017) 281-70-96">
								<i class="fa fa-phone" aria-hidden="true"></i> 
								<span>(017) 281-70-96 <br>Горячая линия</span>
							</a>
							
						</div>	
					</div>
			</div>	
		</div>	


<div class="container menu-wrapper">
	<div class="menu-razdel">
		<div id="razdel" style="display:none;">
			<ul>
				<li><a href="http://gpk.gov.by/" target="_self"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu/gpk.png" alt="Государственный пограничный комитет"><p>Государственный пограничный комитет</p></a></li>
				<li><a href="http://ips.gpk.gov.by/" target="_self"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu/ips.png" alt="Институт пограничной службы"><p>Институт пограничной службы</p></a></li>
			</ul>

			<ul>
				<li><a href="http://gpk.gov.by/study/" target="_self"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu/kak_stat.png" alt="Как стать пограничником"><p>Как стать пограничником</p></a></li>
				<li><a href="http://tops.gpk.gov.by/" target="_self"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu/territorialnye_organy.png" alt="Территориальные органы пограничной службы"><p>Территориальные органы пограничной службы</p></a></li>
			</ul>
				
			<!-- <ul>
				<li><a href="#" target="_self"><img src="<?=SITE_TEMPLATE_PATH?>/img/menu/veteran.png" alt="Белорусский союз ветеранов"><p>Белорусский союз ветеранов</p></a></li>
			</ul> -->
				    
		</div>
	</div>	
</div>

<div class="container" >  
 
	<header>
		<div class="row" style="margin-top: 15px;">
			<div class="col-md-2 col-sm-2 logo-wrapper">
				<a href="http://ips.gpk.gov.by/"><img src="<?=SITE_TEMPLATE_PATH?>/img/ips.png" alt="Институт пограничной службы Республики Беларусь" class="logo-header"></a>
			</div>
			<div class="col-md-7 col-sm-7">
				<h1 class="logo-title">Институт пограничной службы <br> Республики Беларусь</h1>


			</div>
			<div class="col-md-3 col-sm-3">


				<div class="social-icon">
	                <li class="social-icon-item"><a target="_blank" href="https://vk.com/ips_rb"><i class="fa fa-vk"></i></a></li>
	                <li class="social-icon-item"><a target="_blank" href="https://www.facebook.com/ips.gpk.gov.by"><i class="fa fa-facebook "></i></a></li> 
	                <li class="social-icon-item"><a target="_blank" href="https://twitter.com/IpsGovBY"><i class="fa fa-twitter"></i></a></li>
	                <li class="social-icon-item"><a target="_blank" href="https://www.youtube.com/channel/UCJUQWK-NB4pincyfdraY2cA"><i class="fa fa-youtube "></i></a></li> 
	                <li class="social-icon-item"><a href="https://www.instagram.com/ipsrb" target="_blank"><i class="fa fa-instagram"></i></a></li>    
                </div>


				<div style="margin-top: 5px;">
					<?$APPLICATION->IncludeComponent(
						"bitrix:search.form",
						"search.form-sergei",
						Array(
							"PAGE" => "#SITE_DIR#search/index.php",
							"USE_SUGGEST" => "N"
						)
					);?>
				</div>
					
			</div>
				

		</div>
	</header>


</div>

		<section class="top-mnu">
			<div class="container">
				<nav class="navbar navbar-default" role="navigation">

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?$APPLICATION->IncludeComponent(
								"bitrix:menu", 
								"top_menu", 
								array(
									"ROOT_MENU_TYPE" => "top",
									"MENU_CACHE_TYPE" => "A",
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_USE_GROUPS" => "Y",
									"MENU_CACHE_GET_VARS" => array(
									),
									"MAX_LEVEL" => "2",
									"CHILD_MENU_TYPE" => "left",
									"USE_EXT" => "Y",
									"DELAY" => "N",
									"ALLOW_MULTI_SELECT" => "N",
									"COMPONENT_TEMPLATE" => "top_menu"
								),
								false
							);?>
						</div>
				</nav>
			
			</div>
		</section>
		
		
	</header>
	<div class="container">
			<div class="row">
			<div class="col-md-12">
				<?$APPLICATION->IncludeComponent(
							"bitrix:breadcrumb", 
							"broadcrumbs", 
							array(
								"START_FROM" => "0",
								"PATH" => "",
								"SITE_ID" => "-"
							),
							false
						);?>
			</div>
					
			</div>
			
	</div>







</div>   
<!-- /header -->

	<div class="container">	
		<div class="row">
			
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"titles", 
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "titles/titles.php"
					),
					false
				);?>
			
			<div class="col-md-8 col-lg-9">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"white_field", 
					array(
						"AREA_FILE_SHOW" => "page",
						"AREA_FILE_SUFFIX" => "col-md-8",
						"EDIT_TEMPLATE" => "",
						"AREA_FILE_RECURSIVE" => "Y",
						"COMPONENT_TEMPLATE" => "white_field"
					),
					false
				);?>
			</div>

			

			<div class="col-lg-3 col-md-4">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					"col-md-4", 
					array(
						"AREA_FILE_SHOW" => "sect",
						"AREA_FILE_SUFFIX" => "col-md-4",
						"EDIT_TEMPLATE" => "",
						"AREA_FILE_RECURSIVE" => "Y"
					),
					false
				);?>
			</div>
		</div>
	
			
			

			

		
