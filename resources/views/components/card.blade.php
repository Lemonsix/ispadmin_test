@props(['requirementOrder',
'baja'=>'border-color: #47b96a;',
'media' => 'border-color: #ffc107;',
'alta'=>'border-color: #dd2737;'])

@if ($requirementOrder->priority == 'baja')
    <div  class='card mb-3'style="box-sizing:border-box; width: 13rem;border-right-width: 2rem; {{$baja}}">
@elseif ($requirementOrder->priority == 'media')
    <div  class='card mb-3'style="box-sizing:border-box; width: 13rem;border-right-width: 2rem; {{$media}}">
@elseif ($requirementOrder->priority == 'alta')
    <div  class='card mb-3'style="box-sizing:border-box; width: 13rem;border-right-width: 2rem; {{$alta}}">
@endif
    <div class="card-body">
        <h4 class="card-title"><a href="{{ route('requirementOrders.show', $requirementOrder) }}"class="card-link">{{$requirementOrder->order_number}}</a></h4>
        <h6 class="card-subtitle mb-1"><span class="card-link">{{$requirementOrder->deadline }}</span></h6>
        <h6 class="card-subtitle text-muted">{{ $requirementOrder->user->name }}</h6>
        <p class=" mb-0 card-text">{{$requirementOrder->orderDetails->count()}} items en esta orden</p>
    </div>
</div>

<!-- Refactor con tailwind-->
