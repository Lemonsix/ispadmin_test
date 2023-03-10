@section('title', 'Ver Plan')
<x-layout>
    <x-container>
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
                <tr>
                    <td>
                        <a href="{{ route('plans.show', $plan) }}">{{ $plan->id }}</a>
                    </td>
                    <td>{{ $plan->name }}</td>
                    <td>{{ $plan->service_type }}</td>
                    <td>{{ $plan->download }}</td>
                    <td>{{ $plan->upload }}</td>
                </tr>
            </tbody>
        </table>
</x-layout>
</x-container>
