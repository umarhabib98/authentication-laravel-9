<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">AusWine</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
            @auth
            @if(auth()->user()->role=="staff")
            <li class="nav-item">
                <a class="nav-link" href="/creat/wine">Add wines</a>
            </li>
            @endif
            @endauth
        <li class="nav-item">
          <a class="nav-link" href="/wines-list">Wines List</a>
            </li>
            @guest
            <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @else
           
            <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            </li>
            @endguest
        </ul>
    </nav>