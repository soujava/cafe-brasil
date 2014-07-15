<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h2>HTTP 501</h2>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 501</li>
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
				<h2><strong>501<strong></h2>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
				    <h3 >A requisi&ccedil;&atilde;o n&atilde;o pode ser processada!</h3>
				    <h4>O servidor n&atilde;o suporta a a&ccedil;&atilde;o requisitada pelo seu navegador.</h4>
			    <?php } else { ?>
				    <h3 >Cannot process request!</h3>
				    <h4>The server does not support the action requested by the browser.</h4>
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>

