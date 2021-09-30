{include file='templates/header.tpl'}
    
     <h2> {$titulo}</h2>

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
                            <td> <a class="btn btn-danger" href="deleteWine/{$wine->id_Wine}">Borrar</a></td>                
                            <td> <a class="btn btn-success" href="updateWine/{$wine->id_Wine}">Modificar</a></td>                                       
                        </tr>
                    {/foreach}
                
    </table>

    <form action="createWine" method="POST">
        <input type="text" name="nameWines" id="nameWines" placeholder="Nombre Vino">
        <input type="text" name="style" id="style" placeholder="Estilo">
        <input type="number" name="id_store" id="id_store" placeholder="Bodega">
        <input type="number" name="price" id="price" placeholder="Precio">
        <input type="submit" class="btn btn-primary" value="Save">
    </form>

    <a href="showListStore">Listado de bodegas</a>
</div>
{include file='templates/footer.tpl'}


{*{include file = 'templates/header.tpl'}

<h1>{$titulo}</h1>

<ul> 

    {foreach from=$tasks item=$task}
        <li class = "{if $task->finalizada} finalizada {/if}"> 
            <a href= "viewTask/{$task->id_tarea}"> {$task->titulo}</a>: {$task->descripcion}
            <a href="deleteTask/{$task->id_tarea}">Borrar</a>
            {if !$task->finalizada}
            <a href="updateTask/{$task->id_tarea}">Finalizar</a>
            {/if}
        </li> 
    {/foreach}
    
</ul>
<h2>Crear Tarea</h2>
<form action="createTask" method="post">
    <input type="text" name="title" id="title">
    <input type="text" name="description" id="description">
    <input type="number" name="priority" id="priority">
    <input type="checkbox" name="done" id="done">
    <input type="submit" value="Guardar">
</form>

{include file = 'templates/footer.tpl'}*}