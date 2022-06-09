<?php
/* Smarty version 4.1.0, created on 2022-06-09 18:13:00
  from 'D:\programowanie\Nowy folder\htdocs\Muzyka\app\views\ShopView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a21c0cf1d151_59205784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '083b7968c5dd157607bd9237b29c30cb8fe164c0' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Muzyka\\app\\views\\ShopView.tpl',
      1 => 1654592501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a21c0cf1d151_59205784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100467267362a21c0cf0e303_96359932', 'cart');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143406630462a21c0cf17810_34748395', 'row');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'cart'} */
class Block_100467267362a21c0cf0e303_96359932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart' => 
  array (
    0 => 'Block_100467267362a21c0cf0e303_96359932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Cart']->value, 'cart');
$_smarty_tpl->tpl_vars['cart']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->do_else = false;
?>

	<li color="white"><?php echo $_smarty_tpl->tpl_vars['cart']->value["Title"];?>
 <?php echo $_smarty_tpl->tpl_vars['cart']->value["Price"];?>
</li>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<button class="btn btn-download btn-action btn-lg">Zamów</button>
<?php
}
}
/* {/block 'cart'} */
/* {block 'row'} */
class Block_143406630462a21c0cf17810_34748395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'row' => 
  array (
    0 => 'Block_143406630462a21c0cf17810_34748395',
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

	  <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value["title"];?>
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
		<button class="btn btn-download btn-action btn-lg" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
AddToCart/<?php echo $_smarty_tpl->tpl_vars['wiersz']->value['Album_id'];?>
','Dodano do koszyka')">Dodaj do Koszyka</a>
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
