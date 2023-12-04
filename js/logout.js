const logout = () => {
    sessionStorage.removeItem('token')
    window.location = '/tiendaVendedor.html'
}

const logoutButton = document.querySelector('logoutButton')

logoutButton.addEventListener('DOMContentLoaded', () => {
    logout()
})