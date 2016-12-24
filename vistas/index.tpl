
{include file="app/templateH.tpl" title="Principal"}

{include file="alert.tpl"}
<div class="jumbotron">
    <h2>Lista de fichas</h2>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Titulo</th>
            <th>Fecha Cre.</th>
            <th>Logo</th>
            <th>Acciones</th>
        </thead>

        <tbody>
        {foreach from=$fichas item=ficha}
            <tr>
                <td>{$ficha['id']}</td>
                <td>{$ficha['nombre']}</td>
                <td>{$ficha['titulo']}</td>
                <td>{$ficha['fecha_creacion']}</td>
                <td>{$ficha['logo']}</td>
                <td><a href="index.php?view=index&accion=edit&id={$ficha['id']}" class="btn btn-primary">Editar</a> <a class="btn btn-danger" data-target="#modal-delete-{$ficha['id']}" data-toggle="modal">Eliminar</a></td>
            </tr>
            {include file="modal.tpl" id=$ficha['id'] }


        {/foreach}
        </tbody>
    </table>


    <a href="index.php?view=index&accion=create" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Crear</a>
</div>

{include file="app/templateF.tpl"}