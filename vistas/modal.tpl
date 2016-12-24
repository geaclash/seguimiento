<div class="modal fade modal-slide-in-right" area-hidde="true" role="dialog" tabindex"-1" id="modal-delete-1">

{{Form::open(array('action' => array('ArticuloController@destroy',$art->idarticulo),'method' => 'delete' ))}}
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" area-label="Close">
                <span area-hidden="true">x</span>
            </button>
            <h4 class="modal-title">Eliminar Articulo</h4>
        </div>
        <div class="modal-body">
            <p>¿Estás seguro de querer eliminar {{$art->nombre}}?</p>
        </div>
        <div class="modal-footer">
            <button class="btn" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button class="btn btn-primary" type="submit">Confirmar</button>
        </div>
    </div>
</div>
</div>