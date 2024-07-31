<div>
    <div>

        <div class="card mt-3 mb-4 border-light shadow">
            <div class="card-header d-flex justify-content-between">
                <h3>Pesquisar</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('buscarRegistro') }}" method="get">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 d-flex align-items-center">
                            <label class="form-label mr-2 mt-2" for="produto">Produto:</label>
                            <input type="text" class="form-control mr-2" name="produto" placeholder="Nome do produto"
                                value="{{ isset($produto) ? $produto : '' }}">
                            <button type="submit" class="btn btn-primary d-flex align-items-center mr-2"
                                style="width: 40px; height:40px;">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <button type="submit"
                                    class="btn btn-warning d-flex  text-center align-items-center ml-2"
                                    style="width: 40px; height:40px;">
                                    <i class="fa-solid fa-delete-left "></i>
                                </button>
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>

    </div>
</div>