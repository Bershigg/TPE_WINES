{include file='templates/headerAdmin.tpl'}
{if $User}

    <div class="cabecera">
        <h2> {$titulo}</h2>    
    </div>
        
    <div class="container">
        <a href="showCreateWine"class="btn btn-warning">Cargar un vino</a>
        <a href="adminHome" class="btn btn-success">Administrar vinos/bodegas</a>
        <a class="btn btn-secondary" href="logout">Log Out</a>

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
                        <td> {$wine->NameWine} </td>
                        <td> {$wine->Style} </td>                           
                        <td> {$wine->NameStore} </td>                           
                        <td> {$wine->Price} </td>
                        <td> <a class="btn btn-danger" href="deleteWine/{$wine->id_Wine}">Borrar</a></td>                
                        <td> <a class="btn btn-success" href="goUpdateWine/{$wine->id_Wine}">Modificar</a></td>                                       
                    </tr>
                {/foreach}
            </tr> 
        </table>            
    </div>
    
{else}

    <h2>{$titulo}</h2>

    <div class="container">
        <table class="table table-dark">
            <tr scope="col">
                <th>Nombre</th>
                <th>Estilo</th>
                <th>Bodega</th>
                <th>Precio</th>
                <th>Info</th>
            </tr>
            <tr>
                {foreach from=$wines item=$wine}
                    <tr>    
                        <td> {$wine->NameWine} </td>
                        <td> {$wine->Style} </td>
                        <td> {$wine->NameStore} </td>
                        <td> {$wine->Price} </td>
                        <td> <a href="viewWine/{$wine->NameWine}"><button class="btn btn-outline-secondary">+</button></a> </td>
                    </tr>
                {/foreach}
            </tr>
        </table>
    </div>
{/if}    
{include file='templates/footerAdmin.tpl'}


