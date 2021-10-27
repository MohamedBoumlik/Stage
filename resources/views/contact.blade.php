@extends('layouts.app')

{{-------------------- navbar --------------------}}

@section('active')
    <li class="nav-item">
        <a class="nav-link  navigation " aria-current="page" href="{{route('home')}}">Accueil</a>
    </li>

    <li class="nav-item">
        <a class="nav-link  navigation" aria-current="page" href="{{url('/produit')}}">Produits</a>
    </li>

    <li class="nav-item">
        <a class="nav-link  navigation" aria-current="page" href="{{url('/services')}}">Services</a>
    </li>

    <li class="nav-item">
        <a class="nav-link  navigation active" aria-current="page" href="{{url('/contact')}}">Contact</a>
    </li>
@endsection

{{-------------------- content --------------------}}

@section('content')

    <!-- form -->

     <div class="form mt-3 mb-3">

        <form>

            <div class="text-center">
                <img style='object-fit: cover;' src="data:image/png;base64,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" alt="fire">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nom :</label>
                <input type="text" class="form-control" placeholder="Entrez le nom" name="name">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email :</label>
                <input type="email" class="form-control" placeholder="Entrez votre email" name="email">
            </div>
  
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Sujet :</label>
                <input type="text" class="form-control" placeholder="Entrez le sujet" name="sujet">
            </div>

            <div class="mb-3">
                <label for="floatingTextarea2">Message :</label>
                <textarea class="form-control" id="floatingTextarea2" style="height: 100px" placeholder="Entrez un message" name="message"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-outline-light btn-lg" >Send</button><br>
            </div>

        </form>

    </div>

@endsection


{{-------------------- footer --------------------}}

@section('footer')

    <div class="footer">
        <p class="text-center mb-5" style="font-size: 40px; font-weight: bold; text-decoration: underline; color: #f3ab71;">Sté Ben-Bazid</p>

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-12 text-center">
                    <img style='object-fit: cover' src="data:image/png;base64,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" alt="fire">
                </div>

                <div class="col-md-3 col-sm-12 mt-3" >

                    <div class="m-auto text-center">
                        <h2 style="margin-bottom: 20px"><i class="fas fa-globe mr-2"></i> Site</h2>
                    </div>

                    <div class="m-auto text-center content">
                        
                        <a class="nav-link active navigation" href="{{route('home')}}">Accueil</a>
                        
                        <a class="nav-link active navigation"  href="{{url('/produit')}}">Produits</a>

                        <a class="nav-link active navigation"  href="{{url('/services')}}">Services</a>

                        <a class="nav-link active navigation"  href="{{url('/contact')}}">Contact</a>

                    </div>

                </div>

                <div class="col-md-3 col-sm-12 mt-3" >

                    <div class="m-auto text-center">
                        <h2 style="margin-bottom: 20px"> <i class="fas fa-headset mr-2"></i> Contact</h2>
                    </div>

                    <div class="m-auto text-center content">
                        <p>+212 524666403</p>
                        <p>+212 635051819</p>
                        <p>benbazide.guvenlik.@gmail.com</p>
                    </div>

                </div>

                <div class="col-md-3 col-sm-12 mt-3" >

                    <div class="m-auto text-center">
                        <h2 style="margin-bottom: 20px"> <i class="fas fa-map-marker-alt"></i> Localisation</h2>
                    </div>

                    <div class="m-auto text-center content">
                        <p>33 Rue el Ouifaq Qu Salam Safi</p>
                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection

{{-- style --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('style/Contact.css') }}">
@endsection
