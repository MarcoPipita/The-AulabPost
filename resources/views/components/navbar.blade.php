   
   <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route ('welcome')}}">
        {{-- <img class="img"   src="/logo/post logo.jpg" alt=""> --}}
        <img class="img" src="/logo/aulab post home.jpg" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation bg-black">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a  class="nav-link fs-4 navText ms-5" aria-current="page" href="{{route ('article.index')}}">Index</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 text  ms-5 navText" aria-current="page" href="{{route ('article.create')}}">Crea il tuo articolo</a>
          </li>
          @auth
          @if(Auth::user()->is_admin)
          <li><a class="nav-link fs-4 text  ms-5 navText" aria-current="page" href="{{route ('admin.dashboard')}}">Dashboard Admin</a></li>
          @endif 
          @if(Auth::user()->is_revisor)
          <li><a class="nav-link fs-4 text ms-5 navText" aria-current="page" href="{{route ('revisor.dashboard')}}">Dashboard del Revisore</a></li>
          @endif 
          @if(Auth::user()->is_writer)
          <li><a class="nav-link fs-4 text ms-5 navText" aria-current="page" href="{{route ('writer.dashboard')}}">Dashboard del Redattore</a></li>
          @endif 
          @endauth
          <li class="nav-item">
            <a class="nav-link fs-4 text ms-5 navText" aria-current="page" href="{{route ('careers')}}">Candidati!</a>
          </li>
        </ul>  
        <ul class="navbar-nav  mb-2 mb-lg-0">
          @guest
          <li class="nav-item">
            <a class="nav-link fs-4 text  ms-4 navText" aria-current="page" href="{{route ('login')}}">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-4 text  ms-4 navText" aria-current="page" href="{{route ('register')}}">Registrati</a>
          </li>    
          @else   {{-- SE L'UTENTE E' OSPITE DEVE VEDERE LOGIN E REGISTRATI, DIVERSAMENTE IL BENVENUTO --}}           
              <p class="nav-link fs-4 text navText ms-4 test">Benvenuto {{Auth::user()->name}}</p>
              {{-- <a class="nav-link fs-4 text  fw-bold ms-4 text-success" aria-current="page" href="#">Benvenuto {{Auth::user()->name}}</a> --}}
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="btnlogout btn btn-link  mx-5 fs-4 navText test">Logout</button>
              </form>                  
          @endguest
            {{-- search --}}
            <li class="mx-5">
              <form class="d-flex" method="GET" action="{{route('article.search')}}">
                @csrf   
                <div class="inputSerach">
                <input class="form-control me-2" type="search" name="query" placeholder="Search..." aria-label="Search">
                <button class="btn btn-link " type="submit"><i class="fa-solid fa-magnifying-glass fa-2x" style="color: #464747;"></i></button>
                </div>
              </form>
            </li>          
        </ul>
      </div>
    </div>
  </nav>
  