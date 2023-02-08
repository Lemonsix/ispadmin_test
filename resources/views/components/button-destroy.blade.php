@props(['route'])
<form method='POST' action="{{ $route }}" class='d-inline'>
    @csrf
    @method('DELETE')
    <button class='btn btn-sm btn-danger d-inline'><i class="fas fa-solid fa-eraser"></i></button>
</form>
