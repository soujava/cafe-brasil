<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h2>HTTP 502</h2>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 502</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="span4">
				<img src="/img/error/error-owl.jpg" alt="" />
			</div>
			<div class="span8">
				<h2><strong>502<strong></h2>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
				    <h3 >Gateway inv&aacute;lido!</h3>
				    <h4>O servidor proxy recebeu uma resposta inv&aacute;lida do servidor destino.</h4>
			    <?php } else { ?>
				    <h3 >Bad Gateway!</h3>
				    <h4>The proxy server received an invalid response from an upstream server.</h4>
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>
