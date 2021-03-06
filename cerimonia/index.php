<?php include_once("../src/config/constants.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inclusao do Header com os Metas e estilos -->
    <?php include_once("../template/header.tpl.php"); ?>

<body ng-app="app" ng-cloak>
    <div id="wrap">
    	<!-- Static navbar -->
    	<?php include_once("../template/navbar.tpl.php");?>

        <div class="topo cerimonia"></div>
    	<div class="container principal">

            <div class="row">
                <div class="col-md-12">
                    <h1>Cerim&ocirc;nia e Recep&ccedil;&atilde;o <small>/Informa&ccedil;&otilde;es detalhadas</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section>
                        <p>Tanto a cerimônia de casamento quanto a recepção ocorrerão na <strong>Vila Inglesa Casa de Festas</strong> às <strong>19:30h</strong> do dia <strong>11 de Agosto de 2018</strong>.</p>
                        <p>Pedimos que não se atrase pois este momento é muito especial para nós e gostaríamos que fizesse parte dele por completo! Contamos com você!</p>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2>Estacionamento</h2>
                    <section>
                        <p>A casa de festa provê estacionamento com serviço de valet sem custos. Mas lembre-se: se beber, não dirija!</p>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/opt/bullet.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>
            

            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <h1>Endereço</h1>
                    <section>
                        <p>Vila Inglesa Casa de Festas</p>
                        <p>Estrada dos Três Rios, 2134 - Freguesia (Jacarepaguá), Rio de Janeiro - RJ</p>
                    </section>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <section>
                        <img src="../assets/images/opt/double_arrow.png" alt="Separador" class="img-responsive center separador">
                    </section>
                </div>
            </div>

		</div> <!-- /container -->

        <div class="mapa">
            <div >
                <h1>Como Chegar <small>/Localiza&ccedil;&atilde;o</small></h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.5081570700927!2d-43.32683488437728!3d-22.931505344520108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd8206d60a68f%3A0x6d80fc3313291292!2sVila+Inglesa+Casa+de+Festas!5e0!3m2!1spt-BR!2sbr!4v1523047986984" allowfullscreen></iframe>
            </div>
            <div>
                <section>
                    <img src="../assets/images/opt/double_arrow.png" alt="Separador" class="img-responsive center separador">
                </section>
            </div>
        </div>

		<div id="push"></div>
	</div>


	<?php
		include_once("../template/footer.tpl.php");
		include_once("../template/javascript.tpl.php");
	?>
</body>
</html>

