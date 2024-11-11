<!-- application/views/editar.php -->

<div class="container my-5">
    <h1 class="text-center mb-4">Editar Medicamento</h1>
    
    <?php foreach ($producto as $datosEditar): ?>
    <form action="updateProducto" method="post" class="row g-3">
        <input type="hidden" name="id" value="<?= $datosEditar->id; ?>">

        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="<?= $datosEditar->nombre; ?>" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea id="descripcion" name="descripcion"  class="form-control" required><?= $datosEditar->descripcion; ?></textarea>
        </div>

        <div class="col-md-6">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" id="precio" name="precio" value="<?= $datosEditar->precio; ?>" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="stock" class="form-label">Stock</label>
            <input type="text" id="stock" name="stock" value="<?= $datosEditar->stock; ?>" class="form-control" required>
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-success">Editar</button>
            <a href="productos" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
    <?php endforeach; ?>
</div>
