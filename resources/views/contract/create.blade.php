@section('title', 'Creacion de Contratos')
<x-layout>
    <x-container>
        <form class='text-white'>

            <div class="form-group">
                <label class="form-label" for="plan_id">Plan</label>
                <select class="form-control" name="plan_id" id="plan_id">
                    @foreach ($plans as $plan)
                        <option value="{{$plan->id}}">{{$plan->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Nombre de Cliente:</label>
                <input class="form-control" name="name" id="name" placeholder="David Martinez">
            </div>
            <div class="form-group">
                <label for="ipField" class="form-label mt-3">IP</label>
                <input class="form-control" name="ipField  " id="ipField " placeholder="127.0.0.1 ...">
            </div>
            <div class="form-group">
                <label class='mt-3' for="floatingTextarea2">Comentarios</label>
                <textarea class="form-control" placeholder="Cliente de primera" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <button class='btn btn-success mt-3'>Crear</button>
                    </div>
                    <div class="col">
                        <button class='btn btn-danger mt-3 'type="reset">Borrar</button>
                    </div>
           </div>
        </div>
        </form>
    </x-container>
</x-layout>
