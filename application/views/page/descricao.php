<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FastAndSteady</title>
	<link rel="stylesheet" href="<?=base_url("css/bootstrap.min.css");?>">
	<link rel="stylesheet" href="<?=base_url("css/main.css");?>">
	<script src="<?=base_url('js/jquery.min.js') ?>"></script>
	<script src="<?=base_url('js/bootstrap.min.js') ?>"></script>
</head>
<body>
	<?=$this->load->view('shared/header') ?>
	<div class="col-md-8 descricao__">
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
				<li data-target="#carousel" data-slide-to="3"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active descricao__fotos">
					<a href="javascript:void(0)"><img class="img-responsive" src="https://i.ytimg.com/vi/0JXJsHPcEWc/maxresdefault.jpg" alt="Jogos"></a>
				</div>

				<div class="item descricao__fotos">
					<a href="javascript:void(0)"><img class="img-responsive" src="http://s1.dmcdn.net/ALPrU/1280x720-iEH.jpg" alt="Filmes"></a>
				</div>

				<div class="item descricao__fotos">
					<a href="javascript:void(0)"><img class="img-responsive" src="http://i.ytimg.com/vi/7OuUA8XHIdQ/maxresdefault.jpg" alt="Softwares"></a>
				</div>

				<div class="item descricao__fotos">
					<a href="javascript:void(0)"><img class="img-responsive" src="http://image.tmdb.org/t/p/w1560/19YrVW557AoZOd6vQ8pg4HPF8uh.jpg" alt="Softwares"></a>
				</div>
			</div>

			<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<div class="panel panel-primary descricao__">
			<div class="panel-heading">
				<p>E.T o Extraterrestre
					<!--<span class="label label-acao">Ação</span>
					<span class="label label-animacao">Animação</span>
					<span class="label label-aventura">Aventura</span>
					<span class="label label-comedia">Comédia</span>
					<span class="label label-comediaR">Comédia Romântica</span>
					<span class="label label-cult">Cult</span>-->
					<span class="label label-drama">Drama</span>
					<!--<span class="label label-espionagem">Espionagem</span>
					<span class="label label-erotico">Erótico</span>
					<span class="label label-fantasia">Fantasia</span>
					<span class="label label-faroeste">Faroeste</span>-->
					<span class="label label-ficC">Ficção científica</span>
					<!--<span class="label label-guerra">Guerra</span>
					<span class="label label-musical">Musical</span>
					<span class="label label-policial">Policial</span>
					<span class="label label-romance">Romance</span>
					<span class="label label-suspense">Suspense</span>
					<span class="label label-terror">Terror</span>
					<span class="label label-trash">Trash</span>-->
				</p>
			</div>
			<div class="descricao__txt panel-body text-justify" style="margin-bottom:10px;">
				No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. <br>
				Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.
				Todos as descrições das pessoas são sobre a humanidade do atendimento, a pessoa pega no pulso, examina, olha com carinho. 
				Então eu acho que vai ter outra coisa, que os médicos cubanos trouxeram pro brasil, um alto grau de humanidade.
				Eu dou dinheiro pra minha filha. Eu dou dinheiro pra ela viajar, então é... é... <br>
				Já vivi muito sem dinheiro, já vivi muito com dinheiro. 
				-Jornalista: Coloca esse dinheiro na poupança que a senhora ganha R$10 mil por mês. 
				-Dilma: O que que é R$10 mil?
				Primeiro eu queria cumprimentar os internautas. 
				-Oi Internautas! Depois dizer que o meio ambiente é sem dúvida nenhuma uma ameaça ao desenvolvimento sustentável. <br>
				E isso significa que é uma ameaça pro futuro do nosso planeta e dos nossos países. 
				O desemprego beira 20%, ou seja, 1 em cada 4 portugueses.
			</div>
			<div class="panel-footer">
				<button class="btn btn-primary btn-block btn-lg"><span class="glyphicon glyphicon-download"></span> Baixar</button>
			</div>
		</div>
	</div>

	<div class="col-md-2 descricao__">
		<div class="col-md-12 text-center descricao__relacionados">
			<h4><span class="glyphicon glyphicon-star"></span> Relacionados</h4>
		</div>
		<div>
			<?php for ($i=0; $i < 3; $i++) { ?>
			<div class="col-md-12 thumbnail box__">
				<a href=""><img data-toggle="tooltip" data-placement="top" title="E.T O Extraterrestre" class="img-responsive" src="http://br.web.img1.acsta.net/medias/nmedia/18/95/16/34/20384584.jpg" alt="E.T o Extraterrestre"></a>
				<div class="col-md-12 footer text-center">
					<div class="col-md-2">
						<span class="glyphicon glyphicon-download"></span>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>

	<div class="col-md-2">
		<?php for ($i=0; $i < 5; $i++) { ?>
		<div style="margin-top:2px;">
			<a href="javascript:void(0)">
				<img class="img-responsive" src="<?=base_url('images/propaganda.jpg') ?>">
			</a>
		</div>
		<?php } ?>
	</div>

	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})

		$('.carousel').carousel({
			interval: 3000
		})
	</script>
</body>
</html>
