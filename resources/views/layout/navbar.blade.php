<header class="header" id="header">
  <nav class="nav container">
    <div class="nav__logo"><img src="{{ asset('images/logo.png') }}" alt="Logo tamalou"> </div>

    <div class="nav__flex">
      <div class="nav__menu mr-5" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="{{ route('accueil') }}" class="nav__link active-link">
              <i class='bx bx-home-alt nav__icon'></i>
              <span class="nav__name">Dashboard</span>
            </a>
          </li>
          <li class="nav__item">
            <a href="{{ route('allUsers') }}" class="nav__link">
              <i class='bx bx-user nav__icon'></i>
              <span class="nav__name">Utilisateur</span>
            </a>
          </li>
          <li class="nav__item">
            <a href="{{ route('allUsers') }}" class="nav__link">
              <i class='bx bx-home-alt nav__icon'></i>
              <span class="nav__name">Dashboard</span>
            </a>
          </li>
        </ul>
      </div>
      @if (Auth::user())

        <div class="sm:ml-6 mr-4">
          <x-dropdown align="right" width="48">
            <x-slot name="trigger">
              <button
                class="flex items-center font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">

                <div>{{ Auth::user()->name }}</div>
                <div class="ml-1">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
                  </svg>
                </div>
              </button>
            </x-slot>

            <x-slot name="content">
              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                          this.closest('form').submit();">
                  Déconnexion
                </x-dropdown-link>
              </form>
            </x-slot>
          </x-dropdown>
        </div>
      @endif

    </div>
  </nav>
</header>
