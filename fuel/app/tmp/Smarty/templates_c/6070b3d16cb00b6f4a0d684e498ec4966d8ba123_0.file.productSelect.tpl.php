<?php
/* Smarty version 3.1.31, created on 2017-04-27 08:55:52
  from "C:\Users\Blumpsie\Documents\User Interfaces - CSC 417\FuelStore\fuel\app\views\home\productSelect.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5901ea58d24cb1_86858857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6070b3d16cb00b6f4a0d684e498ec4966d8ba123' => 
    array (
      0 => 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\app\\views\\home\\productSelect.tpl',
      1 => 1493297747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5901ea58d24cb1_86858857 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16846137645901ea58c4b004_72470509', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8552785155901ea58c53666_27531912', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_16846137645901ea58c4b004_72470509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_16846137645901ea58c4b004_72470509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style>
    .product img { 
      float: right; 
    }
    .product ul {
      padding-left: 20px;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_8552785155901ea58c53666_27531912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8552785155901ea58c53666_27531912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h2><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h2>

  <p>
    Product id: <?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>

    <br />
    Price: <b>$<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price,2);?>
</b>
  </p>

  <div class="product">
    <?php if ($_smarty_tpl->tpl_vars['product']->value->photo) {?>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['asset_img'][0][0]->asset_img(array('refs'=>"products/".((string)$_smarty_tpl->tpl_vars['product']->value->photo->name),'attrs'=>array('class'=>'img-responsive')),$_smarty_tpl);?>

    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

  </div>

  <div class="action">
      <?php if (!$_smarty_tpl->tpl_vars['session']->value->get('login') || !$_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>"#",'method'=>"get")));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"#",'method'=>"get")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

            <b>Selected quantity</b>
            <br />
            <select name='quantity'>
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['quantities']->value),$_smarty_tpl);?>

            </select>
            <button type="submit">Change Quantity</button>
        <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"#",'method'=>"get")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

      <?php } else { ?>
        <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>"admin/modifyProduct/".((string)$_smarty_tpl->tpl_vars['product']->value->id))));
$_block_repeat=true;
echo $_block_plugin2->form(array('attrs'=>array('action'=>"admin/modifyProduct/".((string)$_smarty_tpl->tpl_vars['product']->value->id))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

            <button type="submit">Modify</button>
        <?php $_block_repeat=false;
echo $_block_plugin2->form(array('attrs'=>array('action'=>"admin/modifyProduct/".((string)$_smarty_tpl->tpl_vars['product']->value->id))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

      <?php }?>
    </div>
    
  <h4 id='message'>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0][0]->session_get_flash(array('var'=>'message'),$_smarty_tpl);?>
    
  </h4>

<?php
}
}
/* {/block "content"} */
}
