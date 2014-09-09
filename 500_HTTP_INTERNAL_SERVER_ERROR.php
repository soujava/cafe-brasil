<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h2>HTTP 500</h2>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 500</li>
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
				<h2><strong>500<strong></h2>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
			        <h3 >Erro interno do Servidor!</h3>
			        <h4>O servidor encontrou um erro interno e n&atilde;o foi poss&iacute;vel completar sua requisi&ccedil;&atilde;o.</h4>
			        <p>O servidor est&aacute; sobrecarregado ou existe um erro em um script CGI.</p>    
			    <?php } else { ?>
			        <h3 >Server error!</h3>
			        <h4>The server encountered an internal error and was unable to complete your request.</h4>
			        <p>Either the server is overloaded or there was an error in a CGI script.</p>    
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>
