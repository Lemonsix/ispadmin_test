@section('title', 'Crear Proveedor')
<x-layout>
    <x-container>
        <form class='text-white' method="POST" action='{{ route('providers.update',$provider) }}'>
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name" class="form-label">Razón Social</label>
                <input class="form-control" name="name" id="name" placeholder="Proveedor S.A" value='{{$provider->name}}'required>
            </div>
            <div class="form-group">
                <label for="cuit">CUIT</label>
                <input type="number" name='cuit' class="form-control" placeholder="30159486599" value='{{$provider->cuit}}' id="cuit"
                    required>
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <button class='btn btn-success mt-3' type="submit">Guardar cambios</button>
                    </div>

                </div>
            </div>
        </form>
    </x-container>
</x-layout>
