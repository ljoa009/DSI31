
const cloud = document.getElementById("cloud");
const barraLateral = document.querySelector(".barra-lateral");
const spans = document.querySelectorAll("span");
const palanca = document.querySelector(".switch");
const circulo = document.querySelector(".circulo");
const menu = document.querySelector(".menu");
const main = document.querySelector("main");

menu.addEventListener("click",()=>{
    barraLateral.classList.toggle("max-barra-lateral");
    if(barraLateral.classList.contains("max-barra-lateral")){
        menu.children[0].style.display = "none";
        menu.children[1].style.display = "block";
    }
    else{
        menu.children[0].style.display = "block";
        menu.children[1].style.display = "none";
    }
    if(window.innerWidth<=320){
        barraLateral.classList.add("mini-barra-lateral");
        main.classList.add("min-main");
        spans.forEach((span)=>{
            span.classList.add("oculto");
        })
    }
});

palanca.addEventListener("click",()=>{
    let body = document.body;
    body.classList.toggle("dark-mode");
    body.classList.toggle("");
    circulo.classList.toggle("prendido");
});

cloud.addEventListener("click",()=>{
    barraLateral.classList.toggle("mini-barra-lateral");
    main.classList.toggle("min-main");
    spans.forEach((span)=>{
        span.classList.toggle("oculto");
    });
});

function cargarContenido(link) {
    var iframe = document.getElementById('contenedor');
    iframe.src = link;
    return false;
}

function toggleSubMenu(subMenuId) {
    var subMenus = document.querySelectorAll('.submenu');
    subMenus.forEach(function(subMenu) {
        if (subMenu.id !== subMenuId) {
            subMenu.classList.remove('show');
        }
    });

    var subMenu = document.getElementById(subMenuId);
    subMenu.classList.toggle('show');
}

function cerrarSesion() {
    window.location.href = 'Destruir_sesion.php';
}

function toggleLogoutMenu() {
    var logoutSubMenu = document.getElementById('logoutSubMenu');
    logoutSubMenu.classList.toggle('show');
}