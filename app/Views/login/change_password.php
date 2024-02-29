<div class="content-wrapper">
  
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Alterar Senha</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('inicio') ?>">Home</a></li>
              <li class="breadcrumb-item active">Alterar Senha</li>
            </ol>
          </div>
        </div>
      </div>
    </div>  
    
    <div class="content">
      <div class="container-fluid">

      <?php
          $session = session();
          $alert = $session->get('alert');
        ?>
        <?php if(isset($alert) && $alert == 'change_password_success'): ?>
          
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible"> 
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> 
                <i class="icon fas fa-check"></i>Senha alterada com sucesso! 
              </div>
            </div>
          </div>
          
        <?php elseif(isset($alert) && $alert == 'change_password_error'): ?>

          <div class="alert alert-danger alert-dismissible"> 
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fas fa-check"></i>Falha ao atualizar senha. Verifique os dados!
          </div>

        <?php endif; ?>

        <div class="row">
            <div class="col-lg-12">           
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Dados</h3>
                    </div>
                    
                    <form action="store" method="post">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Senhaa Atual</label>
                                        <input type="text" class="form-control" placeholder="Informe a senha atual" name="senha_atual" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Nova Senha</label>
                                        <input type="text" class="form-control" placeholder="Informe uma nova senha" name="nova_senha" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Confirmar Nova Senha</label>
                                        <input type="text" class="form-control" placeholder="Informe seu nome" name="nova_senha_confirm" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div class="card-footer border-top border-dark">
                            <div class="row justify-content-between">
                                <button type="submit" class="btn btn-primary" title="salvar"><i class="fas fa-save"></i></button>
                                <a href="javascript:history.back()" class="btn btn-danger" title="voltar"><i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>        
      </div>
    </div>
    
</div>
  
<script src="<?= base_url('assets/scripts/alert_timer.js') ?>"></script>