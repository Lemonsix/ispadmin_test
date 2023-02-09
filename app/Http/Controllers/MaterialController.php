<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use App\Models\Material;
use App\Models\MaterialProvider;
use App\Models\Provider;
use App\Models\User;
use Throwable;

class MaterialController extends Controller
{

    public function index() //listar materiales
    {
        return view('material.index', ['materials' => Material::all()]);
    }


    public function create() //vista de crear nuevos materiales con sus proveedores
    {
        $providers=Provider::all();
        if($providers->count()){
            return view('material.create', ['providers' => Provider::all()]);
        }
        return back()->with('error','No hay proveedores en la base de datos');
    }


    public function store(StoreMaterialRequest $request) //almacenar nuevo material
    {
        $material = Material::create($validated = $request->validated());
        $material->providers()->sync($validated['provider_id']);
        return redirect(route('materials.show',$material));
    }


    public function show(Material $material) //ver el detalle de 1 material en particular
    {
        $providers = $material->providers;
        return view('material.show', compact('material', 'providers'));
    }


    public function edit(Material $material) //vista para editar un material existente
    {
        $providers = Provider::all();
        return view('material.edit', compact('material','providers'));
    }


    public function update(UpdateMaterialRequest $request, Material $material) //persistir un cambio en un material exist
    {
        $material->update($request->toArray());
        return redirect(route('materials.show', $material));
    }


    public function destroy(Material $material) //borrar un material existente
    {
        try{
            $material->delete();
        } catch(Throwable $e){
            return redirect(route('materials.index'))->with('error','No se pudo eliminar el material por dependencias');
        }

        return redirect(route('materials.index'));
    }
}
