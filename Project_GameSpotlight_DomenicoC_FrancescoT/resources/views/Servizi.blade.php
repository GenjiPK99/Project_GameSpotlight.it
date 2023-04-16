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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand ps-5 fw-bold fs-1 " href="{{ route('HomePageGameSpotlight')}}"><span style= "color: red">GAME</span>SPOTLIGHT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active px-5 fw-bold fs-5" aria-current="page" href="{{ route('HomePageGameSpotlight') }}"><span style= "color: red">H</span>ome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-5 fw-bold fs-5" href="{{ route('ChiSiamo') }}"><span style= "color: red">Chi</span>Siamo!</a>
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

        
    </main>
    <!-- Fine Main -->
    
    <!-- Inizo Footer -->
    <footer>
        
    </footer>
    <!-- Fine Footer -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>