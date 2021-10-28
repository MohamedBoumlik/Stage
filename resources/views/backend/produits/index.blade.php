@extends('layouts.dash')
@section('Side')
        <div class="list-group list-group-flush my-3">
            <a href="/admin" class="list-group-item list-group-item-action bg-transparent second-text "><i
                    class="fas fa-tachometer-alt me-2"></i>Home</a>
            <a href="/admin/commandes" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                    class="fas fa-shopping-cart me-2"></i>Commandes</a>
            <a href="/admin/produit" class="list-group-item list-group-item-action bg-transparent second-text fw-bold actives"><i
                    class="fas fa-gift me-2"></i>Produits</a>
            <a href="/admin/contact" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-comment-dots me-2"></i>Messages</a>
            <a href="/admin/services" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-map-marker-alt me-2"></i>Services</a>
        </div>
@endsection

@section('dashcontent')
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Gestion des <b>Commande</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Thomas Hardy</td>
                            <td>thomashardy@mail.com</td>
                            <td>89 Chiaroscuro Rd, Portland, USA</td>
                            <td>(171) 555-2222</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>        
    </div>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{url('/admin/produit/store')}}" method="POST" enctype= multipart/form-data>
                  @csrf

                    <div class="modal-header">						
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" name='name' required >
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name='pic' required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name='description' required></textarea>
                        </div>
                        <div class="form-group">
                                <select class="form-select"  name="categorie_id" required>
                                        <option selected></option>
                                        @foreach ($types as $type)
                                                <option value='{{$type->id}}'>{{$type->type}}</option>
                                        @endforeach
                                </select>
                        </div>					
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
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
