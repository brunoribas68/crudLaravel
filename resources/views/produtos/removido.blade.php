@extends('layout.master')
@section('conteudo')
	<div class="alert alert-success">Produto {{$nome}} removido com sucesso</div>
	<a href="/produtos"><button type="button" class="btn btn-primary">Voltar a lista</button></a>
@stop