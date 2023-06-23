<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" crossorigin="anonymous" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Accueil | FreeAds</title>
</head>
    <body class="bg-gray-100 h-screen w-full">

        <!-- NAV BAR-->
        <header>
            <nav class="bg-grey-200 p-3 shadow-lg shadow-grey-100/50">
                <div class="listNav flex justify-between align-center pt-3">
                    <h1 class="text-4xl">{Epi'<span class="text-white rounded bg-blue-900 p-1">Ads}</span></h1>
                    <ul class="flex gap-6 items-center">
                        <a class="" href="login"><i class="fa-solid fa-user fa-2xl"></i></a>
                        <a href="http://localhost:8000/Ads" class="text-lg">Voir les annonces</a>
                        <a href="http://localhost:8000/postAds" class="bg-blue-900 p-2 rounded text-white text-lg">Poster une annonce</a>
                    </ul>
                </div>
            </nav>
        </header>

         <!-- Free Ads box in the main Container-->
        <div class="container flex justify-center w-full pt-28 mx-auto">
            <div class="box p-6 mt-6 block">
                <div class="boxTitle flex justify-center mt-6">
                    <h1 class="text-5xl">Bienvenue chez Free Ads.</h1>
                </div>
                <div class="subTitle mt-2 text-2xl">
                    <h2 class="">Videz votre grenier rapidement et vendez sans payer de pubs ! </h2>
                    <div class="more flex justify-center pt-4">
                        <a class="bg-blue-900 rounded p-3 text-white font-bold" href="">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER OF WEB_PAGE-->
    <footer class="bg-blue-900 w-full p-4 mx-auto h-auto fixed bottom-0"x²>
        <div class="footerItems flex justify-evenly text-white">
            <ul>
                <a class="text-xl font-bold" href="">A propos</a>
                <p class="text-left text-sm">Free Ads vous propose de vendre <br> garatuitement vos biens grâce aux <br> systèmes d'annonces.</p>
            </ul>
            <ul>
                <a class="text-xl font-bold" href="">Contact</a>
                <p><a class="text-sm gap-2 flex items-center" href=""><i class="fa-regular fa-envelope fa-lg" style="color: #ffffff;"></i>freeads@gmail.com</a></p>
            </ul>
            <ul>
            <a class="text-xl font-bold" href="">Plus</a>
                <p><a class="text-sm gap-2 flex items-center" href=""><i class="fa-regular fa-plus-circle fa-lg" style="color: #ffffff;"></i> Recherche</a></p>
            </ul>
        </div>
    </footer>
</body>
</html>
