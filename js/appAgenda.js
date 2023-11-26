const eventosBody = document.getElementById('eventosBody')
const templateEvents = document.getElementById('templateEvents').content
const fragment = document.createDocumentFragment()
let eventos

document.addEventListener('DOMContentLoaded', () => {
    loadEventos()
}) 

const loadEventos = () => {
    fetch('backend/files/eventos.php')
    .then(async(res) => {
        eventos = await res.json() 
        if(eventos.length > 0) {
            creaEventos()
        }
    }) 
    .catch((error) => {
        console.log('@@@@ error ', error )
    })
}

const creaEventos = () => {
    eventos.forEach((evento) => {
        templateEvents.querySelectorAll('td')[1].textContent = evento.nombre_con
        const clone = templateEvents.cloneNode(true)
        fragment.appendChild(clone)
    })
    eventosBody.appendChild(fragment)
}