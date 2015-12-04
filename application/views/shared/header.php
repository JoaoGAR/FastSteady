<nav id="navegacao" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid" style="background:#0f5e2f;">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggle" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=base_url('/') ?>"><span class="glyphicon glyphicon-home"></span></a>
		</div>
		<div class="nav navbar-nav collapse navbar-collapse" id="toggle">
			<div class="navbar-right">
				<li><a href="javascript:void(0)">Categorias <span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
			</div>
			<div class="navbar-right categoria__">
				<li><a href="javascript:void(0)">Categorias <span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
			</div>
		</div>
	</div>

	<div class="container nav navbar-nav subcat__">
		<li><a href="javascript:void(0)">Ação</a></li>
		<li><a href="javascript:void(0)">Animação</a></li>
		<li><a href="javascript:void(0)">Aventura</a></li>
		<li><a href="javascript:void(0)">Comédia</a></li>
		<li><a href="javascript:void(0)">Comédia Romântica</a></li>
		<li><a href="javascript:void(0)">Cult</a></li>
		<li><a href="javascript:void(0)">Drama</a></li>
		<li><a href="javascript:void(0)">Espionagem</a></li>
		<li><a href="javascript:void(0)">Erótico</a></li>
		<li><a href="javascript:void(0)">Fantasia</a></li>
		<li><a href="javascript:void(0)">Faroeste</a></li>
		<li><a href="javascript:void(0)">Ficção científica</a></li>
		<li><a href="javascript:void(0)">Guerra</a></li>
		<li><a href="javascript:void(0)">Musical</a></li>
		<li><a href="javascript:void(0)">Policial</a></li>
		<li><a href="javascript:void(0)">Romance</a></li>
		<li><a href="javascript:void(0)">Suspense</a></li>
		<li><a href="javascript:void(0)">Terror</a></li>
		<li><a href="javascript:void(0)">Trash</a></li>
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
		div.toggle(200);
	});
</script>

