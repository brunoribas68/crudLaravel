@extends('layout.master')
@section('conteudo')
	<h1>Listagem do Produto
		{{ $p->nome }}
	</h1>
	<ul>
		
		<li>Valor: R$   </b>{{$p->valor}}</li>
		<li>Descriçao: </b>{{$p->descricao or 'Nao tem descricao'}}</li>
		<li>Quantidade em estoque: </b>{{$p->quantidade}}</li>
	
	</ul>

	<a href="/produtos"><button type="button" class="btn btn-primary">Voltar a lista</button></a>
	@stop