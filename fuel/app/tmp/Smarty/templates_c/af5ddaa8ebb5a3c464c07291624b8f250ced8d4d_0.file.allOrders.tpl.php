<?php
/* Smarty version 3.1.31, created on 2017-04-26 11:28:59
  from "C:\Users\Blumpsie\Documents\User Interfaces - CSC 417\FuelStore\fuel\app\views\admin\allOrders.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5900bcbbc25753_44443554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af5ddaa8ebb5a3c464c07291624b8f250ced8d4d' => 
    array (
      0 => 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\app\\views\\admin\\allOrders.tpl',
      1 => 1493220537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5900bcbbc25753_44443554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19996380555900bcbbb8e343_89741385', "localstyle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2211955875900bcbbb98686_87095683', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "localstyle"} */
class Block_19996380555900bcbbb8e343_89741385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_19996380555900bcbbb8e343_89741385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style type="text/css">
        td:first-child{
            width: 10px;
        }
        td{
            border: none ! important;
        }
    </style>
<?php
}
}
/* {/block "localstyle"} */
/* {block "content"} */
class Block_2211955875900bcbbb98686_87095683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2211955875900bcbbb98686_87095683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>All Orders</h2>
    <table class="table-condensed">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_anchor'][0][0]->html_anchor(array('href'=>"/show/order/".((string)$_smarty_tpl->tpl_vars['order']->value->id),'text'=>"Order #".((string)$_smarty_tpl->tpl_vars['order']->value->id)),$_smarty_tpl);?>

                </td>
                <td><strong>Time Placed:</strong><?php echo $_smarty_tpl->tpl_vars['order']->value->created_at;?>
</td>
                <td><strong>for:</strong><?php echo $_smarty_tpl->tpl_vars['order']->value->user->name;?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </table>
    <h4 id='message'>
         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['session_get_flash'][0][0]->session_get_flash(array('var'=>'message'),$_smarty_tpl);?>
    
    </h4>
<?php
}
}
/* {/block "content"} */
}
