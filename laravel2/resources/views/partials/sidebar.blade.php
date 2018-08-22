@content
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">

              @if(Illuminate\Support\Facades\Auth::check())
                <li class="nav-item">
                  <a class="nav-link active" href="/dashboard" id = "side_dashboard">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                  </a>
                </li>
              @endif
                
              <li class="nav-item">
                <a class="nav-link" href="/persons" id = "side_persons">
                  <span data-feather="users"></span>
                  Persons
                </a> 
              </li>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="/results" id = "side_results">
                  <span data-feather="file"></span>
                  Results
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Records
                </a>
              </li>

            </ul>


  


            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Recent & archives</span>
              <a class="d-flex align-items-center text-muted" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <div class="collapse" id="collapseExample">
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current year
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="archive"></span>
                  Archives
                </a>
              </li>
            </ul>
            </div>


          </div>
        </nav>
@endcontent