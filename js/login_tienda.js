document.addEventListener('DOMContentLoaded', () => {
    let usuario;
    const btnLogin = document.getElementById('btnLogin');

    btnLogin.addEventListener('click', () => {
        const email = document.getElementById('email');
        const password = document.getElementById('password');

        if (email.value.trim() === '' || password.value.trim() === '') {
            // Mandamos alerta
            activaAlerta('Los campos no pueden ser vacios');
        } else {
            // Intentamos logearnos
            const sendData = {
                email: email.value,
                password: password.value
            };
            fetch('./backend/files/login.php', {
                method: 'POST',
                body: JSON.stringify(sendData),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(async (response) => { 
                const respuesta = await response.json();
                if (respuesta.MESSAGE === 'No se encontro usuario') {
                    activaAlerta('El usuario no existe en la BD');
                } else if (respuesta.MESSAGE === 'Contraseñas no coinciden') {
                    activaAlerta('Las contraseñas no coinciden');
                } else if (respuesta.MESSAGE === 'success') {
                    usuario = respuesta.USUARIO['usuario'];
                    console.log(usuario);
                    window.location.replace(`/tienda-agenda/tiendaVendedor.html?email=${email.value}`);
                } else {
                    activaAlerta('Algo salió mal');
                }
            })
            .catch((error) => {
                console.log('Error:', error);
            });
        }
    });

    const activaAlerta = mensaje => {
        const alerta = document.getElementsByClassName('alert');
        alerta[0].textContent = mensaje;
        alerta[0].classList.remove('hide');
        alerta[0].classList.add('show');
        setTimeout(() => {
            alerta[0].classList.remove('show');
            alerta[0].classList.add('hide');
        }, 3000);
    };
});
