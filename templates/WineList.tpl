{include file='templates/header.tpl'}

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
                
    </table>

</div>
{include file='templates/footer.tpl'}