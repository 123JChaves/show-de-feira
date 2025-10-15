<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="float-start">
                <h2>Cadastro de Produtos</h2>
            </div>
            <div class="float-end">
                <a href="produto" class="btn btn-success">
                    <i class="fas fa-file"></i> Adicionar Novo
                </a>
                <a href="produto/listar" class="btn btn-success">
                    <i class="fas fa-search"></i> Listar
                </a>
            </div>
        </div>
        <div class="card-body">
            <form name="formCadastro" method="post" action="produto/salvar" enctype="multipart/form-data"
            data-parsley-validate="">
                <div class="row">
                    <div class="col-12 col-md-1">
                        <label for="id">ID:</label>
                        <input type="text" readonly name="id" id="id" class="form-control">
                    </div>
                    <div class="col-12 col-md-8">
                        <label for="nome">Nome do Produto:</label>
                        <input type="text" name="nome" id="nome" class="form-control"
                        required data-parsley-required-message="Digite o nome do produto">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="categoria_id">Categoria:</label>
                        <select name="categoria_id" id="categoria_id" class="form-control"
                        required data-parsley-required-message="Selecione uma categoria">
                            <option value=""></option>
                            <?php
                                $dadosCategoria = $this->produto->listarCategoria();
                                foreach($dadosCategoria as $dados) {
                                    ?>
                                    <option value="<?=$dados->id?>">
                                        <?=$dados->descricao?>
                                    </option>
                                    <?php
                                
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 col-md-12">
                        <label for="descricao">Descrição do Produto:</label>
                        <textarea name="descricao" id="descricao" class="form-control"
                        required data-parsley-required-message="Digite a descrição do produto"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="descricao">Selecione uma foto JPG:</label>
                        <input type="file" name="imagem" id="imagem" class="form-control"
                        accept=".jpg">
                        <input type="hidden" name="imagem">
                    </div>
                    <div class="col-12 col-md-2">
                        <label for="valor">Valor:</label>
                        <input type="text" name="valor" id="valor" class="form-control"
                        required data-parsley-required-message="Digite o valor">
                    </div>
                    <div class="col-12 col-md-2">
                        <label for="destaque">destaque:</label>
                        <select name="destaque" id="destaque" class="form-control" required
                        data-parsley-required-message="Selecione">
                        <option value=""></option>
                        <option value="S">Sim</option>
                        <option value="N">Não</option>
                    </select>
                    </div>
                    <div class="col-12 col-md-2">
                        <label for="ativo">Ativo:</label>
                        <select name="ativo" id="ativo" class="form-control" required 
                        data-parsley-required-message="Selecione">
                        <option value=""></option>
                        <option value="S">Sim</option>
                        <option value="N">Não</option>
                    </select>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success float-end">
                    <i class="fas fa-check"></i> Salvar/Alterar
                </button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#descricao").summernote({
            height: 200
        });
    })
    $(function() {
        $('#valor').maskMoney({thousands:".",decimal:","});
    })
</script>