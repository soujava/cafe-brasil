<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h4>HTTP 408</h4>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 408</li>
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
				<h4><strong>408<strong></h4>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
				    <h3 >Tempo excedido!</h3>
				    <h4>O servidor encerrou a conex&atilde;o porque o navegador n&atilde;o finalizou a requisi&ccedil;&atilde;o dentro do tempo limite.</h4>
			    <?php } else { ?>
				    <h3 >Request time-out!</h3>
				    <h4>The server closed the network connection because the browser didn't finish the request within the specified time.</h4>
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>




