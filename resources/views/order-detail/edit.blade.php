@section('title', 'Editar detalle de orden')
<x-layout>
    <x-container>
        @if (session('errors'))
            @foreach (session()->get('errors')->getMessages() as $error)
                @foreach ($error as $message)
                    <span class="text-danger">{{ $message }}</span>
                @endforeach
            @endforeach
        @endif

        <form class="row text-white" action='{{route('requirementOrders.orderDetails.update',compact('requirementOrder','orderDetail'))}}' method="POST">
            @csrf
            @method('PATCH')
        <x-order-detail-form :materials='$materials' :providers='$providers' :projects='$projects' :requirementOrder='$requirementOrder'>
        </x-order-detail-form>
    </form>

    </x-container>
</x-layout>
