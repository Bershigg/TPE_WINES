<?php
/* Smarty version 3.1.39, created on 2021-10-02 00:44:04
  from 'C:\xampp\htdocs\TPE_WINES\templates\WineDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61578f3435f9d4_31236768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb663ed7957ccf593c5de9261353e8d623579e94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\WineDetail.tpl',
      1 => 1633128241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61578f3435f9d4_31236768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<h1> Titulo : <?php echo $_smarty_tpl->tpl_vars['wines']->value->NameWine;?>
</h1>
    <h2> Estilo : <?php echo $_smarty_tpl->tpl_vars['wines']->value->Style;?>
</h2>
    <h2> Estilo : <?php echo $_smarty_tpl->tpl_vars['wines']->value->NameStore;?>
</h2>
    
<a href="home"> Volver </a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
