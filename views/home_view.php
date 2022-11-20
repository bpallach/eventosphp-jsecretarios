<?php

// echo var_dump($eventos);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descripción corta</th>
                <th>Asistentes</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($events as $event) : ?>
                <tr>
                    <td><?php echo $event['Titulo']; ?></td>
                    <td><?php echo $event['Descripcion_corta']; ?></td>
                    <td><?php echo $event['Num_asistentes']; ?></td>
                    <td><?php echo $event['Fecha']; ?></td>
                    <td><?php echo $event['Hora']; ?></td>
                    <td><a href="../controllers/modify_event_controller.php?id=<?php echo $event['Id_acto'];?>">Modificar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>