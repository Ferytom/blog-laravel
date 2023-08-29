<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
    aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">Ferytom's Blog</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'text-primary' : 'text-dark' }}"
            aria-current="page" href="/dashboard">
            <svg class="bi" fill="currentColor">
              <use xlink:href="#house-fill" />
            </svg>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts*') ? 'text-primary' : 'text-dark' }}"
            href="/dashboard/posts">
            <svg class="bi" fill="currentColor">
              <use xlink:href="#file-earmark" />
            </svg>
            My Posts
          </a>
        </li>
      </ul>

      @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'text-primary' : 'text-dark' }}"
              href="/dashboard/categories">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-columns-gap" viewBox="0 0 16 16">
                <path
                  d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
              </svg>
              Post Categories
            </a>
          </li>
        </ul>
      @endcan

      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="nav-link d-flex align-items-center gap-2 text-dark">
              <svg class="bi" fill="currentColor">
                <use xlink:href="#door-closed" />
              </svg>
              Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</div>
