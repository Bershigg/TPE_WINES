<?php
/* Smarty version 3.1.39, created on 2021-11-24 03:17:47
  from 'C:\xampp\htdocs\TPE_WINES\templates\WineDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619da0cb1376b5_98742174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb663ed7957ccf593c5de9261353e8d623579e94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\WineDetail.tpl',
      1 => 1637720242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619da0cb1376b5_98742174 (Smarty_Internal_Template $_smarty_tpl) {
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



<form class="mb-3" action="" method="POST" id="submit">
    <h2>Deje aqui su comentario del vino</h2>
    <label class="form-control"> Contenido <input type="textarea" name="content" id="content" required></label>
    <label class="form-control"> Clasificaion  <select name="qualification" id="qualification" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>     
    </select></label>
    <input type="hidden" name="id_user" id="id_user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
" required>
    <input type="hidden" name="id_Wine" id="id_Wine" value="<?php echo $_smarty_tpl->tpl_vars['wine']->value->id_Wine;?>
" required>
    <button class="form-control" type="submit" class="btn btn-primary" id="enviar">Crear</button>   
</form>


<h2>Lista de comentarios</h2>

<table id="table-dark">
            <thead>
                <tr class="table-dark">
                    <th>Usuario</th>
                    <th>Contenido</th>
                    <th>Valoracion</th> 
                    <th>Borrar</th>  
                </tr>
            </thead>
            <tbody class="table-dark" id="list-comments">
            </tbody>
</table>




<?php echo '<script'; ?>
 src="./js/app.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
