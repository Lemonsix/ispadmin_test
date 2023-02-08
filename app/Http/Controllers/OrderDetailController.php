<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\MaterialProvider;
use App\Models\OrderDetail;
use App\Models\Project;
use App\Models\Provider;
use App\Models\RequirementOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;
use Throwable;

class OrderDetailController extends Controller
{

    public function create(RequirementOrder $requirementOrder)
    {
        $materials = Material::has('providers')->with('providers')->orderBy('name')->get();
        $providers = Provider::has('materials')->with('materials')->orderBy('name')->get();
        $projects = Project::orderBy('name')->get();
        return view('order-detail.create', compact('requirementOrder', 'providers', 'projects', 'materials'));
    }


    public function store(Request $request, RequirementOrder $requirementOrder)
    {
        $validated = $request->validate([
            'material_id' => [
                'required',
                Rule::exists('material_provider', 'provider_id')->where(function ($query) use ($request) {
                    return $query->where('material_id', $request->input('material_id'));
                })
            ],
            'provider_id' => [
                'required',
                Rule::exists('material_provider', 'material_id')->where(function ($query) use ($request) {
                    return $query->where('provider_id', $request->input('provider_id'));
                })
            ],
            'qty' => 'required|numeric|gt:0',
            'project_id' =>'required'
        ]);

        $validated['material_provider_id'] = MaterialProvider::where('material_id', $validated['material_id'])->where('provider_id', $validated['provider_id'])->first()->id;
        $validated['requirement_order_id'] = $requirementOrder->id;
        Arr::forget($validated,['material_id','provider_id']);
        OrderDetail::create($validated);
        return redirect(route('requirementOrders.show', $requirementOrder));
    }


    public function show(RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        //
    }


    public function edit(RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        //
    }


    public function update(Request $request, RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        //
    }


    public function destroy(RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        try{
            $orderDetail->delete();
        } catch (Throwable $e){
            return back()->with('error','No se ha podido eliminar el detalle');
        }
        return back()->with('success','Se ha eliminado el detalle correctamente');
    }
}
