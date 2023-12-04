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
        templateEvents.querySelectorAll('td')[0].textContent = evento.nombre_con
        templateEvents.querySelectorAll('td')[1].textContent = evento.nombre_pon
        templateEvents.querySelectorAll('td')[2].textContent = evento.especialidad_pon
        templateEvents.querySelectorAll('td')[3].textContent = evento.lugar
        templateEvents.querySelectorAll('td')[4].textContent = evento.fecha
        templateEvents.querySelectorAll('td')[5].textContent = evento.hora
        templateEvents.querySelectorAll('td')[6].textContent = evento.area
        const clone = templateEvents.cloneNode(true)
        fragment.appendChild(clone)
    })
    eventosBody.appendChild(fragment)
}


 


