{*
author: Mark Erickson
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
        .error { color: red; font-size: 80%; font-wieght:bold; }
    </style>
{/block}

{block name="content"}
    <h2>Add a Category</h2>
    
    {form attrs=['action' => "/admin/addCategoryReentrant"]}
    <table class="table table-condensed">
        <tr>
            <td><h4><strong>Current Categories:</strong></h4></td>
        </tr>
        <tr>
            {foreach $categories as $category}
                -- <strong>{$category}</strong><br />
            {/foreach}
        </tr>
        <tr>
        <tr>
            <td>Name of Category:</td>
            <td>
                <input class="form-control" type="text" name="name"
                       value="{$name|default}" />
                <span class="error">{$validator->error_message('name')}</span>
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
    {/form}
    
    <h4 id="message">{$message|default}</h4>
{/block}