<div class="section-1-container section-container">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center bg-dark text-light">

                <div class="div-to-align">

                    <h2><?= TITLE ?></h2>

                    <form class="form-horizontal" method="post">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item bg-tab" role="presentation">
                                <button class="nav-link active" id="produto-tab" data-bs-toggle="tab" data-bs-target="#produto" type="button" role="tab" aria-controls="produto" aria-selected="true">Produto</button>
                            </li>
                            <!--
                            <li class="nav-item bg-tab" role="presentation">
                                <button class="nav-link" id="medida-tab" data-bs-toggle="tab" data-bs-target="#medida" type="button" role="tab" aria-controls="media" aria-selected="false">Medida</button>
                            </li>
                            -->
                            <li class="nav-item bg-tab" role="presentation">
                                <button class="nav-link" id="imagem-tab" data-bs-toggle="tab" data-bs-target="#imagem" type="button" role="tab" aria-controls="imagem" aria-selected="false">Imagem</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="produto" role="tabpanel" aria-labelledby="produto-tab">

                                <div class="form-group">
                                    <label class="sr-only" for="nome_marca">Nome do Produto</label>
                                    <input type="text" class="form-control" name="nome_produto" id="nome_produto" value="<?= $objProduto->nome_produto ?>">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="npm">NPM</label>
                                    <input type="number" class="form-control" name="npm" id="npm" value="<?= $objProduto->npm ?>">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="grupo">Grupo</label>
                                    <select id="grupo" name="grupo" class="form-select" aria-label="Default select example">
                                        <option>---</option>
                                        <?=$grupo_result?> 
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="marca">Marca</label>
                                    <select id="marca" name="marca" class="form-select" aria-label="Default select example">
                                        <option>---</option>
                                        <?=$marca_result?>
                                    </select>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="medida" role="tabpanel" aria-labelledby="medida-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="unidade_medida">Unidade de Medida</label>
                                    <select id="unidade_medida" name="unidade_medida" class="form-select" aria-label="Default select example">
                                        <option selected>Selecione unidade de Medida</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="imagem" role="tabpanel" aria-labelledby="imagem-tab">
                                <div class="form-group">
                                    <label class="sr-only" for="imagem">Imagem</label>
                                    <input class="form-control" type="file">
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success" id="produdo_submit">Salvar</button>
                                <a class="btn btn-danger" href="/index.php?pagina=produto/lista_produto">Cancelar</a>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>