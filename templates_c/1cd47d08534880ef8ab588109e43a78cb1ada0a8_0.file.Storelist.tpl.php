<?php
/* Smarty version 3.1.39, created on 2021-10-13 01:31:26
  from 'C:\xampp\htdocs\TPE_WINES\templates\Storelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61661ace01a382_14241446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cd47d08534880ef8ab588109e43a78cb1ada0a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\Storelist.tpl',
      1 => 1634081484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61661ace01a382_14241446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['store']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>    
            <li class="list-group-item"><a href="winesForStore/<?php echo $_smarty_tpl->tpl_vars['i']->value->NameStore;?>
"> <?php echo $_smarty_tpl->tpl_vars['i']->value->NameStore;?>
 </a> </li>        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
