<nav id="navegacao" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggle" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=base_url('/') ?>"><span class="glyphicon glyphicon-home"></span></a>
		</div>

		<div class="row collapse navbar-collapse" id="toggle">
			<ul class="nav navbar-nav">
				<li><a class="categoria__ categoria__jogos" href="javascript:void(0)">Jogos</a></li>
				<div class="nav navbar-nav subcat__ subcat__jogos row">
					<li><a href="javascript:void(0)"> Aventura</a></li>
					<li><a href="javascript:void(0)"> Ação</a></li>
					<li><a href="javascript:void(0)"> FPS</a></li>
					<li class="divider-vertical"></li>
				</div>

				<li><a class="categoria__ categoria__filmes" href="javascript:void(0)">Filmes</a></li>
				<div class="nav navbar-nav subcat__ subcat__filmes row">
					<li><a href="javascript:void(0)"> Aventura</a></li>
					<li><a href="javascript:void(0)"> Ação</a></li>
					<li><a href="javascript:void(0)"> Terror</a></li>
					<li class="divider-vertical"></li>
				</div>
			</ul>
		</div>



		<div class="hr hidden-xs clearfix">
			<form class="navbar-form navbar-right" role="search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Pesquisar">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
			</form>
		</div>

		<div class="visible-xs clearfix">
			<form class="navbar-form navbar-right" role="search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Pesquisar">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
			</form>
		</div>

	</div>
</nav>
<script>
	$(".categoria__").on("click", function(e){
		if (!$(this).parent().hasClass("active")) {
			$(this).parent().addClass("active");
		}
		else {
			$(this).parent().removeClass("active");
		}
		var div = $(this).parent().next();
		div.toggle(50);
	});
</script>

