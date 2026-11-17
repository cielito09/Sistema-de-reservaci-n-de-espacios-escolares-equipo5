event.preventDefault();

let usuario = document.getElementById("usuario").value.trim();
let matricula = document.getElementById("matricula").value.trim();
let equipo = document.getElementById("equipo").value;
let fecha = document.getElementById("fecha").value;
let horaInicio = document.getElementById("horaInicio").value;
let horaFin = document.getElementById("horaFin").value;


if (usuario === "" || matricula === "" || equipo === "" ||
    fecha === "" || horaInicio === "" || horaFin === "") {

    alert("Error: Todos los campos son obligatorios.");
    return;
}

if (!/^[0-9]+$/.test(matricula)) {
    alert("Error: La matrícula solo debe contener números.");
    return;
}

let fechaSeleccionada = new Date(fecha + "T00:00:00");
let fechaActual = new Date();

fechaActual.setHours(0, 0, 0, 0);

if (fechaSeleccionada < fechaActual) {
    alert("Error: No puedes reservar en una fecha pasada.");
    return;
}

if (horaInicio >= horaFin) {
    alert("Error: La hora de inicio debe ser menor que la hora final.");
    return;
}


alert("¡Reservación registrada correctamente!");

document.getElementById("formulario").reset();

});
