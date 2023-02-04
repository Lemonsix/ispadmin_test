<x-layout>
    @if ($requirementOrders->count())
    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Solicitante</th>
                <th scope="col">Fecha limite</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requirementOrders as $requirementOrder)
                <tr>
                    <td>
                        <a href="{{ route('requirementOrders.show', $requirementOrder) }}">{{ $requirementOrder->id }}</a>
                    </td>
                    <td>
                        <a href="{{ route('users.show', $requirementOrder->user->id) }}">{{ $requirementOrder->user->name }}</a>
                    </td>
                    <td>{{ $requirementOrder->deadline }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <h6 class="text-white m-3">No hay ordenes de compra de materiales aún</h6>
@endif
</x-layout>
