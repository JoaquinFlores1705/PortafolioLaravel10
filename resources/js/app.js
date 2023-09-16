import './bootstrap';

import Alpine from 'alpinejs';

import.meta.glob([
    '../img/**'
  ]);

window.Alpine = Alpine;

Alpine.start();

window.addEventListener('load', () =>{
    let closeMenuMobileButton = document.getElementById('close-mobile-button');
    let openMenuMobileButton = document.getElementById('open-mobile-button');
    let menuMobile = document.getElementById('menu-mobile');
    let theme = localStorage.getItem("theme");
    const buttonLigth = document.getElementById("ButtonLigth");
    const buttonDark = document.getElementById("ButtonDark");
    const buttonSystem = document.getElementById("ButtonSystem");

    closeMenuMobileButton.addEventListener('click', () =>{
        if(!menuMobile.classList.contains('hidden'))
            menuMobile.classList.add('hidden');
    });

    openMenuMobileButton.addEventListener('click', () =>{
        if(menuMobile.classList.contains('hidden'))
            menuMobile.classList.remove('hidden');
    });

    if(theme == null){
        localStorage.setItem("theme","dark");
    }

    applyTheme();

    buttonLigth.addEventListener('click', ()=>{
        localStorage.setItem("theme","ligth");
        applyTheme();
    });

    buttonDark.addEventListener('click', ()=>{
        localStorage.setItem("theme","dark");
        applyTheme();
    });

    buttonSystem.addEventListener('click', ()=>{
        localStorage.setItem("theme","system");
        applyTheme();
    });

    function applyTheme(){
        theme = localStorage.getItem("theme");
        buttonLigth.classList.remove("text-primary")
        buttonDark.classList.remove("text-primary")
        buttonSystem.classList.remove("text-primary")
        console.log(theme);
        switch(theme){
            case "ligth":
                buttonLigth.classList.add("text-primary")
                break;
            case "dark":
                buttonDark.classList.add("text-primary")
                break;
            default:
                buttonSystem.classList.add("text-primary")
                break;
        }

        if (theme === 'dark' || ((localStorage.getItem("theme") === 'system') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.getElementById('app').classList.add('dark')
            console.log('a');
        } else {
            document.getElementById('app').classList.remove('dark')
        }
    }

});