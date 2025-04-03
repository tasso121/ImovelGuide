<?php

namespace App\Http\Controllers;

use App\Models\Corretor;
use Illuminate\Http\Request;

class CorretorController extends Controller
{
    public function index()
    {
        $corretores = Corretor::all();
        return view('corretores.index', compact('corretores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'cpf' => 'required|digits:11',
            'creci' => 'required|min:2'
        ]);

        Corretor::create($request->all());
        return redirect()->route('corretores.index')->with('success', 'Corretor cadastrado com sucesso!');
    }

    public function edit(Corretor $corretor)
    {
        return view('corretores.edit', compact('corretor'));
    }

    public function update(Request $request, Corretor $corretor)
    {
        $request->validate([
            'name' => 'required|min:2',
            'cpf' => 'required|digits:11',
            'creci' => 'required|min:2'
        ]);

        $corretor->update($request->all());
        return redirect()->route('corretores.index')->with('success', 'Corretor atualizado com sucesso!');
    }

    public function destroy(Corretor $corretor)
    {
        $corretor->delete();
        return redirect()->route('corretores.index')->with('success', 'Corretor excluído com sucesso!');
    }
}
