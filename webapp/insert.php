<?php require_once 'includes/header.php'; ?>

<h1>INSERTAR NUEVAS PERSONAS</h1>
<form method="GET" action="save_person.php">
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Introduce nombre">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Introduce email">
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" name="telefono" placeholder="Introduce número telefonico">
    </div>
    <div class="form-group">
        <div class="col-sm-12 text-center">
            <button class="btn btn-primary" name="save_person" type= "submit">Insert</button>
        </div>
    </div><br>
</form>

<?php require_once 'includes/footer.php'; ?>