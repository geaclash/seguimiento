
{include file="app/templateH.tpl" title="Principal"}


<div class="jumbotron">
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Cre.</th>
        <th>Logo</th>
        </thead>

        <tbody>
        {foreach from=$fichas item=ficha}
            <tr>
                <td>{$ficha['nombre']}</td>
                <td>{$ficha['titulo']}</td>
                <td>{$ficha['fecha_creacion']}</td>
                <td>{$ficha['logo']}</td>
            </tr>



        {/foreach}
        </tbody>
    </table>


    <a href="index.php?view=create" class="btn btn-primary"><span class="glyphicon glyphicon-plys"></span> Crear</a>
</div>

{include file="app/templateF.tpl"}