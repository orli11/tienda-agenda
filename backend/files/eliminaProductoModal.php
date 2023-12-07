<!-- Modal para elimina un registro -->
<div class="modal fade" id="eliminaProductoModal" tabindex="-1" aria-labelledby="eliminaProductoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-tittle fs-5" id="eliminaProductoModalLabel"> Eliminar registro </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Deseas eliminar el registro?
            </div>
            <div class="modal-footer">
                <form action="deleteProductos.php" method="post">
                    <input type="hidden" name="id_prod" id="id_prod">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>            
        </div>
    </div>
</div>