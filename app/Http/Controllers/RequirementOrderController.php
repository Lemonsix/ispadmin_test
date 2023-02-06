<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequirementOrderRequest;
use App\Http\Requests\UpdateRequirementOrderRequest;
use App\Models\Material;
use App\Models\OrderDetail;
use App\Models\Project;
use App\Models\RequirementOrder;
use App\Models\User;
use Illuminate\Http\Request;

class RequirementOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('requirement-order.index', ['requirementOrders' => RequirementOrder::orderBy('deadline')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $projects = Project::all();
        $materials = Material::all();
        $orderDetails = OrderDetail::all();
        return view('requirement-order.create', compact('users', 'projects', 'materials', 'orderDetails'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requirementOrder = RequirementOrder::create($request->validate(['user_id' => 'required','deadline'=>'required|nullable']));
        return redirect(route('requirementOrders.show',$requirementOrder));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequirementOrder  $requirementOrder
     * @return \Illuminate\Http\Response
     */
    public function show(RequirementOrder $requirementOrder)
    {
        return view('requirement-order.show', compact('requirementOrder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequirementOrder  $requirementOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(RequirementOrder $requirementOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequirementOrderRequest  $request
     * @param  \App\Models\RequirementOrder  $requirementOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequirementOrderRequest $request, RequirementOrder $requirementOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequirementOrder  $requirementOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequirementOrder $requirementOrder)
    {
        //
    }
}
