{*
modifyProduct.tpl: used for modifying a product
Author: Mark Erickson
*}

{extends file="layout.tpl"}

{block name="localstyle"}
    <style type="text/css">
        td:first-child {
            width: 10px;
        }
        td {
            border: none ! important;
        }
    </style>
{/block}

{block name="content"}
    <h2>Modify Product</h2>
    
    {form attrs=['action' => "/admin/modifyProductReentrant/{$product_id}"]}
        
        <table class="table-condensed table">
            <tr>
                <td>Name:</td>
                <td>
                    <input class="form-control" type="text" name="name"
                           value="{$name|default}" />
                </td>
            </tr>
            <tr>
                <td>Category:</td>
                <td>
                    {$category|default}
                </td>
            </tr>
            <tr>
                <td>Price ($):</td>
                <td>
                    <input class="form-control" type="text" name="price"
                           value="{$price|default}" />
                </td>
            </tr>
            <tr>
                <td>Description:</td>
                <td>
                    <textarea class="form-control" name="description" rows="10">{$description|default}</textarea>
                </td>
            </tr>
            <tr>
                <td>Photo:</td>
                <td>
                    <select class="form-control" name="photo">
                        {html_options options=$photos selected=$photo}
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
    {/form}
                        <h4 id="message">{$message|default}</h4>
{/block}
