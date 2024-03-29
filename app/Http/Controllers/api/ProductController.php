<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        $products = $product->all();
        dd($products);

        return var_dump($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$csrfToken = Session::token();
        $csrfToken = csrf_token();
        
        dd('Redireciona para a pagina de cadastro: '.$csrfToken);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $produto)
    {
        $csrfToken = csrf_token();
        
        $req = $request->all();
        
        $produto->setNome($req['nome']);
        $produto->setPreco($req['preco']);
        $produto->setQuantidade($req['quantidade']);
        $produto->setDescription($req['description']);
        $produto->save();
        
        dd('Salvo com sucesso! '.$produto);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Product $produto)
    {
        //Product::find nao funciona
        if (!$produto = Product::where('id', $id)->first()){
            dd('Não encontrou');
        }
        dd($produto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, Product $produto)
    {
        if (!$produto = Product::where('id', $id)->first()){
            dd('Não encontrou');
        }
        
        //para pegar valores precisa utilizar o x-www-form-urlencoded ao inves de form-data
        //dd($request['nome']);
        //dd($request->input('nome'));
        
        $produto->setNome($request->input('nome'));
        $produto->setPreco($request->input('preco'));
        $produto->setQuantidade($request->input('quantidade'));
        $produto->setDescription($request->input('description'));
        $produto->save();

        // Responda com o produto atualizado ou uma resposta de sucesso
        return response()->json(['message' => 'Produto atualizado com sucesso', 
            'data' => $produto
        ], 200);
    }

    public function atualiza(Request $req, $id){
        dd('ATUALIZOU = '.$id.$req->input('nome').' - REQ: '.$req);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
