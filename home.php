
<?php /*Chamada do Slider*/ require_once('slider.php'); ?>

<section id="content">

	<div class="content-wrap nopadding">

		<div id="section-about" class="center page-section">

			<div class="container clearfix">

				<h2 class="divcenter bottommargin font-body" style="max-width: 700px; font-size: 40px;">Uma empresa de tecnologia digital que cria experiências impressionantes</h2>

				<p class="lead divcenter bottommargin" style="max-width: 800px;">Entregamos soluções multiplataformas ajudando sua empresa a focar em potênciais clientes com melhores resultados de busca. </p>

				<p class="bottommargin" style="font-size: 16px;"><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="more-link">Conheça nosso serviços <i class="icon-angle-right"></i></a></p>

			</div>

		</div>

		<?php require_once('servicos.php'); ?>

		<?php require_once('portfolio.php'); ?>

		<?php require_once('contato.php'); ?>

		<?php require_once('depoimentos.php'); ?>

	</div>

</section><!-- #content end -->