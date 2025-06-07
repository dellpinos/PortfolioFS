<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

<div class="dp-brand-contenedor">
    <p>Engineered by</p>
    <a class="dp-brand-enlace" href="https://dellpinos.com" target="_blank" rel="noopener noreferrer">
        <div class="dp-brand-logo__contenedor" style="--dp-brand-factor: .07; --dp-brand-tiempo_op: 3s;">
            <div class="dp-brand-logo__cuadro-centro">
                <div class="dp-brand-logo__circulo-fondo">
                    <div class="dp-brand-logo__circulo-borde">
                        <div class="dp-brand-logo__borde-rotacion-interna">
                            <div class="dp-brand-logo__borde-circ-top"></div>
                            <div class="dp-brand-logo__borde-circ-right"></div>
                            <div class="dp-brand-logo__borde-circ-bottom"></div>
                            <div class="dp-brand-logo__borde-circ-left"></div>
                        </div>
                        <div class="dp-brand-logo__circulo-central">
                            <div class="dp-brand-logo__grid-lineas">
                                <div class="dp-brand-logo__centro-linea-uno"></div>
                                <div class="dp-brand-logo__centro-linea-dos"></div>
                                <div class="dp-brand-logo__centro-linea-tres"></div>
                                <div class="dp-brand-logo__centro-linea-cuatro"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="dp-brand-enlace__texto">DellPinos</h2>
    </a>
</div>

