<?php
include("conexao.php");
?>
<div>
	<div class="center">
		<form method="POST" >
			<input required type="text" name="nome" value="<?=$nome ?>" placeholder="Nome..." >
			<div></div>
			<input required type="text" name="email" value="<?=$email ?>"  placeholder="E-mail.." >
			<div></div>
			<textarea required placeholder="Sua mensagem..." name="msg"><?=$msg ?></textarea>
			<div></div>
			<input type="submit" name="acao" value="Enviar">
		</form>
		<div class="mensagem">
			<?=$mensagem?>
		</div>
	</div><!--center-->
</div><!--contato-container-->