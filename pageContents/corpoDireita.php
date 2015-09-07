<?php
echo '
	<fieldset class="texto">
		<h3>Nos envie um e-mail</h3>
		<form class="formEmail" autocomplete="off">
			<p>
				<label for="nome">Nome:</label><br>
				<input type="text" class="field nome" maxlength="20" required>
			</p><p>
				<label for="email">E-mail:</label><br>
				<input type="email" class="field email" maxlength="100" required placeholder="nome@exemplo.com">
			</p><p>
				<label for="confirmaEmail">Confirme o e-mail:</label><br>
				<input type="email" class="field confirmaEmail" maxlength="100" required placeholder="nome@exemplo.com">
			</p><p>
				<label for="assunto">Assunto:</label><br>
				<select class="assunto" name="assunto">
					<option value="Dúvida">Dúvida</option>
					<option value="Orçamento">Orçamento</option>
					<option value="Sugestão">Sugestão</option>
				</select>
			</p><p>
				<label for="mensagem">Mensagem:</label><br>
				<textarea rows="5" class="mensagem" placeholder="Digite sua mensagem aqui." required></textarea>
			</p>
			<span class="entrelinha">* Todos os campos são obrigatórios.</span><br>
			<button class="buttonSender">Enviar E-mail</button>
		</form>
	</fieldset>
';
?>