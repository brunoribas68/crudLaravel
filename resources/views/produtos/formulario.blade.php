@extends('layout.master')
@section('conteudo')
	<form action="/produtos/adiciona" method="POST">
		
		<input type="hidden" value="{{csrf_token() }}" name="_token" >
		<div class='form-group'>
			<label for="">Nome</label>
			<input name="nome" class="form-control" type="text">
		</div>
		<div class='form-group'>
			<label for="">Valor</label>
			<input name="valor" class="form-control" type="text">
		</div>
		<div class='form-group'>
			<label for="">Quantidade</label>
			<input name="quantidade" class="form-control"type="text">
		</div>
		<div class='form-group'>
			<label for="">Descricao</label>
			<textarea name="descricao" class="form-control" id="" cols="30" rows="10"></textarea>
		</div>
		<input class="btn btn-primary" type="submit" value="Adicionar">
	</form>
@stop