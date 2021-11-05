@extends('layouts.dash')
@section('Side')
        <div class="list-group list-group-flush my-3">
            <a href="/admin" class="list-group-item list-group-item-action bg-transparent second-text "><i
                    class="fas fa-tachometer-alt me-2"></i>Home</a>
            <a href="/admin/commandes" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                    class="fas fa-shopping-cart me-2"></i>Commandes</a>
            <a href="/admin/produit" class="list-group-item list-group-item-action bg-transparent second-text fw-bold actives"><i
                    class="fas fa-fire-extinguisher me-2"></i>Produits</a>
            <a href="/admin/contact" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-comment-dots me-2"></i>Messages</a>
            <a href="/admin/services" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-concierge-bell me-2"></i>Services</a>
            <a href="/categorie" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-layer-group me-2"></i>Catégories</a>
        </div>
@endsection

@section('dashcontent')

<div id="editEmployeeModal" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">						
                <h4 class="modal-title text-center m-auto">{{$prod->name}}</h4>
            </div>
            
            <div class="modal-body text-center">
                <img src="{{ asset($prod->pic) }}" height="200px" width="300px" style="border-radius: 7px" >					
            </div> 

            <div class="modal-body text-center m-auto">
                <h3 style="text-decoration: underline" class="d-flex">Prix : {{$prod->prix}} DH</h3>					
            </div>

            <div class="modal-body text-center">
                <h3 class="d-flex">Description :</h3><br>
                <div style="word-wrap: break-word; padding: 20px">{{$prod->description}}</div>
            </div> 

        </div>
    </div>
</div>


@endsection
