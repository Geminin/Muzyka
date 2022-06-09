<?php
/* Smarty version 4.1.0, created on 2022-06-09 13:07:38
  from 'D:\programowanie\Nowy folder\htdocs\Muzyka\app\views\MusicEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a1d47a32eab5_98480828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19ad351d587ebad9ad63ad3d99de0410c3529587' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Muzyka\\app\\views\\MusicEdit.tpl',
      1 => 1654772853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a1d47a32eab5_98480828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45356057362a1d47a327e98_35971858', 'whitey');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'whitey'} */
class Block_45356057362a1d47a327e98_35971858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_45356057362a1d47a327e98_35971858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
MusicSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane osoby</legend>
        	<div class="pure-control-group">
            <label for="ID">Album_id</label>
            <input id="Album_id" type="text" placeholder="Album_id" name="Album_id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Album_id;?>
">
        </div>
		<div class="pure-control-group">
            <label for="Title">imię</label>
            <input id="Title" type="text" placeholder="Nazwa" name="Title" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Title;?>
">
        </div>
		<div class="pure-control-group">
            <label for="Performer_id">ID Wykonawcy</label>
            <input id="Performer_id" type="text" placeholder="ID Wykonawcy" name="Performer_id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Performer_id;?>
">
        </div>
		<div class="pure-control-group">
            <label for="Genre">Gatunek</label>
            <input id="Genre" type="text" placeholder="Gatunek" name="Genre" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Genre;?>
">
        </div>
        	<div class="pure-control-group">
            <label for="Price">Cena</label>
            <input id="Price" type="text" placeholder="Cena" name="Price" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Price;?>
">
        </div>
            <div class="pure-control-group">
            <label for="Tracks">Utwory</label>
            <input id="Tracks" type="text" placeholder="Utwory" name="Tracks" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Tracks;?>
">
        </div>


		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ShowDb">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="Album_id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Album_id;?>
">
</form>	
</div>

<?php
}
}
/* {/block 'whitey'} */
}
