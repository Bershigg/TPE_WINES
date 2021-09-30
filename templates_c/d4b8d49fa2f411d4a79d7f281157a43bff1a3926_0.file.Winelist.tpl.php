<?php
/* Smarty version 3.1.39, created on 2021-09-30 18:57:52
  from 'C:\xampp\htdocs\TPE_WINES\templates\Winelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155ec9011bcd4_05620922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4b8d49fa2f411d4a79d7f281157a43bff1a3926' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\Winelist.tpl',
      1 => 1633021066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6155ec9011bcd4_05620922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wines']->value, 'wine');
$_smarty_tpl->tpl_vars['wine']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wine']->value) {
$_smarty_tpl->tpl_vars['wine']->do_else = false;
?>
                        <tr>    
                            <td> <a href="viewWine/<?php echo $_smarty_tpl->tpl_vars['wine']->value->id_Wine;?>
"><?php echo $_smarty_tpl->tpl_vars['wine']->value->NameWine;?>
</a> </td>
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

   

    <a href="showListStore">Listado de bodegas</a>
    <a href="crudWines">ir a crear un vino</a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
