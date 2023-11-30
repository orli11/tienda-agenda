const productosBody = document.getElementById('productosBody')
const templateProductos = document.getElementById('templateProductos').content 
const fragment = document.createDocumentFragment()

let productos 

document.addEventListener('DOMContentLoaded', () => {
    loadProductos()
}) 

const loadProductos = () => {
    fetch('backend/files/productos.php')
    .then(async(res) => {
        productos = await res.json() 
        if(productos.length > 0) {
            creaProductos()
        }
    }) 
    .catch((error) => {
        console.log('@@@@ error ', error )
    })
}

const creaProductos = () => {
    productos.forEach((producto) => {
        templateProductos.querySelectorAll('td')[0].textContent = producto.nombre_prod
        templateProductos.querySelectorAll('td')[1].textContent = producto.precio
        templateProductos.querySelectorAll('td')[2].textContent = producto.descripcion_prod
        templateProductos.querySelectorAll('td')[3].textContent = producto.nombre_vendedor
        templateProductos.querySelectorAll('a')[1].href=`backend/files/deleteProductos.php?id_prod=${producto.id_prod}`
        const clone = templateProductos.cloneNode(true)
        fragment.appendChild(clone)
    })
    productosBody.appendChild(fragment)
}