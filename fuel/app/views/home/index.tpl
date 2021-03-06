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
    .price {
      text-align: right ! important;
    }
  </style>
{/block}

{block name="content"}

  <div class='top'>
    <h2>Products</h2>
    {form attrs = ['method' => 'get', 'action' => "/home/setCategory"]}
      <button type="submit">Filter by Category:</button>
      <select name="category">
          {html_options options=$categories selected=$category}
      </select>
    {/form}
  </div>
  
  <table class="table table-hover table-condensed">
    <tr>
      <th>
        {html_anchor href="/home/setProductOrder/name" text="name"}
      </th>
      <th>category</th>
      <th class="price">
        {html_anchor href="/home/setProductOrder/price" text="price"}
      </th>
    </tr>
    {foreach $products as $product}
      <tr>
        <td>
          {html_anchor href="/cart/show/{$product->id}" text="{$product->name}"}            
        </td>
        <td>{$product->category->name}</td>
        <td class="price">${number_format($product->price,2)}</td>
      </tr>
    {/foreach}
  </table>

{/block}
