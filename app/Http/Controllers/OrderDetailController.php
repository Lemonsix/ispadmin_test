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

class OrderDetailController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\RequirementOrder  $requirementOrder
     * @return \Illuminate\Http\Response
     */
    public function create(RequirementOrder $requirementOrder)
    {
        $materials = Material::has('providers')->with('providers')->get();
        $providers = Provider::has('materials')->with('materials')->get();
        $projects = Project::all();
        return view('order-detail.create', compact('requirementOrder', 'providers', 'projects', 'materials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequirementOrder  $requirementOrder
     * @return \Illuminate\Http\Response
     */
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
            'qty' => 'required',
            'project_id' =>'required'
        ]);

        $validated['material_provider_id'] = MaterialProvider::where('material_id', $validated['material_id'])->where('provider_id', $validated['provider_id'])->first()->id;
        $validated['requirement_order_id'] = $requirementOrder->id;
        Arr::forget($validated,['material_id','provider_id']);
        OrderDetail::create($validated);
        return redirect(route('requirementOrders.show', $requirementOrder));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequirementOrder  $requirementOrder
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function show(RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequirementOrder  $requirementOrder
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequirementOrder  $requirementOrder
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequirementOrder  $requirementOrder
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequirementOrder $requirementOrder, OrderDetail $orderDetail)
    {
        //
    }
}
