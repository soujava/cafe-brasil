<?php include("__header.php"); ?>
<?php include("__lang_detect.php"); ?>

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="span4">
				<div class="inner-heading">
					<h4>HTTP 410</h4>
				</div>
			</div>
			<div class="span8">
				<ul class="breadcrumb">
					<li><a href="/"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">HTTP 410</li>
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
				<h4><strong>410<strong></h4>
				<?php if (getDefaultLanguage() == "pt-br") { ?>
				    <h3 >Recurso n&atilde;o dispon&iacute;vel!</h3>
			        <h4>A URL solicitada n&atilde;o est&aacute; mais dispon&iacute;vel neste servidor e n&atilde;o existe um endere&ccedil;o alternativo.</h4>
			        <p>Se voc&ecirc; seguiu um "link" de uma p&aacute;gina externa, por favor entre em contato com o autor da p&aacute;gina e o informe sobre a mudan&ccedil;a do "link".</p>    
			    <?php } else { ?>
				    <h3 >Resource is no longer available!</h3>
				    <h4>The requested URL is no longer available on this server and there is no forwarding address.</h4>
			        <p>If you followed a link from a foreign page, please contact the author of this page.</p>    
			    <?php } ?>
			</div>
		</div>
	</div>
	</section>
<?php include("__footer.php"); ?>



