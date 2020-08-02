@extends('home')
 @section('contenu') 

 <div class="container">
 <h1 class="armelle">Liste des rubriques</h1>
    <div class="row col-md-12 col-md-offset-2 custyle">
    <table class="table table-striped custab ">
    <thead>
    <a href="{{url('Rubrique/forme')}}" class="liens"><button type="button" class="btn btn-success btn-xl btn3d btn-xs">
      <i class="fa fa-plus-circle"></i> Nouvelle Rubrique</button></a> 
        <tr>
            <th>ID</th>
            <th>Rubriques</th>
            <th class="text-center">Option</th>
        </tr>
    </thead>
           @foreach($rubrique as $rubriqu)
            <tr>
                <td>{{$rubriqu->id}}</td>
                <td>{{$rubriqu->categorie}}</td>
                <td class="text-center"><a class='btn btn-primary btn-xs' href="{{ url('modifier-rubrique?id='.$rubriqu->id)}}"><span class="fa fa-edit"></span> Modifier</a></td>
                <td class="text-center"><a class='btn btn-warning btn-xs' href="{{ url('publier-rubrique?id='.$rubriqu->id)}}"><i class="fa fa-publish"></i> </span> Publier</a></td>
                <td class="text-center"> <a href="{{ url('Supprimer-rubrique?id='.$rubriqu->id)}}" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a></td>
            </tr>
            @endforeach
    </table>
    </div>
</div>

<div class="row d-flex justify-content-center">
{{$rubrique->links()}}
</div>
@endsection