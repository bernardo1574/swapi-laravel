<form action="createFavorite" method="POST">
    @csrf
    <input type="hidden" name="url" id="url">
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <input type="hidden" name="type" value="planets">
    <div class="modal fade" id="modalStarWars" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes do planeta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mt-2">
                        <div class="col">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" readonly id="name" name="name">
                        </div>
                        <div class="col">
                            <label for="climate">Clima</label>
                            <input type="text" class="form-control" readonly id="climate" name="climate">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="diameter">Diâmetro</label>
                            <input type="text" class="form-control" readonly id="diameter" name="diameter">
                        </div>
                        <div class="col">
                            <label for="gravity">Gravidade</label>
                            <input type="text" class="form-control" readonly id="gravity" name="gravity">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="orbital_period">Período orbital</label>
                            <input type="text" class="form-control" readonly id="orbital_period" name="orbital_period">
                        </div>
                        <div class="col">
                            <label for="population">População</label>
                            <input type="text" class="form-control" readonly id="population" name="population">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="rotation_period">Período de Rotação</label>
                            <input type="text" class="form-control" readonly id="rotation_period" name="rotation_period">
                        </div>
                        <div class="col">
                            <label for="surface_water">Água da superfície</label>
                            <input type="text" class="form-control" readonly id="surface_water" name="surface_water">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="terrain">Terreno</label>
                            <input type="text" class="form-control" readonly id="terrain" name="terrain">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    @if( isset($insert))
                        <button type="submit" class="btn btn-outline-success">Salvar como favorito</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
