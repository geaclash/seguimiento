
{if isset($mensaje) }
    <div class="alert">
        <div class="alert alert-{if isset($tipo)}{$tipo}{else}info{/if} alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {$mensaje}
        </div>
    </div>
{/if}