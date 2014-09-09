<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h2>HTTP 506</h2>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 506</li>
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
				<h2><strong>506<strong></h2>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
			        <h3 >Variante auto-negoci&aacute;vel!</h3>
			        <h4>N&atilde;o &eacute; poss&iacute;vel acessar.</h4>
			        <p>Uma variante da entidade de requisi&ccedil;&atilde;o &eacute; por si mesma um recurso negoci&aacute;vel.</p> 
			    <?php } else { ?>
			        <h3 >Variant also varies!</h3>
			        <h4>Access not possible.</h4>
			        <p>A variant for the requested entity is itself a negotiable resource.</p>    
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>

