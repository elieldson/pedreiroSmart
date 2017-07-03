<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>.....</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body data-spy="scroll" data-target="efeito-menu-navegacao">

<header id="inicio">
	<div id="efeito-menu-navegacao">
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
					<ul class="nav navbar-nav navbar-right text-uppercase" role="tablist">
						<li><a href="#home">Home</a></li>
						<li><a href="#quemSomos">Quem Somos</a></li>
						<li><a href="#comFunciona">Como Funciona</a></li>
						<li><a href="#vantagens">Vantagens</a></li>
						<li><a href="#recursos">Recursos</a></li>
						<li><a href="#suporte">Suporte</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	
</header>



<section id="home">
<div id="carousel-example-generic" class="carousel slide text-center"  data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/slider02.svg" alt="AI">
      <div class="carousel-caption texto-slider">
		  <h2 class="text-left titulo-slider"><b>Contrate o pedreiro smart mais qualificado!</b></h2>
		  <p class="text-left p-slider">Veja as habilidades, qualificações e avaliações do seu Pedreiro Smart.</p>
      </div>
    </div>
    <div class="item">
      <img src="img/slider01.svg" alt="marketing">
      <div class="carousel-caption  texto-slider">
          <h2 class="text-left titulo-slider"><b>Localize profissionais em sua Região!</b></h2>
		  <p class="text-left p-slider">Encontre os profissionais mais próximos à você com nossa <b>tecnologia de geolocalização</b>.</p>
      </div>
    </div>
    
	<div class="item">
      <img src="img/slider02.svg" alt="marketing">
      <div class="carousel-caption  texto-slider">
          <h2 class="text-left titulo-slider"><b>Encontre Obras Sem Sair de Casa</b></h2>
		  <p class="text-left p-slider">Ofereça seus serviços para os contratantes, leia os requisitos da obra de ofereça a solução</p>
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
</section>


<section class="container" id="quemSomos" data-offset="500px">
	
	<h2 class="text-center">O que é Pedreiro Smart</h2>
	
	<div class="row">
	
	<div class="col-xs-12 col-sm-6">
  		<img src="img/img1.jpg" alt="" class="img-responsive">
  	</div>
  
  <div class="col-xs-12 col-sm-6">
  	<p>Somos a plataforma que agiliza o encontro do pedreiro e o contratante, de acordo com sua necessidade você encontra os profissionais mais qualificados próximos à você..</p>
  </div>
  
</div>
<p>
 <a href="cadastro.php"><button type="button" class="btn btn-primary">Cadastro</button></a>
  <a href="login.php"><button type="button" class="btn btn-warning">Login</button></a>
</p>
</section>


	<hr>

<section class="container" id="comFunciona">
	
	<h2>Como Funciona?</h2>
	
<div class="row">
 
  
  <div class="col-xs-12 col-sm-6">
    
    <h3>Selecione a categoria:</h3>
  	<p>Filtre a categoria do serviço que você precisa: Contrução, Reformas, Trocas ou Instalação.</p>
  	
  	<h3>Descreva sua necessidade:</h3>
  	<p>Conte exatamente o que precisa para que os profissionais possa oferecer o serviço.</p>
  	
  	<h3>Escolha o Profissional:</h3>
  	<p>Após dizer o que precisa será exibida uma lista de profissionais com a qualificação necessária próximos à você e você seleciona o melhor.</p>
  	
  	
  </div>
  
  <div class="col-xs-12 col-sm-6">
  	<img src="img/img1.jpg" alt="" class="img-responsive">
  </div>
  
</div>

</section>

	<hr>
	
<section class="container" id="vantagens">
	
	<h2>Vantagens</h2>
	
<div class="row">
 
  <div class="col-xs-12 col-sm-4">
      
  	<img src="img/vantagens-icone-01.svg" alt="" class="img-responsive icone-vantagens">
  	    <h3>Pedreiros Avaliados:</h3>
  		<p>Temos um sistema de avaliação onde o cliente avalia o pedreiro após o termino da obra, assim você decide os melhores pedreiros Smart.</p>
  </div>
 
  <div class="col-xs-12 col-sm-4">
  	<img src="img/vantagens-icone-02.svg" alt="" class="img-responsive icone-vantagens">
  	    <h3>Veja as qualificações técnicas:</h3>
  		<p>Antes de contratar o pedreiro, saiba suas principais habilidades, disponibilizamos o perfil do profissional contando com o campo de qualificações profissionais.</p>
  </div>
 
  <div class="col-xs-12 col-sm-4">
  	<img src="img/vantagens-icone-03.svg" alt="" class="img-responsive icone-vantagens">
  	    <h3>Deixe sua obra em oferta:</h3>
  		<p>Oferte sua obra e deixe que os pedreiros qualificados te ofereça soluções profissionais.</p>
  </div>
    
</div>

	<div class="text-center">
	  <a href="cadastro.php"><button type="button" class="btn btn-warning btn-lg">Cadastre-se</button></a>
	</div>
	
</section>

	<hr>

<section class="jumbotron" id="recursos">
<h2 class="text-center">Recursos</h2>
	<div class="text-center">
		<img src="img/vantagens-icone-01.svg" alt="..." class="img-circle icone-recursos">
		<img src="img/vantagens-icone-02.svg" alt="..." class="img-circle icone-recursos">
		<img src="img/vantagens-icone-03.svg" alt="..." class="img-circle icone-recursos">
		<img src="img/vantagens-icone-01.svg" alt="..." class="img-circle icone-recursos">
	</div>
	
	<div class="text-center">
 		<a href="cadastro.php"><button type="button" class="btn btn-primary">Cadastro</button></a>
  		<a href="login.php"><button type="button" class="btn btn-warning">Login</button></a>
	</div>
	
</section>

<section class="container" id="suporte">
		<h2 class="text-center">Entre em contato conosco</h2>
		
	<form method="post" action="#">
			<div class="form-group">
				<label for="nome">Nome:</label>

				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
						<input type="text" placeholder="nome completo" id="nome" required class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
						<input type="email" id="email" class="form-control" placeholder="e-mail válido">
				</div>
			</div>

			<div class="form-group">
				<label for="tel">Telefone</label>
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></div>
						<input type="tel" id="fone" placeholder="DDD + fone" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label for="msg">Mensagem</label>
				<textarea id="msg" placeholder="Dúvidas críticas ou sugestões" class="form-control" rows="5"></textarea>
			</div>

			<button type="submit" class="btn btn-warning btn-lg">Enviar</button>	
	</form>
</section>

<footer class="container-fluid">
	 <div class="col-sm-12 col-lg-6 text-center pt-2 pb-4 c-pedreiro-smart">
	   <p class="">© 2017 Pedreiro Smart | Encontre o Pedreiro Smart Mais Próximo</p>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/cep.js"></script>
<script>
	//var offset = 91;
	$('body').scrollspy({ 
		target: '#efeito-menu-navegacao',
		offset: 150
	})
	
	$('[data-spy="scroll"]').each(function () {
	  var $spy = $(this).scrollspy('refresh')
	})
    
    
</script>
</body>
</html>