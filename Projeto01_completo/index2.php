<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<script src="https://kit.fontawesome.com/ac3ebf4168.js" crossorigin="anonymous"></script>
	
	
	<link href="estilos/style.css" rel="stylesheet"/>
	
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--tag para site responsivo-->
	<meta name="description" content="Descrição do meu web site"> <!--para o google encontrar o site-->
	<meta name="keywords" content="palavras-chave,do,meu,site">
	
</head>

<body>
		
	<!--iniciar a marcação do menu do site-->
	<header>
		<div class="center">
		<div class="logo left">Logomarca</div> <!--logo-->
		<nav class="desktop right"> <!--site será responsivo-->
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="./upload/arquivos.php">Serviços</a></li>
				<li><a href="./pages/contato.php">Contato</a></li>
			</ul>
		</nav>
		
		<nav class="mobile right"> <!--site será responsivo-->
		<div class="botao-menu-mobile">
			 	<i class="fa fa-bars" aria-hidden="true"></i>
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="./upload/arquivos.php">Serviços</a></li>
				<li><a href="./pages/contato.php">Contato</a></li>
			</ul>
		</nav>
		<div class="clear"></div>
		</div><!--center-->
	</header>
	
	<!--banner-->
	<section class="banner-principal">
		<div class="overlay"></div>
		<div class="center">
		<!--formulario onde o usuario vai colocar o email-->
		<form>
			<h2>Faça seu Login</h2>
			<input type="email" name="e-mail" required/>
			<h2>Sua senha</h2>
			<input type="password" name="senha" required/>
			<input type="submit" name="acao" value="Logar"/>
		</form>
		</div>
	</section>
	
	<!--descrição do autor-->
	<section class="descrição-autor">
		<div class="center">
		<div class="w50 left"> <!--vai pegar 50% da largura da tela-->
		<h2>Naira Arruda</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div><!--w50-->
		
		<div class="w50 left">
			<!--imagem-->
			<img src="imagens/naira.png"/>
		</div>
		</div><!--center-->
		<div class="clear"></div> <!--limpar toda flutuacao da pagina-->

	</section>
	
	<section class="especialidades"> <!--especialidades-->
		<div class="center"> 
		<h2 class="title">Especialidades</h2>
		
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-css3"></i></h3>
				<h3>CSS3</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div><!--box-especialidades-->
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-html5"></i></h3>
				<h3>HTML5</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div><!--box-especialidades-->
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-js"></i></h3>
				<h3>JavaScript</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div><!--box-especialidades-->
	</section><!--especialidades-->

	<section class="extras">
		<div class="center">
			<div class="w50 left">
				<h2 class="title">Depoimentos</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="nome-autor">João Da Silva</p>
				</div>
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="nome-autor">Jorge Da Silva</p>
				</div>
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="nome-autor">José Da Silva</p>
				</div>
			</div><!--W50-->
			<div class="w50 left">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
				</ul>
			</div><!--servicos-->
			</div><!--W50-->
			<div class="center"></div>
		</div><!--center-->

	</section><!--extras-->
	<footer>
	<div class="center">
		<p>Todos os direitos reservados</p>
	</div><!--centere--> 
	</footer>


</body>
</html>
