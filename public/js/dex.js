const pokeCard = document.querySelector('[data-poke-card]');
const pokeName = document.querySelector('[data-poke-name]');
const pokeImg = document.querySelector('[data-poke-img]');
const pokeImgContainer = document.querySelector('[data-poke-img-container]');
const pokeId = document.querySelector('[data-poke-id]');
const pokeTypes = document.querySelector('[data-poke-types]');
const pokeStats = document.querySelector('[data-poke-stats]');

let currentPokemonRecord = null; // Para guardar temporalmente el pokemon buscado

const typeColors = {
    electric: '#FFEA70',
    normal: '#B09398',
    fire: '#FF675C',
    water: '#0596C7',
    ice: '#AFEAFD',
    rock: '#999799',
    flying: '#7AE7C7',
    grass: '#4A9681',
    psychic: '#FFC6D9',
    ghost: '#561D25',
    bug: '#A2FAA3',
    poison: '#795663',
    ground: '#D2B074',
    dragon: '#DA627D',
    steel: '#1D8A99',
    fighting: '#2F2F2F',
    default: '#2A1A1F',
};


const searchPokemon = async event => {
    event.preventDefault();
    const { value } = event.target.pokemon;
    const pokemonName = value.toLowerCase();

    renderLoading();
    currentPokemonRecord = null;

    try {
        // 1. Intentar buscar en NUESTRA base de datos local
        const localResponse = await fetch(`/api/pokemon/search/${pokemonName}`);
        
        if (localResponse.ok) {
            const localResult = await localResponse.json();
            renderLocalPokemonData(localResult.data);
            return;
        }
    } catch (err) {
        console.log("Error buscando localmente...");
    }

    // 2. Si no está localmente, intentar en la API externa oficial
    fetch(`https://pokeapi.co/api/v2/pokemon/${pokemonName}`)
        .then(data => data.json())
        .then(response => {
            currentPokemonRecord = response; // Guardamos para poder salvarlo luego
            renderPokemonData(response);
        })
        .catch(err => renderNotFound());
}

const renderLoading = () => {
    pokeName.textContent = 'Buscando...';
    pokeImg.setAttribute('src', 'https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExNHJqZndqZndqZndqZndqZndqZndqZndqZndqZndqZndqZndqZndqJmVwPXYxX2ludGVybmFsX2dpZl9ieV9pZCZjdD1n/3o7bu3XilJ5BOiSGic/giphy.gif');
    pokeImg.style.background = '#fff';
    pokeTypes.innerHTML = '';
    pokeStats.innerHTML = '';
    pokeId.textContent = '';
}

const renderPokemonData = data => {
    const sprite =  data.sprites.front_default;
    const { stats, types } = data;

    pokeName.textContent = data.name;
    pokeImg.setAttribute('src', sprite);
    pokeId.innerHTML = `Nº ${data.id} (Oficial) <br><br> <button class="btn btn-success" onclick="saveToDatabase()">¡Guardar en mi BD!</button>`;
    setCardColor(types);
    renderPokemonTypes(types);
    renderPokemonStats(stats);
}

const renderLocalPokemonData = data => {
    const sprite = `/imagen/pokemon/${data.imagen}`;
    const types = [{ type: { name: data.tipo.toLowerCase() } }];
    const stats = [
        { stat: { name: 'Categoría' }, base_stat: data.categoria },
        { stat: { name: 'Habilidad' }, base_stat: data.habilidad },
        { stat: { name: 'Debilidad' }, base_stat: data.debilidad }
    ];

    pokeName.textContent = data.nombre + " (Tuyo!)";
    pokeImg.setAttribute('src', sprite);
    pokeId.textContent = `Nº ${data.id} (Local)`;
    setCardColor(types);
    renderPokemonTypes(types);
    renderLocalStats(stats);
}

// Función para enviar los datos al backend y guardar
const saveToDatabase = async () => {
    if (!currentPokemonRecord) return;

    const btn = document.querySelector('.btn-success');
    btn.textContent = 'Guardando...';
    btn.disabled = true;

    const dataToSend = {
        nombre: currentPokemonRecord.name,
        imagen_url: currentPokemonRecord.sprites.front_default,
        tipo: currentPokemonRecord.types.map(t => t.type.name).join(', '),
        habilidad: currentPokemonRecord.abilities.map(a => a.ability.name).join(', '),
        categoria: 'Oficial API',
        debilidad: 'Consultar API',
        url: `https://pokeapi.co/api/v2/pokemon/${currentPokemonRecord.id}`
    };

    try {
        const response = await fetch('/api/pokemon/save', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
            },
            body: JSON.stringify(dataToSend)
        });

        if (response.ok) {
            btn.textContent = '✅ ¡Guardado!';
            setTimeout(() => {
                alert('¡Pokémon guardado con éxito en tu base de datos!');
            }, 500);
        } else {
            btn.textContent = '❌ Error al guardar';
            btn.disabled = false;
        }
    } catch (err) {
        console.error(err);
        btn.textContent = '❌ Error';
        btn.disabled = false;
    }
}

const setCardColor = types => {
    const colorOne = typeColors[types[0].type.name] || typeColors.default;
    const colorTwo = types[1] ? typeColors[types[1].type.name] : typeColors.default;
    pokeImg.style.background =  `radial-gradient(${colorTwo} 33%, ${colorOne} 33%)`;
    pokeImg.style.backgroundSize = ' 5px 5px';
}

const renderPokemonTypes = types => {
    pokeTypes.innerHTML = '';
    types.forEach(type => {
        const typeTextElement = document.createElement("div");
        typeTextElement.style.color = typeColors[type.type.name] || typeColors.default;
        typeTextElement.textContent = type.type.name;
        pokeTypes.appendChild(typeTextElement);
    });
}

const renderPokemonStats = stats => {
    pokeStats.innerHTML = '';
    stats.forEach(stat => {
        const statElement = document.createElement("div");
        const statElementName = document.createElement("div");
        const statElementAmount = document.createElement("div");
        statElementName.textContent = stat.stat.name;
        statElementAmount.textContent = stat.base_stat;
        statElement.appendChild(statElementName);
        statElement.appendChild(statElementAmount);
        pokeStats.appendChild(statElement);
    });
}

const renderLocalStats = stats => {
    pokeStats.innerHTML = '';
    stats.forEach(stat => {
        const statElement = document.createElement("div");
        statElement.style.display = 'flex';
        statElement.style.justifyContent = 'space-between';
        statElement.style.width = '100%';
        const name = document.createElement("div");
        name.textContent = stat.stat.name;
        const value = document.createElement("div");
        value.textContent = stat.base_stat;
        statElement.appendChild(name);
        statElement.appendChild(value);
        pokeStats.appendChild(statElement);
    });
}

const renderNotFound = () => {
    pokeName.textContent = 'No encontrado';
    pokeImg.setAttribute('src', 'https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExNHJqZndqZndqZndqZndqZndqZndqZndqZndqZndqZndqZndqZndqJmVwPXYxX2ludGVybmFsX2dpZl9ieV9pZCZjdD1n/12Bpme5pTzGmg8/giphy.gif');
    pokeImg.style.background =  '#fff';
    pokeTypes.innerHTML = '';
    pokeStats.innerHTML = '';
    pokeId.textContent = '';
}
