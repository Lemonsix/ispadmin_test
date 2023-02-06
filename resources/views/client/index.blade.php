<x-layout>
    <div class='bg-dark text-white'><a class='btn btn-success' href='{{route('clients.create')}}'>Añadir Nuevo Cliente</a><p class='text-danger mb-0'>*para añadir un nuevo material debe existir un proveedor en la db</p></div>

    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @if ($clients->count())
                @foreach ($clients as $client)
                    <tr>
                        <td>
                            <a href="{{ route('clients.show', $client) }}">{{ $client->name }}</a>
                        </td>
                        <td>{{ $client->description }}</td>
                        <td>{{ $client->status }}</td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan='3'>
                    <h5 class="text-warning text-center font-weight-bold">No hay clientes agregados a la base de datos aún</h5>
                  </td>
            </tr>
            @endif
        </tbody>
    </table>
</x-layout>
