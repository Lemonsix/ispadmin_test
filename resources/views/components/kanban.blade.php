@props([
    'status',
    'borrador' => 'bg-primary',
    'activa' => 'bg-success',
    'cotizacion' => 'bg-warning-subtle text-warning-emphasis',
    'en viaje' => 'bg-primary-subtle text-info-emphasis', //a reemplazar a futuro, ya que no funciona el compact
    'completada' => 'text-success bg-success-subtle',
    'rechazada' => 'text-danger bg-secondary-subtle',
    'incompleta' => 'bg-secondary text-black',
])
<div class="card w-30">
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
        <div class="card-header" style="{{ $'en viaje' }}">
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
