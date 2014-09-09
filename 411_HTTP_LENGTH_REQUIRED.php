<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h4>HTTP 411</h4>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 411</li>
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
				<h4><strong>411<strong></h4>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
				    <h3 >Content-Length Inv&aacute;lido!</h3>
				    <h4>Uma requisi&ccedil;&atilde;o do m&eacute;todo requer um cabe&ccedil;alho <code>Content-Length</code> v&aacute;lido.</h4>
			    <?php } else { ?>
				    <h3 >Bad Content-Length!</h3>
				    <h4>A request with the method requires a valid <code>Content-Length</code> header.</h4>
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>

