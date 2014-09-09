<?php include("inc_header.php"); ?>
<?php include("inc_lang_detect.php"); ?>


				<!-- Inner Page Error -->
				<div class="container">
					<div class="inner-error">
						<h3><strong>HTTP 400<strong></h3>
						<?php if (getDefaultLanguage() == "pt-br") { ?>
							<h3>Requisi&ccedil;&atilde;o Inv&aacute;lida!</h3>
							<p>O seu navegador (ou servidor proxy) enviou uma requisi&ccedil;&atilde;o inv&aacute;lida ao servidor.</p>
						<?php } else { ?>
							<h3>Bad request!</h3>
							<p>Your browser (or proxy) sent a request that this server could not understand.</p>
						<?php } ?>
					</div>
				</div>
				
			</div>
			<!-- Inner Page Content End -->			
<?php include("inc_footer.php"); ?>
