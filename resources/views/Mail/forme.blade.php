
 @extends('home')
 @section('contenu')
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
        <form>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Destinataires:</label>
            <input type="text" class="form-control background-des-champs" id="recipient-name" placeholder="exemple@gmail.com">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Objet:</label>
            <input type="text" class="form-control background-des-champs" id="recipient-name" placeholder="objet...">
          </div>

          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control background-des-champs" id="message-text" placeholder="votre message..."></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer entete-du-modal">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Envoyer</button>
      </div>
     </div>
   </div>
</div>
@endsection