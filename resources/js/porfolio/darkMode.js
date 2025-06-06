export default function darkMode() {
    
    let theme = 'light';
    const root = document.querySelector(":root");
    const btn = document.querySelector('#DM-btn');
    const texts = document.querySelectorAll('.dark-mode');

    // Colores
    const cNegro = '#1e1e1e';

    setLight();
    btn.addEventListener("click", setTheme);

    function setTheme() {

        switch (theme) {
            case "dark":
                setLight();
                theme = "light";
                break;
            case "light":
                setDark();
                theme = "dark";
                break;
        }
    }
    function setLight() {
        root.style.setProperty(
            "--bs-dark",
            "linear-gradient(318.32deg, #c3d1e4 0%, #dde7f3 55%, #d4e0ed 100%)"
        );

        btn.classList.remove("header__contenedor-DM--inactivo");

        texts.forEach(text => {
            text.classList.remove('font-dm-white');
        });
        setTimeout(() => {
            btn.classList.remove("header__contenedor-DM--inactivo");
        }, 300);

        changeBG(false);
    }

    function setDark() {
        root.style.setProperty("--bs-dark", cNegro);

        setTimeout(() => {

            btn.classList.remove("change");
        }, 300);
        btn.classList.add("header__contenedor-DM--inactivo");


        texts.forEach(text => {

            text.classList.add('font-dm-white');
            document.body.style = "background-color: var(--bs-dark);transition: 0.5s;"
        });

        changeBG(true);
    }

    // Recibe un flag de light o dark
    function changeBG(flag) {

        const mainProj = document.querySelectorAll('.new-dev-projects__contenedor-prin');


        if (flag) {
            mainProj.forEach(element => {
                element.classList.remove('new-dev-projects__contenedor');
                element.classList.add('new-dev-projects__contenedor--dark');
            })

        } else {

            mainProj.forEach(element => {
                element.classList.remove('new-dev-projects__contenedor--dark');
                element.classList.add('new-dev-projects__contenedor');
            })
        }
    }
    // function changeBG(flag) {


    //     const element = document.querySelector('#dev-projects-slide-tl');

    //     if (flag) {
    //         element.classList.remove('dev-projects__contenedor');
    //         element.classList.add('dev-projects__contenedor--dark');

    //     } else {
    //         element.classList.remove('dev-projects__contenedor--dark');
    //         element.classList.add('dev-projects__contenedor');

    //     }
    // }
}
