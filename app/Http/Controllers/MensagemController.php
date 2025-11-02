<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use Illuminate\Http\Request;

class MensagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1. Acessa o Model e busca todos os registros.
        // Requisito: listar em ordem decrescente de data (mais recente primeiro).
        $mensagens = Mensagem::orderBy('created_at', 'desc')->get();

        // 2. Retorna a view, passando a lista de mensagens para ela.
        // A função compact('mensagens') é um atalho para ['mensagens' => $mensagens]
        return view('mensagens.index', compact('mensagens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contato.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Validação dos dados
        $validatedData = $request->validate([
            'nome'     => 'required|string|max:100',
            'email'    => 'required|email|max:150',
            'telefone' => 'nullable|string|max:20',
            'mensagem' => 'required|string',
        ], [
            // Mensagens de erro personalizadas (opcional)
            'nome.required'    => 'O campo Nome é obrigatório.',
            'email.required'   => 'O campo E-mail é obrigatório.',
            'email.email'      => 'Por favor, insira um endereço de e-mail válido.',
            'mensagem.required'=> 'O campo Mensagem é obrigatório.',
        ]);

        // 2. Persistência (Criação do registro)
        Mensagem::create($validatedData);

        // 3. Redirecionamento com feedback
        return redirect()->route('mensagens.create')
                         ->with('success', 'Mensagem enviada com sucesso! Em breve entraremos em contato.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mensagem $mensagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mensagem $mensagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mensagem $mensagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensagem $mensagem)
    {
        //
    }
}
