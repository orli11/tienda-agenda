let vendedor

const btnLoguin = document.getElementById('btnLogin')

btnLoguin.addEventListener('click', () => {
    const email = document.getElementById('email')
    const password = document.getElementById('password')
    if(email.value.trim() === '' || password.value.trim() === ''){
        activaAlerta('Los campos no pueden estar vacíos')
    } else {
        const sendData = {
            email: email.value,
            password: password.value
        }
        fetch('./backend/files/login_tienda.php', {
            method: 'POST',
            body: JSON.stringify(sendData),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(async(response) => {
            const respuesta = await response.json()
            if(respuesta.MESSAGE === 'No se encontro usuario') {
                activaAlerta('El usuario no existe en la base de datos')
            } else if (respuesta.MESSAGE === 'La contraseña no coincide') {
                activaAlerta('La contraseña no coinciden...')
            } else if (respuesta.MESSAGE === 'success') {
                vendedor = respuesta.VENDEDOR['vendedor']
                window.location.replace(`/tienda-agenda/home.html?vendedor=${vendedor}`)
            } else {
                activaAlerta('Algo salió mal')
            }
            //console.log(await response.json())
        })
        .catch((error) => {
            console.log('error: ', error)
        })

    }
})

const activaAlerta = mensaje => {
    const alert = document.getElementsByClassName('alert')
        alert[0].textContent = mensaje
        alert[0].classList.remove('hide')
        alert[0].classList.add('show')
        setTimeout(() => {
            alert[0].classList.remove('show')
            alert[0].classList.add('hide')
        }, 3000);
}