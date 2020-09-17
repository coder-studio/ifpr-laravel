<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gasto;

class GastoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos = Gasto::all();
        return view('gastos.index', compact('gastos'));
    }

    public function lista()
    {
        $gastos = Gasto::all();
        return view('gastos.lista', compact('gastos'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gastos.create');
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
            'local'=>'required',
            'categoria'=>'required',
            'valor'=>'required'
        ]);

        $gasto = new Gasto([
            'local' => $request->get('local'),
            'categoria' => $request->get('categoria'),
            'valor' => $request->get('valor')         
        ]);

        $gasto->save();
        return redirect('/gastos')->with('success', 'Lançamento criado com sucesso.');
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
        $gasto = Gasto::find($id);
        return view('gastos.edit', compact('gasto'));  
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
            'local'=>'required',
            'categoria'=>'required',
            'valor'=>'required'
        ]);
        
        $gasto = Gasto::find($id);
        $gasto->local =  $request->get('local');
        $gasto->categoria = $request->get('categoria');
        $gasto->valor = $request->get('valor');
        $gasto->save();
        return redirect('/gastos/lista')->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gasto = Gasto::find($id);
        $gasto->delete();
        return redirect('/gastos/lista')->with('success', 'Excluido!');
    }
}
