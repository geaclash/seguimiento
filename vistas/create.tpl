
{include file="app/templateH.tpl" title="Principal"}




<div class="jumbotron">


    {if isset($mensaje) }
        <div class="alert">
            <div class="alert alert-info alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {$mensaje}
            </div>
        </div>
    {/if}
    <form action="index.php?view=create&accion=create" class="form-signup" role="form" method="POST">

        <label for="nombre">
            Nombre:
            <input type="text" class="form-control" name="nombre">
        </label>

        <label for="titulo">
            Titulo:
            <input type="text" class="form-control" name="titulo">
        </label>


        <input type="submit" value="Crear" class="btn btn-primary">
    </form>
    <a href="index.php" class="btn btn-success">Regresar</a>
</div>

{include file="app/templateF.tpl"}