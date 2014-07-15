<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h2>HTTP 415</h2>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 415</li>
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
				<h2><strong>415<strong></h2>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
				    <h3 >Tipo de media n&atilde;o suportado!</h3>
				    <h4>O servidor n&atilde;o suporta o tipo de m&iacute;dia transmitida nesta requisi&ccedil;&atilde;o.</h4>
			    <?php } else { ?>
				    <h3 >Unsupported media type!</h3>
				    <h4>The server does not support the media type transmitted in the request.</h4>
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>
