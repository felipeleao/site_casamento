<?php include_once("config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php
        define("TEMPLATE_ESTILO", "template/estilos_landing.tpl.php");
		include_once("template/header.tpl.php");
    ?>

<body ng-app="app" ng-controller="LandingController" ng-init="init()" ng-cloak>
	<?php include_once("template/body_begin.tpl.php"); ?>

	<div>

		<div>
			<div class="col-xs-12">
				<div class="row conjuges" >
					<div class="col-sm-5 noiva">Camilla Azevedo</div>
					<div class="col-sm-2 conector"><span class="glyphicon glyphicon-heart"></span></div>
					<div class="col-sm-5 noivo">Felipe Leão</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 subtitulo">
				<span>Vamos nos casar!</span>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-xs-3">
						<div class="countdown-unit">
							<span class="tempo"><timer end-time="dataCasamento">{{ddays}}</timer></span>
							<span class="unidade">Dias</span>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="countdown-unit">
							<span class="tempo"><timer end-time="dataCasamento">{{hhours}}</timer></span>
							<span class="unidade">Horas</span>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="countdown-unit">
							<span class="tempo"><timer end-time="dataCasamento">{{mminutes}}</timer></span>
							<span class="unidade">Minutos</span>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="countdown-unit">
							<span class="tempo"><timer end-time="dataCasamento">{{sseconds}}</timer></span>
							<span class="unidade">Segundos</span>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<?php
		include_once("template/body_end.tpl.php");
		// include_once("template/footer.tpl.php");
		include_once("template/javascript.tpl.php");
	?>
</body>
</html>

