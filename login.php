<?php

$acessoProibido = isset($_GET["acesso_proibido"]) ? true : false;
$naoEncontrado = isset($_GET["nao_encontrado"]) ? true : false;
$logout = isset($_GET["logout"]) ? true : false;


    
?>
<!DOCTYPE html>
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
      

      <form class="form-signin form-login" method="post">
        <h2 class="form-signin-heading form-signin-cabecalho text-center">Login: Pedreiro Smart</h2>
        <label class="control-label" for="user_email">Endereço de E-mail:</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus name="email">
        
        <label class="control-label controle-label" for="user_email">Senha:</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="senha">
        
        <div class="checkbox checarbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembre-me
          </label>
        </div>
        <p><a href="#">Esqueceu a Senha? Clique Aqui</a></p>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="entrar">Entrar</button>
      </form>
        
        <?php if( $acessoProibido ){ ?>
            <h3 class="mensagem-login text-center">Você deve logar primeiro!</h3>
        <?php } ?>

        <?php if( $naoEncontrado ){ ?>
            <h3 class="mensagem-login text-center">Usuário/Senha não encontrado</h3>
        <?php } ?>
           
        <?php if( $logout ){ ?>
            <h3 class="mensagem-login-saiu text-center">
                Você saiu do sistema! Esperamos seu retorno em breve.
            </h3>
        <?php } ?>
                
            
<?php

if(isset($_POST["entrar"]) ){
   
    
    if(!empty($_POST["email"]) && !empty($_POST["senha"]) ){

       require_once("config/Usuario.php");
        $usuario = new Usuario();

        $usuario->setEmail($_POST["email"]);
        $usuario->setSenha($_POST["senha"]);

        $resultado = $usuario->verificaUsuario();
        $linha = $resultado->num_rows;

            if( $linha == 1 ){
                
                $dados = $resultado->fetch_assoc();
                
                require_once("config/ControleDeAcesso.php");
                $controleDeAcesso = new ControleDeAcesso();
                
                $controleDeAcesso->login($dados['id'], $dados['nome'], $dados['usuario']);
                
                header("location:admin/feed.php");
            }else{
                header("location:login.php?nao_encontrado");
            }

    }    
}
?>


</div> <!-- /container -->




<footer class="container-fluid">
	
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>