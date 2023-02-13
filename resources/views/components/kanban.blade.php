@props([
    'status',
    'borrador' => 'background-color: #1a1d20; color: #dee2e6;',
    'activa' => 'background-color: #051b11; color: #75b798;',
    'cotizacion' => 'background-color: #664d03; color: #ffda6a;',
    'enviaje' => 'background-color: #084298;color: #d5e6ff;', //a reemplazar a futuro, ya que no funciona el compact
    'completada' => 'background-color: #051b11; color:#75b798;',
    'rechazada' => 'text-danger bg-secondary-subtle',
    'incompleta' => 'bg-secondary text-black',
])
<div class="card w-30 m-3 p-0">
    <!-- Condiional para aplicar estilos -->
    @if ($status == 'borrador')
        <div class="card-header" style=" {{ $borrador }}">
            <span><h4 class='mb-0'>Borrador</h4></span>
        </div>
    @elseif($status == 'activa')
        <div class="card-header " style="{{ $activa }}">
            <span><h4 class='mb-0'>Activa</h4></span>
        </div>
    @elseif($status == 'cotizacion')
        <div class="card-header" style="{{ $cotizacion }}">
            <span><h4 class='mb-0'>Cotización</h4></span>
        </div>
    @elseif ($status == 'en viaje')
        <div class="card-header" style="{{ $enviaje }}">
            <span><h4 class='mb-0'>En Viaje</h4></span>
        </div>
    @elseif($status == 'completada')
        <div class="card-header" style="{{ $completada }}">
            <span><h4 class='mb-0'>Completada</h4></span>
        </div>
    @elseif($status == 'rechazada')
        <div class="card-header" style="{{ $rechazada }}">
            <span><h4 class='mb-0'>Rechazada</h4></span>
        </div>
    @elseif($status == 'incompleta')
        <div class="card-header" style="{{ $incompleta }}">
            <span><h4 class='mb-0'>Incompleta</h4></span>
        </div>
    @endif
    <!-- El cuerpo de la kanban posta-->
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
