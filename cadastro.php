!<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>.....</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<header id="inicio">
	<nav class="navbar navbar-default  navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacao" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
				<a class="navbar-brand" href="#inicio"><img src="img/logo.svg" alt="" id="logo"></a>
			</div>

			<div class="collapse navbar-collapse" id="navegacao">
				<ul class="nav navbar-nav navbar-right text-uppercase" >
					<li><a href="">Home</a></li>
					<li><a href="">Quem Somos</a></li>
					<li><a href="">Suporte</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
</header>



<div class="container">


  
        <form action="" method="post" id="form-inserir" name="form-inserir" class="form-signin form-login ">

                <label for="nome">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" required>


                <label for="cpf">CPF:</label>
                <input class="form-control" type="number" id="cpf" name="cpf" required>


                <label for="usuario">Usuário:</label>
                <input class="form-control" type="text" id="usuario" name="usuario" required>


                <label for="email">E-mail:</label>
                <input class="form-control" type="email" id="email" name="email" required>


                <label for="senha">Senha:</label>
                <input class="form-control" type="password" id="senha" name="senha" required>


                <label for="tel">Telefone:</label>
                <input class="form-control" type="number" id="tel" name="tel" required>

                <label>Cep:</label>
                <input name="cep" type="number" id="cep" value="" size="10" maxlength="9" class="form-control" id="recipient-name"/>

                <label>Rua:</label>
                <input name="rua" type="text" id="rua" size="60" class="form-control" id="recipient-name"/>

                <label>Número:</label>
                <input name="numerocasa" type="number" id="numero" size="5" class="form-control" id="recipient-name"/>

                <label>Bairro:</label>
                <input name="bairro" type="text" id="bairro" size="40"class="form-control" id="recipient-name" />

                <label>Cidade:</label>
                <input name="cidade" type="text" id="cidade" size="40"class="form-control" id="recipient-name" />

                <label>Estado:</label>
                <input name="uf" type="text" id="uf" size="2" class="form-control" id="recipient-name"/>

            

                <p>
                    <button class="btn" id="inserir" name="inserir">Inserir usuário</button>
                </p>
    </form>
    
       
</div> <!-- /container -->

<?php 
    if(isset($_POST["inserir"]) ){
        require_once("config/Usuario.php");
        $usuario = new Usuario();
        $usuario->setNome($_POST["nome"]);
        $usuario->setCpf($_POST["cpf"]);
        $usuario->setUsuario($_POST["usuario"]);
        $usuario->setEmail($_POST["email"]);
        $usuario->setSenha($_POST["senha"]);
        $usuario->setTel($_POST["tel"]);
        $usuario->setCep($_POST["cep"]);
        $usuario->setNumerocasa($_POST["numerocasa"]);
        $usuario->inseriCadastro();
        
        header("location:login.php");
    }
?>

<footer class="container-fluid">
	
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/cep.js"></script>
</body>
</html>