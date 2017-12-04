@extends('layouts.app')

@section('content')

    <pagina tamanho="12">
        <painel titulo="Lista de artigos">
          <breadcumbs :lista="{{ $breadcumbs }}"></breadcumbs>
          
              
              <tabela-lista 
              :titulos="['#ID', 'Titulo', 'Descrição', 'Autor', 'Data Publicação']"
              :itens="{{ $listaArtigos }}"
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

    <modal name-modal="myModal" title="Cadastro de Artigo">
       <formulario css="" method='put' action="#" enctype="multipart/form-data" token="token">
         <div class="form-group">
           <label for="titulo">Titulo:</label>
           <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo">
         </div>
         <div class="form-group">
           <label for="titulo">Descrição:</label>
           <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição">
         </div>
         <div class="form-group">
          <button class="btn btn-success" type="submit">Salvar Artigo</button>
         </div>
       </formulario>
    </modal>


@endsection
