@section('title', 'Editar Orden')
<x-layout>
    <x-container>
        <form class='text-white' action='{{ route('requirementOrders.update', $requirementOrder) }}' method="POST">
            @csrf
            @method('PATCH')
            <div class='row'>
                <div class="form-group col">
                    <label class="form-label" for="user_id">Solicitante</label>
                    <select class="form-control" name="user_id" id="user_id" required>
                        @foreach ($users as $user)
                            <option {{ $user->id == $requirementOrder->user_id ? 'selected' : '' }}
                                value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="deadline" class="form-label">Fecha límite</label>
                    <input type='date' class="form-control" name="deadline" id="deadline"
                        value='{{ $requirementOrder->deadline }}'>
                </div>

                <div class="form-group col">
                    <label class="form-label" for="status">Estado</label>
                    <select class="form-control" name="status" id="status" required>
                        @foreach ($requirementOrder->statuses as $status)
                            <option {{ $status == $requirementOrder->status ? 'selected' : '' }} value="{{$status}}">{{Str::ucfirst($status)}}</option>
                        @endforeach
                    </select>ber function store() on null
                </div>



            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <button class='btn btn-success mt-3' type="submit">Guardar cambios</button>
                    </div>

                </div>
            </div>


        </form>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
    </x-container>
</x-layout>
