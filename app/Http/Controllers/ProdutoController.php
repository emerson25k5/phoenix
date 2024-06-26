<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\Produto;

class ProdutoController extends Controller {
    
    public function lista(){
        $produtos = Produto::all();
        return view('produto/listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
        $produto = Produto::find($id);

        if(empty($produto)){
            return "Esse produto não existe";
        }

        return view('produto/detalhes')->with('p', $produto);
    }

    public function novo(){
        return view('produto/formulario');
    }

    public function adiciona(){
        Produto::create(Request::all());
        return redirect()->action([ProdutoController::class, 'lista'])
        ->withInput(Request::only('nome'));
    }

    public function listaJson(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function remove($id) {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action([ProdutoController::class, 'lista']);
    }

    public function altera($id) {
        $produto = Produto::find($id);
        return view('produto/altera')->with('p', $produto);
    }

    public function efetuaAlteracao($id) {

        $produto = Produto::find($id);
        $produto->update(Request::all());
        return redirect()->action([ProdutoController::class, 'lista'])
        ->withInput(Request::only('nome'));
    }

}