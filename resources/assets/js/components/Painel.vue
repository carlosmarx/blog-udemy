<template>
  <div v-bind:class="defineCor">

    <div class="panel-heading">{{titulo}}</div>

    <div class="panel-body">
      <slot></slot>
    </div>

  </div>
</template>

<script>
    export default {
        props: ['titulo', 'cor'],
        computed:{

          defineCor: function(){
            return  "panel " + (this.cor || 'panel-default')
          }

        }
    }
</script>

<style media="screen">
  .blue {
    border-color: #0D4A96
  }

  .blue > .panel-heading {
    color: #F7F7F7;
    background-color: #0D4A96;
    border-color: #0D4A96
  }
</style>
