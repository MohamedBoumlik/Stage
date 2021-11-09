@extends('layouts.dash')
@section('Side')
    <div class="list-group list-group-flush my-3">
        <a href="/admin" class="list-group-item list-group-item-action bg-transparent second-text actives"><i
                class="fas fa-tachometer-alt me-2"></i>Home</a>
        <a href="/admin/commandes" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                class="fas fa-shopping-cart me-2"></i>Commandes</a>
        <a href="/admin/produit" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
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
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">{{ $countProduit}}</h3>
                        <p class="fs-5">Produits</p>
                    </div>
                    <i class="fas fa-fire-extinguisher fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">{{ $countCmd }}</h3>
                        <p class="fs-5">Commandes</p>
                    </div>
                    <i
                        class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">{{$countServ}}</h3>
                        <p class="fs-5">Services</p>
                    </div>
                    <i class="fas fa-concierge-bell fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">{{ $countContact }}<h3>
                        <p class="fs-5">Message</p>
                    </div>
                    <i class="fas fa-comment-dots fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Gestion des <b>Commandes</b></h2>
                                </div>
                                
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nom de client</th>
                                    <th>Email de client</th>
                                    <th>tel de client</th>
                                    <th>Produits</th>
                                    <th>Quantite</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
        
                                @foreach ($cmd as $item)
                                        
                                        <tr>
                                            <td  style="max-width: 40px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">{{$item->client_name}}</td>
                                            <td>{{$item->client_email}}</td>
                                            <td>{{$item->client_tel}}</td>
                                            <td  style="max-width: 40px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">{{$item->produit()->name}}</td>
                                            <td>{{$item->quantite}}</td>
                                            <td>
                                                <p><a href="{{url('/admin/commandes/show/'.$item->id)}}" title="Suite"><i class="fas fa-ellipsis-h"></i></a></p>
                                                <form action="{{url('/admin/commandes/delete/'.$item->id)}}" method="POST" title="Supprimer"> @csrf @method('DELETE') <button class="btn bnt-outline-danger" data-toggle="modal"><i class="material-icons" style="color: red" title="Delete">&#xE872;</i></button> </form>
                                            </td>
                                        </tr>
        
                                @endforeach
        
                            </tbody>
                        </table>
        
                    </div>

                    <div class="d-flex justify-content-center">
                        <span class="mt-4">{{$cmd->links("pagination::bootstrap-4")}}</span>
                    </div>
                </div>        
            </div>
    </div>

@endsection
