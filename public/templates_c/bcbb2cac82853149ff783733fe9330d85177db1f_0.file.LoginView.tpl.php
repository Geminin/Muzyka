<?php
/* Smarty version 4.1.0, created on 2022-05-24 10:34:53
  from 'D:\programowanie\Nowy folder\htdocs\Muzyka\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628c98ad7d8047_28190609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcbb2cac82853149ff783733fe9330d85177db1f' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Muzyka\\app\\views\\LoginView.tpl',
      1 => 1653381247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628c98ad7d8047_28190609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_921920943628c98ad7d4552_85223421', 'whitey');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'whitey'} */
class Block_921920943628c98ad7d4552_85223421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_921920943628c98ad7d4552_85223421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
<?php
}
}
/* {/block 'whitey'} */
}
