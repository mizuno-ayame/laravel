   <!-- Authentication Links -->
    @unless (Auth::guard('user')->check())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('user.register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('user.logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endunless

