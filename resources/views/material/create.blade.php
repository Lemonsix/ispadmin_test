<x-layout>
    <x-container>
        <form class='text-white' method="POST" action='{{ route('materials.store') }}'>
            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Nombre</label>
                <input class="form-control" name="name" id="name" placeholder="Rollo de Fibra" required>
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name='description' class="form-control h-25" placeholder="Rollo de fibra optica para instalación de calle"
                    id="description" required></textarea>
            </div>

            <div class="form-group col">
                <label class="form-label" for="provider_id"> Proveedor</label>
                <select class="form-control" name="provider_id" id="provider_id" required>
                    <option value="">--Seleccione material requerido--</option>
                    @foreach ($providers as $provider)
                        <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                    @endforeach
                </select>
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
