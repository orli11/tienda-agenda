const logout = () => {
    sessionStorage.removeItem('token')
    window.location = '/tiendaVendedor.php'
}

const logoutButton = document.querySelector('logoutButton')

logoutButton.addEventListener('DOMContentLoaded', () => {
    logout()
})