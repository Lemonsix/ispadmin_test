@section('title', 'Editar Orden')
<x-layout>
    <x-container>

        <form class='text-white' action='{{ route('materials.update', $material) }}' method="POST">
            @csrf
            @method('PATCH')
            <div class='row'>

                <div class="form-group">
                    <label for="name" class="form-label">Nombre</label>
                    <input class="form-control" name="name" id="name" placeholder="Rollo de Fibra" required>
                </div>

                <div class="form-group">
                    <label for="description" class="form-label">Descripción</label>
                    <input class="form-control" name="description" id="description" placeholder="Alguna descripcion" required>
                </div>

                <div class="form-group col">
                    <label class="form-label" for="provider_id"> Proveedor</label>
                    <select class="form-control" name="provider_id[]" id="provider_id" required multiple>
                        <option value="">--Seleccione material requerido--</option>
                        @foreach ($providers as $provider)
                            <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                        @endforeach
                    </select>
                    <span>* es posible seleccionar varios proveedores para el material, manteniendo apretando ctrl y haciendo click en cada uno</span>
                </div>


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
