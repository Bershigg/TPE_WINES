<?php
/* Smarty version 3.1.39, created on 2021-11-19 17:25:56
  from 'C:\xampp\htdocs\TPE_WINES\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6197d01465bc65_80800674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14d9753ca4d243e365b043a5dc9a849fd4bba1a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WINES\\templates\\header.tpl',
      1 => 1637339135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/navbar.tpl' => 1,
  ),
),false)) {
function content_6197d01465bc65_80800674 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>


<?php $_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