<style>
    :root {
        --dp-brand-factor: 1;
        --dp-brand-opacity: 1;
        --dp-brand-tiempo_op: 1.5s;
        --dp-brand-tiempo_delay: 0;
        --dp-brand-fuente_prim: "Pacifico", cursive;
        --dp-brand-cFondo: #fffff0;
        --dp-brand-cPrim: #212936;
        --dp-brand-cSec: #6ca690;
        --dp-brand-cBlanco: #FFFFFF;
        --dp-brand-cGris: #444444;
        --dp-brand-cPrim0: #f6b73c;
        --dp-brand-cPrim1: #f48c06;
        --dp-brand-cPrim2: #e85d04;
        --dp-brand-cPrim3: #aa4f08;
        --dp-brand-cPrim4: #d00000;
        --dp-brand-cBNgris: #7c7c7c;
        --dp-brand-cBNgrisClaro: #dbdbdb;
    }

    .dp-brand-contenedor * {
        box-sizing: inherit;
    }

    .dp-brand-contenedor {
        box-sizing: border-box;
        margin: 0;
        padding: 5px 20px;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        gap: 10px;

    }

    @media(min-width: 480px) {
        .dp-brand-contenedor {
            padding: 5px 60px;
            flex-direction: row;
            justify-content: flex-end;
        }
    }

    .dp-brand-contenedor p {
        margin: 0;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: var(--dp-brand-cBlanco);
        font-size: 14px;
        font-family: "Verdana", sans-serif;
    }

    .dp-brand-enlace {
        height: 100%;
        display: flex;
        align-content: center;
        justify-content: center;
        gap: 5px;
        text-decoration: none;
    }

    .dp-brand-enlace:hover .dp-brand-logo__circulo-central {
        animation: dp-brand-luz-girando-hover 0.6s ease 0s 3;
        box-shadow: 0 0 calc(2rem * var(--dp-brand-factor)) calc(2rem * var(--dp-brand-factor)) var(--dp-brand-cPrim0) inset,
            0 0 calc(3rem * var(--dp-brand-factor)) calc(1.5rem * var(--dp-brand-factor)) var(--dp-brand-cPrim0);
    }

    .dp-brand-enlace:hover .dp-brand-enlace__texto {
        color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .dp-brand-enlace__texto {
        margin: 0;
        display: flex;
        flex-direction: column;
        align-content: center;
        justify-content: center;
        font-family: var(--dp-brand-fuente_prim);
        color: var(--dp-brand-cBlanco);
        transition: color 1s ease;
        font-size: 25px;

        background: linear-gradient(to right, var(--dp-brand-cPrim1), var(--dp-brand-cPrim0), var(--dp-brand-cBlanco));
        background-size: 100% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: currentColor;
        transition: all 1s ease;
    }

    .dp-brand-logo__contenedor {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        width: fit-content;
        gap: calc(1.5rem * var(--dp-brand-factor));
        padding: calc(2rem * var(--dp-brand-factor));
        color: var(--dp-brand-cSec);
        animation: dp-brand-fade-in-up var(--dp-brand-tiempo_op) ease-out both;
        animation-delay: var(--dp-brand-tiempo_delay);
        z-index: 1;
    }

    .dp-brand-logo__cuadro-up h2 {
        margin: 0;
        font-size: calc(3.5rem * var(--dp-brand-factor));
        font-family: var(--dp-brand-fuente_sec);
        letter-spacing: calc(.8rem * var(--dp-brand-factor));
        color: var(--dp-brand-cPrim);
        animation: dp-brand-fade-in-up 2s ease-out both;
    }

    @keyframes dp-brand-fade-in-up {
        from {
            opacity: 0;
            transform: translateY(calc(4rem * var(--dp-brand-factor)));
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .dp-brand-logo__circulo-fondo {
        background-color: var(--dp-brand-cPrim);
        padding: calc(2rem * var(--dp-brand-factor));
        border-radius: 50%;
        border: calc(.6rem * var(--dp-brand-factor)) solid var(--dp-brand-cGris);
        transition: border 2s ease;
    }

    .dp-brand-logo__circulo-fondo:hover {
        border: calc(.6rem * var(--dp-brand-factor)) solid var(--dp-brand-cPrim0);
    }

    .dp-brand-logo__circulo-borde {
        border: calc(2rem * var(--dp-brand-factor)) solid var(--dp-brand-cSec);
        border-radius: 50%;
        position: relative;
        transition: border 2s ease, background-color 2s ease;
    }

    .dp-brand-logo__circulo-borde:hover {
        border: calc(2rem * var(--dp-brand-factor)) solid var(--dp-brand-cPrim);
        background-color: var(--dp-brand-cBNgris);
    }

    .dp-brand-logo__circulo-borde:hover .dp-brand-logo__border-circ,
    .dp-brand-logo__circulo-borde:hover .dp-brand-logo__borde-circ-top,
    .dp-brand-logo__circulo-borde:hover .dp-brand-logo__borde-circ-right,
    .dp-brand-logo__circulo-borde:hover .dp-brand-logo__borde-circ-bottom,
    .dp-brand-logo__circulo-borde:hover .dp-brand-logo__borde-circ-left {
        background-color: var(--dp-brand-cPrim);
    }

    .dp-brand-logo__borde-rotacion-interna {
        position: absolute;
        inset: 0;
        animation: dp-brand-reverse-spin 2s linear 0s;
    }

    @keyframes dp-brand-reverse-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(-180deg);
        }
    }

    .dp-brand-logo__border-circ,
    .dp-brand-logo__borde-circ-top,
    .dp-brand-logo__borde-circ-right,
    .dp-brand-logo__borde-circ-bottom,
    .dp-brand-logo__borde-circ-left {
        position: absolute;
        width: calc(6rem * var(--dp-brand-factor));
        height: calc(6rem * var(--dp-brand-factor));
        border-radius: 50%;
        border: calc(2rem * var(--dp-brand-factor)) solid var(--dp-brand-cPrim);
    }

    .dp-brand-logo__borde-circ-top {
        right: 50%;
        top: calc(-4rem * var(--dp-brand-factor));
        left: 50%;
        background-color: var(--dp-brand-cSec);
        transition: background-color 1s ease;
        transform: translateX(-50%);
    }

    .dp-brand-logo__borde-circ-right {
        top: 50%;
        right: calc(-4rem * var(--dp-brand-factor));
        background-color: var(--dp-brand-cSec);
        transition: background-color 1s ease;
        transform: translateY(-50%);
    }

    .dp-brand-logo__borde-circ-bottom {
        background-color: var(--dp-brand-cSec);
        transition: background-color 1s ease;
        right: 50%;
        bottom: calc(-4rem * var(--dp-brand-factor));
        left: 50%;
        transform: translateX(-50%);
    }

    .dp-brand-logo__borde-circ-left {
        background-color: var(--dp-brand-cSec);
        transition: background-color 1s ease;
        top: 50%;
        left: calc(-4rem * var(--dp-brand-factor));
        transform: translateY(-50%);
    }

    .dp-brand-logo__circulo-central {
        width: calc(30rem * var(--dp-brand-factor));
        height: calc(30rem * var(--dp-brand-factor));
        border-radius: 50%;
        margin: calc(3rem * var(--dp-brand-factor));
        position: relative;
        background: linear-gradient(175deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        background-repeat: no-repeat;
        background-attachment: fixed;
        overflow: hidden;
        box-shadow: 0 0 calc(2rem * var(--dp-brand-factor)) calc(2rem * var(--dp-brand-factor)) var(--dp-brand-cPrim1) inset, 0 0 calc(1.5rem * var(--dp-brand-factor)) calc(.2rem * var(--dp-brand-factor)) var(--dp-brand-cPrim3);
        transition: box-shadow 0.6s ease;
        animation: dp-brand-luz-girando 0.6s ease 0s 3;
    }

    @keyframes dp-brand-luz-girando {
        0% {
            background: linear-gradient(175deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        10% {
            background: linear-gradient(211deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        20% {
            background: linear-gradient(247deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        30% {
            background: linear-gradient(283deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        40% {
            background: linear-gradient(319deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        50% {
            background: linear-gradient(355deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        60% {
            background: linear-gradient(31deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        70% {
            background: linear-gradient(67deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        80% {
            background: linear-gradient(103deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        90% {
            background: linear-gradient(139deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }
    }

    @keyframes dp-brand-luz-girando-hover {
        0% {
            background: linear-gradient(175deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        10% {
            background: linear-gradient(211deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        20% {
            background: linear-gradient(247deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        30% {
            background: linear-gradient(283deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        40% {
            background: linear-gradient(319deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        50% {
            background: linear-gradient(355deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        60% {
            background: linear-gradient(31deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        70% {
            background: linear-gradient(67deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        80% {
            background: linear-gradient(103deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }

        90% {
            background: linear-gradient(139deg, var(--dp-brand-cPrim0), var(--dp-brand-cPrim1), var(--dp-brand-cPrim2), var(--dp-brand-cPrim4));
        }
    }

    .dp-brand-logo__circulo-central::before {
        content: '';
        position: absolute;
        top: 30%;
        left: 100%;
        width: 80%;
        height: 80%;
        transform: translate(-50%, -50%);
        background: radial-gradient(circle, rgba(255, 255, 255, 0.7) 0%, transparent 60%);
        pointer-events: none;
        mix-blend-mode: screen;
    }

    .dp-brand-logo__grid-lineas {
        display: flex;
        flex-direction: column;
        height: 100%;
        gap: calc(3rem * var(--dp-brand-factor));
        justify-content: center;
    }

    .dp-brand-logo__centro-linea,
    .dp-brand-logo__centro-linea-uno,
    .dp-brand-logo__centro-linea-dos,
    .dp-brand-logo__centro-linea-tres,
    .dp-brand-logo__centro-linea-cuatro {
        height: calc(2.5rem * var(--dp-brand-factor));
        border-radius: 0 calc(2rem * var(--dp-brand-factor)) calc(2rem * var(--dp-brand-factor)) 0;
        background-color: var(--dp-brand-cPrim);
    }

    .dp-brand-logo__centro-linea-uno {
        width: calc(16rem * var(--dp-brand-factor));
        animation: pulso1 3s ease-in-out 2s 1;
        transition: box-shadow 0.4s ease;
    }

    .dp-brand-logo__centro-linea-uno:hover {
        box-shadow: 0 0 calc(1rem * var(--dp-brand-factor)) calc(.2rem * var(--dp-brand-factor)) var(--dp-brand-cPrim);
    }

    .dp-brand-logo__centro-linea-dos {
        width: calc(12rem * var(--dp-brand-factor));
        animation: pulso2 3s ease-in-out 2s 1;
        transition: box-shadow 0.4s ease;
    }

    .dp-brand-logo__centro-linea-dos:hover {
        box-shadow: 0 0 calc(1rem * var(--dp-brand-factor)) calc(.2rem * var(--dp-brand-factor)) var(--dp-brand-cPrim);
    }

    .dp-brand-logo__centro-linea-tres {
        width: calc(12rem * var(--dp-brand-factor));
        animation: pulso1 3s ease-in-out 2s 1;
        transition: box-shadow 0.4s ease;
    }

    .dp-brand-logo__centro-linea-tres:hover {
        box-shadow: 0 0 calc(1rem * var(--dp-brand-factor)) calc(.2rem * var(--dp-brand-factor)) var(--dp-brand-cPrim);
    }

    .dp-brand-logo__centro-linea-cuatro {
        width: calc(20rem * var(--dp-brand-factor));
        animation: pulso2 3s ease-in-out 2s 1;
        transition: box-shadow 0.4s ease;
    }

    .dp-brand-logo__centro-linea-cuatro:hover {
        box-shadow: 0 0 calc(1rem * var(--dp-brand-factor)) calc(.2rem * var(--dp-brand-factor)) var(--dp-brand-cPrim);
    }

    @keyframes dp-brand-pulso1 {

        0%,
        100% {
            transform: scaleX(1);
        }

        50% {
            transform: scaleX(1.3);
        }
    }

    @keyframes dp-brand-pulso2 {

        0%,
        100% {
            transform: scaleX(1);
        }

        50% {
            transform: scaleX(1.2);
        }
    }

    @keyframes dp-brand-pulso1-hover {

        0%,
        100% {
            transform: scaleX(1);
        }

        50% {
            transform: scaleX(1.3);
        }
    }
</style>
