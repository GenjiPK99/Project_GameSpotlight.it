<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameSpotlight.it</title>
    <!-- CDN FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CDN GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400;1,500&display=swap" rel="stylesheet">
    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- MY CSS -->
    <link rel="stylesheet" href="css\Style Home Page.css">
</head>
<!-- Inizio Body -->
<body>
    <!-- Inizio Header -->
    <header>
        <!-- Inizio NavBar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top ">
            <div class="container-fluid">
                <a class="navbar-brand ps-5 fw-bold fs-1" href= "{{ route('HomePageGameSpotlight') }}"><span style= "color: red">GAME</span>SPOTLIGHT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active px-5 fw-bold fs-5" aria-current="page" href="{{ route('HomePageGameSpotlight') }}"><span style= "color: red">H</span>ome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-5 fw-bold fs-5" href="{{ route('ChiSiamo') }}"><span style= "color: red">Chi</span> Siamo!</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-5 fw-bold fs-5" href="{{ route('Servizi') }}"><span style= "color: red">S</span>ervizi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Fine NavBar -->
    </header>
    <!-- Fine Header -->
    
    <!-- Inizio Main -->
    <main>
        
        <h1 class="text-center text-black">Benvenuti VideoGiocatori su <span style= "color: red">Game</span>Spotlight.it</h1>
        <hr>
        <!-- Carouser Img. Games  -->
        <div class="container-fluid">
            <div class="row pt-5 ">
                <div class="col-12 col-md-12">
                    <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://fs-prod-cdn.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_4/2x1_NSwitch_TloZTearsOfTheKingdom_Gamepage.jpg" class="d-block w-100 hCarousel"  alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://image.api.playstation.com/vulcan/ap/rnd/202211/3007/JnzRCl2Yj208yuJoSfoGXMGt.jpg" class="d-block w-100 hCarousel"  alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://sm.ign.com/ign_it/screenshot/default/breaker-image-1920x1080-1920x1080-9b4788ed14ab_2rtt.png" class="d-block w-100 hCarousel"  alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://blz-contentstack-images.akamaized.net/v3/assets/blt9c12f249ac15c7ec/blt197bfce3b1cb7880/6286c2cccf13bb4bbe6278ad/open-graph.jpg" class="d-block w-100 hCarousel"  alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fine Carouser Img. Games  -->
        <hr>
        <h2 class="text-center pt-5 pb-5 text-black"><marquee>Top <span style= "color: red">Buy</span> of the Week</marquee></h2>
        <hr>
        <!-- Inizio Section Cards -->
        <section>
           <div class="container">
                <div class="row">
                    @foreach($games as $game)
                    <div class="col-10 col-md-6 mx-auto p-2 ">
                        <div class="card mb-3 ">
                            <div class="row g-0 ">
                            <div class="col-12 col-md-4">
                                <img src="{{$game['img']}}" style ="height: 300px" class="w-100 rounded-start" alt="...">
                            </div>
                                <div class="col-12 col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$game['Name']}}</h5>
                                        <p class="card-text">{{$game['Description']}}</p>
                                        <a href="{{ route('Page_Dettaglio', ['id'=> $game['id']])}}"><button class="button-89" role="button">Scopri di Più!</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-10 col-md-6 pb-5">
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-12 col-md-4">
                            <img src="https://cdn-prod.scalefast.com/public/assets/user/1614900/image/2dfd8382f5f4745ffb25719e9278817f.jpg" style ="height: 300px"  class="w-100 rounded-start" alt="...">
                            </div>
                            <div class="col-12 col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Final Fantasy XVI</h5>
                                <p class="card-text">Un epico e oscuro mondo fantastico, in cui il fato delle terre è deciso dai potenti Eikon e dai loro Dominanti.
                                Questa è la storia di Clive Rosfield, un guerriero a cui è stato conferito il titolo di “Primo Scudo di Rosaria”, e che ha giurato di proteggere il suo fratellino Joshua, il dominante di Fenice.</p>
                                <a href="{{'Page_Dettaglio'}}"><button class="button-89" role="button">Scopri di Più!</button></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-6 pb-5">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-12 col-md-4">
                            <img src="https://static-it.gamestop.it/images/products/310750/3max.jpg" style ="height: 300px"  class="w-100 rounded-start" alt="...">
                            </div>
                            <div class="col-12 col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Assassin's Creed: Mirage</h5>
                                <p class="card-text">Indossa i panni di Basim, un astuto ladruncolo da strada colpito da visioni spaventose che ora cerca risposte e giustizia nelle affollate vie della Bagdad del IX secolo. Grazie a un'antica e misteriosa organizzazione nota come gli Occulti, diventerà un Maestro Assassino e cambierà il suo destino come mai avrebbe immaginato.</p>
                                
                                <a href="{{'Page_Dettaglio'}}"><button class="button-89" role="button">Scopri di Più!</button></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-6 pb-5">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-12 col-md-4 ">
                            <img src="https://static-it.gamestop.it/images/products/312131/3max.jpg" style ="height: 300px" class="w-100 rounded-start" alt="...">
                            </div>
                            <div class="col-12 col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">DIABLO® IV</h5>
                                <p class="card-text">DIABLO® IV è la più recente incarnazione nella serie dell'iconico gioco di ruolo d'azione di Blizzard Entertainment. I giocatori esploreranno una nuova lugubre storia e saranno liberi di trovare la propria strada nella versione più estesa di Sanctuarium mai creata, un panorama spoglio e in rovine, privo di speranza e infestato dai demoni.</p>
                                <a href="{{'Page_Dettaglio'}}"><button class="button-89" role="button">Scopri di Più!</button></a>
                            </div>
                            </div>
                        </div>
                    </div> -->
                </div>
           </div>
           <hr>
        </section>
        
        <!-- Fine Section Cards -->
        
    </main>
    <!-- Fine Main -->
    
    <!-- Inizo Footer -->
    <footer>
        
    </footer>
    <!-- Fine Footer -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js\script.js"></script>
</body>
</html>