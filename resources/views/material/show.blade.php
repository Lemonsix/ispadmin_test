@section('title', 'Ver Material')
<x-layout>
    <x-container>
        <div class="container text-white">
            <div class="col">
                <div class="row align-middle"><a>Id: <strong>{{ $material->id }}</a></strong></div>
                <div class="row align-middle"><a>Nombre: <strong>{{ $material->name }}</strong></a></div>
                <div class='row align-middle'><a>Descripción: <strong>{{$material->description}}</strong></a></div>
            </div>
        </div>
        </table>
        <table class="table table-striped table-dark table-hover">

            <thead>
                <tr>
                    <th scope='col'>Id</th>
                    <th scope="col">Proveedor</th>
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
    <table class='w-100 text-center'>
        <tr>
            <td><x-button-modify :route="route('materials.edit', $material)"></x-button-modify></td>
            <td><x-button-destroy :route="route('materials.destroy',$material)"></x-button-destroy></td>
        </tr>
    </table>
</x-layout>
</x-container>
