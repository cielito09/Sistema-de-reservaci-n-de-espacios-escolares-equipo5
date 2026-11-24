
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservación de Espacios Escolares</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

:root {
    --fondo: #f4f6fb;
    --panel: #ffffff;
    --texto: #20243a;
    --secundario: #737991;
    --principal: #6258d9;
    --borde: #e5e7ef;
}

body {
    background: var(--fondo);
    color: var(--texto);
    min-height: 100vh;
}

body.oscuro {
    --fondo: #151827;
    --panel: #202438;
    --texto: #f2f3fa;
    --secundario: #aeb4ca;
    --borde: #343a52;
}

.contenedor {
    display: flex;
    min-height: 100vh;
}

.sidebar {
    width: 245px;
    background: #191d32;
    color: white;
    padding: 25px 18px;
    position: fixed;
    height: 100vh;
}

.logo {
    font-size: 19px;
    font-weight: bold;
    margin-bottom: 40px;
    padding: 8px;
}

.logo span {
    color: #a49cff;
}

.menu-titulo {
    color: #9298b2;
    font-size: 11px;
    margin: 20px 10px 12px;
    text-transform: uppercase;
}

.menu a {
    display: block;
    color: #c8cce0;
    text-decoration: none;
    padding: 13px;
    border-radius: 9px;
    margin-bottom: 7px;
    cursor: pointer;
}

.menu a:hover,
.menu a.activo {
    background: #343957;
    color: white;
}

.contenido {
    margin-left: 245px;
    width: calc(100% - 245px);
    padding: 28px 35px;
}

.topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
    gap: 15px;
}

.topbar h1 {
    font-size: 25px;
}

.topbar p {
    color: var(--secundario);
    margin-top: 6px;
    font-size: 14px;
}

button {
    border: none;
    cursor: pointer;
    border-radius: 8px;
    padding: 11px 16px;
    font-weight: bold;
}

.btn-principal {
    background: var(--principal);
    color: white;
}

.btn-principal:hover {
    background: #5147c5;
}

.btn-secundario {
    background: var(--borde);
    color: var(--texto);
}

.tarjetas-estadisticas {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
    margin-bottom: 25px;
}

.estadistica {
    background: var(--panel);
    padding: 22px;
    border: 1px solid var(--borde);
    border-radius: 13px;
}

.estadistica p {
    color: var(--secundario);
    font-size: 13px;
    margin-bottom: 12px;
}

.estadistica h2 {
    font-size: 28px;
}

.panel {
    background: var(--panel);
    border: 1px solid var(--borde);
    padding: 22px;
    border-radius: 13px;
    margin-bottom: 22px;
}

.panel h2 {
    font-size: 18px;
    margin-bottom: 18px;
}

