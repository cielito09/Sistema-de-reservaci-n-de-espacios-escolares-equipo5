<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Espacios Escolares</title>
    <style>
        :root {
            --p: #6d28d9;
            --pd: #4c1d95;
            --pm: #8b5cf6;
            --pl: #f3edff;
            --bg: #faf7ff;
            --card: #fff;
            --tx: #1f1535;
            --mu: #6b6480;
            --bd: #e4d9fb;
            --ok: #15803d;
            --er: #b91c1c;
            box-sizing: border-box;
            padding-top: env(safe-area-inset-top, 0px);
            padding-bottom: env(safe-area-inset-bottom, 0px)
        }

        html {
            scroll-padding-top: env(safe-area-inset-top, 0px)
        }

        @media (prefers-color-scheme:dark) {
            :root:not([data-theme="light"]) {
                --bg: #140e24;
                --card: #1e1535;
                --tx: #f3efff;
                --mu: #a99fc7;
                --bd: #3b2d63;
                --pl: #2a1f4a;
                --p: #8b5cf6
            }
        }

        :root[data-theme="dark"] {
            --bg: #140e24;
            --card: #1e1535;
            --tx: #f3efff;
            --mu: #a99fc7;
            --bd: #3b2d63;
            --pl: #2a1f4a;
            --p: #8b5cf6
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--tx);
            font-family: system-ui, -apple-system, "Segoe UI", sans-serif
        }

        button {
            font: inherit;
            cursor: pointer;
            border: 0
        }

        svg {
            flex: none
        }

        header {
            position: sticky;
            top: env(safe-area-inset-top, 0px);
            z-index: 20;
            background: var(--card);
            border-bottom: 1px solid var(--bd)
        }

        .bar {
            max-width: 1300px;
            margin: 0 auto;
            height: 68px;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            background: none;
            color: var(--tx);
            text-align: left
        }

        .logo i {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: var(--p);
            color: #fff;
            display: grid;
            place-items: center
        }

        .logo b {
            display: block;
            font-size: 1.05rem
        }

        .logo small {
            font-size: .62rem;
            letter-spacing: .06em;
            color: var(--pm);
            font-weight: 600
        }

        nav {
            display: flex;
            gap: 4px
        }

        nav button {
            background: none;
            color: var(--mu);
            padding: 9px 14px;
            border-radius: 10px;
            font-weight: 600;
            font-size: .9rem
        }

        nav button.on,
        nav button:hover {
            background: var(--pl);
            color: var(--p)
        }

        .user {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: .75rem;
            color: var(--mu)
        }

        .user b {
            display: block;
            color: var(--tx)
        }

        .av {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--pl);
            color: var(--p);
            display: grid;
            place-items: center;
            font-weight: 700
        }

        @media(max-width:640px) {
            nav button {
                padding: 8px 9px;
                font-size: .78rem
            }

            .user span:last-child,
            .logo small {
                display: none
            }
        }

        .hero {
            background: linear-gradient(135deg, var(--pd), #6d28d9);
            color: #fff
        }

        .hin {
            max-width: 1300px;
            margin: 0 auto;
            padding: 48px 20px;
            display: grid;
            gap: 32px
        }

        @media(min-width:900px) {
            .hin {
                grid-template-columns: 1.15fr .85fr;
                align-items: center
            }
        }

        .tag {
            display: inline-block;
            border: 1px solid rgba(255, 255, 255, .25);
            background: rgba(255, 255, 255, .1);
            border-radius: 99px;
            padding: 6px 12px;
            font-size: .75rem;
            font-weight: 600
        }

        .hero h1 {
            font-size: clamp(2rem, 5vw, 3.3rem);
            line-height: 1.1;
            margin: 16px 0;
            letter-spacing: -.03em
        }

        .hero p {
            opacity: .85;
            line-height: 1.6;
            max-width: 520px
        }

        .search {
            display: flex;
            gap: 8px;
            background: #fff;
            border-radius: 16px;
            padding: 8px;
            max-width: 520px;
            margin-top: 24px;
            color: var(--p)
        }

        .search input {
            flex: 1;
            min-width: 0;
            border: 0;
            outline: 0;
            padding: 10px;
            font-size: .95rem;
            color: #1f1535;
            background: none
        }

        .search button {
            background: var(--p);
            color: #fff;
            border-radius: 12px;
            padding: 10px 18px;
            font-weight: 700
        }

        .week {
            background: rgba(255, 255, 255, .1);
            border: 1px solid rgba(255, 255, 255, .15);
            border-radius: 24px;
            padding: 20px
        }

        .wh {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 14px;
            font-weight: 600
        }

        .wh span {
            background: rgba(110, 231, 183, .2);
            color: #a7f3d0;
            border-radius: 99px;
            padding: 3px 10px;
            font-size: .7rem
        }

        .days {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 8px
        }

        .days button {
            background: rgba(255, 255, 255, .07);
            color: #fff;
            border-radius: 12px;
            padding: 10px 0
        }

        .days button.on {
            background: #fff;
            color: var(--pd)
        }

        .days small {
            display: block;
            font-size: .65rem;
            text-transform: uppercase;
            opacity: .7
        }

        .days b {
            font-size: 1.15rem
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            margin-top: 14px;
            text-align: center;
            font-size: .75rem
        }

        .stats div {
            background: rgba(255, 255, 255, .1);
            border-radius: 12px;
            padding: 10px
        }

        .stats b {
            display: block;
            font-size: 1.2rem
        }

        .sec {
            max-width: 1300px;
            margin: 0 auto;
            padding: 44px 20px
        }

        .eyebrow {
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--pm);
            margin: 0
        }

        .sec h2 {
            font-size: 1.8rem;
            margin: 6px 0;
            letter-spacing: -.02em
        }

        .sub {
            color: var(--mu);
            font-size: .9rem;
            margin: 0 0 22px
        }

        .chips {
            display: flex;
            gap: 8px;
            overflow-x: auto;
            padding-bottom: 4px;
            margin-bottom: 22px
        }

        .chips button {
            white-space: nowrap;
            background: var(--card);
            border: 1px solid var(--bd);
            color: var(--mu);
            border-radius: 99px;
            padding: 8px 16px;
            font-size: .78rem;
            font-weight: 700
        }

        .chips button.on {
            background: var(--p);
            color: #fff;
            border-color: var(--p)
        }

        .grid {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr))
        }

        .card {
            background: var(--card);
            border: 1px solid var(--bd);
            border-radius: 22px;
            overflow: hidden;
            transition: transform .2s
        }

        .card:hover {
            transform: translateY(-4px)
        }

        .top {
            height: 130px;
            padding: 18px;
            color: #fff;
            position: relative;
            background: linear-gradient(135deg, var(--pm), var(--pd))
        }

        .top i {
            width: 46px;
            height: 46px;
            border-radius: 14px;
            background: rgba(255, 255, 255, .18);
            display: grid;
            place-items: center
        }

        .pill {
            position: absolute;
            right: 14px;
            bottom: 14px;
            border-radius: 99px;
            padding: 4px 10px;
            font-size: .65rem;
            font-weight: 700;
            background: #a7f3d0;
            color: #064e3b
        }

        .pill.no {
            background: rgba(255, 255, 255, .25);
            color: #fff
        }

        .body {
            padding: 18px
        }

        .kind {
            font-size: .68rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--pm)
        }

        .body h3 {
            margin: 4px 0 12px;
            font-size: 1.05rem
        }

        .meta {
            display: flex;
            gap: 8px;
            align-items: center;
            font-size: .78rem;
            color: var(--mu);
            margin-top: 7px
        }

        .rb {
            margin-top: 16px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--pl);
            color: var(--p);
            padding: 12px 14px;
            border-radius: 12px;
            font-weight: 700;
            font-size: .88rem
        }

        .card:hover .rb {
            background: var(--p);
            color: #fff
        }

        .res {
            display: flex;
            align-items: center;
            gap: 14px;
            background: var(--card);
            border: 1px solid var(--bd);
            border-radius: 16px;
            padding: 16px;
            margin-bottom: 12px
        }

        .res i {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            background: var(--pl);
            color: var(--p);
            display: grid;
            place-items: center
        }

        .res div {
            flex: 1;
            min-width: 0
        }

        .res h3 {
            margin: 0;
            font-size: 1rem
        }

        .res p {
            margin: 4px 0 0;
            font-size: .78rem;
            color: var(--mu);
            overflow-wrap: anywhere
        }

        .res button {
            background: none;
            border: 1px solid var(--er);
            color: var(--er);
            border-radius: 10px;
            padding: 7px 12px;
            font-size: .78rem;
            font-weight: 600
        }

        .empty {
            border: 1px dashed var(--bd);
            border-radius: 16px;
            padding: 36px;
            text-align: center;
            color: var(--mu);
            font-size: .9rem
        }

        footer {
            border-top: 1px solid var(--bd);
            background: var(--card);
            padding: 22px 20px;
            font-size: .75rem;
            color: var(--mu);
            text-align: center
        }

        footer b {
            color: var(--p)
        }

        .ov {
            position: fixed;
            inset: 0;
            z-index: 50;
            background: rgba(30, 10, 60, .55);
            display: grid;
            place-items: center;
            padding: 16px
        }

        .modal {
            background: var(--card);
            border-radius: 26px;
            padding: 26px;
            width: 100%;
            max-width: 480px;
            max-height: 100%;
            overflow: auto
        }

        .mh {
            display: flex;
            justify-content: space-between;
            align-items: flex-start
        }

        .mh h2 {
            margin: 4px 0;
            font-size: 1.5rem
        }

        .x {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--pl);
            color: var(--mu)
        }

        .f {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 18px
        }

        label {
            display: block;
            font-size: .75rem;
            font-weight: 700;
            color: var(--mu);
            margin-top: 14px
        }

        .f label {
            margin: 0
        }

        select,
        textarea {
            width: 100%;
            margin-top: 6px;
            padding: 11px;
            border: 1px solid var(--bd);
            border-radius: 12px;
            background: var(--card);
            color: var(--tx);
            font: inherit;
            font-size: .9rem
        }

        textarea {
            height: 80px;
            resize: none
        }

        .go {
            margin-top: 18px;
            width: 100%;
            background: var(--p);
            color: #fff;
            border-radius: 12px;
            padding: 14px;
            font-weight: 700
        }

        .err {
            color: var(--er);
            font-size: .82rem;
            min-height: 1.2em;
            margin-top: 10px
        }

        .okc {
            text-align: center;
            padding: 14px 0
        }

        .okc i {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: #dcfce7;
            color: var(--ok);
            display: inline-grid;
            place-items: center
        }

        .okc p {
            color: var(--mu);
            font-size: .9rem;
            line-height: 1.6
        }
    </style>
