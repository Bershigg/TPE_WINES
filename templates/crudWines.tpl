{include file='templates/header.tpl'}
    
     <h2> {$titulo}</h2>

    <div class="container">
    <table class="table table-dark">
        <tr scope="col">
            <th>Nombre</th>
            <th>Estilo</th>
            <th>Bodega</th>
            <th>Precio</th>
            <th>Borrar</th>
            <th>Modificar</th>
        </tr>
                <tr>
                    {foreach from=$wines item=$wine}
                        <tr>    
                            <td> <a href="viewWine/{$wine->NameWine}">{$wine->NameWine}</a> </td>
                            <td> {$wine->Style} </td>
                            <td> {$wine->NameStore} </td>
                            <td> {$wine->Price} </td>
                            <td> <a class="btn btn-danger" href="deleteWine/{$wine->id_Wine}">Borrar</a></td>                
                            <td> <a class="btn btn-success" href="goUpdateWine/{$wine->id_Wine}">Modificar</a></td>                                       
                        </tr>
                    {/foreach}
                
    </table>

    <form action="createWine" method="POST">
        <input type="text" name="nameWines" id="nameWines" placeholder="Nombre Vino">
        <input type="text" name="style" id="style" placeholder="Estilo">
        <select name="id_store">
            {foreach from=$stores item=$store}
                <option value="id_store">{$store->NameStore}</option>
            {/foreach}  
        </select>
        <input type="number" name="price" id="price" placeholder="Precio">
        <input type="submit" class="btn btn-primary" value="Save">
    </form>

    <a href="showListStore">Listado de bodegas</a>
</div>
{include file='templates/footer.tpl'}


