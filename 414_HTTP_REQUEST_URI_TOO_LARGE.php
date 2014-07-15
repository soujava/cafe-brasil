<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h2>HTTP 414</h2>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 414</li>
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
				<h2><strong>414<strong></h2>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
				    <h3 >URL excede limite!</h3>
				    <h4>O tamanho do endere&ccedil;o (URL) excede a capacidade limite desse servidor. A requisi&ccedil;&atilde;o n&atilde;o pode ser processada.</h4>
			    <?php } else { ?>
				    <h3 >Submitted URI too large!</h3>
				    <h4>The length of the requested URL exceeds the capacity limit for this server. The request cannot be processed.</h4>
			    <?php } ?>

			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>
