<?php
/* Smarty version 3.1.39, created on 2021-10-06 23:40:12
  from 'C:\xampp\htdocs\TPE_WINES\templates\updateWine.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e17bc70c818_52720966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb73f0884e079659df4e2b42a949d585b7a97f14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\updateWine.tpl',
      1 => 1633556281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615e17bc70c818_52720966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <h2> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

    <form action="updateWine" method="POST">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id_Wine" id="id_Wine">
        <input type="text" name="nameWines" id="nameWines" placeholder="Nombre Vino">
        <input type="text" name="style" id="style" placeholder="Estilo">
        <input type="number" name="id_store" id="id_store" placeholder="Bodega">
        <input type="number" name="price" id="price" placeholder="Precio">
        <input type="submit" class="btn btn-primary" value="Editar">
    </form>


<a href="showListStore">Listado de bodegas</a>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
