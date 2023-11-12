//Archivo para login tienda
const btnLogin = document.getElementById('btnLogin')


btnLogin.addEventListener('click', () => {
    const email = document.getElementById('email')
    const password = document.getElementById('password')
    if(email.value.trim() === '' || password.value.trim() === ''){
        //Alerta
        console.log('Todos los campos son obligatorios')
        
    } else {
        console.log('Usuario registrado')
    }
})

