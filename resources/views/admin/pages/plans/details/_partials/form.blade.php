{{-- @include('admin.includes.alerts') --}}

@include('admin.includes.alerts')
@csrf

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{$detail->name ?? old('name')}}">
</div>
<div class="formgfroup">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>