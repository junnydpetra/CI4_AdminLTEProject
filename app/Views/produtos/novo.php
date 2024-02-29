<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Novo Produto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('inicio') ?>">Home</a></li>
              <li class="breadcrumb-item active">Cadastro de produto</li>
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
                    
                    <form action="/produtos/store" method="post">
                        
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" placeholder="Informe o nome" name="nome" required>
                                    </div>
                                </div>
                                
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="descricao">Descrição</label>
                                        <input type="text" class="form-control" placeholder="Descreva o produto" name="descricao" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">

                            
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="quantidade">Quantidade</label>
                                        <input type="int" class="form-control" placeholder="Informe a quantidade" name="quantidade" required>
                                    </div>
                                </div>
                                                        
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="quantidade_minima">Quantidade Mínima</label>
                                        <input type="int" class="form-control" placeholder="Informe a quantidade mínima" name="quantidade_minima" required>
                                    </div>
                                </div>
                            
                                <div class="form-group col-lg-3">
                                    <label for="valor_de_compra">Valor de Compra</label>
                                    <input type="text" class="form-control" placeholder="Informe o valor da compra" name="valor_de_compra" required>
                                </div>
                                
                                <div class="form-group col-lg-3">
                                    <label for="valor_de_venda">Valor de Venda</label>
                                    <input type="text" class="form-control" placeholder="Informe o valor da venda" name="valor_de_venda" required>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-lg-3">
                                    <label for="margem_de_lucro">Margem de Lucro (%)</label>
                                    <input type="double" class="form-control" placeholder="Margem de lucro em %" name="margem_de_lucro" required>
                                </div>
                                
                                <div class="col-lg-3">
                                    <label for="validade">Validade</label>
                                    <input type="date" class="form-control" placeholder="Informe a validade" name="validade" required>
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
  