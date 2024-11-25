<!-- application/views/welcome_message.php -->

<div class="container my-5">
    <h1 class="text-center mb-4">Gestión de Estudiantes</h1>
    
    <!-- Formulario -->
	<form action="guardar" method="post" class="row g-3 mb-5">
		<div class="card bg-secondary shadow-sm p-4 text-white">
			<div class="card-body">
				<h5 class="card-title text-center mb-4">Registrar Estudiante</h5>
				
				<div class="mb-3">
					<label for="nombre" class="form-label">Nombre</label>
					<input type="text" name="nombre" id="nombre" class="form-control form-control-lg" placeholder="Ingresa el nombre" required>
				</div>

				<div class="mb-3">
					<label for="paterno" class="form-label">Apellido Paterno</label>
					<input type="text" name="paterno" id="paterno" class="form-control form-control-lg" placeholder="Ingresa el apellido paterno" required>
				</div>

				<div class="text-center">
					<button type="submit" class="btn btn-success btn-lg w-100">Registrar</button>
				</div>
			</div>
		</div>
	</form>



    <div class="container my-5">
        <h1 class="text-center mb-4">Lista de usuarios</h1>
        <table id="miTabla" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Paterno</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($datos as $data): ?>
            <tr>
                <td scope="row"><?= $data->id ?></td>
                <td><?= $data->nombre ?></td>
                <td><?= $data->paterno ?></td>
                <td>
                    <form action="editar" method="post">
                        <input type="hidden" name="id" value="<?= $data->id ?>">
                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </form>
                </td>
                <td>
                    <form action="eliminar" method="post">
                        <input type="hidden" name="id" value="<?= $data->id ?>">
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
        $('#miTabla').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
            },
            dom: 'Bfrtip',
            buttons: ['copy', 'excel', 'pdf', 'print']
        });
    });
    </script>
</div>
