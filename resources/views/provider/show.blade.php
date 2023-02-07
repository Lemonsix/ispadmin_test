<x-layout>
    <x-container>
        <div class="text-white col-md-4">
            <div class="row">
                <div class="col"><a>ID</a></div>
                <div class="col">{{ $provider->id }}</div>
            </div>
            <div class="row">
                <div class="col"><a>Nombre</a></div>
                <div class="col">{{ $provider->name }}</div>
            </div>
            <div class="row">
                <div class="col"><a>CUIT</a></div>
                <div class="col">{{ $provider->cuit }}</div>
            </div>
        </div>

        <table class="table table-striped table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Material</th>
                </tr>
            </thead>
            <tbody>
                @if ($provider->materials)
                    @foreach ($provider->materials as $material)
                        <tr>
                            <td>{{ $material->id }}</td>
                            <td>{{ $material->name }}</td>
                        </tr>
                    @endforeach
                @endif


            </tbody>
        </table>
        <form method='POST'
    action="{{route('providers.destroy',$provider)}}">
        @csrf
        @method('DELETE')
        <button class='btn btn-sm btn-danger float-end'><i class="fas fa-solid fa-eraser"></i></button>
    </form>
    </x-container>
</x-layout>
