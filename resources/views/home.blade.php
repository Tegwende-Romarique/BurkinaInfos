@extends('layouts/app')
@extends('layouts/admin/admin')
@section('content')
  <body>
  	<div id="page-container" class="main">
	  	<div class=" sidebar left">
	  		
	  		<div class="side-bar-icons">
              <ul class="list-sidebar bg-defoult">

              <li> <a href="#"><i class="fa fa-home"></i> <span class="nav-label">Accueil</span></a></li>
              
              <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Dashboards </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dashboard">
                <li class="active"><a href="{{ url('forme-visiteur')}}">Nouveau admin</a></li>
                <li><a href="{{ url('forme-visiteur')}}">Mot de passe</a></li>
              </ul>
            </li>

            
            <li> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-user"></i> <span class="nav-label">Visiteurs</span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="sub-menu collapse" id="products">
              <li><a href="{{ url('forme-visiteur')}}">Nouveau visiteur</a></li>
              <li><a href="{{ url('Visiteur/liste')}}">Liste des Visiteurs</a></li>
            </ul>
          </li>


          <li> <a href="{{ url('forme-visiteur')}}"><i class="fa fa-envelope"></i> <span class="nav-label">Email</span></a> </li>

          <li> <a href="#" data-toggle="collapse" data-target="#tables" class="collapsed active" ><i class="fa fa-tags"></i> <span class="nav-label">Rubriques</span><span class="fa fa-chevron-left pull-right"></span></a>
          <ul  class="sub-menu collapse" id="tables" >
            <li><a href="{{ url('Rubrique/forme')}}">Nouvelle Rubrique</a></li>
            <li><a href="{{ url('Rubrique/liste')}}">Liste des Rubriques</a></li>
          </ul>
        </li>

        <li> <a href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active" ><i class="fa fa-archive"></i> <span class="nav-label">Article</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="e-commerce" >
          <li><a href="{{ url('forme-Article')}}">Nouveau article</a></li>
          <li><a href="{{ url('Article/liste')}}">Liste des Articles</a></li>
        </ul>
      </li>

      <li> <a href="{{ url('forme-visiteur')}}"><i class="fa fa-sign-out"></i> <span class="nav-label">Deconnexion</span></a> </li>
    </ul>
    </div>
	</div>
</div>
<div class="main-body-content w-100 ets-pt">
 @yield('contenu') 
</div>
</div>
  </body>
@endsection


