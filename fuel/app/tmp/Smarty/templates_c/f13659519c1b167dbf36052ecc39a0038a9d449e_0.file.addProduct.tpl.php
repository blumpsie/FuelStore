<?php
/* Smarty version 3.1.31, created on 2017-04-24 16:17:28
  from "C:\Users\Blumpsie\Documents\User Interfaces - CSC 417\FuelStore\fuel\app\views\admin\addProduct.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fe5d5800fc64_15377606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f13659519c1b167dbf36052ecc39a0038a9d449e' => 
    array (
      0 => 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\app\\views\\admin\\addProduct.tpl',
      1 => 1493065009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fe5d5800fc64_15377606 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120527571358fe5d57e927a6_59871016', 'localstyle');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100567876558fe5d57e9cb78_59194872', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'localstyle'} */
class Block_120527571358fe5d57e927a6_59871016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_120527571358fe5d57e927a6_59871016',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style type='text/css'>
    td:first-child {
      width: 10px;
    }
    td {
      border: none ! important;
    }
    .error { color: red; font-size: 80%; font-weight:bold; }
  </style>
<?php
}
}
/* {/block 'localstyle'} */
/* {block "content"} */
class Block_100567876558fe5d57e9cb78_59194872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_100567876558fe5d57e9cb78_59194872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Add Product</h2>
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['gravity']->value)===null||$tmp==='' ? '' : $tmp);?>

    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>"/admin/addProductReentrant")));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"/admin/addProductReentrant")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <table class="table table-condensed">
        <tr>
            <td>Name: </td>
            <td>
                <input class="form-control" type="text" name="name"
                       value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
                <span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('name');?>
</span>
        </tr>
        <tr>
            <td>Category:</td>
            <td>
                <select name="category_id">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value),$_smarty_tpl);?>

                </select>
            </td>
        </tr>
        <tr>
            <td>Price: </td>
            <td>
                <input class="form-control" type="text" name="price"
                       value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['price']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
                <span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('price');?>
</span>
            </td>
        </tr>
        <tr>
            <td>Description: </td>
            <td>
                <textarea class="form-control" name="description" rows="10"
                              value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['description']->value)===null||$tmp==='' ? '' : $tmp);?>
">
                </textarea>
            </td>
        </tr>
        <tr>
            <td>Photo: </td>
            <td>
                <select name='photo_id'>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['photos']->value),$_smarty_tpl);?>

                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type='submit' name='addit'>Add</button>
                <button type='submit' name='cancel'>Cancel</button>
            </td>
        </tr>
    </table>
    <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"/admin/addProductReentrant")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    
    <h4 id="message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</h4>
<?php
}
}
/* {/block "content"} */
}
