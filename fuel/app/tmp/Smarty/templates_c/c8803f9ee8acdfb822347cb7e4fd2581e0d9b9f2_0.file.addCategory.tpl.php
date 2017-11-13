<?php
/* Smarty version 3.1.31, created on 2017-05-11 16:12:59
  from "C:\Users\Blumpsie\Documents\User Interfaces - CSC 417\FuelStore\fuel\app\views\admin\addCategory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5914c5cb838091_28423718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8803f9ee8acdfb822347cb7e4fd2581e0d9b9f2' => 
    array (
      0 => 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\app\\views\\admin\\addCategory.tpl',
      1 => 1494533575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5914c5cb838091_28423718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5146792675914c5cb77c5f9_78145249', 'localstyle');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_570754695914c5cb788002_38030876', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'localstyle'} */
class Block_5146792675914c5cb77c5f9_78145249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_5146792675914c5cb77c5f9_78145249',
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
        .error { color: red; font-size: 80%; font-wieght:bold; }
    </style>
<?php
}
}
/* {/block 'localstyle'} */
/* {block "content"} */
class Block_570754695914c5cb788002_38030876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_570754695914c5cb788002_38030876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Add a Category</h2>
    
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>"/admin/addCategoryReentrant")));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"/admin/addCategoryReentrant")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <table class="table table-condensed">
        <tr>
            <td><h4><strong>Current Categories:</strong></h4></td>
        </tr>
        <tr>
            <td>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                -- <strong><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</strong><br />
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </td>
        </tr>
        
        <tr>
            <td>Name of Category:</td>
            <td>
                <input class="form-control" type="text" name="name"
                       value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
                <span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('name');?>
</span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type='submit' name='addit'>Add</button>
                <button type='submit' name='cancel'>Cancel</button>
        </tr>
        </tr>
    </table>
    <?php $_block_repeat=false;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"/admin/addCategoryReentrant")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    
    <h4 id="message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</h4>
<?php
}
}
/* {/block "content"} */
}
