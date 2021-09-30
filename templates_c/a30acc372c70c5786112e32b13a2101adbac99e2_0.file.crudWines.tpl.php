<?php
/* Smarty version 3.1.39, created on 2021-09-30 19:22:11
  from 'C:\xampp\htdocs\TPE_WINES\templates\crudWines.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155f2430d8868_14876876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a30acc372c70c5786112e32b13a2101adbac99e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\crudWines.tpl',
      1 => 1633022529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6155f2430d8868_14876876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
     <h2> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
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
                            <td> <a class="btn btn-danger" href="deleteWine/<?php echo $_smarty_tpl->tpl_vars['wine']->value->id_Wine;?>
">Borrar</a></td>                
                            <td> <a class="btn btn-success" href="updateWine/<?php echo $_smarty_tpl->tpl_vars['wine']->value->id_Wine;?>
">Modificar</a></td>                                       
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
    </table>

    <form action="createWine" method="POST">
        <input type="text" name="nameWines" id="nameWines" placeholder="Nombre Vino">
        <input type="text" name="style" id="style" placeholder="Estilo">
        <input type="number" name="id_store" id="id_store" placeholder="Bodega">
        <input type="number" name="price" id="price" placeholder="Precio">
        <input type="submit" class="btn btn-primary" value="Save">
    </form>

    <a href="showListStore">Listado de bodegas</a>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
