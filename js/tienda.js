//Archivo para login tienda
const btnLogin = document.getElementById('btnLogin')


btnLogin.addEventListener('click', () => {
    const email = document.getElementById('email')
    const password = document.getElementById('password')
    if(email.value.trim() === '' || password.value.trim() === ''){
        //Alerta
        console.log('Todos los campos son obligatorios')
        activarAlerta('Todos los campos son obligatorios')
    } else {
        console.log('Usuario registrado')
    }
})

//Alerta 
const activarAlerta = mensaje => {
    const alert = document.getElementsByClassName('alert')
    alert[0].textContent = mensaje
    alert[0].classList.remove('hiden')
    alert[0].classList.add('show')
    setTimeout(() => {
        alert[0].classList.remove('show')
        alert[0].classList.add('hide')
    }, 3000);
}
