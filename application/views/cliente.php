
<h1>Registrar Cliente</h1>

<!-- Formulario de Registro de Cliente -->
<div class="card bg-light shadow-lg p-4">
    <form action="<?= base_url('guardar_cliente') ?>" method="post" class="row g-3">
        
        <!-- Campo Nombre -->
        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre del Cliente</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
        </div>
        
        <!-- Campo Descripción -->
        <div class="col-md-6">
            <label for="paterno" class="form-label">Paterno</label>
            <input type="text" name="paterno" id="paterno" class="form-control" placeholder="paterno">
        </div>

        <div class="col-md-6">
            <label for="materno" class="form-label">Materno</label>
            <input type="text" name="materno" id="materno" class="form-control" placeholder="materno">
        </div>
        
        <div class="col-md-6">
            <label for="ci" class="form-label">C.I</label>
            <input type="text" name="ci" id="ci" class="form-control" placeholder="ci">
        </div>

        <div class="col-md-6">
            <label for="nit" class="form-label">NIT</label>
            <input type="text" name="nit" id="nit" class="form-control" placeholder="nit">
        </div>
        

        <!-- Botón de Enviar -->
        <div class="col-md-4 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">Registrar Cliente</button>
        </div>

    </form>
</div>

<hr>

<!-- Tabla de Clientes -->
<div class="container my-5">
        <h1 class="text-center mb-4">Lista de Clientes</h1>
        <table id="miTablaClientes" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>paterno</th>
                <th>materno</th>
                <th>ci</th>
                <th>nit</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($Tcliente as $datos): ?>
                    <tr>
                        <td><?= $datos->id ?></td>
                        <td><?= $datos->nombre ?></td>
                        <td><?= $datos->paterno ?></td>
                        <td><?= $datos->materno ?></td>
                        <td><?= $datos->ci ?></td>
                        <td><?= $datos->nit ?></td>
                        <td>
                            <form action="editarCliente" method="post">
                                <input type="hidden" name="id" value="<?= $datos->id ?>">
                                <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="eliminarCliente" method="post">
                                <input type="hidden" name="id" value="<?= $datos->id ?>">
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
        $('#miTablaClientes').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
            },
            dom: 'Bfrtip',
            buttons: ['copy', 'excel', 'pdf', 'print']
        });
    });
    </script>