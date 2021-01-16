<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bulldog Shop</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
  	
  	<?php include 'processo.php'; ?>
  	<?php if(!$_SESSION['nome']){
  		header("location: index.php");
  		exit();
  	} ?>

	<?php if (isset($_SESSION['message'])): ?>


  		<div class="alert alert-<?=$_SESSION['msg_type']?>">
		<?php 
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
		</div>
	<?php endif; ?>
	
	

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="header">
				<a href="site.php"><img src="imgs/logo.png"></a>
				<div class="cadastro">
				<h1> BULLDOG SHOP </h1>
				
				<h4> Bem vindo, <?php echo $_SESSION['nome']; ?></h4>
				
				
				</div>
					<div class="flex">
                <img src="imgs/18.png" class="mr-5 mt-3">
                <a href="logout.php"><h5 class="ml-1">Sair</h5></a>
              		</div>

				</div>
			</div>
		</div>
	<div class="flex">
	<div class="row">
		<div class="margem">
		<div class="col-md-12">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" href="site.php">Início</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Lojas Parceiras</a>
				</li>
				<li class="nav-item dropdown ml-md-auto">
					 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Bulldog Shop</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						 <a class="dropdown-item" href="#">Sobre nós</a> <a class="dropdown-item" href="#">Contato</a>
						<div class="dropdown-divider">
						</div> <a class="dropdown-item" href="#">Trabalhe conosco</a>
					</div>
				</li>
			</ul>
		</div>
		</div>
	</div>
	
	</div>
	<div class="row">
		<div class="col-md-9">
			<blockquote class="blockquote mt-4">
				<p class="mb-0 text-white">
					Todas as grandes coisas são simples. E muitas podem ser expressas numa só palavra: liberdade; justiça; honra; dever; piedade; esperança.
				</p>
				<footer class="blockquote-footer text-light">
					Winston Churchill
				</footer>
			</blockquote>
		</div>
		<div class="col-md-3">
			<div class="carousel slide" id="carousel-608808">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-608808">
					</li>
					<li data-slide-to="1" data-target="#carousel-608808">
					</li>
					<li data-slide-to="2" data-target="#carousel-608808" class="active">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="imgs/magnum.png">
						<div class="carousel-caption">
							<h4>
								.44 Magnum
							</h4>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="imgs/deagle.png">
						<div class="carousel-caption">
							<h4>
								Desert Eagle .50
							</h4>
						</div>
					</div>
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="imgs/tommygun.png">
						<div class="carousel-caption">
							<h4>
								Tommy Gun
							</h4>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-608808" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-608808" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		<img src="imgs/churchill.png" class="imgchurc">
		</div>
		<div class="col-md-6">
			<span class="text-white">
			<h3>
				Produtos
			</h3>
			</span>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="imgs/deaglecard.png">
						<div class="card-block">
							<h5 class="card-title">
								Desert Eagle (Golden)
							</h5>
							
							<form method="post">
								<input type="hidden" name="deagle" value="true">
								<button type="submit" class="btn btn-primary">Detalhes</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="imgs/tommyguncard.png">
						<div class="card-block">
							<h5 class="card-title">
								Tommy gun
							</h5>
							
							<form method="post">
								<input type="hidden" name="tommygun" value="true">
								<button type="submit" class="btn btn-primary">Detalhes</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="imgs/magnumcard.png">
						<div class="card-block">
							<h5 class="card-title">
								Revólver Magnum 44
							</h5>
							
							<form method="post">
								<input type="hidden" name="magnum" value="true">
								<button type="submit" class="btn btn-primary">Detalhes</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail First" src="imgs/miniguncard.png">
						<div class="card-block">
							<h5 class="card-title">
								Minigun
							</h5>
							
							<form method="post">
								<input type="hidden" name="minigun" value="true">
								<button type="submit" class="btn btn-primary">Detalhes</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="imgs/flintlockcard.png">
						<div class="card-block">
							<h5 class="card-title">
								Flintlock
							</h5>
							
							<form method="post">
								<input type="hidden" name="flintlock" value="true">
								<button type="submit" class="btn btn-primary">Detalhes</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="imgs/rpgcard.png">
						<div class="card-block">
							<h5 class="card-title">
								RPG
							</h5>
							
							<form method="post">
								<input type="hidden" name="rpg" value="true">
								<button type="submit" class="btn btn-primary">Detalhes</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--div variável de acordo com seleção do produto -->
			
			<!-- Desert Eagle -->
			
		<div class="col-md-4">
			<span class="text-white">
			<h3> Seleção de produto</h3>
			</span>
			<div class="card">
				<?php 
					if ($deagle == true):
				?>
				<img class="card-img-top" alt="Bootstrap Thumbnail First" src="imgs/deaglecompra.png">
					<div class="card-block">
							<h5 class="card-title">
								Desert Eagle
							</h5>
							<p class="card-text text-info">
								Pistola .50, muito poderosa. Alto poder de penetração, com um coice incrivelmente forte. Versão Titanum Gold.
							</p>
							<!--progress bar características do produto-->
							<div class="progress">
								<div class="progress-bar w-25 progress-bar-striped progress-bar-animated">
									<p>Cadência de tiro</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-75 progress-bar-striped progress-bar-animated">
									<p>Precisão</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-100 progress-bar-animated progress-bar-striped">
									<p>Recuo</p>
								</div>
							</div>
							<div class="flexline">
							<p>
								<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          							<div class="modal-dialog" role="document">
             							<div class="modal-content">
                							<div class="modal-header text-center">
                 								<h4 class="modal-title w-100 font-weight-bold">Comprar</h4>
                    							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      							<span aria-hidden="true">&times;</span>
                    							</button>
                  							</div>
            
              								<div class="modal-body mx-3">
                  								<div class="md-form mb-5">
                      								<i class="fas fa-user prefix grey-text"></i>
                      								<input required="required" type="text" class="form-control validate">
                      								<label data-error="wrong" data-success="right" for="orangeForm-name">CPF</label>
                  								</div>
                								<div class="md-form mb-5">
                  									<i class="fas fa-envelope prefix grey-text"></i>
									                <input required="required" type="text" class="form-control validate">
									                <label data-error="wrong" data-success="right" for="orangeForm-email">Endereço</label>
									            </div>

                								<div class="md-form mb-4">
                  									<i class="fas fa-lock prefix grey-text"></i>
                  									<input required="required" type="password" class="form-control validate">
                  									<label data-error="wrong" data-success="right" for="orangeForm-pass">Sua Senha</label>
                								</div>

              								</div>
              								<div class="modal-footer d-flex justify-content-center">
                  							<button type="submit" onclick="alert('Compra efetuada!')" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Comprar</button>
              								</div> 
            
              							</div>
          							</div>
        						</div>

        						<div class="text-center">
            						<a href="" class="btn btn-info" data-toggle="modal" data-target="#modalRegisterForm">Comprar</a>
        						</div>
							</p>
							<div class="ml-4 mt-3">
								<p class="text-info">R$ 1.500,00</p>
							</div>
							</div>
					</div>
			
			<!-- fim Desert Eagle -->


			<!-- Tommy Gun -->
				<?php 
					elseif ($tommygun == true):
				?>
				<img class="card-img-top" alt="Bootstrap Thumbnail First" src="imgs/tommyguncompra.png">
					<div class="card-block">
							<h5 class="card-title">
								Tommy gun
							</h5>
							<p class="card-text text-info">
								A famosa submetralhadora, da família Thompson, foi utilizada de 1938 até 1971 pelos EUA. Calibre .45 ACP, 50m de alcance de precisão, e mais de 600 tiros por minuto!
							</p>
							<!--progress bar características do produto-->
							<div class="progress">
								<div class="progress-bar w-75 progress-bar-striped progress-bar-animated">
									<p>Cadência de tiro</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-50 progress-bar-striped progress-bar-animated">
									<p>Precisão</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-25 progress-bar-animated progress-bar-striped">
									<p>Recuo</p>
								</div>
							</div>
							<div class="flexline">
							
							<p>
								<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          							<div class="modal-dialog" role="document">
             							<div class="modal-content">
                							<div class="modal-header text-center">
                 								<h4 class="modal-title w-100 font-weight-bold">Comprar</h4>
                    							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      							<span aria-hidden="true">&times;</span>
                    							</button>
                  							</div>
            
              								<div class="modal-body mx-3">
                  								<div class="md-form mb-5">
                      								<i class="fas fa-user prefix grey-text"></i>
                      								<input required="required" type="text" class="form-control validate">
                      								<label data-error="wrong" data-success="right" for="orangeForm-name">CPF</label>
                  								</div>
                								<div class="md-form mb-5">
                  									<i class="fas fa-envelope prefix grey-text"></i>
									                <input required="required" type="text" class="form-control validate">
									                <label data-error="wrong" data-success="right" for="orangeForm-email">Endereço</label>
									            </div>

                								<div class="md-form mb-4">
                  									<i class="fas fa-lock prefix grey-text"></i>
                  									<input required="required" type="password" class="form-control validate">
                  									<label data-error="wrong" data-success="right" for="orangeForm-pass">Sua Senha</label>
                								</div>

              								</div>
              								<div class="modal-footer d-flex justify-content-center">
                  							<button type="submit" onclick="alert('Compra efetuada!')" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Comprar</button>
              								</div> 
            
              							</div>
          							</div>
        						</div>

        						<div class="text-center">
            						<a href="" class="btn btn-info" data-toggle="modal" data-target="#modalRegisterForm">Comprar</a>
        						</div>
							</p>
							
							<div class="ml-4 mt-3">
								<p class="text-info">R$ 2.200,00</p>
							</div>
							</div>
					</div>
			<!-- Fim tommy gun -->

			<!-- Magnum -->
			<?php 
			elseif ($magnum == true):
			?>
				<img class="card-img-top" alt="Bootstrap Thumbnail First" src="imgs/magnumcompra.png">
					<div class="card-block">
							<h5 class="card-title">
								Magnum 44
							</h5>
							<p class="card-text text-info">
								Revólver Magnum 44, armamento pesado, possui tambor com capacidade para 6 balas de calibre .44.
							</p>
							<!--progress bar características do produto-->
							<div class="progress">
								<div class="progress-bar w-25 progress-bar-striped progress-bar-animated">
									<p>Cadência de tiro</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-75 progress-bar-striped progress-bar-animated">
									<p>Precisão</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-75 progress-bar-animated progress-bar-striped">
									<p>Recuo</p>
								</div>
							</div>
							<div class="flexline">
							<p>
								<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          							<div class="modal-dialog" role="document">
             							<div class="modal-content">
                							<div class="modal-header text-center">
                 								<h4 class="modal-title w-100 font-weight-bold">Comprar</h4>
                    							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      							<span aria-hidden="true">&times;</span>
                    							</button>
                  							</div>
            
              								<div class="modal-body mx-3">
                  								<div class="md-form mb-5">
                      								<i class="fas fa-user prefix grey-text"></i>
                      								<input required="required" type="text" class="form-control validate">
                      								<label data-error="wrong" data-success="right" for="orangeForm-name">CPF</label>
                  								</div>
                								<div class="md-form mb-5">
                  									<i class="fas fa-envelope prefix grey-text"></i>
									                <input required="required" type="text" class="form-control validate">
									                <label data-error="wrong" data-success="right" for="orangeForm-email">Endereço</label>
									            </div>

                								<div class="md-form mb-4">
                  									<i class="fas fa-lock prefix grey-text"></i>
                  									<input required="required" type="password" class="form-control validate">
                  									<label data-error="wrong" data-success="right" for="orangeForm-pass">Sua Senha</label>
                								</div>

              								</div>
              								<div class="modal-footer d-flex justify-content-center">
                  							<button type="submit" onclick="alert('Compra efetuada!')" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Comprar</button>
              								</div> 
            
              							</div>
          							</div>
        						</div>

        						<div class="text-center">
            						<a href="" class="btn btn-info" data-toggle="modal" data-target="#modalRegisterForm">Comprar</a>
        						</div>
							</p>
							<div class="ml-4 mt-3">
								<p class="text-info">R$ 1.350,00</p>
							</div>
							</div>
					</div>
			<!-- fim Magnum -->
			
			<!-- RPG -->
			<?php 
			elseif ($rpg == true):
			?>
				<img class="card-img-top" alt="Bootstrap Thumbnail First" src="imgs/rpgcompra.png">
					<div class="card-block">
							<h5 class="card-title">
								RPG
							</h5>
							<p class="card-text text-info">
								Lançador de granada propulsada por foguete, o famoso RPG, é portátil, reutilizável, fácil de disparar, uma ótima opção se você quer derrubar um Tanque.
							</p>
							<!--progress bar características do produto-->
							<div class="progress">
								<div class="progress-bar w-0 progress-bar-striped progress-bar-animated">
									<p>Cadência de tiro</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-75 progress-bar-striped progress-bar-animated">
									<p>Precisão</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-100 progress-bar-animated progress-bar-striped">
									<p>Recuo</p>
								</div>
							</div>
							<div class="flexline">
							<p>
								<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          							<div class="modal-dialog" role="document">
             							<div class="modal-content">
                							<div class="modal-header text-center">
                 								<h4 class="modal-title w-100 font-weight-bold">Comprar</h4>
                    							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      							<span aria-hidden="true">&times;</span>
                    							</button>
                  							</div>
            
              								<div class="modal-body mx-3">
                  								<div class="md-form mb-5">
                      								<i class="fas fa-user prefix grey-text"></i>
                      								<input required="required" type="text" class="form-control validate">
                      								<label data-error="wrong" data-success="right" for="orangeForm-name">CPF</label>
                  								</div>
                								<div class="md-form mb-5">
                  									<i class="fas fa-envelope prefix grey-text"></i>
									                <input required="required" type="text" class="form-control validate">
									                <label data-error="wrong" data-success="right" for="orangeForm-email">Endereço</label>
									            </div>

                								<div class="md-form mb-4">
                  									<i class="fas fa-lock prefix grey-text"></i>
                  									<input required="required" type="password" class="form-control validate">
                  									<label data-error="wrong" data-success="right" for="orangeForm-pass">Sua Senha</label>
                								</div>

              								</div>
              								<div class="modal-footer d-flex justify-content-center">
                  							<button type="submit" onclick="alert('Compra efetuada!')" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Comprar</button>
              								</div> 
            
              							</div>
          							</div>
        						</div>

        						<div class="text-center">
            						<a href="" class="btn btn-info" data-toggle="modal" data-target="#modalRegisterForm">Comprar</a>
        						</div>
							</p>
							<div class="ml-4 mt-3">
								<p class="text-info">R$ 25.000</p>
							</div>
							</div>
					</div>
			<!-- fim RPG -->

			<!-- Flintlock -->
			<?php 
			elseif ($flintlock == true):
			?>
				<img class="card-img-top" alt="Bootstrap Thumbnail First" src="imgs/flintlockcompra.png">
					<div class="card-block">
							<h5 class="card-title">
								Pistola Flintlock
							</h5>
							<p class="card-text text-info">
								Pistola Flintlock, uma bela arma que remete à antiguidade (inventada no Séc. XVII). Possui um acabamento bem trabalhado e detalhado.
							</p>
							<!--progress bar características do produto-->
							<div class="progress">
								<div class="progress-bar w-0 progress-bar-striped progress-bar-animated">
									<p>Cadência de tiro</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-50 progress-bar-striped progress-bar-animated">
									<p>Precisão</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-100 progress-bar-animated progress-bar-striped">
									<p>Recuo</p>
								</div>
							</div>
							<div class="flexline">
							<p>
								<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          							<div class="modal-dialog" role="document">
             							<div class="modal-content">
                							<div class="modal-header text-center">
                 								<h4 class="modal-title w-100 font-weight-bold">Comprar</h4>
                    							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      							<span aria-hidden="true">&times;</span>
                    							</button>
                  							</div>
            
              								<div class="modal-body mx-3">
                  								<div class="md-form mb-5">
                      								<i class="fas fa-user prefix grey-text"></i>
                      								<input required="required" type="text" class="form-control validate">
                      								<label data-error="wrong" data-success="right" for="orangeForm-name">CPF</label>
                  								</div>
                								<div class="md-form mb-5">
                  									<i class="fas fa-envelope prefix grey-text"></i>
									                <input required="required" type="text" class="form-control validate">
									                <label data-error="wrong" data-success="right" for="orangeForm-email">Endereço</label>
									            </div>

                								<div class="md-form mb-4">
                  									<i class="fas fa-lock prefix grey-text"></i>
                  									<input required="required" type="password" class="form-control validate">
                  									<label data-error="wrong" data-success="right" for="orangeForm-pass">Sua Senha</label>
                								</div>

              								</div>
              								<div class="modal-footer d-flex justify-content-center">
                  							<button type="submit" onclick="alert('Compra efetuada!')" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Comprar</button>
              								</div> 
            
              							</div>
          							</div>
        						</div>

        						<div class="text-center">
            						<a href="" class="btn btn-info" data-toggle="modal" data-target="#modalRegisterForm">Comprar</a>
        						</div>
							</p>
							<div class="ml-4 mt-3">
								<p class="text-info">R$ 989,90</p>
							</div>
							</div>
					</div>
			
			<!-- fim Flintlock -->

			<!-- Minigun -->
			<?php elseif ($minigun == true): ?>
				<img class="card-img-top" alt="Bootstrap Thumbnail First" src="imgs/miniguncompra.png">
					<div class="card-block">
							<h5 class="card-title">
								Minigun
							</h5>
							<p class="card-text text-info">
								A famosa "Gatling Gun" é uma metralhadora de calibre 7,62mm de seis canos, com tambores rotativos e uma incrível cadência de tiro, que chega a 6.000 disparos por minuto!
							</p>
							<!--progress bar características do produto-->
							<div class="progress">
								<div class="progress-bar w-100 progress-bar-striped progress-bar-animated">
									<p>Cadência de tiro</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-25 progress-bar-striped progress-bar-animated">
									<p>Precisão</p>
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar w-25 progress-bar-animated progress-bar-striped">
									<p>Recuo</p>
								</div>
							</div>
							<div class="flexline">
							<p>
								<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          							<div class="modal-dialog" role="document">
             							<div class="modal-content">
                							<div class="modal-header text-center">
                 								<h4 class="modal-title w-100 font-weight-bold">Comprar</h4>
                    							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      							<span aria-hidden="true">&times;</span>
                    							</button>
                  							</div>
            
              								<div class="modal-body mx-3">
                  								<div class="md-form mb-5">
                      								<i class="fas fa-user prefix grey-text"></i>
                      								<input required="required" type="text" class="form-control validate">
                      								<label data-error="wrong" data-success="right" for="orangeForm-name">CPF</label>
                  								</div>
                								<div class="md-form mb-5">
                  									<i class="fas fa-envelope prefix grey-text"></i>
									                <input required="required" type="text" class="form-control validate">
									                <label data-error="wrong" data-success="right" for="orangeForm-email">Endereço</label>
									            </div>

                								<div class="md-form mb-4">
                  									<i class="fas fa-lock prefix grey-text"></i>
                  									<input required="required" type="password" class="form-control validate">
                  									<label data-error="wrong" data-success="right" for="orangeForm-pass">Sua Senha</label>
                								</div>

              								</div>
              								<div class="modal-footer d-flex justify-content-center">
                  							<button type="submit" onclick="alert('Compra efetuada!')" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Comprar</button>
              								</div> 
            
              							</div>
          							</div>
        						</div>

        						<div class="text-center">
            						<a href="" class="btn btn-info" data-toggle="modal" data-target="#modalRegisterForm">Comprar</a>
        						</div>
							</p>
							<div class="ml-4 mt-3">
								<p class="text-info">R$ 69.000</p>
							</div>
							</div>
					</div>

			<?php 
			 else:
			?>
			
				<img src="imgs/cardcompra.png">
			
			<?php endif; ?>
			</div>
		</div>

		
	</div>
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
</div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </body>
</html>