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
            <a href="/admin/services" class="list-group-item list-group-item-action bg-transparent second-text fw-bold actives"><i
                    class="fas fa-concierge-bell me-2"></i>Services</a>
            <a href="/categorie" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-layer-group me-2"></i>Catégories</a>
        </div>
@endsection

@section('dashcontent')
    <div class="container-xl">

        @if (session("addServ"))
            <div class="alert alert-success">{{session("addServ")}}</div>
        @endif

        @if (session("editServ"))
            <div class="alert alert-success">{{session("editServ")}}</div>
        @endif

        @if (session("dltServ"))
            <div class="alert alert-danger">{{session("dltServ")}}</div>
        @endif

        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Gestion des <b>Services</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Ajouter une service</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Image de service</th>
                            <th>Titre de service</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($serv as $item)
                                
                                <tr>
                                    <td><img src="{{ asset($item->pic) }}" height="100px" width="200px"></td>
                                    <td>{{$item->titre}}</td>
                                    <td style="max-width: 40px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">{{$item->description}}</td>
                                    <td>
                                        <p><a href="{{url('/admin/services/show/'.$item->id)}}" title="Suite"><i class="fas fa-ellipsis-h"></i></a></p>
                                        <p><a href="{{url('/admin/services/edit/'.$item->id)}}" class="edit" title="Éditer"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></p>
                                        <form action="{{url('/admin/services/delete/'.$item->id)}}" method="POST" title="Supprimer"> @csrf @method('DELETE') <button class="btn bnt-outline-danger" data-toggle="modal"><i class="material-icons" style="color: red" title="Delete">&#xE872;</i></button> </form>
                                    </td>
                                </tr>

                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="d-flex justify-content-center">
                <span class="mt-4">{{$serv->links("pagination::bootstrap-4")}}</span>
            </div>
        </div>        
    </div>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{url('/admin/services/store')}}" method="POST" enctype= multipart/form-data>
                  @csrf

                    <div class="modal-header">						
                        <h4 class="modal-title">Ajouté un produit</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" class="form-control" name='titre' placeholder="Entrez le nom" required >
                        </div>
                        <div class="form-group">
                            <label>La Photo De Service</label>
                            <input type="file" class="form-control" name='pic' placeholder="Sélectionnez une image" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name='description' placeholder="Entrez la decsription" required></textarea>
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


{{--     
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">						
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" required>
                        </div>					
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
  
@endsection
