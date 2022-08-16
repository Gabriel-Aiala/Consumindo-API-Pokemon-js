

function NamePokemonSearch() {
    let inputName = document.getElementById('name').value;
    
    sessionStorage.setItem('chave', inputName);
    
}
function fetchPokemon(nomePokemon) { 
    const getPokemonUrl= `https://pokeapi.co/api/v2/pokemon/${nomePokemon}`;
    

    const pokemonPromisses = [];
        pokemonPromisses.push(fetch(getPokemonUrl).then(response =>{
            if (response.status !=200) {
                window.location.replace("http://127.0.0.1:8000/error");
            }else{
            return response.json();
            }
        }));  
    
    Promise.all(pokemonPromisses).then(pokemons =>
        {
            
            const lispokemons = pokemons.reduce((accumuletor,pokemon)=>{
                accumuletor +=`
                <div class="col-sm-4 mx-auto">
                <li class="card text-center" style="width: 18rem;">
                <img alt="${pokemon.name}"src="${pokemon.sprites.front_default}"></img>
                 <h2>${pokemon.id}. ${pokemon.name}</h2>
                <p class="text-center">${pokemon.types.map(typeInfo=>typeInfo.type.name).join(' | ')}</p>
                <h4>skills</h4>
                <h6>${pokemon.abilities.map(ability=>ability.ability.name).join('<br>')}</h6>
                </li>
                </div>`;
                return accumuletor
            },'');
            const ul = document.getElementById('pokedex')

            ul.innerHTML = lispokemons;
        })
    
}
nomePokemon=sessionStorage.getItem('chave')
fetchPokemon(nomePokemon)
