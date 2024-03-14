<?php

$session = session();
$alert = $session->get('alert');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>aCode Tech</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url('theme/plugins/fontawesome-free/css/all.min.css') ?>">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="<?= base_url('theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url('theme/dist/css/adminlte.min.css') ?>">
    </head>

    <body class="hold-transition login-page">  

        <div class="login-box">            
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="<?= base_url('theme/') ?>index2.html" class="h1"><b>aCode</b>Tech</a>
                </div>
                <div class="card-body">
                    <?php if (isset($alert) && $alert['type'] == 'danger') : ?>
                        <div class="alert alert-danger text-center">
                            <?= $alert['message'] ?>
                        </div>
                    <?php elseif (isset($alert) && $alert['type'] == 'warning') : ?>
                        <div class="alert alert-warning text-center">
                            <?= $alert['message'] ?>
                        </div>
                    <?php endif; ?>

                    
                    <form action="<?= base_url('login/authenticate') ?>" method="post"> 
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="usuario" placeholder="Usuário">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" name="senha" placeholder="Senha">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>                    
                        <div class="col-8">
                            <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Lembrar-me
                            </label>
                            </div>
                        </div>                    
                        </div>
                    </form>
                    </div>                
                </div>            
        </div>        

        <script src="<?= base_url('theme/plugins/jquery/jquery.min.js') ?>"></script>        
        <script src="<?= base_url('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>        
        <script src="<?= base_url('theme/dist/js/adminlte.min.js') ?>"></script>
    </body>
</html>
