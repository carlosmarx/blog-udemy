<template>
  <ol class="breadcrumb">
    <li v-for="item in lista">
      <a v-if="item.url" :href="item.url">{{item.titulo}}</a>
      <span v-else>{{ item.titulo }}</span>
    </li>
    <!-- <li class="active">Data</li> -->
  </ol>
</template>

<script>
  export default {
    props: ['lista']
  }
</script>