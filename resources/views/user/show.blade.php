<x-layout>
   <x-container>
    <table class="table table-striped table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td>
                <a href="{{route('users.show',$user)}}">{{$user->id}}</a>
            </td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>

            </tr>
    </tbody>
    </table>
   </x-container>
    </x-layout>
