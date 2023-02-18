@props(['name'])
<div>
    <label for="{{ $name }}">{{ $slot }}</label>
    <textarea name="{{ $name }}"
        class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500"
        placeholder="Cobertura para 250 viviendas en Solana" id="{{ $name }}" style="height: 100px"></textarea>
</div>
