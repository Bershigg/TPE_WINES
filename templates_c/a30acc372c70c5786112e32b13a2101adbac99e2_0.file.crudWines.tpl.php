<?php
/* Smarty version 3.1.39, created on 2021-11-18 01:43:55
  from 'C:\xampp\htdocs\TPE_WINES\templates\crudWines.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6195a1cb5ed6b2_06518408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a30acc372c70c5786112e32b13a2101adbac99e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\crudWines.tpl',
      1 => 1637195963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/headerAdmin.tpl' => 1,
    'file:templates/footerAdmin.tpl' => 1,
  ),
),false)) {
function content_6195a1cb5ed6b2_06518408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/headerAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<div class="cabecera">
    <h2> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>    
</div>

<div class="container">
    <a href="showCreateWine"class="btn btn-warning">Cargar un vino</a>
    <a href="adminHome" class="btn btn-success">Administrar vinos/bodegas</a>
    <a class="btn btn-secondary" href="logout">Log Out</a>

    <table class="table table-dark">
        <tr scope="col">
            <th>Nombre</th>
            <th>Estilo</th>
            <th>Bodega</th>
            <th>Precio</th>
            <th>Borrar</th>
            <th>Modificar</th>
        </tr>
                <tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wines']->value, 'wine');
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
                            <td> <a class="btn btn-danger" href="deleteWine/<?php echo $_smarty_tpl->tpl_vars['wine']->value->id_Wine;?>
">Borrar</a></td>                
                            <td> <a class="btn btn-success" href="goUpdateWine/<?php echo $_smarty_tpl->tpl_vars['wine']->value->id_Wine;?>
">Modificar</a></td>                                       
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
    </table>
        
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footerAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
