@props(['materials', 'providers', 'projects', 'requirementOrders'])

<div>
    <div class="form-group col">
        <label class="form-label" for="material_id"> Material</label>
        <select class="form-control" name="material_id" id="material_id" required>
            <option value="">--Seleccione material requerido--</option>
            @foreach ($materials as $material)
                <option value="{{ $material->id }}">{{ $material->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col">
        <label class="form-label" for="provider_id"> Proveedor</label>
        <select class="form-control" name="provider_id" id="provider_id" required>
            <option value="">--Seleccione material requerido--</option>
            @foreach ($providers as $provider)
                <option value="{{ $provider->id }}">{{ $provider->name }}</option>
            @endforeach
        </select>
    </div>
    @error('provider_id')
        <h6>Ese proveedor no vende ese material</h6>
    @enderror
    <div class="form-group col">
        <label class="form-label" for="qty"id="qty">Cantidad</label>
        <input type="number" class='form-control' name="qty" id="qty" required>
    </div>
    <div class="form-group col">
        <label class="form-label" for="project_id">Obra</label>
        <select class="form-control" name="project_id" id="project_id" required>
            <option value="">--Seleccione obra destinada--</option>
            @foreach ($projects as $project)
                <option value="{{ $project->id }}">{{ $project->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="d-flex p-3"><button class='btn btn-success'>Agregar</button></div>
</div>
