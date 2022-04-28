@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{$plans->name ?? old('name')}}">
</div>
<div class="form-group">
    <label>Preço:</label>
    <input type="text" name="price" class="form-control" placeholder="Preço:" value="{{$plans->price ?? old('price')}}">
</div>
<div class="form-group">
    <label>Descrição:</label>
    <input type="text" name="description" class="form-control" placeholder="Descrição:" value="{{$plans->description ?? old('description')}}">
</div>
<div class="formgfroup">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>