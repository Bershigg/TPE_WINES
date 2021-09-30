{include file='templates/header.tpl'}



<h1>{$titulo}</h1>

<div class="container">
    <table class="table table-dark">
        <tr scope="col">
            <th>Nombre</th>            
        </tr>
        <tr>
            {foreach from=$winesForStore item=$i}
                <tr>    
                    <td> {$i->NameWine} </td>        
                </tr>
            {/foreach}
        </tr>
    </table>

    <a href="home">Listado de vinos</a>
</div>
{include file='templates/footer.tpl'}