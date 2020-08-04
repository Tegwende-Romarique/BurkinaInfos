
 @extends('home')
 @section('contenu')

          <div class="container" style="font-weight:800;">
          @if(session()->has('message'));
    <div class="alert alert-success" role="alert">
     {{ session()->get('message') }}
    </div>
    @endif
     <h1 class="armelle"> ENREGISTREMENt d'un visiteur</h1>
     <a href="{{url('Visiteur/liste')}}" class="liens">
      <button type="button" class="btn btn-success btn-xl btn3d btn-xs">
      <i class="fa fa-cloud"></i>Voir les Visiteurs
      </button>
    </a>
    @if(!session()->has('message'))
     <form action="{{url('Visiteur/forme')}}" method="post">
     @csrf
                   <!--  <div class="form-row">
                        <div class="form-group col-md-11">
                          <label for="inputEmail4">Nom</label>
                          <input type="text"name="nom" class="form-control" required>
                        </div> -->

                        <!-- <div class="form-group col-md-11">
                          <label for="inputEmail4">Prénom</label>
                          <input type="text"name="prenom" class="form-control" required>
                        </div> -->

                        <div class="form-group col-md-11">
                          <label for="inputEmail4">Email</label>
                          <input type="email"name="email" class="form-control" required>
                        </div>

                        <!-- <div class="form-group col-md-11">
                          <label for="inputEmail4">Mot de passe</label>
                          <input type="password"name="mot_de_passe" class="form-control" required>
                        </div> -->

                    <div>

                    <button type="submit" class="btn btn-primary btn-sm btn3d"><span class="glyphicon glyphicon-cloud"></span>Valider</button>

                    <button type="reset" class="btn btn-danger btn-sm btn3d"><span class="glyphicon glyphicon-ok"></span>Annuler</button>
                </form>

                @endif
              </div> <br> <br>
@endsection


