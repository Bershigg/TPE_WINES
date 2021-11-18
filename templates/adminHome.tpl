{include file='templates/headerAdmin.tpl'}

<h2>Seleccione que quiere administrar</h2>

<div id="secciones">
    <section class="sectionadmin">
        <img src="images\adminvino.jpg" class="img-admin" alt="">
        <a href="crudWines">Vinos</a>
    </section>

    <section class="sectionadmin">
        <img src="images\adminbodega.jpg" class="img-admin" alt="">
        <a href="crudStores/">Bodegas</a>
    </section>

    <section class="sectionadmin">
        <img src="images\usuario.jpg" class="img-admin" alt="">
        <a href="adminUser">Usuarios</a>
    </section>

</div>
{include file='templates/footerAdmin.tpl'}