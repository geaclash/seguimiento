
{include file="app/templateH.tpl" title="Principal"}

{include file="alert.tpl"}


    <h1>Editar ficha</h1>


    <form action="index.php?view=index&accion=update&id={$ficha['id']}" method="POST">

        <label for="nombre">
            Nombre:
            <input type="text" class="form-control" name="nombre" value="{$ficha['nombre']}">
        </label>

        <label for="titulo">
            Titulo:
            <input type="text" class="form-control" name="titulo" value="{$ficha['titulo']}">
        </label>


        <input type="submit" value="Crear" class="btn btn-primary">
    </form>


{include file="app/templateF.tpl"}
