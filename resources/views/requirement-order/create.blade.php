@section('title', 'Crear Orden')
<x-layout>
    <x-container>
        <form class='text-white' action='{{route('requirementOrders.store')}}' method="POST">
            @csrf
            <div class='row'>
                <div class="form-group col">
                    <label class="form-label" for="user_id">Solicitante</label>
                    <select class="form-control" name="user_id" id="user_id" required>
                        <option disabled value="">--Seleccione usuario solicitante--</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col">
                    <label for="deadline" class="form-label">Fecha límite</label>
                    <input type='date' value="<?php echo date('Y-m-d'); ?>" class="form-control" name="deadline" id="deadline">
                </div>

                <div class="form-group col">
                    <label class="form-label" for="priority">Prioridad</label>
                    <select class="form-control" name="priority" id="priority" required>
                        <option disabled value="">--Seleccione usuario solicitante--</option>
                        <option class='list-group-item list-group-item-success' value='baja'>Baja</option>
                        <option class='list-group-item list-group-item-warning'value='media'>Media</option>
                        <option class='list-group-item list-group-item-danger'value='alta'>Alta</option>
                    </select>
                </div>ize your computer to clone the repository if in fact it is private. (Taking a look, however, indicates that it is not.) What you would normally do is the following:
            </div>
            <x-form-buttons></x-form-buttons>

        </form>
        @if ($errors->any()) @foreach ($errors->all() as $error)

{{ $error }}
@endforeach @endif
    </x-container>
</x-layout>
