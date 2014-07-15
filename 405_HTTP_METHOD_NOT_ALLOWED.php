<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h2>HTTP 405</h2>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 405</li>
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
				<h2><strong>405<strong></h2>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
				    <h3 >M&eacute;todo n&atilde;o permitido! </h3>
				    <h4>O m&eacute;todo n&atilde;o &eacute; permitido para a URL requisitada.</h4>
			    <?php } else { ?>
				    <h3 >Method not allowed! </h3>
				    <h4>The method is not allowed for the requested URL.</h24
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>



