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
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
				A sit voluptatibus quis, perspiciatis delectus maiores ratione 
				soluta sequi repudiandae aliquid consequuntur laborum dolore pariatur maxime quibusdam ducimus odio eius, eveniet.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quia quam ad dignissimos laudantium minus molestiae 
				eius optio tempora ipsa voluptate voluptatem debitis, quos aspernatur adipisci fugiat perspiciatis dolore veritatis.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, ducimus architecto officiis optio odio voluptates 
				saepe consequuntur atque ex eius harum exercitationem? At, culpa! Et aperiam id qui amet. Eos.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus animi quibusdam ab atque, ipsa qui magni soluta pariatur. 
				Culpa amet nihil non blanditiis possimus ipsam molestiae, perspiciatis cumque, omnis numquam.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta qui aliquam repellendus maxime veritatis sunt sit sequi 
				eius non, saepe, delectus amet odio, vitae reiciendis autem libero, illo harum voluptate!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quos accusamus voluptas delectus similique possimus 
				soluta aliquam libero minus eum, tempore cumque, facilis quod suscipit error dolor ea ex omnis.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
				A sit voluptatibus quis, perspiciatis delectus maiores ratione 
				soluta sequi repudiandae aliquid consequuntur laborum dolore pariatur maxime quibusdam ducimus odio eius, eveniet.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit quia quam ad dignissimos laudantium minus molestiae 
				eius optio tempora ipsa voluptate voluptatem debitis, quos aspernatur adipisci fugiat perspiciatis dolore veritatis.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, ducimus architecto officiis optio odio voluptates 
				saepe consequuntur atque ex eius harum exercitationem? At, culpa! Et aperiam id qui amet. Eos.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus animi quibusdam ab atque, ipsa qui magni soluta pariatur. 
				Culpa amet nihil non blanditiis possimus ipsam molestiae, perspiciatis cumque, omnis numquam.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta qui aliquam repellendus maxime veritatis sunt sit sequi 
				eius non, saepe, delectus amet odio, vitae reiciendis autem libero, illo harum voluptate!
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quos accusamus voluptas delectus similique possimus 
				soluta aliquam libero minus eum, tempore cumque, facilis quod suscipit error dolor ea ex omnis.>
				Panel content
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
