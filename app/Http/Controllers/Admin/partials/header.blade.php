<header>
    <!-- As a link -->
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <li>
            <a class="navbar-brand" href="{{route('admin.home')}}">vai al sito</a>

        </li>
    </div>
  </nav>

  <!-- As a heading -->
  <nav class="navbar bg-body-tertiary">
    <li>
        {{ Auth::user()->name}}
    </li>
    <div class="container-fluid">

        <li>
            <a class="navbar-brand" target="_blank"  href="{{route('home')}}">logout</a>

        </li>
      </div>
  </nav>
</header>
