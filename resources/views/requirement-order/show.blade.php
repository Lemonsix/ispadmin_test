<x-layout>
    <x-container>
        <div class="text-white col-md-4">
            <div class="row">
                <div class="col"><a>Id. de Orden:</a></div>
                <div class="col">{{ $requirementOrder->id }}</div>
            </div>
            <div class="row">
                <div class="col"><a>Solicitante:</a></div>
                <div class="col">{{ $requirementOrder->user->name }}</div>
            </div>
            <div class="row">
                <div class="col"><a>Fecha de requerimiento:</a></div>
                <div class="col">{{ $requirementOrder->deadline }}</div>
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
        <a class='btn btn-success' href="{{ route('requirementOrders.orderDetails.create', $requirementOrder) }}">+</a>
    </x-container>
</x-layout>
