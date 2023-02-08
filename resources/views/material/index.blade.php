@section('title', 'Materiales')
<x-layout>
<div class='bg-dark text-white'><a class='btn btn-success' href='{{route('materials.create')}}'>Añadir Nuevo Material</a></div>
    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Stock</th>
                <th scope="col">Detalles</th>
            </tr>
        </thead>
        <tbody>
            @if ($materials->count())
            @foreach ($materials as $material)
                <tr>
                    <td>{{ $material->name }}</td>
                    <td>{{ $material->description }}</td>
                    <td class='text-danger'>Proximamente</td>
                    <td><a href='{{route('materials.show',$material)}}' class='btn btn-info'><i class="fas fa-solid fa-bars"></i>  </a></td>
                </tr>
            @endforeach
            @else
            <tr>
                <td colspan='4'>
                    <h5 class="text-warning text-center font-weight-bold">No hay materiales agregados a la base de datos aún</h5>
                  </td>
            </tr>
        @endif
        </tbody>
    </table>
</x-layout>
