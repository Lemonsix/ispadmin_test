@section('title', 'Contratos')
<x-layout>
    <div class='bg-dark text-white'><a class='btn btn-success' href='{{route('contracts.create')}}'>Crear Contrato</a><p class='text-danger mb-0'>*para añadir un nuevo contrato debe existir un plan en la db</p></div>

    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Client id</th>
                <th scope="col">plan_id</th>
                <th scope="col">Contract status</th>
                <th scope="col">ip</th>
                <th scope="col">Service status</th>
                <th scope="col">PPPOE user</th>
                <th scope="col">PPPOE pw</th>
                <th scope="col">notas</th>
                <th scope="col">name</th>
                <th scope="col">creado</th>
            </tr>
        </thead>
        <tbody>
            @if ($contracts->count())
                @foreach ($contracts as $contract)
                    <tr>
                        <td><a href="{{ route('contracts.show', $contract) }}">{{ $contract->client_id }}</a></td>
                        <td>{{ $contract->plan_id }}</td>
                        <td>{{ $contract->contract_status }}</td>
                        <td>{{ $contract->ip }}</td>
                        <td>{{ $contract->service_status }}</td>
                        <td>{{ $contract->pppoe_username }}</td>
                        <td>{{ $contract->pppoe_password }}</td>
                        <td>{{ $contract->notes }}</td>
                        <td>{{ $contract->name }}</td>
                        <td>{{ $contract->creado }}</td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan='10'>
                    <h5 class="text-warning text-center font-weight-bold">No hay contratos agregados a la base de datos aún</h5>
                  </td>
            </tr>
            @endif
        </tbody>
    </table>
</x-layout>
