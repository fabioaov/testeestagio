<?php

namespace App\Http\Controllers;

use App\Models\MetodoPagamento;
use Illuminate\Http\Request;

class MetodosPagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodos = MetodoPagamento::all();

        return view('metodos_pagamento/index')->with('metodos', $metodos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('metodos_pagamento/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'string', 'max:50'],
        ]);

        MetodoPagamento::create([
            'nome' => $request->nome,
        ]);

        return redirect()->route('metodos_pagamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $metodo = MetodoPagamento::where('id', $id)->get();
        
        return view('metodos_pagamento.edit', ['metodo' => $metodo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => ['required', 'string', 'max:50'],
        ]);

        $metodo = MetodoPagamento::find($id);

        $metodo->nome = $request->nome;
        $metodo->valor = $request->valor;
        $metodo->estoque = $request->estoque;

        $metodo->save();

        return redirect()->route('metodos_pagamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $metodo = MetodoPagamento::find($id);

        $metodo->delete();
        
        return redirect()->route('metodos_pagamento');
    }
}
