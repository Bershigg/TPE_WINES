<?php
/* Smarty version 3.1.39, created on 2021-11-24 23:26:49
  from 'C:\xampp\htdocs\TPE_WINES\templates\updateWine.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619ebc290f4a25_33499177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb73f0884e079659df4e2b42a949d585b7a97f14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\updateWine.tpl',
      1 => 1637792783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_619ebc290f4a25_33499177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   
   <h2> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>


    <form action="updateWine" method="POST">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" name="id_Wine" id="id_Wine" required>
        <input type="text" name="nameWines" id="nameWines" placeholder="Nombre" required>
        <input type="text" name="style" id="style" placeholder="Estilo" required>
        <select name="id_store" required>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stores']->value, 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['store']->value->id_store;?>
"><?php echo $_smarty_tpl->tpl_vars['store']->value->NameStore;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
        </select>
        <input type="number" name="price" id="price" placeholder="Precio" required>
        <input type="submit" class="btn btn-primary" value="Editar">
    </form>



<?php }
}
