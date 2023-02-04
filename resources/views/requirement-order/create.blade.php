<x-layout>
    <x-container>
        <form class='text-white' action='{{route('requirementOrders.store')}}' method="POST">
            @csrf
            <div class='row'>
                <div class="form-group col">
                    <label class="form-label" for="user_id">Solicitante</label>
                    <select class="form-control" name="user_id" id="user_id" required>
                        <option value="">--Seleccione usuario solicitante--</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="deadline" class="form-label">Fecha límite</label>
                    <input type='date' class="form-control" name="deadline" id="deadline">
                </div>
            </div>
          {{--  <x-order-detail-form :materials="$materials" :projects="$projects"></x-order-detail-form> --}}
            <x-form-buttons></x-form-buttons>

        </form>
        @if ($errors->any()) @foreach ($errors->all() as $error)

{{ $error }}
@endforeach @endif
    </x-container>
</x-layout>
