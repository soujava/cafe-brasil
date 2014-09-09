<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h2>HTTP 403</h2>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 403</li>
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
				<h2><strong>403<strong></h2>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
				    <h3 >Acesso Proibido!</h3>
			        <h4>Voc&ecirc; n&atilde;o tem premiss&atilde;o para acessar o objeto requisitado. </h4>
			        <p>Ele pode estar protegido contra leitura ou n&atilde;o ser leg&iacute;vel pelo servidor.</p>    
			    <?php } else { ?>
				    <h3 >Access forbidden!</h3>
				    <h4>You don't have permission to access the requested object.</h4>
			        <p>It is either read-protected or not readable by the server.</p>    
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>

