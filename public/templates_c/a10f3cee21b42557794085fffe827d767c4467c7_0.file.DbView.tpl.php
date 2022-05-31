<?php
/* Smarty version 4.1.0, created on 2022-05-31 11:28:05
  from 'D:\programowanie\Nowy folder\htdocs\Muzyka\app\views\DbView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6295dfa571d924_29165729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a10f3cee21b42557794085fffe827d767c4467c7' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Muzyka\\app\\views\\DbView.tpl',
      1 => 1653989280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6295dfa571d924_29165729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13406621616295dfa5710e49_90952299', 'whitey');
?>


ta

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14457011906295dfa571b3f6_03105575', 'row');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'whitey'} */
class Block_13406621616295dfa5710e49_90952299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_13406621616295dfa5710e49_90952299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h1>Albumy</h1>
<table class="pure-table pure-table-bordered" align="center">
<thead>
    <tr align="center">
        <td>Title</td>
        <td>Performer_id</td>
        <td>Genre</td>
        <td>Price</td>
        <td>Tracks</td>
        <td>Opcje</td>
    </tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Album']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
    
    <tr>

        <td> <?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Title"];?>
</td>
        <td> <?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Performer_id"];?>
</td>
        <td> <?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Genre"];?>
</td>
        <td> <?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Price"];?>
</td>
        <td> <?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Tracks"];?>
</td>
        <td>
            <a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
AlbumEdit/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['Album_id'];?>
">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning"
			  onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
AlbumDelete/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['Album_id'];?>
','Czy na pewno usunąć rekord ?')">Usuń</a>
        </td>

    </tr>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<?php
}
}
/* {/block 'whitey'} */
/* {block 'row'} */
class Block_14457011906295dfa571b3f6_03105575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'row' => 
  array (
    0 => 'Block_14457011906295dfa571b3f6_03105575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="pure-table pure-table-bordered" align="center">
<thead>
    <tr align="center">
        <td>Performer_id</td>
        <td>Name</td>
        <td>Opcje</td>
    </tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Performer']->value, 'wiersz2');
$_smarty_tpl->tpl_vars['wiersz2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz2']->value) {
$_smarty_tpl->tpl_vars['wiersz2']->do_else = false;
?>
    <tr>
        <td> <?php echo $_smarty_tpl->tpl_vars['wiersz2']->value["Performer_id"];?>
</td>
        <td> <?php echo $_smarty_tpl->tpl_vars['wiersz2']->value["Name"];?>
</td>
                <td>
            <a class="button-small pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
AlbumEdit/<?php echo $_smarty_tpl->tpl_vars['wiersz2']->value['Performer_id'];?>
">Edytuj</a>
			&nbsp;
			<a class="button-small pure-button button-warning"
			  onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
AlbumDelete/<?php echo $_smarty_tpl->tpl_vars['wiersz2']->value['Name'];?>
','Czy na pewno usunąć rekord ?')">Usuń</a>
        </td>
    </tr>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<?php
}
}
/* {/block 'row'} */
}
