<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabriel Vicente Aiala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}" />
    <script src="{{ asset('js/search.js') }}" type="text/javascript" async="false" defer></script>
    
</head>
<body>

    <div class="container">
        <a href="{{route('index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>Home</a>

        <form action="{{route('search')}}" onsubmit="validaForm(event)" method="GET">
            <div class="input-group mb-3">
            
                <input  id="name"name="name" type="text" class="form-control" placeholder="Pokemon's name" aria-label="Pokemon's name" aria-describedby="button-addon2">
                <input class="btn btn-outline-secondary" onclick="NamePokemonSearch()" type="submit"value="pesquisar">
            </div>
        </form>

        <ul>
        
            <div class="row" id='pokedex'>

            </div>
        </ul>
    </div>
</body>
</html>




