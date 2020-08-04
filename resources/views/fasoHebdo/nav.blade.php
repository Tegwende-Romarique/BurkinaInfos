


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        @foreach($rubrique as $rubriqu)
        <a class="nav-link" href="#" style="display: inline-flex;">{{$rubriqu->categorie}}<span class="sr-only"></span></a>
        @endforeach
      </li>

    </ul>
    <span class="navbar-text">

     <button class="btn btn-primary">
     <i class="fa fa-sign-in"></i>
     <a class="nav-link" href="{{ route('login') }}">
      <span class="nav-label"> Se connecter</span></a></button>


  </span>
  </div>
</nav>
<br>
