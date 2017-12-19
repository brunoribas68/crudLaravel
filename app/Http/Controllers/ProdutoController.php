<?php

namespace App\Http\Controllers;

use Request;
use App\Produto;
use App\Http\Requests\ProdutosRequest;


class ProdutoController extends Controller
{
    public function lista(){

        $produtos = Produto::all();
        return view('produtos.listagem')->with('produtos',$produtos);
    }

    public function mostra($id){

    	$produto = Produto::find($id);
    	return view('produtos.detalhes')->with('p',$produto);

    }

    public function novo(){

    	return view('produtos.formulario');
    }

    public function adiciona(ProdutosRequest $request){

        Produto::create($request->all());

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }

    public function remover($id){

        $produto =  Produto::find($id);
		$produto->delete();
    	return redirect('/produtos');
    }

    public function updateform($id){

    	$produtos = Produto::find($id);
		return view('produtos.formularioupdate')->with('produtos',$produtos);
    }

      public function update($id){

      	//pegar informacoes do form
      Produto::where('id', $id)
          ->update(Request::except('_method', '_token'));
      return redirect('/produtos');
    }
}
