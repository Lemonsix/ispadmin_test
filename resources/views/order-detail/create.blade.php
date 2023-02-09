@section('title', 'Crear Detalle de orden')
<x-layout>
    <x-container>
        @if (session('errors'))
            @foreach (session()->get('errors')->getMessages() as $error)
                @foreach ($error as $message)
                    <span class="text-danger">{{ $message }}</span>
                @endforeach
            @endforeach
        @endif

        <form class="row text-white" action='{{route('requirementOrders.orderDetails.store',$requirementOrder)}}' method="POST">
            @csrf
        <x-order-detail-form :materials='$materials' :providers='$providers' :projects='$projects' :requirementOrder='$requirementOrder'>
        </x-order-detail-form>
    </form>

    </x-container>
</x-layout>
