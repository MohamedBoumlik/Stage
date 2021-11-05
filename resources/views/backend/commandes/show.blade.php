@extends('layouts.dash')
@section('Side')
    <div class="list-group list-group-flush my-3">
        <a href="/admin" class="list-group-item list-group-item-action bg-transparent second-text "><i
                class="fas fa-tachometer-alt me-2"></i>Home</a>
        <a href="/admin/commandes" class="list-group-item list-group-item-action bg-transparent second-text fw-bold actives"><i
                class="fas fa-shopping-cart me-2"></i>Commandes</a>
        <a href="/admin/produit" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-fire-extinguisher me-2"></i>Produits</a>
        <a href="/admin/contact" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-comment-dots me-2"></i>Messages</a>
        <a href="/admin/services" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
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
                    <h4 class="modal-title text-center m-auto">Commande : {{$cmd->id}}</h4>
                </div>
                
                <div class="modal-body text-center">
                    <h3 class="d-flex">Nom de client :</h3><br>
                    <div style="word-wrap: break-word; padding: 20px">{{$cmd->client_name}}</div>
                </div>

                <div class="modal-body text-center">
                    <h3 class="d-flex">Email de client :</h3><br>
                    <div style="word-wrap: break-word; padding: 20px">{{$cmd->client_email}}</div>
                </div> 

                <div class="modal-body text-center">
                    <h3 class="d-flex">tel de client :</h3><br>
                    <div style="word-wrap: break-word; padding: 20px">{{$cmd->client_tel}}</div>
                </div> 

                <div class="modal-body text-center">
                    <h3 class="d-flex">Produits :</h3><br>
                    <div style="word-wrap: break-word; padding: 20px">{{$cmd->produit->name}}</div>
                </div> 

                <div class="modal-body text-center">
                    <h3 class="d-flex">Quantite:</h3><br>
                    <div style="word-wrap: break-word; padding: 20px">{{$cmd->quantite}}</div>
                </div> 

            </div>
        </div>
    </div>


@endsection
