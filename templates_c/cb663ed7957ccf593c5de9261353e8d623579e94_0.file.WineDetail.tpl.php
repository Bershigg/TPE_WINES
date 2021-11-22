<?php
/* Smarty version 3.1.39, created on 2021-11-21 21:01:13
  from 'C:\xampp\htdocs\TPE_WINES\templates\WineDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619aa589693e85_54760362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb663ed7957ccf593c5de9261353e8d623579e94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\WineDetail.tpl',
      1 => 1637524855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619aa589693e85_54760362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <h2> Titulo : <?php echo $_smarty_tpl->tpl_vars['wine']->value->NameWine;?>
</h2>
        <h2> Estilo : <?php echo $_smarty_tpl->tpl_vars['wine']->value->Style;?>
</h2>
        <h2> Bodega : <?php echo $_smarty_tpl->tpl_vars['wine']->value->NameStore;?>
</h2>
        <h2> Descripción: <?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
 </h2>
        
    <a href="wines" class="btn btn-success"> Volver a lista de vinos</a>
</div>

<h2>Deje aqui su calificaion del vino</h2>

<form action="createComments" method="POST">
    
    <input type="textarea" name="content" id="content" required>
    <select name="qualification" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>     
    </select>
    <input type="hidden" name="id_user" id="id_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
" required>
    <input type="hidden" name="id_Wine" id="id_Wine" value="<?php echo $_smarty_tpl->tpl_vars['wine']->value->id_Wine;?>
" required>
    
    <input type="submit" class="btn btn-primary" value="Save">
</form>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
