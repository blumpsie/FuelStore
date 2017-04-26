<?php
/* Smarty version 3.1.31, created on 2017-04-26 13:08:21
  from "C:\Users\Blumpsie\Documents\User Interfaces - CSC 417\FuelStore\fuel\app\views\home\showOrder.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5900d4056c03c0_86179078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c171bcf9753874212272cba9207ffb55e1d72de5' => 
    array (
      0 => 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\app\\views\\home\\showOrder.tpl',
      1 => 1493226405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5900d4056c03c0_86179078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95891645900d405546568_61261635', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7880634585900d405556b80_79434326', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_95891645900d405546568_61261635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_95891645900d405546568_61261635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style type="text/css">
        .top { 
      margin-bottom: 20px; 
    }
    .top h2 { 
      display: inline-block;
      margin: 0 30px 0 0;
      vertical-align: bottom;
    }
    .top form {
      display: inline-block;
      vertical-align: bottom;
    }
    </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_7880634585900d405556b80_79434326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7880634585900d405556b80_79434326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="top">
        <h2>Order #<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</h2>
        <?php if ($_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
        <br />
        <br />
        User:<?php echo $_smarty_tpl->tpl_vars['order']->value->user->name;?>

        <br />
        Email:<?php echo $_smarty_tpl->tpl_vars['order']->value->user->email;?>

        <?php }?>
    </div>
        
    <table class="table table-hover table-condensed">
        <tr>
            <td>Name</td>
            <td>Id</td>
            <td>Category</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selections']->value, 'selection');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['selection']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>"/cart/show/".((string)$_smarty_tpl->tpl_vars['selection']->value->product->id),'text'=>((string)$_smarty_tpl->tpl_vars['selection']->value->product->name)),$_smarty_tpl);?>
</td>
                <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['selection']->value->product->id)===null||$tmp==='' ? '' : $tmp);?>
</td>
                <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['selection']->value->product->category->name)===null||$tmp==='' ? '' : $tmp);?>
</td>
                <td>$<?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['selection']->value->product->price)===null||$tmp==='' ? '' : $tmp),2,'.','');?>
</td>
                <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['selection']->value->quantity)===null||$tmp==='' ? '' : $tmp);?>
</td>
                <td>$<?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['subtotal']->value[$_smarty_tpl->tpl_vars['selection']->value->id])===null||$tmp==='' ? '' : $tmp),2,'.','');?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        <tr>
            <td>Total:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>$<?php echo number_format($_smarty_tpl->tpl_vars['total']->value,2,'.','');?>
</td>
        </tr>
    </table>
    
    <?php if ($_smarty_tpl->tpl_vars['session']->value->get('login')->is_admin) {?>
    <div class='action'>
        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>"/admin/removeOrder/".((string)$_smarty_tpl->tpl_vars['order']->value->id),'method'=>'get')));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"/admin/removeOrder/".((string)$_smarty_tpl->tpl_vars['order']->value->id),'method'=>'get')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

            <button type='submit'>
                <?php ob_start();
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0][0]->session_get_flash(array('var'=>'button_title'),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
echo (($tmp = @$_prefixVariable1)===null||$tmp==='' ? 'Remove' : $tmp);?>

            </button>
            <input type='hidden' name='confirm'
                   value='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0][0]->session_get_flash(array('var'=>'confirm'),$_smarty_tpl);?>
' />
        <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"/admin/removeOrder/".((string)$_smarty_tpl->tpl_vars['order']->value->id),'method'=>'get')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </div>
    <h4 id='message'>
         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0][0]->session_get_flash(array('var'=>'message'),$_smarty_tpl);?>
    
    </h4>
    <?php }
}
}
/* {/block "content"} */
}
