<div class="modal fade" id="modal-delete-confirm">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="produtos/delete"> 
        <div class="modal-header">
          <h4 class="modal-title">Confirmar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Tem certeza de que deseja excluir registro de produto?</p>
          <input type="hidden" id="produto_id" name="produto_id">
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
            <h1 class="m-0">Produtos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('/inicio')?>">Home</a></li>
              <li class="breadcrumb-item active">Produtos</li>
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
                <i class="icon fas fa-check"></i>produto cadastrado com sucesso! 
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
                                <a href="<?= base_url('/produtos/new') ?>" class="col-lg-1 offset-lg-10 btn btn-sm btn-success border border-dark p-1" title="Adicionar produto">
                                  <i class="fas fa-user-plus"></i>
                                </a>
                            </div>  







                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px" class="align-middle">Registro</th>
                                    <th class="align-middle text-center">Nome</th>
                                    <th class="align-middle text-center">Descrição</th>
                                    <th class="align-middle text-center">Quantidade</th>
                                    <th class="align-middle text-center">Quantidade Mínima</th>
                                    <th class="align-middle text-center" class="text-center">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php if(!empty($produtos)): ?>
                                  <?php foreach ($produtos as $key => $produto): ?>
                                      <tr class="text-center">
                                          <td class="text-center"><?= $produto['id'] ?></td>
                                          <td><?= $produto['nome'] ?></td>
                                          <td><?= $produto['descricao'] ?></td>
                                          <td><?= $produto['quantidade'] ?></td>
                                          <td><?= $produto['quantidade_minima'] ?></td>
                                          <td class="text-center">
                                            <a href="<?= base_url("produtos/read/{$produto['id']}") ?>" class="btn-sm btn-primary" title="exibir registro"><i class="fas fa-eye"></i></a>
                                            <a href="<?= base_url("produtos/edit/{$produto['id']}") ?>" class="btn-sm btn-warning" title="editar registro"><i class="fas fa-pen"></i></a>
                                            <a href="<?= base_url("produtos/delete/{$produto['id']}") ?>" class="btn-sm btn-danger" onclick="return confirm('Tem certeza de que deseja excluir este registro?')" title="excluir registro"><i class="fas fa-trash-alt"></i></a>
                                          </td>
                                      </tr>
                                  <?php endforeach; ?>
                              <?php else: ?>
                                  <td colspan="12" class="text-center text-danger">Nenhum produto cadastrado!</td>
                              <?php endif; ?> 
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix"></div>
                </div>
                
            </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="<?php echo base_url('assets/scripts/jquery_mask.js') ?>"></script>
  <script src="<?= base_url('assets/scripts/alert_timer.js') ?>"></script>