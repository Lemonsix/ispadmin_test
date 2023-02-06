<x-layout>
    <div class='bg-dark text-white'><a class='btn btn-success' href='{{route('plans.create')}}'>Crear Plan</a></div>
    <table class="table table-striped table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo de servicio</th>
                <th scope="col">Download</th>
                <th scope="col">Upload</th>
            </tr>
        </thead>
        <tbody>
            @if ($plans->count())
                @foreach ($plans as $plan)
                    <tr>
                        <td>
                            <a href="{{ route('plans.show', $plan) }}">{{ $plan->id }}</a>
                        </td>
                        <td>{{ $plan->name }}</td>
                        <td>{{ $plan->service_type }}</td>
                        <td>{{ $plan->download }}</td>
                        <td>{{ $plan->upload }}</td>
                    </tr>
                @endforeach
            @else
            <tr>
                <td colspan='5'>
                    <h5 class="text-warning text-center font-weight-bold">No hay planes agregados a la base de datos aún</h5>
                  </td>
            </tr>
            @endif
        </tbody>
    </table>
</x-layout>
