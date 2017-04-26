{*
showOrder.tpl: used for displaying an order
Author: Mark Erickson
*}

{extends file="layout.tpl"}

{block name="localstyle"}
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
    </style>
{/block}

{block name="content"}
    <div class="top">
        <h2>Order #{$order->id}</h2>
        {if $session->get('login')->is_admin}
        <br />
        <br />
        User:{$order->user->name}
        <br />
        Email:{$order->user->email}
        {/if}
    </div>
        
    <table class="table table-hover table-condensed">
        <tr>
            <td>Name</td>
            <td>Id</td>
            <td>Category</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal</td>
        </tr>
        {foreach $selections as $selection}
            <tr>
                <td>{html_anchor href="/cart/show/{$selection->product->id}" 
                                 text="{$selection->product->name}"}</td>
                <td>{$selection->product->id|default}</td>
                <td>{$selection->product->category->name|default}</td>
                <td>${number_format($selection->product->price|default, 2, '.', '')}</td>
                <td>{$selection->quantity|default}</td>
                <td>${number_format($subtotal[$selection->id]|default, 2, '.', '')}</td>
            </tr>
        {/foreach}
        <tr>
            <td>Total:</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>${number_format($total, 2, '.', '')}</td>
        </tr>
    </table>
    
    {if $session->get('login')->is_admin}
    <div class='action'>
        {form attrs=['action' => "/admin/removeOrder/{$order->id}", 
                'method'=>'get']}
            <button type='submit'>
                {{session_get_flash var='button_title'}|default:'Remove'}
            </button>
            <input type='hidden' name='confirm'
                   value='{session_get_flash var='confirm'}' />
        {/form}
    </div>
    <h4 id='message'>
         {session_get_flash var='message'}    
    </h4>
    {/if}
{/block}