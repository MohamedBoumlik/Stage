@extends('layouts.dash')
@section('Side')
    <div class="list-group list-group-flush my-3">
        <a href="/admin" class="list-group-item list-group-item-action bg-transparent second-text "><i
                class="fas fa-tachometer-alt me-2"></i>Home</a>
        <a href="/admin/commandes" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                class="fas fa-shopping-cart me-2"></i>Commandes</a>
        <a href="/admin/produit" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                class="fas fa-fire-extinguisher me-2"></i>Produits</a>
        <a href="/admin/contact" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-comment-dots me-2"></i>Messages</a>
        <a href="/admin/services" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-concierge-bell me-2"></i>Services</a>
        <a href="/categorie" class="list-group-item list-group-item-action bg-transparent second-text fw-bold actives"><i
            class="fas fa-layer-group me-2"></i>Catégories</a>
    </div>
@endsection

@section('dashcontent')

    <div id="editEmployeeModal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{url('/categorie/update/'.$cat->id)}}" method="POST" enctype= multipart/form-data>
                    @csrf
                    @method('PUT')
                      <div class="modal-header">						
                          <h4 class="modal-title">Modifier la catégorie</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
  
                      <div class="modal-body">					
                          <div class="form-group">
                              <label>Nom</label>
                              <input type="text" class="form-control" name='type' placeholder="Entrez le nom" value="{{$cat->type}}" required >
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
