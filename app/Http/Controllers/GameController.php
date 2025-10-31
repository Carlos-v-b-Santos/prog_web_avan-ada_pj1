<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::latest()->get();
        return view('catalogo.index', compact('games'));
    }

    /**
     * Display a listing of the resource for Admin.
     * (Página de Cadastro de games/Serviços)
     */
    public function adminIndex()
    {
        // A lógica é a mesma: buscar todos os games
        $games = Game::latest()->get();
        
        // Mas a VIEW é diferente: a view do admin
        return view('admin.games.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.games.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. VALIDAÇÃO
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB Max
        ]);

        $caminhoImagem = null;

        // 2. UPLOAD DA IMAGEM (Requisito)
        if ($request->hasFile('imagem')) {
            // Pega o arquivo e salva na pasta 'storage/app/public/produtos'
            $caminhoImagem = $request->file('imagem')->store('games', 'public');
            
            // Adicionamos o caminho da imagem aos dados validados
            $validatedData['imagem'] = $caminhoImagem;
        }

        // 3. SALVAR NO BANCO DE DADOS
        Game::create($validatedData);

        // 4. REDIRECIONAR DE VOLTA
        return redirect()->route('admin.games.index')
                         ->with('success', 'Game cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    //public function show(Game $game)
    //{
        //
    //}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('admin.games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // null se não for trocada
        ]);

        // 2. LÓGICA DE UPLOAD DA IMAGEM
        if ($request->hasFile('imagem')) {
            
            // 2a. APAGAR A IMAGEM ANTIGA (Prática de Segurança/Limpeza)
            // Se o produto JÁ TINHA uma imagem, apague-a do storage.
            if ($game->imagem) {
                Storage::disk('public')->delete($game->imagem);
            }

            // 2b. SALVAR A NOVA IMAGEM
            // Salva na pasta 'storage/app/public/games'
            $caminhoImagem = $request->file('imagem')->store('games', 'public');
            
            // Adiciona o novo caminho da imagem aos dados que serão atualizados
            $validatedData['imagem'] = $caminhoImagem;
        }

        // 3. ATUALIZAR NO BANCO DE DADOS
        // O $game já foi injetado pelo Laravel (é o game que
        // estamos editando). Apenas chamamos 'update' nele.
        $game->update($validatedData);

        // 4. REDIRECIONAR DE VOLTA
        return redirect()->route('admin.games.index')
                         ->with('success', 'game atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        // 1. APAGAR A IMAGEM ANTIGA DO STORAGE
        // Verificamos se o produto de fato tem uma imagem
        if ($game->imagem) {
            Storage::disk('public')->delete($game->imagem);
        }

        // 2. APAGAR O game DO BANCO DE DADOS
        $game->delete();

        // 3. REDIRECIONAR DE VOLTA
        return redirect()->route('admin.games.index')
                         ->with('success', 'game excluído com sucesso!');
    }
}
