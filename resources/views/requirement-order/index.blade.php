@section('title', 'Ordenes de Material')
<x-layout>
    <div class='bg-dark text-white p-3 position-absolute top-0 end-0'><a class='btn btn-success' href='{{ route('requirementOrders.create') }}'>Crear
            solicitud de Materiales</a></div>
    <div class="d-flex grow-1 container-fluid h-100 justify-content-evenly align-items-center">
        @foreach ($requirementOrders as $statusName => $statusType)
            <x-kanban :status='$statusName'>
                @foreach ($statusType as $status)
                    <x-card :requirementOrder="$status"></x-card>
                @endforeach
            </x-kanban>
        @endforeach
<div class='position-absolute bottom-0 end-0 card'>
    <span>Prioridades:</span>
    <span>Baja: <span style="color: #47b96a">&#9632;</span></span>
    <span>Media: <span style="color:#ffc107">&#9632;</span></span>
    <span>Alta: <span style="color:#dd2737">&#9632;</span></span>
</div>
    </div>
</x-layout>

