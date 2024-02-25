<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Catagorys</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('/catagory/create') }}">
              <i class="bi bi-circle"></i><span>Catagory create</span>
            </a>
          </li>
          <li>
            <a href="{{ url('/catagory/list') }}">
              <i class="bi bi-circle"></i><span>Catagory list</span>
            </a>
          </li>
          {{--  <li>
            <a href="{{ url('/')  }}">
              <i class="bi bi-circle"></i><span>Content-Data show</span>
            </a>
          </li>  --}}

            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Sub-catagory</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('subcatagory/create') }}">
              <i class="bi bi-circle"></i><span>Subcatagory-create</span>
            </a>
          </li>
          <li>
            <a href="{{ url('subcatagory/list') }}">
              <i class="bi bi-circle"></i><span>Subcatagory-list</span>
            </a>
          </li>
          <li>
          {{--  <li>
            <a href="{{ url('/') }}">
              <i class="bi bi-circle"></i><span>Setting-view</span>
            </a>
          </li>  --}}
          <li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Procouct</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('prodoct/create') }}">
              <i class="bi bi-circle"></i><span>Prodouct-create</span>
            </a>
          </li>
          <li>
            <a href="{{ url('prodoct/list') }}">
              <i class="bi bi-circle"></i><span>Prodouct-list</span>
            </a>
          </li>
          {{--  <li>
            <a href="{{ url('/') }}">
              <i class="bi bi-circle"></i><span>Catagory-view</span>
            </a>
          </li>  --}}
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Advicement</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('heading/create') }}">
              <i class="bi bi-circle"></i><span>Advice-create</span>
            </a>
          </li>
          <li>
            <a href="{{ url('heading/list') }}">
              <i class="bi bi-circle"></i><span>Advice-list</span>
            </a>
          </li>

        </ul>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Advicement</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('heading/create') }}">
              <i class="bi bi-circle"></i><span>Advice-create</span>
            </a>
          </li>
          <li>
            <a href="{{ url('heading/list') }}">
              <i class="bi bi-circle"></i><span>Advice-list</span>
            </a>
          </li>

        </ul>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-gem"></i><span>Discount</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{ url('discount/create') }}">
                  <i class="bi bi-circle"></i><span>Discount-create</span>
                </a>
              </li>
              <li>
                <a href="{{ url('discount/list') }}">
                  <i class="bi bi-circle"></i><span>Discount-list</span>
                </a>
              </li>

            </ul>
          </li>

  </aside><!-- End Sidebar-->

                </div>

              </div>
            </div><!-- End Reports -->



  </main><!-- End #main -->
