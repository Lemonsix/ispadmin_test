<x-layout>
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
        @foreach ($contracts as $contract)
        <tr>
          <td><a href="{{route('contracts.show',$contract)}}">{{$contract->client_id}}</a></td>
          <td>{{$contract->plan_id}}</td>
          <td>{{$contract->contract_status}}</td>
          <td>{{$contract->ip}}</td>
          <td>{{$contract->service_status}}</td>
          <td>{{$contract->pppoe_username}}</td>
          <td>{{$contract->pppoe_password}}</td>
          <td>{{$contract->notes}}</td>
          <td>{{$contract->name}}</td>
          <td>{{$contract->creado}}</td>
        </tr>
    @endforeach
</tbody>
</table>
</x-layout>
