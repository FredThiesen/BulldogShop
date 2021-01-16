<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bulldog Shop - LOGIN</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body class="container-fluid">
    <?php require_once 'processo.php'; ?>
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
            <a href="index.php"><img src="imgs/logo.png"></a>
              <div class="cadastro">
                <h1> BULLDOG SHOP </h1>
                <h3> Faça login para continuar </h3>
	            </div>
              <div>
                <img src="imgs/18.png" class="mr-5 mt-3">
              </div>
          </div>
          </div>
	    </div>
	   <div class="row">
	     <div class="col-md-4">
	     </div>
	       <div class="col-md-4">


            <div class="cadastro mt-5">
        <!-- login -->
              <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header text-center">
                      <h4 class="modal-title w-100 font-weight-bold">Login</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="processo.php" method="POST">
                    <div class="modal-body mx-3">
                      <div class="md-form mb-5">
                       <i class="fas fa-envelope prefix grey-text"></i>
                       <input required="required" type="email" name="email" class="form-control validate">
                       <label data-error="wrong" data-success="right" for="defaultForm-email">Seu Email</label>
                      </div>

                      <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <input required="required" type="password" name="senha" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Sua Senha</label>
                      </div>

                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                      <a><?php echo( "<button type=\"submit\" class=\"btn btn-primary\" name=\"entrar\" onclick= \"location.href='site.php'\">Login</button>");?></a>
                      <!--<button type="submit" name="entrar" class="btn btn-primary" onclick="location.href='site.php'">Login</button> -->
              </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-5">
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalLoginForm">Login</a>
            </div>
        <!-- fim login -->

        <!-- cadatro -->
        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Cadastrar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            <form action="processo.php" method="post">
              <div class="modal-body mx-3">
                  <div class="md-form mb-5">
                      <i class="fas fa-user prefix grey-text"></i>
                      <input required="required" type="text" name="nome" class="form-control validate">
                      <label data-error="wrong" data-success="right" for="orangeForm-name">Seu Nome</label>
                  </div>
                <div class="md-form mb-5">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <input required="required" name="emailcad" type="text" class="form-control validate">
                  <label data-error="wrong" data-success="right" for="orangeForm-email">Seu Email</label>
                </div>

                <div class="md-form mb-4">
                  <i class="fas fa-lock prefix grey-text"></i>
                  <input required="required" type="password" name="senhacad" class="form-control validate">
                  <label data-error="wrong" data-success="right" for="orangeForm-pass">Sua Senha</label>
                </div>

              </div>
              <div class="modal-footer d-flex justify-content-center">
                  <button type="submit" name="cadastro" class="btn btn-primary">Cadastrar</button>
              </div> 
            </form>
              </div>
          </div>
        </div>

        <div class="text-center">
            <a href="" class="btn btn-info" data-toggle="modal" data-target="#modalRegisterForm">Cadastre-se</a>
        </div>
        <!-- fim cadastro -->
	       </div>
	     <div class="col-md-4">
	     </div>
	   </div>
    </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
  </body>
</html>