<x-layout>
<x-container>
    <table class="table table-striped table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>
                <a href="{{route('clients.show',$client)}}">{{$client->name}}</a>
            </td>
              <td>{{$client->description}}</td>
              <td>{{$client->status}}</td>
            </tr>
    </tbody>
    </table>
</x-container>
</x-layout>
