<div id="side-panel" class="dark">

	<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

	<div class="side-panel-wrap">

		<div class="widget widget_links clearfix">

			<h4><?=$site_name;?></h4>

			<div style="font-size: 14px; line-height: 1.7;">
				<address style="line-height: 1.7;">
					<b><?=$address;?>, <?=$number;?></b><br>
					<?=$distric;?> - <?=$city;?><br>
				</address>

				<div class="clear topmargin"></div>

				<abbr title="Telefone"><strong>Telefone:</strong></abbr> <?=$phone;?><br>
				<?php if($cellphone){?>
				<abbr title="Celular"><strong>Celular:</strong></abbr> <?=$cellphone;?><br>
				<?php } ?>
				<abbr title="Email Address"><strong>E-mail:</strong></abbr> <a href="mailto:<?=$email;?>"><?=$email;?></a>
			</div>

		</div>

		<div class="widget quick-contact-widget clearfix">

			<h4>Redes Sociais</h4>

			<?php if($facebook){ ?>
			<a href="<?php echo $facebook; ?>" class="social-icon inline-block noborder si-small si-facebook" title="Facebook">
				<i class="icon-facebook"></i>
				<i class="icon-facebook"></i>
			</a>
			<?php } ?>
			<?php if($twitter){ ?>
			<a href="<?php echo $twitter; ?>" class="social-icon inline-block noborder si-small si-twitter" title="Twitter">
				<i class="icon-twitter"></i>
				<i class="icon-twitter"></i>
			</a>
			<?php } ?>
			<?php if($instagram){ ?>
			<a href="<?php echo $instagram; ?>" class="social-icon inline-block noborder si-small si-instagram" title="Instagram">
				<i class="icon-instagram"></i>
				<i class="icon-instagram"></i>
			</a>
			<?php } ?>
			<?php if($email){ ?>
			<a href="mailto:<?php echo $email; ?>" class="social-icon inline-block noborder si-small si-mail" title="E-mail de Contato">
				<i class="icon-mail"></i>
				<i class="icon-mail"></i>
			</a>
			<?php } ?>

		</div>

	</div>

</div>