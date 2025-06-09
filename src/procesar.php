<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Resultado de inscripción</title>
    <link rel="stylesheet" href="../public/estilos.css" />
</head>
<body>
    <div class="respuesta">
    <?php
    /*obtenemos los valores del formulario y los capturamos en 
    variables para trabajar en php, usamos tanto trim(  <-evita 
    espacios vacios->  ) como strtolower(pasa todo el texto a 
    minuscula) para facilitar la validacion de datos.
    */
    $nombre=trim($_GET['nombre']);
    $edad=$_GET['edad'];
    $ciudad=strtolower(trim($_GET['ciudad']));
    $departamento=$_GET['departamento'];
    $programa=$_GET['programa'];

    #validar campos vacios antes de la logica para evitar errores

    if (empty($nombre) || empty ($edad) || empty ($ciudad) || empty ($departamento) || empty (
        $programa)) {
            echo "Todos los campos deben llenarse completamente. Porfavor completa el formulario!!";
            exit;
        }

    // aplicamos logica para validar edad del aspirante que no sea menor a 14 años ya que es la edad minima que pide el sena.
    
    if ($edad <= 13) {
        echo "<strong>$nombre</strong> Aún eres muy joven para inscribirte la edad minima es de 14 años.";
        exit;
    }

    // validamos departamento para dar al aspirante el Centro de formacion del SENA segun su departamento.

switch ($departamento) {
    case "Amazonas":
        $sede = "Leticia, SENA Regional Amazonas";
        break;
    case "Antioquia":
        $sede = "Medellín, Complejo El Poblado";
        break;
    case "Arauca":
        $sede = "Arauca, Centro Agroindustrial y Pecuario";
        break;
    case "Atlántico":
        $sede = "Barranquilla, SENA Combarranquilla";
        break;
    case "Bogotá":
        $sede = "Bogotá, Centro de Diseño y Metrología";
        break;
    case "Bolívar":
        $sede = "Cartagena, Centro Multisectorial";
        break;
    case "Boyacá":
        $sede = "Tunja, Centro Minero";
        break;
    case "Caldas":
        $sede = "Manizales, Centro de Automatización Industrial";
        break;
    case "Caquetá":
        $sede = "Florencia, Centro Tecnológico del Amazonas";
        break;
    case "Casanare":
        $sede = "Yopal, Centro Agroindustrial y Empresarial";
        break;
    case "Cauca":
        $sede = "Popayán, Centro de Teleinformática";
        break;
    case "Cesar":
        $sede = "Valledupar, Centro Biotecnológico";
        break;
    case "Chocó":
        $sede = "Quibdó, Centro Agroecológico y Empresarial";
        break;
    case "Córdoba":
        $sede = "Montería, Centro Agropecuario y de Biotecnología";
        break;
    case "Cundinamarca":
        $sede = "Mosquera, Centro Agropecuario";
        break;
    case "Guainía":
        $sede = "Inírida, SENA Regional Guainía";
        break;
    case "Guaviare":
        $sede = "San José del Guaviare, SENA Regional";
        break;
    case "Huila":
        $sede = "Neiva, Centro de la Industria y Servicios";
        break;
    case "La Guajira":
        $sede = "Riohacha, Centro de Energías Alternativas";
        break;
    case "Magdalena":
        $sede = "Santa Marta, Centro Acuícola y Agroindustrial";
        break;
    case "Meta":
        $sede = "Villavicencio, Centro Agroindustrial del Meta";
        break;
    case "Nariño":
        $sede = "Pasto, Producción Limpia";
        break;
    case "Norte de Santander":
        $sede = "Cúcuta, Diseño y Manufactura";
        break;
    case "Putumayo":
        $sede = "Mocoa, SENA Regional";
        break;
    case "Quindío":
        $sede = "Armenia, Centro Agroindustrial";
        break;
    case "Risaralda":
        $sede = "Pereira, Diseño e Innovación Tecnológica";
        break;
    case "San Andrés y Providencia":
        $sede = "San Andrés, SENA Regional";
        break;
    case "Santander":
        $sede = "Bucaramanga, Mantenimiento Integral";
        break;
    case "Sucre":
        $sede = "Sincelejo, Agropecuario de la Sabana";
        break;
    case "Tolima":
        $sede = "Ibagué, Centro Agropecuario La Granja";
        break;
    case "Valle del Cauca":
        $sede = "Cali, Automatización Industrial";
        break;
    case "Vaupés":
        $sede = "Mitú, SENA Regional";
        break;
    case "Vichada":
        $sede = "Puerto Carreño, SENA Regional";
        break;
    default:
        $sede = "Sede no registrada o fuera de cobertura.";
        break;
}

    // validamos para dar mensaje personalizado segun el programa escogido por el aspirante.

switch ($programa) {
    case "TecnicoAgropecuario":
        $programaEscogido= "<strong><em>Interés por el campo y los medios de producción</em></strong>";
        break;
    case "TecnicoAmbiental":
        $programaEscogido="<strong><em>Nuestros recursos naturales estarán más protegidos contigo a bordo!</em></strong>";
        break;
    case "TecnologoSistemas":
        $programaEscogido="<strong><em>Bienvenido Futuro desarrollador de software</em></strong>";
        break;
    case "TecnologoAmbiental":
        $programaEscogido="<strong><em>Cuidaremos nuestro planeta</em></strong>";
        break;
    default:
        $programaEscogido="<strong>Hubo algun error al escoger tu programa de formacion.</strong>";
        break;
}

    // damos mensaje final al usuario usando etiquetas de html para entregar formalmente al usuario.

    echo "<div class='respuesta exito'>";
    echo "<h2>✅ Inscripción exitosa</h2>";
    echo "<p>Hola <strong>$nombre</strong>, tienes <strong>$edad años</strong> y vives en <strong>$ciudad, $departamento</strong>.</p>";
    echo "<p>Has elegido el programa <strong>$programa</strong>: $programaEscogido</p>";
    echo "<p>Puedes asistir a la sede: <strong>$sede</strong>.</p>";
    echo "<p><em>Gracias por tu interés en formarte con el <strong>SENA</strong>. ¡Estamos felices de recibirte!</em></p>";
    echo "</div>";  

    ?>
    </div>
</body>
</html>
