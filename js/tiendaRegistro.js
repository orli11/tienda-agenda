const checkVendedor = document.getElementById('checkVendedor')
const checkCliente = document.getElementById('checkCliente')

checkVendedor.addEventListener('change', () => {
    redirigirSiElige(checkVendedor, './tiendaVendedor.html')
})
checkCliente.addEventListener('change', () => {
    redirigirSiElige(checkCliente, './tiendaCliente.html')
})

const redirigirSiElige = (check, pagina) => {
    if (check.checked) {
        window.location.href = pagina;
    }
}
