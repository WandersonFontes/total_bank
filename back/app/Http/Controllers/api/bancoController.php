<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banco;

class bancoController extends Controller
{
    
    public function index()
    {
        return banco::all();//Aprensentar valores do banco.
    }

    public function store(Request $request)
    {
        banco::create($request->all());//Criar cliente.
    }

    public function show($id)
    {
        return banco::findOrfail($id);//Busca pelo id.
    }

    public function update(Request $request, $id)
    {
        $banco = banco::findOrFail($id);//Seta dado pelo Id para ser alterado.
        $banco ->update($request->all());//Alterar.
    }

    public function destroy($id)
    {
        $banco = banco::findOrFail($id);//Setar Id.
        $banco ->delete();//Deletar.
    }
}
