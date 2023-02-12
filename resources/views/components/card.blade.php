@props(['requirementOrder'])

<div  class='card'style="width: 15rem;border-right-width: 2rem">
    <div class="card-body ">
        <h3 class="card-title"><a href="{{ route('requirementOrders.show', $requirementOrder) }}" class="card-link">{{$requirementOrder->deadline }}</a></h3>
        <h6 class="card-subtitle text-muted">{{ $requirementOrder->user->name }}</h6>
        <p class=" mb-0 card-text">{{$requirementOrder->orderDetails->count()}} items en esta orden</p>
    </div>
</div>

