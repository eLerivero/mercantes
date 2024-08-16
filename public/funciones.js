function filterCountries() {
    const input = document.getElementById('pais');
    const filter = input.value.toLowerCase();
    const select = document.getElementById('countrySelect');
    const options = select.options;

    // Muestra el select si hay texto
    if (filter) {
        select.style.display = 'block';
    } else {
        select.style.display = 'none';
    }

    // Filtrar opciones
    for (let i = 1; i < options.length; i++) {
        const option = options[i];
        if (option.value.toLowerCase().indexOf(filter) > -1) {
            option.style.display = '';
        } else {
            option.style.display = 'none';
        }
    }
}

function selectCountry(event) {
    const input = document.getElementById('pais');
    input.value = event.target.value;
    document.getElementById('countrySelect').style.display = 'none';
}
