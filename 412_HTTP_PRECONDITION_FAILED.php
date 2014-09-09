<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h2>HTTP 412</h2>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 412</li>
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
				<h2><strong>412<strong></h2>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
				    <h3 >Objeto n&atilde;o encontrado!</h3>
				    <h4>A URL requisitada n&atilde;o foi encontrada neste servidor.</h4>
				    <p>Se o endere&ccedil;o (URL) foi digitado manualmente, pedimos a gentileza de verificar novamente a sintaxe do endere&ccedil;o.</p>
			    <?php } else { ?>
				    <h3 >Object not found!</h3>
				    <h4>The requested URL was not found on this server.</h4>
				    <p>If you entered the URL manually please check your spelling and try again.</p>
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>

<?php include("_top.php"); ?>

	<?php if (getDefaultLanguage() == "pt-br") { ?>
	    <h3 >Falha de precondi&ccedil;&atilde;o!</h3>
	    <h4>A condi&ccedil;&atilde;o necess&aacute;ria para a requisi&ccedil;&atilde;o da URL foi avaliada como falsa.</h4>
    <?php } else { ?>
	    <h3 >Precondition failed!</h3>
	    <h4>The precondition on the request for the URL failed positive evaluation.</h4>
    <?php } ?>

<?php include("_bottom.php"); ?>

