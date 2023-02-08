@section('title', 'Listar Orden')
<x-layout>
    <x-container>

        <div class="text-white col-md-4 w-100">
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
                            <td><x-button-modify :route="route('requirementOrders.orderDetails.edit',compact('requirementOrder','orderDetail'))"></x-button-modify>
                           <x-button-destroy :route="route('requirementOrders.orderDetails.destroy',compact('requirementOrder','orderDetail'))"></x-button-destroy></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <table class='w-100 text-center'>
            <tr>
                <td><x-button-new :route="route('requirementOrders.orderDetails.create',$requirementOrder)"></x-button-new></td>
                <td><x-button-modify :route="route('requirementOrders.edit', $requirementOrder)"></x-button-modify></td>
                <td><x-button-destroy :route="route('requirementOrders.destroy',$requirementOrder)"></x-button-destroy></td>
            </tr>
        </table>



    </x-container>
</x-layout>
