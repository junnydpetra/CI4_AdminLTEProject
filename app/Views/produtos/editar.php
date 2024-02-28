<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Editar Dados de Funcionário</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('inicio') ?>">Home</a></li>
              <li class="breadcrumb-item active">Editar Dados de Funcionário</li>
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
                        <h3 class="card-title">Dados de Funcionário</h3>
                    </div>
                    
                    <form action="/produtos/store" method="post">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" placeholder="Informe o nome" name="nome"  value="<?= $produto['nome'] ?>" required>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Cargo</label>
                                        <input type="text" class="form-control" placeholder="Informe o cargo" name="cargo"  value="<?= $produto['cargo'] ?>" required>
                                    </div>
                                </div>
                            
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="data_de_nascimento">Data de Nascimento</label>
                                        <input type="date" class="form-control" placeholder="Informe sua data de nascimento" name="data_de_nascimento"  value="<?= $produto['data_de_nascimento'] ?>" required>
                                    </div>
                                </div>
                                                        
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="data_de_nascimento">RG</label>
                                        <input type="text" class="form-control" placeholder="Informe o RG" name="rg"  value="<?= $produto['rg'] ?>" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-lg-1">
                                    <label for="data_de_nascimento">CPF</label>
                                    <input type="text" class="form-control" placeholder="Informe o CPF" name="cpf"  value="<?= $produto['cpf'] ?>" required>
                                </div>
                                
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" class="form-control" placeholder="Informe o telefone" name="telefone"  value="<?= $produto['telefone'] ?>" required>
                                    </div>
                                </div>
                                
                                <div class="col-lg-2">
                                    <label for="data_de_contratacao">Data de Contratação</label>
                                    <input type="date" class="form-control" placeholder="Data de Contratação" name="data_de_contratacao"  value="<?= $produto['data_de_contratacao'] ?>" required>
                                </div>
                                
                                <div class="col-lg-2">
                                    <label for="salario">Salario</label>
                                    <input type="double" class="form-control" placeholder="Informe o salário" name="salario"  value="<?= $produto['salario'] ?>" required>
                                </div>
                                
                                <div class="col-lg-2">
                                    <label for="dia_do_pagamento">Dia do Pagamento</label>
                                    <input type="int" class="form-control" placeholder="Informe o dia do pagamento" name="dia_do_pagamento"  value="<?= $produto['dia_do_pagamento'] ?>" required>
                                </div>
                                
                                <div class="col-lg-4">
                                    <label for="endereco">Endereço</label>
                                    <input type="text" class="form-control" placeholder="Informe o endereço" name="endereco"  value="<?= $produto['endereco'] ?>" required>
                                </div>
                            </div>
                                
                            <input type="hidden" name="produto_id" value="<?= $produto['id'] ?>">
                        </div>
                        
                        <div class="card-footer border-top border-dark">
                            <div class="row justify-content-between">
                            <button type="submit" class="btn btn-primary" title="salvar"><i class="fas fa-save"></i></button>
                                <a href="javascript:history.back()" class="btn btn-danger" title="voltar"><i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
  