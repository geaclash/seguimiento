<div class="modal fade modal-slide-in-right" area-hidden="true" role="dialog" tabindex"-1" id="modal-delete-{$id}">


    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" area-label="Close">
                    <span area-hidden="true">x</span>
                </button>
                <h4 class="modal-title">Eliminar Ficha</h4>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de querer eliminar la ficha?</p>
            </div>
            <div class="modal-footer">
                <button class="btn" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <a href="index.php?view=index&accion=destruir&id={$id}"class="btn btn-primary">Confirmar</a>
        </div>
    </div>
</div>