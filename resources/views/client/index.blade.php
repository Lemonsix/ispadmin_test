<x-layout>
    @if ($clients->count())
        <table class="table table-striped table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>
                            <a href="{{ route('clients.show', $client) }}">{{ $client->name }}</a>
                        </td>
                        <td>{{ $client->description }}</td>
                        <td>{{ $client->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1 class="text-white">No hay clientes agregados a la base de datos aún</h1>
    @endif
</x-layout>
