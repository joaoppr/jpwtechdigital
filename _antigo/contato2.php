		<div id="section-contact" class="page-section">

			<div class="container clearfix">
				<div class="divcenter center mb-5" style="max-width: 900px;">
					<h2 class="nobottommargin t300 ls1">Faça seu Orçamento</h2>
					<div class="divider divider-center"><i class="icon-cloud"></i></div>
				</div>
					
				<div class="divcenter topmargin" style="max-width: 850px;">							

					<div class="contact-widget">


						<form action="" method="post" name="email">

							<div class="col_half">
								<input type="text" id="name" name="name" value="" class="sm-form-control border-form-control required" placeholder="Nome Completo" />
							</div>
							<div class="col_half col_last">
								<input type="email" id="email_from" name="email_from" value="" class="required email sm-form-control border-form-control" placeholder="E-mail de Contato" />
							</div>

							<div class="clear"></div>

							<div class="col_one_third">
								<input type="text" id="phone" name="phone" value="" class="sm-form-control border-form-control" placeholder="Telefone/Celular" />
							</div>

							<div class="col_one_third">
								<select name="services" id="services" class="sm-form-control border-form-control">
									<option disabled selected>Selecione um serviço</option>
									<option value="desenvolvimento-sites">Desenvolvimento de Sites</option>
									<option value="otimizacao-sites">Otimização de Sites S.E.O</option>
									<option value="campanha-google">Campanha Google Ads</option>
									<option value="marketing-conteudo">Marketing de Conteúdo</option>
									<option value="registro-dominio">Registro de Domínios</option>
									<option value="outros">Outros</option>
								</select>
							</div>

							<div class="col_one_third col_last">
								<select name="reference" id="reference" class="sm-form-control border-form-control">
									<option disabled selected>Como nos conheceu?</option>
									<option value="google">Google</option>
									<option value="indicacao">Indicação</option>
									<option value="outros-sites">Outros sites</option>
									<option value="outros-meios">Outros meios</option>
								</select>
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<input type="text" id="subject" name="subject" value="" class="required sm-form-control border-form-control" placeholder="Assunto" />
							</div>

							<div class="clear"></div>

							<div class="col_full">
								<textarea class="required sm-form-control border-form-control" id="message" name="message" rows="5" cols="30" placeholder="Digite sua mensagem"></textarea>
							</div>

							<div class="col_full center">
								<button class="button button-border button-circle t500 noleftmargin topmargin-sm" type="submit" id="enviar" name="enviar">Enviar Mensagem</button>
								<br>
								<small style="display: block; font-size: 13px; margin-top: 15px;">Faremos o possível para retornar a você dentro de 6 a 8 horas úteis.</small>
							</div>

							<div class="clear"></div>

							<div class="col_full hidden">
								<input type="text" id="botcheck" name="botcheck" value="" class="sm-form-control" />
							</div>

						</form>






              <?php
              $data = date('d-m-Y H:i');
              if(isset($_POST['enviar'])){
              //pego os dados enviados pelo formulario
              $nome = stripslashes(trim($_POST["name"]));
              $subject = stripslashes(trim($_POST["subject"]));
              $mensagem = stripslashes(trim($_POST["message"]));
              $services = stripslashes(trim($_POST["services"]));
              $reference = stripslashes(trim($_POST["reference"]));
              $phone = stripslashes(trim($_POST["phone"]));
              $assunto = utf8_decode('E-mail '.$site_name.' - ').$subject;
              $email_from = $_POST["email_from"];
              //formato o campo da mensagem
              $mensagem = wordwrap( $mensagem, 50, "
              ", 1);
              $arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;
              if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){
              $fp = fopen($_FILES["arquivo"]["tmp_name"],"rb");
              $anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"]));
              $anexo = base64_encode($anexo);
              fclose($fp);
              $anexo = chunk_split($anexo);
              $boundary = "XYZ-" . date("dmYis") . "-ZYX";
              $mens = "--$boundary\n";
              $mens .= "Content-Transfer-Encoding: 8bits\n";
              $mens .= "Content-Type: text/html; charset=\"utf-8\"\n\n"; //plain
              $mens .= "
              Nome: <b>$nome</b><br/><br/>
              E-mail: <b>$email_from</b><br/><br/>
              Assunto: <b>$subject</b><br/><br/>
              Telefone: <b>$phone</b><br/><br/>
              Serviço: <b>$services</b><br/><br/>
              Referência: <b>$reference</b><br/><br/>
              Mensagem: <b>$mensagem</b><br/><br/>
              Data: <b>$data</b>\n";
              $mens .= "--$boundary\n";
              $mens .= "Content-Type: ".$arquivo["type"]."\n";
              $mens .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";
              $mens .= "Content-Transfer-Encoding: base64\n\n";
              $mens .= "$anexo\n";
              $mens .= "--$boundary--\r\n";
              $headers = "MIME-Version: 1.0\n";
              $headers .= "From: \"$nome\" <$email_from>\r\n";
              $headers .= "Return-Path: $email_from\r\n"; // return-path
              $headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
              $headers .= "$boundary\n";
              //envio o email com o anexo
              mail($email,$assunto,$mens,$headers);
              echo"<div class='alert alert-success' style='margin:1em 0;'><h4>O e-mail foi encaminhado com sucesso. Respondemos em breve.</div>";
              }
              //se não tiver anexo
              else{
              $headers = "MIME-Version: 1.0\r\n";
              $headers .= "Content-type: text/html; charset=utf-8\r\n";
              $headers .= "From: \"$nome\" <$email_from>\r\n";
              $mensagem = "
              Nome: <b>$nome</b><br/><br/>
              E-mail: <b>$email_from</b><br/><br/>
              Assunto: <b>$subject</b><br/><br/>
              Telefone: <b>$phone</b><br/><br/>
              Serviço: <b>$services</b><br/><br/>
              Referência: <b>$reference</b><br/><br/>
              Mensagem: <b>$mensagem</b><br/><br/>
              Data: <b>$data</b>\n";
              //envia o email sem anexo
              mail($email,$assunto,$mensagem, $headers);
              echo"<div class='alert alert-success' style='margin:1em 0;'><h4>O e-mail foi encaminhado com sucesso. Respondemos em breve.</div>";
              }
            }
            ?>

					</div>

				</div>

			</div>

		</div>