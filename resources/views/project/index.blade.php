<x-layout>
    <div class='bg-dark text-white'><a class='btn btn-success' href='{{ route('projects.create') }}'>Añadir Nuevo
            Proyecto</a>
    </div>
    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope='col'>Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @if ($projects->count())

            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                </tr>
            @endforeach
            @else
                <tr>
                    <td colspan='4'>
                        <h5 class="text-warning text-center font-weight-bold">No hay proyectos agregados a la base de
                            datos aún</h5>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</x-layout>
