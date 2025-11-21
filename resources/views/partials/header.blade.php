<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="/">E-Grocery</a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" type="button"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          @auth
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">@lang('public.home')</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $active === 'item_management' ? 'active' : '' }}" href="/item_management">Item Management</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                    aria-expanded="false">
                    @lang('public.hello, ') {{ auth()->user()->first_name }}
                    </a>
                    <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="/profile">
                        <i class="bi bi-layout-text-sidebar-reverse"></i>
                        @lang('public.my profile')
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('my_cart') }}">
                        <i class="bi bi-layout-text-sidebar-reverse"></i>
                        @lang('public.my cart')
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @if (Auth::user()->role_id == 1)
                        <li>
                            <a class="dropdown-item" href="{{ route('account_maintenance') }}">
                            <i class="bi bi-layout-text-sidebar-reverse"></i>
                                @lang('public.acc_maintain')
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    @endif
                    <li>
                        <form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right"></i>
                            @lang('public.logout')
                        </button>
                        </form>
                    </li>
                    </ul>
                </li>
          @else
            <li class="nav-item">
                <a class="nav-link" href="/register">@lang('public.register')</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login"><i
                  class="bi bi-box-arrow-in-right"></i> @lang('public.login')</a>
            </li>
          @endauth
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
              aria-expanded="false">
              @lang('public.language')
              </a>
              <ul class="dropdown-menu">
              <li>
                  <a class="dropdown-item" href="locale/ina">
                    Indonesia
                  </a>
              </li>
              <li>
                  <hr class="dropdown-divider">
              </li>
              <li>
                  <a class="dropdown-item" href="locale/en">
                    English
                  </a>
              </li>
          </li>
        </ul>

      </div>
    </div>
  </nav>
