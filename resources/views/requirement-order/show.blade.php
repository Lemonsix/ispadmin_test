<x-layout>
    <x-container>
        <div class="text-white col-md-4 w-100">
            <a class='btn btn-sm btn-warning' href="{{ route('requirementOrders.edit', $requirementOrder) }}"><i
                    class="fas fa-solid fa-pen"></i></a>

            <div class="row">
                <div class="col-5"><a>Id. de Orden:</a></div>
                <div class="col-5">{{ $requirementOrder->id }}</div>
            </div>
            <div class="row">
                <div class="col-5"><a>Solicitante:</a></div>
                <div class="col-5">{{ $requirementOrder->user->name }}</div>
            </div>
            <div class="row">
                <div class="col-5"><a>Fecha de requerimiento:</a></div>
                <div class="col-5">{{ $requirementOrder->deadline }}</div>
            </div>
            <div class="row">
                <div class="col-5"><a>Estado:</a></div>
                <div class="col-5">{{ $requirementOrder->status }}</div>
            </div>
        </div>

        <table class="table table-striped table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Proyecto</th>
                    <th scope="col">Material</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Proveedor</th>
                </tr>
            </thead>
            <tbody>
                @if ($requirementOrder->orderDetails)
                    @foreach ($requirementOrder->orderDetails as $orderDetail)
                        <tr>
                            <td>{{ $orderDetail->project->name }}</td>
                            <td>{{ $orderDetail->material->name }}</td>
                            <td>{{ $orderDetail->qty }}</td>
                            <td>{{ $orderDetail->provider->name }}</td>
                        </tr>
                    @endforeach
                @endif


            </tbody>
        </table>
        <a class='btn btn-success'
        href="{{ route('requirementOrders.orderDetails.create', $requirementOrder) }}">+</a>
        <form method='POST'
        action="{{route('requirementOrders.destroy',$requirementOrder)}}">
            @csrf
            @method('DELETE')
            <button class='btn btn-sm btn-danger float-end'><i class="fas fa-solid fa-eraser"></i></button>
        </form>
    </x-container>
</x-layout>
