<template>
    <span>
       <button v-if="!type ||  (type != 'button' && type != 'link')" type="button" :class="css || 'btn btn-primary'" data-toggle="modal" :data-target="'#'+nameModal">{{title}}</button>
      <button v-if="type == 'button'" type="button" :class="css || 'btn btn-primary'" data-toggle="modal" :data-target="'#'+nameModal">
      {{title}}
    </button>
    <a v-if="type == 'link'" href="#" data-toggle="modal" :data-target="'#'+nameModal">{{title}}</a>
    </span>
</template>
<script>
  export default {
    props: ['type', 'nameModal', 'title', 'css']
  }
</script>