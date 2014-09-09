<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h2>HTTP 413</h2>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 413</li>
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
				<h2><strong>413<strong></h2>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
				    <h3 >Volume de dados muito grande!</h3>
				    <h4>O m&eacute;todo n&atilde;o permite a transmiss&atilde;o dos dados, ou o volume de dados excede a capacidade limite.</h4>
			    <?php } else { ?>
				    <h3 >Request entity too large!</h3>
				    <h4>The  method does not allow the data transmitted, or the data volume exceeds the capacity limit.</h4>
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>

