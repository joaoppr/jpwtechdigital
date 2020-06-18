	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/plugins.js?1"></script>


	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="assets/js/functions.js"></script>




	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

	<script type="text/javascript">

	var tpj=jQuery;
	tpj.noConflict();

	tpj(document).ready(function() {

		var apiRevoSlider = tpj('.tp-banner').show().revolution(
		{
			sliderType:"standard",
			jsFileLocation:"include/rs-plugin/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:16000,
			startwidth:1140,
			startheight:600,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:5,

			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				},
				arrows: {
					style: "hermes",
					enable: true,
					hide_onmobile: false,
					hide_onleave: false,
					tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 10,
						v_offset: 0
					}
				}
			},

			touchenabled:"on",
			onHoverStop:"on",

			swipe_velocity: 0.7,
			swipe_min_touches: 1,
			swipe_max_touches: 1,
			drag_block_vertical: false,

			parallax:"mouse",
			parallaxBgFreeze:"on",
			parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

			keyboardNavigation:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:20,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"on",
			fullScreen:"off",

			spinner:"spinner4",

			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,

			shuffle:"off",

			autoHeight:"off",
			forceFullWidth:"off",
			hideTimerBar:"on",


			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
		});

	apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
		setTimeout( function(){ SEMICOLON.slider.sliderParallaxDimensions(); }, 200 );
	});

	apiRevoSlider.bind("revolution.slide.onchange",function (e,data) {
		SEMICOLON.slider.revolutionSliderMenu();
	});

});

	</script>




	<script src="assets/js/jquery.maskedinput.js"></script>
	<script>
		var $ = jQuery.noConflict();
		$('#phone').mask('(00) 0000-00009');
		$('#phone').blur(function(event) {
          if($(this).val().length == 14){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
          	$('#phone').mask('(00) 0000-0000');
          } else {
          	$('#phone').mask('(00) 90000-0000');
          }
      });

	</script>

	<?php if($tawkto){
		echo $tawkto;
	}?>