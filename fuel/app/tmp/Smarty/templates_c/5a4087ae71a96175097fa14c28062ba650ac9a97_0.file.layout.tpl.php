<?php
/* Smarty version 3.1.31, created on 2017-04-19 16:18:28
  from "C:\Users\Blumpsie\Documents\User Interfaces - CSC 417\FuelStore\fuel\app\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58f7c6147ca5d7_91472689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a4087ae71a96175097fa14c28062ba650ac9a97' => 
    array (
      0 => 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\app\\views\\layout.tpl',
      1 => 1492180537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:links.tpl' => 1,
  ),
),false)) {
function content_58f7c6147ca5d7_91472689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>  
      <?php ob_start();
echo basename(dirname(Uri::base(array(),$_smarty_tpl)));
$_prefixVariable1=ob_get_clean();
echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? $_prefixVariable1 : $tmp);?>

    </title>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['asset_css'][0][0]->asset_css(array('refs'=>array("bootstrap.min.css","layout.css")),$_smarty_tpl);?>

    
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167736212358f7c614799091_55512872', "localstyle");
?>

</head>
<body>     
  <header>
    <div>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['asset_img'][0][0]->asset_img(array('refs'=>"header.png",'attrs'=>array('class'=>'img-responsive')),$_smarty_tpl);?>

      <span class='login'><?php echo (($tmp = @$_smarty_tpl->tpl_vars['session']->value->get('login')->name)===null||$tmp==='' ? '' : $tmp);?>
</span>
    </div>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" 
                  class="navbar-toggle collapsed" 
                  data-toggle="collapse" 
                  data-target="#toggleMenu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>'/','text'=>'Home','attrs'=>array('class'=>'navbar-brand')),$_smarty_tpl);?>

        </div>

        <div class="collapse navbar-collapse" 
             id="toggleMenu">
          <ul class="nav navbar-nav">
            <?php $_smarty_tpl->_subTemplateRender("file:links.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="container-fluid"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182066482558f7c6147bee56_78489115', "content");
?>
</section>

  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['asset_js'][0][0]->asset_js(array('refs'=>array("jquery.min.js","bootstrap.min.js")),$_smarty_tpl);?>

  <?php echo '<script'; ?>
 type="text/javascript">
    window.onunload = function (){}; // for Safari
  <?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block "localstyle"} */
class Block_167736212358f7c614799091_55512872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_167736212358f7c614799091_55512872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_182066482558f7c6147bee56_78489115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_182066482558f7c6147bee56_78489115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
