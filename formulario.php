<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Curriculum</title>
</head>
<body>
    <h1>Formulario de Curriculum</h1>
    <form action="curriculum.php" method="POST">
        <label for="nombre">Nombre y Apellidos:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

        <label for="ocupacion">Ocupación:</label>
        <input type="text" id="ocupacion" name="ocupacion" required><br><br>

        <label for="contacto">Contacto (Teléfono o Email):</label>
        <input type="text" id="contacto" name="contacto" required><br><br>

        <label for="nacionalidad">Nacionalidad:</label>
        <select id="nacionalidad" name="nacionalidad" required>
            <option value="Argentina">Argentina</option>
            <option value="Chile">Chile</option>
            <option value="México">México</option>
            <option value="España">España</option>
            <option value="Colombia">Colombia</option>
            <option value="Perú">Perú</option>
        </select><br><br>

        <label for="nivel_ingles">Nivel de Inglés:</label><br>
        <input type="radio" id="basico" name="nivel_ingles" value="Básico" required>
        <label for="basico">Básico</label><br>
        <input type="radio" id="intermedio" name="nivel_ingles" value="Intermedio">
        <label for="intermedio">Intermedio</label><br>
        <input type="radio" id="avanzado" name="nivel_ingles" value="Avanzado">
        <label for="avanzado">Avanzado</label><br>
        <input type="radio" id="fluido" name="nivel_ingles" value="Fluido">
        <label for="fluido">Fluido</label><br><br>

        <label for="lenguajes">Lenguajes de Programación:</label>
        <select id="lenguajes" name="lenguajes[]" multiple required>
            <option value="Python">Python</option>
            <option value="JavaScript">JavaScript</option>
            <option value="C++">C++</option>
            <option value="Java">Java</option>
            <option value="PHP">PHP</option>
        </select><br><br>

        <label for="aptitudes">Aptitudes:</label>
        <input type="text" list="aptitudes_list" id="aptitudes" name="aptitudes" required>
        <datalist id="aptitudes_list">
            <option value="Trabajo en equipo">
            <option value="Comunicación">
            <option value="Resolución de problemas">
            <option value="Liderazgo">
            <option value="Adaptabilidad">
        </datalist><br><br>

        <label>Habilidades:</label><br>
        <input type="checkbox" id="habilidad1" name="habilidades[]" value="Gestión de proyectos">
        <label for="habilidad1">Gestión de Proyectos</label><br>
        <input type="checkbox" id="habilidad2" name="habilidades[]" value="Desarrollo Web">
        <label for="habilidad2">Desarrollo Web</label><br>
        <input type="checkbox" id="habilidad3" name="habilidades[]" value="Análisis de Datos">
        <label for="habilidad3">Análisis de Datos</label><br><br>

        <label for="perfil">Perfil:</label><br>
        <textarea id="perfil" name="perfil" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>