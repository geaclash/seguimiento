
{include file="app/templateH.tpl" title="Principal"}




<div class="jumbotron">

    {include file="alert.tpl" tipo="warning" }
    <form action="index.php?view=index&accion=guardar" class="form-signup" role="form" method="POST">

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