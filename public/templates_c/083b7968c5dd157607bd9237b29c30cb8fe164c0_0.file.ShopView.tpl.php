<?php
/* Smarty version 4.1.0, created on 2022-05-29 16:54:06
  from 'D:\programowanie\Nowy folder\htdocs\Muzyka\app\views\ShopView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6293890e4b1ed7_81556048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '083b7968c5dd157607bd9237b29c30cb8fe164c0' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Muzyka\\app\\views\\ShopView.tpl',
      1 => 1653836045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6293890e4b1ed7_81556048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9419837046293890e4a6621_35322839', 'row');
?>

--><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'row'} */
class Block_9419837046293890e4a6621_35322839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'row' => 
  array (
    0 => 'Block_9419837046293890e4a6621_35322839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista']->value, 'wiersz');
$_smarty_tpl->tpl_vars['wiersz']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wiersz']->value) {
$_smarty_tpl->tpl_vars['wiersz']->do_else = false;
?>
<div class="row">
	<div class="col-md-3 col-sm-6 highlight">
				
					
				
	</div>

                    
	<div class="col-md-3 col-sm-6 highlight">

	  <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['wiersz']->value["title"];?>
.png" alt="tu ma być zdj"> -->
	
	</div>
	<div class="col-md-3 col-sm-6 highlight ">

	    <?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Title"];?>
 <i style="font-size:12px">by <?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Name"];?>
</i><br>
		<br>
        <p style="font-size:11px"> <?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Tracks"];?>
</p>
	
	</div>
	<div class="center col-md-3 col-sm-6 highlight">

		<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
		&nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $_smarty_tpl->tpl_vars['wiersz']->value["Price"];?>
zł<br>
		<button type="submit" class="pure-button pure-button-primary"> <br>Do Koszyka</button>
        <?php }?>
    </div>
</div>
<hr style="width:75%;height:1px;border-width:0;color:gray;background-color:gray">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'row'} */
}
