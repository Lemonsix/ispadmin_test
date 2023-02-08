@section('title', 'Editar Proyecto')
<x-layout>
    <x-container>
        <form class='text-white' method='POST' action='{{ route('projects.update',$project) }}'>
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name" class="form-label">Nombre</label>
                <input class="form-control" name="name" id="name" placeholder="Ampliación Solana" value="{{$project->name}}">
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea  name="description" class  ="form-control" placeholder="Cobertura para 250 viviendas en Solana" id="description" style="height: 100px">{{$project->description}}</textarea>
            </div>

        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <button class='btn btn-success mt-3' type="submit">Confirmar</button>
                </div>
                <div class="col">
                    <a href="{{route('projects.index')}}" class='btn btn-sm btn-danger mt-3'>No guardar cambios</a>
                </div>
       </div>
    </div>
</form>
    </x-container>
</x-layout>
