<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;
use App\Produto;
use Validator;

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

     public function adiciona(){

        //pegar informacoes do form
        $validator = Validator::make(
            ['nome' => Request::input('nome')],
            ['nome' => 'required|min:3']
        );
        if($validator->fails())
        {
            $validator->messages();
        }
        Produto::create(Request::all());
    	return redirect('/produtos')->withInput();
    }

    public function remover($id){

        $produto =  Produto::find($id);
		$produto->delete();
    	return redirect('/produtos');
    }

    public function updateform($id){

    	$produtos = DB::select('select * from produtos where id = ?',[$id]);
		return view('produtos.formularioupdate')->with('produtos',$produtos[0]);
    }

      public function update(){

      	//pegar informacoes do form
     	/*$nome = Request::input('nome');
     	$quantidade = Request::input('quantidade');
     	$valor = Request::input('valor');
     	$descricao = Request::input('descricao');
    	$id = Request::input('id');

    	//salvar no bd
		DB::update("update produtos set nome = ?, quantidade = ?, valor = ?, descricao = ? where id =".$id,array($nome, $quantidade, $valor, $descricao));
*/
        Produto::update(Request::all());
        return redirect('/produtos')->withInput();
    	//return view('produtos.update')->with('nome',$nome);
    }
}
