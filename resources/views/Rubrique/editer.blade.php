@extends('home')
@section('contenu') 
    <div class="container">
      <div><a href="{{url('Rubrique/liste')}}" class="btn btn-primary btn-xs  boutton-ajouter-produit"><b>+</b>Voir les Rubriques</a></div> 
        <div class="" style="font-weight:800;">
            <h1 class="armelle">Modifier une Rubrique</h1>
          <form action="{{url('rubrique-update')}}" method="post">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-11">
                <label for="inputEmail4">Rubrique</label>
                  <input type="text" hidden  name="id" value="{{$id}}" class="form-control" required>
                  <input type="text"name="categorie" class="form-control" required>
              </div>
            </div> 
                  <button class="btn-btn btn-primary" id="coleur" type="submit">Valider</button>
                  <button class="btn-btn btn-danger" id="coleur" type="submit">Annuler</button>
        </div>
            </form> 
    </div> <br> <br>
  </div>
@endsection
              
            
         