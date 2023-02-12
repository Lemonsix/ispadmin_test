@section('title', 'Ordenes de Material')
<x-layout>
    <div class='bg-dark text-white p-3'><a class='btn btn-success' href='{{ route('requirementOrders.create') }}'>Crear
            solicitud de Materiales</a></div>
    <div class="d-flex grow-1 container-fluid h-100 justify-content-evenly align-items-center">

        @foreach ($requirementOrders as $statusName => $statusType)
        <x-kanban :status='$statusName'>
            @foreach ($statusType as $status)
                    <x-card :requirementOrder="$status"></x-card>
            @endforeach
        </x-kanban>
        @endforeach
    </div>
</x-layout>
