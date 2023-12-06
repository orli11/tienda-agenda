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
        templateProductos.querySelectorAll('td')[4].textContent = producto.facebook
        templateProductos.querySelectorAll('td')[5].textContent = producto.telefono_vendedor
        templateProductos.querySelectorAll('a')[1].href=`backend/files/deleteProductos.php?id_prod=${producto.id_prod}`
        const clone = templateProductos.cloneNode(true)
        fragment.appendChild(clone)
    })
    productosBody.appendChild(fragment)
}


document.addEventListener('DOMContentLoaded', function () {
    var editaModal = new bootstrap.Modal(document.getElementById('editaModal'));

    // Cuando se abre el modal, llenar los campos con los datos correspondientes
    editaModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Botón que activó el modal

        // Obtener los datos de los atributos data-bs-*
        var id = button.getAttribute('data-bs-id');
        var nombreVendedor = button.getAttribute('data-bs-nombre');
        var facebook = button.getAttribute('data-bs-facebook');
        var telefono = button.getAttribute('data-bs-telefono');
        var nombreProd = button.getAttribute('data-bs-nombre-prod');
        var precio = button.getAttribute('data-bs-precio');
        var descripcion = button.getAttribute('data-bs-descripcion');

        // Llenar los campos del modal
        document.getElementById('id').value = id;
        document.getElementById('nombre_vendedor').value = nombreVendedor;
        document.getElementById('facebook').value = facebook;
        document.getElementById('telefono_vendedor').value = telefono;
        document.getElementById('nombre_prod').value = nombreProd;
        document.getElementById('precio').value = precio;
        document.getElementById('descripcion_prod').value = descripcion;
    });
});
