<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= base_url('assets/scripts/jquery_mask.js') ?>"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Atualizar Dados</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('inicio') ?>">Home</a></li>
              <li class="breadcrumb-item active">Atualizar Dados</li>
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
            
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Dados de Cliente</h3>
                    </div>
                    
                    <form action="/clientes/store" method="post">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" placeholder="Informe seu nome" name="nome" value="<?= $cliente['nome'] ?>" required>
                                    </div>
                                </div>
                            
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="data_de_nascimento">Data de Nascimento</label>
                                        <input type="date" class="form-control" placeholder="Informe seu nome" name="data_de_nascimento" value="<?= $cliente['data_de_nascimento'] ?>" required>
                                    </div>
                                </div>
                            
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <input id="phone_format" type="text" class="form-control" placeholder="Informe seu nome" name="telefone"  value="<?= $cliente['telefone'] ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control" placeholder="Endereço" name="endereco"  value="<?= $cliente['endereco'] ?>" required>
                                </div>
                                
                                <div class="col-lg-4">
                                    <label for="limite_de_credito">Limite de Crédito</label>
                                    <input id="number_format" type="text" class="form-control" placeholder="Limite disponível" name="limite_de_credito"  value="<?= number_format($cliente['limite_de_credito'], 2, ',', '.') ?>" required>
                                </div>                                
                            </div>
                            
                            <input type="hidden" name="cliente_id" value="<?= $cliente['id'] ?>" required>
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
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
