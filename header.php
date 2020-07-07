<?php 
// Chamada das Configurações Gerais
require_once('config/settings.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169354743-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-169354743-1');
	</script>

	<!-- Global Search Console -->
	<meta name="google-site-verification" content="YGt_XaVd8_lEG1ypLNXLh6ZBOUbXimQHoUzBbUdqTOM" />

	<!-- Document Title
	============================================= -->
	<title><?=$title_page;?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?=$site_description;?>">
	<meta name="keywords" content="<?=$site_keywords;?>" />
	<meta property="og:title" content="<?=$title_page;?>" />
	<meta property="og:description" content="<?=$site_description;?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://jpwtechdigital.com.br" />
	<meta property="og:image" content="https://jpwtechdigital.com.br/images/facebook.png" />
	<meta property="og:locale" content="pt_BR"/>
	<meta property="og:type" content="website"/>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="assets/css/bootstrap.css?2" type="text/css" />
	<link rel="stylesheet" href="assets/css/style.css?2" type="text/css" />

	<!-- One Page Module Specific Stylesheet -->
	<link rel="stylesheet" href="assets/css/onepage.css?2" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="assets/css/dark.css?2" type="text/css" />
	<link rel="stylesheet" href="assets/css/font-icons.css?2" type="text/css" />
	<link rel="stylesheet" href="assets/css/et-line.css?2" type="text/css" />
	<link rel="stylesheet" href="assets/css/animate.css?2" type="text/css" />
	<link rel="stylesheet" href="assets/css/magnific-popup.css?2" type="text/css" />

	<link rel="stylesheet" href="assets/css/fonts.css?2" type="text/css" />
	<link rel="stylesheet" href="assets/css/custom.css?2" type="text/css" />

	<link rel="stylesheet" href="assets/css/responsive.css?2" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
		<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

		<style>

		.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Raleway', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Raleway', sans-serif;
		}
		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

		</style>

	</head>

	<body class="stretched side-push-panel" id="<?php echo $classbody; ?>">

		<div class="body-overlay"></div>

		<?php /*Chamada da Coluna Lateral*/require_once('column_right.php'); ?>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="_galerias/logo.png"><img src="_galerias/logo.png" alt="<?=$sitename;?>"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="_galerias/logo.png"><img src="_galerias/logo.png" alt="<?=$sitename;?>"></a>					
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
							<li><a href="<?php if($file != 'home.php'){echo '/'; }else{ echo '#'; } ?>" data-href="#wrapper"><div>Início</div></a></li>
							<li><a href="<?php if($file != 'home.php'){echo 'quem-somos'; }else{ echo '#'; } ?>" data-href="#section-about"><div>Quem Somos</div></a></li>
							<li><a href="<?php if($file != 'home.php'){echo 'servicos'; }else{ echo '#'; } ?>" data-href="#section-services"><div>Serviços</div></a></li>
							<li><a href="<?php if($file != 'home.php'){echo 'portfolio'; }else{ echo '#'; } ?>" data-href="#section-works"><div>Portfólio</div></a></li>
							<li><a href="<?php if($file != 'home.php'){echo 'contato'; }else{ echo '#'; } ?>" data-href="#section-contact"><div>Contato</div></a></li>
						</ul>

						<div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="icon-rocket"></i></a></div>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->