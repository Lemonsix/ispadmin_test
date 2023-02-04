<x-layout>
    <x-container>
        <form class='text-white'>
            <div>

                <div class="form-group">
                    <label for="name" class="form-label">Nombre</label>
                    <input class="form-control" name="name" id="name" placeholder="Fibra 1gbps sync">
                </div>

                <div class="form-group">
                    <label for="planTypeSelect" class="form-label">Tipo de plan</label>
                    <select class="form-control" name="planTypeSelect" id="planTypeSelect">
                            <option value="FTTH">FTTH</option>
                            <option value="WIFI">WIFI</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="downloadField" class="form-label">Download (en kbps)</label>
                    <input class="form-control" name="downloadField" id="downloadField" placeholder="105000">
                </div>

                <div class="form-group">
                    <label for="uploadField" class="form-label mt-3">Upload (en kbps)</label>
                    <input class="form-control" name="uploadField  " id="uploadField " placeholder="51000">
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
