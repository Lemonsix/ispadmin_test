@section('title', 'Listar Orden')
<x-layout>
    <x-container>
        <div class="text-white col-md-4 w-100">
            <div class="row">
                <div class="col-5"><a>Id. de Orden:</a></div>
                <div class="col-5">{{ $requirementOrder->id }}</div>
            </div>
            <div class="row">
                <div class="col-5"><a>Solicitante:</a></div>
                <div class="col-5">{{ $requirementOrder->user->name }}</div>
            </div>
            <div class="row">
                <div class="col-5"><a>Fecha de requerimiento:</a></div>
                <div class="col-5">{{ $requirementOrder->deadline }}</div>
            </div>
            <div class="row">
                <div class="col-5"><a>Estado:</a></div>
                <div class="col-5">{{ $requirementOrder->status }}</div>
            </div>
        </div>
        <table class="table table-striped table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Proyecto</th>
                    <th scope="col">Material</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Proveedor</th>
                </tr>
            </thead>
            <tbody>
                @if ($requirementOrder->orderDetails)
                    @foreach ($requirementOrder->orderDetails as $orderDetail)
                        <tr>
                            <td>{{ $orderDetail->project->name }}</td>
                            <td>{{ $orderDetail->material->name }}</td>
                            <td>{{ $orderDetail->qty }}</td>
                            <td>{{ $orderDetail->provider->name }}</td>
                            <td>
                                <x-button-modify :route="route(
                                    'requirementOrders.orderDetails.edit',
                                    compact('requirementOrder', 'orderDetail'),
                                )"></x-button-modify>
                                <x-button-destroy :route="route(
                                    'requirementOrders.orderDetails.destroy',
                                    compact('requirementOrder', 'orderDetail'),
                                )"></x-button-destroy>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <table class='w-100 text-center'>
            <tr>
                <td>
                    <x-button-new :route="route('requirementOrders.orderDetails.create', $requirementOrder)"></x-button-new>
                </td>
                <td>
                    <x-button-modify :route="route('requirementOrders.edit', $requirementOrder)"></x-button-modify>
                </td>
                <td>
                    <x-button-destroy :route="route('requirementOrders.destroy', $requirementOrder)"></x-button-destroy>
                </td>
            </tr>
        </table>
    </x-container>

    <x-container>
        <form action="{{ route('uploaded-documents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="uploadedDocument" class="form-label">Subir archivos</label>
                <input type="hidden" name="requirement_order_id" value="{{ $requirementOrder->id }}">
                <div class="input-group">
                    <input class="form-control" type="file" name="uploadedDocument" id="uploadedDocument"
                        enctype="multipart/form-data">
                    <input class="form-control" type="text" name='description' id='description'
                        placeholder="Inserte una descripción">
                    <button class="btn btn-success" type="submit">Subir documento</button>
                </div>
            </div>
        </form>
        <div class="text-white">
            <table class='w-100 text-center'>
                <thead>
                    <tr>
                        <th scope="col">Nombre Archivo</th>
                        <th scope="col">Tamaño</th>
                        <th scope="col">Fecha de subida</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Borrar archivo</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($uploadedDocuments ?? null)
                        @foreach ($uploadedDocuments as $document)
                            <tr>
                                <td><a href="{{ asset('storage/' . $document->path) }}" target="_blank">{{ $document->id }}</a></td>
                                <td>{{ $document->size }}</td>
                                <td>{{ $document->updated_at }}</td>
                                <td>{{ $document->description }}</td>
                                <td>


                                    <x-button-destroy-file :route="route('uploaded-documents.destroy', $document)" :fileId="$document->id" />
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan='4'>
                                <h5 class="text-warning text-center font-weight-bold">Aún no hay documentos adjuntados a
                                    esta orden</h5>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </x-container>
</x-layout>
