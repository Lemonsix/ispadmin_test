<x-layout>

<div class='bg-dark text-white'><a class='btn btn-success' href='{{route('materials.create')}}'>Añadir Nuevo Materal</a><p class='text-danger mb-0'>*para añadir un nuevo material debe existir un proveedor en la db</p></div>
    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Stock</th>
                <th scope="col">Ver Proveedores</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materials as $material)
                <tr>
                    <td>{{ $material->name }}</td>
                    <td>{{ $material->description }}</td>
                    <td class='text-danger'>Proximamente</td>
                    <td><button class='btn btn-info'><i class="fas fa-solid fa-bars"></i>  </button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
