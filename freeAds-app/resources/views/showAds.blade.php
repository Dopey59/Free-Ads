<!-- index.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css" crossorigin="anonymous" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Voir les annonces | FreeAds</title>
</head>
<body>
    <!-- NAV BAR-->
    <header>
        <nav class="bg-grey-200 p-3 shadow-lg shadow-grey-100/50">
            <div class="listNav flex justify-between align-center pt-3">
                <a href="/" class="text-4xl">{Epi'<span class="text-white rounded bg-blue-900 p-1">Ads}</span></a>
                <ul class="flex gap-6 items-center">
                    <a class="" href="login"><i class="fa-solid fa-user fa-2xl"></i></a>
                    <a href="Ads" class="text-lg">Voir les annonces</a>
                    <a href="postAds" class="bg-blue-900 p-2 rounded text-white text-lg">Poster une annonce</a>
                </ul>
            </div>
        </nav>
        <div class="adsTitle flex justify-center p-4 bg-blue-900">
            <h1 class="font-bold text-white text-2xl">{ Vos annonces postés }</h1>
        </div>
    </header>
    <div class="uper mt-12">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div><br />
        @endif
        <div class="mainContainer flex flex-col">
            <div class="table">
              @foreach($Annonces as $Annonce1)
                <div class="boxAnnonce shadow-black shadow-lg bg-gray-100 rounded m-6 p-6">
                    <div class="formImg flex justify-evenly ">
                        <div class="centerImg flex justify-center gap-4">
                           <a target="_blank" href="https://images.unsplash.com/photo-1662468892216-5bba71ad336d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80"><img class="w-96 h-auto rounded shadow-black shadow-sm bg-white p-2" src="{{$Annonce1->img1}}"></a>
                           <a target="_blank" href="https://images.unsplash.com/photo-1651075957009-fa1b0a98a9e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"><img class="w-96 h-auto rounded shadow-black shadow-sm bg-white p-2" src="{{$Annonce1->img2}}"></a>
                        </div>
                        <div class="items w-auto p-6 text-3xl bg-white shadow-md shadow-black rounded ">
                            <p class="font-bold mt-6 text-2xl">Titre : {{$Annonce1->title}}</p>
                            <p class="font-bold mt-6 text-2xl">Description : {{$Annonce1->description}}</p>
                            <p class="font-bold mt-6 text-2xl">Prix : {{$Annonce1->price}}</p>
                            <p class="font-bold mt-6 text-2xl">Localisation : {{$Annonce1->localisation}}</p>
                            
                            <form class="mt-64 flex items-center justify-evenly" method="POST" action= "{{ route ('Ads.destroy', $Annonce1->id) }}">
                                <a class="bg-blue-900 text-white rounded p-3" href="{{ route ('Ads.edit', $Annonce1) }}">Modifier</a>
                                @method("DELETE")
                                @csrf
                                <input type="submit" class="bg-black text-white rounded p-3" value="supprimer">
                            </form>
                        </div>
                    </div>
                        <br>
                        <div class="opts flex justify-between">
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
</body>
</html>

