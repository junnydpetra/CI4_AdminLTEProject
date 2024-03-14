<div class="modal fade" id="modal-delete-confirm">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="clientes/delete"> 
        <div class="modal-header">
          <h4 class="modal-title">Confirmar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Tem certeza de que deseja excluir registro de cliente?</p>
          <input type="hidden" id="cliente_id" name="cliente_id">
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Excluir</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('/inicio')?>">Home</a></li>
              <li class="breadcrumb-item active">Registro de Clientes</li>
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
        <?php if(isset($alert) && $alert == 'success_create'): ?>
          
          <div class="row">
            <div class="col-lg-12">
              <div class="alert alert-success alert-dismissible"> 
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> 
                <i class="icon fas fa-check"></i>Cliente cadastrado com sucesso! 
              </div>
            </div>
          </div>
        
        <?php elseif(isset($alert) && $alert == 'success_delete'): ?>
          
          <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fas fa-ban"></i>Registro excluído com sucesso!
          </div>
          
        <?php elseif(isset($alert) && $alert == 'success_update'): ?>

          <div class="alert alert-info alert-dismissible"> 
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="icon fas fa-check"></i>Registro atualizado com sucesso!
          </div>

        <?php endif; ?>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    
                    <div class="card-header">
                        <div class="container-fluid">
                            <div class="row">
                                <h3 class="card-title col-lg-1 align-middle font-weight-bold">Registros</h3>
                                <a href="<?= base_url('/clientes/new') ?>" class="col-lg-1 offset-lg-10 btn btn-sm btn-success border border-dark p-1" title="Adicionar usuário">
                                  <i class="fas fa-user-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Registro</th>
                                    <th>Nome</th>
                                    <th>Data de Nascimento</th>
                                    <th>Telefone</th>
                                    <th>Endereço</th>
                                    <th>Limite de Crédito</th>
                                    <th class="text-center">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php if(!empty($clientes)): ?>
                                <?php foreach ($clientes as $key => $cliente): ?>
                                    <tr>
                                        <td class="text-center"><?= $cliente['id'] ?></td>
                                        <td><?= $cliente['nome'] ?></td>
                                        <td><?= $cliente['data_de_nascimento'] ?></td>
                                        <td><?= $cliente['telefone'] ?></td>
                                        <td><?= $cliente['endereco'] ?></td>
                                        <td><?= number_format($cliente['limite_de_credito'], 2, ',', '.') ?></td>
                                        <td class="text-center">
                                          <a href="<?= base_url("clientes/read/{$cliente['id']}") ?>" class="btn-sm btn-primary" title="exibir registro"><i class="fas fa-eye"></i></a>
                                          <a href="<?= base_url("clientes/edit/{$cliente['id']}") ?>" class="btn-sm btn-warning" title="editar registro"><i class="fas fa-pen"></i></a>
                                          <a href="<?= base_url("clientes/delete/{$cliente['id']}") ?>" class="btn-sm btn-danger" onclick="return confirm('Tem certeza de que deseja excluir este registro?')" title="excluir registro"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                              <?php else: ?>
                                  <td colspan="7" class="text-center text-danger">Nenhum cliente cadastrado!</td>
                              <?php endif; ?> 
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="<?php echo base_url('assets/scripts/jquery_mask.js') ?>"></script>
  <script src="<?= base_url('assets/scripts/alert_timer.js') ?>"></script>