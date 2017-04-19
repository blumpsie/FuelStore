{extends file="layout.tpl"}

{block name="localstyle"}
  <style type='text/css'>
    td:first-child {
      width: 10px;
    }
    td {
      border: none ! important;
    }
  </style>
{/block}

{block name="content"}
  <h2>Login</h2>

  <p>Please enter access information</p>
  {form attrs=['action' => '/authenticate/validate']}
  <table class="table table-condensed">
    <tr>
      <td>user:</td>
      <td><input class="form-control" type="text" name="username" autofocus="on"
                 value="{$username|default}" /></td>
    </tr>
    <tr>
      <td>password:</td>
      <td><input class="form-control" type="password" name="password" /></td>
    </tr>
    <tr>
      <td></td>
      <td><button type="submit">Access</button></td>
    </tr>
  </table>  
  {/form}

  <h4 id="message">{session_get_flash var='message'}</h4>
{/block}
