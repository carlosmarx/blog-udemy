<template>
    <div :id="nameModal" class="modal fade" tabindex="-1" role="dialog" :aria-labelledby="nameModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">{{ title }}</h4>
                </div><!-- modal header -->
                <div class="modal-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <slot></slot>
                    </div>
                  </div>
                </div><!-- modal body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                </div><!-- modal footer -->
            </div><!-- modal content -->
        </div> <!-- modal dialog -->
    </div> <!-- modal -->
</template>
<script>
    export default {
        props: ['nameModal', 'title']
    };
</script>