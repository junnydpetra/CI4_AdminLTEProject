<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Dados de Cliente</h3>
                    </div>
                    
                    <form action="/cliente/store" method="post">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" placeholder="Informe seu nome" name="nome">
                                    </div>
                                </div>
                            
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="data_de_nascimento">Data de Nascimento</label>
                                        <input type="date" class="form-control" placeholder="Informe seu nome" name="data_de_nascimento">
                                    </div>
                                </div>
                            
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" class="form-control" placeholder="Informe seu nome" name="telefone">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control" placeholder="Endereço" name="endereco">
                                </div>
                                
                                <div class="col-lg-4">
                                    <label for="limite_de_credito">Limite de Crédito</label>
                                    <input type="text" class="form-control" placeholder="Limite disponível" name="limite_de_credito">
                                </div>                                
                            </div>

                        </div>
                        <div class="card-footer border-top border-dark">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
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