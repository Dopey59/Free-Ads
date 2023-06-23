<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" crossorigin="anonymous" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Modifier Annonce | FreeAds</title>
</head>
<body>
    <!-- NAV BAR-->
    <header>
        <nav class="bg-grey-200 p-3 shadow-lg shadow-grey-100/50">
            <div class="listNav flex justify-between align-center pt-3">
                <a href="/" class="text-4xl">{Epi'<span class="text-white rounded bg-blue-900 p-1">Ads}</span></a>
                <ul class="flex gap-6 items-center">
                    <a class="" href="login"><i class="fa-solid fa-user fa-2xl"></i></a>
                    <a href="http://localhost:8000/Ads" class="text-lg">Voir les annonces</a>
                    <a href="http://localhost:8000/postAds" class="bg-blue-900 p-2 rounded text-white text-lg">Poster une annonce</a>
                </ul>
            </div>
        </nav>
    </header>

    <div class="adsTitle flex justify-center p-4">
        <h1 class="font-bold text-blue-900 text-2xl">{ Modifier votre annonce }</h1>
    </div>
    <x-guest-layout>
        <!-- Session Status -->
    <x-auth-session-status class="mb-14" :status="session('status')" />
        <div class="boxForm w-full m-auto mb-2">
            <h1 class="m-2 flex justify-center">Veuillez remplir les champs ci-dessous.</h1>
            <form method="POST" action="{{ route('Ads.update', $Annonces) }}">
                @csrf
                @method('PATCH')
                <!-- Titre de l'annonce -->
                <div>
                    <x-input-label for="title" :value="__('Titre')" />
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"/>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>
        
                <!-- Description de l'annonce -->
                <div class="mt-4">
                    <x-input-label for="description" :value="__('Description')" />
        
                    <x-text-input id="description" class="block mt-1 w-full"
                                    type="text"
                                    name="description"
                                    required autocomplete="description" />
                </div>
        
                <!-- Prix de l'annonce -->
                <div class="mt-4">
                    <x-input-label for="price" :value="__('Prix')" />
                    <x-text-input id="price" class="block mt-1 w-full" type="text" name="price"/>
                </div>
        
                <!-- Image de l'annonce 1 -->
                <div class="mt-4">
                    <x-input-label for="img" :value="__('Image 1')" />
                    <x-text-input id="img" class="block mt-1 w-full" type="text" name="img1"/>
                </div>

                 <!-- Image de l'annonce 2 -->
                 <div class="mt-4">
                    <x-input-label for="img" :value="__('Image 2')" />
                    <x-text-input id="img" class="block mt-1 w-full" type="text" name="img2"/>
                </div>
        
                <!-- Localisation de du bien -->
                <div class="mt-4">
                    <x-input-label for="localisation" :value="__('Localisation')" />
                    <x-text-input id="localisation" class="block mt-1 w-full" type="text" name="localisation"/>
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-3">
                        {{ __('Modifier annonce') }}
                    </x-primary-button>
                    
                </div>
            </form>
        </div>
    </x-guest-layout>
</body>
</html>