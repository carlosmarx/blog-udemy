@extends('layouts.app')

@section('content')

    <pagina tamanho="12">
        <painel titulo="Lista de artigos"> 
          <breadcumbs :lista="{{ $breadcumbs }}"></breadcumbs>
              <tabela-lista 
              :titulos="['#ID', 'Titulo', 'Descrição', 'Autor', 'Data Publicação']"
              :itens="[
              [302, 'PHP OO - Complete Guide', 'Minha', 'Carlos 1', '29/11/2017'],
              [301, 'Laravel com VueJS 2', 'Descrição 3', 'Autor 3', '30/11/2017']
              ]"
              order = "asc"
              order-column = '0'
              criar="{{ route('artigos.create') }}" 
              exibir="#exibir" 
              editar="#editar" 
              deletar="#url_deletar" 
              token="#token"
              >
                
              </tabela-lista>
        </painel>
    </pagina>
            

@endsection
