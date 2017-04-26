
{*anonymous*}
{if not $session->get('login')}
    <li>{html_anchor href="/cart" text="Cart"}</li>
    <li>{html_anchor href='/authenticate/login' text='Login'}</li>
{/if}

{*if logged in but not admin*}
{if $session->get('login') and not $session->get('login')->is_admin}
  <li>{html_anchor href="/cart" text="Cart"}</li>
  <li>{html_anchor href='/user/myOrders' text='My Orders'}</li>
  <li>{html_anchor href='/authenticate/logout' text='Logout'}</li>
{/if}

{*if logged in, and admin*}
{if $session->get('login') and $session->get('login')->is_admin}
    <li> {html_anchor href='/admin/addProduct' text='Add Product'}</li>
    <li> {html_anchor href='/admin/addCategory' text='Add Category'}</li>
    <li> {html_anchor href='/admin/allOrders' text='All Orders'}</li>
    <li>{html_anchor href='/authenticate/logout' text='Logout'}</li>
{/if}