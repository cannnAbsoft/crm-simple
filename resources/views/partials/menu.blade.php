<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        {{ config('app.name', 'Laravel') }}
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
                            <li class="nav-item"><a class="nav-link" href="index.html">
                                    <svg class="nav-icon">
                                    </svg> Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('clients.index')  }}">
                                    <svg class="nav-icon">
                                    </svg> Clients</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <svg class="nav-icon">
                                    </svg> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            </ul>
</div>
