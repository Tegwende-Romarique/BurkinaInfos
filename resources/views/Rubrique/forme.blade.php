@extends('home')
@section('contenu') 

    <div class="container">
    @if(session()->has('message'));
    <div class="alert alert-success" role="alert">
     {{ session()->get('message') }}
    </div>
    @endif
    <h1 class="armelle"> ENREGISTREMENt d'UNE RUBRIQUE</h1>
    <a href="{{url('Rubrique/liste')}}" class="liens">
      <button type="button" class="btn btn-success btn-xl btn3d btn-xs">
      <i class="fa fa-cloud"></i>Voir les Rubriques
      </button>
    </a> 
        <div class="" style="font-weight:800;">
          
@if(!session()->has('message'))
<form action="{{url('Rubrique/forme')}}" method="post">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-11">
                <label for="inputEmail4">Rubrique</label>
                  <input type="text"name="categorie" class="form-control" required>
              </div>

                      

            </div> 
            <button type="submit" class="btn btn-primary btn-sm btn3d"><i class="fa fa-cloud"></i>Valider</button>
            <button type="reset" class="btn btn-danger btn-sm btn3d"><i class="fa fa-ok"></i>Annuler</button>
        
        </div>
            </form>
@endif
           
    </div> <br> <br>
  </div>
@endsection
              
            
         