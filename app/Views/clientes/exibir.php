<div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dados de Cliente</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('clientes') ?>">Clientes</a></li>
              <li class="breadcrumb-item active">Dados de Cliente</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Dados de Cliente</h3>
                    </div>
                    
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" placeholder="Informe seu nome" value="<?= $cliente['nome'] ?>" disabled>
                                </div>
                            </div>
                        
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="data_de_nascimento">Data de Nascimento</label>
                                    <input type="date" class="form-control" placeholder="Informe seu nome" value="<?= $cliente['data_de_nascimento'] ?>" disabled>
                                </div>
                            </div>
                        
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control" placeholder="Informe seu nome" value="<?= $cliente['telefone'] ?>" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" placeholder="Endereço" value="<?= $cliente['endereco'] ?>" disabled>
                            </div>
                            
                            <div class="col-lg-4">
                                <label for="limite_de_credito">Limite de Crédito</label>
                                <input id="number_format" type="text" class="form-control" placeholder="Limite disponível" value="<?= number_format($cliente['limite_de_credito'], 2, ',', '.') ?>" disabled>
                            </div>                                
                        </div>
                        
                    </div>

                    <div class="card-footer border-top border-dark">
                        <div class="row justify-content-end">
                            <a href="javascript:history.back()" class="btn btn-primary" title="voltar"><i class="fas fa-arrow-left"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
    </div>
</div>