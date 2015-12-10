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
	<div class="container-fluid">
		<div class="row" style="background-color:green;">
			<img class="img-responsive" src="<?=base_url('images/ET.jpg') ?>" alt="Logo">
		</div>
	</div>

	<?=$this->load->view('shared/header') ?>

	<div class="container">
		<div class="row">
			<div id="carousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel" data-slide-to="0" class="active"></li>
					<li data-target="#carousel" data-slide-to="1"></li>
				</ol>

				<div class="carousel-inner" role="listbox">
					<div class="item active descricao__fotos">
						<a href="javascript:void(0)"><img class="img-responsive" src="<?=base_url('images/categorias_img_jogos.jpg') ?>" alt="Jogos"></a>
					</div>

					<div class="item descricao__fotos">
						<a href="javascript:void(0)"><img class="img-responsive" src="<?=base_url('images/categorias_img_filmes.jpg') ?>" alt="Filmes"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="background-color:white;">
		<div class="col-md-8 clearfix meio__">
			<div class="row">
				<?php for ($i=0; $i < 8; $i++) { ?>
				<div class="col-md-3 box__">
					<a href="<?=base_url('index.php/page') ?>">
						<img data-toggle="tooltip" data-placement="top" title="E.T O Extraterrestre" class="img-responsive" src="<?=base_url('images/ET.Capa.jpg') ?>" alt="E.T o Extraterrestre">
					</a>
					<div class="col-md-12 footer text-center">
						<div class="col-md-2">
							<span class="glyphicon glyphicon-download"></span>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>

			<div class="row text-center">
				<div class="col-md-12">
					<ul class="pagination">
						<li>
							<a href="#">&laquo;</a>
						</li>
						<li class="active">
							<a href="#">1</a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#">4</a>
						</li>
						<li>
							<a href="#">5</a>
						</li>
						<li>
							<a href="#">&raquo;</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-md-4 categorias__ hidden-xs hidden-sm">
			<div class="col-md-12 text-center descricao__relacionados">
				<h4><span class="glyphicon glyphicon-th-list"></span> CATEGORIAS</h4>
			</div>
			<div class="text-center">
				<ol class="nav navbar-nav subcat__show">
					<li class="col-md-4"><a href="javascript:void(0)">Ação</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Animação</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Aventura</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Comédia</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Cult</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Drama</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Espionagem</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Fantasia</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Faroeste</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Guerra</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Musical</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Policial</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Romance</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Suspense</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Terror</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Trash</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Comédia Romântica</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Ficção Científica</a></li>
					<li class="col-md-4"><a href="javascript:void(0)">Erótico 18+</a></li>
				</ol>
			</div>
		</div>

		<!--<div class="col-md-2 hidden-xs hidden-sm">
			<?php for ($i=0; $i < 4; $i++) { ?>
			<div class="box__propaganda">
				<a href="javascript:void(0)">
					<img class="img-responsive" src="<?=base_url('images/propaganda.jpg') ?>">
				</a>
			</div>
			<?php } ?>
		</div>-->

	</div>
	<?=$this->load->view('shared/footer') ?>

	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})

		$('.carousel').carousel({
			interval: 1500
		})
	</script>
</body>
</html>