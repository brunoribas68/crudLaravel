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
	<form action="login" method="POST">

		<input type="hidden" value="{{csrf_token() }}" name="_token" >
		<div class='form-group'>
			<label for="">Email</label>
			<input name="email" class="form-control" type="email" value="{{ old('email') }}">
		</div>
		<div class='form-group'>
			<label for="">Senha</label>
			<input name="password" class="form-control" type="password" value="{{ old('senha') }}">
		</div>
		<input class="btn btn-primary" type="submit" value="Login">
	</form>
@stop
