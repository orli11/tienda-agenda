document.addEventListener('DOMContentLoaded', () => {
<<<<<<< HEAD
    const btnLogin = document.getElementById('btnLogin');
    btnLogin.addEventListener('click', register);
=======
    const url = window.location.search
    const params = new URLSearchParams(url)
    const existe = params.get('existe')
    if(existe){
      const alerta = document.getElementsByClassName('alert')
      alerta[0].classList.remove('hide')
      alerta[0].classList.add('show')
      setTimeout(() => {
        alerta[0].classList.remove('show')
        alerta[0].classList.add('hide')
      }, 3000)
    }
    console.log('@@@ params => ', params, existe)
  })

/*
const checkVendedor = document.getElementById('checkVendedor')
const checkCliente = document.getElementById('checkCliente')
>>>>>>> main

    register = () => {
        // Obtener valores del formulario
        const name = document.getElementById('name').value;
        const apaterno = document.getElementById('apaterno').value;
        const amaterno = document.getElementById('amaterno').value;
        const tell = document.getElementById('tell').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const checkVendedor = document.getElementById('checkVendedor').checked;
        const checkCliente = document.getElementById('checkCliente').checked;

        const sendData = {
            name,
            apaterno,
            amaterno,
            tell,
            email,
            password,
            checkVendedor,
            checkCliente
        }

        fetch('', {
            method: 'POST',
            body: JSON.stringify(sendData),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then((res) => { 

        })
    }
<<<<<<< HEAD
});
=======
} */ 
>>>>>>> main
