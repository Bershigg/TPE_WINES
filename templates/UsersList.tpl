{include file='templates/header.tpl'}




    <h2>{$titulo}</h2>

    <div class="container">
        <table class="table table-dark">
            <tr scope="col">
                <th>Nombre</th>
                <th>Condicion</th>
                <th>Borrar</th>
            </tr>
                    <tr>
                        {foreach from=$usuarios item=$u}
                            <tr>    
                                <td> {$u->NameUser} </td>
                                <td> <a href="cambiarCondicion/{$u->id_user}"><button class="btn btn-outline-secondary">Cambiar Condicion</button></a> </td>
                                <td> <a href="borrarUser/{$u->id_user}"><button class="btn btn-outline-primary">Borrar</button></a> </td>
                            </tr>
                        {/foreach}
                    
        </table>

    </div>

    <h2>{$titulo}</h2>

    <div class="container">
        <table class="table table-dark">
            <tr scope="col">
                <th>Nombre</th>
            </tr>
                    <tr>
                        {foreach from=$usuarios item=$u}
                            <tr>    
                                <td> {$u->NameUser} </td>
                            </tr>
                        {/foreach}
                    
        </table>

    </div>


{include file='templates/footer.tpl'}