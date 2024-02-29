<div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dados de Produto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('produtos') ?>">Produto</a></li>
              <li class="breadcrumb-item active">Dados de Produto</li>
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
                        <h3 class="card-title">Dados de Produto</h3>
                    </div>
                    
                    <div class="card-body">
                            
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" placeholder="Informe o nome" name="nome" value="<?= $produto['nome'] ?>" disabled>
                                    </div>
                                </div>
                                
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="descricao">Descrição</label>
                                        <input type="text" class="form-control" placeholder="Descreva o produto" name="descricao" value="<?= $produto['descricao'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">

                            
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="quantidade">Quantidade</label>
                                        <input type="int" class="form-control" placeholder="Informe a quantidade" name="quantidade" value="<?= $produto['quantidade'] ?>" disabled>
                                    </div>
                                </div>
                                                        
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="quantidade_minima">Quantidade Mínima</label>
                                        <input type="int" class="form-control" placeholder="Informe a quantidade mínima" name="quantidade_minima" value="<?= $produto['quantidade_minima'] ?>" disabled>
                                    </div>
                                </div>
                            
                                <div class="form-group col-lg-3">
                                    <label for="valor_de_compra">Valor de Compra</label>
                                    <input type="text" class="form-control" placeholder="Informe o valor da compra" name="valor_de_compra" value="<?= $produto['valor_de_compra'] ?>" disabled>
                                </div>
                                
                                <div class="form-group col-lg-3">
                                    <label for="valor_de_venda">Valor de Venda</label>
                                    <input type="text" class="form-control" placeholder="Informe o valor da venda" name="valor_de_venda" value="<?= $produto['valor_de_venda'] ?>" disabled>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-3">
                                    <label for="margem_de_lucro">Margem de Lucro (%)</label>
                                    <input type="double" class="form-control" placeholder="Margem de lucro em %" name="margem_de_lucro" value="<?= $produto['margem_de_lucro'] ?>" disabled>
                                </div>
                                
                                <div class="col-lg-3">
                                    <label for="validade">Validade</label>
                                    <input type="date" class="form-control" placeholder="Informe a validade" name="validade" value="<?= $produto['validade'] ?>" disabled>
                                </div>                             
                                
                            </div>

                    </div>

                    <div class="card-footer border-top border-dark">
                        <div class="text-right">
                            <a href="javascript:history.back()" class="btn btn-danger" title="voltar"><i class="fas fa-arrow-left"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
    </div>
</div>