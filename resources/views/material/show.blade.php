<x-layout>
    <x-container>
        <div class="container text-white">
            <div class="col">
                <div class="row align-middle"><a>Id <strong>{{ $material->id }}</a></strong></div>
                <div class="row align-middle"><a>Nombre <strong>{{ $material->name }}</strong></a></div>
            </div>
        </div>
        </table>
        <table class="table table-striped table-dark table-hover">

            <thead>
                <tr>
                    <th scope='col'>Id</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                @if ($material->providers->count())
                @foreach ($material->providers as $provider)
                <tr>
                    <td>{{$provider->id}}</td>
                    <td>{{$provider->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <tr>
            <td colspan='2'>
                <h6 class="text-warning">No hay ordenes agregadas a la base de datos aún</h6>
            </td>
        </tr>
    @endif
    <form method='POST'
    action="{{route('materials.destroy',$material)}}">
        @csrf
        @method('DELETE')
        <button class='btn btn-sm btn-danger float-end'><i class="fas fa-solid fa-eraser"></i></button>
    </form>
</x-layout>
</x-container>
