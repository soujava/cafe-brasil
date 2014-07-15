<?php include("inc_header.php"); ?>
<?php include("inc_lang_detect.php"); ?>


				<!-- Inner Page Error -->
				<div class="container">
					<div class="inner-error">
						<h3><strong>HTTP 401<strong></h3>
						<?php if (getDefaultLanguage() == "pt-br") { ?>
							<h3 >Autentica&ccedil;&atilde;o Requerida!</h3>
							<p>Este servidor n&atilde;o p&ocirc;de autorizar o seu acesso &agrave; esta URL.</p>
							<p>Voc&ecirc; deve ter fornecido dados incorretos (ex. senha errada), ou o seu navegador n&atilde;o forneceu as credenciais necess&aacute;rias.</p>    
							<p>Caso realmente possua permiss&atilde;o de acesso a este item, verifique seu login e senha e fa&ccedil;a uma nova tentativa.</p>
						<?php } else { ?>
							<h1 >Authentication required!</h3>
							<p>This server could not verify that you are authorized to access this URL.</p>
							<p>You either supplied the wrong credentials (e.g., bad password), or your browser doesn't understand how to supply the credentials required.</p>    
							<p>In case you are allowed to request the document, please check your user-id and password and try again.</p>
						<?php } ?>
					</div>
				</div>
				
			</div>
			<!-- Inner Page Content End -->			
<?php include("inc_footer.php"); ?>



