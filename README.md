# Formulario de Registro de Aprendices

Este proyecto fue desarrollado por Omar Yesid Méndez Rodríguez 
como parte del proceso formativo en el programa Tecnólogo en 
Análisis y Desarrollo de Software del SENA. 
Su propósito es demostrar de forma práctica el uso conjunto de 
tecnologías fundamentales del desarrollo web, incluyendo HTML, 
CSS, JavaScript y PHP, aplicadas en un sistema funcional.

## Descripción general

Se trata de un formulario web que permite registrar los datos 
básicos de un aprendiz. La aplicación valida los datos tanto 
del lado del cliente (JavaScript + HTML5) como del servidor 
(PHP), muestra un mensaje personalizado en función de la edad 
del aspirante, y sugiere una sede del SENA según el departamento 
ingresado.

El desarrollo ha sido estructurado de forma modular, con una separación 
clara entre presentación (HTML y CSS), interactividad (JavaScript) y procesamiento lógico (PHP).

## Tecnologías aplicadas

- **HTML5**: estructura semántica del formulario.
- **CSS**: diseño visual con enfoque minimalista y profesional.
- **JavaScript**: validación básica, control del formulario y presentación de un resumen antes del envío.
- **PHP**: procesamiento de datos recibidos, validación en servidor, condicionales y respuesta dinámica.
- **Git y GitHub**: control de versiones y publicación del proyecto.

## Funcionalidades del sistema

- Validación de campos obligatorios y formatos desde HTML y JavaScript.
- Presentación previa (resumen) de los datos antes de ser enviados.
- Evaluación de la edad para mostrar mensajes personalizados.
- Asignación automática de una sede del SENA según el departamento del aprendiz, utilizando una estructura `switch` en PHP.
- Lógica clara, código comentado y estructura de carpetas adecuada para proyectos web.

## Estructura del proyecto

registro-aprendices-php/public/index.html→Formulario y estructura visual├── estilos.css→Estilos del formulario└── 
script.js→Validaciones y vista previa├── src/└── procesar.php→Procesamiento y lógica del servidor.

## Cómo probar el proyecto localmente

1. Clonar o descargar el repositorio.
2. Ubicar la carpeta `registro-aprendices-php` dentro de `htdocs/` si estás usando XAMPP.
3. Asegurarse de que el servidor Apache esté activo.
4. Ingresar desde el navegador a:  
   `http://localhost/registro-aprendices-php/public/index.html`
5. Completar y enviar el formulario para ver el resultado procesado por PHP.

**Autor**

Omar Yesid Méndez Rodríguez
Aprendiz del programa Tecnólogo en Análisis y Desarrollo de Software  
Centro Agro-Pecuario y Tecnológico Multisectorial  
SENA Regional La Dorada – Caldas  
GitHub: [@OmarMendezR](https://github.com/OmarMendezR)

## Estado del proyecto

Versión funcional estable.  
Próximas mejoras potenciales:

- Almacenamiento de los registros en archivos o bases de datos.
- Validación más robusta del lado del cliente y del servidor.
- Mejora en el diseño para dispositivos móviles (responsive design).
- Incorporación de sesiones y/o autenticación.
