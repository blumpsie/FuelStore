
{* anonymous, or logged in, non-admin *}
{if not $session->get('login') or not $session->get('login')->is_admin}
  <li>{html_anchor href="/cart" text="Cart"}</li>
{/if}

{if $session->get('login')}
  <li>{html_anchor href='/authenticate/logout' text='Logout'}</li>
{else}
  <li>{html_anchor href='/authenticate/login' text='Login'}</li>
{/if}
