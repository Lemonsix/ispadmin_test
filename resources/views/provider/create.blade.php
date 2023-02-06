<x-layout>
    <x-container>

        <form class='text-white' method="POST" action='{{ route('providers.store') }}'>
            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Razón Social</label>
                <input class="form-control" name="name" id="name" placeholder="Proveedor S.A" required>
            </div>
            <div class="form-group">
                <label for="cuit">CUIT</label>
                <input type="number" name='cuit' class="form-control" placeholder="30-15948659-9" id="cuit"
                    required>
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
