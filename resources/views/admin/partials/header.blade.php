<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex  justify-content-between ">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex  justify-content-between " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('admin.home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" target="_blank" href="{{route('home')}}">vai al sito</a>
              </li>
              <li>
                <p> {{Auth::user()->name}} </p>
              </li>
              <li class="nav-item">
                <form action="{{route('logout')}} " method="POST">
                    @csrf
                    <button type="submit" class=" btn  btn-danger"></button>
                    <a class="nav-link" aria-disabled="true">logout</a>
                </form>
              </li>

            </ul>
          </div>
        </div>
      </nav>
</header>
