<!-- application/views/editar.php -->

<div class="container my-5">
    <h1 class="text-center mb-4">Editar Estudiante</h1>
    
    <?php foreach ($alumno as $datosEditar): ?>
    <form action="update" method="post" class="row g-3">
        <input type="hidden" name="id" value="<?= $datosEditar->id; ?>">

        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="<?= $datosEditar->nombre; ?>" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="paterno" class="form-label">Paterno</label>
            <input type="text" id="paterno" name="paterno" value="<?= $datosEditar->paterno; ?>" class="form-control" required>
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-success">Editar</button>
            <a href="welcome" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
    <?php endforeach; ?>
</div>
