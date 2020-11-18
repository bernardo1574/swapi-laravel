<form action="createFavorite" method="POST">
    @csrf
    <input type="hidden" name="url" id="url">
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <input type="hidden" name="type" value="starships">
    <div class="modal fade" id="modalStarWars" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes da Nave</h5>
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
                            <label for="model">Modelo</label>
                            <input type="text" class="form-control" readonly id="model" name="model">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="cost_in_credits">Custo (em créditos)</label>
                            <input type="text" class="form-control" readonly id="cost_in_credits" name="cost_in_credits">
                        </div>
                        <div class="col">
                            <label for="length">Comprimento</label>
                            <input type="text" class="form-control" readonly id="length" name="length">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="max_atmosphering_speed">Velocidade máxima da atmosfera</label>
                            <input type="text" class="form-control" readonly id="max_atmosphering_speed" name="max_atmosphering_speed">
                        </div>
                        <div class="col">
                            <label for="crew">Equipe técnica</label>
                            <input type="text" class="form-control" readonly id="crew" name="crew">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="MGLT">MGLT</label>
                            <input type="text" class="form-control" readonly id="MGLT" name="MGLT">
                        </div>
                        <div class="col">
                            <label for="cargo_capacity">Capacidade de carga</label>
                            <input type="text" class="form-control" readonly id="cargo_capacity" name="cargo_capacity">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="starship_class">Calsse da nave</label>
                            <input type="text" class="form-control" readonly id="starship_class" name="starship_class">
                        </div>
                        <div class="col">
                            <label for="hyperdrive_rating">Avaliação do hiperdrive</label>
                            <input type="text" class="form-control" readonly id="hyperdrive_rating" name="hyperdrive_rating">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <label for="manufacturer">Fabricante</label>
                            <input type="text" class="form-control" readonly id="manufacturer" name="manufacturer">
                        </div>
                        <div class="col">
                            <label for="passengers">Passageiros</label>
                            <input type="text" class="form-control" readonly id="passengers" name="passengers">
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
