<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">C U D</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      @guest

      @else
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('person') }}">Persona <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('visit') }}">Visita <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <div class="dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </div>

        </li>

      </ul>
      @endguest  

    </div>
  </div>
</nav>