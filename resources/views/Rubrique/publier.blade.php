@extends('home')
 @section('contenu') 
 <div class="container">
 <h1 class="armelle">Liste des rubriques</h1>
    <div class="row col-md-12 col-md-offset-2 custyle">
    <table class="table table-striped custab ">
    <thead>
    <a href="{{url('')}}" class="liens"><button type="button" class="btn btn-success btn-xl btn3d btn-xs">
      <i class="fa fa-plus-circle"></i> Nouvelle Rubrique</button></a> 
        <tr>
            <!-- <th>ID</th> -->
            <th>Rubriques</th>
            <!-- <th class="text-center">Option</th> -->
        </tr>
    </thead>
            <tr>
                <!-- <td>{{$rubrique->id}}</td> -->
                <td>{{$rubrique->categorie}}</td>
               
            </tr>
            
    </table>
    </div>
</div>
 @endsection