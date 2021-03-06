<?php
/* Smarty version 4.1.0, created on 2022-06-09 18:24:59
  from 'D:\programowanie\Nowy folder\htdocs\Muzyka\app\views\templates\Main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a21edb94a4d3_67541590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60662be476f6126e9c89f213d090be80ade370e0' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Muzyka\\app\\views\\templates\\Main.tpl',
      1 => 1654791895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a21edb94a4d3_67541590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">


	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/font-awesome.min.css">


	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">
	


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">

				

				<ul class="nav navbar-nav pull-right">
				
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shop"class="btn btn-default btn-lg">Strona Główna</a></li>
					<li class="dropdown">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Bazy <b class="caret"></b></a>
						<ul class="dropdown-menu">

							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ShowDB" class="pure-menu-heading pure-menu-link">Muzyka</a></li>

							<!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ShowUsers" class="pure-menu-heading pure-menu-link">Pracownicy</a></li> -->>


						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Koszyk <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131353361462a21edb93b969_32267066', 'cart');
?>

						</ul>
					</li>
					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72641993162a21edb93c188_97075189', 'log');
?>

					
					
					
					<li>

				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
    <!-- Tło fade -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead"><?php echo (($tmp = $_smarty_tpl->tpl_vars['tytul']->value ?? null)===null||$tmp==='' ? "Music4ly" ?? null : $tmp);?>
</h1>
				
				<p class="tagline"><?php echo (($tmp = $_smarty_tpl->tpl_vars['under']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
				
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18469895962a21edb9410a4_84576809', 'whitey');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197351335762a21edb941600_01269814', 'messages');
?>

	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
        <!-- Kolumny -->
    
	    <div class="jumbotron top-space">
		

		    <div class="container">
				
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59176707162a21edb9482f2_28562312', 'form');
?>

			    <h3 class="text-center thin"></h3>
			
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36105262962a21edb948833_01447752', 'row');
?>

		 		<!-- /row  -->
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203776655662a21edb948d23_25986212', 'Cform');
?>

		    </div>
	    </div>

	<!-- /Highlights -->


	
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">some.Hidden.email@somewhere.com</a><br>
								<br>
								234 Hidden Pond Road, Hidden City, TN 37015
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href="https://github.com/Geminin"><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p> Strona zrobiona przez Studenta</p>

							</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, MW. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/template.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/functions.js"><?php echo '</script'; ?>
>
	

</body>
</html><?php }
/* {block 'cart'} */
class Block_131353361462a21edb93b969_32267066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart' => 
  array (
    0 => 'Block_131353361462a21edb93b969_32267066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


							<?php
}
}
/* {/block 'cart'} */
/* {block 'log'} */
class Block_72641993162a21edb93c188_97075189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'log' => 
  array (
    0 => 'Block_72641993162a21edb93c188_97075189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
					<li>
					<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
						<a class="btn btn-default btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" >Wyloguj</a>
						
						
					<?php } else { ?>	
						<a class="btn btn-default btn-lg" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" >Zaloguj</a>

					<?php }?>
					</li>
					<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
					<li><a class="btn btn-default btn-lg"><?php echo $_smarty_tpl->tpl_vars['logininf']->value;?>
</button></a>	</li>
					<?php }?>
					<?php
}
}
/* {/block 'log'} */
/* {block 'whitey'} */
class Block_18469895962a21edb9410a4_84576809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_18469895962a21edb9410a4_84576809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

		<?php
}
}
/* {/block 'whitey'} */
/* {block 'messages'} */
class Block_197351335762a21edb941600_01269814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_197351335762a21edb941600_01269814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'form'} */
class Block_59176707162a21edb9482f2_28562312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_59176707162a21edb9482f2_28562312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


				<?php
}
}
/* {/block 'form'} */
/* {block 'row'} */
class Block_36105262962a21edb948833_01447752 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'row' => 
  array (
    0 => 'Block_36105262962a21edb948833_01447752',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


				<?php
}
}
/* {/block 'row'} */
/* {block 'Cform'} */
class Block_203776655662a21edb948d23_25986212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Cform' => 
  array (
    0 => 'Block_203776655662a21edb948d23_25986212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<?php
}
}
/* {/block 'Cform'} */
}
