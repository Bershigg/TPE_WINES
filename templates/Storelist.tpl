{include file='templates/header.tpl'}

<h1>{$titulo}</h1>

<div class="container">
    <table class="table table-dark">
        <tr scope="col">
            <th>Nombre</th>            
        </tr>
        <tr>
            {foreach from=$store item=$i}
                <tr>    
                    <td> {$i->NameStore} <a href="winesForStore/{$i->NameStore}">ir a vinos de la bodega</a> </td>        
                </tr> 
            {/foreach}
        </tr>
    </table>

    <a href="home">Listado de vinos</a>
</div>
{include file='templates/footer.tpl'}