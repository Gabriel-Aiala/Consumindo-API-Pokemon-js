<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabriel Vicente Aiala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{ asset('js/index.js') }}" type="text/javascript" async="true" defer></script>
</head>
<body>
    <div class="container">
        <form action="{{route('search')}}"  method="GET">
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




