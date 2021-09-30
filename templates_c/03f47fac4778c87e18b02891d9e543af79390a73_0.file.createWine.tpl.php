<?php
/* Smarty version 3.1.39, created on 2021-09-30 17:54:03
  from 'C:\xampp\htdocs\TPE_WINES\templates\createWine.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155dd9b2ca0d2_80605485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03f47fac4778c87e18b02891d9e543af79390a73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\createWine.tpl',
      1 => 1633017182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6155dd9b2ca0d2_80605485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
     <h2> Agregar Vino</h2>

    <form action="createWine" method="POST">
        <input type="text" name="nameWines" id="nameWines" placeholder="Nombre Vino">
        <input type="text" name="style" id="style" placeholder="Estilo">
        <input type="number" name="id_store" id="id_store" placeholder="Bodega">
        <input type="number" name="price" id="price" placeholder="Precio">
        <input type="submit" class="btn btn-primary" value="Save">
    </form>

    <a href="showListStore">Listado de bodegas</a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
