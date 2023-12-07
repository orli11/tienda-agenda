<div class="modal fade" id="editaProductoModal" tabindex="-1" aria-labelledby="editarProductoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editaModalLabel">
          Editar Producto
        </h1>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="actualizarProducto.php" method="post">
          <!-- Campos de edición -->
          <div class="col-md-12 form-outline mb-4">
            <input type="text" id="nombre_prod" name="nombre_prod" class="form-control form-control-lg" placeholder="Nombre del producto" readonly />
            <label class="form-label" for="nombre_prod">Nombre del producto</label>
          </div>

          <div class="col-md-12 form-outline mb-4">
            <input type="text" id="precio" name="precio" class="form-control form-control-lg" placeholder="Precio" />
            <label class="form-label" for="precio">Precio del producto</label>
          </div>

          <div class="col-md-12 form-outline mb-4">
            <input type="text" id="descripcion_prod" name="descripcion_prod" class="form-control form-control-lg" placeholder="Descripción del producto" />
            <label class="form-label" for="descripcion_prod">Descripción del producto</label>
          </div>

          <div class="col-md-12 form-outline mb-4">
            <input type="text" id="nombre_vendedor" name="nombre_vendedor" class="form-control form-control-lg" placeholder="Nombre del vendedor" readonly />
            <label class="form-label" for="nombre_vendedor">Nombre del vendedor</label>
          </div>

          <div class="col-md-12 form-outline mb-4">
            <input type="text" id="facebook" name="facebook" class="form-control form-control-lg" placeholder="Facebook del vendedor" readonly />
            <label class="form-label" for="facebook">Facebook del vendedor</label>
          </div>

          <div class="col-md-12 form-outline mb-4">
            <input type="text" id="edita_telefono_vendedor" name="telefono_vendedor" class="form-control form-control-lg" placeholder="Teléfono del vendedor" />
            <label class="form-label" for="telefono_vendedor">Teléfono del vendedor</label>
          </div>

          <!-- Botones de acción -->
          <div class="pt-1 mb-3 text-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>