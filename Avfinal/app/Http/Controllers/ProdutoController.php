<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.criar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

        { dd($request->nome);
     produto::create(['nome'=>$request->nome,
     'fornecedor'=>$request->fornecedor
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produto= Produto::findOrFail($id);
return view('layouts.show', ['produto'=>$produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produto $produto)
    {
        //
    }
}
