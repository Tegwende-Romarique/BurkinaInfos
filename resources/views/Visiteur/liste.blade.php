
 @extends('home')
 @section('contenu')

 <h1>Liste des visiteurs</h1>

  <a href="{{url('forme-visiteur')}}" class=""><button type="button" class="btn btn-success btn-xl btn3d btn-xs"><i class="fa fa-plus-circle"></i> Nouveau visiteur</button></a> 
<div class="container">

    <div class="row le-cadre">
    @foreach($visiteur as $visit)
      <div class="card la-carte col-md-3"style="left:15%;">
        <div class="icone"><i class="fa fa-users fa-5x"></i></div>
        <div class="card-body corp-de-la-carte">
        
          <h6 class="card-title">Nom: {{$visit->nom}}</h6>
          <p class="card-text">Email:  {{$visit->email}}</p>
          
        </div>
        <div class="">
          <button type="button" class="btn btn-danger bouttons"><i class="fa fa-trash"></i> <a href="{{url('supprimer-visiteur?id='.$visit->id)}}" class="card-link liens">Supp</a></button>
          <button type="button" class="btn btn-success bouttons" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-envelope"></i> <a href="#" class="card-link liens">Email</a></button>
        </div>
        
      </div>
      @endforeach
    </div>



    <!-- Le modal pour le formulaire d'envoie de mail-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header entete-du-modal">
        <h5 class="modal-title le-titre-du-modale" id="exampleModalLabel">Envoyer un message à</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('send-mailid')}}" method="post">
     @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" >Destinataires:</label>
            <input type="text" name="destinataire" class="form-control background-des-champs" id="recipient-name" placeholder="exemple@gmail.com" required>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Objet:</label>
            <input type="text" name="objet" class="form-control background-des-champs" id="recipient-name" placeholder="objet..." required>
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control background-des-champs" name="message" id="message-text" placeholder="votre message..." required></textarea>
          </div>


      </div>
      <div class="modal-footer entete-du-modal">
        <button type="reset" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        <a href="{{url('forme-mail')}}" class=""> <button type="submit" class="btn btn-primary">Envoyer</button></a>
      </div>
     </form>
     </div>
   </div>
</div>
</div>


<div class="row d-flex justify-content-center">
{{$visiteur->links()}}
</div>
 @endsection