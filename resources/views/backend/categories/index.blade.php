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

    <div class="container-xl">

        @if (session("addCat"))
            <div class="alert alert-success">{{session("addCat")}}</div>
        @endif

        @if (session("editCat"))
            <div class="alert alert-success">{{session("editCat")}}</div>
        @endif

        @if (session("dltCat"))
            <div class="alert alert-success">{{session("dltCat")}}</div>
        @endif

        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Gestion des <b>Categories</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter une categorie</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($cat as $item)
                                
                                <tr>
                                <td>{{$item->type}}</td>
                                <td>
                                    <a href="{{url('/categorie/edit/'.$item->id)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <form action="{{url('categorie/delete/'.$item->id)}}" method="POST"> @csrf @method('DELETE') <button class="btn bnt-outline-danger" data-toggle="modal"><i class="material-icons" style="color: red" title="Delete">&#xE872;</i></button> </form>
                                </td>
                                </tr>

                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="d-flex justify-content-center">
                <span class="mt-4">{{$cat->links("pagination::bootstrap-4")}}</span>
            </div>
        </div>        
    </div>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{url('/categorie/store')}}" method="POST" enctype= multipart/form-data>
                  @csrf

                    <div class="modal-header">						
                        <h4 class="modal-title">Ajouté une categorie</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name='type' placeholder="Entrez le nom" required >
                        </div>					
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-outline-danger" data-dismiss="modal" value="Annuler">
                        <input type="submit" class="btn btn-outline-dark" value="Ajouter">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
