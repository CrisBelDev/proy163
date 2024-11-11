<!-- application/views/productos.php -->
<h1>Registrar Medicamento</h1>

<!-- Formulario de Registro de Producto -->
<div class="card bg-light shadow-lg p-4">
    <form action="<?= base_url('guardar_producto') ?>" method="post" class="row g-3">
        
        <!-- Campo Nombre -->
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre del Medicamento</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del producto" required>
        </div>
        
        <!-- Campo Descripción -->
        <div class="col-md-6">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripción del producto" rows="3" required></textarea>
        </div>
        
        <!-- Campo Precio -->
        <div class="col-md-4">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" id="precio" class="form-control" placeholder="Precio del producto" required>
        </div>
        
        <!-- Campo Stock -->
        <div class="col-md-4">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control" placeholder="Cantidad en stock" required>
        </div>

        <!-- Botón de Enviar -->
        <div class="col-md-4 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">Registrar Producto</button>
        </div>

    </form>
</div>

<hr>

<!-- Tabla de Productos -->
<div class="card bg-light shadow-lg p-4 mt-4">
    <h2>Lista de Productos</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
         
                <?php foreach ($Tproducto as $produc): ?>
                    <tr>
                        <td><?= $produc->id ?></td>
                        <td><?= $produc->nombre ?></td>
                        <td><?= $produc->descripcion ?></td>
                        <td><?= $produc->precio ?></td>
                        <td><?= $produc->stock ?></td>
                        <td>
                            <form action="editarProducto" method="post">
                                <input type="hidden" name="id" value="<?= $produc->id ?>">
                                <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="eliminarProducto" method="post">
                                <input type="hidden" name="id" value="<?= $produc->id ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            
        </tbody>
    </table>
</div>
