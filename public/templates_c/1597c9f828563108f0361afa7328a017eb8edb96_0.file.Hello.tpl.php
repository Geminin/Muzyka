<?php
/* Smarty version 4.1.0, created on 2022-05-15 13:54:46
  from 'D:\programowanie\Nowy folder\htdocs\Muzyka\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6280ea06a85ba5_30363842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1597c9f828563108f0361afa7328a017eb8edb96' => 
    array (
      0 => 'D:\\programowanie\\Nowy folder\\htdocs\\Muzyka\\app\\views\\Hello.tpl',
      1 => 1652615455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280ea06a85ba5_30363842 (Smarty_Internal_Template $_smarty_tpl) {
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
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Projekty <b class="caret"></b></a>
						<ul class="dropdown-menu">

							<li><a href="/Calc/calc.php">Kalkulator</a></li>

							<li><a href="/Cred/cred.php">Kalkulator Kredytowy</a></li>

							<li><a href="">Coming Soon</a></li>

							<li><a href="">Coming Soon</a></li>

						</ul>
					</li>
					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15088622626280ea06a81283_12725443', 'log');
?>

					
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
				<h1 class="lead"><?php echo (($tmp = $_smarty_tpl->tpl_vars['tytul']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
				
				<p class="tagline"><?php echo (($tmp = $_smarty_tpl->tpl_vars['under']->value ?? null)===null||$tmp==='' ? "opis domyślny" ?? null : $tmp);?>
</p>
				
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19819968406280ea06a82903_80104556', 'whitey');
?>


	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
        <!-- Kolumny -->
    
	    <div class="jumbotron top-space">
		

		    <div class="container">
				
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12166609686280ea06a82e49_32374802', 'form');
?>

			    <h3 class="text-center thin"></h3>
			
			    <div class="row">
				    <div class="col-md-3 col-sm-6 highlight">
				
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5076466456280ea06a83333_93272056', 'k1');
?>

				
				    </div>
				    <div class="col-md-3 col-sm-6 highlight">
				
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3836325406280ea06a83806_95328575', 'k2');
?>

				 
				    </div>
				    <div class="col-md-3 col-sm-6 highlight">
				
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18526868816280ea06a83cd0_54581958', 'k3');
?>

				  
				    </div>
				    <div class="col-md-3 col-sm-6 highlight">
					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5390380016280ea06a841a9_89059170', 'k4');
?>

				  
				    </div>
			    </div> <!-- /row  -->
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18495375306280ea06a84811_50865932', 'Cform');
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

</body>
</html><?php }
/* {block 'log'} */
class Block_15088622626280ea06a81283_12725443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'log' => 
  array (
    0 => 'Block_15088622626280ea06a81283_12725443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block 'log'} */
/* {block 'whitey'} */
class Block_19819968406280ea06a82903_80104556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'whitey' => 
  array (
    0 => 'Block_19819968406280ea06a82903_80104556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

		<?php
}
}
/* {/block 'whitey'} */
/* {block 'form'} */
class Block_12166609686280ea06a82e49_32374802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form' => 
  array (
    0 => 'Block_12166609686280ea06a82e49_32374802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


				<?php
}
}
/* {/block 'form'} */
/* {block 'k1'} */
class Block_5076466456280ea06a83333_93272056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k1' => 
  array (
    0 => 'Block_5076466456280ea06a83333_93272056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

					<?php
}
}
/* {/block 'k1'} */
/* {block 'k2'} */
class Block_3836325406280ea06a83806_95328575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k2' => 
  array (
    0 => 'Block_3836325406280ea06a83806_95328575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

					<?php
}
}
/* {/block 'k2'} */
/* {block 'k3'} */
class Block_18526868816280ea06a83cd0_54581958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k3' => 
  array (
    0 => 'Block_18526868816280ea06a83cd0_54581958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

					<?php
}
}
/* {/block 'k3'} */
/* {block 'k4'} */
class Block_5390380016280ea06a841a9_89059170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'k4' => 
  array (
    0 => 'Block_5390380016280ea06a841a9_89059170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

					<?php
}
}
/* {/block 'k4'} */
/* {block 'Cform'} */
class Block_18495375306280ea06a84811_50865932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Cform' => 
  array (
    0 => 'Block_18495375306280ea06a84811_50865932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<?php
}
}
/* {/block 'Cform'} */
}
