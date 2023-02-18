@props(['title'])

<button class="text-white  hover:bg-red-500 focus:ring-2 focus:outline-red-300 font-medium  text-sm min-w-min px-2 mx-2 p-0 flex items-center" type="button" data-dropdown-toggle="{{$attributes['id']}}">
    <span>{{ $title }}</span>
    <span><svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></span>
</button>
<!-- Dropdown menu -->
<div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="{{$attributes['id']}}">
    {{ $slot }}
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
