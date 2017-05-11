<?php
/* Smarty version 3.1.31, created on 2017-05-11 11:44:10
  from "C:\Users\Blumpsie\Documents\User Interfaces - CSC 417\FuelStore\fuel\app\views\cart\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_591486ca1f5bb8_71226673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0163f1cc936c093c5e560b31b1aac93b7dd5312a' => 
    array (
      0 => 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\app\\views\\cart\\index.tpl',
      1 => 1494517443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591486ca1f5bb8_71226673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2122521705591486ca12e129_43340521', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1911216704591486ca138b96_44974343', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_2122521705591486ca12e129_43340521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_2122521705591486ca12e129_43340521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style type="text/css">
        .top{
            margin-bottom: 20px;
        }
        .top h2{
            display: inline-block;
            margin: 0 30px 0 0;
            vertical-align: bottom;
        }
        .top form{
            display: inline-block;
            vertical-align: bottom;
        }
    </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_1911216704591486ca138b96_44974343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1911216704591486ca138b96_44974343',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="top">
    <h2>My Cart</h2>
</div>
    <?php if (!$_smarty_tpl->tpl_vars['itemsInCart']->value) {?>
            <h1><strong>EMPTY CART!!!</strong></h1>
    <?php } else { ?>
    <table class="table table-hover table-condensed">
        <tr>
            <td>Name</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Per-Product Subtotal</td>
        </tr>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_info']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
         <tr>
            <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>"/cart/show/".((string)$_smarty_tpl->tpl_vars['key']->value),'text'=>((string)$_smarty_tpl->tpl_vars['value']->value['name'])),$_smarty_tpl);?>
</td> 
            <td>$<?php echo number_format($_smarty_tpl->tpl_vars['value']->value['price'],2,".",'');?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['quantity'];?>
</td>
            <td>$<?php echo number_format($_smarty_tpl->tpl_vars['value']->value['subtotal'],2,".",'');?>
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
            <td>$<?php echo number_format($_smarty_tpl->tpl_vars['total_price']->value,2,".",'');?>
</td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['session']->value->get('login')) {?>
        <tr>
            <td>
                <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>'user/placeOrder')));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'user/placeOrder')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

                    <button type="submit">Place Order</button>
                <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>'user/placeOrder')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            </td>
        </tr>
        <?php }?>
        <?php }?>
    </table>

<?php
}
}
/* {/block "content"} */
}
