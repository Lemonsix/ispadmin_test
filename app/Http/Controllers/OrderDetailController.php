<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderDetailRequest;
use App\Http\Requests\UpdateOrderDetailRequest;
use App\Models\Material;
use App\Models\OrderDetail;
use App\Models\Project;
use App\Models\Provider;
use App\Models\RequirementOrder;


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


    public function store(StoreOrderDetailRequest $request, RequirementOrder $requirementOrder)
    {
        $validated = $request->validated();
        $validated['material_provider_id'] = Provider::find($validated['provider_id'])->materials->first(fn($material)=>$material->id == $validated['material_id'])->id;
        $validated['requirement_order_id'] = $requirementOrder->id;
        OrderDetail::create($validated);
        return redirect(route('requirementOrders.show', $requirementOrder));
    }


    public function show(RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        //
    }


    public function edit(RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        $materials = Material::has('providers')->with('providers')->orderBy('name')->get();
        $providers = Provider::has('materials')->with('materials')->orderBy('name')->get();
        $projects = Project::orderBy('name')->get();
        return view('order-detail.edit', compact('requirementOrder', 'providers', 'projects', 'materials','orderDetail'));
    }


    public function update(UpdateOrderDetailRequest $request, RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        $validated = $request->validated();
        $validated['material_provider_id'] = Provider::find($validated['provider_id'])->materials->first(fn($material)=>$material->id == $validated['material_id'])->id;
        $validated['requirement_order_id'] = $requirementOrder->id;
        $orderDetail->update($validated);
        return redirect(route('requirementOrders.show', $requirementOrder));
    }


    public function destroy(RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        try {
            $orderDetail->delete();
        } catch (Throwable $e) {
            return back()->with('error', 'No se ha podido eliminar el detalle');
        }
        return back()->with('success', 'Se ha eliminado el detalle correctamente');
    }
}
