<h1>Realizar Venta</h1>

<!-- Buscador de Cliente -->
<div class="card bg-light shadow-lg p-4 mb-4">
    <h2>Buscar Cliente</h2>
    <form action="<?= base_url('buscarCliente') ?>" method="post" class="row g-3">
        <div class="col-md-8">
            <label for="buscar_ci" class="form-label">C.I. del Cliente</label>
            <input type="text" name="buscar_ci" id="buscar_ci" class="form-control" placeholder="Ingrese el C.I. del cliente" required>
        </div>
        <div class="col-md-4 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">Buscar</button>
        </div>
    </form>

    <?php if (isset($cliente)): ?>
        <?php if ($cliente): ?>
            <div class="alert alert-success mt-3">
                Cliente encontrado: <strong><?= $cliente->nombre . " " . $cliente->paterno . " " . $cliente->materno ?></strong>
            </div>
        <?php else: ?>
            <div class="alert alert-danger mt-3">
                Cliente no encontrado. <a href="<?= base_url('registrocliente') ?>" class="alert-link">Registre al cliente aquí</a>.
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>

<div class="container my-5">
        <h1 class="text-center mb-4">Lista de Productos</h1>
        <table id="miTablaProductos" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th></th>
                    <th></th>
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

    <script>
        // Inicializar DataTables con Bootstrap 5
        $(document).ready(function () {
        $('#miTablaProductos').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
            },
            dom: 'Bfrtip',
            buttons: ['copy', 'excel', 'pdf', 'print']
        });
    });
    </script>



