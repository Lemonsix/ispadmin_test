<x-layout>

    <div class='bg-dark text-white'><a class='btn btn-success' href="{{ route('providers.create') }}">Añadir Nuevo
            Proveedor</a></div>
    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope='col'>Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">CUIT</th>
                <th scope="col">Detalle</th>
            </tr>
        </thead>
        <tbody>
            @if ($providers->count())
                @foreach ($providers as $provider)
                    <tr>
                        <td>{{ $provider->id }}</td>
                        <td>{{ $provider->name }}</td>
                        <td>{{ $provider->cuit }}</td>
                        <td><a class='btn btn-sm btn-info' href="{{ route('providers.show', $provider) }}"><i
                                    class="fas fa-solid fa-bars"></i></a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan='4'>
                        <h5 class="text-warning text-center font-weight-bold">No hay proveedores agregados a la base de
                            datos aún</h5>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</x-layout>
