<?php
/* Smarty version 3.1.39, created on 2021-09-30 16:14:27
  from 'C:\xampp\htdocs\TPE_WINES\templates\WineDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155c64304add4_89502390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb663ed7957ccf593c5de9261353e8d623579e94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\WineDetail.tpl',
      1 => 1633011265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6155c64304add4_89502390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <table class="table table-dark">
        <tr scope="col">
            <th>Nombre</th>
            <th>Estilo</th>
            <th>Precio</th>            
            <th>Numero de bodega</th>
        </tr>
        <tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wine']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
                <tr>    
                    <td> <?php echo $_smarty_tpl->tpl_vars['i']->value->Name;?>
 </td> 
                    <td> <?php echo $_smarty_tpl->tpl_vars['i']->value->Style;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['i']->value->Price;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['i']->value->id_store;?>
 </td>       
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tr>
    </table>

    <a href="home">Listado de vinos</a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
