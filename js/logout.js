const logout = () => {
    sessionStorage.removeItem('token')
    window.location = '/tiendaCliente.html'
}

const logoutButton = document.querySelector('logoutButton')

logoutButton.addEventListener('DOMContentLoaded', () => {
    logout()
})