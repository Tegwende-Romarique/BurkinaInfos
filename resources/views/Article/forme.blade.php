
 @extends('home')
 @section('contenu')
       <div class="container">
          <div class="container" style="font-weight:800;">
     <a href="{{url('Article/liste')}}" class="liens">
      <button type="button" class="btn btn-success btn-xl btn3d btn-xs">
      <i class="fa fa-cloud"></i>Voir les Articles
      </button>
    </a> 
    <h1 class="armelle"> ENREGISTREMENt d'UN ARTICLE</h1>    
     <form action="{{url('Article/forme')}}" method="post" enctype="multipart/form-data">
     @csrf
                    <div class="form-row">
                        <div class="form-group col-md-11">
                        <label for="inputEmail4">Rubriques</label>
                        <select class="form-control" name="rubrique_id"  >
                            @foreach($rubrique as $rubriques)
                            <option value="{{$rubriques->id}}">{{$rubriques->categorie}}</option>
                            @endforeach
                          </select> 
                        </div>

                    
                        <div class="form-group col-md-11">
                          <label for="inputEmail4">Titre</label>
                          <input type="text"name="titre" class="form-control" required>
                        </div>
                    
                        <div class="form-group col-md-11">
                          <label for="inputEmail4">Libellé</label>
                          <input type="text"name="libelle" class="form-control" required>
                        </div>
                    
                        <div class="form-group col-md-11">
                          <label for="inputEmail4">Date</label>
                          <input type="date"name="date" class="form-control" required>
                        </div>
        
                        <div class="form-group col-md-11">
                          <label for="photo">Photo</label>
                          <input type="file"name="photo" class="form-control" required>
                        </div>

                        <div class="form-group col-md-11">
                          <label for="photo">Contenu</label>
                          <textarea type="text"name="contenu" class="form-control" required cols="30" rows="10"></textarea>
                        </div>

                    <div> 
                    <button type="submit" class="btn btn-primary btn-sm btn3d"><i class="fa fa-cloud"></i>Valider</button>
                    <button type="reset" class="btn btn-danger btn-sm btn3d"><i class="fa fa-ok"></i>Annuler</button>
                  </div>
                </form> 
              </div> <br> <br>
@endsection
              
            
         