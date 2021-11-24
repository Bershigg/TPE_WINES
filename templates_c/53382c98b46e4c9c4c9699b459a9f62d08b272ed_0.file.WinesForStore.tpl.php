<?php
/* Smarty version 3.1.39, created on 2021-11-24 17:11:48
  from 'C:\xampp\htdocs\TPE_WINES\templates\WinesForStore.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619e6444a370c3_44951527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53382c98b46e4c9c4c9699b459a9f62d08b272ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\WinesForStore.tpl',
      1 => 1637770304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619e6444a370c3_44951527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

<div class="container">
    <table class="table table-dark">
        <tr scope="col">
            <th>Nombre</th>
            <th>Estilo</th>
            <th>Bodega</th>
            <th>Precio</th>
        </tr>
                <tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['winesForStore']->value, 'wine');
$_smarty_tpl->tpl_vars['wine']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wine']->value) {
$_smarty_tpl->tpl_vars['wine']->do_else = false;
?>
                        <tr>    
                            <td> <?php echo $_smarty_tpl->tpl_vars['wine']->value->NameWine;?>
</td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['wine']->value->Style;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['wine']->value->NameStore;?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['wine']->value->Price;?>
 </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
    </table>

    <a href="ListStore" class="btn btn-success">Volver a lista de bodegas</a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
