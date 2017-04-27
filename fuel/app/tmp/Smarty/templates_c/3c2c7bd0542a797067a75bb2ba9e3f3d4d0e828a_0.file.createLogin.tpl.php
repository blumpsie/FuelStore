<?php
/* Smarty version 3.1.31, created on 2017-04-27 12:53:58
  from "C:\Users\Blumpsie\Documents\User Interfaces - CSC 417\FuelStore\fuel\app\views\authenticate\createLogin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590222264b3580_44211594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c2c7bd0542a797067a75bb2ba9e3f3d4d0e828a' => 
    array (
      0 => 'C:\\Users\\Blumpsie\\Documents\\User Interfaces - CSC 417\\FuelStore\\fuel\\app\\views\\authenticate\\createLogin.tpl',
      1 => 1493312032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590222264b3580_44211594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27009844659022225a06a15_59769757', 'localstyle');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10645397759022225a11581_35902800', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'localstyle'} */
class Block_27009844659022225a06a15_59769757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'localstyle' => 
  array (
    0 => 'Block_27009844659022225a06a15_59769757',
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
class Block_10645397759022225a11581_35902800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10645397759022225a11581_35902800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Create Login</h2>
    
    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['form'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['form'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'form'))) {
throw new SmartyException('block tag \'form\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('attrs'=>array('action'=>"/authenticate/createLoginReentrant")));
$_block_repeat=true;
echo $_block_plugin1->form(array('attrs'=>array('action'=>"/authenticate/createLoginReentrant")), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
?>

    <table class="table table-condensed">
        <tr>
            <td>Name:</td>
            <td>
                <input class="form-control" type="text" name="name"
                       value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['name']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
                <span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('name');?>
</span>
            </td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td>
                <input class="form-control" type="text" name="email"
                       value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['email']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
                <span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('email');?>
</span>
            </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>
                <input class="form-control" type="text" name="password"
                       value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['password']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
                <span class="error"><?php echo $_smarty_tpl->tpl_vars['validator']->value->error_message('password');?>
</span>
            </td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td>
                <input class="form-control" type="text" name="password_confirm"
                       value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['password_confirm']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
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
echo $_block_plugin1->form(array('attrs'=>array('action'=>"/authenticate/createLoginReentrant")), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    
    <h4 id="message"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</h4>
<?php
}
}
/* {/block "content"} */
}
