<nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item d-block d-xl-none">
            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <form class="d-flex" role="search" action="{{ url('/search-user') }}" method="post">
                    @csrf
                    <input class="form-control me-2 col-4" type="search" placeholder="Search" name="search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </a>
        </li>
    </ul>
    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

            <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{ URL::asset('/assets/images/profile/user-1.jpg')}}" alt="" width="35" height="35"
                        class="rounded-circle">
                </a>

            </li>
        </ul>
    </div>
</nav>