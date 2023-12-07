const productosBody = document.getElementById('productosBody')
const templateProductos = document.getElementById('templateProductos').content 
const fragment = document.createDocumentFragment()
const eliminaProductoModal = document.getElementById('eliminaProductoModal')
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
    // Pedir confirmación al usuario
    var confirmacion = prompt('¿Estás seguro de que deseas eliminar este producto? Ingresa "SI" para confirmar.');
  
    // Verificar la respuesta del usuario
    if (confirmacion === 'SI') {
      // El usuario confirmó la eliminación
  
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
    } else {
      // El usuario canceló la eliminación
      console.log('Eliminación cancelada por el usuario.');
    }
  }
  


   