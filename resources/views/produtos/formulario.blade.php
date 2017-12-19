@extends('layout.master')
@section('conteudo')

	<h1>Novo produto</h1>
	@if (count($errors) > 0)
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	        <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	@endif
	<form action="/produtos/adiciona" method="POST">

		<input type="hidden" value="{{csrf_token() }}" name="_token" >
		<div class='form-group'>
			<label for="">Nome</label>
			<input name="nome" class="form-control" type="text" value="{{ old('nome') }}">
		</div>
		<div class='form-group'>
			<label for="">Valor</label>
			<input name="valor" class="form-control" type="text" value="{{ old('valor') }}">
		</div>
		<div class='form-group'>
			<label for="">Quantidade</label>
			<input name="quantidade" class="form-control" type="text" value="{{ old('quantidade') }}">
		</div>
		<div class='form-group'>
			<label for="">Tamanho</label>
			<input name="tamanho" class="form-control" type="text" value="{{ old('tamanho') }}">
		</div>
		<div class='form-group'>
			<label for="">Descricao</label>
			<textarea name="descricao" class="form-control" id="" cols="30" rows="10" value="{{ old('descricao') }}"></textarea>
		</div>
		<input class="btn btn-primary" type="submit" value="Adicionar">
	</form>
@stop
