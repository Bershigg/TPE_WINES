{include file='templates/header.tpl'}

<h2>{$titulo}</h2>

<ul class="list-group">
    {foreach from=$store item=$i}    
            <li class="list-group-item"><a href="winesForStore/{$i->NameStore}"> {$i->NameStore} </a> </li>        
    {/foreach}
</ul>
{include file='templates/footer.tpl'}