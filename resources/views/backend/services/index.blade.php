@extends('layouts.app')

@section('content')

    <div >

        <div class="row" style="max-width: 100%!important;">

            <div class="col-3 sideBar">
                <ul class="sideBarList">

                    <li>
                        <div class="text-center">
                            <img src="https://www.pngkit.com/png/detail/78-788100_fire-logo-png-svg-free-download-fire-logo.png"  alt="" style="width: 12rem; margin-bottom: 10px">
                        </div>
                    </li>

                    <li>
                        <a class="nav-link  navigation" aria-current="page" href="{{url('/admin/produit')}}"><i class="fas fa-fire-extinguisher" style="margin-right: 10px"></i>Produits</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  navigation" aria-current="page" href="{{url('/admin/commandes')}}"><i class="fas fa-cart-arrow-down" style="margin-right: 10px"></i>Commandes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  navigation active" aria-current="page" href="{{url('/admin/services')}}"><i class="fas fa-concierge-bell" style="margin-right: 10px"></i>Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  navigation" aria-current="page" href="{{url('/admin/contact')}}"><i class="fas fa-headset mr-2" style="margin-right: 10px"></i>Contact</a>
                    </li>

                    <li>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                            @csrf
                            <div class="text-center" style="margin-top: 70px">
                                <button class="btn btn-outline-danger"><i class="fas fa-power-off" style="margin-right: 4px"></i>Logout</button>
                            </div>
                        </form>

                    </li>

                </ul>
            </div>

            <div class="col-9">

                @if (session("addServ"))
                    <div class="alert alert-success mt-3">{{session("addServ")}}</div>
                @endif
                
                @if (session('editServ'))
                    <div class="alert alert-success mt-3">{{session("editServ")}}</div>
                @endif
                
                @if (session("dltServ"))
                    <div class="alert alert-danger mt-3">{{session("dltServ")}}</div>
                @endif

                <div class="curd">
                   <a href="{{url('/admin/services/create')}}"> <button class="btn btn-outline-primary mt-3 mb-3"><i class="far fa-plus-square" style="margin-right: 4px"></i>Ajouter</button> </a>
                </div>

                <table class="table table-hover table-bordered mt-4">

                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($serv as $produit)   
                            <tr>
                                <td>{{$produit->id}}</td>
                                <td>{{$produit->titre}}</td>
                                <td>{{$produit->pic}}</td>
                                <td>{{$produit->description}}</td>
                                <td class="d-flex text-center m-auto">
                                    <div class="d-flex text-center m-auto">
                                        <a href="{{url('/admin/services/edit/'.$produit->id)}}" > <button class="btn btn-outline-info">Edit</button> </a>
                                        <form action="{{url('/admin/services/delete/'.$produit->id)}}" method="POST"> @csrf @method('DELETE')<button class="btn btn-outline-danger ml-2">Delete</button></form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>

        </div>

    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('style/backend/produits/index.css') }}">
@endsection