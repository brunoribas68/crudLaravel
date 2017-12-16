@extends('layout.master')
@section('conteudo')
	<p class="sucess">Produto {{$nome}} adicionado com sucesso</p>
	<a href="/produtos"><button type="button" class="btn btn-primary">Voltar a lista</button></a>
@stop