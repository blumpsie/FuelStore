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
    <h2>Add Product</h2>
    
    {form attrs=['action' => "/admin/addProductReentrant"]}
    <table class="table table-condensed">
        <tr>
            <td>Name: </td>
            <td>
                <input class="form-control" type="text" name="name"
                       value="{$name|default}" />
                <span class="error">{$validator->error_message('name')}</span>
            </td>
        </tr>
        <tr>
            <td>Category:</td>
            <td>
                <select name="category_id">
                    {html_options options=$categories}
                </select>
            </td>
        </tr>
        <tr>
            <td>Price: </td>
            <td>
                <input class="form-control" type="text" name="price"
                       value="{$price|default}" />
                <span class="error">{$validator->error_message('price')}</span>
            </td>
        </tr>
        <tr>
            <td>Description: </td>
            <td>
                <textarea class="form-control" name="description" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>Photo: </td>
            <td>
                <select name='photo_id'>
                    {html_options options=$photos}
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
    {/form}
    
    <h4 id="message">{$message|default}</h4>
{/block}