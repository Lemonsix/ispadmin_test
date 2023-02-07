<x-layout>
    <div class='bg-dark text-white'><a class='btn btn-success' href='{{ route('requirementOrders.create') }}'>Crear
            solicitud de Materiales</a></div>
    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope="col" style="width:100px;">Ver detalle</th>
                <th scope='col'>Id</th>
                <th scope="col">Solicitante</th>
                <th scope="col">Fecha limite</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @if ($requirementOrders->count())
                @foreach ($requirementOrders as $requirementOrder)
                    <tr>
                        <td class='text-center'>
                            <a class='btn btn-sm btn-info'
                                href="{{ route('requirementOrders.show', $requirementOrder) }}"><i
                                    class="fas fa-solid fa-bars"></i>
                        </td>
                        <td>{{$requirementOrder->id}}</td>
                        <td>
                            <a
                                href="{{ route('users.show', $requirementOrder->user->id) }}">{{ $requirementOrder->user->name }}</a>
                        </td>
                        <td>{{ $requirementOrder->deadline }}</td>
                        <td
                            class="{{ $requirementOrder->status == 'rechazada por compras' ? 'text-danger' : ($requirementOrder->status == 'en viaje' ? 'text-warning' : 'text-success') }}">
                            {{ $requirementOrder->status }}
                        </td>
                    </tr>
                @endforeach
                @else
                <tr>
                    <td colspan='5'>
                        <h5 class="text-warning text-center font-weight-bold">No hay planes agregados a la base de datos aún</h5>
                      </td>
                </tr>
                @endif
        </tbody>
    </table>
</x-layout>
