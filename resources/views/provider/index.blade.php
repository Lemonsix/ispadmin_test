<x-layout>

    <div class='bg-dark text-white'><a class='btn btn-success' href="{{ route('providers.create') }}">Añadir Nuevo Proveedor</a></div>
        <table class="table table-striped table-dark table-hover">
            <thead>
                <tr>
                    <th scope='col'>Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">CUIT</th>
                    <th scope="col">Ver Materiales</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($providers as $provider)
                    <tr>
                        <td>{{$provider->id}}</td>
                        <td>{{ $provider->name }}</td>
                        <td>{{ $provider->cuit }}</td>
                        <td><a class='btn btn-sm btn-info' href="{{route('providers.show',$provider)}}"><i class="fas fa-solid fa-bars"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-layout>
