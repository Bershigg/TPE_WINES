{include file='templates/headerAdmin.tpl'}
    
     <h2> {$titulo}</h2>

<div class="container">
    <a href="showCreateStore" class="btn btn-warning">Cargar una bodega</a>
    <a href="adminHome" class="btn btn-success">administrar vinos/bodegas</a>
    <a class="btn btn-secondary" href="logout">Log Out</a>

    <table class="table table-dark">
        <tr scope="col">
            <th>Nombre</th>
            <th>Borrar</th>
            <th>Modificar</th>
        </tr>
                <tr>
                    {foreach from=$stores item=$store}
                        <tr>    
                            <td> <a href="winesForStore/{$store->NameStore}">{$store->NameStore}</a> </td>                                                                                                            
                            <td> <a class="btn btn-danger" href="deleteStore/{$store->id_store}">Borrar</a></td>                
                            <td> <a class="btn btn-success" href="goUpdateStore/{$store->id_store}">Modificar</a></td>                                       
                        </tr>
                    {/foreach}
                
    </table>
    
</div>
{include file='templates/footerAdmin.tpl'}