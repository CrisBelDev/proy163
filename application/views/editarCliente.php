<!-- application/views/editar.php -->

<div class="container my-5">
    <h1 class="text-center mb-4">Editar Cliente</h1>
    
    <?php foreach ($cliente as $datosEditar): ?>
    <form action="updateCliente" method="post" class="row g-3">
        <input type="hidden" name="id" value="<?= $datosEditar->id; ?>">

        <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="<?= $datosEditar->nombre; ?>" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="paterno" class="form-label">paterno</label>
            <textarea id="paterno" name="paterno"  class="form-control" ><?= $datosEditar->paterno; ?></textarea>
        </div>

        <div class="col-md-6">
            <label for="materno" class="form-label">materno</label>
            <input type="text" id="materno" name="materno" value="<?= $datosEditar->materno; ?>" class="form-control" >
        </div>

        <div class="col-md-6">
            <label for="ci" class="form-label">ci</label>
            <input type="text" id="ci" name="ci" value="<?= $datosEditar->ci; ?>" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label for="nit" class="form-label">nit</label>
            <input type="text" id="nit" name="nit" value="<?= $datosEditar->nit; ?>" class="form-control" required>
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-success">Editar</button>
            <a href="cliente" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
    <?php endforeach; ?>
</div>
