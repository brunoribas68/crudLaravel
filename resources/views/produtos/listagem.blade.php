@extends('layout.master')
@section('conteudo')
 @if(empty($produtos))
  <div>Você não tem nenhum produto cadastrado.</div>

 @else
	<h1>Listagem de Produtos</h1>
	<table class="table">

		<tr>
			<th>Nome</td>
			<th>Valor</td>
			<th>Descrição</td>
			<th>Quantidade</td>
			<th>Tamanho</td>
      <th>Categoria</td>
			<th>Detalhes</th>
			<th>Excluir</th>
			<th>Editar</th>
		</tr>
		@foreach ($produtos as $p)
		  <tr class="{{$p->quantidade <=1 ? 'danger' : ''}}">
		    <td>{{ $p->nome }}</td>
		    <td>{{ $p->valor }}</td>
		    <td>{{ $p->descricao }}</td>
		    <td>{{ $p->quantidade }}</td>
		    <td>{{ $p->tamanho }}</td>
        <td>{{ $p->categoria->nome }}</td>
		    <td>
			    <a href="/produtos/mostra/{{ $p->id }}"><i class="material-icons">&#xE8B6;</i></a>
			</td>
			<td>
			    <a href="/produtos/remover/{{ $p->id }}"><i class="material-icons">&#xE872;</i></a>
			</td>
			<td>
			    <a href="/produtos/updateform/{{ $p->id }}"><i class="material-icons">&#xE923;</i></a>
			</td>
		  </tr>
		@endforeach

	</table>
	@if(old ('nome'))
		<div class="alert alert-success">
			Produto {{old ('nome')}} adicionado com sucesso
		</div>
	@endif
	<a href="/produtos/novo"><button type="button" class="btn btn-primary" href="/produtos/novo">
			Adicionar Produto
		</button></a>

	@endif
	 <h4>
  <span class="label label-danger pull-right">
    Um ou menos itens no estoque
  </span>
 </h4>
@stop
