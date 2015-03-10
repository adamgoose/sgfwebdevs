<ul class="sidebar-menu" id="nav-accordion">

  <p class="centered"><img src="{{Auth::user()->gravatar}}" class="img-circle" width="60"></p>
  <h5 class="centered">{{Auth::user()->name}}</h5>

  <li class="mt">
    <a class="{{Request::is('admin') ? 'active' : ''}}" href="{{route('admin.index')}}">
      <i class="fa fa-dashboard"></i>
      <span>Dashboard</span>
    </a>
  </li>

</ul>