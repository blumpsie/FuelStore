{*
    Author: Mark Erickson
*}

{extends file="layout.tpl"}

{block name='localstyle'}
  <style type='text/css'>
    td:first-child {
      width: 10px;
    }
    td {
      border: none ! important;
    }
    .error { color: red; font-size: 80%; font-weight:bold; }
  </style>
{/block}

{block name="content"}
    <h2>Create Login</h2>
    
    {form attrs=['action' => "/authenticate/createLoginReentrant"]}
    <table class="table table-condensed">
        <tr>
            <td>Name:</td>
            <td>
                <input class="form-control" type="text" name="name"
                       value="{$name|default}" />
                <span class="error">{$validator->error_message('name')}</span>
            </td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td>
                <input class="form-control" type="text" name="email"
                       value="{$email|default}" />
                <span class="error">{$validator->error_message('email')}</span>
            </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>
                <input class="form-control" type="text" name="password"
                       value="{$password|default}" />
                <span class="error">{$validator->error_message('password')}</span>
            </td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td>
                <input class="form-control" type="text" name="password_confirm"
                       value="{$password_confirm|default}" />
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
    {/form}
    
    <h4 id="message">{$message|default}</h4>
{/block}
