<x-layout>
    <x-container>

        <form class='text-white'>
            <div class="form-group">
                <label for="name" class="form-label">Nombre</label>
                <input class="form-control" name="name" id="name" placeholder="Jorge Martinez">
            </div>
            <div class="form-group">
                <label for="commentsTextarea">Comentarios</label>
                <textarea class="form-control" placeholder="Cliente de primera" id="commentsTextarea" style="height: 100px"></textarea>
            </div>
        </form>
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
    </x-container>
</x-layout>
