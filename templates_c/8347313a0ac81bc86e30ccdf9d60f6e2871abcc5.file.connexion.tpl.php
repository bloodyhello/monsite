<?php /* Smarty version Smarty-3.1.15, created on 2015-11-17 18:02:42
         compiled from "template\connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23461564b41ed43f068-48103053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8347313a0ac81bc86e30ccdf9d60f6e2871abcc5' => 
    array (
      0 => 'template\\connexion.tpl',
      1 => 1447779759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23461564b41ed43f068-48103053',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_564b41ed601fc1_63283735',
  'variables' => 
  array (
    '_SESSION' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564b41ed601fc1_63283735')) {function content_564b41ed601fc1_63283735($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['_SESSION']->value['connexion'])) {?>
    // Si le bouton connexion est posté, je traite les données
    <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 = addcslashes($_POST['email'], "'%_");
    //Securisation des variables
    $mdp = addcslashes($_POST['mdp'], "'%_");

    $select_connexion = "SELECT * FROM `connexion` WHERE email = '$email' AND mdp = '$mdp'";
    $req = mysql_query($select_connexion);
    $tableau = mysql_fetch_array($req);
<?php }?>

<h1>Connexion</h1>
    <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion" name="form_connexion">

        <div class="clearfix">
            <label for="email">Email </label>
            <div class="input">
                <input type="text" name="email" id="email" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="mdp">Mots de passe </label>
            <div class="input">
                <input type="password" name="mdp" id="mdp"></textarea>
            </div>
        </div>

        <div class="form-actions">
            <input type="submit" name="connexion" value="connexion" class="btn btn-large btn-primary"/>
        </div>
    </form> <?php }} ?>
