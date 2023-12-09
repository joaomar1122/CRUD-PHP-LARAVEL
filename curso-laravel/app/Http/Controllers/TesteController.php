<?php

namespace App\Http\Controllers;

use App\Teste;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index()
    {
        $teste = Teste::all();
        //dd($teste);
        return view('teste.index', ['teste' => $teste]);
    }

    public function create()
    {
        return view('teste.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        Teste::create($request->all());
        return redirect()->route('teste-index');
    }

    public function edit($id)
    {
        $teste = Teste::where('id', $id)->first();
        if (!empty($teste)) {
            return view('teste.edit', ['teste' => $teste]);
        } else {
            return redirect()->route('teste-index');
        }
    }

    public function update(Request $request, $id)
    {
        //dd($request);
        //dd($id);
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor,
        ];
        Teste::where('id', $id)->update($data);
        return redirect()->route('teste-index');
    }
    public function destroy($id)
    {
        //dd($id);
        Teste::where('id', $id)->delete();
        return redirect()->route('teste-index');
    }
}
