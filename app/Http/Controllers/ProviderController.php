<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProviderRequest;
use App\Http\Requests\UpdateProviderRequest;
use App\Models\Provider;
use Facade\FlareClient\View;
use Symfony\Component\ErrorHandler\ThrowableUtils;
use Throwable;

class ProviderController extends Controller
{

    public function index()
    {
        return view('provider.index',['providers'=>Provider::all()]);
    }


    public function create()
    {
        return view('provider.create');
    }


    public function store(StoreProviderRequest $request)
    {
        Provider::create($request->validate([
            'name' => 'required',
            'cuit'=>'required']));

        return redirect(route('providers.index'));
    }


    public function show(Provider $provider)
    {
        $materials=$provider->materials;
        return view('provider.show',compact('provider', 'materials'));
    }


    public function edit(Provider $provider)
    {
        return view('provider.edit',compact('provider'));
    }


    public function update(UpdateProviderRequest $request, Provider $provider)
    {
        $provider->update($request->toArray());
        return redirect(route('providers.index'));
    }


    public function destroy(Provider $provider)
    {
        try{
            $provider->delete();
        } catch (Throwable $e){
            return redirect(route('providers.show',$provider))->with('error','No se puedo eliminar el proveedor por dependencias');
        }
        return redirect(route('providers.index'))->with('success','El proveedor se ha eliminado correctamente');

    }
}
