<?php require_once 'includes/header.php'; ?>

<h1>LISTADO DE PERSONAS</h1>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Teléfono</th>
      </tr>
    </thead>
    <tbody>
      <?php

        $bd = new SQLite3('agenda.db');
        

        $results = $bd->query('SELECT * FROM personas;');

        while($row = $results->fetchArray()) { ?>
            <tr>
            <th><?php echo $row['id_persona'] ?></th>
            <th><?php echo $row['nombre'] ?></th>
            <th><?php echo $row['email'] ?></th>
            <th><?php echo $row['telefono'] ?></th>
            </tr>
        <?php } ?>
    </tbody>
  </table>