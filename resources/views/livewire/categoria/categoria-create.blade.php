<div class="container py-3">
    <h3>Cadstro de Categorias</h3>
    <form wire:submit.prevent='store'>
        <div class="card">
            <div class="card-body">
                <label for="nome">Nome</label>
                <div class="input-group">
                    <input class="form-control" type="text" id="nome" wire:model='nome'>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Cadastrar</button>
            <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>

    </form>
</div>
