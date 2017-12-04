<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcumbs = json_encode([
            ["titulo" => "Home", "url" => route('home')],
            ["titulo" => "Lista de Artigos", "url" => ""],
        ]);

        $listaArtigos = json_encode([
            ["id" => 301, "titulo" => "Curos de php", "descricao" => 'Uma descriçåo normal', "author" => 'Carlos Marx', "created_at" => '04/12/2017'],
            ["id" => 302, "titulo" => "Laravel com VueJS", "descricao" => ' Descriçåo simples', "author" => 'Ryan Lucas', "created_at" => '01/12/2017'],
        ]);
        return view('admin.artigos.index', compact('breadcumbs', 'listaArtigos'));
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
        //
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
