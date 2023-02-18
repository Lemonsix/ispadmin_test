@section('title', 'Proyectos')
<x-layout>
    <x-branding-a :route="route('projects.create')">Nuevo</x-branding-a>

    <table class="my-2 text-center w-full text-sm text-gray-600 dark:text-gray-400">
        <thead class="text-xs text-gray-800 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Id</th>
                <th scope="col" class="px-6 py-3">Nombre</th>
                <th scope="col" class="px-6 py-3">Descripcion</th>
                <th scope="col" class="px-6 py-3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if ($projects->count())
            @foreach ($projects as $project)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">{{ $project->id }}</td>
                    <td class="px-6 py-4">{{ $project->name }}</td>
                    <td class="px-6 py-4">{{ $project->description }}</td>
                    <td class="px-6 py-4">
                        <x-branding-a :route="route('projects.edit',$project)"> Editar</x-branding-a>
                        <x-branding-a :route="route('projects.destroy',$project)">Borrar</x-branding-a>
                    </td>
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
