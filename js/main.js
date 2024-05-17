let button = document.querySelector('.boton');

button.addEventListener('click', () => {
    let altura = document.querySelector('.altura');
    let alturaV = altura.value;

    if(alturaV > 3) {
        document.querySelector('#imcP').innerHTML = 'Imposible 😂';
        return false;

    } else if(alturaV < 0) {
        document.querySelector('#imcP').innerHTML = 'No puede ser negativo 😂';
        return false;

    }

    let peso = document.querySelector('.peso');
    let pesoV = peso.value;

    if(pesoV > 300) {
        document.querySelector('#imcP').innerHTML = 'Imposible 😂';
        return false;

    } else if(pesoV < 0) {
        document.querySelector('#imcP').innerHTML = 'No puede ser negativo 😂';
        return false;

    }

    let calculo = pesoV / (alturaV * alturaV);

    if(!isNaN(calculo)) {
        let total = document.querySelector('.total');
        total.value = calculo.toFixed(2);

        if(calculo <= 16.5) {
            document.querySelector('#imcP').innerHTML = `Bajo peso severo 🦴`;
        } else if (calculo <= 18.5) {
            document.querySelector('#imcP').innerHTML = `Bajo peso ❗`;
        } else if(calculo <= 25) {
            document.querySelector('#imcP').innerHTML = `Peso normal ✔️`;
        } else if(calculo <= 30) {
            document.querySelector('#imcP').innerHTML = `Sobrepeso 🍔`;
        } else if(calculo <= 35) {
            document.querySelector('#imcP').innerHTML = `Obesidad tipo 1 (moderada) 🍕`;
        } else if(calculo <= 40) {
            document.querySelector('#imcP').innerHTML = `Obesidad tipo 2 (severa) 🍫`;
        } else {
            document.querySelector('#imcP').innerHTML = `Obesidad tipo 3 (mórbida) ☠️❗`;
        }

    } else {
        alert('Tienes que rellenar los datos 😉');
    }
})
