@props(['type', 'class' => $type == 'submit' ?
'outline outline-2 rounded px-2 text-red-600 font-semibold box-border min-w-16 mx-2 my-2 border-box box-border' :
'bg-gray-200 rounded px-2 py-1 min-w-16 mx-2 my-2 box-border font-light'])

<button {{ $attributes->merge(['class' => $class]) }} type="{{ $type }}">{{ $slot }}</button>
