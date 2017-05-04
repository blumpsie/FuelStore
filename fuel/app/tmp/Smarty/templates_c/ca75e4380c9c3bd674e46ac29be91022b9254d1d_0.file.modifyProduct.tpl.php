<?php
/* Smarty version 3.1.31, created on 2017-05-03 10:53:18
  from "C:\Users\Blumpsie\Documents\User Interfaces - CSC 417\FuelStore\fuel\app\views\admin\modifyProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5909eedea4cf13_96279535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca75e4380c9c3bd674e46ac29be91022b9254d1d' => 
    array (
      0 => 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\app\\views\\admin\\modifyProduct.tpl',
      1 => 1493823190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5909eedea4cf13_96279535 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15445911565909eede972d44_34607172', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12627423615909eede97cb70_15297798', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_15445911565909eede972d44_34607172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_15445911565909eede972d44_34607172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style type="text/css">
        td:first-child {
            width: 10px;
        }
        td {
            border: none ! important;
        }
    </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_12627423615909eede97cb70_15297798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12627423615909eede97cb70_15297798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Modify Product</h2>
    
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>"/admin/modifyProductReentrant/".((string)$_smarty_tpl->tpl_vars['product_id']->value)."}")));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"/admin/modifyProductReentrant/".((string)$_smarty_tpl->tpl_vars['product_id']->value)."}")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

        
        <table class="table-condensed table">
            <tr>
                <td>Name:</td>
                <td>
                    <input class="form-control" type="text" name="name"
                           value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
                </td>
            </tr>
            <tr>
                <td>Category:</td>
                <td>
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['category']->value)===null||$tmp==='' ? '' : $tmp);?>

                </td>
            </tr>
            <tr>
                <td>Price ($):</td>
                <td>
                    <input class="form-control" type="text" name="price"
                           value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['price']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
                </td>
            </tr>
            <tr>
                <td>Description:</td>
                <td>
                    <textarea class="form-control" name="description" rows="10">
                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['description']->value)===null||$tmp==='' ? '' : $tmp);?>

                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Photo:</td>
                <td>
                    <select class="form-control" name="photo">
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['photos']->value,'selected'=>$_smarty_tpl->tpl_vars['photo']->value),$_smarty_tpl);?>

                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="modifyit">Modify</button>
                    <button type="submit" name="cancel">Cancel</button>
                </td>
            </tr>
        </table>
    <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"/admin/modifyProductReentrant/".((string)$_smarty_tpl->tpl_vars['product_id']->value)."}")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <h4 id="message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</h4>
<?php
}
}
/* {/block "content"} */
}
