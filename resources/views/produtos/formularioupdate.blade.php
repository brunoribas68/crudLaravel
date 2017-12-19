@extends('layout.master')
@section('conteudo')
	<form action="/produtos/update/{{$produtos->id}}" method="POST">

		<input type="hidden" value="{{csrf_token() }}" name="_token" >
		<input type="hidden" value="{{$produtos->id}}" name="id" >
		<div class='form-group'>
			<label for="">Nome</label>
			<input name="nome" class="form-control" type="text" value="{{$produtos->nome}}">
		</div>
		<div class='form-group'>
			<label for="">Valor</label>
			<input name="valor" class="form-control" type="text" value="{{$produtos->valor}}">
		</div>
		<div class='form-group'>
			<label for="">Quantidade</label>
			<input name="quantidade" class="form-control"type="text" value="{{$produtos->quantidade}}">
		</div>
		<div class='form-group'>
			<label for="">Tamanho</label>
			<input name="tamanho" class="form-control"type="text" value="{{$produtos->tamanho}}">
		</div>
		<div class='form-group'>
			<label for="">Descricao</label>
			<textarea name="descricao" class="form-control"  id="" cols="30" rows="10">{{$produtos->descricao}}</textarea>
		</div>
		<input class="btn btn-primary" type="submit" value="Adicionar">
	</form>
@stop
