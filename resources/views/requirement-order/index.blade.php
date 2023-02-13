@section('title', 'Ordenes de Material')
<x-layout>
    <div class='bg-dark text-white p-3 position-absolute top-0 end-0'>
        <a class='btn btn-success' href='{{ route('requirementOrders.create') }}'>Crear
            solicitud de Materiales</a>
    </div>
    <div class="d-flex grow-1 container-fluid h-100 justify-content-evenly align-items-center">

        <form method="GET" class='d-flex grow-1 container-fluid h-100 justify-content-evenly align-items-center'>


            @if (request()->query('kanban'))
                <!-- Si la vista es kanban-->
                @foreach ($requirementOrders as $statusName => $statusType)
                    <x-kanban :status='$statusName'>
                        @foreach ($statusType as $status)
                            <x-card :requirementOrder="$status"></x-card>
                        @endforeach
                    </x-kanban>
                @endforeach
                <div class='position-absolute bottom-0 end-0 card m-1 p-1'>
                    <span>Prioridades:</span>
                    <span>Baja: <span style="color: #47b96a">&#9632;</span></span>
                    <span>Media: <span style="color:#ffc107">&#9632;</span></span>
                    <span>Alta: <span style="color:#dd2737">&#9632;</span></span>
                </div>
            @else
                <!-- Si la vista no es kanban-->
                <div>
                    <x-requirement-order-grid></x-requirement-order-grid>


                <input type="hidden" name="kanban" value="true">
            @endif
            <button type='submit' class='btn btn-small btn-warning position-absolute top-50 end-0 '>K/G</button>
        </form>
    </div>
</x-layout>
