<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        return view('clients', compact(['clients']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'      => 'required|min:3|max:20|unique:clients',
            'age'       => 'required',
            'address'   => 'required',
            'email'     => 'required|email',
        ];

        $messages = [
            'required'          => 'O atributo :attribute não pode estar em branco',
            'name.required'     => 'O nome é requirido',
            'name.min'          => 'É necessário no mínimo 3 caracteres no nome.',
            'email.required'    => 'Digite um endereço de email',
            'email.email'       => 'Digite um endereço de email válido'
        ];

        $request->validate($rules, $messages);

        // $request->validate([
        //     'name'      => 'required|min:3|max:20|unique:clients',
        //     'age'       => 'required',
        //     'address'   => 'required',
        //     'email'     => 'required|email',
        // ]);

        $client = new Client();

        $client->name = $request->input('name');
        $client->age = $request->input('age');
        $client->address = $request->input('address');
        $client->email = $request->input('email');

        $client->save();

        return redirect('/');
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
