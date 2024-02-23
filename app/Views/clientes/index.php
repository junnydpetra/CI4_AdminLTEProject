<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Clientes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('/inicio')?>">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    
                    <div class="card-header">
                        <div class="container-fluid">
                            <div class="row">
                                <h3 class="card-title col-lg-1 align-middle font-weight-bold">Registros</h3>
                                <button class="col-lg-1 offset-lg-10 btn btn-sm btn-success border border-dark"><a href="<?php echo base_url('/clientes/new') ?>" class="text-decoration-none text-white">Novo</a></button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Registro</th>
                                    <th>Nome</th>
                                    <th>Data de Nascimento</th>
                                    <th>Telefone</th>
                                    <th>Endereço</th>
                                    <th>Limite de Crédito</th>
                                </tr>
                            </thead>
                            <tbody>     
                               <?php foreach ($clientes as $key => $cliente): ?>
                                    <tr>
                                        <td class="text-center"><?= $cliente['id'] ?></td>
                                        <td><?= $cliente['nome'] ?></td>
                                        <td><?= $cliente['data_de_nascimento'] ?></td>
                                        <td><?= $cliente['telefone'] ?></td>
                                        <td><?= $cliente['endereco'] ?></td>
                                        <td><?= $cliente['limite_de_credito'] ?></td>
                                    </tr>
                               <?php endforeach; ?>
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