.controles {
    display: flex;
    gap: 12px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

input, select, textarea {
    background: var(--panel);
    color: var(--texto);
    border: 1px solid var(--borde);
    border-radius: 8px;
    padding: 12px;
    width: 100%;
    outline: none;
}

input:focus, select:focus, textarea:focus {
    border-color: var(--principal);
}

.controles input {
    flex: 1;
    min-width: 200px;
}

.controles select {
    width: 180px;
}

.espacios {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 17px;
}

.espacio {
    border: 1px solid var(--borde);
    border-radius: 12px;
    padding: 18px;
}

.espacio-codigo {
    background: #eeedff;
    color: #5147c5;
    width: 42px;
    height: 42px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin-bottom: 15px;
}

.espacio h3 {
    margin-bottom: 8px;
    font-size: 17px;
}

.espacio p {
    color: var(--secundario);
    font-size: 13px;
    margin-bottom: 7px;
}

.espacio button {
    margin-top: 12px;
    width: 100%;
}

.formulario {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

.campo label {
    display: block;
    font-size: 13px;
    margin-bottom: 8px;
    font-weight: bold;
}

.campo.completo {
    grid-column: 1 / -1;
}

.formulario button {
    grid-column: 1 / -1;
}

.tabla-contenedor {
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    min-width: 550px;
}

th, td {
    text-align: left;
    padding: 14px 12px;
    border-bottom: 1px solid var(--borde);
    font-size: 13px;
}

th {
    color: var(--secundario);
}

.estado {
    color: #16845b;
    background: #e1f7ed;
    padding: 6px 10px;
    border-radius: 20px;
    font-size: 12px;
}

.vacio {
    text-align: center;
    color: var(--secundario);
    padding: 30px;
}

.seccion {
    display: none;
}

.seccion.activa {
    display: block;
}

.configuracion {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
}

.mensaje {
    position: fixed;
    right: 25px;
    bottom: 25px;
    background: #242943;
    color: white;
    padding: 14px 20px;
    border-radius: 9px;
    display: none;
    z-index: 10;
}

@media(max-width: 800px) {
    .sidebar {
        width: 190px;
    }

    .contenido {
        margin-left: 190px;
        width: calc(100% - 190px);
        padding: 22px;
    }

    .tarjetas-estadisticas {
        grid-template-columns: 1fr;
    }

    .espacios {
        grid-template-columns: 1fr;
    }
}

@media(max-width: 600px) {
    .contenedor {
        display: block;
    }

    .sidebar {
        position: relative;
        width: 100%;
        height: auto;
    }

    .logo {
        margin-bottom: 15px;
    }

    .menu {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }

    .menu a {
        margin: 0;
        padding: 10px;
        font-size: 12px;
    }

    .menu-titulo {
        display: none;
    }

    .contenido {
        margin: 0;
        width: 100%;
        padding: 18px;
    }

    .topbar {
        align-items: flex-start;
        flex-direction: column;
    }

    .formulario {
        grid-template-columns: 1fr;
    }

    .campo.completo,
    .formulario button {
        grid-column: auto;
    }
}
</style>
</head>

<body>

<div class="contenedor">

<aside class="sidebar">
    <div class="logo">ESPACIOS<span> ESCOLARES</span></div>

    <p class="menu-titulo">Menú principal</p>

    <nav class="menu">
        <a class="activo" onclick="navegar('inicio', this)">Inicio</a>
        <a onclick="navegar('espacios', this)">Espacios</a>
        <a onclick="navegar('reservas', this)">Mis reservas</a>
        <a onclick="navegar('configuracion', this)">Configuración</a>
    </nav>
</aside>

<main class="contenido">

<section id="inicio" class="seccion activa">
    <div class="topbar">
        <div>
            <h1>Panel principal</h1>
            <p>Bienvenido al sistema de reservación escolar.</p>
        </div>
        <button class="btn-principal" onclick="navegar('espacios')">Nueva reservación</button>
    </div>

    <div class="tarjetas-estadisticas">
        <div class="estadistica">
            <p>Espacios disponibles</p>
            <h2 id="totalEspacios">4</h2>
        </div>

        <div class="estadistica">
            <p>Mis reservaciones</p>
            <h2 id="totalReservas">0</h2>
        </div>

        <div class="estadistica">
            <p>Reservaciones de hoy</p>
            <h2 id="reservasHoy">0</h2>
        </div>
    </div>

    <div class="panel">
        <h2>Accesos rápidos</h2>
        <p style="color:var(--secundario); margin-bottom:18px;">
            Consulta los espacios disponibles o administra tus reservaciones.
        </p>
        <button class="btn-principal" onclick="navegar('espacios')">Consultar espacios</button>
        <button class="btn-secundario" onclick="navegar('reservas')">Ver reservaciones</button>
    </div>

    <div class="panel">
        <h2>Últimas reservaciones</h2>
        <div id="ultimasReservas"></div>
    </div>
</section>

<section id="espacios" class="seccion">
    <div class="topbar">
        <div>
            <h1>Espacios escolares</h1>
            <p>Consulta y selecciona el espacio que necesitas.</p>
        </div>
    </div>

    <div class="panel">
        <div class="controles">
            <input type="text" id="buscarEspacio" placeholder="Buscar espacio..." oninput="mostrarEspacios()">

            <select id="filtroTipo" onchange="mostrarEspacios()">
                <option value="">Todas las categorías</option>
                <option value="Aula">Aulas</option>
                <option value="Laboratorio">Laboratorios</option>
                <option value="Sala">Salas</option>
                <option value="Deportivo">Deportivos</option>
            </select>
        </div>

        <div class="espacios" id="listaEspacios"></div>
    </div>
</section>

<section id="reservas" class="seccion">
    <div class="topbar">
        <div>
            <h1>Mis reservaciones</h1>
            <p>Administra las reservaciones que has registrado.</p>
        </div>
    </div>

    <div class="panel">
        <h2>Registrar reservación</h2>

        <form class="formulario" onsubmit="crearReserva(event)">
            <div class="campo completo">
                <label>Espacio escolar</label>
                <select id="espacioSeleccionado" required>
                    <option value="">Selecciona un espacio</option>
                </select>
            </div>

            <div class="campo">
                <label>Fecha</label>
                <input type="date" id="fechaReserva" required>
            </div>

            <div class="campo">
                <label>Horario</label>
                <select id="horarioReserva" required>
                    <option value="">Selecciona un horario</option>
                    <option>07:00 - 08:00</option>
                    <option>08:00 - 09:00</option>
                    <option>09:00 - 10:00</option>
                    <option>10:00 - 11:00</option>
                    <option>11:00 - 12:00</option>
                    <option>12:00 - 13:00</option>
                    <option>13:00 - 14:00</option>
                    <option>14:00 - 15:00</option>
                </select>
            </div>

            <div class="campo completo">
                <label>Motivo de la reservación</label>
                <textarea id="motivoReserva" rows="3" placeholder="Describe brevemente el motivo..." required></textarea>
            </div>

            <button class="btn-principal" type="submit">Registrar reservación</button>
        </form>
    </div>

    <div class="panel">
        <h2>Reservaciones registradas</h2>
        <div class="tabla-contenedor">
            <table>
                <thead>
                    <tr>
                        <th>Espacio</th>
                        <th>Fecha</th>
                        <th>Horario</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="tablaReservas"></tbody>
            </table>
        </div>
    </div>
</section>

<section id="configuracion" class="seccion">
    <div class="topbar">
        <div>
            <h1>Configuración</h1>
            <p>Personaliza las preferencias del sistema.</p>
        </div>
    </div>

    <div class="panel configuracion">
        <div>
            <h2>Modo oscuro</h2>
            <p style="color:var(--secundario); font-size:13px;">
                Cambia la apariencia de la aplicación.
            </p>
        </div>
        <button class="btn-principal" onclick="cambiarTema()">Cambiar tema</button>
    </div>

    <div class="panel">
        <h2>Datos del sistema</h2>
        <p style="color:var(--secundario); line-height:1.8;">
            Sistema de Reservación de Espacios Escolares.<br>
            Versión 1.0<br>
            Proyecto escolar.
        </p>
    </div>

    <div class="panel">
        <h2>Administrar datos</h2>
        <p style="color:var(--secundario); margin-bottom:15px;">
            Elimina todas las reservaciones guardadas en este navegador.
        </p>
        <button class="btn-secundario" onclick="limpiarReservas()">Limpiar reservaciones</button>
    </div>
</section>

</main>
</div>

<div class="mensaje" id="mensaje"></div>

<script>
const espacios = [
    {
        nombre: "Aula de innovación",
        tipo: "Aula",
        capacidad: 30,
        ubicacion: "Edificio A",
        codigo: "AI"
    },
    {
        nombre: "Laboratorio de ciencias",
        tipo: "Laboratorio",
        capacidad: 25,
        ubicacion: "Edificio B",
        codigo: "LC"
    },
    {
        nombre: "Sala audiovisual",
        tipo: "Sala",
        capacidad: 40,
        ubicacion: "Edificio C",
        codigo: "SA"
    },
    {
        nombre: "Cancha multiusos",
        tipo: "Deportivo",
        capacidad: 50,
        ubicacion: "Área deportiva",
        codigo: "CM"
    }
];

let reservas = JSON.parse(localStorage.getItem("reservasEscolares")) || [];

function fechaActual() {
    const fecha = new Date();
    const anio = fecha.getFullYear();
    const mes = String(fecha.getMonth() + 1).padStart(2, "0");
    const dia = String(fecha.getDate()).padStart(2, "0");
    return `${anio}-${mes}-${dia}`;
}

document.getElementById("fechaReserva").min = fechaActual();

function guardar() {
    localStorage.setItem("reservasEscolares", JSON.stringify(reservas));
    actualizar();
}

function navegar(id, enlace) {
    document.querySelectorAll(".seccion").forEach(s => {
        s.classList.remove("activa");
    });

    document.getElementById(id).classList.add("activa");

    document.querySelectorAll(".menu a").forEach(a => {
        a.classList.remove("activo");
    });

    if (enlace) {
        enlace.classList.add("activo");
    } else {
        document.querySelectorAll(".menu a").forEach(a => {
            if (a.getAttribute("onclick").includes(id)) {
                a.classList.add("activo");
            }
        });
    }

    if (id === "reservas") {
        llenarSelector();
        mostrarReservas();
    }
}

function mostrarMensaje(texto) {
    const mensaje = document.getElementById("mensaje");
    mensaje.textContent = texto;
    mensaje.style.display = "block";

    setTimeout(() => {
        mensaje.style.display = "none";
    }, 2500);
}

function mostrarEspacios() {
    const busqueda = document.getElementById("buscarEspacio").value.toLowerCase();
    const tipo = document.getElementById("filtroTipo").value;

    const filtrados = espacios.filter(e =>
        e.nombre.toLowerCase().includes(busqueda) &&
        (tipo === "" || e.tipo === tipo)
    );

    const lista = document.getElementById("listaEspacios");

    if (filtrados.length === 0) {
        lista.innerHTML = '<p class="vacio">No se encontraron espacios.</p>';
        return;
    }

    lista.innerHTML = filtrados.map(e => `
        <div class="espacio">
            <div class="espacio-codigo">${e.codigo}</div>
            <h3>${e.nombre}</h3>
            <p>Tipo: ${e.tipo}</p>
            <p>Capacidad: ${e.capacidad} personas</p>
            <p>Ubicación: ${e.ubicacion}</p>
            <button class="btn-principal" onclick="seleccionarEspacio('${e.nombre}')">
                Reservar espacio
            </button>
        </div>
    `).join("");
}

function seleccionarEspacio(nombre) {
    llenarSelector();
    document.getElementById("espacioSeleccionado").value = nombre;
    navegar("reservas");
}

function llenarSelector() {
    const selector = document.getElementById("espacioSeleccionado");

    selector.innerHTML = '<option value="">Selecciona un espacio</option>';

    espacios.forEach(e => {
        selector.innerHTML += `<option value="${e.nombre}">${e.nombre}</option>`;
    });
}

function crearReserva(event) {
    event.preventDefault();

    const espacio = document.getElementById("espacioSeleccionado").value;
    const fecha = document.getElementById("fechaReserva").value;
    const horario = document.getElementById("horarioReserva").value;
    const motivo = document.getElementById("motivoReserva").value.trim();

    if (!espacio || !fecha || !horario || !motivo) {
        mostrarMensaje("Completa todos los campos.");
        return;
    }

    if (fecha < fechaActual()) {
        mostrarMensaje("No puedes reservar fechas anteriores.");
        return;
    }

    const repetida = reservas.some(r =>
        r.espacio === espacio &&
        r.fecha === fecha &&
        r.horario === horario
    );

    if (repetida) {
        mostrarMensaje("Ese espacio ya está reservado en ese horario.");
        return;
    }

    reservas.push({
        id: Date.now(),
        espacio,
        fecha,
        horario,
        motivo
    });

    guardar();
    event.target.reset();
    document.getElementById("fechaReserva").min = fechaActual();

    mostrarMensaje("Reservación registrada correctamente.");
}

function mostrarReservas() {
    const tabla = document.getElementById("tablaReservas");

    if (reservas.length === 0) {
        tabla.innerHTML = '<tr><td colspan="5" class="vacio">No tienes reservaciones registradas.</td></tr>';
        return;
    }

    tabla.innerHTML = reservas.map(r => `
        <tr>
            <td>${r.espacio}</td>
            <td>${r.fecha}</td>
            <td>${r.horario}</td>
            <td><span class="estado">${r.fecha < fechaActual() ? "Finalizada" : "Registrada"}</span></td>
            <td>
                <button class="btn-secundario" onclick="cancelarReserva(${r.id})">
                    Cancelar
                </button>
            </td>
        </tr>
    `).join("");
}

function cancelarReserva(id) {
    if (!confirm("¿Deseas cancelar esta reservación?")) return;

    reservas = reservas.filter(r => r.id !== id);
    guardar();
    mostrarMensaje("Reservación cancelada.");
}

function actualizar() {
    document.getElementById("totalEspacios").textContent = espacios.length;
    document.getElementById("totalReservas").textContent = reservas.length;

    document.getElementById("reservasHoy").textContent =
        reservas.filter(r => r.fecha === fechaActual()).length;

    mostrarReservas();

    const recientes = [...reservas].reverse().slice(0, 3);
    const contenedor = document.getElementById("ultimasReservas");

    if (recientes.length === 0) {
        contenedor.innerHTML = '<p class="vacio">Todavía no tienes reservaciones.</p>';
    } else {
        contenedor.innerHTML = recientes.map(r => `
            <p style="padding:12px 0; border-bottom:1px solid var(--borde);">
                <strong>${r.espacio}</strong><br>
                <span style="color:var(--secundario); font-size:13px;">
                    ${r.fecha} | ${r.horario}
                </span>
            </p>
        `).join("");
    }
}

function cambiarTema() {
    document.body.classList.toggle("oscuro");

    localStorage.setItem(
        "temaOscuro",
        document.body.classList.contains("oscuro")
    );
}

function limpiarReservas() {
    if (!confirm("¿Seguro que deseas eliminar todas las reservaciones?")) return;

    reservas = [];
    guardar();
    mostrarMensaje("Se eliminaron las reservaciones.");
}

if (localStorage.getItem("temaOscuro") === "true") {
    document.body.classList.add("oscuro");
}

llenarSelector();
mostrarEspacios();
actualizar();
</script>

</body>
</html>
