{include file='templates/header.tpl'}

<div class="container">
    <table class="table table-dark">
        <tr scope="col">
            <th>Nombre</th>
            <th>Estilo</th>
            <th>Precio</th>            
            <th>Numero de bodega</th>
        </tr>
        <tr>
            {foreach from=$wine item=$i}
                <tr>    
                    <td> {$i->NameWine} </td> 
                    <td> {$i->Style} </td>
                    <td> {$i->Price} </td>
                    <td> {$i->id_store} </td>       
                </tr>
            {/foreach}
        </tr>
    </table>

    <a href="home">Listado de vinos</a>
</div>
{include file='templates/footer.tpl'}