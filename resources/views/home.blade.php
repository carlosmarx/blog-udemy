@extends('layouts.app')

@section('content')

    <pagina tamanho="10">
        <painel titulo="Dashboard"> 
            {{-- <p>Conteudo do slot</p> --}}
            <div class="row">
                <div class="col-lg-3">
                    <caixa qtd="120" titulo="Artigos" cor="bg-yellow" icone="fa fa-newspaper-o" url="home#"></caixa>
                </div>

                <div class="col-lg-3">
                    <caixa qtd="4" titulo="Usuarios" cor="bg-aqua" icone="fa fa-user"></caixa>
                </div>

                <div class="col-lg-3">
                    <caixa qtd="17" titulo="Autores" cor="bg-red" icone="fa fa-vcard-o"></caixa>
                </div>

                <div class="col-lg-3">
                    <caixa qtd="354" titulo="Comentários" cor="bg-green" icone="fa fa-comments"></caixa>
                </div>

            </div>
        </painel>
    </pagina>
            

@endsection
