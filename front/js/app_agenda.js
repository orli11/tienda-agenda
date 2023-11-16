const datos = document.getElementById('datos')
const templateDatos = document.getElementById('template-datos').content
const fragment = document.createDocumentFragment()
const btnRegistrar = document.getElementById('btnRegistrar')


document.addEventListener('DOMContentLoaded', () => {
    loadData()
})

btnRegistrar.addEventListener('click', (e) => {
    e.preventDefault
    sendData()
}) 

const sendData = () => {
    const nevento = document.getElementById('nevento').value
    const nponente = document.getElementById('nponente').value
    const lugar = document.getElementById('lugar').value
    const dia = document.getElementById('dia').value
    const hora = document.getElementById('hora').value
    const fecha = document.getElementById('fecha').value
    const area = document.getElementById('area').value
    const tema = document.getElementById('tema').value
}
