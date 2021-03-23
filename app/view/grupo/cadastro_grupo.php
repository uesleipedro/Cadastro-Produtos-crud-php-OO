<div class="section-1-container section-container">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center bg-dark text-light">

                <div class="div-to-align">

                    <h2><?=TITLE?></h2>

                    <form class="form-inline" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="id">Código:</label>
                            <input type="number" class="form-control" placeholder="0" id="id" disabled="disable" value="<?= $objGrupo->id_grupo ?>">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="nome_grupo">Nome do Grupo</label>
                            <input type="text" class="form-control" name="nome_grupo" id="nome_grupo" value="<?= $objGrupo->nome_grupo ?>">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-success">Salvar</button>
                            <a class="btn btn-danger" href="/index.php?pagina=lista_grupo">Cancelar</a>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>