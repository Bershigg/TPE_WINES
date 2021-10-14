{include file='templates/header.tpl'}
<div class="container">
<h2> Titulo : {$wines->NameWine}</h2>
    <h2> Estilo : {$wines->Style}</h2>
    <h2> Bodega : {$wines->NameStore}</h2>
    <h2> Descripción: {$descripcion} </h2>
    
<a href="wines" class="btn btn-success"> Volver a lista de vinos</a>
</div>
{include file='templates/footer.tpl'}