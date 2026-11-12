<div class="container py-3">
    <h3>Listagem de Categorias</h3>
    <a href="{{ route('categoria.create')}}" class="btn btn-primary">Cadastrar</a>
    <table class="table table-striped">
        <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
    </tr>
  </thead>
  <tbody> 
    @foreach($categorias as $c)
    <tr>
      <td scope="row">{{ $c->id }}</td>
      <td>{{ $c->nome }}</td>
      <td></td>
      <td><a href="{{ route('categoria.edit',['id'=>$c->id])}}" class="btn btn-primary">Editar</a>
    <button class="btn btn-danger" type="button">Excluir</button></td>
      
    </tr>
       @endforeach
</table>
</div>
