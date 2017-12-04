<template>
  <div>

    
    <div class="col-lg-12">
      <div class="form-inline">
        <!-- <a v-if="criar" class="btn btn-info" :href="criar">Criar Artigo</a> -->
        <button-modal title="Cadastrar Artigo" name-modal="myModal" type="button" css="btn btn-success"></button-modal>
        <div class="form-group pull-right">
          <input type="search" class="form-control" placeholder="Buscar" v-model="buscar">
        </div>
      </div>
      <hr>
    </div>

    <table class="table table-hover table-striped table-bordered">
      <thead>
        <tr>
          <th 
            v-on:click="orderByColumn(index)" 
            v-for="(titulo, index) in titulos"> 
            <a href="#" 
              :class="{ 'text-danger': sortOrderColumn == index }">
                {{ titulo }}
            </a>
            <i class="fa fa-sort" :class="{ 
              'fa fa-sort-desc': sortOrder == 'desc' && sortOrderColumn == index, 
              'fa fa-sort-asc': sortOrder == 'asc' && sortOrderColumn == index 
            }"> </i>
          </th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in lista">
          <td v-for="i in item">{{ i }}</td>
          <td>
            <form :id="index" :action="deletar" v-if="exibir || editar || deletar" method="POST">

              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" :value="token">

              <a class="btn btn-success" :href="exibir" v-if="exibir" >Exibir</a>
              <a class="btn btn-warning" :href="editar" v-if="editar" >Editar</a>
              <button class="btn btn-danger" :href="deletar" v-if="deletar && token" v-on:click="executaForm(index)">Deletar</button>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
  export default {
    props: ['titulos', 'itens', 'order', 'orderColumn' , 'criar', 'exibir', 'editar', 'deletar', 'token'],
    data() {
      return {
        buscar: '',
        sortOrder: this.order || "asc",
        sortOrderColumn: this.orderColumn || "asc"
      }
    },
    methods: {
      executaForm(index) {
        document.getElementById(index).submit()
      },
      orderByColumn(column){
          this.sortOrderColumn = column
          if(this.sortOrder.toLowerCase() == 'asc'){
            this.sortOrder = 'desc'
          }
          else{
            this.sortOrder = "asc"
          }
      }
    },
    //End methods
    computed: {
      
      lista(){
        
        //Order by column 
        let order = this.sortOrder
        let orderColumn = this.sortOrderColumn
        order = order.toLowerCase()
        // orderColumn = parseInt(orderColumn)

        if (order == "asc") {
          this.itens.sort(function(a,b){
            if(Object.values(a)[orderColumn] > Object.values(b)[orderColumn]){ return 1 }
            if(Object.values(a)[orderColumn] < Object.values(b)[orderColumn]){ return -1 }
            return 0
          })
        }
        else {
          this.itens.sort(function(a,b){
            if(Object.values(a)[orderColumn] < Object.values(b)[orderColumn]){ return 1 }
            if(Object.values(a)[orderColumn] > Object.values(b)[orderColumn]){ return -1 }
            return 0
          })
        }
        //End order by column

        //Start filter
        if (this.buscar) {
          return this.itens.filter(response => {

            for (let i = 0; i < response.length; i++) {
              if((response[i]+"").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0)
              {
                return true;
              }
            }
                return false
            
          })
        }
        //End filter

        return this.itens
      }

    }
    //End computed

  }
</script>