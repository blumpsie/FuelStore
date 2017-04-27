{* productSelect.tpl *}

{extends file="layout.tpl"}

{block name="localstyle"}
  <style>
    .product img { 
      float: right; 
    }
    .product ul {
      padding-left: 20px;
    }
  </style>
{/block}

{block name="content"}
  <h2>{$product->name}</h2>

  <p>
    Product id: {$product->id}
    <br />
    Price: <b>${number_format($product->price,2)}</b>
  </p>

  <div class="product">
    {if $product->photo}
      {asset_img refs="products/{$product->photo->name}" 
                 attrs=['class' => 'img-responsive']}
    {/if}
    {$description}
  </div>

  <div class="action">
      {if not $session->get('login') or not $session->get('login')->is_admin}
        {form attrs=[action=>"#", method=>"get"]}
            <b>Selected quantity</b>
            <br />
            <select name='quantity'>
                {html_options options=$quantities}
            </select>
            <button type="submit">Change Quantity</button>
        {/form}
      {else}
        {form attrs=['action'=>"admin/modifyProduct/{$product->id}"]}
            <button type="submit">Modify</button>
        {/form}
      {/if}
    </div>
    
  <h4 id='message'>
    {session_get_flash var='message'}    
  </h4>

{/block}
