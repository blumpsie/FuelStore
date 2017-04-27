<?php
/* Smarty version 3.1.31, created on 2017-04-27 12:53:01
  from "C:\Users\Blumpsie\Documents\User Interfaces - CSC 417\FuelStore\fuel\app\views\links.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590221ed0223d8_68273203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdccecbd2e6bdb5bcf719cad09a986cd4977e6c6' => 
    array (
      0 => 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\app\\views\\links.tpl',
      1 => 1493298218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590221ed0223d8_68273203 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if (!$_smarty_tpl->tpl_vars['session']->value->get('login')) {?>
    <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>"/cart",'text'=>"Cart"),$_smarty_tpl);?>
</li>
    <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>'/authenticate/login','text'=>'Login'),$_smarty_tpl);?>
</li>
    <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>'/authenticate/createLogin','text'=>'Create Login'),$_smarty_tpl);?>
</li>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && !$_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
  <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>"/cart",'text'=>"Cart"),$_smarty_tpl);?>
</li>
  <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>'/user/myOrders','text'=>'My Orders'),$_smarty_tpl);?>
</li>
  <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>'/authenticate/logout','text'=>'Logout'),$_smarty_tpl);?>
</li>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['session']->value->get('login') && $_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
    <li> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>'/admin/addProduct','text'=>'Add Product'),$_smarty_tpl);?>
</li>
    <li> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>'/admin/addCategory','text'=>'Add Category'),$_smarty_tpl);?>
</li>
    <li> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>'/admin/allOrders','text'=>'All Orders'),$_smarty_tpl);?>
</li>
    <li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>'/authenticate/logout','text'=>'Logout'),$_smarty_tpl);?>
</li>
<?php }
}
}
