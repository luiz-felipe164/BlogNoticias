<?php

namespace App\Http\Controllers;

use App\Publicacao;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //obtem todas as publicacoes do banco em ordem decrescente
        $dados = Publicacao::orderBy('created_at','desc')
                            ->get();

        //retorna a view index
        return view('publicacao.index',compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        //pega todos os dados que vem do formulario
        $publicacao = $request->all();

        //cria uma publicação
        Publicacao::create($publicacao);

        //redireciona para o view index
        return redirect()->route('publicacao');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacao $publicacao)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        //busca o registro pelo id
        $dado = Publicacao::find($id);


        return view('publicacao.editar',compact('dado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //pega todos os dados que vem do formulario
        $publicacao = $request->all();

        //atualizar os dados da publicação
        Publicacao::find($id)->update($publicacao);

        return redirect()->route('publicacao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publicacao  $publicacao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publicacao::find($id)->delete();

        return redirect()->route('publicacao');
    }
}
