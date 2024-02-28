<div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dados de Funcionário</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('produtos') ?>">Funcionário</a></li>
              <li class="breadcrumb-item active">Dados de Funcionário</li>
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
                    
                    <div class="card-body">
                            
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" placeholder="Informe o nome" name="nome"  value="<?= $produto['nome'] ?>" disabled>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="descricao">Descrição</label>
                                        <input type="text" class="form-control" placeholder="Descrição do produto" name="descricao"  value="<?= $produto['descricao'] ?>" disabled>
                                    </div>
                                </div>
                            
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="quantidade">Quantidade</label>
                                        <input type="int" class="form-control" placeholder="Informe a quantidade" name="quantidade"  value="<?= $produto['quantidade'] ?>" disabled>
                                    </div>
                                </div>
                                                        
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="quantidade_minima">Quantidade Mínima</label>
                                        <input type="int" class="form-control" placeholder="Informe a quantidade mínima" name="quantidade_minima"  value="<?= $produto['quantidade_minima'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                 <div class="form-group col-lg-1">
                                    <label for="valor_de_compra">Valor de Compra</label>
                                    <input type="double" class="form-control" placeholder="Informe o Valor de Compra" name="valor_de_compra"  value="<?= $produto['valor_de_compra'] ?>" disabled>
                                </div>
                                 
                                <div class="form-group col-lg-1">
                                    <label for="valor_de_venda">Valor de Venda</label>
                                    <input type="double" class="form-control" placeholder="Informe o Valor de Venda" name="valor_de_venda"  value="<?= $produto['valor_de_venda'] ?>" disabled>
                                </div>
                                 
                                <div class="form-group col-lg-1">
                                    <label for="margem_de_lucro">Margem de Lucro</label>
                                    <input type="double" class="form-control" placeholder="Informe o Valor de Venda" name="margem_de_lucro"  value="<?= $produto['margem_de_lucro'] ?>" disabled>
                                </div>
                                
                                <div class="col-lg-2">
                                    <label for="validade">Validade</label>
                                    <input type="date" class="form-control" placeholder="Data de Contratação" name="validade"  value="<?= $produto['validade'] ?>" disabled>
                                </div>
                                
                            <input type="hidden" name="produto_id" value="<?= $produto['id'] ?>">
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