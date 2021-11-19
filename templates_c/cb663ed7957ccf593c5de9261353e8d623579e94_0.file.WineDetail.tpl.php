<?php
/* Smarty version 3.1.39, created on 2021-11-19 22:19:23
  from 'C:\xampp\htdocs\TPE_WINES\templates\WineDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619814dbef4504_21646426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb663ed7957ccf593c5de9261353e8d623579e94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\WineDetail.tpl',
      1 => 1637353577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619814dbef4504_21646426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<h2> Titulo : <?php echo $_smarty_tpl->tpl_vars['wines']->value->NameWine;?>
</h2>
    <h2> Estilo : <?php echo $_smarty_tpl->tpl_vars['wines']->value->Style;?>
</h2>
    <h2> Bodega : <?php echo $_smarty_tpl->tpl_vars['wines']->value->NameStore;?>
</h2>
    <h2> Descripción: <?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
 </h2>
    
<a href="wines" class="btn btn-success"> Volver a lista de vinos</a>



</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
