<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutosController extends Controller{
    //Listar produtos
    public function index(){
        $produtos = Produtos::all(); 
        return view("produtos.index",compact("produtos"));
    }

    public function cadastro(){
        return view("produtos.cadastro");
    }

    public function novo(Request $req){

        // $nomeProduto = $req->nomeProduto;
        // $descricaoProduto = $req->descricaoProduto;
        // $qtdinicialProduto = $req->qtdinicialProduto;
        // $valorProduto = $req->valorProduto;
        // $categoriaProduto = $req->categoriaProduto;
        // $estadoProduto = $req->estadoProduto;
        $produto = new Produtos();
        $produto->nomeProduto = $req->nomeProduto;
        $produto->descricaoProduto = $req->descricaoProduto;
        $produto->qtdinicialProduto = $req->qtdinicialProduto;
        $produto->valorProduto = $req->valorProduto;
        $produto->categoriaProduto = $req->categoriaProduto;
        $produto->estadoProduto = $req->estadoProduto;
        
        if($produto->save()){
            $mensagem = "Produto inserido com sucesso";
        }else{
            $mensagem = "Não foi possível inserir";
        }
        return view("produtos.resultado",compact("mensagem")); 
    }
    
    public function telaAlteracao($id){
        $produto = Produtos::find($id); // find busca o atributo de chave primária
        return view("produtos.alterar", ["p" => $produto]);
    }

    public function alterar(Request $req, $id){
        $nomeProduto = $req->input("nomeProduto");
        $descricaoProduto = $req->input("descricaoProduto");
        $qtdinicialProduto = $req->input("qtdinicialProduto");
        $valorProduto = $req->input("valorProduto");
        $categoriaProduto = $req->input("categoriaProduto");
        $estadoProduto = $req->input("estadoProduto");
        $produto = Produtos::find($id);
        $produto->nomeProduto = $req->nomeProduto;
        $produto->descricaoProduto = $req->descricaoProduto;
        $produto->qtdinicialProduto = $req->qtdinicialProduto;
        $produto->valorProduto = $req->valorProduto;
        $produto->categoriaProduto = $req->categoriaProduto;
        $produto->estadoProduto = $req->estadoProduto;

        if ($produto->save()){
            $msg = "Produto atualizado com sucesso";
        }else{
            $msg = "Produto não foi atualizado";
        }
        return view("produtos.resultado", ["mensagem" => $msg]);
    }

    public function excluir($id){
        $produto = Produtos::find($id);
        
        if($produto->delete()){ 
            $msg = "Produto excluído com sucesso";
        }else{
            $msg = "Não foi possível excluir o protudo";
        }
        return view("produtos.resultado", ["mensagem"=> $msg]);
    }

    
}
