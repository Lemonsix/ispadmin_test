@section('title', 'Crear Proyecto')
<x-layout>
    <x-container>
        <form class='text-white' method='POST' action='{{ route('projects.store') }}'>
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Nombre</label>
                <input class="form-control" name="name" id="name" placeholder="Ampliación Solana">
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" class="form-control" placeholder="Cobertura para 250 viviendas en Solana" id="description" style="height: 100px"></textarea>
            </div>

        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <button class='btn btn-success mt-3' type="submit">Crear</button>
                </div>
                <div class="col">
                    <button class='btn btn-danger mt-3 'type="reset">Borrar</button>
                </div>
       </div>
    </div>
</form>
    </x-container>
</x-layout>
