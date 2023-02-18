@section('title', 'Crear Proyecto')
<x-layout>
    <x-container>
        <form class='text-black' method='POST' action='{{ route('projects.store') }}'>
            @csrf
            <x-form-field-text name='name'>Nombre:</x-form-field-text>
            <x-form-field-textarea name='description'>Descripción:  </x-form-field-textarea>
            <div class="flex flex-row justify-between">
                <x-branding-button type='submit'>Agregar</x-branding-button>
                <x-branding-button type='reset'>Cancelar</x-branding-button>
       </div>

</form>
    </x-container>
</x-layout>
