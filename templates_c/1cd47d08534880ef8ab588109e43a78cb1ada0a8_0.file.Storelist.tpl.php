<?php
/* Smarty version 3.1.39, created on 2021-11-19 21:54:17
  from 'C:\xampp\htdocs\TPE_WINES\templates\Storelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61980ef9c28918_99551830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cd47d08534880ef8ab588109e43a78cb1ada0a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\Storelist.tpl',
      1 => 1637355256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61980ef9c28918_99551830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
        <h2> <?php echo $_smarty_tpl->tpl_vars['tituloAdmin']->value;?>
</h2> 
    <?php } else { ?>
        <h2> <?php echo $_smarty_tpl->tpl_vars['tituloUser']->value;?>
</h2>    
    <?php }?>

    
<div class="container"> 
    <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
    <a href="showCreateStore" class="btn btn-warning">Cargar una bodega</a>
    <a href="adminHome" class="btn btn-success">administrar vinos/bodegas</a>
    <a class="btn btn-secondary" href="logout">Log Out</a>
    <?php }?>
    <table class="table table-dark">
        <tr scope="col">
            <th>Nombre</th>
            <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <th>Borrar</th>
            <th>Modificar</th>
            <?php }?>
        </tr>
                <tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stores']->value, 'store');
$_smarty_tpl->tpl_vars['store']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['store']->value) {
$_smarty_tpl->tpl_vars['store']->do_else = false;
?>
                        <tr>    
                            <td> <a href="winesForStore/<?php echo $_smarty_tpl->tpl_vars['store']->value->NameStore;?>
"><?php echo $_smarty_tpl->tpl_vars['store']->value->NameStore;?>
</a> </td>                                                                                                            
                            <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                            <td> <a class="btn btn-danger" href="deleteStore/<?php echo $_smarty_tpl->tpl_vars['store']->value->id_store;?>
">Borrar</a></td>                
                            <td> <a class="btn btn-success" href="goUpdateStore/<?php echo $_smarty_tpl->tpl_vars['store']->value->id_store;?>
">Modificar</a></td>                                       
                            <?php }?>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
    </table>
    
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
