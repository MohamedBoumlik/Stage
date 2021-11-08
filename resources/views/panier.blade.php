<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Benbazide</title>
    <meta content="" name="description">
  
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="/../img/favicon.png" rel="icon">
    <link href="/../img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,100&family=Montserrat:wght@300&display=swap" rel="stylesheet">
    
    <!-- Vendor CSS Files -->
    <link href="/../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/../vendor/aos/aos.css" rel="stylesheet">
    <link href="/../vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="/../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{ asset('style/frontend/front.css') }}" rel="stylesheet">
  
   
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top ">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{url('/')}}" class="logo d-flex align-items-center">
            <img src="/../img/logo.png" alt="">
            <span>Ben-Bazide</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{url('/')}}">Accueil</a></li>
                <li><a class="nav-link scrollto" href="{{url('/')}}">À propos de nous</a></li>
                <li><a class="nav-link scrollto" href="{{url('/')}}">Services</a></li>
                <li><a class="nav-link scrollto" href="{{url('/')}}">Produits</a></li>
                {{-- <li><a class="nav-link scrollto" href="{{url('/')}}">Portfolio</a></li> --}}
                <li><a class="nav-link scrollto" href="/">Contact</a></li>
                <li><a href="{{url('/panier')}}" class="nav-link scrollto active mb-1"><i class="bi bi-cart" style="font-size: 25px"></i></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section>

        @if (session("addCmd"))
            <div class="alert alert-success">{{session("addCmd")}}</div>
        @endif

        <div class="container">
            <div class="row mt-5">
                <form action="{{url('/panier/confirmation')}}" method="POST">
                    @csrf
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr >
                                <th scope="col" style="padding: 30px; text-align: center; vertical-align: middle;">Id</th>
                                <th scope="col" style="padding: 30px; text-align: center; vertical-align: middle;">Photo de produit</th>
                                <th scope="col" style="padding: 30px; text-align: center; vertical-align: middle;">Nom de produit</th>
                                <th scope="col" style="padding: 30px; text-align: center; vertical-align: middle;">Prix(DH)</th>
                                <th scope="col" style="padding: 30px; text-align: center; vertical-align: middle;">Quantité</th>
                                <th scope="col" style="padding: 30px; text-align: center; vertical-align: middle;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($content as $item)

                                <tr>
                                    <td style="padding: 30px ; vertical-align: middle; text-align: center;">{{$item->id}}</td>
                                    <input type="hidden" name="produit_id[]" value="{{$item->id}}">

                                    <td style="padding: 30px ; vertical-align: middle; text-align: center;">{{$item->photo}}</td>
                                    
                                    <td style="padding: 30px ; vertical-align: middle; text-align: center;">{{$item->name}}</td>
                                    {{-- <input type="hidden" name="" value="{{$item->name}}"> --}}

                                    <td style="padding: 30px ; vertical-align: middle; text-align: center;">{{$item->price}}</td>

                                    <td style="padding: 30px ; vertical-align: middle; text-align: center;"><input type="number" style="max-width: 60px;" name="quantite[]" value="{{$item->quantity}}"></td>
                                    
                                    <td style="padding: 30px ; vertical-align: middle; text-align: center;">
                                        <a href="{{url('/commandes/delete/'.$item->id)}}">@csrf<button class="btn btn-outline-danger" type="button">Supprimer</button></a>
                                    </td>
                                </tr>
                                
                            @endforeach
                        
                        </tbody>
                    </table>

                    <div class="row gy-4 mt-5 p-4" style="background-color: whitesmoke">

                        <h2 class="text-center" style="color: #f88c09; font-weight: bolder">Informations personnels</h2>

                        <div class="col-md-6 ">
                          <input type="email" class="form-control" name="client_email" placeholder="Entrez vous email" required>
                        </div>

                        <div class="col-md-6">
                          <input type="text" name="client_name" class="form-control" placeholder="Entrez vous nom"  required>
                        </div>
        
                        <div class="col-md-12">
                          <input type="tel" class="form-control" name="client_tel" placeholder="Vos num de telephone"  required>
                        </div>
                        <input type="hidden" value="sent" name="etat">
                    </div>
                    <div class="text-center mt-4"><button class="btn btn-outline-success">Confimer</button></div>


                </form>
            </div>
        </div>

    </section>

</body>