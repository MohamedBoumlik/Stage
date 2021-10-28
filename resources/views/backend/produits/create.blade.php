@extends('layouts.app')

@section('content')
    <div class="mt-5">

        <form action="{{url('/admin/produit/store')}}" method="POST" class="m-auto p-5">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom De Produit</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Entrez le nom" required>
            </div>
    
            <div class="mb-3 add-img">
                <label for="file" class="form-label" >La Photo De Produit </label>
                <input type='file' id='file' accept="image/*" name='pic' required/>
                <label for="file" id='the-one'>Choisissez une photo</label>
            </div>
    
            <div class="mb-3">
                <label for="select" class="form-label">Categorie</label>
                <select class="form-select" aria-label="Default select example" name="type" required id="select">
                    <option selected>Select The Type</option>
    
                    @foreach ($type as $genre)
                        <option value="{{$genre->id}}">{{$genre->type}}</option>
                    @endforeach
                    
                </select>
            </div>
    
            <div class="mb-3">
                <label for="floatingTextarea2">Message :</label>
                <textarea class="form-control" id="task-textarea" ></textarea>
            </div>
    
            <div class="text-center">
                <button type="submit" class="btn btn-outline-secondary">Ajouter</button>
            </div>
    
        </form>
        
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('style/backend/produits/create.css') }}">
@endsection

@section('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '#task-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection