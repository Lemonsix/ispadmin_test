<div class="bg-red-700 h-10 flex flex-row">
    <div class='h-8 w-8 m-1 bg-black rounded'>.</div>   <!--Placeholder de logo -->
    <x-navbar-dropdown id="dropdownIsp" title='ISP' >
        <x-navbar-dropdown-btn :route="route('clients.index')">Clientes</x-navbar-dropdown-btn>
        <x-navbar-dropdown-btn :route="route('contracts.index')">Contratos</x-navbar-dropdown-btn>
        <x-navbar-dropdown-btn :route="route('plans.index')">Planes</x-navbar-dropdown-btn>
    </x-navbar-dropdown>
    <x-navbar-dropdown id="dropdownSolicitudes" title='Solicitudes'>
        <x-navbar-dropdown-btn :route="route('requirementOrders.index')">Solicitudes</x-navbar-dropdown-btn>
        <x-navbar-dropdown-btn :route="route('materials.index')">Materiales</x-navbar-dropdown-btn>
        <x-navbar-dropdown-btn :route="route('providers.index')">Proveedores</x-navbar-dropdown-btn>
        <x-navbar-dropdown-btn :route="route('projects.index')">Proyectos</x-navbar-dropdown-btn>
    </x-navbar-dropdown>
</div>
