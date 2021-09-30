{include file='templates/header.tpl'}

<h1>{$titulo}</h1>

<div class="container">
    <table class="table table-dark">
        <tr scope="col">
            <th>Nombre</th>
            <th>Estilo</th>
            <th>Bodega</th>
            <th>Precio</th>
        </tr>
                <tr>
                    {foreach from=$wines item=$wine}
                        <tr>    
                            <td> <a href="viewWine/{$wine->id_Wine}">{$wine->NameWine}</a> </td>
                            <td> {$wine->Style} </td>
                            <td> {$wine->NameStore} </td>
                            <td> {$wine->Price} </td>
                                 {*   <a class="btn btn-danger" href="deleteTask/{$task->id_tarea}">Borrar</a>
                                {if !$task->finalizada}
                                    <a class="btn btn-success" href="updateTask/{$task->id_tarea}">Done</a>
                                {/if} *}
                        </tr>
                    {/foreach}
                
    </table>

   

    <a href="showListStore">Listado de bodegas</a>
    <a href="crudWines">ir a crear un vino</a>
</div>
{include file='templates/footer.tpl'}