let button = document.querySelector('.boton');

button.addEventListener('click', () => {
    let altura = document.querySelector('.altura');
    let alturaV = altura.value;

    if(alturaV > 3) {
        alert('Imposible 😂');
        return false;

    } else if(alturaV < 0) {
        alert('No puede ser negativo 😂');
        return false;

    }

    let peso = document.querySelector('.peso');
    let pesoV = peso.value;

    if(pesoV > 300) {
        alert('Imposible 😂');
        return false;

    } else if(pesoV < 0) {
        alert('No puede ser negativo 😂');
        return false;

    }

    let calculo = pesoV / (alturaV * alturaV);

    if(!isNaN(calculo)) {
        let total = document.querySelector('.total');
        total.value = calculo.toFixed(2);

    } else {
        alert('Tienes que rellenar los datos 😉');
    }
})