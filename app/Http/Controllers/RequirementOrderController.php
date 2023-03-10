<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestroyRequirementOrderRequest;
use App\Http\Requests\StoreRequirementOrderRequest;
use App\Http\Requests\UpdateRequirementOrderRequest;
use App\Models\Material;
use App\Models\OrderDetail;
use App\Models\Project;
use App\Models\RequirementOrder;
use App\Models\UploadedDocument;
use App\Models\User;

use Throwable;

class RequirementOrderController extends Controller
{

    public function index()
    {
        if (request()->query('kanban')) {
            $requirementOrders = RequirementOrder::kanban()->get()->groupBy('status');
            return view('requirement-order.index', compact('requirementOrders'));
        } else {
            $requirementOrders = RequirementOrder::orderBy('deadline', 'asc')->get();
            return view('requirement-order.index', compact('requirementOrders'));
        }
    }

    public function getData(){ //esta funcion es para cargar el AGGrid
        $requirementOrders = RequirementOrder::with('user')->withCount('orderDetails')->get();
        return $requirementOrders;
    }

    public function create()
    {
        $users = User::all();
        $projects = Project::all();
        $materials = Material::all();
        $orderDetails = OrderDetail::all();
        return view('requirement-order.create', compact('users', 'projects', 'materials', 'orderDetails'));
    }


    public function store(StoreRequirementOrderRequest $request)
    {
        $requirementOrder = RequirementOrder::create($request->validated());
        return redirect(route('requirementOrders.show', $requirementOrder));
    }


    public function show(RequirementOrder $requirementOrder) //aca se deberia poder subir imagenes
    {
        $uploadedDocuments = $requirementOrder->uploadedDocuments;

        return view('requirement-order.show', compact('requirementOrder', 'uploadedDocuments'));
    }


    public function edit(RequirementOrder $requirementOrder)
    {
        $users = User::all();
        return view('requirement-order.edit', compact('requirementOrder', 'users'));
    }


    public function update(UpdateRequirementOrderRequest $request, RequirementOrder $requirementOrder)
    {

        $requirementOrder->update($request->toArray());
        return redirect(route('requirementOrders.show', $requirementOrder));
    }


    public function destroy(DestroyRequirementOrderRequest $request, RequirementOrder $requirementOrder)
    {
        try {
            $requirementOrder->delete();
        } catch (Throwable $e) {
            return redirect()->route('requirementOrders.index')
                ->with('error', 'No se puede eliminar esta orden por dependencias');
        }
        return redirect()->route('requirementOrders.index')->with('success', 'Orden correctamente eliminada');
    }
}
