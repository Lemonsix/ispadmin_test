@props([
    'status',
    'borrador' => 'background-color: #868e96; color: black;',
    'activa' => 'background-color: #23D160; color: 051b11;',
    'cotizacion' => 'background-color: #664d03; color: #ffda6a;',
    'enviaje' => 'background-color: #084298;color: #6ea8fe;', //a reemplazar a futuro, ya que no funciona el compact
    'completada' => 'background-color: #051b11; color:#75b798;',
    'rechazada' => 'text-danger bg-secondary-subtle',
    'incompleta' => 'bg-secondary text-black',
])
<div class="card w-30 m-3 p-0">
    <!-- Condiional para aplicar estilos -->
    @if ($status == 'borrador')
        <div class="card-header" style=" {{ $borrador }}">
            <span>Borrador</span>
        </div>
    @elseif($status == 'activa')
        <div class="card-header " style="{{ $activa }}">
            <span>Activa</span>
        </div>
    @elseif($status == 'cotizacion')
        <div class="card-header" style="{{ $cotizacion }}">
            <span>Cotización</span>
        </div>
    @elseif ($status == 'en viaje')
        <div class="card-header" style="{{ $enviaje }}">
            <span>En Viaje</span>
        </div>
    @elseif($status == 'completada')
        <div class="card-header" style="{{ $completada }}">
            <span>Completada</span>
        </div>
    @elseif($status == 'rechazada')
        <div class="card-header" style="{{ $rechazada }}">
            <span>Rechazada</span>
        </div>
    @elseif($status == 'incompleta')
        <div class="card-header" style="{{ $incompleta }}">
            <span>Incompleta</span>
        </div>
    @endif
    <!-- El cuerpo de la kanban posta-->
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
