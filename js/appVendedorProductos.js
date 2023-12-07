const productosBody = document.getElementById('productosBody')
const templateProductos = document.getElementById('templateProductos').content 
const fragment = document.createDocumentFragment()
const eliminaProductoModal = document.getElementById('eliminaProductoModal')
const editaProductoModal = document.getElementById('editaProductoModal')
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

function eliminarProducto(id_prod) {
    if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {

      $.ajax({
        url: 'deleteProductos.php',
        type: 'POST',
        data: { id: id_prod },
        success: function(response) {
          // Manejar la respuesta del servidor
          console.log(response);

          // Recargar la página o actualizar la lista de productos después de eliminar
          location.reload();
        },
        error: function(error) {
          console.error('Error al eliminar el producto:', error);
        }
      });
    }
  }


    editaProductoModal.addEventListener('hide.bs.modal', (event) => {
    editaProductoModal.querySelector('modal-body #nombre_vendedor').value = ''
    editaProductoModal.querySelector('modal-body #facebook').value = ''
    editaProductoModal.querySelector('modal-body #telefono_vendedor').value = ''
    editaProductoModal.querySelector('modal-body #nombre_prod').value = ''
    editaProductoModal.querySelector('modal-body #precio').value = ''
    editaProductoModal.querySelector('modal-body #descripcion_prod').value = ''
})

editaProductoModal.addEventListener('shown.bs.modal', (event) => {
    let button = event.relatedTarget 
    let id_prod = button.getAttribute('data-bs-id_prod')

    let inputId_prod= editaProductoModal.querySelector('.modal-body #id_prod')
    let inputNombre_vendedor = editaProductoModal.querySelector('.modal-body #nombre_vendedor')
    let inputFacebook = editaProductoModal.querySelector('.modal-body #facebook')
    let inputTelefono_vendedor = editaProductoModal.querySelector('.modal-body #telefono_vendedor')
    let inputNombre_prod = editaProductoModal.querySelector('.modal-body #nombre_prod')
    let inputPrecio = editaProductoModal.querySelector('.modal-body #precio')
    let inputDescripcion_prod = editaProductoModal.querySelector('.modal-body #descripcion_prod')


    let url = 'productos.php'
    let formData = new FormData();
    formData.append('id_prod', id_prod) 

    fetch(url, {
        method: 'POST',
        body: formData,
    }).then( async res => await res.json())
    .then(prod => {
        inputId_prod.value = prod.id_prod
        inputNombre_vendedor.value = prod.nombre_vendedor 
        inputFacebook.value = prod.facebook
        inputTelefono_vendedor.value = prod.telefono_vendedor
        inputNombre_prod.value = prod.nombre_prod
        inputPrecio.value = prod.precio
        inputDescripcion_prod.value = prod.descripcion_prod
    })
    .catch(err => {
        console.log('@@@@ error => ', err)
    })
})

function editaProducto(id_prod) {
    // Aquí puedes abrir la ventana modal de edición o redirigir a la página de edición con el ID del producto
    // Por ejemplo, podrías utilizar una ventana modal Bootstrap

    // Redirigir a la página de edición (ejemplo)
    window.location.href = 'updateProducto.php?id_prod=' + id_prod;
  }