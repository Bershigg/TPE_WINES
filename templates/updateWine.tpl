{include file='templates/header.tpl'}

   <h2> {$titulo}</h2>

    <form action="updateWine" method="POST">
        <input type="hidden" value="{$id}" name="id_Wine" id="id_Wine">
        <input type="text" name="nameWines" id="nameWines" placeholder="Nombre Vino">
        <input type="text" name="style" id="style" placeholder="Estilo">
        <input type="number" name="id_store" id="id_store" placeholder="Bodega">
        <input type="number" name="price" id="price" placeholder="Precio">
        <input type="submit" class="btn btn-primary" value="Editar">
    </form>


<a href="showListStore">Listado de bodegas</a>
{include file='templates/footer.tpl'}