</head>

<body>
    <header>
        <div class="bar">
            <button class="logo" data-go="Inicio" aria-label="Ir al inicio"><i id="lg"></i><span><b>Espacios Escolares</b><small>RESERVA FÁCIL, APRENDE MEJOR</small></span></button>
            <nav id="nav"></nav>
            <div class="user"><span class="av">AM</span><span><b>Ana Martínez</b>Docente</span></div>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="hin">
                <div><span class="tag">✦ Todo tu campus en un solo lugar</span>
                    <h1>Encuentra el espacio ideal para tu próxima clase.</h1>
                    <p>Consulta la disponibilidad y reserva aulas, laboratorios y áreas comunes de forma rápida y sencilla.</p>
                    <div class="search"><input id="q" placeholder="Busca un aula, laboratorio o espacio..." aria-label="Buscar espacio"><button data-go="Espacios">Buscar</button></div>
                </div>
                <div class="week">
                    <div class="wh"><span style="background:none;color:inherit;font-size:1rem;padding:0">Disponibilidad semanal</span><span>Actualizado</span></div>
                    <div class="days" id="days"></div>
                    <div class="stats" id="stats"></div>
                </div>
            </div>
        </section>
        <section class="sec" id="main"></section>
    </main>
    <footer><b>Espacios Escolares</b> · Tu campus, mejor organizado.</footer>
    <div id="modal"></div>
    <script>
        var SLOTS = ["10:00 — 11:30", "12:00 — 13:30", "15:00 — 16:30"];
        var SP = [{
                id: 1,
                n: "Aula de innovación",
                l: "Edificio Norte · Piso 2",
                c: 32,
                t: "Aula"
            },
            {
                id: 2,
                n: "Laboratorio de ciencias",
                l: "Edificio Central · Piso 1",
                c: 24,
                t: "Laboratorio"
            },
            {
                id: 3,
                n: "Sala audiovisual",
                l: "Edificio Sur · Piso 3",
                c: 48,
                t: "Sala"
            },
            {
                id: 4,
                n: "Cancha multiusos",
                l: "Zona deportiva",
                c: 60,
                t: "Deportivo"
            }
        ];
        var DN = ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
            MN = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
        var IC = {
            building: '<path d="M4 21V5a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v16"/><path d="M9 21v-4h4v4M8 7h1m3 0h1M8 11h1m3 0h1M2 21h18"/>',
            cal: '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 10h18"/>',
            pin: '<path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/>',
            ppl: '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>',
            chk: '<path d="m5 12 4 4L19 6"/>',
            arr: '<path d="m9 18 6-6-6-6"/>'
        };

        function ic(k, s) {
            return '<svg width="' + (s || 20) + '" height="' + (s || 20) + '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' + IC[k] + '</svg>'
        }
        var ICON = {
            Aula: "building",
            Laboratorio: "building",
            Sala: "cal",
            Deportivo: "ppl"
        };

        function esc(s) {
            var d = document.createElement("div");
            d.textContent = s;
            return d.innerHTML
        }
        var K = "espacios-escolares-v2",
            R = [];
        try {
            R = JSON.parse(localStorage.getItem(K) || "[]")
        } catch (e) {
            R = []
        }

        function save() {
            try {
                localStorage.setItem(K, JSON.stringify(R))
            } catch (e) {}
        }
        var now = new Date(),
            mon = new Date(now);
        mon.setDate(now.getDate() - ((now.getDay() + 6) % 7));
        var WK = [0, 1, 2, 3, 4].map(function(i) {
            var d = new Date(mon);
            d.setDate(mon.getDate() + i);
            var iso = d.getFullYear() + "-" + String(d.getMonth() + 1).padStart(2, "0") + "-" + String(d.getDate()).padStart(2, "0");
            return {
                iso: iso,
                dn: DN[d.getDay()],
                d: d.getDate(),
                long: DN[d.getDay()] + " " + d.getDate() + " de " + MN[d.getMonth()]
            }
        });
        var day = Math.min(now.getDay() === 0 || now.getDay() === 6 ? 0 : now.getDay() - 1, 4),
            view = "Inicio",
            type = "Todos",
            bk = null,
            done = false;

        function busy(sp, iso, s) {
            return R.some(function(r) {
                return r.sp === sp && r.d === iso && r.s === s
            })
        }

        function free(sp, iso) {
            return SLOTS.filter(function(_, i) {
                return !busy(sp, iso, i)
            }).length
        }

        function $(i) {
            return document.getElementById(i)
        }

        function head() {
            $("lg").innerHTML = ic("building", 22);
            $("nav").innerHTML = ["Inicio", "Espacios", "Mis reservas"].map(function(v) {
                return '<button data-go="' + v + '" class="' + (v === view ? "on" : "") + '">' + v + '</button>'
            }).join("");
            $("days").innerHTML = WK.map(function(w, i) {
                return '<button data-day="' + i + '" class="' + (i === day ? "on" : "") + '"><small>' + w.dn + '</small><b>' + w.d + '</b></button>'
            }).join("");
            var tot = SP.length * SLOTS.length,
                bu = R.filter(function(r) {
                    return r.d === WK[day].iso
                }).length;
            $("stats").innerHTML = '<div><b>' + (tot - bu) + '</b>Disponibles</div><div><b>' + bu + '</b>Reservados</div><div><b>' + SP.length + '</b>Tipos</div>'
        }

        function body() {
            var m = $("main"),
                h;
            if (view === "Mis reservas") {
                h = '<p class="eyebrow">Tu agenda</p><h2>Mis próximas reservas</h2><p class="sub">Administra los espacios que reservaste.</p>';
                var L = R.slice().sort(function(a, b) {
                    return (a.d + a.s).localeCompare(b.d + b.s)
                });
                h += L.length ? L.map(function(r) {
                    var s = SP.filter(function(x) {
                            return x.id === r.sp
                        })[0],
                        w = WK.filter(function(x) {
                            return x.iso === r.d
                        })[0];
                    return '<div class="res"><i>' + ic("cal") + '</i><div><h3>' + esc(s.n) + '</h3><p>' + (w ? w.long : r.d) + ' · ' + SLOTS[r.s] + (r.m ? ' · ' + esc(r.m) : '') + '</p></div><button data-cancel="' + r.id + '">Cancelar</button></div>'
                }).join("") : '<div class="empty">Aún no tienes reservaciones.</div>';
            } else {
                var q = $("q").value.toLowerCase();
                var F = SP.filter(function(s) {
                    return (s.n + " " + s.l).toLowerCase().indexOf(q) > -1 && (type === "Todos" || s.t === type)
                });
                h = '<p class="eyebrow">Explora el campus</p><h2>Espacios disponibles</h2><p class="sub">Selecciona el espacio que mejor se adapte a tus necesidades.</p>';
                h += '<div class="chips">' + ["Todos", "Aula", "Laboratorio", "Sala", "Deportivo"].map(function(t) {
                    return '<button data-type="' + t + '" class="' + (t === type ? "on" : "") + '">' + t + '</button>'
                }).join("") + '</div>';
                h += F.length ? '<div class="grid">' + F.map(function(s) {
                    var f = free(s.id, WK[day].iso);
                    return '<article class="card"><div class="top"><i>' + ic(ICON[s.t], 24) + '</i><span class="pill' + (f ? "" : " no") + '">' + (f ? "Disponible" : "Sin horarios") + '</span></div><div class="body"><div class="kind">' + s.t + '</div><h3>' + s.n + '</h3><div class="meta">' + ic("pin", 15) + s.l + '</div><div class="meta">' + ic("ppl", 15) + 'Hasta ' + s.c + ' personas</div><button class="rb" data-book="' + s.id + '">Reservar espacio ' + ic("arr", 17) + '</button></div></article>'
                }).join("") + '</div>' : '<div class="empty">No encontramos espacios con esos criterios.</div>';
            }
            m.innerHTML = h
        }

        function modal() {
            var o = $("modal");
            if (!bk) {
                o.innerHTML = "";
                return
            }
            var h = '<div class="ov" data-close="1"><div class="modal">';
            if (!done) {
                h += '<div class="mh"><div><p class="eyebrow">Nueva reservación</p><h2>' + bk.n + '</h2></div><button class="x" data-close="1" aria-label="Cerrar">✕</button></div>';
                h += '<div class="meta">' + ic("pin", 16) + bk.l + '</div><div class="f"><label>Fecha<select id="mf">' + WK.map(function(w, i) {
                    return '<option value="' + i + '"' + (i === day ? " selected" : "") + '>' + w.long + '</option>'
                }).join("") + '</select></label><label>Hora<select id="mh">' + SLOTS.map(function(s, i) {
                    return '<option value="' + i + '">' + s + '</option>'
                }).join("") + '</select></label></div>';
                h += '<label>Motivo de la reserva<textarea id="mm" placeholder="Ej. Taller de ciencias con 20 estudiantes"></textarea></label><div class="err" id="me"></div><button class="go" data-confirm="1">Confirmar reservación</button>';
            } else {
                h += '<div class="okc"><i>' + ic("chk", 32) + '</i><h2>¡Espacio reservado!</h2><p>Tu reserva para <b>' + bk.n + '</b> ha sido confirmada.</p><button class="go" data-mine="1">Ver mis reservas</button></div>'
            }
            o.innerHTML = h + '</div></div>'
        }

        function all() {
            head();
            body();
            modal()
        }
        document.addEventListener("click", function(e) {
            var t = e.target,
                a = t.closest("[data-go],[data-day],[data-type],[data-book],[data-cancel],[data-confirm],[data-mine],[data-close]");
            if (!a) return;
            var d = a.dataset;
            if (d.close) {
                if (e.target === a || a.classList.contains("x")) {
                    bk = null;
                    modal()
                }
                return
            }
            if (d.go) {
                view = d.go;
                all();
                return
            }
            if (d.day) {
                day = +d.day;
                all();
                return
            }
            if (d.type) {
                type = d.type;
                body();
                return
            }
            if (d.book) {
                bk = SP.filter(function(s) {
                    return s.id == d.book
                })[0];
                done = false;
                modal();
                return
            }
            if (d.cancel) {
                R = R.filter(function(r) {
                    return r.id != d.cancel
                });
                save();
                all();
                return
            }
            if (d.mine) {
                bk = null;
                view = "Mis reservas";
                all();
                return
            }
            if (d.confirm) {
                var i = +$("mf").value,
                    s = +$("mh").value;
                if (busy(bk.id, WK[i].iso, s)) {
                    $("me").textContent = "Ese horario ya está reservado. Elige otro.";
                    return
                }
                R.push({
                    id: Date.now(),
                    sp: bk.id,
                    d: WK[i].iso,
                    s: s,
                    m: $("mm").value.trim()
                });
                save();
                done = true;
                head();
                modal()
            }
        });
        $("q").addEventListener("input", function() {
            if (view === "Inicio") view = "Espacios";
            all()
        });
        all();
    </script>
</body>

</html>