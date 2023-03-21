<?php
/* Smarty version 3.1.47, created on 2023-03-21 09:33:43
  from 'C:\Users\pierr\Documents\GitHub\Projet-Web\Views\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64196be75b41a8_90826131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23839e7807acd141cfd84f392f9a44254bb2b8a0' => 
    array (
      0 => 'C:\\Users\\pierr\\Documents\\GitHub\\Projet-Web\\Views\\header.tpl',
      1 => 1679387620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64196be75b41a8_90826131 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" media="all" href="../media/bootstrap/css/bootstrap.min.css" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MIB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" href="#">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == 'home') {?>active" aria-current="page<?php }?>" href="#">Home</a>
                    </li>
                    <li class="nav-item" href="#">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == 'internship') {?>active" aria-current="page<?php }?>" href="#">Internships</a>
                    </li>
                    <li class="nav-item" href="#">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == 'companies') {?>active" aria-current="page<?php }?>" href="#">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['page']->value == 'profile') {?>active" aria-current="page<?php }?>" href="#">My Profile</a>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['user_role']->value == 'admin' || $_smarty_tpl->tpl_vars['user_role']->value == 'tutor') {?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($_smarty_tpl->tpl_vars['page']->value == 'admin_panel') {?>active" aria-current="page<?php }?>" href="#"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin Panel
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Users</a></li>
                            <li><a class="dropdown-item" href="#">Companies</a></li>
                            <li><a class="dropdown-item" href="#">Internships</a></li>
                        </ul>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>

<!--
$title : le titre de l'onglais
$page le nom de la page active (home,internships,companies,profile)
$user_role : le rôle de l'utilisateur (student, admin, tutor)
--><?php }
}
