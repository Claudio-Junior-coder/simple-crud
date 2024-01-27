<div class="row mt-5" id="create-vehicle">
    <form id="car-form">
        @csrf
        <div class="col-12 d-flex justify-content-between align-items-center">
            <div class="input-group input-group-sm w-25">
                <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                <input type="text" class="form-control" id="name" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
            </div>
            <div class="input-group input-group-sm w-25">
                <span class="input-group-text" id="inputGroup-sizing-sm">Placa</span>
                <input type="text" class="form-control" id="plate" name="plate" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
            </div>
            <button type="submit" class="btn btn-primary w-25">Adicionar</button>
        </div>
    </form>
</div>
