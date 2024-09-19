<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Generado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .curriculum {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            width: 600px;
        }
        h1 {
            text-align: center;
        }
        p {
            line-height: 1.6;
        }
        .section-title {
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="curriculum">
        <h1>Curriculum de <?php echo htmlspecialchars($_POST['nombre']); ?></h1>

        <p><span class="section-title">Fecha de Nacimiento:</span> <?php echo htmlspecialchars($_POST['fecha_nacimiento']); ?></p>
        <p><span class="section-title">Ocupación:</span> <?php echo htmlspecialchars($_POST['ocupacion']); ?></p>
        <p><span class="section-title">Contacto:</span> <?php echo htmlspecialchars($_POST['contacto']); ?></p>
        <p><span class="section-title">Nacionalidad:</span> <?php echo htmlspecialchars($_POST['nacionalidad']); ?></p>
        <p><span class="section-title">Nivel de Inglés:</span> <?php echo htmlspecialchars($_POST['nivel_ingles']); ?></p>

        <p><span class="section-title">Lenguajes de Programación:</span>
            <?php
            if(!empty($_POST['lenguajes'])) {
                echo implode(', ', $_POST['lenguajes']);
            } else {
                echo 'No seleccionó ningún lenguaje';
            }
            ?>
        </p>

        <p><span class="section-title">Aptitudes:</span> <?php echo htmlspecialchars($_POST['aptitudes']); ?></p>

        <p><span class="section-title">Habilidades:</span>
            <?php
            if(!empty($_POST['habilidades'])) {
                echo implode(', ', $_POST['habilidades']);
            } else {
                echo 'No seleccionó ninguna habilidad';
            }
            ?>
        </p>

        <p><span class="section-title">Perfil:</span><br><?php echo nl2br(htmlspecialchars($_POST['perfil'])); ?></p>
    </div>
</body>
</html>