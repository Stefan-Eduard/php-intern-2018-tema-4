@content
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <div class = "navbar-brand col-sm-3 col-md-2 mr-0">
        <span data-feather="box"></span>
        <a href="/">World Cube Association</a>  
      </div>

      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      @if(Illuminate\Support\Facades\Auth::check())
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="/logout">Sign Out</a>
          </li>
        </ul>
      @else 
        <!-- make this unordered list something else, so that the two elements can sit side by side -->
        <a class="nav-item nav-link text-nowrap" href="/login">Login</a>
        <a class="nav-item nav-link text-nowrap" href="/register">Sign Up</a>
      @endif
    </nav>
@endcontent