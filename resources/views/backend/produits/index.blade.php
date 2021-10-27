@extends('layouts.app')

@section('content')

    <div>

        <div class="row">

            <div class="col-3">
                <ul>

                    <li>
                        <a class="nav-link  navigation active" aria-current="page" href="{{url('/admin/produit')}}">Produits</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  navigation" aria-current="page" href="{{url('/admin/commande')}}">Commandes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  navigation" aria-current="page" href="{{url('/admin/service')}}">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  navigation" aria-current="page" href="{{url('/admin/contact')}}">Contact</a>
                    </li>

                </ul>
            </div>

            <div class="col-9">

                <div class="curd">
                   <a href="{{url('/admin/produit/create')}}"> <button class="btn btn-outline-primary">Ajouter</button> </a>
                </div>

                <table class="table table-hover table-bordered">

                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Catégorie</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($prod as $produit)   
                            <tr>
                                <td>{{$produit->id}}</td>
                                <td>{{$produit->pic}}</td>
                                <td>{{$produit->name}}</td>
                                <td>{{$produit->description}}</td>
                                <td>{{$produit->categorie->type}}</td>
                                <td>
                                    <a href="#" > <button class="btn btn-outline-info">Edit</button> </a>
                                    <form action="{{}}" method="POST"> @csrf @method('DELETE')<button class="btn btn-outline-danger m-2">Delete</button></form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>

        </div>

    </div>

@endsection
