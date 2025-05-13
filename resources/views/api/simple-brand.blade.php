<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

<div class="dp-brand-contenedor">
    <p>Engineered by</p>
    <a class="dp-brand-enlace" href="https://dellpinos.com" target="_blank" rel="noopener noreferrer">
        <h2 class="dp-brand-enlace__texto">DellPinos</h2>
    </a>
</div>

<style>
    :root {
        --dp-brand-fuente_prim: "Pacifico", cursive;
        --dp-brand-cBlanco: #FFFFFF;
        --dp-brand-cGris: #444444;
        --dp-brand-cPrim0: #f6b73c;
        --dp-brand-cPrim1: #f48c06;
    }

    .dp-brand-contenedor * {
        box-sizing: inherit;
    }

    .dp-brand-contenedor {
        box-sizing: border-box;
        margin: 0;
        padding: 5px 60px;
        width: 100%;
        background-color: var(--dp-brand-cGris);
        display: flex;
        align-content: center;
        justify-content: flex-end;
        gap: 10px;
    }

    .dp-brand-contenedor p {
        margin: 0;
        height: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: var(--dp-brand-cBlanco);
        font-size: 12px;
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
        font-size: 18px;

        background: linear-gradient(to right, var(--dp-brand-cPrim1), var(--dp-brand-cPrim0), var(--dp-brand-cBlanco));
        background-size: 100% 100%;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: currentColor;
        transition: all 1s ease;
    }
</style>
