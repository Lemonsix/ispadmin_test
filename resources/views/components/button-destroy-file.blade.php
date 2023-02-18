@props(['route', 'fileId'])

<form method="POST" action="{{ $route }}" class="d-inline">
    @csrf
    @method('DELETE')
    <input type="hidden" name="fileId" value="{{ $fileId }}">
    <button class="btn btn-sm btn-danger d-inline"><i class="fas fa-solid fa-eraser"></i></button>
</form>
