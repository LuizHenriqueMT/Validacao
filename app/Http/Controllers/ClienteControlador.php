<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view ('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|min:3|max:20|unique:clientes',
            'idade' => 'required',
            'endereco' => 'required',
            'email' => 'required|email'
        ];
        $mensagens = [
            // MENSAGEM GENÉRICA ( :attribute )
            'required' => 'O campo :attribute não pode estar em branco',

            //MENSAGEM PERSONALIZADA ( 'nome.required' => '...' )
            //'nome.required' => 'Preencha o nome do cliente.',
            'nome.min' => 'O nome do cliente deve ter o minímo de 3 caracteres.',
            'nome.max' => 'O nome do cliente não deve ter mais de 20 caracteres.',
            'nome.unique' => 'O nome do cliente já está cadastrado.',
            'idade.required' => 'Preencha a idade do cliente.',
            'endereco.required' => 'Preencha o endereço do cliente.',
            'email.required' => 'Preencha o e-mail do cliente.',
            'email.email' => 'Preencha um endereço de e-mail válido.'
        ];

        $request->validate($regras,$mensagens);

        /* EXEMPLO DE UTILIZAÇÃO DE VALIDAÇÃO SEM TRATAMENTO DE MENSAGENS
            $request->validate([
            'nome' => 'required|min:3|max:20|unique:clientes',
            'idade' => 'required',
            'endereco' => 'required|email'
        ]);
        */

        $clientes = new Cliente();
        $clientes->nome = $request->input('nome');
        $clientes->idade = $request->input('idade');
        $clientes->endereco = $request->input('endereco');
        $clientes->email = $request->input('email');
        $clientes->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
