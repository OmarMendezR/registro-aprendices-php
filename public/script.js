// creamos la funcion y obtenemos los valores dentro del formulario de registro del aprendiz

function mostrarResumen() {
    const nombre = document.getElementById("nombre").value;
    const edad = document.getElementById("edad").value;
    const ciudad = document.getElementById("ciudad").value; // Corregido aquí
    const departamento = document.getElementById("departamento").value;
    const programa = document.getElementById("programa").value;

    // mostrar mensaje en el formulario de resumen de datos a enviar

    document.getElementById("resumen").innerHTML = `
        <p><strong>Revisa tus datos:</strong></p>
        <ul>
            <li><strong>Nombre</strong>: ${nombre}</li>
            <li><strong>Edad</strong>: ${edad}</li>
            <li><strong>Ciudad</strong>: ${ciudad}</li>
            <li><strong>Departamento</strong>: ${departamento}</li>
            <li><strong>Programa</strong>: ${programa}</li>
        </ul>`;
}

