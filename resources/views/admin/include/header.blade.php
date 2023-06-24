<header id="header"> <img id="button-menu" src="images/inner-favicon.webp" alt="Vairagi Ayurveda" />
 <ul class="nav pull-right logout">
  <li><a href="#" class="dropdown-toggle" title="User Name"><i class="fas fa-user"></i> &nbsp;</a></li>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href=""onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-toggle" style="padding: 10px 15px;display: block;" title="Log Out"><i class="fas fa-sign-out-alt"></i></a>
    </form>
 </ul>
</header>