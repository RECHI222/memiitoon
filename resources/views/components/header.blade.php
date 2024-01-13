<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yuji+Mai&display=swap" rel="stylesheet">



<nav class="navbar navbar-expand-sm" style="background-color: #BA64E8;">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-family: 'Yuji Mai', serif;">MemiiToOn</a>


    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('titles.index') }}">Title</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('vocabularies.index') }}">Vocab</a>
      </li>

      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
            ログアウト
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>

        </div>
      </li>
    </ul>

</nav>