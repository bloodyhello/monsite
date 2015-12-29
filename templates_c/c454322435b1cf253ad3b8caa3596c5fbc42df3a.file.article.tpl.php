<?php /* Smarty version Smarty-3.1.15, created on 2015-11-17 17:47:38
         compiled from "template\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8072564b5a2a6745e9-06306652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c454322435b1cf253ad3b8caa3596c5fbc42df3a' => 
    array (
      0 => 'template\\article.tpl',
      1 => 1447778838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8072564b5a2a6745e9-06306652',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564b5a2a6a4f59_56208018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564b5a2a6a4f59_56208018')) {function content_564b5a2a6a4f59_56208018($_smarty_tpl) {?>
    <form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">
        <div class="clearfix">
            <label for="titre">Titre: </label>
            <div class="input">
                <input type="text" name="titre" id="titre" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="texte">Texte: </label>
            <div class="textarea">
                <textarea name="texte" id="texte"></textarea>
            </div>
        </div>
        <div class="clearfix">
            <label for="image">Image: </label>
            <div class="input">
                <input type="file" name="image" id="image"/>
            </div>
        </div>
        <br/>
        <div class="clearfix">
            <label for="publie">Publie: </label>
            <div class="input">
                <input type="checkbox" name="publie" id="publie" value="1"/>
            </div>
        </div>
        <br/>
        <div class="form-actions">
            <input type="submit" name="envoyer" value="envoyer" class="btn btn-large btn-primary"/>
        </div>
    </form> <?php }} ?>
