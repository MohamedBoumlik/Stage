@extends('layouts.dash')
@section('Side')
    <div class="list-group list-group-flush my-3">
        <a href="/admin" class="list-group-item list-group-item-action bg-transparent second-text "><i
                class="fas fa-tachometer-alt me-2"></i>Home</a>
        <a href="/admin/commandes" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                class="fas fa-shopping-cart me-2"></i>Commandes</a>
        <a href="/admin/produit" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-fire-extinguisher me-2"></i>Produits</a>
        <a href="/admin/contact" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-comment-dots me-2"></i>Messages</a>
        <a href="/admin/services" class="list-group-item list-group-item-action bg-transparent second-text fw-bold actives"><i
                class="fas fa-concierge-bell me-2"></i>Services</a>
        <a href="/categorie" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-layer-group me-2"></i>Catégories</a>
    </div>
@endsection

@section('dashcontent')

    <div id="editEmployeeModal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{url('/admin/services/update/'.$serv ->id)}}" method="POST" enctype= multipart/form-data>
                    @csrf
                    @method('PUT')
                      <div class="modal-header">						
                          <h4 class="modal-title">Modifier service</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
  
                      <div class="modal-body">					
                          <div class="form-group">
                              <label>Nom</label>
                              <input type="text" class="form-control" name='titre' placeholder="Entrez le nom" value="{{$serv->titre}}" required >
                          </div>
                          <div class="form-group">
                              <label>La Photo De Service</label>
                              <div class="text-center">
                                  <img src="{{ asset($serv->pic) }}" height="140px" width="140px" class="mb-1"> 
                                  <input type="file" class="form-control" name='pic' placeholder="Sélectionnez une image" value="{{$serv->pic}}" required> 
                              </div>
                          </div>
                          <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" name='description' placeholder="Entrez la decsription" required>{{$serv->description}}</textarea>
                          </div>
                          					
                      </div>
                      <div class="modal-footer">
                          <input type="button" class="btn btn-outline-danger" data-dismiss="modal" value="Annuler">
                          <input type="submit" class="btn btn-outline-dark" value="Modifier">
                      </div>
                  </form>
            </div>
        </div>
    </div>

@endsection
