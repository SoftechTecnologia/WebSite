<?php
echo '
	<fieldset class="texto">
		<h3>Nos envie um e-mail</h3>
		<form class="formEmail" method="POST" autocomplete="off">
			<p>
				<label for="nome">Nome:</label><br>
				<input type="text" id="nome" name="nome" class="field" maxlength="20" required>
			</p><p>
				<label for="email">E-mail:</label><br>
				<input type="email" id="email" name="email" class="field" onkeyup="verificaEmail()" maxlength="100" required placeholder="nome@exemplo.com">
			</p><p>
				<label for="confirmaEmail">Confirme o e-mail:</label><br>
				<input type="email" id="confirmaEmail" class="field" onkeyup="verificaEmail()" maxlength="100" required placeholder="nome@exemplo.com">
			</p><p>
				<label for="assunto">Assunto:</label><br>
				<select id="assunto" name="assunto">
					<option value="Dúvida">Dúvida</option>
					<option value="Orçamento">Orçamento</option>
					<option value="Sugestão">Sugestão</option>
				</select>
			</p><p>
				<label for="mensagem">Mensagem:</label><br>
				<textarea rows="5" id="mensagem" name="mensagem" placeholder="Digite sua mensagem aqui." required></textarea>
			</p>
			<span class="entrelinha">* Todos os campos são obrigatórios.</span><br>
			<input type="submit" name="buttonSender" class="buttonSender" onclick="enviarEmail()" value="Enviar E-mail">
		</form>
	</fieldset>
';
?>