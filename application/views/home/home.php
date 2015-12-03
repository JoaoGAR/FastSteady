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
	<div class="corpo__ ">

		<div class="categorias__ hidden-xs hidden-sm">
			<div class="col-md-6 categorias__img">
				<a href=""><img class="img-responsive" src="<?=base_url('images/categorias_img_jogos.jpg') ?>" alt="Jogos"></a>
			</div>

			<div class="col-md-6 categorias__img">
				<a href=""><img class="img-responsive" src="<?=base_url('images/categorias_img_filmes.jpg') ?>" alt="Filmes"></a>
			</div>
		</div>

		<div class="col-md-10 clearfix">
			<div class="row boxes__">
				<?php for ($i=0; $i < 12; $i++) { ?>
				<div class="col-md-2 box__ thumbnail">
					<a href="<?=base_url('index.php/page') ?>"><img data-toggle="tooltip" data-placement="top" title="E.T O Extraterrestre" class="img-responsive" src="http://br.web.img1.acsta.net/medias/nmedia/18/95/16/34/20384584.jpg" alt="E.T o Extraterrestre"></a>
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

		<div class="col-md-2 thumbnail hidden-xs hidden-sm">
		<?php for ($i=0; $i < 3; $i++) { ?>
		<div style="margin-top:2px;">
			<a href="javascript:void(0)">
				<img class="img-responsive" src="<?=base_url('images/propaganda.jpg') ?>">
			</a>
		</div>
		<?php } ?>
	</div>

	</div>
</div>
<script>
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
</body>
</html>