document.addEventListener('DOMContentLoaded', () => {
    const btnLogin = document.getElementById('btnLogin');
    btnLogin.addEventListener('click', register);

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
});
