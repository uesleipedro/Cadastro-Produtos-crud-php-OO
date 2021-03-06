<div class="section-1-container section-container">
    <div class="container">
        <div class="row">
            <?=$mensagem?>
            <div class="col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center bg-dark text-light">

                <div class="div-to-align">
                    <div class="row">
                        <h2>Marcas cadastradas</h2>
                        <section>
                            <a href="index.php?pagina=marca/cadastrar_marca">
                                <button class="btn btn-success" id="cadastro_marca">Cadastrar nova Marca</button>
                            </a>
                        </section>
                    </div>

                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $resultados ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>