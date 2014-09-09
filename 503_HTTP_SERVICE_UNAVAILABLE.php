<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h2>HTTP 503</h2>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 503</li>
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
				<h2><strong>503<strong></h2>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
			        <h3 >Servi&ccedil;o indispon&iacute;vel!</h3>
			        <h4>Por favor, tente acessar mais tarde.</h4>
			        <p>O servidor est&aacute; temporariamente fora de servi&ccedil;o para manuten&ccedil;&atilde;o ou devido a problemas de capacidade.</p>    
			    <?php } else { ?>
			        <h3 >Service unavailable!</h3>
			        <h4>Please try again later.</h4>
			        <p>The server is temporarily unable to service your request due to maintenance downtime or capacity problems.</p>    
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>
