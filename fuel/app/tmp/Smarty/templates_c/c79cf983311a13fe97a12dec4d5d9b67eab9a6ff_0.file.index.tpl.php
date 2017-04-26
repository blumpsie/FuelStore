<?php
/* Smarty version 3.1.31, created on 2017-04-24 09:52:34
  from "C:\Users\Blumpsie\Documents\User Interfaces - CSC 417\FuelStore\fuel\app\views\home\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58fe03227ee206_47639942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c79cf983311a13fe97a12dec4d5d9b67eab9a6ff' => 
    array (
      0 => 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\app\\views\\home\\index.tpl',
      1 => 1493041682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fe03227ee206_47639942 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36229870958fe03226eec28_65001006', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142525241458fe03226fadb0_65602044', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_36229870958fe03226eec28_65001006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_36229870958fe03226eec28_65001006',
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
    .price {
      text-align: right ! important;
    }
  </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_142525241458fe03226fadb0_65602044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_142525241458fe03226fadb0_65602044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <div class='top'>
      <?php echo $_smarty_tpl->tpl_vars['category']->value;?>

      <?php echo $_smarty_tpl->tpl_vars['order']->value;?>

    <h2>Products</h2>
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array());
$_block_repeat=true;
echo $_block_plugin1->form(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

      <button type="submit">Filter by Category:</button>
      <select name="category">
          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl);?>

      </select>
    <?php $_block_repeat=false;
echo $_block_plugin1->form(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

  </div>
  
  <table class="table table-hover table-condensed">
    <tr>
      <th>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>"/home/setProductOrder/name",'text'=>"name"),$_smarty_tpl);?>

      </th>
      <th>category</th>
      <th class="price">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>"/home/setProductOrder/price",'text'=>"price"),$_smarty_tpl);?>

      </th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
      <tr>
        <td>
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>"/cart/show/".((string)$_smarty_tpl->tpl_vars['product']->value->id),'text'=>((string)$_smarty_tpl->tpl_vars['product']->value->name)),$_smarty_tpl);?>
            
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value->category->name;?>
</td>
        <td class="price">$<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->price,2);?>
</td>
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </table>

<?php
}
}
/* {/block "content"} */
}
